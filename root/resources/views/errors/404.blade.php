<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>404 | Industry Mall</title>

    <meta name="keywords" content="Industry Mall" />
    <meta name="description" content="Industry Mall">
    <meta name="author" content="D-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ URL::asset('website-assets/images/icons/favicon.png') }}">

    <!-- WebFont.js -->
    <script>
        WebFontConfig = {
            google: {
                families: ['Poppins:400,500,600,700,800']
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

    <link rel="preload"
        href="{{ URL::asset('website-assets/vendor/fontawesome-free/webfonts/fa-regular-400.woff2') }}" as="font"
        type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="{{ URL::asset('website-assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff2') }}"
        as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload"
        href="{{ URL::asset('website-assets/vendor/fontawesome-free/webfonts/fa-brands-400.woff2') }}" as="font"
        type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="{{ URL::asset('website-assets/fonts/wolmart87d5.woff') }}?png09e" as="font"
        type="font/woff" crossorigin="anonymous">

    <!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css"
        href="{{ URL::asset('website-assets/vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('website-assets/vendor/animate/animate.min.css') }}">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{ URL::asset('website-assets/vendor/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ URL::asset('website-assets/vendor/magnific-popup/magnific-popup.min.css') }}">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('website-assets/css/style.min.css') }}">
</head>

<body class="about-us">
    <div class="page-wrapper">
        <!-- Start of Main -->
        <main class="main">

            <!-- Start of Page Content -->
            <div class="page-content error-404">
                <div class="container">
                    <div class="banner">
                        <figure>
                            <img src="{{ URL::asset('website-assets/images/pages/404.png') }}" alt="Error 404"
                                width="820" height="460" />
                        </figure>
                        <div class="banner-content text-center">
                            <h2 class="banner-title">
                                <span class="text-secondary">Oops!!!</span> Something Went Wrong Here
                            </h2>
                            <p class="text-light">There may be a misspelling in the URL entered, or the page you are
                                looking for may no longer exist</p>
                            @if (isset(Auth::User()->role) == 'Admin')
                                <a href="{{ URL::to('/home') }}" class="btn btn-dark btn-rounded btn-icon-right">Go
                                    Back Home<i class="w-icon-long-arrow-right"></i></a>
                            @else
                                <a href="{{ URL::to('/') }}" class="btn btn-dark btn-rounded btn-icon-right">Go Back
                                    Home<i class="w-icon-long-arrow-right"></i></a>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Page Content -->
        </main>
        <!-- End of Main -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Plugin JS File -->
    <script src="{{ URL::asset('website-assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/js/main.min.js') }}"></script>
</body>

</html>
