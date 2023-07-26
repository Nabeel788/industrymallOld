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

    <title>Industry Mall | Checkout</title>

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
    <script src="{{ URL::asset('website-assets/js/validations.js') }}"></script>
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
    <style>
        html {
           scroll-behavior: smooth;
        }
        .invalid-feedback1{
            color: red;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="page-wrapper">
        <h1 class="d-none">Checkout</h1>

        @include('components.header')

        <!-- Start of Main -->
        <main class="main checkout">
            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb shop-breadcrumb bb-no">
                        <li class="passed"><a href="{{ URL::to('/cart') }}">Shopping Cart</a></li>
                        <li class="active"><a href="{{ URL::to('/checkout') }}">Checkout</a></li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->


            <!-- Start of PageContent -->
            <div class="page-content">
                <div class="container">
                    <form class="form checkout-form" action="{{ URL::to('order-submit') }}" method="post">
                        @csrf
                        <div class="row mb-9">
                            <div class="col-lg-7 pr-lg-4 mb-4">
                                <h3 class="title billing-title text-uppercase ls-10 pt-1 pb-3 mb-0">
                                    Billing Details
                                </h3>
                                <div class="row gutter-sm">
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>First name *</label>
                                            <input type="text" class="form-control form-control-md @error('first_name') is-invalid @enderror" name="first_name"
                                                required>
                                            @error('first_name')
                                                <span class="invalid-feedback1">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Last name *</label>
                                            <input type="text" class="form-control form-control-md @error('first_name') is-invalid @enderror" name="last_name"
                                                required>
                                            @error('last_name')
                                                <span class="invalid-feedback1">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Company name (optional)</label>
                                    <input type="text" class="form-control form-control-md" name="company-name">
                                </div>
                                <div class="form-group">
                                    <label>Country / Region *</label>
                                    <div class="select-box">
                                        {!! Form::select('country',$countriesList,null,['id'=>'country','class'=>'form-control form-control-md']) !!}
                                        {{-- <select name="country" class="form-control form-control-md @error('country') is-invalid @enderror">
                                            <option value="default" selected="selected">United States
                                                (US)
                                            </option>
                                            <option value="uk">United Kingdom (UK)</option>
                                            <option value="us">United States</option>
                                            <option value="fr">France</option>
                                            <option value="aus">Australia</option>
                                        </select> --}}
                                        @error('country')
                                            <span class="invalid-feedback1">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Street address *</label>
                                    <input type="text" placeholder="House number and street name"
                                        class="form-control form-control-md mb-2 @error('address_01') is-invalid @enderror" name="address_01" required>
                                    <input type="text" placeholder="Apartment, suite, unit, etc. (optional)"
                                        class="form-control form-control-md" name="street-address-2" required>
                                    @error('address_01')
                                        <span class="invalid-feedback1">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="row gutter-sm">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Town / City *</label>
                                            <input type="text" class="form-control form-control-md @error('city') is-invalid @enderror" name="city" required>
                                            @error('city')
                                                <span class="invalid-feedback1">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Postal Code / ZIP *</label>
                                            <input type="text" class="form-control form-control-md @error('postal_code') is-invalid @enderror" name="postal_code" required>
                                            @error('postal_code')
                                                <span class="invalid-feedback1">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>State *</label>
                                            <div class="select-box">
                                                <select name="state" class="form-control form-control-md @error('state') is-invalid @enderror">
                                                    <option value="default" selected="selected">California</option>
                                                    <option value="uk">United Kingdom (UK)</option>
                                                    <option value="us">United States</option>
                                                    <option value="fr">France</option>
                                                    <option value="aus">Australia</option>
                                                </select>
                                                @error('state')
                                                    <span class="invalid-feedback1">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Email address *</label>
                                            <input type="email" class="form-control form-control-md @error('email') is-invalid @enderror" name="email" required>
                                            @error('email')
                                                <span class="invalid-feedback1">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group mb-7">
                                            <label>Phone 1 *</label>
                                            <input type="text" class="form-control form-control-md @error('phone1') is-invalid @enderror" name="phone1" required>
                                            @error('phone1')
                                                <span class="invalid-feedback1">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-7">
                                            <label>Phone 2 *</label>
                                            <input type="text" class="form-control form-control-md @error('phone2') is-invalid @enderror" name="phone2" required>
                                            @error('phone2')
                                                <span class="invalid-feedback1">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mt-3">
                                    <label for="order-notes">Order notes (optional)</label>
                                    <textarea class="form-control mb-0 @error('comments') is-invalid @enderror" id="order-notes" name="order-notes" cols="30"
                                        rows="4"
                                        placeholder="Notes about your order, e.g special notes for delivery"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-5 mb-4 sticky-sidebar-wrapper">
                                <div class="order-summary-wrapper sticky-sidebar">
                                    <h3 class="title text-uppercase ls-10">Your Order</h3>
                                    <div class="order-summary">
                                        <table class="order-table">
                                            <thead>
                                                <tr>
                                                    <th colspan="2">
                                                        <b>Product</b>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @php
                                                $shipping = 0;
                                            @endphp
                                                @foreach($cart as $value)
                                               
                                                <tr class="bb-no">
                                                    <td class="product-name">{{ $value->name }}<i
                                                            class="fas fa-times"></i> <span
                                                            class="product-quantity">{{ $value->quantity }}</span></td>
                                                    <td class="product-total">{{ $settings->currency.''.$value->quantity*$value->attributes->amount_new }}</td>
                                                </tr>
                                            @php
                                                $shipping = $shipping+$value->attributes->ship_charges;
                                            @endphp
                                                @endforeach
                                                <tr class="cart-subtotal bb-no">
                                                    <td>
                                                        <b>Subtotal</b>
                                                    </td>
                                                    <td>
                                                        <b>{{ $settings->currency.''.$totalPrice }}</b>
                                                    </td>
                                                </tr>
                                                <tr class="cart-subtotal bb-no">
                                                    <td>
                                                        <b>Shipping</b>
                                                    </td>
                                                    <td>
                                                        <b>{{ $settings->currency.''.$shipping }}</b>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr class="order-total" style="border-top: 1px solid gainsboro;">
                                                    <th>
                                                        <b>Total</b>
                                                    </th>
                                                    <td>
                                                        <b>{{ $settings->currency.''.($totalPrice+$shipping) }}</b>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>

                                        <div class="payment-methods" id="payment_method">
                                            <h4 class="title font-weight-bold ls-25 pb-0 mb-1">Payment Methods</h4>
                                            <div class="accordion payment-accordion">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a href="#cash-on-delivery" class="collapse">Direct Bank Transfor</a>
                                                    </div>
                                                    <div id="cash-on-delivery" class="card-body expanded">
                                                        <p class="mb-0">
                                                            Make your payment directly into our bank account. 
                                                            Please use your Order ID as the payment reference. 
                                                            Your order will not be shipped until the funds have cleared in our account.
                                                        </p>
                                                    </div>
                                                </div>
                                                {{-- <div class="card">
                                                    <div class="card-header">
                                                        <a href="#payment" class="expand">Check Payments</a>
                                                    </div>
                                                    <div id="payment" class="card-body collapsed">
                                                        <p class="mb-0">
                                                            Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a href="#delivery" class="expand">Cash on delivery</a>
                                                    </div>
                                                    <div id="delivery" class="card-body collapsed">
                                                        <p class="mb-0">
                                                            Pay with cash upon delivery.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="card p-relative">
                                                    <div class="card-header">
                                                        <a href="#paypal" class="expand">Paypal</a>
                                                    </div>
                                                    <a href="https://www.paypal.com/us/webapps/mpp/paypal-popup" class="text-primary paypal-que" 
                                                        onclick="javascript:window.open('https://www.paypal.com/us/webapps/mpp/paypal-popup','WIPaypal',
                                                        'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); 
                                                        return false;">What is PayPal?
                                                    </a>
                                                    <div id="paypal" class="card-body collapsed">
                                                        <p class="mb-0">
                                                            Pay via PayPal, you can pay with your credit cart if you
                                                            don't have a PayPal account.
                                                        </p>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>

                                        <div class="form-group place-order pt-6">
                                            <button type="submit" class="btn btn-dark btn-block btn-rounded">Place Order</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
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
</body>

</html>