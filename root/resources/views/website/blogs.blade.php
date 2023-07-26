<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Blogs | News</title>

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
    {{-- <script src="{{ URL::asset('website-assets/js/validations.js') }}"></script> --}}
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
    <style>
        .product-wrapper.row [class*=col-] {
            margin-bottom: 0px !important;
        }

        .slider-section {
            margin-top: -30px;
        }

        .slider-img1 {
            max-width: 100%;
            height: 430px;
        }

        .slider-img2 {
            max-width: 100%;
            height: 205px;
        }

        .slider-img3 {
            margin-top: 20px;
            max-width: 100%;
            height: 205px;
        }

        @media only screen and (max-width: 767px) {
            .slider-img2 {
                margin-top: 20px;
            }
        }

        .list-group {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .list-group li {
            border: 1px solid #ddd;
            margin-top: -1px;
            background-color: #f6f6f6;
            padding: 12px;
        }

        .list-group li a {
            color: black;
        }

        .product-media1 {
            box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
        }

        .basic-information-title {
            margin-top: 50px;
        }

        .company-details-table {
            border-bottom: 1px solid black;
        }

        .company-details-table tbody tr {
            border-bottom: 2px solid black;
        }

        .company-details-table tbody tr td {
            padding: 15px;
        }

        .company-details-table tbody tr td:nth-child(odd) {
            background-color: #eee;
        }

        .invalid-feedback1 {
            color: red;
        }
        a:hover{
            text-decoration: none !important;
        }
    </style>
</head>

<body class="about-us">
    <div class="page-wrapper">

        @include('components.header')


        <!-- Start of Main -->
        <main class="main">
            <!-- Start of Page Header -->
            {{-- <div class="page-header">
                <div class="container">
                    <h1 class="page-title mb-0">Grid 3</h1>
                </div>
            </div> --}}
            <!-- End of Page Header -->

            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav mb-6">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="{{ URL::to('/') }}">Home</a></li>
                        <li><a href="javascript:void(0);">Blog</a></li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <div class="container slider-section mb-5">
                <!-- Slider -->
                @if(count($bannerimages) >= 3)
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-12">

                        {{-- <img src="{{ URL::asset('root/upload/blogs/big/'.$bannerimages[2]->image) }}" alt=""
                            class="slider-img1" width="100%"> --}}
                        <div class="grid-item fashion">
                            <article class="post post-mask overlay-zoom br-sm">
                                <figure class="post-media">
                                    <a href="{{ URL::to('/single/'.$bannerimages[2]->id.'/'.$bannerimages[2]->slug) }}">
                                        <img style="filter: brightness(50%);" src="{{ URL::asset('root/upload/blogs/big/'.$bannerimages[2]->image) }}"
                                            class="slider-img1">
                                    </a>
                                </figure>
                                <div class="post-details">
                                    <div class="post-details-visible">
                                        <div class="post-cats">
                                            <a href="{{ URL::to('/single/'.$bannerimages[2]->id.'/'.$bannerimages[2]->slug) }}">{{ $bannerimages[2]->title }}</a>
                                        </div>
                                        <h4 class="post-title text-white"><a href="{{ URL::to('/single/'.$bannerimages[2]->id.'/'.$bannerimages[2]->slug) }}">{!!
                                                Str::words($bannerimages[2]->description,25) !!}</a>
                                        </h4>
                                    </div>
                                    <div class="post-meta">
                                        by <a href="{{ URL::to('/single/'.$bannerimages[2]->id.'/'.$bannerimages[2]->slug) }}" class="post-author">{{$bannerimages[2]->created_by_user->first_name  }}&nbsp;{{$bannerimages[2]->created_by_user->last_name  }}</a> - <a href="#" class="post-date">{{
                                            date('d-m-Y',strtotime($bannerimages[2]->created_at)) }}</a>
                                        {{-- <a href="#" class="post-comment">0 Comments</a> --}}
                                    </div>
                                </div>
                            </article>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">

                                {{-- <img src="{{ URL::asset('root/upload/blogs/medium/'.$bannerimages[0]->image) }}"
                                    alt="" class="slider-img2" width="100%"> --}}
                                <div class="grid-item fashion">
                                    <article class="post post-mask overlay-zoom br-sm">
                                        <figure class="post-media">
                                            <a href="{{ URL::to('/single/'.$bannerimages[0]->id.'/'.$bannerimages[0]->slug) }}">
                                                <img style="filter: brightness(50%);" src="{{ URL::asset('root/upload/blogs/medium/'.$bannerimages[0]->image) }}"
                                                    class="slider-img2">
                                            </a>
                                        </figure>
                                        <div class="post-details">
                                            <div class="post-details-visible">
                                                <div class="post-cats">
                                                    <a href="{{ URL::to('/single/'.$bannerimages[0]->id.'/'.$bannerimages[0]->slug) }}">{{ $bannerimages[0]->title }}</a>
                                                </div>
                                                <h4 class="post-title text-white"><a href="{{ URL::to('/single/'.$bannerimages[0]->id.'/'.$bannerimages[0]->slug) }}">{!!
                                                        Str::words($bannerimages[0]->description,6) !!}</a>
                                                </h4>
                                            </div>
                                            {{-- <div class="post-meta">
                                                by <a href="#" class="post-author">Admin</a> - <a href="#"
                                                    class="post-date">{{ date('d-m-Y') }}</a>
                                                <a href="#" class="post-comment">0 Comments</a>
                                            </div>
                                        </div> --}}
                                    </article>
                                </div>


                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">

                                {{-- <img src="{{ URL::asset('root/upload/blogs/medium/'.$bannerimages[1]->image) }}"
                                    alt="" class="slider-img3" width="100%"> --}}
                                <div class="grid-item fashion">
                                    <article class="post post-mask overlay-zoom br-sm">
                                        <figure class="post-media">
                                            <a href="{{ URL::to('/single/'.$bannerimages[1]->id.'/'.$bannerimages[1]->slug) }}">
                                                <img style="filter: brightness(50%);" src="{{ URL::asset('root/upload/blogs/medium/'.$bannerimages[1]->image) }}"
                                                    class="slider-img3">
                                            </a>
                                        </figure>
                                        <div class="post-details">
                                            <div class="post-details-visible">
                                                <div class="post-cats">
                                                    <a href="{{ URL::to('/single/'.$bannerimages[1]->id.'/'.$bannerimages[1]->slug) }}">{{ $bannerimages[1]->title }}</a>
                                                </div>
                                                <h4 class="post-title text-white"><a href="{{ URL::to('/single/'.$bannerimages[1]->id.'/'.$bannerimages[1]->slug) }}">{!!
                                                        Str::words($bannerimages[1]->description,6) !!}</a>
                                                </h4>
                                            </div>
                                            {{-- <div class="post-meta">
                                                by <a href="#" class="post-author">Admin</a> - <a href="#"
                                                    class="post-date">{{ date('d-m-Y') }}</a>
                                                <a href="#" class="post-comment">0 Comments</a>
                                            </div> --}}
                                        </div>
                                    </article>
                                </div>

                            </div>
                        </div>
                    </div>
                </div><br>
                <!-- End Slider -->
                <hr />
                @endif
            </div>
        <!-- Start of Main-->
        <main class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-12">
                        <h2 class="title text-left ls-normal mt-10 pt-1 appear-animate" title="@if($category1){{ $category1->title }}@endif">
                            @if($category1)
                            {{ substr($category1->title,0,57) }}
                            @endif
                            </h2>
                        {{-- <hr class="banner-divider bg-dark mb-2" style="margin-top: -10px;"> --}}
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-12">
                        <div class="tab tab-nav-boxed tab-nav-outline appear-animate">
                           
                            <ul class="nav nav-tabs justify-content-left" style=";margin-top:45px;"
                                role="tablist">
                                @php $tab1=0; @endphp
                                <li class="nav-item mr-2 mb-2 ">
                                    <a class="nav-link  br-sm font-size-md ls-normal " style="float:right" title="Show All"
                                        href="#tab1-all">Show All
                                        {{-- @if($value->title) --}}
                                        {{-- {{ substr($value->title, 0, 17) }} --}}
                                        {{-- @endif --}}
                                        </a>
                                </li>
                                @foreach ($SubcategoriesList1 as $value)
                                    @if ($tab1 == 0)
                                        <li class="nav-item mr-2 mb-2">
                                            <a class="nav-link active br-sm font-size-md ls-normal" title="{{ $value->title }}"
                                                href="#tab1-{{ $tab1 }}">
                                                @if($value->title)
                                                {{ substr($value->title, 0, 17) }}
                                                @endif
                                                </a>
                                        </li>
                                    @else
                                        <li class="nav-item mr-2 mb-2">
                                            <a class="nav-link br-sm font-size-md ls-normal" title="{{ $value->title }}"
                                                href="#tab1-{{ $tab1 }}">
                                                @if($value->title)
                                                {{ substr($value->title, 0, 17) }}
                                                @endif
                                                </a>
                                        </li>
                                    @endif
                                    @php $tab1++; @endphp
                                @endforeach
                               
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End of Tab -->
                <div class="tab-content product-wrapper appear-animate">
                    @php $tab1=0; @endphp
                    @foreach ($SubcategoriesList1 as $subcategory)
                        {{-- @if ($tab1 == 0) --}}
                            <div class="tab-pane pt-0" id="tab1-all">
                                <div class="row">
                                    <!-- End of Banner -->
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="swiper-container swiper-theme"
                                            data-swiper-options="{
                                            'spaceBetween': 20,
                                            'slidesPerView': 1,
                                            'breakpoints': {
                                                '992': {
                                                    'slidesPerView': 2
                                                },
                                                '1200': {
                                                    'slidesPerView': 4
                                                }
                                            }
                                        }">
                                            <div class="swiper-wrapper row cols-xl-4 cols-lg-3 cols-2">
                                                @php $n=0; @endphp
                                                @foreach ($blogs as $key => $value)
                                                    @if ($category1->id == $value->blog_category_id)
                                                        <div class="swiper-slide product-col">
                                                            <div class="grid-item fashion">
                                                                <article class="post post-mask overlay-zoom br-sm">
                                                                    <figure class="post-media">
                                                                        <a href="{{ URL::to('/single/'.$value->id.'/'.$value->slug) }}">
                                                                            <img style="filter: brightness(50%);" src="{{ URL::asset('root/upload/blogs/medium/'.$value->image) }}"
                                                                                width="600" height="420" alt="blog" style="filter: brightness(50%);">
                                                                        </a>
                                                                    </figure>
                                                                    <div class="post-details">
                                                                        <div class="post-details-visible">
                                                                            <div class="post-cats">
                                                                                <a href="{{ URL::to('/single/'.$value->id.'/'.$value->slug) }}">{{
                                                                                    $value->blog_category->title }}</a>
                                                                            </div>
                                                                            <h4 class="post-title text-white"><a
                                                                                    href="{{ URL::to('/single/'.$value->id.'/'.$value->slug) }}">{!!
                                                                                    Str::words($value->title,5) !!}</a>
                                                                            </h4>
                                                                        </div>
                                                                        {{-- <div class="post-meta">
                                                                            by <a href="#" class="post-author">Admin</a> - <a href="#" class="post-date">{{
                                                                                date('d-m-Y') }}</a>
                                                                            <a href="#" class="post-comment">0 Comments</a>
                                                                        </div> --}}
                                                                    </div>
                                                                </article>
                                                            </div>
                                                        </div>
                                                        @php $n++; @endphp
                                                    @endif
                                                @endforeach
                                                @if ($n == 0)
                                                    <div class="swiper-slide product-col">
                                                        <div class="product-wrap"
                                                            style="border:1px solid gainsboro; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;padding:10px;">
                                                            <div class="product text-center">
                                                                <figure class="product-media">
                                                                    <img src="{{ URL::asset('website-assets/images/not-found.jpg') }}"
                                                                        alt="Product Not Found">
                                                                </figure>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                            {{-- <div class="swiper-pagination"></div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Tab Pane -->
                        {{-- @else --}}
                        @if ($tab1 == 0)
                            <div class="tab-pane active pt-0" id="tab1-{{ $tab1 }}">
                                <div class="row">
                                    <!-- End of Banner -->
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="swiper-container swiper-theme"
                                            data-swiper-options="{
                                            'spaceBetween': 20,
                                            'slidesPerView': 1,
                                            'breakpoints': {
                                                '992': {
                                                    'slidesPerView': 2
                                                },
                                                '1200': {
                                                    'slidesPerView': 4
                                                }
                                            }
                                        }">
                                            <div class="swiper-wrapper row cols-xl-4 cols-lg-3 cols-2">
                                                @php $n=0; @endphp
                                                @foreach ($blogs as $key => $value)
                                                    @if ($subcategory->id == $value->blog_sub_category_id && $category1->id == $value->blog_category_id)
                                                        <div class="swiper-slide product-col">
                                                            <div class="grid-item fashion">
                                                                <article class="post post-mask overlay-zoom br-sm">
                                                                    <figure class="post-media">
                                                                        <a href="{{ URL::to('/single/'.$value->id.'/'.$value->slug) }}">
                                                                            <img style="filter: brightness(50%);" src="{{ URL::asset('root/upload/blogs/medium/'.$value->image) }}"
                                                                                width="600" height="420" alt="blog" style="filter: brightness(50%);">
                                                                        </a>
                                                                    </figure>
                                                                    <div class="post-details">
                                                                        <div class="post-details-visible">
                                                                            <div class="post-cats">
                                                                                <a href="{{ URL::to('/single/'.$value->id.'/'.$value->slug) }}">{{
                                                                                    $value->blog_category->title }}</a>
                                                                            </div>
                                                                            <h4 class="post-title text-white"><a
                                                                                    href="{{ URL::to('/single/'.$value->id.'/'.$value->slug) }}">{!!
                                                                                    Str::words($value->title,5) !!}</a>
                                                                            </h4>
                                                                        </div>
                                                                        {{-- <div class="post-meta">
                                                                            by <a href="#" class="post-author">Admin</a> - <a href="#" class="post-date">{{
                                                                                date('d-m-Y') }}</a>
                                                                            <a href="#" class="post-comment">0 Comments</a>
                                                                        </div> --}}
                                                                    </div>
                                                                </article>
                                                            </div>
                                                        </div>
                                                        @php $n++; @endphp
                                                    @endif
                                                @endforeach
                                                @if ($n == 0)
                                                    <div class="swiper-slide product-col">
                                                        <div class="product-wrap"
                                                            style="border:1px solid gainsboro; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;padding:10px;">
                                                            <div class="product text-center">
                                                                <figure class="product-media">
                                                                    <img src="{{ URL::asset('website-assets/images/not-found.jpg') }}"
                                                                        alt="Product Not Found">
                                                                </figure>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                            {{-- <div class="swiper-pagination"></div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Tab Pane -->
                        @else
                            <div class="tab-pane pt-0" id="tab1-{{ $tab1 }}">
                                <div class="row">
                                    <div class="col-lg-3 col-sm-4 mb-4">

                                   </div>
                                    <!-- End of Banner -->
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="swiper-container swiper-theme"
                                            data-swiper-options="{
                                            'spaceBetween': 20,
                                            'slidesPerView': 1,
                                            'breakpoints': {
                                                '992': {
                                                    'slidesPerView': 2
                                                },
                                                '1200': {
                                                    'slidesPerView': 4
                                                }
                                            }
                                        }">
                                            <div class="swiper-wrapper row cols-xl-4 cols-lg-3 cols-2">
                                                @php $n=0; @endphp
                                                @foreach ($blogs as $key => $value)
                                                    @if ($subcategory->id == $value->blog_sub_category_id && $category1->id == $value->blog_category_id)
                                                    <div class="swiper-slide product-col">
                                                        <div class="grid-item fashion">
                                                            <article class="post post-mask overlay-zoom br-sm">
                                                                <figure class="post-media">
                                                                    <a href="{{ URL::to('/single/'.$value->id.'/'.$value->slug) }}">
                                                                        <img style="filter: brightness(50%);" src="{{ URL::asset('root/upload/blogs/medium/'.$value->image) }}"
                                                                            width="600" height="420" alt="blog">
                                                                    </a>
                                                                </figure>
                                                                <div class="post-details">
                                                                    <div class="post-details-visible">
                                                                        <div class="post-cats">
                                                                            <a href="{{ URL::to('/single/'.$value->id.'/'.$value->slug) }}">{{
                                                                                $value->blog_category->title }}</a>
                                                                        </div>
                                                                        <h4 class="post-title text-white"><a
                                                                                href="{{ URL::to('/single/'.$value->id.'/'.$value->slug) }}">{!!
                                                                                Str::words($value->title,5) !!}</a>
                                                                        </h4>
                                                                    </div>
                                                                    {{-- <div class="post-meta">
                                                                        by <a href="#" class="post-author">Admin</a> - <a href="#" class="post-date">{{
                                                                            date('d-m-Y') }}</a>
                                                                        <a href="#" class="post-comment">0 Comments</a>
                                                                    </div> --}}
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                        @php $n++; @endphp
                                                    @endif
                                                @endforeach
                                                @if ($n == 0)
                                                    <div class="swiper-slide product-col">
                                                        <div class="product-wrap"
                                                            style="border:1px solid gainsboro; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;padding:10px;">
                                                            <div class="product text-center">
                                                                <figure class="product-media">
                                                                    <img src="{{ URL::asset('website-assets/images/not-found.jpg') }}"
                                                                        alt="Product Not Found">
                                                                </figure>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                            {{-- <div class="swiper-pagination"></div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Tab Pane -->
                        @endif
                        @php $tab1++; @endphp
                    @endforeach
                </div>
                <!-- End of Tab Content -->
 {{-- //////////////////////////////////////////////////////////////////// --}}
              
 {{-- //////////////////////////////////// --}}
 
                 <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-12">
                        <h2 class="title text-left ls-normal mt-10 pt-1 appear-animate" title="@if($category2){{ $category2->title }}@endif">
                            @if($category2){{ substr($category2->title,0,57) }}@endif</h2>
                        {{-- <hr class="banner-divider bg-dark mb-2" style="margin-top: -10px;"> --}}
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-12">
                        <div class="tab tab-nav-boxed tab-nav-outline appear-animate">
                            <ul class="nav nav-tabs justify-content-left" style="float: left;margin-top:45px;"
                                role="tablist">
                                @php $tab2=0; @endphp
                                <li class="nav-item mr-2 mb-2 ">
                                    <a class="nav-link  br-sm font-size-md ls-normal " style="float:right" title="Show All"
                                        href="#tab2-all">Show All
                                        {{-- @if($value->title) --}}
                                        {{-- {{ substr($value->title, 0, 17) }} --}}
                                        {{-- @endif --}}
                                        </a>
                                </li>
                                @foreach ($SubcategoriesList2 as $value)
                                    @if ($tab2 == 0)
                                        <li class="nav-item mr-2 mb-2">
                                            <a class="nav-link active br-sm font-size-md ls-normal" title="{{ $value->title }}"
                                                href="#tab2-{{ $tab2 }}">{{ substr($value->title, 0, 17) }}</a>
                                        </li>
                                    @else
                                        <li class="nav-item mr-2 mb-2">
                                            <a class="nav-link br-sm font-size-md ls-normal" title="{{ $value->title }}"
                                                href="#tab2-{{ $tab2 }}">{{ substr($value->title, 0, 17) }}</a>
                                        </li>
                                    @endif
                                    @php $tab2++; @endphp
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End of Tab -->
                <div class="tab-content product-wrapper appear-animate">
                    @php $tab2=0; @endphp
                    @foreach ($SubcategoriesList2 as $subcategory)
                    <div class="tab-pane pt-0" id="tab2-all">
                        <div class="row">
                            <!-- End of Banner -->
                            <div class="col-lg-12 col-sm-12">
                                <div class="swiper-container swiper-theme"
                                    data-swiper-options="{
                                    'spaceBetween': 20,
                                    'slidesPerView': 1,
                                    'breakpoints': {
                                        '992': {
                                            'slidesPerView': 2
                                        },
                                        '1200': {
                                            'slidesPerView': 4
                                        }
                                    }
                                }">
                                    <div class="swiper-wrapper row cols-xl-4 cols-lg-3 cols-2">
                                        @php $n=0; @endphp
                                        @foreach ($blogs as $key => $value)
                                            @if ($category2->id == $value->blog_category_id)
                                                <div class="swiper-slide product-col">
                                                    <div class="grid-item fashion">
                                                        <article class="post post-mask overlay-zoom br-sm">
                                                            <figure class="post-media">
                                                                <a href="{{ URL::to('/single/'.$value->id.'/'.$value->slug) }}">
                                                                    <img style="filter: brightness(50%);" src="{{ URL::asset('root/upload/blogs/medium/'.$value->image) }}"
                                                                        width="600" height="420" alt="blog" style="filter: brightness(50%);">
                                                                </a>
                                                            </figure>
                                                            <div class="post-details">
                                                                <div class="post-details-visible">
                                                                    <div class="post-cats">
                                                                        <a href="{{ URL::to('/single/'.$value->id.'/'.$value->slug) }}">{{
                                                                            $value->blog_category->title }}</a>
                                                                    </div>
                                                                    <h4 class="post-title text-white"><a
                                                                            href="{{ URL::to('/single/'.$value->id.'/'.$value->slug) }}">{!!
                                                                            Str::words($value->title,5) !!}</a>
                                                                    </h4>
                                                                </div>
                                                                {{-- <div class="post-meta">
                                                                    by <a href="#" class="post-author">Admin</a> - <a href="#" class="post-date">{{
                                                                        date('d-m-Y') }}</a>
                                                                    <a href="#" class="post-comment">0 Comments</a>
                                                                </div> --}}
                                                            </div>
                                                        </article>
                                                    </div>
                                                </div>
                                                @php $n++; @endphp
                                            @endif
                                        @endforeach
                                        @if ($n == 0)
                                            <div class="swiper-slide product-col">
                                                <div class="product-wrap"
                                                    style="border:1px solid gainsboro; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;padding:10px;">
                                                    <div class="product text-center">
                                                        <figure class="product-media">
                                                            <img src="{{ URL::asset('website-assets/images/not-found.jpg') }}"
                                                                alt="Product Not Found">
                                                        </figure>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    {{-- <div class="swiper-pagination"></div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                        @if ($tab2 == 0)
                            <div class="tab-pane active pt-0" id="tab2-{{ $tab2 }}">
                                <div class="row">
                                    <div class="col-lg-3 col-sm-4 mb-4">
                                        <div class="banner h-100 br-sm"
                                            style="background-image: url({{ $homeSettings->category2_image }});
                                            background-color: #ebeced;">
                                        </div>
                                    </div>
                                    <!-- End of Banner -->
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="swiper-container swiper-theme"
                                            data-swiper-options="{
                                            'spaceBetween': 20,
                                            'slidesPerView': 1,
                                            'breakpoints': {
                                                '992': {
                                                    'slidesPerView': 2
                                                },
                                                '1200': {
                                                    'slidesPerView': 4
                                                }
                                            }
                                        }">
                                            <div class="swiper-wrapper row cols-xl-4 cols-lg-3 cols-2">
                                                @php $n2=0; @endphp
                                                @foreach ($blogs as $key => $value)
                                                    @if ($subcategory->id == $value->blog_sub_category_id && $category2->id == $value->blog_category_id)
                                                    <div class="swiper-slide product-col">
                                                        <div class="grid-item fashion">
                                                            <article class="post post-mask overlay-zoom br-sm">
                                                                <figure class="post-media">
                                                                    <a href="{{ URL::to('/single/'.$value->id.'/'.$value->slug) }}">
                                                                        <img style="filter: brightness(50%);" src="{{ URL::asset('root/upload/blogs/medium/'.$value->image) }}"
                                                                            width="600" height="420" alt="blog">
                                                                    </a>
                                                                </figure>
                                                                <div class="post-details">
                                                                    <div class="post-details-visible">
                                                                        <div class="post-cats">
                                                                            <a href="{{ URL::to('/single/'.$value->id.'/'.$value->slug) }}">{{
                                                                                $value->blog_category->title }}</a>
                                                                        </div>
                                                                        <h4 class="post-title text-white"><a
                                                                                href="{{ URL::to('/single/'.$value->id.'/'.$value->slug) }}">{!!
                                                                                Str::words($value->title,5) !!}</a>
                                                                        </h4>
                                                                    </div>
                                                                    {{-- <div class="post-meta">
                                                                        by <a href="#" class="post-author">Admin</a> - <a href="#" class="post-date">{{
                                                                            date('d-m-Y') }}</a>
                                                                        <a href="#" class="post-comment">0 Comments</a>
                                                                    </div> --}}
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                        @php $n2++; @endphp
                                                    @endif
                                                @endforeach
                                                @if ($n2 == 0)
                                                    <div class="swiper-slide product-col">
                                                        <div class="product-wrap"
                                                            style="border:1px solid gainsboro; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;padding:10px;">
                                                            <div class="product text-center">
                                                                <figure class="product-media">
                                                                    <img src="{{ URL::asset('website-assets/images/not-found.jpg') }}"
                                                                        alt="Product Not Found">
                                                                </figure>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                            {{-- <div class="swiper-pagination"></div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Tab Pane -->
                        @else
                            <div class="tab-pane pt-0" id="tab2-{{ $tab2 }}">
                                <div class="row">
                                    <div class="col-lg-3 col-sm-4 mb-4">
                                        <div class="banner h-100 br-sm"
                                            style="background-image: url({{ $homeSettings->category2_image }});
                                            background-color: #ebeced;">
                                        </div>
                                    </div>
                                    <!-- End of Banner -->
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="swiper-container swiper-theme"
                                            data-swiper-options="{
                                            'spaceBetween': 20,
                                            'slidesPerView': 1,
                                            'breakpoints': {
                                                '992': {
                                                    'slidesPerView': 2
                                                },
                                                '1200': {
                                                    'slidesPerView': 4
                                                }
                                            }
                                        }">
                                            <div class="swiper-wrapper row cols-xl-4 cols-lg-3 cols-2">
                                                @php $n2=0; @endphp
                                                @foreach ($blogs as $key => $value)
                                                    @if ($subcategory->id == $value->blog_sub_category_id && $category2->id == $value->blog_category_id)
                                                    <div class="swiper-slide product-col">
                                                        <div class="grid-item fashion">
                                                            <article class="post post-mask overlay-zoom br-sm">
                                                                <figure class="post-media">
                                                                    <a href="{{ URL::to('/single/'.$value->id.'/'.$value->slug) }}">
                                                                        <img style="filter: brightness(50%);" src="{{ URL::asset('root/upload/blogs/medium/'.$value->image) }}"
                                                                            width="600" height="420" alt="blog">
                                                                    </a>
                                                                </figure>
                                                                <div class="post-details">
                                                                    <div class="post-details-visible">
                                                                        <div class="post-cats">
                                                                            <a href="{{ URL::to('/single/'.$value->id.'/'.$value->slug) }}">{{
                                                                                $value->blog_category->title }}</a>
                                                                        </div>
                                                                        <h4 class="post-title text-white"><a
                                                                                href="{{ URL::to('/single/'.$value->id.'/'.$value->slug) }}">{!!
                                                                                Str::words($value->title,5) !!}</a>
                                                                        </h4>
                                                                    </div>
                                                                    {{-- <div class="post-meta">
                                                                        by <a href="#" class="post-author">Admin</a> - <a href="#" class="post-date">{{
                                                                            date('d-m-Y') }}</a>
                                                                        <a href="#" class="post-comment">0 Comments</a>
                                                                    </div> --}}
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                        @php $n2++; @endphp
                                                    @endif
                                                @endforeach
                                                @if ($n2 == 0)
                                                    <div class="swiper-slide product-col">
                                                        <div class="product-wrap"
                                                            style="border:1px solid gainsboro; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;padding:10px;">
                                                            <div class="product text-center">
                                                                <figure class="product-media">
                                                                    <img src="{{ URL::asset('website-assets/images/not-found.jpg') }}"
                                                                        alt="Product Not Found">
                                                                </figure>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                            {{-- <div class="swiper-pagination"></div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Tab Pane -->
                        @endif
                        @php $tab2++; @endphp
                    @endforeach
                </div>
                <!-- End of Tab Content -->

                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-12">
                        <h2 class="title text-left ls-normal mt-10 pt-1 appear-animate" title="@if($category3){{ $category3->title }}@endif">@if($category3){{ substr($category3->title,0,57) }}@endif</h2>
                        {{-- <hr class="banner-divider bg-dark mb-2" style="margin-top: -10px;"> --}}
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-12">
                        <div class="tab tab-nav-boxed tab-nav-outline appear-animate">
                            <ul class="nav nav-tabs justify-content-left" style="float: left;margin-top:45px;"
                                role="tablist">
                                @php $tab3=0; @endphp
                                <li class="nav-item mr-2 mb-2 ">
                                    <a class="nav-link  br-sm font-size-md ls-normal " style="float:right" title="Show All"
                                        href="#tab3-3000">Show All
                                        {{-- @if($value->title) --}}
                                        {{-- {{ substr($value->title, 0, 17) }} --}}
                                        {{-- @endif --}}
                                        </a>
                                </li>
                                @foreach ($SubcategoriesList3 as $value)
                                    @if ($tab3 == 0)
                                        <li class="nav-item mr-2 mb-2">
                                            <a class="nav-link active br-sm font-size-md ls-normal" title="{{ $value->title }}"
                                                href="#tab3-{{ $tab3 }}">{{ substr($value->title, 0, 17) }}</a>
                                        </li>
                                    @else
                                        <li class="nav-item mr-2 mb-2">
                                            <a class="nav-link br-sm font-size-md ls-normal" title="{{ $value->title }}"
                                                href="#tab3-{{ $tab3 }}">{{ substr($value->title, 0, 17) }}</a>
                                        </li>
                                    @endif
                                    @php $tab3++; @endphp
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End of Tab -->
                <div class="tab-content product-wrapper appear-animate">
                    @php $tab3=0; @endphp
                    @foreach ($SubcategoriesList3 as $subcategory)
                    <div class="tab-pane pt-0" id="tab3-3000">
                        <div class="row">
                            <!-- End of Banner -->
                            <div class="col-lg-12 col-sm-12">
                                <div class="swiper-container swiper-theme"
                                    data-swiper-options="{
                                    'spaceBetween': 20,
                                    'slidesPerView': 1,
                                    'breakpoints': {
                                        '992': {
                                            'slidesPerView': 2
                                        },
                                        '1200': {
                                            'slidesPerView': 4
                                        }
                                    }
                                }">
                                    <div class="swiper-wrapper row cols-xl-4 cols-lg-3 cols-2">
                                        @php $n=0; @endphp
                                        @foreach ($blogs as $key => $value)
                                            @if ($category3->id == $value->blog_category_id)
                                                <div class="swiper-slide product-col">
                                                    <div class="grid-item fashion">
                                                        <article class="post post-mask overlay-zoom br-sm">
                                                            <figure class="post-media">
                                                                <a href="{{ URL::to('/single/'.$value->id.'/'.$value->slug) }}">
                                                                    <img style="filter: brightness(50%);" src="{{ URL::asset('root/upload/blogs/medium/'.$value->image) }}"
                                                                        width="600" height="420" alt="blog" style="filter: brightness(50%);">
                                                                </a>
                                                            </figure>
                                                            <div class="post-details">
                                                                <div class="post-details-visible">
                                                                    <div class="post-cats">
                                                                        <a href="{{ URL::to('/single/'.$value->id.'/'.$value->slug) }}">{{
                                                                            $value->blog_category->title }}</a>
                                                                    </div>
                                                                    <h4 class="post-title text-white"><a
                                                                            href="{{ URL::to('/single/'.$value->id.'/'.$value->slug) }}">{!!
                                                                            Str::words($value->title,5) !!}</a>
                                                                    </h4>
                                                                </div>
                                                                {{-- <div class="post-meta">
                                                                    by <a href="#" class="post-author">Admin</a> - <a href="#" class="post-date">{{
                                                                        date('d-m-Y') }}</a>
                                                                    <a href="#" class="post-comment">0 Comments</a>
                                                                </div> --}}
                                                            </div>
                                                        </article>
                                                    </div>
                                                </div>
                                                @php $n++; @endphp
                                            @endif
                                        @endforeach
                                        @if ($n == 0)
                                            <div class="swiper-slide product-col">
                                                <div class="product-wrap"
                                                    style="border:1px solid gainsboro; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;padding:10px;">
                                                    <div class="product text-center">
                                                        <figure class="product-media">
                                                            <img src="{{ URL::asset('website-assets/images/not-found.jpg') }}"
                                                                alt="Product Not Found">
                                                        </figure>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    {{-- <div class="swiper-pagination"></div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                        @if ($tab3 == 0)
                            <div class="tab-pane active pt-0" id="tab3-{{ $tab3 }}">
                                <div class="row">
                                    <div class="col-lg-3 col-sm-4 mb-4">
                                        <div class="banner h-100 br-sm"
                                            style="background-image: url({{ $homeSettings->category3_image }});
                                            background-color: #ebeced;">
                                        </div>
                                    </div>
                                    <!-- End of Banner -->
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="swiper-container swiper-theme"
                                            data-swiper-options="{
                                            'spaceBetween': 20,
                                            'slidesPerView': 1,
                                            'breakpoints': {
                                                '992': {
                                                    'slidesPerView': 2
                                                },
                                                '1200': {
                                                    'slidesPerView': 4
                                                }
                                            }
                                        }">
                                            <div class="swiper-wrapper row cols-xl-4 cols-lg-3 cols-2">
                                                @php $n3=0; @endphp
                                                @foreach ($blogs as $key => $value)
                                                    @if ($subcategory->id == $value->blog_sub_category_id && $category3->id == $value->blog_category_id)
                                                    <div class="swiper-slide product-col">
                                                        <div class="grid-item fashion">
                                                            <article class="post post-mask overlay-zoom br-sm">
                                                                <figure class="post-media">
                                                                    <a href="{{ URL::to('/single/'.$value->id.'/'.$value->slug) }}">
                                                                        <img style="filter: brightness(50%);" src="{{ URL::asset('root/upload/blogs/medium/'.$value->image) }}"
                                                                            width="600" height="420" alt="blog">
                                                                    </a>
                                                                </figure>
                                                                <div class="post-details">
                                                                    <div class="post-details-visible">
                                                                        <div class="post-cats">
                                                                            <a href="{{ URL::to('/single/'.$value->id.'/'.$value->slug) }}">{{
                                                                                $value->blog_category->title }}</a>
                                                                        </div>
                                                                        <h4 class="post-title text-white"><a
                                                                                href="{{ URL::to('/single/'.$value->id.'/'.$value->slug) }}">{!!
                                                                                Str::words($value->title,5) !!}</a>
                                                                        </h4>
                                                                    </div>
                                                                    {{-- <div class="post-meta">
                                                                        by <a href="#" class="post-author">Admin</a> - <a href="#" class="post-date">{{
                                                                            date('d-m-Y') }}</a>
                                                                        <a href="#" class="post-comment">0 Comments</a>
                                                                    </div> --}}
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                        @php $n3++; @endphp
                                                    @endif
                                                @endforeach
                                                @if ($n3 == 0)
                                                    <div class="swiper-slide product-col">
                                                        <div class="product-wrap"
                                                            style="border:1px solid gainsboro; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;padding:10px;">
                                                            <div class="product text-center">
                                                                <figure class="product-media">
                                                                    <img src="{{ URL::asset('website-assets/images/not-found.jpg') }}"
                                                                        alt="Product Not Found">
                                                                </figure>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                            {{-- <div class="swiper-pagination"></div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Tab Pane -->
                        @else
                            <div class="tab-pane pt-0" id="tab3-{{ $tab3 }}">
                                <div class="row">
                                    <div class="col-lg-3 col-sm-4 mb-4">
                                        <div class="banner h-100 br-sm"
                                            style="background-image: url({{ $homeSettings->category3_image }});
                                            background-color: #ebeced;">
                                        </div>
                                    </div>
                                    <!-- End of Banner -->
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="swiper-container swiper-theme"
                                            data-swiper-options="{
                                            'spaceBetween': 20,
                                            'slidesPerView': 1,
                                            'breakpoints': {
                                                '992': {
                                                    'slidesPerView': 2
                                                },
                                                '1200': {
                                                    'slidesPerView': 4
                                                }
                                            }
                                        }">
                                            <div class="swiper-wrapper row cols-xl-4 cols-lg-3 cols-2">
                                                @php $n3=0; @endphp
                                                @foreach ($blogs as $key => $value)
                                                    @if ($subcategory->id == $value->blog_sub_category_id && $category3->id == $value->blog_category_id)
                                                    <div class="swiper-slide product-col">
                                                        <div class="grid-item fashion">
                                                            <article class="post post-mask overlay-zoom br-sm">
                                                                <figure class="post-media">
                                                                    <a href="{{ URL::to('/single/'.$value->id.'/'.$value->slug) }}">
                                                                        <img style="filter: brightness(50%);" src="{{ URL::asset('root/upload/blogs/medium/'.$value->image) }}"
                                                                            width="600" height="420" alt="blog">
                                                                    </a>
                                                                </figure>
                                                                <div class="post-details">
                                                                    <div class="post-details-visible">
                                                                        <div class="post-cats">
                                                                            <a href="{{ URL::to('/single/'.$value->id.'/'.$value->slug) }}">{{
                                                                                $value->blog_category->title }}</a>
                                                                        </div>
                                                                        <h4 class="post-title text-white"><a
                                                                                href="{{ URL::to('/single/'.$value->id.'/'.$value->slug) }}">{!!
                                                                                Str::words($value->title,5) !!}</a>
                                                                        </h4>
                                                                    </div>
                                                                    {{-- <div class="post-meta">
                                                                        by <a href="#" class="post-author">Admin</a> - <a href="#" class="post-date">{{
                                                                            date('d-m-Y') }}</a>
                                                                        <a href="#" class="post-comment">0 Comments</a>
                                                                    </div> --}}
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                        @php $n3++; @endphp
                                                    @endif
                                                @endforeach
                                                @if ($n3 == 0)
                                                    <div class="swiper-slide product-col">
                                                        <div class="product-wrap"
                                                            style="border:1px solid gainsboro; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;padding:10px;">
                                                            <div class="product text-center">
                                                                <figure class="product-media">
                                                                    <img src="{{ URL::asset('website-assets/images/not-found.jpg') }}"
                                                                        alt="Product Not Found">
                                                                </figure>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                            {{-- <div class="swiper-pagination"></div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Tab Pane -->
                        @endif
                        @php $tab3++; @endphp
                    @endforeach
                </div>
                <!-- End of Tab Content -->

                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-12">
                        <h2 class="title text-left ls-normal mt-10 pt-1 appear-animate" title="@if($category4){{ $category4->title }}@endif">@if($category4){{ substr($category4->title,0,57) }}@endif</h2>
                        {{-- <hr class="banner-divider bg-dark mb-2" style="margin-top: -10px;"> --}}
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-12">
                        <div class="tab tab-nav-boxed tab-nav-outline appear-animate">
                            <ul class="nav nav-tabs justify-content-left" style="float: left;margin-top:45px;"
                                role="tablist">
                                @php $tab4=0; @endphp
                                <li class="nav-item mr-2 mb-2 ">
                                    <a class="nav-link  br-sm font-size-md ls-normal " style="float:right" title="Show All"
                                        href="#tab4-4000">Show All
                                        {{-- @if($value->title) --}}
                                        {{-- {{ substr($value->title, 0, 17) }} --}}
                                        {{-- @endif --}}
                                        </a>
                                </li>
                                @foreach ($SubcategoriesList4 as $value)
                                    @if ($tab4 == 0)
                                        <li class="nav-item mr-2 mb-2">
                                            <a class="nav-link active br-sm font-size-md ls-normal" title="{{ $value->title }}"
                                                href="#tab4-{{ $tab4 }}">{{ substr($value->title, 0, 17) }}</a>
                                        </li>
                                    @else
                                        <li class="nav-item mr-2 mb-2">
                                            <a class="nav-link br-sm font-size-md ls-normal" title="{{ $value->title }}"
                                                href="#tab4-{{ $tab4 }}">{{ substr($value->title, 0, 17) }}</a>
                                        </li>
                                    @endif
                                    @php $tab4++; @endphp
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End of Tab -->
                <div class="tab-content product-wrapper appear-animate">
                    @php $tab4=0; @endphp
                    @foreach ($SubcategoriesList4 as $subcategory)
                            <div class="tab-pane pt-0" id="tab4-4000">
                                <div class="row">
                                    <!-- End of Banner -->
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="swiper-container swiper-theme"
                                            data-swiper-options="{
                                            'spaceBetween': 20,
                                            'slidesPerView': 1,
                                            'breakpoints': {
                                                '992': {
                                                    'slidesPerView': 2
                                                },
                                                '1200': {
                                                    'slidesPerView': 4
                                                }
                                            }
                                        }">
                                            <div class="swiper-wrapper row cols-xl-4 cols-lg-3 cols-2">
                                                @php $n=0; @endphp
                                                @foreach ($blogs as $key => $value)
                                                    @if ($category4->id == $value->blog_category_id)
                                                        <div class="swiper-slide product-col">
                                                            <div class="grid-item fashion">
                                                                <article class="post post-mask overlay-zoom br-sm">
                                                                    <figure class="post-media">
                                                                        <a href="{{ URL::to('/single/'.$value->id.'/'.$value->slug) }}">
                                                                            <img style="filter: brightness(50%);" src="{{ URL::asset('root/upload/blogs/medium/'.$value->image) }}"
                                                                                width="600" height="420" alt="blog" style="filter: brightness(50%);">
                                                                        </a>
                                                                    </figure>
                                                                    <div class="post-details">
                                                                        <div class="post-details-visible">
                                                                            <div class="post-cats">
                                                                                <a href="{{ URL::to('/single/'.$value->id.'/'.$value->slug) }}">{{
                                                                                    $value->blog_category->title }}</a>
                                                                            </div>
                                                                            <h4 class="post-title text-white"><a
                                                                                    href="{{ URL::to('/single/'.$value->id.'/'.$value->slug) }}">{!!
                                                                                    Str::words($value->title,5) !!}</a>
                                                                            </h4>
                                                                        </div>
                                                                        {{-- <div class="post-meta">
                                                                            by <a href="#" class="post-author">Admin</a> - <a href="#" class="post-date">{{
                                                                                date('d-m-Y') }}</a>
                                                                            <a href="#" class="post-comment">0 Comments</a>
                                                                        </div> --}}
                                                                    </div>
                                                                </article>
                                                            </div>
                                                        </div>
                                                        @php $n++; @endphp
                                                    @endif
                                                @endforeach
                                                @if ($n == 0)
                                                    <div class="swiper-slide product-col">
                                                        <div class="product-wrap"
                                                            style="border:1px solid gainsboro; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;padding:10px;">
                                                            <div class="product text-center">
                                                                <figure class="product-media">
                                                                    <img src="{{ URL::asset('website-assets/images/not-found.jpg') }}"
                                                                        alt="Product Not Found">
                                                                </figure>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                            {{-- <div class="swiper-pagination"></div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                    @if ($tab4 == 0)
                            <div class="tab-pane active pt-0" id="tab4-{{ $tab4 }}">
                                <div class="row">
                                    <div class="col-lg-3 col-sm-4 mb-4">
                                        <div class="banner h-100 br-sm"
                                            style="background-image: url({{ $homeSettings->category4_image }});
                                            background-color: #ebeced;">
                                        </div>
                                    </div>
                                    <!-- End of Banner -->
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="swiper-container swiper-theme"
                                            data-swiper-options="{
                                            'spaceBetween': 20,
                                            'slidesPerView': 1,
                                            'breakpoints': {
                                                '992': {
                                                    'slidesPerView': 2
                                                },
                                                '1200': {
                                                    'slidesPerView': 4
                                                }
                                            }
                                        }">
                                            <div class="swiper-wrapper row cols-xl-4 cols-lg-3 cols-2">
                                                @php $n4=0; @endphp
                                                @foreach ($blogs as $key => $value)
                                                    @if ($subcategory->id == $value->blog_sub_category_id && $category4->id == $value->blog_category_id )
                                                    <div class="swiper-slide product-col">
                                                        <div class="grid-item fashion">
                                                            <article class="post post-mask overlay-zoom br-sm">
                                                                <figure class="post-media">
                                                                    <a href="{{ URL::to('/single/'.$value->id.'/'.$value->slug) }}">
                                                                        <img style="filter: brightness(50%);" src="{{ URL::asset('root/upload/blogs/medium/'.$value->image) }}"
                                                                            width="600" height="420" alt="blog">
                                                                    </a>
                                                                </figure>
                                                                <div class="post-details">
                                                                    <div class="post-details-visible">
                                                                        <div class="post-cats">
                                                                            <a href="{{ URL::to('/single/'.$value->id.'/'.$value->slug) }}">{{
                                                                                $value->blog_category->title }}</a>
                                                                        </div>
                                                                        <h4 class="post-title text-white"><a
                                                                                href="{{ URL::to('/single/'.$value->id.'/'.$value->slug) }}">{!!
                                                                                Str::words($value->title,5) !!}</a>
                                                                        </h4>
                                                                    </div>
                                                                    {{-- <div class="post-meta">
                                                                        by <a href="#" class="post-author">Admin</a> - <a href="#" class="post-date">{{
                                                                            date('d-m-Y') }}</a>
                                                                        <a href="#" class="post-comment">0 Comments</a>
                                                                    </div> --}}
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                        @php $n4++; @endphp
                                                    @endif
                                                @endforeach
                                                @if ($n4 == 0)
                                                    <div class="swiper-slide product-col">
                                                        <div class="product-wrap"
                                                            style="border:1px solid gainsboro; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;padding:10px;">
                                                            <div class="product text-center">
                                                                <figure class="product-media">
                                                                    <img src="{{ URL::asset('website-assets/images/not-found.jpg') }}"
                                                                        alt="Product Not Found">
                                                                </figure>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                            {{-- <div class="swiper-pagination"></div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Tab Pane -->
                    @else
                            <div class="tab-pane pt-0" id="tab4-{{ $tab4 }}">
                                <div class="row">
                                    <div class="col-lg-3 col-sm-4 mb-4">
                                        <div class="banner h-100 br-sm"
                                            style="background-image: url({{ $homeSettings->category4_image }});
                                            background-color: #ebeced;">
                                        </div>
                                    </div>
                                    <!-- End of Banner -->
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="swiper-container swiper-theme"
                                            data-swiper-options="{
                                            'spaceBetween': 20,
                                            'slidesPerView': 1,
                                            'breakpoints': {
                                                '992': {
                                                    'slidesPerView': 2
                                                },
                                                '1200': {
                                                    'slidesPerView': 4
                                                }
                                            }
                                        }">
                                            <div class="swiper-wrapper row cols-xl-4 cols-lg-3 cols-2">
                                                @php $n4=0; @endphp
                                                @foreach ($blogs as $key => $value)
                                                    @if ($subcategory->id == $value->blog_sub_category_id && $category4->id == $value->blog_category_id)
                                                    <div class="swiper-slide product-col">
                                                        <div class="grid-item fashion">
                                                            <article class="post post-mask overlay-zoom br-sm">
                                                                <figure class="post-media">
                                                                    <a href="{{ URL::to('/single/'.$value->id.'/'.$value->slug) }}">
                                                                        <img style="filter: brightness(50%);" src="{{ URL::asset('root/upload/blogs/medium/'.$value->image) }}"
                                                                            width="600" height="420" alt="blog">
                                                                    </a>
                                                                </figure>
                                                                <div class="post-details">
                                                                    <div class="post-details-visible">
                                                                        <div class="post-cats">
                                                                            <a href="{{ URL::to('/single/'.$value->id.'/'.$value->slug) }}">{{
                                                                                $value->blog_category->title }}</a>
                                                                        </div>
                                                                        <h4 class="post-title text-white"><a
                                                                                href="{{ URL::to('/single/'.$value->id.'/'.$value->slug) }}">{!!
                                                                                Str::words($value->title,5) !!}</a>
                                                                        </h4>
                                                                    </div>
                                                                    {{-- <div class="post-meta">
                                                                        by <a href="#" class="post-author">Admin</a> - <a href="#" class="post-date">{{
                                                                            date('d-m-Y') }}</a>
                                                                        <a href="#" class="post-comment">0 Comments</a>
                                                                    </div> --}}
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                        @php $n4++; @endphp
                                                    @endif
                                                @endforeach
                                                @if ($n4 == 0)
                                                    <div class="swiper-slide product-col">
                                                        <div class="product-wrap"
                                                            style="border:1px solid gainsboro; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;padding:10px;">
                                                            <div class="product text-center">
                                                                <figure class="product-media">
                                                                    <img src="{{ URL::asset('website-assets/images/not-found.jpg') }}"
                                                                        alt="Product Not Found">
                                                                </figure>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                            {{-- <div class="swiper-pagination"></div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Tab Pane -->
                    @endif
                        @php $tab4++; @endphp
                    @endforeach
                </div>
                <!-- End of Tab Content -->
            </div>
            <!--End of Catainer -->
        </main>
        <!-- End of Main -->

        @include('components.footer')
    </div>
    <!-- End of Page-wrapper-->

    @include('components.sticky-footer')

    <!-- Plugin JS File -->
    <script src="{{ URL::asset('website-assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/vendor/jquery.plugin/jquery.plugin.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/vendor/zoom/jquery.zoom.js') }}"></script>
    <script src="{{ URL::asset('website-assets/vendor/jquery.countdown/jquery.countdown.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/vendor/skrollr/skrollr.min.js') }}"></script>

    <!-- Swiper JS -->
    <script src="{{ URL::asset('website-assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ URL::asset('website-assets/js/main.min.js') }}"></script>

    <script>
        function ChangeCondition(key, key1) {
            var condition = $('#conditionChoice' + key + key1).val();
            var conditionName = condition.split('_')[0];

            var price = condition.split('_')[1];
            var sale_price = condition.split('_')[2];

            $('#finalValue' + key).html('$' + sale_price);
            $('#finalValue2' + key).html('$' + price);
            $('#amount1' + key).val(sale_price);
            $('#amount2' + key).val(price);

            if (conditionName == 'NEW') {
                $('#changeBgColor' + key + '_' + key1).css('background', '#1C77C3');
                $('#changeBgColor' + key + '_' + key1).css('color', 'white');
                $('#changeBgColorr' + key + '_' + (parseInt(key1) + 1)).css('background', '#CCCCCC');
                $('#changeBgColorr' + key + '_' + (parseInt(key1) + 1)).css('color', 'black');
            } else
            if (conditionName == 'REFURBISHED') {
                $('#changeBgColorr' + key + '_' + key1).css('background', '#1C77C3');
                $('#changeBgColorr' + key + '_' + key1).css('color', 'white');
                $('#changeBgColor' + key + '_' + (parseInt(key1) - 1)).css('background', '#CCCCCC');
                $('#changeBgColor' + key + '_' + (parseInt(key1) - 1)).css('color', 'black');
            }

        }


        function ChangeCondition2(key, key1) {
            var condition = $('#conditionChoice2' + key + key1).val();
            var conditionName = condition.split('_')[0];

            var price = condition.split('_')[1];
            var sale_price = condition.split('_')[2];

            $('#finalValue222' + key).html('$' + sale_price);
            $('#finalValue22' + key).html('$' + price);
            $('#amount12' + key).val(sale_price);
            $('#amount222' + key).val(price);

            if (conditionName == 'NEW') {
                $('#changeBgColor2' + key + '_' + key1).css('background', '#1C77C3');
                $('#changeBgColor2' + key + '_' + key1).css('color', 'white');
                $('#changeBgColorr2' + key + '_' + (parseInt(key1) + 1)).css('background', '#CCCCCC');
                $('#changeBgColorr2' + key + '_' + (parseInt(key1) + 1)).css('color', 'black');
            } else
            if (conditionName == 'REFURBISHED') {
                $('#changeBgColorr2' + key + '_' + key1).css('background', '#1C77C3');
                $('#changeBgColorr2' + key + '_' + key1).css('color', 'white');
                $('#changeBgColor2' + key + '_' + (parseInt(key1) - 1)).css('background', '#CCCCCC');
                $('#changeBgColor2' + key + '_' + (parseInt(key1) - 1)).css('color', 'black');
            }
        }


        function ChangeCondition3(key, key1) {
            var condition = $('#conditionChoice23' + key + key1).val();
            var conditionName = condition.split('_')[0];

            var price = condition.split('_')[1];
            var sale_price = condition.split('_')[2];

            $('#finalValue2223' + key).html('$' + sale_price);
            $('#finalValue223' + key).html('$' + price);
            $('#amount123' + key).val(sale_price);
            $('#amount2223' + key).val(price);

            if (conditionName == 'NEW') {
                $('#changeBgColor23' + key + '_' + key1).css('background', '#1C77C3');
                $('#changeBgColor23' + key + '_' + key1).css('color', 'white');
                $('#changeBgColorr23' + key + '_' + (parseInt(key1) + 1)).css('background', '#CCCCCC');
                $('#changeBgColorr23' + key + '_' + (parseInt(key1) + 1)).css('color', 'black');
            } else
            if (conditionName == 'REFURBISHED') {
                $('#changeBgColorr23' + key + '_' + key1).css('background', '#1C77C3');
                $('#changeBgColorr23' + key + '_' + key1).css('color', 'white');
                $('#changeBgColor23' + key + '_' + (parseInt(key1) - 1)).css('background', '#CCCCCC');
                $('#changeBgColor23' + key + '_' + (parseInt(key1) - 1)).css('color', 'black');
            }
        }

        function ChangeCondition4(key, key1) {
            var condition = $('#conditionChoice234' + key + key1).val();
            var conditionName = condition.split('_')[0];

            var price = condition.split('_')[1];
            var sale_price = condition.split('_')[2];

            $('#finalValue22234' + key).html('$' + sale_price);
            $('#finalValue2234' + key).html('$' + price);
            $('#amount1234' + key).val(sale_price);
            $('#amount22234' + key).val(price);

            if (conditionName == 'NEW') {
                $('#changeBgColor234' + key + '_' + key1).css('background', '#1C77C3');
                $('#changeBgColor234' + key + '_' + key1).css('color', 'white');
                $('#changeBgColorr234' + key + '_' + (parseInt(key1) + 1)).css('background', '#CCCCCC');
                $('#changeBgColorr234' + key + '_' + (parseInt(key1) + 1)).css('color', 'black');
            } else
            if (conditionName == 'REFURBISHED') {
                $('#changeBgColorr234' + key + '_' + key1).css('background', '#1C77C3');
                $('#changeBgColorr234' + key + '_' + key1).css('color', 'white');
                $('#changeBgColor234' + key + '_' + (parseInt(key1) - 1)).css('background', '#CCCCCC');
                $('#changeBgColor234' + key + '_' + (parseInt(key1) - 1)).css('color', 'black');
            }
        }

        setInterval(function() {
            // document.querySelector('.alert').style.display = 'none';
        }, 5000);
    </script>

</body>

</html>