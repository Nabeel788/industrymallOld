<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>{{ Str::ucfirst($Singleblog->title) }} | Blogs | News</title>

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
                    <h1 class="page-title mb-0">{{ $Singleblog->title }}</h1>
                </div>
            </div>
            <!-- End of Page Header -->

            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb bb-no">
                        <li><a href="{{ URL::to('/') }}">Home</a></li>
                        <li><a href="{{ URL::to('/blogs') }}">Blog</a></li>
                        <li>{{ $Singleblog->title }}</li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of Page Content -->
            <div class="page-content mb-8">
                <div class="container">
                    <div class="row gutter-lg">
                        <div class="main-content post-single-content">
                            <div class="post post-grid post-single">
                                <figure class="post-media br-sm">
                                    <img src="{{ URL::asset('root/upload/blogs/big/'.$Singleblog->image) }}" alt="{{ $Singleblog->title }} Blog Image" width="930" height="500" />
                                </figure>
                                <div class="post-details">
                                    {{-- <div class="post-meta">
                                        by <a href="#" class="post-author">{{ $Singleblog->created_by_user->first_name }}</a>
                                        - <a href="#" class="post-date">{{ date('d-m-Y',strtotime($Singleblog->created_at)) }}</a>
                                        <a href="#" class="post-comment"><i class="w-icon-comments"></i><span>0</span>Comments</a>
                                    </div> --}}
                                    <h2 class="post-title"><a href="#">{{ $Singleblog->title }}</a></h2>
                                    <div class="post-content">
                                        {!! $Singleblog->description !!}
                                    </div>
                                </div>
                            </div>
                         
                        </div>
                        <!-- End of Main Content -->
                        <aside class="sidebar right-sidebar blog-sidebar sidebar-fixed sticky-sidebar-wrapper">
                            <div class="sidebar-overlay">
                                <a href="#" class="sidebar-close">
                                    <i class="close-icon"></i>
                                </a>
                            </div>
                            <a href="#" class="sidebar-toggle">
                                <i class="fas fa-chevron-left"></i>
                            </a>
                            <div class="sidebar-content">
                                <div class="sticky-sidebar">
                                   
                                    {{-- <div class="widget widget-categories">
                                        <h3 class="widget-title bb-no mb-0">Categories</h3>
                                        <ul class="widget-body filter-items search-ul">
                                           @foreach ($sidebarcategories as $key=>$val)
                                           <li><a href="#">{{ $val->title }}</a></li>
                                           @endforeach 
                                        </ul>
                                    </div> --}}
                                    <!-- End of Widget categories -->
                                    <div class="widget widget-posts">
                                        <h3 class="widget-title bb-no">Popular Posts</h3>
                                        <div class="widget-body">
                                            <div class="swiper">
                                                <div class="swiper-container swiper-theme nav-top" data-swiper-options="{
                                                    'spaceBetween': 20,
                                                    'slidesPerView': 1
                                                }">
                                                    <div class="swiper-wrapper row cols-1">
                                                        <div class="swiper-slide widget-col">
                                                            @foreach ( $relatedblog as $key=>$value )
                                                                
                                                            
                                                            <div class="post-widget mb-4">
                                                                <figure class="post-media br-sm">
                                                                    <img src="{{ asset('root/upload/blogs/big/'.$value->image) }}" alt="150" height="150" />
                                                                </figure>
                                                                <div class="post-details">
                                                                    <div class="post-meta">
                                                                        <a href="#" class="post-date">{{ date('d-m-Y',strtotime($value->created_at)) }}</a>
                                                                    </div>
                                                                    <h4 class="post-title">
                                                                        <a href="{{ asset('single') }}/{{ $value->id }}/{{ $value->slug }}">{{ $value->title }}</a>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                            
                                                    </div>
                                                    {{-- <button class="swiper-button-next"></button>
                                                    <button class="swiper-button-prev"></button> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                            </div>
                        </aside>
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
    <script src="{{ URL::asset('website-assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/vendor/sticky/sticky.js') }}"></script>
    <script src="{{ URL::asset('website-assets/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/js/main.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/js/scroll.js') }}"></script>
</body>

</html>