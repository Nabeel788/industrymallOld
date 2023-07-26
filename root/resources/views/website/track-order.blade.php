<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Industry Mall | TrackOrder</title>

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
    <!-- Trackorder timeline custom css -->
    <link rel="stylesheet" href="{{ URL::asset('website-assets/css/timeline.css') }}">
</head>

<body>
    <div class="page-wrapper">
        <h1 class="d-none">Track Order</h1>

        @include('components.header')

        <!-- Start of Main -->
        <main class="main cart">
            <!-- Start of Page Header -->
            <div class="page-header" style="background-color: #eee">
                <div class="container">
                    <h1 class="page-title mb-0">Track Order</h1>
                </div>
            </div>
            <!-- End of Page Header -->

            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-sm-12"></div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        @if (Session::has('flash_message'))
                        <div class="alert alert-icon alert-error alert-bg alert-inline show-code-action">
                            <h4 class="alert-title">
                                <i class="w-icon-times-circle"></i>Oh snap!</h4> 
                            {{ Session::get('flash_message') }}
                        </div>
                        @endif
                        <form action="{{ URL::to('/search-track-order') }}" method="post" class="form"
                            style="box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;padding:40px;margin-top:50px;margin-bottom:50px;">
                            @csrf
                            <div class="form-group mt-5">
                                <label for="">Enter Order ID</label>
                                <input type="text" name="order_id" id="order_id" class="form-control @error('order_id') is-invalid @enderror" required autocomplete="off" autofocus>
                                @error('order_id')
                                    <span style="color:red;position: relative;top:-15px;font-weight:bold;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mt-5">
                                <label for="">Enter Email</label>
                                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" required autocomplete="off">
                                @error('email')
                                    <span style="color:red;position: relative;top:-15px;font-weight:bold;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12"></div>
                </div>
            </div>
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
