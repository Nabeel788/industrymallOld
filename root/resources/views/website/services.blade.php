<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Services</title>

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
    <link rel="stylesheet" href="{{ URL::asset('website-assets/vendor/swiper/swiper-bundle.min.css') }}">

    <!-- Plugin CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('website-assets/vendor/magnific-popup/magnific-popup.min.css') }}">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('website-assets/css/style.min.css') }}">
    <style>
        .position-sticky{
            position: sticky!important;
        }
        #main-tabs{
            padding: 20px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            background-color: while;
            border: 1px solid: blue;
            <?php $height = 0; ?>
            @foreach($services as $key=>$value)
                @if($key==0)
                    @php $height = 100; @endphp
                @else
                    @php $height += 50; @endphp
                @endif
            height: {{ $height }}px;
            @endforeach
        }
        #main-tabs .nav-item{
            border: 1px solid: blue;
            color: black;
        }
        #main-tabs .nav-item:hover{
            background-color: rgb(1, 1, 46);
            color: white;
            transition: .3s ease-in;
            z-index: 1;
        }
        #main-tabs .nav-item .nav-link{
            padding-left: 10px;
        }
        
        #main-tabs .nav-item .nav-link:hover{
            color:white;
        }
        #main-tabs .nav-item .nav-link.active{
        background-color: gray;
        color:white;
        }
        .tab-pane{
            margin-top: 0px;
        }
        .service-title{
            margin-top: -15px;
        }
        .service-description{
            font-family: sans-serif;
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
                    <h1 class="page-title mb-0">Services</h1>
                </div>
            </div>
            <!-- End of Page Header -->

            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="{{ URL::to('/') }}">Home</a></li>
                        <li>Services</li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of PageContent -->
            <div class="page-content pt-2">
                <div class="container">
                    <div class="tab tab-vertical row gutter-lg position-sticky">
                        <ul class="nav nav-tabs mb-6" role="tablist" id="main-tabs">
                            @foreach($services as $key=>$value)
                                @if($key==0)
                                <li class="nav-item">
                                    <a href="#service-{{ $key }}" class="nav-link active" >
                                        <i class="w-icon-angle-right style="font-size: 13px;"></i>
                                        <i class="w-icon-angle-right"  style="margin-left: -13px;font-size: 13px;"></i>
                                        <span style="position: relative;">{{ $value->title }}</span>
                                    </a>
                                </li>
                                @else
                                <li class="nav-item">
                                    <a href="#service-{{ $key }}" class="nav-link">
                                        <i class="w-icon-angle-right" style="font-size: 13px;"></i>
                                        <i class="w-icon-angle-right" style="margin-left: -13px;font-size: 13px;"></i>
                                        <span style="position: relative;">{{ $value->title }}</span>
                                    </a>
                                </li>
                                @endif
                            @endforeach
                        </ul>

                        <div class="tab-content mb-6">
                            @foreach($services as $key=>$value)
                                @if($key==0)
                                    <div class="tab-pane active in" id="service-{{ $key }}">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <h3 class="service-title">{{ $value->title }}</h3>
                                                /* <img src="{{ URL::asset('root/upload/services/big/'.$value->image) }}" width="100%" id="service-img" alt=""> */
                                                <img src="{{ URL('root/public/root/upload/services/big'.$value->image) }}" width="100%" id="service-img" alt="">
                                                </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 mt-4 service-description">
                                                {!! $value->description !!}
                                            </div>
                                        </div>
                                        <hr>

                                    </div>
                                @else
                                    <div class="tab-pane in" id="service-{{ $key }}">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <h3 class="service-title">{{ $value->title }}</h3>
                                                <img src="{{ URL::asset('root/upload/services/big/'.$value->image) }}" width="100%" id="service-img" alt="">
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 mt-4 service-description">
                                                {!! $value->description !!}
                                            </div>
                                        </div>
                                        <hr>

                                    </div>
                                @endif
                            @endforeach
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
</body>

</html>
