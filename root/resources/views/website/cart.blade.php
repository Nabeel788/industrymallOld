<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Industry Mall | Cart</title>

    <meta name="keywords" content="Marketplace ecommerce responsive HTML5 Template" />
    <meta name="description" content="Wolmart is powerful marketplace &amp; ecommerce responsive Html5 Template.">
    <meta name="author" content="D-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ URL::asset('website-assets/images/icons/favicon.png') }}">

    <!-- WebFont.js -->
    <script>
        WebFontConfig = {
            google: { families: ['Poppins:400,500,600,700'] }
        };
        ( function ( d ) {
            var wf = d.createElement( 'script' ), s = d.scripts[0];
            wf.src = "{{ URL::asset('website-assets/js/webfont.js') }}";
            wf.async = true;
            s.parentNode.insertBefore( wf, s );
        } )( document );
    </script>
    {{-- <script src="{{ URL::asset('website-assets/js/validations.js') }}"></script> --}}
    <link rel="preload" href="{{ URL::asset('website-assets/vendor/fontawesome-free/webfonts/fa-regular-400.woff2') }}" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="{{ URL::asset('website-assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff2') }}" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="{{ URL::asset('website-assets/vendor/fontawesome-free/webfonts/fa-brands-400.woff2') }}" as="font" type="font/woff2"
            crossorigin="anonymous">
    <link rel="preload" href="{{ URL::asset('website-assets/fonts/wolmart87d5.woff') }}?png09e" as="font" type="font/woff" crossorigin="anonymous">

    <!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('website-assets/vendor/fontawesome-free/css/all.min.css') }}">

    <!-- Plugin CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('website-assets/vendor/magnific-popup/magnific-popup.min.css') }}">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('website-assets/css/style.min.css') }}">

    <!-- Toast Notification -->
    <link rel="stylesheet" href="{{ URL::asset('website-assets/css/toastr.min.css') }}">
</head>

<body>
    <div class="page-wrapper">
        <h1 class="d-none">Wolmart - Responsive Marketplace HTML Template</h1>

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
                        <div class="col-lg-8 pr-lg-4 mb-6">
                            <table class="shop-table cart-table">
                                <thead>
                                    <tr>
                                        <th class="product-name"><span>Product</span></th>
                                        <th></th>
                                        <th class="product-price"><span>Price</span></th>
                                        <th class="product-quantity"><span>Quantity</span></th>
                                        <th class="product-subtotal"><span>Subtotal</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cartData as $value)
                                    <tr>
                                        <td class="product-thumbnail">
                                            <div class="p-relative">
                                                <form action="{{ URL::to('trash-cart/'.$value->id) }}" method="get">
                                                    @csrf
                                                    <a href="{{ URL::to('single-product/'.$value->id.'/'.$value->attributes->slug) }}">
                                                        <figure>
                                                            <img src="{{ $value->attributes->image }}" alt="product"
                                                                width="300" height="338">
                                                        </figure>
                                                    </a>
                                                    <button type="submit" class="btn btn-close"><i
                                                            class="fas fa-times"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                        <td class="product-name">
                                            <a href="{{ URL::to('single-product/'.$value->id.'/'.$value->attributes->slug) }}">
                                                {{ $value->name }}
                                            </a>
                                        </td>
                                        <td class="product-price"><span class="amount">{{ $settings->currency.''.$value->price }}</span></td>
                                        <td class="product-quantity">
                                            <form action="{{ URL::to('update-cart/'.$value->id) }}" method="get">
                                                @csrf
                                                <div class="input-group">
                                                    <input class="quantity form-control" type="number" min="1" max="100000" value="{{ $value->quantity }}">
                                                    <button type="submit" id="change_to" name="change_to" value="up" class="quantity-plus w-icon-plus"></button>
                                                    <button type="submit" id="change_to" name="change_to" value="down" class="quantity-minus w-icon-minus"></button>
                                                </div>
                                            </form>
                                        </td>
                                        <td class="product-subtotal">
                                            <span class="amount">{{ $settings->currency.''.number_format($value->price*$value->quantity,2) }}</span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <div class="cart-action mb-6">
                                <a href="{{ URL::to('/') }}" class="btn btn-dark btn-rounded btn-icon-left btn-shopping mr-auto"><i class="w-icon-long-arrow-left"></i>Continue Shopping</a>
                                <a href="{{ URL::to('/clear-cart') }}" class="btn btn-rounded btn-default btn-clear" name="clear_cart">Clear Cart</a> 
                                <button type="submit" class="btn btn-rounded btn-update disabled" name="update_cart" value="Update Cart">Update Cart</button>
                            </div>

                            {{-- <form class="coupon">
                                <h5 class="title coupon-title font-weight-bold text-uppercase">Coupon Discount</h5>
                                <input type="text" class="form-control mb-4" placeholder="Enter coupon code here..." required />
                                <button class="btn btn-dark btn-outline btn-rounded">Apply Coupon</button>
                            </form> --}}
                        </div>
                        <div class="col-lg-4 sticky-sidebar-wrapper">
                            <div class="sticky-sidebar">
                                <div class="cart-summary mb-4">
                                    <h3 class="cart-title text-uppercase">Cart Totals</h3>
                                    <div class="cart-subtotal d-flex align-items-center justify-content-between">
                                        <label class="ls-25">Subtotal</label>
                                        <span>{{ $settings->currency.''.$cartTotal }}</span>
                                    </div>

                                    {{-- <hr class="divider"> --}}

                                    {{-- <ul class="shipping-methods mb-2">
                                        <li>
                                            <label
                                                class="shipping-title text-dark font-weight-bold">Shipping</label>
                                        </li>
                                        <li>
                                            <div class="custom-radio">
                                                <input type="radio" id="free-shipping" class="custom-control-input"
                                                    name="shipping">
                                                <label for="free-shipping"
                                                    class="custom-control-label color-dark">Free
                                                    Shipping</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-radio">
                                                <input type="radio" id="local-pickup" class="custom-control-input"
                                                    name="shipping">
                                                <label for="local-pickup"
                                                    class="custom-control-label color-dark">Local
                                                    Pickup</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-radio">
                                                <input type="radio" id="flat-rate" class="custom-control-input"
                                                    name="shipping">
                                                <label for="flat-rate" class="custom-control-label color-dark">Flat
                                                    rate:
                                                    $5.00</label>
                                            </div>
                                        </li>
                                    </ul> --}}

                                    <hr class="divider mb-6">
                                    <div class="order-total d-flex justify-content-between align-items-center">
                                        <label>Total</label>
                                        <span class="ls-50">{{ $settings->currency.''.$cartTotal }}</span>
                                    </div>
                                    <a href="{{ URL::to('/checkout') }}"
                                        class="btn btn-block btn-dark btn-icon-right btn-rounded  btn-checkout">
                                        Proceed to checkout<i class="w-icon-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of PageContent -->
        </main>
        <!-- End of Main -->

       @include('components.footer')

    </div>
    <!-- End of Page Wrapper -->

    @include('components.sticky-footer')

    <!-- Plugin JS File -->
    <script src="{{ URL::asset('website-assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/vendor/sticky/sticky.js') }}"></script>
    <script src="{{ URL::asset('website-assets/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/js/main.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/js/scroll.js') }}"></script>
    
    <!-- Toast Notifications -->
    <script src="{{ URL::asset('website-assets/js/toastr.min.js') }}"></script>
    {!! Toastr::message() !!}
</body>

</html>