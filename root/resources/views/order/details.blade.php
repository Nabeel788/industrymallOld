<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ORDER RECEIPT</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            margin-top: 20px;
            background: #f8f8f8
            
        }

        tr {
            border:1px solid black;
        }
        .table td, .table th {
    border-color: black !important;
}
        .table thead th tr{
            border-bottom: 1px solid black;
        }
        /* thead tr:nth-child(odd) td{
           background:#ccc;
}
thead tr:nth-child(even) td{
            background:#fff;
} */
        p {
            margin-bottom:0px !important;
     
            /* font-family: Anton; */
 
        }

        .anton{
        font-family: Anton;
        }
        .line {
            margin:5px 0;
            height:2px;
            background:
                repeating-linear-gradient(90deg,rgb(92, 92, 92) 0 10px,#0000 0 12px)
                /*10px red then 2px transparent -> repeat this!*/
       }
       i{
        font-size: 13px !important;
        width:15px;
        height:15px;
       }
       @media print 
{
    .page 
    {
        margin: 0;
        border: initial;
        border-radius: initial;
        width: initial;
        min-height: initial;
        box-shadow: initial;
        background: initial;
        page-break-after: always;
    }
}

        /* .col-5 .col-6 {
            padding-left: 29px;
            margin-bottom: -20px;
        } */
    </style>

    <link href="{{ asset('css/test.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anton">
    <script src="{{ asset('js/test.js') }}"></script>
</head>

<body>
    <div class="container">
        <div class="row flex-lg-nowrap">
            {{-- <div class="col"> --}}
                <div class="row">
                    <div class="col mb-3">
                        <div class="card">
                            <div class="card-body" >
                                <button class="btn btn-primary" onclick="this.style.display='none';window.print()">Print <i
                                    class="fa fa-print"></i></button>
                                    

                                <div class="e-profile">
                                    <br />
                                    @include('include.newheader')
                                    <div class="container">
                                        <div class="row gx-0 justify-content-between" style="margin-top:50px;">

                                        <div class="col-4" style="color:rgb(95, 95, 95);">
                                            <div style="padding:5px;">
                                                    <div style="padding:5px;border: 2px solid rgb(202, 202, 202)">
                                                        <p><b class="anton" style="font-weight: 100">INVOICE TO:&emsp;</b>{{  $order->order_details[0]->vendor->name }}</p>
                                                        {{-- <p><b class="anton" style="font-weight: 100">Attend.&emsp;</b>Accounts Payable Department</p> --}}
                                                        <div class="line"></div>
                                                        <div class="row" style="margin-top:15px;">
                                                            <div class="col-4" style="font-size:11px;">
                                                                {{  $order->order_details[0]->vendor->addres }}
                                                            </div>
                                                            <div class="col-8">
                                                                <p style="font-weight:500;color:black;font-size:13px;"><i class="fa fa-phone" style="padding:2px;font-size:15px!important;"> </i> {{  $order->order_details[0]->vendor->phone }}</p>
                                                                <p style="font-weight:500;color:black;font-size:13px;"><i class="fa fa-mobile" style="padding:2px;font-size:20px!important;"> </i> {{  $order->order_details[0]->vendor->phone }}</p>
                                                                <p style="font-weight:500;color:black;font-size:13px;"><i class="fa fa-envelope" style="padding:2px;font-size:12px!important;"> </i> {{  $order->order_details[0]->vendor->email }}</p>
                                                                <p style="font-weight:500;color:black;font-size:13px;"><i class="fa fa-globe" style="padding:2px;"> </i> {{  $order->city }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="col-4" style="color:rgb(95, 95, 95);">
                                            <div style="padding:5px;">
                                                    <div style="padding:5px;border: 2px solid rgb(202, 202, 202)">
                                                        <p><b class="anton" style="font-weight: 100">SHIP TO:&emsp;</b>{{  $order->order_details[0]->vendor->name }}</p>
                                                        {{-- <p><b class="anton" style="font-weight: 100">Attend.&emsp;</b>Accounts Payable Department</p> --}}
                                                        <div class="line"></div>
                                                        <div class="row" style="margin-top:15px;">
                                                            <div class="col-4" style="font-size:11px;">
                                                                {{  $order->address_01 }}
                                                            </div>
                                                            <div class="col-8">
                                                                <p style="font-weight:500;color:black;font-size:13px;"><i class="fa fa-phone" style="padding:2px;font-size:15px!important;"> </i> {{  $order->phone1 }}</p>
                                                                <p style="font-weight:500;color:black;font-size:13px;"><i class="fa fa-mobile" style="padding:2px;font-size:20px!important;"> </i> {{  $order->phone2 }}</p>
                                                                <p style="font-weight:500;color:black;font-size:13px;"><i class="fa fa-envelope" style="padding:2px;font-size:12px!important;"> </i> {{  $order->email }}</p>
                                                                <p style="font-weight:500;color:black;font-size:13px;"><i class="fa fa-globe" style="padding:2px;"> </i> {{  $order->city }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                            
                                            <div class="col-4">
                                                <div class="row" style="color:grey;">
                                                    <div class="col-sm-6"><p style="font-size:15px;"><b style="font-weight: 500;">Invoice Date</b></p></div>:<div class="col-sm-5"><p>{{ date("d/m/y", strtotime($order->date) )}}</p></div>
                                                   
                                                    <div class="col-sm-6"><p style="font-size:15px;"><b style="font-weight: 500;">Payment Due By</b></p></div>:<div class="col-sm-5"><p>{{ date("d/m/y", strtotime($order->shipping) )}}</p></div>
                                                   
                                                    <div class="col-sm-6"><p style="font-size:15px;"><b style="font-weight: 500;">Invoice#</b></p></div>:<div class="col-sm-5"><p>{{ $order->order_details[0]->order_id }}-IM</p></div>
                                                   
                                                    <div class="col-sm-6"><p style="font-size:15px;"><b style="font-weight: 500;">Customer ID</b></p></div>:<div class="col-sm-5"><p>{{ $order->order_details[0]->customer_id }}</p></div>
                                                   
                                                    <div class="col-sm-6"><p style="font-size:15px;"><b style="font-weight: 500;">Purchase Order#</b></p></div>:<div class="col-sm-5"><p>{{ $order->id }}</p></div>
                                                   
                                                    <div class="col-sm-6"><p style="font-size:15px;"><b style="font-weight: 500;">NTN#</b></p></div>:<div class="col-sm-5"><p>{{  $order->order_details[0]->vendor->ntn }}</p></div>
                                                   
                                                    <div class="col-sm-6"><p style="font-size:15px;"><b style="font-weight: 500;">Sale Tax#</b></p></div>:<div class="col-sm-5"><p>{{  $order->order_details[0]->vendor->strn }}</p></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><br>
                                    <div class="line"></div>
                                    <br>
                                    
                               
                                {{-- <h3 style="text-align: center;" class="text-uppercase text-decoration-underline">
                                        <u>ORDER RECEIPT</u>
                                    </h3> --}}
                                <table class="table">
                                    <thead>
                                        <tr style="color:white!important;background-color:orangered!important;background:orangered!important;">
                                            <td>Sr#</td>
                                            <td>Model No.</td>
                                            <td>Product Name:</td>
                                            <td>HS Code</td>
                                            <td>Qty</td>
                                            {{-- <td>Tax Rate</td> --}}
                                            <td>Tax Charges</td>
                                            <td>Import Charges</td>
                                            <td>Shipping Charges</td>
                                            <td>Unit Price</td>
                                            <td>TOTAL</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $tQty = 0;
                                            $tPrice = 0;
                                            $shipping_charges = 0;
                                            $imp_charges = 0;
                                            $tax_charges = 0;
                                            $other_charges = 0;
                                            $color=1;
                                        @endphp
                                        @foreach ($order->order_details as $key => $value)
                                            @if($color%2==0)
                                        <tr style="background:#eeeeee">
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $value->products->model_no }}</td>
                                                <td>{{ $value->product_name }}</td>
                                                <td>{{ $value->products->sku }}</td>
                                                <td>{{ $value->quantity }}</td>
                                                <td>{{ $settings->currency . '' . number_format($value->t_charges, 2)  }}</td>
                                                <td>{{ $settings->currency . '' . number_format($value->imp_charges, 2)  }}</td>
                                                <td>{{ $settings->currency . '' . number_format($value->ship_charges, 2)  }}</td>
                                                <td>{{ $settings->currency . '' . number_format($value->price, 2)  }}</td>
                                                <td>{{ $settings->currency . '' . number_format($value->total, 2)  }}</td>
                                                
                                                {{-- <td>{{ $value->conditionType }}</td>
                                                
                                                <td>{{ $value->oth_charges }}</td>
                                                <td>{{ $value->ship_days }}</td> --}}
                                            </tr>
                                            @else
                                            <tr style="background:#fff">
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $value->products->model_no }}</td>
                                                <td>{{ $value->product_name }}</td>
                                                <td>{{ $value->products->sku }}</td>
                                                <td>{{ $value->quantity }}</td>
                                                <td>{{ $settings->currency . '' . number_format($value->t_charges, 2)  }}</td>
                                                <td>{{ $settings->currency . '' . number_format($value->imp_charges, 2)  }}</td>
                                                <td>{{ $settings->currency . '' . number_format($value->ship_charges, 2)  }}</td>
                                                <td>{{ $settings->currency . '' . number_format($value->price, 2)  }}</td>
                                                <td>{{ $settings->currency . '' . number_format($value->total, 2)  }}</td>
                                                
                                                {{-- <td>{{ $value->conditionType }}</td>
                                                
                                                <td>{{ $value->oth_charges }}</td>
                                                <td>{{ $value->ship_days }}</td> --}}
                                            </tr>
                                            @endif
                                            @php
                                                $tQty += $value->quantity;
                                                $tPrice += $value->total;
                                                $shipping_charges += $value->ship_charges;
                                                $imp_charges += $value->imp_charges;
                                                $tax_charges += $value->t_charges;
                                                $other_charges += $value->oth_charges;
                                                $color = $color+1;
                                            @endphp
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="row">
                                <div class="col-3">
                                    <p class="anton" style="color:rgb(75, 75, 75);">Thank you for your order</p>
                                </div>
                                <div class="col-6">

                                </div>
                                <div class="col-3 " >
                                    <div class="row">
                                        <div class="col-sm-6 anton" style="border-bottom: 1px solid black;"><p style="font-size:15px;"><b style="font-weight: 300;">Total Charges</b></p></div>:<div class="col-sm-5" style="border-bottom: 1px solid black;"><p>{{ $settings->currency . '' . number_format($tPrice, 2)  }}</p></div>
                                       
                                        <div class="col-sm-6 anton"><p style="font-size:15px;"><b style="font-weight: 300;">Shipping Charges</b></p></div>:<div class="col-sm-5"><p>{{ $settings->currency . '' . number_format($shipping_charges, 2)  }}</p></div>
                                       
                                        {{-- <div class="col-sm-6 anton"><p style="font-size:15px;"><b style="font-weight: 300;">Sale Tax Rate</b></p></div>:<div class="col-sm-5"><p>{{ number_format(0, 2)  }}%</p></div> --}}
                                       
                                        <div class="col-sm-6 anton"><p style="font-size:15px;"><b style="font-weight: 300;">Sale Tax Charges</b></p></div>:<div class="col-sm-5"><p>{{ $settings->currency . '' . number_format($tax_charges, 2)  }}</p></div>
                                       
                                        <div class="col-sm-6 anton"><p style="font-size:15px;"><b style="font-weight: 300;">Import Charges</b></p></div>:<div class="col-sm-5"><p>{{ $settings->currency . '' . number_format($imp_charges, 2)  }}</p></div>
                                       
                                        {{-- <div class="col-sm-6 anton"><p style="font-size:15px;"><b style="font-weight: 300;">NTN#</b></p></div>:<div class="col-sm-5"><p>1234567</p></div> --}}
                                       
                                        <div class="col-sm-6 anton" style="color:white;background-color:grey;"><p style="font-size:19px;"><b style="font-weight: 300;">Grand Total</b></p></div><div class="col-sm-5 anton" style="color:white;background-color:grey;"><p style="font-size:19px;"><b style="font-weight: 100;">{{ $settings->currency . '' . number_format($imp_charges+$tax_charges+0+$shipping_charges+$tPrice, 2)  }}</b></p></div>
                                    </div>
                                </div>                           
                                </div>
                                @include('include.terms')
                                @include('include.newfooter')
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                              
                                {{-- <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td><b>Order#</b></td>
                                            <td>{{ $order->id }}</td>
                                            <td><b>Order Date</b></td>
                                            <td>{{ date('d/m/Y', strtotime($order->date)) }}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Name</b></td>
                                            <td>{{ $order->first_name . '' . $order->last_name }}</td>
                                            <td><b>Email</b></td>
                                            <td>{{ $order->email }}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Company</b></td>
                                            <td>{{ $order->company }}</td>
                                            <td><b>Shipping</b></td>
                                            <td>{{ date('d/m/Y', strtotime($order->shipping)) }}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Country</b></td>
                                            <td>{{ $order->country }}</td>
                                            <td><b>State</b></td>
                                            <td>{{ $order->state }}</td>
                                        </tr>
                                        <tr>
                                            <td><b>City</b></td>
                                            <td colspan="3">{{ $order->city }}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Phone 1</b></td>
                                            <td>{{ $order->phone1 }}</td>
                                            <td><b>Phone 2</b></td>
                                            <td>{{ $order->phone2 }}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Address 1</b></td>
                                            <td>{{ $order->address_01 }}</td>
                                            <td><b>Address 2</b></td>
                                            <td>{{ $order->address_02 }}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Comment</b></td>
                                            <td>{{ $order->comments }}</td>
                                            <td><b>Status</b></td>
                                            <td style="color: red;font-weight: bold;">{{ $order->status }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <h3><u><i>Product Details</i></u></h3>
                                <table class="table table-bordered" id="Product-table">
                                    <thead>
                                        <tr>
                                            <th>Sr.No</th>
                                            <th>Product Name</th>
                                            <th>Qty</th>
                                            <th>Price</th>
                                            <th>Model</th>
                                            <th>Condition</th>
                                            <th>Ship.Ch</th>
                                            <th>Imp.Ch</th>
                                            <th>Tax.Ch</th>
                                            <th>Other.Ch</th>
                                            <th>Ship.Days</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $tQty = 0;
                                            $tPrice = 0;
                                            $shipping_charges = 0;
                                            $imp_charges = 0;
                                            $tax_charges = 0;
                                            $other_charges = 0;
                                        @endphp
                                        @foreach ($order->order_details as $key => $value)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $value->product_name }}</td>
                                                <td>{{ $value->quantity }}</td>
                                                <td>{{ $value->price }}</td>
                                                <td>{{ $value->products->model_no }}</td>
                                                <td>{{ $value->conditionType }}</td>
                                                <td>{{ $value->ship_charges }}</td>
                                                <td>{{ $value->imp_charges }}</td>
                                                <td>{{ $value->t_charges }}</td>
                                                <td>{{ $value->oth_charges }}</td>
                                                <td>{{ $value->ship_days }}</td>
                                                <td>{{ $value->total }}</td>
                                            </tr>
                                            @php
                                                $tQty += $value->quantity;
                                                $tPrice += $value->total;
                                                $shipping_charges += $value->ship_charges;
                                                $imp_charges += $value->imp_charges;
                                                $tax_charges += $value->t_charges;
                                                $other_charges += $value->oth_charges;
                                            @endphp
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="3"><b>Total</b></td>
                                            <td>{{ number_format($tQty, 2) }}</td>
                                            <td colspan="2"></td>
                                            <td>{{ $settings->currency . '' . number_format($shipping_charges, 2) }}
                                            </td>
                                            <td>{{ $settings->currency . '' . number_format($imp_charges, 2) }}</td>
                                            <td>{{ $settings->currency . '' . number_format($tax_charges, 2) }}</td>
                                            <td>{{ $settings->currency . '' . number_format($other_charges, 2) }}</td>
                                            <td></td>
                                            <td>{{ $settings->currency . '' . number_format($tPrice, 2) }}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Grand Total</b></td>
                                            <td colspan="10"></td>
                                            <td>{{ $settings->currency . '' . number_format($shipping_charges + $imp_charges + $tax_charges + $other_charges + $tPrice, 2) }}
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
{{-- <script>
    $(document).ready(function()
{
    $("tr:even").css("background-color", "#eae7e7");
});
</script> --}}



<script lang="javascript">
function printdiv(printpage) {
    alert(1);
    var headstr = "<html><head><title></title></head><body>";
    var footstr = "</body>";
    var newstr = document.all.item(printpage).innerHTML;
    var oldstr = document.body.innerHTML;
    document.body.innerHTML = headstr + newstr + footstr;
    window.print();
    document.body.innerHTML = oldstr;
    return false;
}
</script>