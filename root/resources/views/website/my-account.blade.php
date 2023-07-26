@php
use Carbon\Carbon;
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>My Account</title>

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
    {{-- <script src="{{ URL::asset('website-assets/js/validations.js') }}"></script> --}}
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
    <link rel="stylesheet" href="{{ URL::asset('website-assets/vendor/swiper/swiper-bundle.min.css') }}">

    <!-- Plugin CSS -->
    <link rel="stylesheet" type="text/css"
        href="{{ URL::asset('website-assets/vendor/magnific-popup/magnific-popup.min.css') }}">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('website-assets/css/style.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('website-assets/css/toastr.min.css') }}">
    <style>
        .invalid-feedback{
            color: red;
            font-weight: bold;
            position: relative;
            top: -10px;
        }
    </style>
</head>

<body class="my-account">
    <div class="page-wrapper">

        @include('components.header')

        <!-- Start of Main -->
        <main class="main">
            <!-- Start of Page Header -->
            <div class="page-header">
                <div class="container">
                    <h1 class="page-title mb-0">Welcome {{ Auth::User()->name }}</h1>
                </div>
            </div>
            <!-- End of Page Header -->

            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="{{ URL::to('/') }}">Home</a></li>
                        <li>My account</li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of PageContent -->
            <form action="{{ URL::to('/logout') }}" method="post" id="logout-form" class="d-none">
                @csrf
                <button type="submit">Logout</button>
            </form>
            <div class="page-content pt-2">
                <div class="container">
                    <div class="tab tab-vertical row gutter-lg">
                        <ul class="nav nav-tabs mb-6" role="tablist">
                            <li class="nav-item">
                                <a href="#account-dashboard" class="nav-link active">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a href="#account-orders" class="nav-link">Orders</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ URL::to('/ratings') }}" target="_blank" class="nav-link">Ratings</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a href="#account-addresses" class="nav-link">Addresses</a>
                            </li> --}}
                            <li class="nav-item">
                                <a href="#account-details" class="nav-link">Account details</a>
                            </li>
                            <li class="link-item">
                                <a href="{{ URL::to('/wishlist') }}" target="_blank">Wishlist</a>
                            </li>
                            <li class="link-item">
                                <a href="javascript:void(0)"
                                    onclick="document.getElementById('logout-form').submit()">Logout</a>
                            </li>
                        </ul>

                        <div class="tab-content mb-6">
                            <div class="tab-pane active in" id="account-dashboard">
                                <p class="greeting">
                                    Hello
                                    <span class="text-dark font-weight-bold">{{ Auth::User()->name }}</span>
                                    Have a Nice Day...
                                </p>
                                {{-- <p class="mb-4">
                                    From your account dashboard you can view your <a href="#account-orders"
                                        class="text-primary link-to-tab">recent orders</a>,
                                    manage your <a href="#account-addresses" class="text-primary link-to-tab">shipping
                                        and billing
                                        addresses</a>, and
                                    <a href="#account-details" class="text-primary link-to-tab">edit your password and
                                        account details.</a>
                                </p> --}}

                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mb-4">
                                        <a href="#account-orders" class="link-to-tab">
                                            <div class="icon-box text-center">
                                                <span class="icon-box-icon icon-orders">
                                                    <i class="w-icon-orders"></i>
                                                </span>
                                                <div class="icon-box-content">
                                                    <p class="text-uppercase mb-0">Orders</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mb-4">
                                        <a href="{{ URL::to('/ratings') }}" target="_blank" class="link-to-tab">
                                            <div class="icon-box text-center">
                                                <span class="icon-box-icon icon-download">
                                                    <i class="w-icon-download"></i>
                                                </span>
                                                <div class="icon-box-content">
                                                    <p class="text-uppercase mb-0">Ratings</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    {{-- <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mb-4">
                                        <a href="#account-addresses" class="link-to-tab">
                                            <div class="icon-box text-center">
                                                <span class="icon-box-icon icon-address">
                                                    <i class="w-icon-map-marker"></i>
                                                </span>
                                                <div class="icon-box-content">
                                                    <p class="text-uppercase mb-0">Addresses</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div> --}}
                                    <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mb-4">
                                        <a href="#account-details" class="link-to-tab">
                                            <div class="icon-box text-center">
                                                <span class="icon-box-icon icon-account">
                                                    <i class="w-icon-user"></i>
                                                </span>
                                                <div class="icon-box-content">
                                                    <p class="text-uppercase mb-0">Account Details</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mb-4">
                                        <a href="{{ URL::to('/wishlist') }}" target="_blank" class="link-to-tab">
                                            <div class="icon-box text-center">
                                                <span class="icon-box-icon icon-wishlist">
                                                    <i class="w-icon-heart"></i>
                                                </span>
                                                <div class="icon-box-content">
                                                    <p class="text-uppercase mb-0">Wishlist</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mb-4">
                                        <a href="javascript:void(0)"
                                            onclick="document.getElementById('logout-form').submit()">
                                            <div class="icon-box text-center">
                                                <span class="icon-box-icon icon-logout">
                                                    <i class="w-icon-logout"></i>
                                                </span>
                                                <div class="icon-box-content">
                                                    <p class="text-uppercase mb-0">Logout</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane mb-4" id="account-orders">
                                <div class="icon-box icon-box-side icon-box-light">
                                    <span class="icon-box-icon icon-orders">
                                        <i class="w-icon-orders"></i>
                                    </span>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title text-capitalize ls-normal mb-0">Orders</h4>
                                    </div>
                                </div>

                                <table class="shop-table account-orders-table mb-6">
                                    <thead>
                                        <tr align="left">
                                            <th class="order-id">Order</th>
                                            <th class="order-date">Date</th>
                                            <th class="order-status">Status</th>
                                            <th class="order-total">Total</th>
                                            <th class="order-actions">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $value)
                                            <tr>
                                                <td class="order-id">#{{ $value->id }}</td>
                                                <td class="order-date">
                                                    {{ Carbon::parse($value->date)->format('F d, Y') }}</td>
                                                <td class="order-status">{{ $value->status }}</td>
                                                <td class="order-total">
                                                    <span
                                                        class="order-price">{{ $settings->currency . '' . $value->order_details->sum('total') }}</span>
                                                    for
                                                    <span class="order-quantity">
                                                        {{ $value->order_details->sum('quantity') }}</span> item
                                                </td>
                                                <td class="order-action">
                                                    <a href="{{ URL::to('/order-receipt/' . $value->id) }}"
                                                        class="btn btn-outline btn-default btn-block btn-sm btn-rounded"
                                                        target="_blank">View</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <a href="{{ URL::to('/') }}" class="btn btn-dark btn-rounded btn-icon-right">Go
                                    Shop<i class="w-icon-long-arrow-right"></i></a>
                            </div>

                            <div class="tab-pane" id="account-addresses">
                                <div class="icon-box icon-box-side icon-box-light">
                                    <span class="icon-box-icon icon-map-marker">
                                        <i class="w-icon-map-marker"></i>
                                    </span>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title mb-0 ls-normal">Addresses</h4>
                                    </div>
                                </div>
                                <p>The following addresses will be used on the checkout page
                                    by default.</p>
                                <div class="row">
                                    <div class="col-sm-6 mb-6">
                                        <div class="ecommerce-address billing-address pr-lg-8">
                                            <h4 class="title title-underline ls-25 font-weight-bold">Billing Address
                                            </h4>
                                            <address class="mb-4">
                                                <table class="address-table">
                                                    <tbody>
                                                        <tr>
                                                            <th>Name:</th>
                                                            <td>John Doe</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Company:</th>
                                                            <td>Conia</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Address:</th>
                                                            <td>Wall Street</td>
                                                        </tr>
                                                        <tr>
                                                            <th>City:</th>
                                                            <td>California</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Country:</th>
                                                            <td>United States (US)</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Postcode:</th>
                                                            <td>92020</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Phone:</th>
                                                            <td>1112223334</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </address>
                                            <a href="#"
                                                class="btn btn-link btn-underline btn-icon-right text-primary">Edit
                                                your billing address<i class="w-icon-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-6">
                                        <div class="ecommerce-address shipping-address pr-lg-8">
                                            <h4 class="title title-underline ls-25 font-weight-bold">Shipping Address
                                            </h4>
                                            <address class="mb-4">
                                                <table class="address-table">
                                                    <tbody>
                                                        <tr>
                                                            <th>Name:</th>
                                                            <td>John Doe</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Company:</th>
                                                            <td>Conia</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Address:</th>
                                                            <td>Wall Street</td>
                                                        </tr>
                                                        <tr>
                                                            <th>City:</th>
                                                            <td>California</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Country:</th>
                                                            <td>United States (US)</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Postcode:</th>
                                                            <td>92020</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </address>
                                            <a href="#"
                                                class="btn btn-link btn-underline btn-icon-right text-primary">Edit
                                                your
                                                shipping address<i class="w-icon-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="account-details">
                                <div class="icon-box icon-box-side icon-box-light">
                                    <span class="icon-box-icon icon-account mr-2">
                                        <i class="w-icon-user"></i>
                                    </span>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title mb-0 ls-normal">Account Details</h4>
                                    </div>
                                </div>
                                <form class="form account-details-form" action="{{ URL::to('/update-profile') }}"
                                    method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="first_name">First name *</label>
                                                <input type="text" id="first_name" name="first_name"
                                                    placeholder="John" class="form-control form-control-md @error('first_name') is-invalid @enderror"
                                                    value="{{ Auth::User()->first_name }}">
                                                @error('first_name')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="last_name">Last name *</label>
                                                <input type="text" id="last_name" name="last_name"
                                                    placeholder="Doe" class="form-control form-control-md @error('last_name') is-invalid @enderror"
                                                    value="{{ Auth::User()->last_name }}" required>
                                                    @error('last_name')
                                                        <span class="invalid-feedback">{{ $message }}</span>
                                                    @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="display-name">Display name *</label>
                                        <input type="text" id="display-name" name="display_name"
                                            placeholder="John Doe" class="form-control form-control-md mb-0"
                                            value="{{ Auth::User()->first_name . ' ' . Auth::User()->last_name }}"
                                            disabled>
                                        <p>This will be how your name will be displayed in the account section and in
                                            reviews</p>
                                    </div>

                                    {{-- <div class="form-group mb-6">
                                        <label for="email_1">Email address *</label>
                                        <input type="email" id="email_1" name="email_1"
                                            class="form-control form-control-md" value="{{ Auth::User()->email }}">
                                    </div> --}}

                                    <h4 class="title title-password ls-25 font-weight-bold">Password change</h4>
                                    <div class="form-group">
                                        <label class="text-dark" for="cur-password">Current Password leave blank to
                                            leave unchanged</label>
                                        <input type="password"
                                            class="form-control form-control-md @error('cur_password') is-invalid @enderror"
                                            id="cur_password" name="cur_password">
                                        @error('cur_password')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="text-dark" for="new-password">New Password leave blank to leave
                                            unchanged</label>
                                        <input type="password"
                                            class="form-control form-control-md @error('new_password') is-invalid @enderror"
                                            id="new_password" name="new_password">
                                        @error('new_password')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-10">
                                        <label class="text-dark" for="new_confirm_password">Confirm Password</label>
                                        <input type="password"
                                            class="form-control form-control-md @error('new_confirm_password') is-invalid @enderror"
                                            id="new_confirm_password" name="new_confirm_password">
                                        @error('new_confirm_password')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-dark btn-rounded btn-sm mb-4">Save
                                        Changes</button>
                                </form>
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
    <script src="{{ URL::asset('website-assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/js/main.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/js/scroll.js') }}"></script>

    <!-- Toast Notifications -->
    <script src="{{ URL::asset('website-assets/js/toastr.min.js') }}"></script>
    {!! Toastr::message() !!}
</body>

</html>
