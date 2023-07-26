<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Shop By Brand</title>

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
    <link rel="stylesheet" href="{{ URL::asset('website-assets/vendor/swiper/swiper-bundle.min.css') }}">

    <!-- Plugin CSS -->
    <link rel="stylesheet" type="text/css"
        href="{{ URL::asset('website-assets/vendor/magnific-popup/magnific-popup.min.css') }}">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('website-assets/css/style.min.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('website-assets/css/contact.css') }}">
</head>

<body>
    <div class="page-wrapper">

        @include('components.header')

        <main class="main">
            <div class="page-header">
                <div class="container">
                    <h1 class="page-title mb-0">Shop By Brand</h1>
                </div>
            </div>

            <nav class="breadcrumb-nav mb-10 pb-1">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="{{ URL::to('/') }}">Home</a></li>
                        <li>Shop By Brand</li>
                    </ul>
                </div>
            </nav>

            <div class="page-content contact-us">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            {{-- <h2 class="title title-underline mb-4 ls-normal appear-animate">Brand's</h2> --}}
                            <div class="row mb-6">
                                <div class="shop-default-brands mb-5">
                                    <div class="brands-swiper swiper-container swiper-theme "
                                        data-swiper-options="{
                                'slidesPerView': 2,
                                'breakpoints': {
                                    '576': {
                                        'slidesPerView': 3
                                    },
                                    '768': {
                                        'slidesPerView': 4
                                    },
                                    '992': {
                                        'slidesPerView': 6
                                    },
                                    '1200': {
                                        'slidesPerView': 7
                                    }
                                },
                                'autoplay': {
                                    'delay': 4000,
                                    'disableOnInteraction': false
                                }
                            }">
                                        <div
                                            class="swiper-wrapper row gutter-no cols-xl-7 cols-lg-6 cols-md-4 cols-sm-3 cols-2">
                                            @include('website.brands-list', ['brands' => $brands])
                                        </div>
                                        {{-- <div class="swiper-pagination"></div> --}}
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        @include('components.footer')
    </div>

    @include('components.sticky-footer')

    <!-- Plugin JS File -->
    <script src="{{ URL::asset('website-assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/js/main.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/js/scroll.js') }}"></script>
</body>

</html>
