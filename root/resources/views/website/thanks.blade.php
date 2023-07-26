@php
use Cart as Cart;
$tCartQty = Cart::getContent()->count();
$cart = Cart::getContent();
$totalPrice = Cart::getTotal();

@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Industry Mall | Thanks</title>

    <meta name="keywords" content="Marketplace ecommerce responsive HTML5 Template" />
    <meta name="description" content="Wolmart is powerful marketplace &amp; ecommerce responsive Html5 Template.">
    <meta name="author" content="D-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ URL::asset('website-assets/images/icons/favicon.png') }}">

    <!-- WebFont.js -->
    <script>
        WebFontConfig = {
            google: {
                families: ['Poppins:400,500,600,700']
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = "{{ URL::asset('website-assets/js/webfont.js') }}";
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>
    <script src="{{ URL::asset('website-assets/js/validations.js') }}"></script>
    <link rel="preload" href="{{ URL::asset('website-assets/vendor/fontawesome-free/webfonts/fa-regular-400.woff2') }}"
        as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="{{ URL::asset('website-assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff2') }}"
        as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="{{ URL::asset('website-assets/vendor/fontawesome-free/webfonts/fa-brands-400.woff2') }}"
        as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="{{ URL::asset('website-assets/fonts/wolmart87d5.woff') }}?png09e" as="font"
        type="font/woff" crossorigin="anonymous">

    <!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css"
        href="{{ URL::asset('website-assets/vendor/fontawesome-free/css/all.min.css') }}">

    <!-- Plugin CSS -->
    <link rel="stylesheet" type="text/css"
        href="{{ URL::asset('website-assets/vendor/magnific-popup/magnific-popup.min.css') }}">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('website-assets/css/style.min.css') }}">
    <style>
        html {
            scroll-behavior: smooth;
        }

        .invalid-feedback1 {
            color: red;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="page-wrapper">
        <h1 class="d-none">Order Complete</h1>

        @include('components.header')

        <!-- Start of Main -->
        <main class="main cart">
            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb shop-breadcrumb bb-no">
                        <li class="active"><a href="{{ URL::to('/') }}">Home</a></li>
                        <li><a href="{{ URL::to('/cart') }}">Shopping Cart</a></li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of PageContent -->
            <div class="page-content">
                <div class="container">
                    <div class="row gutter-lg mb-10">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <h4 class="text-left">Order ID: {{ $order->id }}</h4>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <h4 class="text-right">Order Date: {{ date('d-m-Y', strtotime($order->date)) }}</h4>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 pr-lg-4 mb-6">
                            <table class="shop-table cart-table">
                                <thead>
                                    <tr align="left">
                                        <th class="product-name"><span>Product</span></th>
                                        <th class="product-price"><span>Price</span></th>
                                        <th class="product-quantity"><span>Quantity</span></th>
                                        <th class="product-quantity"><span>Shipping</span></th>
                                        <th class="product-subtotal"><span>Subtotal</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $total =0 @endphp
                                    @foreach ($orderDetails as $value)
                                        <tr align="left">
                                            <td class="product-thumbnail">{{ $value->product_name }}</td>
                                            <td class="product-thumbnail">{{ $settings->currency . '' . $value->price }}
                                            </td>
                                            <td class="product-thumbnail">{{ $value->quantity }}</td>
                                            <td class="product-thumbnail">{{ $value->ship_charges }}</td>
                                            <td class="product-thumbnail">
                                                {{ $settings->currency . '' . ($value->quantity * $value->price)+$value->ship_charges }}</td>
                                        </tr>
                                        @php $total+=($value->quantity*$value->price)+$value->ship_charges; @endphp
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td><span style="font-size: 20px;font-weight: bold;color:black;">Total</span>
                                        </td>
                                        <td colspan="3"></td>
                                        <td>&nbsp;&nbsp;<span
                                                style="font-size: 20px;font-weight: bold;color:black;">{{ $settings->currency . '' . $total }}</span>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                            <a href="{{ URL::to('/') }}" class="btn btn-primary d-block m-auto">Continuee Shopping</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of PageContent -->
        </main>
        <!-- End of Main -->
        @include('components.footer')
    </div>
    @include('components.sticky-footer')

    <!-- Plugin JS File -->
    <script src="{{ URL::asset('website-assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/vendor/sticky/sticky.js') }}"></script>
    <script src="{{ URL::asset('website-assets/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/js/main.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/js/scroll.js') }}"></script>
</body>

</html>
