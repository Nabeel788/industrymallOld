<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Industry MALL | Login</title>

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

    <link rel="stylesheet" href="{{ URL::asset('website-assets/css/toastr.min.css') }}">

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
                        <li>Login</li>
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
                                <div class="tab tab-nav-boxed tab-nav-center tab-nav-underline">
                                    <h3 class="text-center">Login</h3>
                                    @if (Session::has('failure_message'))
                                    <div class="alert alert-icon alert-error alert-bg alert-inline ">
                                        <h4 class="alert-title">
                                            <i class="w-icon-times-circle"></i>Sorry!</h4> {{ Session::get('failure_message') }} 
                                    </div>
                                    @endif
                                    <form action="{{ route('login') }}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="email1">Email address *</label>
                                            <input type="email" name="email" id="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus
                                                placeholder="john@example.com">
                                            @error('email')
                                                <span class="invalid-feedback1" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-0">
                                            <label for="password">Password *</label>
                                            <input type="password" name="password" id="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                placeholder="********" required>

                                            @error('password')
                                                <span class="invalid-feedback1" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-checkbox d-flex align-items-center justify-content-between">
                                            <input type="checkbox" class="custom-checkbox" id="remember_me"
                                                name="remember_me">
                                            <label for="remember_me">Remember me</label>
                                            <a href="{{asset('/password/reset')  }}">Lost your password?</a>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                                    </form>
                                    <br>
                                    <a href="{{ URL::to('/register') }}"><u>Create New Account?</u></a>
                                    {{-- <p class="text-center">Sign in with social account</p>
                                    <div class="social-icons social-icon-border-color d-flex justify-content-center">
                                        <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                        <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                        <a href="#" class="social-icon social-google fab fa-google"></a>
                                    </div> --}}
                                </div>
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

    <!-- Toast Notifications -->
    <script src="{{ URL::asset('website-assets/js/toastr.min.js') }}"></script>
    {!! Toastr::message() !!}
</body>

</html>
