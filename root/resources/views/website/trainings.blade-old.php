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
<style>
    .card-img {
        border-bottom-left-radius: 0px;
        border-bottom-right-radius: 0px;
    }

    .card-title {
        margin-bottom: 0.3rem;
    }

    .cat {
        display: inline-block;
        margin-bottom: 1rem;
    }

    .fa-users {
        margin-left: 1rem;
    }

    .card-footer {
        font-size: 0.8rem;
    }


    video {
        max-width: 100%;

    }

    .card {
        margin-left: 10px transition: transform 0.1s ease;
        box-shadow: 0 4px 6px 0 rgba(22, 22, 26, 0.18);
        border-radius: 0;
        border: 0;

        margin-bottom: 1.5em;
    }

    .card:hover {
        transform: scale(1.1);
    }

    .Media {
        display: flex;
        margin-bottom: 2%;
        /* align-items: flex-start; */
    }

    .Media-figure {
        margin-right: .5em;
        border-radius: 50%;
        width: 20%;
        height: 10%;
    }

    .Media-body {
        flex: 1;
    }
</style>

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
            {{-- <div class="page-content">
                <div class="container">
                    <ul class="nav-filters filter-underline blog-filters mb-4">
                        <li><a href="javascript:void(0)" class="nav-filter active" data-filter="*">All Trainings
                                <span>{{ $totalTrainings }}</span></a></li>
                        @foreach($training_categories as $value)
                        <li><a href="javascript:void(0);" class="nav-filter" data-filter=".{{ $value->title }}">{{
                                $value->title }} <span style="display: none;">1</span></a></li>
                        @endforeach
                    </ul>

                    <div class="row grid cols-lg-3 cols-md-2 mb-2" data-grid-options="{
                        'layoutMode': 'fitRows'
                    }">
                        @foreach($trainings as $value)
                        <article
                            class="post post-grid-type grid-item overlay-zoom {{ $value->training_category->title }}">
                            <figure class="post-media br-sm">
                                <a href="{{ URL::to('/single-training/'.$value->slug) }}">
                                    <img src="{{ URL::asset('root/upload/trainings/medium/'.$value->image) }}"
                                        width="600" height="420" alt="{{ $value->title }} Image">
                                </a>
                            </figure>
                            <div class="post-details">
                                <div class="post-cats text-primary">
                                    <a href="{{ URL::to('/single-training/'.$value->slug) }}">{{
                                        $value->training_category->title }}</a>
                                </div>
                                <h4 class="post-title">
                                    <a href="{{ URL::to('/single-training/'.$value->slug) }}">{{ $value->title }}</a>
                                </h4>
                                <div class="post-content">
                                    {!! Str::words($value->description,25) !!} <a
                                        href="{{ URL::to('/single-training/'.$value->slug) }}"
                                        class="btn btn-link btn-primary text-capitalize">(Read More)</a>
                                </div>
                                <div class="post-meta">
                                    by <a href="javascript:void(0);" class="post-author">{{
                                        $value->created_by_user->name }}</a>
                                    - <a href="javascript:void(0);" class="post-date">{{
                                        date('d-m-Y',strtotime($value->created_at)) }}</a>
                                    {{-- <a href="javascript:void(0);" class="post-comment"><i
                                            class="w-icon-comments"></i><span>7</span>Comments</a>
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
                    </ul>
                </div>
            </div> --}}
            <!-- End of Page Content -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="row">
                            @foreach ($trainings as $key=>$value)
                            <div class="col-sm-4">
                                <div class="card" style="width: 30rem;">
                                    <img src="{{ asset('root/upload/trainings/big/'.$value->image) }}"
                                        class="bs-card-video" />
                                    <div class="card-body">
                                        <h5 class="card-title" style="margin-bottom: 5%"><a href="">{{
                                                $value->title}}</a>
                                        </h5>

                                        {{-- <p class="card-text">
                                            {{$value->description}}.
                                        </p> --}}
                                        <div class="Media">
                                            <img class="Media-figure"
                                                src="{{ URL::asset('root/upload/intructor/big/'.$value->instructor->image) }}"
                                                alt="">
                                            <p class="Media-body">{{ $value->instructor->name }}</p><i
                                                class="fa fa-users" style="color:rgb(0, 187, 255)"> 275</i>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <i class="fa fa-star" style="color: goldenrod"></i>
                                                <i class="fa fa-star" style="color: goldenrod"></i>
                                                <i class="fa fa-star" style="color: goldenrod"></i>
                                                <i class="fa fa-star" style="color: goldenrod"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="col-lg-4">
                                                <p>Free</p>
                                            </div>
                                        </div>
                                        <a href="{{ asset('single-training') }}/{{ $value->id }}/{{ $value->slug }}" class="btn btn-primary">ReadMore..</a>
                                    </div>
                                </div>
                            </div>

                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-2">
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
                                                @foreach ( $popularpost as $key=>$val )
                                                    
                                                
                                                <div class="post-widget mb-4">
                                                    <figure class="post-media br-sm">
                                                        <img src="{{ asset('root/upload/trainings/big/'.$val->image) }}" alt="150"
                                                            height="150" />
                                                    </figure>
                                                    <div class="post-details">
                                                        <div class="post-meta">
                                                            <a href="#" class="post-date">{{
                                                                date('d-m-Y',strtotime($val->created_at)) }}</a>
                                                        </div>
                                                        <h4 class="post-title">
                                                            <a href="{{ asset('single-training') }}/{{ $val->id }}/{{ $val->slug }}">{{$val->title}}</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
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
    <script src="{{ URL::asset('website-assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/vendor/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/js/main.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/js/scroll.js') }}"></script>
</body>

</html>