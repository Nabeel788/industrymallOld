<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Industry MALL | Signup</title>

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
    <style>
        .invalid-feedback1 {
            color: red !important;
        }
    </style>
</head>

<body>
    <div class="page-wrapper">
        @include('components.header')
        <!-- Start of Main -->
        <main class="main login-page">
            <!-- Start of Page Header -->
            <div class="page-header">
                <div class="container">
                    <h1 class="page-title mb-0">My Account</h1>
                </div>
            </div>
            <!-- End of Page Header -->

            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="{{ URL::to('/') }}">Home</a></li>
                        <li>Signup</li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->
            <div class="page-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12"></div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="login-popup">
                                <h3 class="text-center">Signup</h3>
                                <form action="{{ route('register') }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group mb-5">
                                                <label>First Name *</label>
                                                <input type="text"
                                                    class="form-control @error('first_name') is-invalid @enderror"
                                                    name="first_name" value="{{ old('first_name') }}" id="first-name"
                                                    required>
                                                @error('first_name')
                                                    <span class="invalid-feedback1"
                                                        role="alert">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group mb-5">
                                                <label>Last Name *</label>
                                                <input type="text"
                                                    class="form-control @error('last_name') is-invalid @enderror"
                                                    name="last_name" value="{{ old('last_name') }}" id="last-name"
                                                    required>
                                                @error('last_name')
                                                    <span class="invalid-feedback1">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group mb-5">
                                                <label>Phone Number *</label>
                                                <input type="text"
                                                    class="form-control @error('phone-number') is-invalid @enderror"
                                                    name="phone-number" value="{{ old('phone-number') }}"
                                                    id="phone-number" required>
                                                @error('phone-number')
                                                    <span class="invalid-feedback1">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Your email address *</label>
                                                <input type="text"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    name="email" id="email" value="{{ old('email') }}" required>
                                                @error('email')
                                                    <span class="invalid-feedback1">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Password *</label>
                                                <input type="text"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password" id="password" value="{{ old('password') }}"
                                                    required>
                                                @error('password')
                                                    <span class="invalid-feedback1">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Confirm Password *</label>
                                                <input type="text"
                                                    class="form-control @error('password_confirmation') is-invalid @enderror"
                                                    name="password_confirmation" id="password_confirmation" required>
                                                @error('password_confirmation')
                                                    <span class="invalid-feedback1">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group mb-5">
                                            <label>Image *</label>
                                            <input type="file"
                                                class="form-control @error('image') is-invalid @enderror"
                                                name="image" value="{{ old('image') }}" id="image"
                                                required>
                                            @error('image')
                                                <span class="invalid-feedback1"
                                                    role="alert">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div> --}}
                                    {{-- <div class="form-checkbox user-checkbox mt-0">
                                        <input type="checkbox" class="custom-checkbox checkbox-round active"
                                            id="check-customer" name="check-customer" value="Customer" checked required onclick="document.checked=true;">
                                        <label for="check-customer" class="check-customer mb-1">I am a
                                            customer</label>
                                        <br>
                                        <input type="checkbox" class="custom-checkbox checkbox-round"
                                            id="check-seller" name="check-seller" value="Vendor" onclick="document.checked=true;">
                                        <label for="check-seller" class="check-seller">I am a vendor</label>
                                    </div> --}}
                                    <div class="form-checkbox" style="margin-top: -10px;margin-bottom:-20px;">
                                        <div class="form-group">
                                            <label for="check-customer"><input type="radio" name="check-customer"
                                                    id="check-customer" value="Customer" checked>&emsp; I am a
                                                customer</label>
                                            <label for="check-customer1"><input type="radio" name="check-customer"
                                                    id="check-customer1" value="Vendor">&emsp; I am a vendor</label>
                                        </div>
                                    </div>

                                    <p>Your personal data will be used to support your experience
                                        throughout this website, to manage access to your account,
                                        and for other purposes described in our <a href="#"
                                            class="text-primary">privacy policy</a>.</p>
                                    {{-- <a href="#" class="d-block mb-5 text-primary">Signup as a vendor?</a> --}}
                                    <div class="form-checkbox d-flex align-items-center justify-content-between mb-5">
                                        <input type="checkbox" class="custom-checkbox" id="remember"
                                            name="remember" required="">
                                        <label for="remember" class="font-size-md">I agree to the <a href="#"
                                                class="text-primary font-size-md">privacy policy</a></label>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Sign UP</button>
                                </form>
                                <br>
                                <a href="{{ URL::to('/login') }}"><u>Already have an account?</u></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12"></div>
                    </div>

                </div>
            </div>
        </main>
        <!-- End of Main -->

        @include('components.footer')
    </div>
    <!-- End of Page Wrapper -->

    @include('components.sticky-footer')

    <!-- Plugin JS File -->
    <script src="{{ URL::asset('website-assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/js/main.min.js') }}"></script>
</body>

</html>
