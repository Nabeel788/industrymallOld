<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>{{ Str::ucfirst($SingleTraining->title) }}</title>

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
            /* transform: scale(1.1); */
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

        .vl {
            border-left: 2px solid rgb(227, 226, 226);
            height: auto;
        }

        .lectures-feature {
            margin-left: 15%;
            width: 80%;
        }
        .value{
            margin-left: 40%;
        }
        .media {
  display: grid;
  grid-column-gap: 30px;
  grid-template-columns: auto 1fr;
}

.media__asset {
  grid-column-start: 1;
  grid-row: 1 / span 20;
}
.media img{
    border-radius: 100%;
}
    </style>

</head>

<body class="about-us">
    <div class="page-wrapper">

        @include('components.header')

        <!-- Start of Main -->
        <main class="main">
            <!-- Start of Page Header -->
            <div class="page-header">
                <div class="container">
                    <h1 class="page-title mb-0">{{ $SingleTraining->training_category->title }}</h1>
                </div>
            </div>
            <!-- End of Page Header -->

            <!-- Start of Breadcrumb -->
            {{-- <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb bb-no">
                        <li><a href="{{ URL::to('/') }}">Home</a></li>
                        <li><a href="{{ URL::to('/trainings') }}">Trainings</a></li>
                        <li>{{ $SingleTraining->training_category->title }}</li>
                    </ul>
                </div>
            </nav> --}}
            <!-- End of Breadcrumb -->

            <!-- Start of Page Content -->
            <div class="page-content mb-8">
                
                <div class="container mt-10">
                    <div class="row gutter-lg">
                        <div class="main-content post-single-content">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <div class="media" style="border-right: 1px solid rgb(216, 210, 210);">
                                        <h5 style="margin-top: 5px;margin-left:-20px;">Instructor</h5>
                                        @if($instructor)
                                        <img src="{{ URL::asset('root/upload/intructor/big/'.$instructor[0]->image) }}" style="width: 50px;height:50px" class="media__asset">
                                        <p style="margin-top: -20px;margin-left:-20px;">{{ $instructor[0]->name }}</p>
                                        @endif
                                    </div>
                               </div>
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <h5 style="margin-top: 7px;">Category</h5><br>
                                    <p style="margin-top: -40px;"><a href="">{{ $SingleTraining->training_category->title }}</a></p>
                               </div>
                               
                            </div>
                            <div class="post post-grid post-single mt-2">
                                <figure class="post-media br-sm">
                                    <img src="{{ URL::asset('root/upload/trainings/big/'.$SingleTraining->image) }}"
                                        alt="{{ $SingleTraining->title }} Training Image" width="930" height="500" />
                                </figure>
                            </div>

                            <div class="tab tab-nav-boxed tab-nav-underline product-tabs mt-10">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a href="#product-tab-description" class="nav-link active">Overview</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#product-tab-specification" class="nav-link">Descriptions</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#product-tab-instructor" class="nav-link">Instructor</a>
                                    </li>
                                    

                                </ul>
                                <div class="tab-content" style="border: 1px solid gray;">
                                    <div class="tab-pane active" id="product-tab-description">
                                        <div class="row mb-4" style="margin-left: 2%;">
                                            <div class="col-md-8 mb-5">
                                        
                                                {{-- <h4 class="title tab-pane-title font-weight-bold mb-2">Detail</h4> --}}
                                                <p class="mb-4">{!! $SingleTraining->description !!}.</p>
                                            
                                            </div>
                                            <div class="col-md-4 mb-5 ">
                                                <div class="vl">
                                                    <h3 class="title" style="margin-left: 15%;">Course Features</h3>
                                                    <ul class="ull">
                                                        <li class="lectures-feature">
                                                            <i class="fa fa-address-book"></i>
                                                            <span class="label">Lectures</span>
                                                            <span class="value"><b>{{ $SingleTraining->lectures }}</b></span>
                                                            <hr>
                                                        </li>
                                                        <li class="lectures-feature">
                                                            <i class="fa fa-puzzle-piece"></i>
                                                            <span class="label">Quizzes</span>
                                                            <span class="value"><b>{{ $SingleTraining->quizzes }}</b></span>
                                                            <hr>
                                                        </li>
                                                        <li class="lectures-feature">
                                                            <i class="fa fa-clock"></i>
                                                            <span class="label">Duration</span>
                                                            <span class="value"><b>{{ $SingleTraining->duration }}</b></span>
                                                            <hr>
                                                        </li>
                                                        <li class="lectures-feature">
                                                            <i class="fa fa-level-up-alt"></i>
                                                            <span class="label"> Skill level</span>
                                                            <span class="value"><b>{{ $SingleTraining->skill_level }}</b></span>
                                                            <hr>
                                                        </li>
                                                        <li class="lectures-feature">
                                                            <i class="fa fa-language"></i>
                                                            <span class="label">Language</span>
                                                            <span class="value"><b>{{ $SingleTraining->language }}</b></span>
                                                            <hr>
                                                        </li>
                                                        <li class="lectures-feature">
                                                            <i class="fa fa-user"></i>
                                                            <span class="label">Students</span>
                                                            <span class="value"><b>{{ $SingleTraining->students }}</b></span>
                                                            <hr>
                                                        </li>
                                                        <li class="lectures-feature">
                                                            <i class="fa fa-certificate"></i>
                                                            <span class="label">Certificate</span>
                                                            <span class="value"><b>{{ $SingleTraining->certificate }}</b></span>
                                                            <hr>
                                                        </li>
                                                        <li class="lectures-feature">
                                                            <i class="fa fa-square"></i>
                                                            <span class="label">Assessments</span>
                                                            <span class="value"><b>{{ $SingleTraining->assessments }}</b></span>
                                                            <hr>
                                                        </li>
                                                       
                                                       
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane" id="product-tab-specification">
                                        <div class="row mb-4" style="margin-left: 2%;">
                                            <div class="col-md-8 mb-5">
                                        
                                                {{-- <h4 class="title tab-pane-title font-weight-bold mb-2">Detail Specification</h4> --}}
                                                <p class="mb-4">{!! $SingleTraining->specification !!}.</p>
                                            
                                            </div>
                                    </div>
                                    </div>
                                    <div class="tab-pane" id="product-tab-instructor">
                                        @if($instructor)
                                        <div class="comment-body">
                                            <figure class="comment-avatar" style="margin-left: 2%;">
                                                <img src="{{ URL::asset('root/upload/intructor/big/'.$instructor[0]->image) }}" alt="Avatar"  style="border-radius:50%; height:100px;width:100%; margin-top:-10%;"/>
                                            </figure>
                                            <div class="comment-content">
                                                <h4 class="comment-author font-weight-bold">
                                                    <a href="#">{{ $instructor[0]->name }}</a>
                                                </h4>
                                                {{-- <p>Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl.arcu fer
                                                    ment umet, dapibus sed, urna.</p> --}}
                                                <p>{{ $instructor[0]->courses }}</p>
                                                <p>{{ $instructor[0]->education }}</p>
                                                <p>{{ $instructor[0]->email }}</p>
                                                <p>{{ $instructor[0]->phone }}</p>
                                                
                
                                            </div>
                                        </div>
                                        @endif
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
                                                                    <img src="{{ asset('root/upload/trainings/big/'.$value->image) }}"
                                                                        alt="150" height="150" />
                                                                </figure>
                                                                <div class="post-details">
                                                                    <div class="post-meta">
                                                                        <a href="#" class="post-date">{{
                                                                            date('d-m-Y',strtotime($value->created_at))
                                                                            }}</a>
                                                                    </div>
                                                                    <h4 class="post-title">
                                                                        <a
                                                                            href="{{ asset('single-training') }}/{{ $value->id }}/{{ $value->slug }}">{{
                                                                            $value->title }}</a>
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
                            </div>
                        </aside>

                    </div>
                <br><br><br>

                    <div class="row" style="margin-left:40px;">
                        <div class="col-lg-9">
                            <h1>YOU MAY ALSO LIKE</h1>
                            <hr />
                            <div class="row">
                                @foreach ($trainings as $key=>$value)
                                <div class="col-sm-3">
                                    <div class="product-wrap {{ $value->training_category->title }}">
                                        <div class="product product-simple text-center">
                                            <figure class="product-media">
                                                <a
                                                    href="{{ asset('single-training') }}/{{ $value->id }}/{{ $value->slug }}">
                                                    <img src="{{ URL::asset('root/upload/trainings/medium/'.$value->image) }}"
                                                        alt="Product" width="300" height="338">
                                                </a>

                                                <div class="product-action">
                                                    <a href="{{ asset('single-training') }}/{{ $value->id }}/{{ $value->slug }}"
                                                        class="btn-product btn-quickview" title="Quick View">Quick
                                                        View</a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name"><a
                                                        href="{{ asset('single-training') }}/{{ $value->id }}/{{ $value->slug }}"><b>{{
                                                            $value->title }}</b></a></h4>
                                                <hr>
                                                <div class="ratings-container">
                                                    @if($value->instructor)
                                                    <div>
                                                        <a href="{{ asset('single-training') }}/{{ $value->id }}/{{ $value->slug }}"
                                                            style="color:black"><img
                                                                src="{{ URL::asset('root/upload/intructor/big/'.$value->instructor->image) }}"
                                                                alt=""
                                                                style="width:25%; height:40px; border-radius: 100%;">&nbsp;&nbsp;&nbsp;
                                                            {{ $value->instructor->name }}</a>
                                                    </div>
                                                    @endif
                                                    {{-- <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div> --}}
                                                    <a href="{{ asset('single-training') }}/{{ $value->id }}/{{ $value->slug }}"
                                                        class="rating-reviews"></a>

                                                </div>
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @endforeach
                            </div>
                        </div>


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