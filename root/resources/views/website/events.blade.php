<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Events</title>

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

        @include('components.header')


        <!-- Start of Main -->
        <main class="main">
            <!-- Start of Page Header -->
            <div class="page-header">
                <div class="container">
                    <h1 class="page-title mb-0">Upcoming Events...</h1>
                </div>
            </div>
            <!-- End of Page Header -->

            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav mb-6">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="{{ URL::to('/') }}">Home</a></li>
                        <li><a href="javascript:void(0);">Events</a></li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of Page Content -->
            <div class="page-content">
                <div class="container">
                    <ul class="nav-filters filter-underline blog-filters mb-4">
                        <li><a href="javascript:void(0)" class="nav-filter active" data-filter="*">All Events <span>{{
                                    $totalEvents }}</span></a></li>
                        @foreach($events_categories as $value)
                        <li><a href="javascript:void(0);" class="nav-filter" data-filter=".{{ $value->title }}">{{
                                $value->title }} <span style="display: none;">1</span></a></li>
                        @endforeach
                    </ul>

                    <div class="row grid cols-lg-3 cols-md-2 mb-2" data-grid-options="{
                        'layoutMode': 'fitRows'
                    }">
                        @foreach($events as $value)
                        <article class="post post-grid-type grid-item overlay-zoom {{ $value->event_category->title }}">
                            <figure class="post-media br-sm">
                                <a href="{{ URL::to('/single-event/'.$value->slug) }}">
                                    <img src="{{ URL::asset('root/upload/events/medium/'.$value->image) }}" width="600"
                                        height="420" alt="{{ $value->title }} Image">
                                </a>
                            </figure>
                            <div class="post-details">
                                <div class="post-cats text-primary">
                                    <a href="{{ URL::to('/single-event/'.$value->slug) }}">{{
                                        $value->event_category->title }}</a>
                                </div>
                                <h4 class="post-title">
                                    <a href="{{ URL::to('/single-event/'.$value->slug) }}">{{ $value->title }}</a>
                                </h4>
                                <div class="post-content">
                                    {!! Str::words($value->description,25) !!} <a
                                        href="{{ URL::to('/single-event/'.$value->slug) }}"
                                        class="btn btn-link btn-primary text-capitalize">(Read More)</a>
                                </div>
                                <div class="post-meta">
                                    by <a href="javascript:void(0);" class="post-author">{{
                                        $value->created_by_user->name }}</a>
                                    - <a href="javascript:void(0);" class="post-date">{{
                                        date('d-m-Y',strtotime($value->created_at)) }}</a>
                                    {{-- <a href="javascript:void(0);" class="post-comment"><i
                                            class="w-icon-comments"></i><span>7</span>Comments</a> --}}
                                </div>
                            </div>
                        </article>
                        @endforeach
                    </div>
                    {{-- <ul class="pagination justify-content-center mb-10 pb-2 pt-2">
                        <li class="prev disabled">
                            <a href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
                                <i class="w-icon-long-arrow-left"></i>Prev
                            </a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="next">
                            <a href="#" aria-label="Next">
                                Next<i class="w-icon-long-arrow-right"></i>
                            </a>
                        </li>
                    </ul> --}}
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
    <script src="{{ URL::asset('website-assets/js/scroll.js') }}"></script>
</body>

</html>