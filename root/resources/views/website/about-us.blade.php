<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Industry Mall | About US</title>

    <meta name="keywords" content="Marketplace ecommerce responsive HTML5 Template" />
    <meta name="description" content="Wolmart is powerful marketplace &amp; ecommerce responsive Html5 Template.">
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
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('website-assets/css/custom.css') }}">
    <!-- Animated Progress Bar CSS -->
    <style>
        @media only screen and (max-width: 992px) {
            .aboutus-title {
                margin-top: 50px;
            }
        }

        @media only screen and (max-width: 992px) and (min-width:768px) {
            .about-read-more-btn {
                margin-bottom: 50px;
            }
        }

        .skill-bars {
            padding: 25px 30px;
            /* width: 600px; */
            background: #fff;
            /* box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.2); */
            border-radius: 10px;
            /* z-index: 100px; */
        }

        .skill-bars .bar {
            margin: 20px 0;
        }

        .skill-bars .bar:first-child {
            margin-top: 0px;
        }

        .skill-bars .bar .info {
            margin-bottom: 5px;
        }

        .skill-bars .bar .info span {
            font-weight: 500;
            font-size: 17px;
            opacity: 0;
            animation: showText 0.5s 1s linear forwards;
        }

        @keyframes showText {
            100% {
                opacity: 1;
            }
        }

        .skill-bars .bar .progress-line {
            height: 10px;
            width: 100%;
            background: #f0f0f0;
            position: relative;
            transform: scaleX(0);
            transform-origin: left;
            border-radius: 10px;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05),
                0 1px rgba(255, 255, 255, 0.8);
            animation: animate 1s cubic-bezier(1, 0, 0.5, 1) forwards;
        }

        @keyframes animate {
            100% {
                transform: scaleX(1);
            }
        }

        .bar .progress-line span {
            height: 100%;
            position: absolute;
            border-radius: 10px;
            transform: scaleX(0);
            transform-origin: left;
            background: #6665ee;
            animation: animate 1s 1s cubic-bezier(1, 0, 0.5, 1) forwards;
        }

        {!! $skillsCss !!}
        .progress-line span::before {
            position: absolute;
            content: "";
            top: -10px;
            right: 0;
            height: 0;
            width: 0;
            border: 7px solid transparent;
            border-bottom-width: 0px;
            border-right-width: 0px;
            border-top-color: #000;
            opacity: 0;
            animation: showText2 0.5s 1.5s linear forwards;

        }

        .progress-line span::after {
            position: absolute;
            top: -28px;
            right: 0;
            font-weight: 500;
            background: #000;
            color: #fff;
            padding: 1px 8px;
            font-size: 12px;
            border-radius: 3px;
            opacity: 0;
            animation: showText2 0.5s 1.5s linear forwards;
        }

        @keyframes showText2 {
            100% {
                opacity: 1;
            }
        }

        {!! $skillsCss2 !!}

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
                    <h1 class="page-title mb-0">About Us</h1>
                </div>
            </div>
            <!-- End of Page Header -->

            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav pb-8">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="{{ URL::to('/') }}">Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->
                {{-- start of about content --}}
                <div class="page-content boost-section" style="margin-top: -40px;background-color: #F5F7FD;">
                    <section class="pb-10">
                        <div class="container pt-10 mb-9">
                         <div class="row">
                          <div class="col-lg-6 col-md-6 col-sm-12">  {!! $about[0]->mission !!}</div>
                           <div class="col-lg-6 col-md-6 col-sm-12">{!! $about[0]->stories !!}</div>
                           <div class="col-lg-6 col-md-6 col-sm-12"> {!! $about[0]->approach !!}</div>
                        <div class="col-lg-6 col-md-6 col-sm-12"> {!! $about[0]->philosophy !!}</div>
                        </div>
                        </div>
                        {{-- <div class="container pt-10 mb-9">
                         <div class="row">

                        </div>
                        </div> --}}
                    </section>
                </div>
                {{-- end of about content --}}
            <!-- Start of Page Content -->
            <div class="page-content boost-section" style="margin-top: -40px;background-color: #F5F7FD;">
                <section class="pb-10">
                    <div class="container pt-10 mb-9">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <h1 class="title title-center mb-5 about-us-services-title">Services</h1>
                            </div>
                        </div>
                        <div class="row mt-5 text-center">
                            @foreach ($services as $value)
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <img src="{{ URL::asset('root/upload/services/small/' . $value->image) }}"
                                        style="width: 35px;" alt="">
                                    <p class="mt-2 service-title-text">{{ $value->title }}</p>
                                    <p style="margin-top: -20px;">{!! Str::words($value->description, 20) !!}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
            </div>
            <section>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <img src="{{ URL::asset('website-assets/images/startup-bg-left.b5e2eeb8.jpg') }}"
                            style="width:100%;height:650px;" alt="">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="row">
                            <div class="col-1"></div>
                            <div class="col-lg-10 col-md-12 col-sm-12">
                                <h2 style="margin-top: 120px;margin-left:30px;">OUR SKILLS</h2>
                                <p style="margin-top: -10px;margin-left:30px;">We develop big ideas that sell</p>
                                <div class="skill-bars">
                                    @foreach ($skills as $skill)
                                        <div class="bar">
                                            <div class="info">
                                                <span>{{ Str::upper($skill->title) }}</span>
                                            </div>
                                            <div class="progress-line {{ Str::lower($skill->title) }}">
                                                <span id="bar" style="width:{{ $skill->percentage }}%;"></span>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-1"></div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- <section class="count-section pt-3 pb-3" style="background: black;">
                <div class="swiper-container swiper-theme swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events"
                    data-swiper-options="{
                    'slidesPerView': 1,
                    'breakpoints': {
                        '600': {
                            'slidesPerView': 2
                        },
                        '768': {
                            'slidesPerView': 3
                        },
                        '992': {
                            'slidesPerView': 4
                        }
                    }
                }">
                    <div class="swiper-wrapper " id="swiper-wrapper-2f600a692bb0f5ba" aria-live="polite">
                        <div class="swiper-slide counter-wrap swiper-slide-active bg-danger" role="group"
                            aria-label="1 / 4" style="width: 313.667px;">
                            <div class="counter text-center">
                                <span class="count-to complete total-achievement text-white" data-to="{{ $about[0]->awards }}"
                                    style="color: white!important;">{{ $about[0]->awards }}</span>
                                <span class="total-achievement" style="color: white!important;">+</span>
                                <h4 class="title title-center text-white">World Awards</h4>
                                <p class="text-white">Talking Seamless key performance<br>
                                    indicators</p>
                            </div>
                        </div>
                        <div class="swiper-slide counter-wrap swiper-slide-next" role="group" aria-label="2 / 4"
                            style="width: 313.667px;">
                            <div class="counter text-center">
                                <span class="count-to complete total-achievement" data-to="{{ $about[0]->projects }}"
                                    style="color: white!important;">{{ $about[0]->projects }}</span>
                                <span class="total-achievement" style="color: white!important;">%</span>
                                <h4 class="title title-center text-white">Project Success</h4>
                                <p class="text-white">Engage fully tested process <br>
                                    improvment platforms.</p>
                            </div>
                        </div>
                        <div class="swiper-slide counter-wrap" role="group" aria-label="3 / 4"
                            style="width: 313.667px;">
                            <div class="counter text-center">
                                <span class="count-to complete total-achievement" data-to="{{ $about[0]->employees }}"
                                    style="color: white!important;">{{ $about[0]->employees }}</span>
                                <span class="total-achievement" style="color: white!important;">+</span>
                                <h4 class="title title-center text-white">Employees</h4>
                                <p class="text-white">Leverage other resource leveling<br>
                                    convergance.</p>
                            </div>
                        </div>
                        <div class="swiper-slide counter-wrap" role="group" aria-label="4 / 4"
                            style="width: 313.667px;">
                            <div class="counter text-center">
                                <span class="count-to complete total-achievement" data-to="{{ $about[0]->clients }}"
                                    style="color: white!important;">{{ $about[0]->clients }}</span>
                                <span class="total-achievement" style="color: white!important;">+</span>
                                <h4 class="title title-center text-white">Worldwide clients</h4>
                                <p class="text-white">Globally network focused<br>
                                    material products.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"
                        style="display: none;"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"
                            tabindex="0" role="button" aria-label="Go to slide 1"></span></div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
            </section> --}}
            {{-- <section class="customer-service mb-7 bg-white">
                <div class="row align-items-center">
                    <div class="col-md-6 pr-lg-8 mb-8">
                        <div class="row"> --}}
                            {{-- <div class="col-1"></div>
                            <div class="col-10">
                                <h2 class="title aboutus-title text-left">About Us</h2>
                                <p style="margin-top: -10px;">Part of your success</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac vulputate dolor.
                                    Nullam
                                    venenatis enim in quam euismod fringilla. Donec in risus eget purus mattis varius.
                                    Nulla
                                    dapibus quis orci et tincidunt. Phasellus in rhoncus quam. Fusce a est lacinia,
                                    ultricies mi nec, rutrum dolor.</p>
                                <p>Donec vehicula cursus metus viverra aliquet. Nam vel malesuada diam. Proin eleifend
                                    luctus mi, vel tincidunt sapien auctor nec. In quis elit in mauris dignissim
                                    pharetra.
                                    Praesent efficitur dolor a quam tristique ultricies.</p>
                                <button type="button" class="btn btn-secondary btn-ellipse about-read-more-btn">Read
                                    More</button>
                            </div> --}}
                            {{-- <div class="col-1"></div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-8"></div>
                        {{-- <figure class="br-lg" style="border-radius: 0px!important;">
                            <img src="{{ URL::asset('website-assets/images/pages/about_us/2.jpg') }}" alt="Banner"
                                width="100%" height="500" style="background-color: #CECECC;">
                        </figure>

                </div> --}}
            </section>
            {{-- <section class="pt-10 pb-10 parallax parallax-testimonial-section"
                data-parallax-options="{'speed': 10, 'parallaxHeight': '200%', 'offset': 0}"
                data-image-src="{{ URL::asset('website-assets/images/banner.jpg') }}"
                style="position: relative; overflow: hidden;margin-top:-80px;margin-bottom:-20px;">
                <div class="parallax-background"
                    style="background-image: url({{ URL::asset('website-assets/images/banner.jpg') }}); background-size: cover; position: absolute; top: 0px; left: 0px; width: 100%; height: 200%; transform: translate3d(0px, -48.2578px, 0px); background-position-x: 50%;">
                </div>
                <div class="container">
                    <h2 class="title title-center text-white mt-6 mb-2">Testimonials</h2>
                    <div class="swiper-container swiper-nav-lg show-code-action swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events show-code-added"
                        data-swiper-options="{
                        'slidesPerView': 1,
                        'spaceBetween': 20
                    }">
                        <div class="swiper-wrapper " id="swiper-wrapper-581388cc8f8e7fac" aria-live="polite"
                            style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                            @foreach ($testimonials as $key => $value)
                                <div class="swiper-slide testimonial testimonial-centered testimonial-bg swiper-slide-active"
                                    role="group" aria-label="{{ $key + 1 }} / {{ count($testimonials) }}"
                                    style="width: 958px; margin-right: 20px;">
                                    <div class="testimonial-info">
                                        <figure class="testimonial-author-thumbnail">
                                            <img src="{{ URL::asset('root/upload/testimonials/' . $value->image) }}"
                                                alt="Testimonial" width="100" height="100">
                                        </figure>
                                    </div>
                                    <cite>
                                        {{ $value->name }}<span>{{ $value->designation }}</span>
                                    </cite>
                                    <blockquote>{!! $value->message !!}</blockquote>
                                </div>
                            @endforeach
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        {{-- <span class="show-code">&lt;/&gt;</span>
                    </div>
                </div>
            </section> --}}

            {{-- <section class="count-section mb-10">
                <div class="swiper-container swiper-theme swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events"
                    data-swiper-options="{
                    'slidesPerView': 1,
                    'breakpoints': {
                        '600': {
                            'slidesPerView': 2
                        },
                        '768': {
                            'slidesPerView': 3
                        },
                        '992': {
                            'slidesPerView': 4
                        }
                    }
                }">
                    <div class="swiper-wrapper " id="swiper-wrapper-2f600a692bb0f5ba" aria-live="polite">
                        <div class="swiper-slide counter-wrap swiper-slide-active bg-danger" role="group"
                            aria-label="1 / 4" style="width: 313.667px;">
                            <div class="counter text-center">
                                <span class="count-to complete total-achievement" data-to="25">1</span>
                                <span class="total-achievement">+</span>
                                <h4 class="title title-center">World Awards</h4>
                                <p>Talking Seamless key performance<br>
                                    indicators</p>
                            </div>
                        </div>
                        <div class="swiper-slide counter-wrap swiper-slide-next" role="group" aria-label="2 / 4"
                            style="width: 313.667px;">
                            <div class="counter text-center">
                                <span class="count-to complete total-achievement" data-to="50">99</span>
                                <span class="total-achievement">%</span>
                                <h4 class="title title-center">Project Success</h4>
                                <p>Engage fully tested process <br>
                                    improvment platforms.</p>
                            </div>
                        </div>
                        <div class="swiper-slide counter-wrap" role="group" aria-label="3 / 4"
                            style="width: 313.667px;">
                            <div class="counter text-center">
                                <span class="count-to complete total-achievement" data-to="75">60</span>
                                <span class="total-achievement">+</span>
                                <h4 class="title title-center">Employees</h4>
                                <p>Leverage other resource leveling<br>
                                    convergance.</p>
                            </div>
                        </div>
                        <div class="swiper-slide counter-wrap" role="group" aria-label="4 / 4"
                            style="width: 313.667px;">
                            <div class="counter text-center">
                                <span class="count-to complete total-achievement" data-to="100">100</span>
                                <span class="total-achievement">+</span>
                                <h4 class="title title-center">Worldwide clients</h4>
                                <p>Globally network focused<br>
                                    material products.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"
                        style="display: none;"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"
                            tabindex="0" role="button" aria-label="Go to slide 1"></span></div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
            </section> --}}

            {{-- <section class="mb-7 bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-8">
                        <figure class="br-lg">
                            <img src="{{ URL::asset('website-assets/images/pages/about_us/2.jpg') }}" alt="Banner"
                                width="610" height="500"
                                style="background-color: #CECECC;border-radius:0px!important;">
                        </figure>
                    </div>
                    <div class="col-md-6 pr-lg-8 mb-8">
                        <h1 class="title text-left">OUR SKILLS</h1>
                        <p>We develop big ideas that sell</p>
                        @foreach ($skills as $value)
                            <div class="skill">
                                <div class="skill-name">{{ $value->title }}</div>
                                <div class="skill-bar">
                                    <div class="skill-per" per="{{ $value->percentage }}"></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section> --}}
            <section class="bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        {!! $settings->map !!}
                    </div>
                </div>
            </section>
            {{-- <section class="member-section mt-10 pt-9 mb-10 pb-4">
                <div class="container">
                    <h4 class="title title-center mb-3">Meet Our Leaders</h4>
                    <p class="text-center mb-8">Nunc id cursus metus aliquam. Libero id faucibus nisl tincidunt eget. Aliquam<br>
                        maecenas ultricies mi eget mauris. Volutpat ac</p>
                    <div class="swiper-container swiper-theme" data-swiper-options="{
                        'spaceBetween': 20,
                        'slidesPerView': 1,
                        'breakpoints': {
                            '576': {
                                'slidesPerView': 2
                            },
                            '768': {
                                'slidesPerView': 3
                            },
                            '992': {
                                'slidesPerView': 4
                            }
                        }
                    }">
                        <div class="swiper-wrapper row cols-xl-4 cols-lg-3 cols-sm-2 cols-1">
                            <div class="swiper-slide member-wrap">
                                <figure class="br-lg">
                                    <img src="{{ URL::asset('website-assets/images/pages/about_us/4.jpg') }}" alt="Member" width="295" height="332" />
                                    <div class="overlay">
                                        <div class="social-icons">
                                            <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                            <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                            <a href="#" class="social-icon social-instagram w-icon-instagram"></a>
                                        </div>
                                    </div>
                                </figure>
                                <div class="member-info text-center">
                                    <h4 class="member-name">John Doe</h4>
                                    <p class="text-uppercase">Founder &amp; CEO</p>
                                </div>
                            </div>
                            <div class="swiper-slide member-wrap">
                                <figure class="br-lg">
                                    <img src="{{ URL::asset('website-assets/images/pages/about_us/5.jpg') }}" alt="Member" width="295" height="332" />
                                    <div class="overlay">
                                        <div class="social-icons">
                                            <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                            <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                            <a href="#" class="social-icon social-instagram w-icon-instagram"></a>
                                        </div>
                                    </div>
                                </figure>
                                <div class="member-info text-center">
                                    <h4 class="member-name">Jessica Doe</h4>
                                    <p class="text-uppercase">Marketing</p>
                                </div>
                            </div>
                            <div class="swiper-slide member-wrap">
                                <figure class="br-lg">
                                    <img src="{{ URL::asset('website-assets/images/pages/about_us/6.jpg') }}" alt="Member" width="295" height="332" />
                                    <div class="overlay">
                                        <div class="social-icons">
                                            <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                            <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                            <a href="#" class="social-icon social-instagram w-icon-instagram"></a>
                                        </div>
                                    </div>
                                </figure>
                                <div class="member-info text-center">
                                    <h4 class="member-name">Rick Edward Doe</h4>
                                    <p class="text-uppercase">Developer</p>
                                </div>
                            </div>
                            <div class="swiper-slide member-wrap">
                                <figure class="br-lg">
                                    <img src="{{ URL::asset('website-assets/images/pages/about_us/7.jpg') }}" alt="Member" width="295" height="332" />
                                    <div class="overlay">
                                        <div class="social-icons">
                                            <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                            <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                            <a href="#" class="social-icon social-instagram w-icon-instagram"></a>
                                        </div>
                                    </div>
                                </figure>
                                <div class="member-info text-center">
                                    <h4 class="member-name">Melinda Wolosky</h4>
                                    <p class="text-uppercase">Design</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </section> --}}
        </main>
        <!-- End of Main -->
        @include('components.about-footer')
    </div>
    @include('components.sticky-footer')

    <!-- Plugin JS File -->
    <script src="{{ URL::asset('website-assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/vendor/jquery.count-to/jquery.count-to.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/js/main.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/animated-progress-bar/jquery.min.js') }}"></script>
    {{-- <script>
        document.getElementById("bar").style.visibility = "hidden"
    </script> --}}
    <script>
        $('.skill-per').each(function() {
            var $this = $(this);
            var per = $this.attr('per');
            $this.css('width', per + '%');
            $({
                animatedValue: 0
            }).animate({
                animatedValue: per
            }, {
                // duration: 1000,
                // step: function() {
                //     $this.attr('per', Math.floor(this.animatedValue) + '%');
                // },
                complete: function() {
                    $this.attr('per', Math.floor(this.animatedValue) + '%');
                }
            })
        })
    </script>
    <script src="{{ URL::asset('website-assets/js/scroll.js') }}"></script>
</body>

</html>
