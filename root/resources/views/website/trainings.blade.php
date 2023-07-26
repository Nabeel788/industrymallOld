<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Trainings</title>

    <meta name="keywords" content="Marketplace ecommerce responsive HTML5 Template" />
    <meta name="description" content="Wolmart is powerful marketplace &amp; ecommerce responsive Html5 Template.">
    <meta name="author" content="D-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ URL::asset('website-assets/images/icons/favicon.png') }}">

    <!-- WebFont.js -->
    <script>
        WebFontConfig = {
            google: { families: ['Poppins:400,500,600,700,800'] }
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
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('website-assets/vendor/animate/animate.min.css') }}">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{ URL::asset('website-assets/vendor/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('website-assets/vendor/magnific-popup/magnific-popup.min.css') }}">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('website-assets/css/style.min.css') }}">
</head>

<body class="about-us">
    <div class="page-wrapper">

        @include('components.header')


        <!-- Start of Main -->
        <main class="main">
            <!-- Start of Page Header -->
            <div class="page-header">
                <div class="container">
                    <h1 class="page-title mb-0">Trainings</h1>
                </div>
            </div>
            <!-- End of Page Header -->

            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav mb-6">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="{{ URL::to('/') }}">Home</a></li>
                        <li><a href="javascript:void(0);">Trainings</a></li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of Page Content -->
            <div class="page-content">
                <div class="container">
                    <ul class="nav-filters filter-underline blog-filters mb-4">
                        <li><a href="javascript:void(0)" class="nav-filter active" data-filter="*">All Trainings <span>{{ $totalTrainings }}</span></a></li>
                        @foreach($training_categories as $value)
                        <li><a href="javascript:void(0);" class="nav-filter" data-filter=".{{ $value->title }}">{{ $value->title }} <span style="display: none;">1</span></a></li>
                        @endforeach
                    </ul>

                    <div class="row grid cols-lg-4 cols-md-2 mb-2" data-grid-options="{
                        'layoutMode': 'fitRows'
                    }">
                        @foreach($trainings as $value)
                        <div class="product-wrap {{ $value->training_category->title }}">
                            <div class="product product-simple text-center">
                                <figure class="product-media">
                                    <a href="{{ asset('single-training') }}/{{ $value->id }}/{{ $value->slug }}">
                                        <img src="{{ URL::asset('root/upload/trainings/medium/'.$value->image) }}" alt="Product" width="300" height="338">
                                    </a>
                                  
                                    <div class="product-action">
                                        <a href="{{ asset('single-training') }}/{{ $value->id }}/{{ $value->slug }}" class="btn-product btn-quickview" title="Quick View">Quick
                                            View</a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="{{ asset('single-training') }}/{{ $value->id }}/{{ $value->slug }}"><b>{{ $value->title }}</b></a></h4>
                                   <hr>
                                    <div class="ratings-container">
                                        
                                            <a href="{{ asset('single-training') }}/{{ $value->id }}/{{ $value->slug }}" style="color:black"><img 
                                                src="{{ URL::asset('root/upload/intructor/big/'.$value->instructor->image) }}"
                                                alt="" style="width:25%; height:40px; border-radius: 50%;">&nbsp;&nbsp;&nbsp;
                                                {{ $value->instructor->name }}</a>
                                        
                                        {{-- <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div> --}}
                                        <a href="{{ asset('single-training') }}/{{ $value->id }}/{{ $value->slug }}" class="rating-reviews"></a>
                                     
                                    </div>
                                    <hr> 
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>



                   
                </div>
            </div>
             
            
            <!-- End of Page Content -->
        </main>
        <!-- End of Main -->

        @include('components.footer')
    </div>
    <!-- End of Page Wrapper -->

    @include('components.sticky-footer')

    <!-- Plugin JS File -->
    <script src="{{ URL::asset('website-assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/vendor/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/js/main.min.js') }}"></script>
</body>

</html>