<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\ProductContact;
use App\Models\Stock;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Auth::User()->role == 'Admin') {
            $totalOrders = Order::count();
            $PendingOrders = Order::where('status', '!=', 'Your order has been delivered')->count();
            $CompleteOrders = Order::where('status', '=', 'Your order has been delivered')->count();
            $stock = Stock::with('user:id,name')
                ->with('product:id,name')
                ->selectRaw("biller_id,pro_id,sum(qty_in) as qtyin, sum(qty_out) as qtyout")
                ->groupBy('pro_id')
                ->get();

            $totalOutOfStockItems = 0;
            foreach ($stock as $value) {
                if (($value->qtyin - $value->qtyout) <= 0) {
                    $totalOutOfStockItems++;
                }
            }
            // return  $totalOutOfStockItems;
            $totalVendors = User::where('role', 'Vendor')->count();
            $totalProductQueries = ProductContact::count();
            $totalSale = Stock::whereType('SALE')->sum('total');

            return view(
                'home',
                compact(
                    'totalOrders',
                    'PendingOrders',
                    'CompleteOrders',
                    'totalOutOfStockItems',
                    'totalVendors',
                    'totalProductQueries',
                    'totalSale'
                )
            );
        } else {
            $totalOrders = OrderDetails::where('vendor_id', Auth::User()->id)->count();
            $PendingOrders = OrderDetails::join('orders','orders.id','=','order_details.order_id')
            ->where('order_details.vendor_id',Auth::User()->id)
            ->where('orders.status','!=','Your order has been delivered')->count();

            $CompleteOrders = OrderDetails::join('orders','orders.id','=','order_details.order_id')
            ->where('order_details.vendor_id',Auth::User()->id)
            ->where('orders.status','Your order has been delivered')->count();

            $stock = Stock::with('user:id,name')
                ->with('product:id,name')
                ->selectRaw("biller_id,pro_id,sum(qty_in) as qtyin, sum(qty_out) as qtyout")
                ->where('biller_id', Auth::User()->id)
                ->groupBy('pro_id')
                ->get();

            $totalOutOfStockItems = 0;
            foreach ($stock as $value) {
                if (($value->qtyin - $value->qtyout) <= 0) {
                    $totalOutOfStockItems++;
                }
            }

            $totalProductQueries = ProductContact::where('vendor_id', Auth::User()->id)->count();
            $totalSale = Stock::where('biller_id', Auth::User()->id)
                ->whereType('SALE')
                ->sum('total');


            return view(
                'vendor_home',
                compact(
                    'totalOrders',
                    'PendingOrders',
                    'CompleteOrders',
                    'totalOutOfStockItems',
                    'totalProductQueries',
                    'totalSale'
                )
            );
        }
    }

    public function TotalVendors()
    {
        $Vendors = User::select('id','name', 'company', 'phone1', 'email', 'address1', 'rol')->where('role', 'Vendor')->get();
        return view('dashboard-home.vendors_list', compact('Vendors'));
    }

    public function TotalOrders()
    {
        if (Auth::User()->role == 'Admin') {
            $TotalOrders = Order::with('order_details')->with('customer')->get();
            return view('dashboard-home.total_orders', compact('TotalOrders'));
        } else {
            $TotalOrders = Order::with(['order_details' => function ($query) {
                $query->where('vendor_id', Auth::User()->id);
            }])->with('customer')->get();
            return view('vendor-home.total_orders', compact('TotalOrders'));
        }
    }

    public function TotalPendingOrders()
    {
        if (Auth::User()->role == 'Admin') {
         $PendingOrders = Order::with('order_details')
                ->with('customer')
                ->where('status', '!=', 'Your order has been delivered')
                ->get();
            return view('dashboard-home.pending_orders', compact('PendingOrders'));
        } else {
            $PendingOrders = Order::with(['order_details' => function ($query) {
                $query->where('vendor_id', Auth::User()->id);
            }])
                ->with('customer')
                ->where('status', '!=', 'Your order has been delivered')
                ->get();
            return view('vendor-home.pending_orders', compact('PendingOrders'));
        }
    }

    public function TotalCompleteOrders()
    {
        if (Auth::User()->role == 'Admin') {
           $CompleteOrders = Order::with('order_details')
                ->with('customer')
                ->where('status', 'Your order has been delivered')
                ->get();
            return view('dashboard-home.complete_orders', compact('CompleteOrders'));
        } else {
            $CompleteOrders = Order::with(['order_details' => function ($query) {
                $query->where('vendor_id', Auth::User()->id);
            }])
                ->with('customer')
                ->where('status', 'Your order has been delivered')
                ->get();
            return view('vendor-home.complete_orders', compact('CompleteOrders'));
        }
    }

    public function TotalProductQueries()
    {
        if (Auth::User()->role == 'Admin') {
            $ProductQueries = ProductContact::with('vendor:id,name')->orderBy('id', 'desc')->get();
            return view('dashboard-home.product_queries', compact('ProductQueries'));
        } else {
            $ProductQueries = ProductContact::with('vendor:id,name, email')
                ->where('vendor_id', Auth::User()->id)
                ->orderBy('id', 'desc')
                ->get();
            return view('vendor-home.product_queries', compact('ProductQueries'));
        }
    }

    public function OutOfStockProductsList()
    {
        if (Auth::user()->role == 'Admin') {
        $outOfStockItems = Stock::with('user:id,name')
        ->with('product:id,name,model_no') // Add 'model_number' to fetch 'Model Number'
        ->selectRaw("biller_id,pro_id,sum(qty_in) as qtyin, sum(qty_out) as qtyout")
        ->where('biller_id', Auth::user()->id)
        ->groupBy('pro_id')
        ->get();
    


    return view('dashboard-home.out_of_stock_items', compact('outOfStockItems'));
} else {
    $outOfStockItems = Stock::with('product:id,name,model_no') // Add 'model_number' to fetch 'Model Number'
        ->selectRaw("biller_id,pro_id,sum(qty_in) as qtyin, sum(qty_out) as qtyout")
        ->where('biller_id', Auth::user()->id)
        ->groupBy('pro_id')
        ->get();

    return view('vendor-home.out_of_stock_items', compact('outOfStockItems'));
}
    }
}
