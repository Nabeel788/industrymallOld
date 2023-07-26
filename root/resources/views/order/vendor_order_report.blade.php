<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ORDER RECEIPT</title>
    <style>
        body {
            margin-top: 20px;
            background: #f8f8f8
        }

        tr {
            line-height: 0px;
            border: 2px solid black;
        }

        .table thead th {
            border-bottom: 2px solid black;
        }
    </style>

    <link href="{{ asset('css/test.css') }}" rel="stylesheet">
    <script src="{{ asset('js/test.js') }}"></script>
</head>

<body>
    <br />
    <div class="container">
        <div class="row flex-lg-nowrap">
            <div class="col">
                <div class="row">
                    <div class="col mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="e-profile">
                                    <br />
                                    @include('include.header')
                                    <h3 style="text-align: center;" class="text-uppercase text-decoration-underline">
                                        <u>ORDER RECEIPT</u>
                                    </h3>
                                    <table class="table table-bordered">
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
                                                <th>M.No</th>
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
                                                <tr>
                                                    <td>{{ 1 }}</td>
                                                    <td>{{ $order_detail->product_name }}</td>
                                                    <td>{{ number_format($order_detail->quantity, 2) }}</td>
                                                    <td>{{ $settings->currency . '' . number_format($order_detail->price, 2) }}</td>
                                                    <td>{{ $order_detail->products->model_no }}</td>
                                                    <td>{{ $order_detail->conditionType }}</td>
                                                    <td>{{ $settings->currency . '' . number_format($order_detail->ship_charges, 2) }}</td>
                                                    <td>{{ $settings->currency . '' . number_format($order_detail->imp_charges, 2) }}</td>
                                                    <td>{{ $settings->currency . '' . number_format($order_detail->t_charges, 2) }}</td>
                                                    <td>{{ $settings->currency . '' . number_format($order_detail->oth_charges, 2) }}</td>
                                                    <td>{{ number_format($order_detail->ship_days, 2) }}</td>
                                                    <td>{{ $settings->currency . '' . number_format($order_detail->total, 2) }}</td>
                                                </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="2"><b>Total</b></td>
                                                <td>{{ number_format($order_detail->quantity, 2) }}</td>
                                                <td colspan="3"></td>
                                                <td>{{ $settings->currency . '' . number_format($order_detail->ship_charges, 2) }}
                                                </td>
                                                <td>{{ $settings->currency . '' . number_format($order_detail->imp_charges, 2) }}</td>
                                                <td>{{ $settings->currency . '' . number_format($order_detail->t_charges, 2) }}</td>
                                                <td>{{ $settings->currency . '' . number_format($order_detail->oth_charges, 2) }}</td>
                                                <td></td>
                                                <td>{{ $settings->currency . '' . number_format($order_detail->total, 2) }}</td>
                                            </tr>
                                            <tr>
                                                <td><b>Grand Total</b></td>
                                                <td colspan="10"></td>
                                                <td>{{ $settings->currency . '' . number_format($order_detail->ship_charges + $order_detail->imp_charges + $order_detail->t_charges + $order_detail->oth_charges + $order_detail->total, 2) }}
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
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
