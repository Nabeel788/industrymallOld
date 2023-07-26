<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Industry Mall | Home</title>

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

    <!-- Plugins CSS -->
    <!-- <link rel="stylesheet" href="{{ URL::asset('website-assets/vendor/swiper/swiper-bundle.min.css') }}"> -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('website-assets/vendor/animate/animate.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ URL::asset('website-assets/vendor/magnific-popup/magnific-popup.min.css') }}">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="{{ URL::asset('website-assets/vendor/swiper/swiper-bundle.min.css') }}">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('website-assets/css/demo1.min.css') }}">
    <script src="{{ URL::asset('website-assets/vendor/jquery/jquery.min.js') }}"></script>
</head>

<body class="home">
    <div class="page-wrapper">
        <h1 class="d-none">INDUSTRY MALL</h1>

        @include('components.header')

        <!-- Start of Main-->
        <main class="main">
            <section class="intro-section">
                <div class="swiper-container swiper-theme nav-inner pg-inner swiper-nav-lg animation-slider pg-xxl-hide nav-xxl-show nav-hide"
                    data-swiper-options="{
                    'slidesPerView': 1,
                    'autoplay': {
                        'delay': 8000,
                        'disableOnInteraction': false
                    }
                }">
                    <div class="swiper-wrapper">
                        @foreach ($banners as $key => $value)
                        <div class="swiper-slide banner banner-fixed intro-slide intro-slide1"
                            style="background-image: url({{ $value->bg_image }}); background-color: #ebeef2;">
                            <div class="container">
                                <figure class="slide-image skrollable slide-animate">
                                    <img src="{{ $value->image }}"
                                        alt="Banner" data-bottom-top="transform: translateY(10vh);"
                                        data-top-bottom="transform: translateY(-10vh);" width="474" height="397">
                                </figure>
                                <div class="banner-content y-50 text-right">
                                    <h5 class="banner-subtitle font-weight-normal text-default ls-50 lh-1 mb-2 slide-animate"
                                        data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'duration': '1s',
                                    'delay': '.2s'
                                }">
                                        {{-- Custom  --}}
                                        {{-- <span class="p-relative d-inline-block">Men’s</span> --}}
                                        {{ $value->title1 }}
                                    </h5>
                                    <h3 class="banner-title font-weight-bolder ls-25 lh-1 slide-animate"
                                        data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'duration': '1s',
                                    'delay': '.4s'
                                }">
                                        {{-- RUNNING SHOES --}}
                                        {{ $value->title2 }}
                                    </h3>
                                    <p class="font-weight-normal text-default slide-animate"
                                        data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'duration': '1s',
                                    'delay': '.6s'
                                }">
                                        {{ $value->offer }}
                                        {{-- Sale up to  --}}
                                        {{-- <span class="font-weight-bolder text-secondary">30% OFF</span> --}}
                                    </p>

                                    <a href="{{ $value->url }}"
                                        class="btn btn-dark btn-outline btn-rounded btn-icon-right slide-animate"
                                        data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'duration': '1s',
                                    'delay': '.8s'
                                }">READ MORE<i class="w-icon-long-arrow-right"></i></a>

                                </div>
                                <!-- End of .banner-content -->
                            </div>
                            <!-- End of .container -->
                        </div>
                        <!-- End of .intro-slide{{ $key+1 }} -->
                        @endforeach

                        {{--
                        <div class="swiper-slide banner banner-fixed intro-slide intro-slide2"
                            style="background-image: url({{ URL::asset('website-assets/images/demos/demo1/sliders/slide-2.jpg') }}); background-color: #ebeef2;">
                            <div class="container">
                                <figure class="slide-image skrollable slide-animate"
                                    data-animation-options="{
                                    'name': 'fadeInUpShorter',
                                    'duration': '1s'
                                }">
                                    <img src="{{ URL::asset('website-assets/images/demos/demo1/sliders/men.png') }}"
                                        alt="Banner" data-bottom-top="transform: translateX(10vh);"
                                        data-top-bottom="transform: translateX(-10vh);" width="480" height="633">
                                </figure>
                                <div class="banner-content d-inline-block y-50">
                                    <h5 class="banner-subtitle font-weight-normal text-default ls-50 slide-animate"
                                        data-animation-options="{
                                        'name': 'fadeInUpShorter',
                                        'duration': '1s',
                                        'delay': '.2s'
                                    }">
                                        Mountain-<span class="text-secondary">Climbing</span>
                                    </h5>
                                    <h3 class="banner-title font-weight-bolder text-dark mb-0 ls-25 slide-animate"
                                        data-animation-options="{
                                        'name': 'fadeInUpShorter',
                                        'duration': '1s',
                                        'delay': '.4s'
                                    }">
                                        Hot & Packback
                                    </h3>
                                    <p class="font-weight-normal text-default slide-animate"
                                        data-animation-options="{
                                        'name': 'fadeInUpShorter',
                                        'duration': '1s',
                                        'delay': '.8s'
                                    }">
                                        Only until the end of this week.
                                    </p>
                                    <a href="shop-banner-sidebar.html"
                                        class="btn btn-dark btn-outline btn-rounded btn-icon-right slide-animate"
                                        data-animation-options="{
                                        'name': 'fadeInUpShorter',
                                        'duration': '1s',
                                        'delay': '1s'
                                    }">
                                        SHOP NOW<i class="w-icon-long-arrow-right"></i>
                                    </a>
                                </div>
                                <!-- End of .banner-content -->
                            </div>
                            <!-- End of .container -->
                        </div>
                        <!-- End of .intro-slide2 -->

                        <div class="swiper-slide banner banner-fixed intro-slide intro-slide3"
                            style="background-image: url({{ URL::asset('website-assets/images/demos/demo1/sliders/slide-3.jpg') }}); background-color: #f0f1f2;">
                            <div class="container">
                                <figure class="slide-image skrollable slide-animate"
                                    data-animation-options="{
                                    'name': 'fadeInDownShorter',
                                    'duration': '1s'
                                }">
                                    <img src="{{ URL::asset('root/upload/banners/'.$value->image) }}"
                                        alt="Banner" data-bottom-top="transform: translateY(10vh);"
                                        data-top-bottom="transform: translateY(-10vh);" width="310"
                                        height="444">
                                </figure>
                                <div class="banner-content text-right y-50">
                                    <p class="font-weight-normal text-default text-uppercase mb-0 slide-animate"
                                        data-animation-options="{
                                        'name': 'fadeInLeftShorter',
                                        'duration': '1s',
                                        'delay': '.6s'
                                    }">
                                        Top weekly Seller
                                    </p>
                                    <h5 class="banner-subtitle font-weight-normal text-default ls-25 slide-animate"
                                        data-animation-options="{
                                        'name': 'fadeInLeftShorter',
                                        'duration': '1s',
                                        'delay': '.4s'
                                    }">
                                        Trending Collection
                                    </h5>
                                    <h3 class="banner-title p-relative font-weight-bolder ls-50 slide-animate"
                                        data-animation-options="{
                                        'name': 'fadeInLeftShorter',
                                        'duration': '1s',
                                        'delay': '.2s'
                                    }">
                                        <span class="text-white mr-4">Roller</span>
                                        -skate
                                    </h3>
                                    <div class="btn-group slide-animate"
                                        data-animation-options="{
                                        'name': 'fadeInLeftShorter',
                                        'duration': '1s',
                                        'delay': '.8s'
                                    }">
                                        <a href="shop-list.html"
                                            class="btn btn-dark btn-outline btn-rounded btn-icon-right">SHOP
                                            NOW<i class="w-icon-long-arrow-right"></i></a>
                                    </div>
                                    <!-- End of .banner-content -->
                                </div>
                                <!-- End of .container -->
                            </div>
                        </div>
                        <!-- End of .intro-slide3 -->
                        --}}
                    </div>
                    <div class="swiper-pagination"></div>
                    <button class="swiper-button-next"></button>
                    <button class="swiper-button-prev"></button>
                </div>
                <!-- End of .swiper-container -->
            </section>
            <!-- End of .intro-section -->

            <div class="container-fluid">
                <div class="swiper-container appear-animate icon-box-wrapper br-sm mt-6 mb-6"
                    data-swiper-options="{
                    'slidesPerView': 1,
                    'loop': false,
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 2
                        },
                        '768': {
                            'slidesPerView': 3
                        },
                        '1200': {
                            'slidesPerView': 4
                        }
                    }
                }">
                    <div class="swiper-wrapper row cols-md-4 cols-sm-3 cols-1">
                        <div class="swiper-slide icon-box icon-box-side icon-box-primary">
                            <span class="icon-box-icon icon-shipping">
                                <i class="w-icon-truck"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title font-weight-bold mb-1">Free Shipping & Returns</h4>
                                <p class="text-default">For all orders over $99</p>
                            </div>
                        </div>
                        <div class="swiper-slide icon-box icon-box-side icon-box-primary">
                            <span class="icon-box-icon icon-payment">
                                <i class="w-icon-bag"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title font-weight-bold mb-1">Secure Payment</h4>
                                <p class="text-default">We ensure secure payment</p>
                            </div>
                        </div>
                        <div class="swiper-slide icon-box icon-box-side icon-box-primary icon-box-money">
                            <span class="icon-box-icon icon-money">
                                <i class="w-icon-money"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title font-weight-bold mb-1">Money Back Guarantee</h4>
                                <p class="text-default">Any back within 30 days</p>
                            </div>
                        </div>
                        <div class="swiper-slide icon-box icon-box-side icon-box-primary icon-box-chat">
                            <span class="icon-box-icon icon-chat">
                                <i class="w-icon-chat"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title font-weight-bold mb-1">Customer Support</h4>
                                <p class="text-default">Call or email us 24/7</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Iocn Box Wrapper -->
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <h2 class="title text-left ls-normal mt-10 pt-1 appear-animate" title="{{ $category1->name }}">{{ substr($category1->name,0,57) }}...</h2>
                        {{-- <hr class="banner-divider bg-dark mb-2" style="margin-top: -10px;"> --}}
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12">
                        <div class="tab tab-nav-boxed tab-nav-outline appear-animate">
                            <ul class="nav nav-tabs justify-content-right" style="float: right;margin-top:45px;"
                                role="tablist">
                                @php $tab1=0; @endphp
                                @foreach ($SubcategoriesList1 as $value)
                                    @if ($tab1 == 0)
                                        <li class="nav-item mr-2 mb-2">
                                            <a class="nav-link active br-sm font-size-md ls-normal" title="{{ $value->name }}"
                                                href="#tab1-{{ $tab1 }}">{{ substr($value->name, 0, 16) }}...</a>
                                        </li>
                                    @else
                                        <li class="nav-item mr-2 mb-2">
                                            <a class="nav-link br-sm font-size-md ls-normal" title="{{ $value->name }}"
                                                href="#tab1-{{ $tab1 }}">{{ substr($value->name, 0, 16) }}...</a>
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
                        @if ($tab1 == 0)
                            <div class="tab-pane active pt-0" id="tab1-{{ $tab1 }}">
                                <div class="row">
                                    <div class="col-lg-3 col-sm-4 mb-4">
                                        <div class="banner h-100 br-sm"
                                            style="background-image: url({{ $homeSettings->category1_image }});
                                            background-color: #ebeced;">
                                        </div>
                                    </div>
                                    <!-- End of Banner -->
                                    <div class="col-lg-9 col-sm-8">
                                        <div class="swiper-container swiper-theme"
                                            data-swiper-options="{
                                            'spaceBetween': 20,
                                            'slidesPerView': 1,
                                            'breakpoints': {
                                                '992': {
                                                    'slidesPerView': 2
                                                },
                                                '1200': {
                                                    'slidesPerView': 3
                                                }
                                            }
                                        }">
                                            <div class="swiper-wrapper row cols-xl-4 cols-lg-3 cols-2">
                                                @php $n=0; @endphp
                                                @foreach ($products as $key => $value)
                                                    @if ($subcategory->id == $value->subcategory_id)
                                                        <div class="swiper-slide product-col">
                                                            <div class="product-wrap"
                                                                style="border:1px solid gainsboro; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;padding:10px;">
                                                                <div class="product text-center">
                                                                    <figure class="product-media">
                                                                        <a
                                                                            href="{{ URL::to('/single-product/' . $value->id . '/' . $value->slug) }}">
                                                                            @if ($value->product_image)
                                                                                <img src="{{ URL::asset('root/upload/products/' . $value->product_image->image) }}"
                                                                                    alt="Product" />
                                                                            @else
                                                                                <img src="{{ URL::asset('website-assets/images/dummy-bg-img.png') }}"
                                                                                    alt="Product" />
                                                                            @endif
                                                                        </a>
                                                                        <hr>
                                                                    </figure>
                                                                    <div class="product-details">
                                                                        <p class="text-left"
                                                                            style="margin-top:-25px;">
                                                                            <a style="color: black;font-size:20px;font-weight: bold;"
                                                                                href="{{ URL::to('/single-product/' . $value->id . '/' . $value->slug) }}">{{ $value->model_no }}</a>
                                                                        </p>
                                                                        <p class="text-left"
                                                                            style="margin-top: -10px;font-size:12px;">
                                                                            {{ $value->name }}</p>
                                                                        <div
                                                                            style="color: black;font-size:10px;text-align: left!important;">
                                                                            {!! Str::words($value->description, 35) !!}</div>
                                                                        <div class="text-left" style="">
                                                                            <a href="{{ URL::to('/single-product/' . $value->id . '/' . $value->slug) }}"
                                                                                style="font-size: 12px;">View Details
                                                                                <i class="w-icon-angle-right"
                                                                                    style="font-size:9px;margin-left:2px;position: relative;top:0px;"></i>
                                                                                <i class="w-icon-angle-right"
                                                                                    style="margin-left: -15px;font-size:9px;position: relative;top:0px;"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="old-price text-right">
                                                                            <p
                                                                                style="font-size: 15px;margin-bottom:20px;">
                                                                                <del
                                                                                    id="finalValue2{{ $key }}">&nbsp;{{ $settings->currency . '' . $value->new_price }}&nbsp;</del>
                                                                            </p>
                                                                        </div>
                                                                        <div class="sale-price text-right">
                                                                            <p style="font-size: 20px;margin-top:-35px;margin-bottom:20px;"
                                                                                id="finalValue{{ $key }}">
                                                                                &nbsp;{{ $settings->currency . '' . $value->new_sale_price }}&nbsp;
                                                                            </p>
                                                                        </div>

                                                                        <div style="margin-bottom:20px;width:150px;position: relative;left:45px;margin-top:-20px;"
                                                                            class="ml-auto">
                                                                            <input type="hidden"
                                                                                id="amount1{{ $key }}"
                                                                                value="{{ $value->new_sale_price }}">
                                                                            <input type="hidden" name="price"
                                                                                id="amount2{{ $key }}"
                                                                                value="{{ $value->new_price }}">

                                                                            <select class="to"
                                                                                id="currencyChange{{ $key }}">
                                                                                <option value="USD" selected>USD
                                                                                </option>
                                                                                <option value="AED">AED</option>
                                                                                <option value="ARS">ARS</option>
                                                                                <option value="AUD">AUD</option>
                                                                                <option value="BGN">BGN</option>
                                                                                <option value="BRL">BRL</option>
                                                                                <option value="BSD">BSD</option>
                                                                                <option value="CAD">CAD</option>
                                                                                <option value="CHF">CHF</option>
                                                                                <option value="CLP">CLP</option>
                                                                                <option value="CNY">CNY</option>
                                                                                <option value="COP">COP</option>
                                                                                <option value="CZK">CZK</option>
                                                                                <option value="DKK">DKK</option>
                                                                                <option value="DOP">DOP</option>
                                                                                <option value="EGP">EGP</option>
                                                                                <option value="EUR">EUR</option>
                                                                                <option value="FJD">FJD</option>
                                                                                <option value="GBP">GBP</option>
                                                                                <option value="GTQ">GTQ</option>
                                                                                <option value="HKD">HKD</option>
                                                                                <option value="HRK">HRK</option>
                                                                                <option value="HUF">HUF</option>
                                                                                <option value="IDR">IDR</option>
                                                                                <option value="ILS">ILS</option>
                                                                                <option value="INR">INR</option>
                                                                                <option value="ISK">ISK</option>
                                                                                <option value="JPY">JPY</option>
                                                                                <option value="KRW">KRW</option>
                                                                                <option value="KZT">KZT</option>
                                                                                <option value="MVR">MVR</option>
                                                                                <option value="MXN">MXN</option>
                                                                                <option value="MYR">MYR</option>
                                                                                <option value="NOK">NOK</option>
                                                                                <option value="NZD">NZD</option>
                                                                                <option value="PAB">PAB</option>
                                                                                <option value="PEN">PEN</option>
                                                                                <option value="PHP">PHP</option>
                                                                                <option value="PKR">PKR</option>
                                                                                <option value="PLN">PLN</option>
                                                                                <option value="PYG">PYG</option>
                                                                                <option value="RON">RON</option>
                                                                                <option value="RUB">RUB</option>
                                                                                <option value="SAR">SAR</option>
                                                                                <option value="SEK">SEK</option>
                                                                                <option value="SGD">SGD</option>
                                                                                <option value="THB">THB</option>
                                                                                <option value="TRY">TRY</option>
                                                                                <option value="TWD">TWD</option>
                                                                                <option value="UAH">UAH</option>
                                                                                <option value="UYU">UYU</option>
                                                                                <option value="ZAR">ZAR</option>
                                                                            </select>
                                                                        </div>
                                                                        <script>
                                                                            $(document).ready(function() {
                                                                                $('#currencyChange{{ $key }}').change(function() {
                                                                                    var amount = $('#amount1{{ $key }}').val();
                                                                                    var amount2 = $('#amount2{{ $key }}').val();
                                                                                    var currency = $(this).val();
                                                                                    $.ajax({
                                                                                        type: 'GET',
                                                                                        dataType: "json",
                                                                                        url: 'https://api.exchangerate-api.com/v4/latest/USD',
                                                                                        success: function(data, status, xhr) {
                                                                                            // console.log('data: ', data.rates);
                                                                                            var res = (data.rates[currency] / data.rates.USD) * amount;
                                                                                            var res2 = (data.rates[currency] / data.rates.USD) * amount2;

                                                                                            $('#finalValue{{ $key }}').html(currency + '' + res
                                                                                                .toFixed(2));
                                                                                            $('#finalValue2{{ $key }}').html(currency + '' + res2
                                                                                                .toFixed(2));
                                                                                        }
                                                                                    });
                                                                                });
                                                                            });
                                                                        </script>
                                                                        <div class="row" style="">
                                                                            <div class="col-8 text-left"
                                                                                style="margin-top: -80px;">
                                                                                <span><i class="w-icon-map-marker"></i>
                                                                                    <b>Location</b></span>
                                                                                <p
                                                                                    style="font-size: 12px;margin-top:-5px;margin-bottom:5px;">
                                                                                    &emsp;
                                                                                    @if ($value->shipping_details)
                                                                                        @foreach ($value->shipping_details as $key2 => $value2)
                                                                                            @if ($key2 == $value->shipping_details->count() - 1)
                                                                                                {{ $value2->location->name }}
                                                                                            @else
                                                                                                {{ $value2->location->name }},
                                                                                            @endif
                                                                                        @endforeach
                                                                                    @endif
                                                                                </p>
                                                                                <div style="margin-top:-10px;">
                                                                                    <span><i class="w-icon-sale"></i>
                                                                                        <b>Brand</b></span>
                                                                                    <div>
                                                                                        &emsp;&nbsp;<img
                                                                                            src="{{ URL::asset('root/upload/brands/small/' . $value->brand->logo) }}"
                                                                                            style="width: 50px;margin-top:-15px;margin-bottom:40px;"
                                                                                            alt="">
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                            <div class="col-4 text-right">
                                                                                @php 
                                                                                    $stockIn = 0; 
                                                                                    $stockOut = 0; 
                                                                                @endphp
                                                                                @foreach ($value->stock as $stock)
                                                                                    @php 
                                                                                        $stockIn += $stock->qty_in; 
                                                                                        $stockOut += $stock->qty_out; 
                                                                                    @endphp
                                                                                @endforeach
                                                                                @if(($stockIn-$stockOut)<=0)
                                                                                    <p style="color: red;font-style: italic;margin-top:-20px;">OUT OF STOCK</p>
                                                                                @else
                                                                                    <p style="color: green;font-style: italic;margin-top:-20px;">IN STOCK</p>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-7 text-left">
                                                                                <div style="margin-top: -30px;">
                                                                                    <span><i class="w-icon-sale"></i>
                                                                                        <b>Condition</b></span>
                                                                                    <div class="mt-2">
                                                                                        @foreach ($value->conditions as $key1 => $value1)
                                                                                            @if ($key1 == 0)
                                                                                                @if ($value1->condition->name == 'NEW')
                                                                                                    <label
                                                                                                        for=""
                                                                                                        id="changeBgColor{{ $key . '_' . $key1 }}"
                                                                                                        onclick="ChangeCondition({{ $key }},{{ $key1 }})"
                                                                                                        class="active"
                                                                                                        style="background-color: #1C77C3;color:white;padding:5px;">{{ $value1->condition->name }}
                                                                                                        <input
                                                                                                            type="hidden"
                                                                                                            name="conditionChoice{{ $key }}"
                                                                                                            id="conditionChoice{{ $key }}{{ $key1 }}"
                                                                                                            checked
                                                                                                            style="position: relative;top:2px;"
                                                                                                            id="conditionChoice1"
                                                                                                            value="{{ $value1->condition->name . '_' . $value->new_price . '_' . $value->new_sale_price }}">
                                                                                                    </label>
                                                                                                    @elseif ($value1->condition->name == 'REFURBISHED')
                                                                                                    <label
                                                                                                        for=""
                                                                                                        id="changeBgColorr{{ $key . '_' . $key1 }}"
                                                                                                        class="active"
                                                                                                        onclick="ChangeCondition({{ $key }},{{ $key1 }})"
                                                                                                        style="background-color: #1C77C3;color:white;padding:5px;">{{ $value1->condition->name }}
                                                                                                        <input
                                                                                                            type="hidden"
                                                                                                            name="conditionChoice{{ $key }}"
                                                                                                            id="conditionChoice{{ $key }}{{ $key1 }}"
                                                                                                            checked
                                                                                                            style="position: relative;top:2px;"
                                                                                                            value="{{ $value1->condition->name . '_' . $value->refurnished_price . '_' . $value->refurnished_sale_price }}">
                                                                                                    </label>
                                                                                                @endif
                                                                                            @else
                                                                                                @if ($value1->condition->name == 'NEW')
                                                                                                    <label
                                                                                                        for=""
                                                                                                        id="changeBgColor{{ $key . '_' . $key1 }}"
                                                                                                        onclick="ChangeCondition({{ $key }},{{ $key1 }})"
                                                                                                        style="background-color: #CCCCCC;color:black;padding:5px;margin-left:3px;">{{ $value1->condition->name }}
                                                                                                        <input
                                                                                                            type="hidden"
                                                                                                            name="conditionChoice{{ $key }}"
                                                                                                            id="conditionChoice{{ $key }}{{ $key1 }}"
                                                                                                            style="position: relative;top:2px;"
                                                                                                            value="{{ $value1->condition->name . '_' . $value->new_price . '_' . $value->new_sale_price }}">
                                                                                                    </label>
                                                                                                    @elseif($value1->condition->name == 'REFURBISHED')
                                                                                                    <label
                                                                                                        for=""
                                                                                                        id="changeBgColorr{{ $key . '_' . $key1 }}"
                                                                                                        onclick="ChangeCondition({{ $key }},{{ $key1 }})"
                                                                                                        style="background-color: #CCCCCC;color:black;padding:5px;margin-left:3px;">{{ $value1->condition->name }}
                                                                                                        <input
                                                                                                            type="hidden"
                                                                                                            name="conditionChoice{{ $key }}"
                                                                                                            id="conditionChoice{{ $key }}{{ $key1 }}"
                                                                                                            style="position: relative;top:2px;"
                                                                                                            value="{{ $value1->condition->name . '_' . $value->refurnished_price . '_' . $value->refurnished_sale_price }}">
                                                                                                    </label>
                                                                                                @endif
                                                                                            @endif
                                                                                        @endforeach
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-5 text-right">
                                                                                <a href="{{ URL::to('/add-to-wishlist/' . $value->id) }}"
                                                                                    title="Add To Wishlist"
                                                                                    style="font-size: 10px;"><i
                                                                                        class="w-icon-heart-full"></i>
                                                                                    Add To Wishlist
                                                                                </a>
                                                                            </div>
                                                                            <div class="col-7 text-left">
                                                                                <a href="{{ URL::to('/single-product/' . $value->id . '/' . $value->slug) }}"
                                                                                    class="btn btn-sm btn-primary btn-block"
                                                                                    style="margin-top: 10px;"><i
                                                                                        class="w-icon-cart"></i>
                                                                                    View
                                                                                    Details</a>
                                                                            </div>
                                                                            <div class="col-5 text-right">
                                                                                <div class="star-rating "
                                                                                    style="font-size: 13px;float: right;margin-top:10px;">
                                                                                    <i class="w-icon-star-square-full"
                                                                                        style="color: #1C77C3"></i>
                                                                                    <i class="w-icon-star-square-full"
                                                                                        style="color: #1C77C3"></i>
                                                                                    <i class="w-icon-star-square-full"
                                                                                        style="color: #1C77C3"></i>
                                                                                    <i class="w-icon-star-square-full"
                                                                                        style="color: #1C77C3"></i>
                                                                                    <i class="w-icon-star-square"
                                                                                        style="color: #CCCCCC"></i>
                                                                                    <br />
                                                                                    <span
                                                                                        style="font-size: 12px;position: relative;top:-5px;">12
                                                                                        Review(s)</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
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
                                        <div class="banner h-100 br-sm"
                                            style="background-image: url({{ $homeSettings->category1_image }});
                                            background-color: #ebeced;">
                                        </div>
                                    </div>
                                    <!-- End of Banner -->
                                    <div class="col-lg-9 col-sm-8">
                                        <div class="swiper-container swiper-theme"
                                            data-swiper-options="{
                                            'spaceBetween': 20,
                                            'slidesPerView': 1,
                                            'breakpoints': {
                                                '992': {
                                                    'slidesPerView': 2
                                                },
                                                '1200': {
                                                    'slidesPerView': 3
                                                }
                                            }
                                        }">
                                            <div class="swiper-wrapper row cols-xl-4 cols-lg-3 cols-2">
                                                @php $n=0; @endphp
                                                @foreach ($products as $key => $value)
                                                    @if ($subcategory->id == $value->subcategory_id)
                                                        <div class="swiper-slide product-col">
                                                            <div class="product-wrap"
                                                                style="border:1px solid gainsboro; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;padding:10px;">
                                                                <div class="product text-center">
                                                                    <figure class="product-media">
                                                                        <a
                                                                            href="{{ URL::to('/single-product/' . $value->id . '/' . $value->slug) }}">
                                                                            @if ($value->product_image)
                                                                                <img src="{{ URL::asset('root/upload/products/' . $value->product_image->image) }}"
                                                                                    alt="Product" />
                                                                            @else
                                                                                <img src="{{ URL::asset('website-assets/images/dummy-bg-img.png') }}"
                                                                                    alt="Product" />
                                                                            @endif
                                                                        </a>
                                                                        <hr>
                                                                    </figure>
                                                                    <div class="product-details">
                                                                        <p class="text-left"
                                                                            style="margin-top:-25px;">
                                                                            <a style="color: black;font-size:20px;font-weight: bold;"
                                                                                href="{{ URL::to('/single-product/' . $value->id . '/' . $value->slug) }}">{{ $value->model_no }}</a>
                                                                        </p>
                                                                        <p class="text-left"
                                                                            style="margin-top: -10px;font-size:12px;">
                                                                            {{ $value->name }}</p>
                                                                        <div
                                                                            style="color: black;font-size:10px;text-align: left!important;">
                                                                            {!! Str::words($value->description, 35) !!}</div>
                                                                        <div class="text-left" style="">
                                                                            <a href="{{ URL::to('/single-product/' . $value->id . '/' . $value->slug) }}"
                                                                                style="font-size: 12px;">View Details
                                                                                <i class="w-icon-angle-right"
                                                                                    style="font-size:9px;margin-left:2px;position: relative;top:0px;"></i>
                                                                                <i class="w-icon-angle-right"
                                                                                    style="margin-left: -15px;font-size:9px;position: relative;top:0px;"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="old-price text-right">
                                                                            <p
                                                                                style="font-size: 15px;margin-bottom:20px;">
                                                                                <del
                                                                                    id="finalValue2{{ $key }}">&nbsp;{{ $settings->currency . '' . $value->new_price }}&nbsp;</del>
                                                                            </p>
                                                                        </div>
                                                                        <div class="sale-price text-right">
                                                                            <p style="font-size: 20px;margin-top:-35px;margin-bottom:20px;"
                                                                                id="finalValue{{ $key }}">
                                                                                &nbsp;{{ $settings->currency . '' . $value->new_sale_price }}&nbsp;
                                                                            </p>
                                                                        </div>

                                                                        <div style="margin-bottom:20px;width:150px;position: relative;left:45px;margin-top:-20px;"
                                                                            class="ml-auto">
                                                                            <input type="hidden"
                                                                                id="amount1{{ $key }}"
                                                                                value="{{ $value->new_sale_price }}">
                                                                            <input type="hidden" name="price"
                                                                                id="amount2{{ $key }}"
                                                                                value="{{ $value->new_price }}">

                                                                            <select class="to"
                                                                                id="currencyChange{{ $key }}">
                                                                                <option value="USD" selected>USD
                                                                                </option>
                                                                                <option value="AED">AED</option>
                                                                                <option value="ARS">ARS</option>
                                                                                <option value="AUD">AUD</option>
                                                                                <option value="BGN">BGN</option>
                                                                                <option value="BRL">BRL</option>
                                                                                <option value="BSD">BSD</option>
                                                                                <option value="CAD">CAD</option>
                                                                                <option value="CHF">CHF</option>
                                                                                <option value="CLP">CLP</option>
                                                                                <option value="CNY">CNY</option>
                                                                                <option value="COP">COP</option>
                                                                                <option value="CZK">CZK</option>
                                                                                <option value="DKK">DKK</option>
                                                                                <option value="DOP">DOP</option>
                                                                                <option value="EGP">EGP</option>
                                                                                <option value="EUR">EUR</option>
                                                                                <option value="FJD">FJD</option>
                                                                                <option value="GBP">GBP</option>
                                                                                <option value="GTQ">GTQ</option>
                                                                                <option value="HKD">HKD</option>
                                                                                <option value="HRK">HRK</option>
                                                                                <option value="HUF">HUF</option>
                                                                                <option value="IDR">IDR</option>
                                                                                <option value="ILS">ILS</option>
                                                                                <option value="INR">INR</option>
                                                                                <option value="ISK">ISK</option>
                                                                                <option value="JPY">JPY</option>
                                                                                <option value="KRW">KRW</option>
                                                                                <option value="KZT">KZT</option>
                                                                                <option value="MVR">MVR</option>
                                                                                <option value="MXN">MXN</option>
                                                                                <option value="MYR">MYR</option>
                                                                                <option value="NOK">NOK</option>
                                                                                <option value="NZD">NZD</option>
                                                                                <option value="PAB">PAB</option>
                                                                                <option value="PEN">PEN</option>
                                                                                <option value="PHP">PHP</option>
                                                                                <option value="PKR">PKR</option>
                                                                                <option value="PLN">PLN</option>
                                                                                <option value="PYG">PYG</option>
                                                                                <option value="RON">RON</option>
                                                                                <option value="RUB">RUB</option>
                                                                                <option value="SAR">SAR</option>
                                                                                <option value="SEK">SEK</option>
                                                                                <option value="SGD">SGD</option>
                                                                                <option value="THB">THB</option>
                                                                                <option value="TRY">TRY</option>
                                                                                <option value="TWD">TWD</option>
                                                                                <option value="UAH">UAH</option>
                                                                                <option value="UYU">UYU</option>
                                                                                <option value="ZAR">ZAR</option>
                                                                            </select>
                                                                        </div>
                                                                        <script>
                                                                            $(document).ready(function() {
                                                                                $('#currencyChange{{ $key }}').change(function() {
                                                                                    var amount = $('#amount1{{ $key }}').val();
                                                                                    var amount2 = $('#amount2{{ $key }}').val();
                                                                                    var currency = $(this).val();
                                                                                    $.ajax({
                                                                                        type: 'GET',
                                                                                        dataType: "json",
                                                                                        url: 'https://api.exchangerate-api.com/v4/latest/USD',
                                                                                        success: function(data, status, xhr) {
                                                                                            // console.log('data: ', data.rates);
                                                                                            var res = (data.rates[currency] / data.rates.USD) * amount;
                                                                                            var res2 = (data.rates[currency] / data.rates.USD) * amount2;

                                                                                            $('#finalValue{{ $key }}').html(currency + '' + res
                                                                                                .toFixed(2));
                                                                                            $('#finalValue2{{ $key }}').html(currency + '' + res2
                                                                                                .toFixed(2));
                                                                                        }
                                                                                    });
                                                                                });
                                                                            });
                                                                        </script>
                                                                        <div class="row" style="">
                                                                            <div class="col-8 text-left"
                                                                                style="margin-top: -80px;">
                                                                                <span><i class="w-icon-map-marker"></i>
                                                                                    <b>Location</b></span>
                                                                                <p
                                                                                    style="font-size: 12px;margin-top:-5px;margin-bottom:5px;">
                                                                                    &emsp;
                                                                                    @if ($value->shipping_details)
                                                                                        @foreach ($value->shipping_details as $key2 => $value2)
                                                                                            @if ($key2 == $value->shipping_details->count() - 1)
                                                                                                {{ $value2->location->name }}
                                                                                            @else
                                                                                                {{ $value2->location->name }},
                                                                                            @endif
                                                                                        @endforeach
                                                                                    @endif
                                                                                </p>
                                                                                <div style="margin-top:-10px;">
                                                                                    <span><i class="w-icon-sale"></i>
                                                                                        <b>Brand</b></span>
                                                                                    <div>
                                                                                        &emsp;&nbsp;<img
                                                                                            src="{{ URL::asset('root/upload/brands/small/' . $value->brand->logo) }}"
                                                                                            style="width: 50px;margin-top:-15px;margin-bottom:40px;"
                                                                                            alt="">
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                            <div class="col-4 text-right">
                                                                                @php 
                                                                                    $stockIn = 0; 
                                                                                    $stockOut = 0; 
                                                                                @endphp
                                                                                @foreach ($value->stock as $stock)
                                                                                    @php 
                                                                                        $stockIn += $stock->qty_in; 
                                                                                        $stockOut += $stock->qty_out; 
                                                                                    @endphp
                                                                                @endforeach
                                                                                @if(($stockIn-$stockOut)<=0)
                                                                                    <p style="color: red;font-style: italic;margin-top:-20px;">OUT OF STOCK</p>
                                                                                @else
                                                                                    <p style="color: green;font-style: italic;margin-top:-20px;">IN STOCK</p>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-7 text-left">
                                                                                <div style="margin-top: -30px;">
                                                                                    <span><i class="w-icon-sale"></i>
                                                                                        <b>Condition</b></span>
                                                                                    <div class="mt-2">
                                                                                        @foreach ($value->conditions as $key1 => $value1)
                                                                                            @if ($key1 == 0)
                                                                                                @if ($value1->condition->name == 'NEW')
                                                                                                    <label
                                                                                                        for=""
                                                                                                        id="changeBgColor{{ $key . '_' . $key1 }}"
                                                                                                        onclick="ChangeCondition({{ $key }},{{ $key1 }})"
                                                                                                        class="active"
                                                                                                        style="background-color: #1C77C3;color:white;padding:5px;">{{ $value1->condition->name }}
                                                                                                        <input
                                                                                                            type="hidden"
                                                                                                            name="conditionChoice{{ $key }}"
                                                                                                            id="conditionChoice{{ $key }}{{ $key1 }}"
                                                                                                            checked
                                                                                                            style="position: relative;top:2px;"
                                                                                                            id="conditionChoice1"
                                                                                                            value="{{ $value1->condition->name . '_' . $value->new_price . '_' . $value->new_sale_price }}">
                                                                                                    </label>
                                                                                                    @elseif($value1->condition->name == 'REFURBISHED')
                                                                                                    <label
                                                                                                        for=""
                                                                                                        id="changeBgColorr{{ $key . '_' . $key1 }}"
                                                                                                        class="active"
                                                                                                        onclick="ChangeCondition({{ $key }},{{ $key1 }})"
                                                                                                        style="background-color: #1C77C3;color:white;padding:5px;">{{ $value1->condition->name }}
                                                                                                        <input
                                                                                                            type="hidden"
                                                                                                            name="conditionChoice{{ $key }}"
                                                                                                            id="conditionChoice{{ $key }}{{ $key1 }}"
                                                                                                            checked
                                                                                                            style="position: relative;top:2px;"
                                                                                                            value="{{ $value1->condition->name . '_' . $value->refurnished_price . '_' . $value->refurnished_sale_price }}">
                                                                                                    </label>
                                                                                                @endif
                                                                                            @else
                                                                                                @if ($value1->condition->name == 'NEW')
                                                                                                    <label
                                                                                                        for=""
                                                                                                        id="changeBgColor{{ $key . '_' . $key1 }}"
                                                                                                        onclick="ChangeCondition({{ $key }},{{ $key1 }})"
                                                                                                        style="background-color: #CCCCCC;color:black;padding:5px;margin-left:3px;">{{ $value1->condition->name }}
                                                                                                        <input
                                                                                                            type="hidden"
                                                                                                            name="conditionChoice{{ $key }}"
                                                                                                            id="conditionChoice{{ $key }}{{ $key1 }}"
                                                                                                            style="position: relative;top:2px;"
                                                                                                            value="{{ $value1->condition->name . '_' . $value->new_price . '_' . $value->new_sale_price }}">
                                                                                                    </label>
                                                                                                    @elseif($value1->condition->name == 'REFURBISHED')
                                                                                                    <label
                                                                                                        for=""
                                                                                                        id="changeBgColorr{{ $key . '_' . $key1 }}"
                                                                                                        onclick="ChangeCondition({{ $key }},{{ $key1 }})"
                                                                                                        style="background-color: #CCCCCC;color:black;padding:5px;margin-left:3px;">{{ $value1->condition->name }}
                                                                                                        <input
                                                                                                            type="hidden"
                                                                                                            name="conditionChoice{{ $key }}"
                                                                                                            id="conditionChoice{{ $key }}{{ $key1 }}"
                                                                                                            style="position: relative;top:2px;"
                                                                                                            value="{{ $value1->condition->name . '_' . $value->refurnished_price . '_' . $value->refurnished_sale_price }}">
                                                                                                    </label>
                                                                                                @endif
                                                                                            @endif
                                                                                        @endforeach
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-5 text-right">
                                                                                <a href="{{ URL::to('/add-to-wishlist/' . $value->id) }}"
                                                                                    title="Add To Wishlist"
                                                                                    style="font-size: 10px;"><i
                                                                                        class="w-icon-heart-full"></i>
                                                                                    Add To Wishlist
                                                                                </a>
                                                                            </div>
                                                                            <div class="col-7 text-left">
                                                                                <a href="{{ URL::to('/single-product/' . $value->id . '/' . $value->slug) }}"
                                                                                    class="btn btn-sm btn-primary btn-block"
                                                                                    style="margin-top: 10px;"><i
                                                                                        class="w-icon-cart"></i>
                                                                                    View
                                                                                    Details</a>
                                                                            </div>
                                                                            <div class="col-5 text-right">
                                                                                <div class="star-rating "
                                                                                    style="font-size: 13px;float: right;margin-top:10px;">
                                                                                    <i class="w-icon-star-square-full"
                                                                                        style="color: #1C77C3"></i>
                                                                                    <i class="w-icon-star-square-full"
                                                                                        style="color: #1C77C3"></i>
                                                                                    <i class="w-icon-star-square-full"
                                                                                        style="color: #1C77C3"></i>
                                                                                    <i class="w-icon-star-square-full"
                                                                                        style="color: #1C77C3"></i>
                                                                                    <i class="w-icon-star-square"
                                                                                        style="color: #CCCCCC"></i>
                                                                                    <br />
                                                                                    <span
                                                                                        style="font-size: 12px;position: relative;top:-5px;">12
                                                                                        Review(s)</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
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



                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <h2 class="title text-left ls-normal mt-10 pt-1 appear-animate" title="{{ $category2->name }}">{{ substr($category2->name,0,57) }}...</h2>
                        {{-- <hr class="banner-divider bg-dark mb-2" style="margin-top: -10px;"> --}}
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12">
                        <div class="tab tab-nav-boxed tab-nav-outline appear-animate">
                            <ul class="nav nav-tabs justify-content-right" style="float: right;margin-top:45px;"
                                role="tablist">
                                @php $tab2=0; @endphp
                                @foreach ($SubcategoriesList2 as $value)
                                    @if ($tab2 == 0)
                                        <li class="nav-item mr-2 mb-2">
                                            <a class="nav-link active br-sm font-size-md ls-normal" title="{{ $value->name }}"
                                                href="#tab2-{{ $tab2 }}">{{ substr($value->name, 0, 16) }}...</a>
                                        </li>
                                    @else
                                        <li class="nav-item mr-2 mb-2">
                                            <a class="nav-link br-sm font-size-md ls-normal" title="{{ $value->name }}"
                                                href="#tab2-{{ $tab2 }}">{{ substr($value->name, 0, 16) }}...</a>
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
                                    <div class="col-lg-9 col-sm-8">
                                        <div class="swiper-container swiper-theme"
                                            data-swiper-options="{
                                            'spaceBetween': 20,
                                            'slidesPerView': 1,
                                            'breakpoints': {
                                                '992': {
                                                    'slidesPerView': 2
                                                },
                                                '1200': {
                                                    'slidesPerView': 3
                                                }
                                            }
                                        }">
                                            <div class="swiper-wrapper row cols-xl-4 cols-lg-3 cols-2">
                                                @php $n2=0; @endphp
                                                @foreach ($products as $key => $value)
                                                    @if ($subcategory->id == $value->subcategory_id)
                                                        <div class="swiper-slide product-col">
                                                            <div class="product-wrap"
                                                                style="border:1px solid gainsboro; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;padding:10px;">
                                                                <div class="product text-center">
                                                                    <figure class="product-media">
                                                                        <a
                                                                            href="{{ URL::to('/single-product/' . $value->id . '/' . $value->slug) }}">
                                                                            @if ($value->product_image)
                                                                                <img src="{{ URL::asset('root/upload/products/' . $value->product_image->image) }}"
                                                                                    alt="Product" />
                                                                            @else
                                                                                <img src="{{ URL::asset('website-assets/images/dummy-bg-img.png') }}"
                                                                                    alt="Product" />
                                                                            @endif
                                                                        </a>
                                                                        <hr>
                                                                    </figure>
                                                                    <div class="product-details">
                                                                        <p class="text-left"
                                                                            style="margin-top:-25px;">
                                                                            <a style="color: black;font-size:20px;font-weight: bold;"
                                                                                href="{{ URL::to('/single-product/' . $value->id . '/' . $value->slug) }}">{{ $value->model_no }}</a>
                                                                        </p>
                                                                        <p class="text-left"
                                                                            style="margin-top: -10px;font-size:12px;">
                                                                            {{ $value->name }}</p>
                                                                        <div
                                                                            style="color: black;font-size:10px;text-align: left!important;">
                                                                            {!! Str::words($value->description, 35) !!}</div>
                                                                        <div class="text-left" style="">
                                                                            <a href="{{ URL::to('/single-product/' . $value->id . '/' . $value->slug) }}"
                                                                                style="font-size: 12px;">View Details
                                                                                <i class="w-icon-angle-right"
                                                                                    style="font-size:9px;margin-left:2px;position: relative;top:0px;"></i>
                                                                                <i class="w-icon-angle-right"
                                                                                    style="margin-left: -15px;font-size:9px;position: relative;top:0px;"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="old-price text-right">
                                                                            <p
                                                                                style="font-size: 15px;margin-bottom:20px;">
                                                                                <del
                                                                                    id="finalValue22{{ $key }}">&nbsp;{{ $settings->currency . '' . $value->new_price }}&nbsp;</del>
                                                                            </p>
                                                                        </div>
                                                                        <div class="sale-price text-right">
                                                                            <p style="font-size: 20px;margin-top:-35px;margin-bottom:20px;"
                                                                                id="finalValue222{{ $key }}">
                                                                                &nbsp;{{ $settings->currency . '' . $value->new_sale_price }}&nbsp;
                                                                            </p>
                                                                        </div>

                                                                        <div style="margin-bottom:20px;width:150px;position: relative;left:45px;margin-top:-20px;"
                                                                            class="ml-auto">
                                                                            <input type="hidden"
                                                                                id="amount12{{ $key }}"
                                                                                value="{{ $value->new_sale_price }}">
                                                                            <input type="hidden" name="price"
                                                                                id="amount222{{ $key }}"
                                                                                value="{{ $value->new_price }}">

                                                                            <select class="to"
                                                                                id="currencyChange2{{ $key }}">
                                                                                <option value="USD" selected>USD
                                                                                </option>
                                                                                <option value="AED">AED</option>
                                                                                <option value="ARS">ARS</option>
                                                                                <option value="AUD">AUD</option>
                                                                                <option value="BGN">BGN</option>
                                                                                <option value="BRL">BRL</option>
                                                                                <option value="BSD">BSD</option>
                                                                                <option value="CAD">CAD</option>
                                                                                <option value="CHF">CHF</option>
                                                                                <option value="CLP">CLP</option>
                                                                                <option value="CNY">CNY</option>
                                                                                <option value="COP">COP</option>
                                                                                <option value="CZK">CZK</option>
                                                                                <option value="DKK">DKK</option>
                                                                                <option value="DOP">DOP</option>
                                                                                <option value="EGP">EGP</option>
                                                                                <option value="EUR">EUR</option>
                                                                                <option value="FJD">FJD</option>
                                                                                <option value="GBP">GBP</option>
                                                                                <option value="GTQ">GTQ</option>
                                                                                <option value="HKD">HKD</option>
                                                                                <option value="HRK">HRK</option>
                                                                                <option value="HUF">HUF</option>
                                                                                <option value="IDR">IDR</option>
                                                                                <option value="ILS">ILS</option>
                                                                                <option value="INR">INR</option>
                                                                                <option value="ISK">ISK</option>
                                                                                <option value="JPY">JPY</option>
                                                                                <option value="KRW">KRW</option>
                                                                                <option value="KZT">KZT</option>
                                                                                <option value="MVR">MVR</option>
                                                                                <option value="MXN">MXN</option>
                                                                                <option value="MYR">MYR</option>
                                                                                <option value="NOK">NOK</option>
                                                                                <option value="NZD">NZD</option>
                                                                                <option value="PAB">PAB</option>
                                                                                <option value="PEN">PEN</option>
                                                                                <option value="PHP">PHP</option>
                                                                                <option value="PKR">PKR</option>
                                                                                <option value="PLN">PLN</option>
                                                                                <option value="PYG">PYG</option>
                                                                                <option value="RON">RON</option>
                                                                                <option value="RUB">RUB</option>
                                                                                <option value="SAR">SAR</option>
                                                                                <option value="SEK">SEK</option>
                                                                                <option value="SGD">SGD</option>
                                                                                <option value="THB">THB</option>
                                                                                <option value="TRY">TRY</option>
                                                                                <option value="TWD">TWD</option>
                                                                                <option value="UAH">UAH</option>
                                                                                <option value="UYU">UYU</option>
                                                                                <option value="ZAR">ZAR</option>
                                                                            </select>
                                                                        </div>
                                                                        <script>
                                                                            $(document).ready(function() {
                                                                                $('#currencyChange2{{ $key }}').change(function() {
                                                                                    var amount = $('#amount12{{ $key }}').val();
                                                                                    var amount2 = $('#amount222{{ $key }}').val();
                                                                                    var currency = $(this).val();
                                                                                    $.ajax({
                                                                                        type: 'GET',
                                                                                        dataType: "json",
                                                                                        url: 'https://api.exchangerate-api.com/v4/latest/USD',
                                                                                        success: function(data, status, xhr) {
                                                                                            // console.log('data: ', data.rates);
                                                                                            var res = (data.rates[currency] / data.rates.USD) * amount;
                                                                                            var res2 = (data.rates[currency] / data.rates.USD) * amount2;

                                                                                            $('#finalValue222{{ $key }}').html(currency + '' + res
                                                                                                .toFixed(2));
                                                                                            $('#finalValue22{{ $key }}').html(currency + '' + res2
                                                                                                .toFixed(2));
                                                                                        }
                                                                                    });
                                                                                });
                                                                            });
                                                                        </script>
                                                                        <div class="row" style="">
                                                                            <div class="col-8 text-left"
                                                                                style="margin-top: -80px;">
                                                                                <span><i class="w-icon-map-marker"></i>
                                                                                    <b>Location</b></span>
                                                                                <p
                                                                                    style="font-size: 12px;margin-top:-5px;margin-bottom:5px;">
                                                                                    &emsp;
                                                                                    @if ($value->shipping_details)
                                                                                        @foreach ($value->shipping_details as $key2 => $value2)
                                                                                            @if ($key2 == $value->shipping_details->count() - 1)
                                                                                                {{ $value2->location->name }}
                                                                                            @else
                                                                                                {{ $value2->location->name }},
                                                                                            @endif
                                                                                        @endforeach
                                                                                    @endif
                                                                                </p>
                                                                                <div style="margin-top:-10px;">
                                                                                    <span><i class="w-icon-sale"></i>
                                                                                        <b>Brand</b></span>
                                                                                    <div>
                                                                                        &emsp;&nbsp;<img
                                                                                            src="{{ URL::asset('root/upload/brands/small/' . $value->brand->logo) }}"
                                                                                            style="width: 50px;margin-top:-15px;margin-bottom:40px;"
                                                                                            alt="">
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                            <div class="col-4 text-right">
                                                                                @php 
                                                                                    $stockIn = 0; 
                                                                                    $stockOut = 0; 
                                                                                @endphp
                                                                                @foreach ($value->stock as $stock)
                                                                                    @php 
                                                                                        $stockIn += $stock->qty_in; 
                                                                                        $stockOut += $stock->qty_out; 
                                                                                    @endphp
                                                                                @endforeach
                                                                                @if(($stockIn-$stockOut)<=0)
                                                                                    <p style="color: red;font-style: italic;margin-top:-20px;">OUT OF STOCK</p>
                                                                                @else
                                                                                    <p style="color: green;font-style: italic;margin-top:-20px;">IN STOCK</p>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-7 text-left">
                                                                                <div style="margin-top: -30px;">
                                                                                    <span><i class="w-icon-sale"></i>
                                                                                        <b>Condition</b></span>
                                                                                    <div class="mt-2">
                                                                                        @foreach ($value->conditions as $key1 => $value1)
                                                                                            @if ($key1 == 0)
                                                                                                @if ($value1->condition->name == 'NEW')
                                                                                                    <label
                                                                                                        for=""
                                                                                                        id="changeBgColor2{{ $key . '_' . $key1 }}"
                                                                                                        onclick="ChangeCondition2({{ $key }},{{ $key1 }})"
                                                                                                        class="active"
                                                                                                        style="background-color: #1C77C3;color:white;padding:5px;">{{ $value1->condition->name }}
                                                                                                        <input
                                                                                                            type="hidden"
                                                                                                            name="conditionChoice2{{ $key }}"
                                                                                                            id="conditionChoice2{{ $key }}{{ $key1 }}"
                                                                                                            checked
                                                                                                            style="position: relative;top:2px;"
                                                                                                            id="conditionChoice1"
                                                                                                            value="{{ $value1->condition->name . '_' . $value->new_price . '_' . $value->new_sale_price }}">
                                                                                                    </label>
                                                                                                    @elseif($value1->condition->name == 'REFURBISHED')
                                                                                                    <label
                                                                                                        for=""
                                                                                                        id="changeBgColorr2{{ $key . '_' . $key1 }}"
                                                                                                        class="active"
                                                                                                        onclick="ChangeCondition2({{ $key }},{{ $key1 }})"
                                                                                                        style="background-color: #1C77C3;color:white;padding:5px;">{{ $value1->condition->name }}
                                                                                                        <input
                                                                                                            type="hidden"
                                                                                                            name="conditionChoice2{{ $key }}"
                                                                                                            id="conditionChoice2{{ $key }}{{ $key1 }}"
                                                                                                            checked
                                                                                                            style="position: relative;top:2px;"
                                                                                                            value="{{ $value1->condition->name . '_' . $value->refurnished_price . '_' . $value->refurnished_sale_price }}">
                                                                                                    </label>
                                                                                                @endif
                                                                                            @else
                                                                                                @if ($value1->condition->name == 'NEW')
                                                                                                    <label
                                                                                                        for=""
                                                                                                        id="changeBgColor2{{ $key . '_' . $key1 }}"
                                                                                                        onclick="ChangeCondition2({{ $key }},{{ $key1 }})"
                                                                                                        style="background-color: #CCCCCC;color:black;padding:5px;margin-left:3px;">{{ $value1->condition->name }}
                                                                                                        <input
                                                                                                            type="hidden"
                                                                                                            name="conditionChoice2{{ $key }}"
                                                                                                            id="conditionChoice2{{ $key }}{{ $key1 }}"
                                                                                                            style="position: relative;top:2px;"
                                                                                                            value="{{ $value1->condition->name . '_' . $value->new_price . '_' . $value->new_sale_price }}">
                                                                                                    </label>
                                                                                                    @elseif($value1->condition->name == 'REFURBISHED')
                                                                                                    <label
                                                                                                        for=""
                                                                                                        id="changeBgColorr2{{ $key . '_' . $key1 }}"
                                                                                                        onclick="ChangeCondition2({{ $key }},{{ $key1 }})"
                                                                                                        style="background-color: #CCCCCC;color:black;padding:5px;margin-left:3px;">{{ $value1->condition->name }}
                                                                                                        <input
                                                                                                            type="hidden"
                                                                                                            name="conditionChoice2{{ $key }}"
                                                                                                            id="conditionChoice2{{ $key }}{{ $key1 }}"
                                                                                                            style="position: relative;top:2px;"
                                                                                                            value="{{ $value1->condition->name . '_' . $value->refurnished_price . '_' . $value->refurnished_sale_price }}">
                                                                                                    </label>
                                                                                                @endif
                                                                                            @endif
                                                                                        @endforeach
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-5 text-right">
                                                                                <a href="{{ URL::to('/add-to-wishlist/' . $value->id) }}"
                                                                                    title="Add To Wishlist"
                                                                                    style="font-size: 10px;"><i
                                                                                        class="w-icon-heart-full"></i>
                                                                                    Add To Wishlist
                                                                                </a>
                                                                            </div>
                                                                            <div class="col-7 text-left">
                                                                                <a href="{{ URL::to('/single-product/' . $value->id . '/' . $value->slug) }}"
                                                                                    class="btn btn-sm btn-primary btn-block"
                                                                                    style="margin-top: 10px;"><i
                                                                                        class="w-icon-cart"></i>
                                                                                    View
                                                                                    Details</a>
                                                                            </div>
                                                                            <div class="col-5 text-right">
                                                                                <div class="star-rating "
                                                                                    style="font-size: 13px;float: right;margin-top:10px;">
                                                                                    <i class="w-icon-star-square-full"
                                                                                        style="color: #1C77C3"></i>
                                                                                    <i class="w-icon-star-square-full"
                                                                                        style="color: #1C77C3"></i>
                                                                                    <i class="w-icon-star-square-full"
                                                                                        style="color: #1C77C3"></i>
                                                                                    <i class="w-icon-star-square-full"
                                                                                        style="color: #1C77C3"></i>
                                                                                    <i class="w-icon-star-square"
                                                                                        style="color: #CCCCCC"></i>
                                                                                    <br />
                                                                                    <span
                                                                                        style="font-size: 12px;position: relative;top:-5px;">12
                                                                                        Review(s)</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
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
                                    <div class="col-lg-9 col-sm-8">
                                        <div class="swiper-container swiper-theme"
                                            data-swiper-options="{
                                            'spaceBetween': 20,
                                            'slidesPerView': 1,
                                            'breakpoints': {
                                                '992': {
                                                    'slidesPerView': 2
                                                },
                                                '1200': {
                                                    'slidesPerView': 3
                                                }
                                            }
                                        }">
                                            <div class="swiper-wrapper row cols-xl-4 cols-lg-3 cols-2">
                                                @php $n2=0; @endphp
                                                @foreach ($products as $key => $value)
                                                    @if ($subcategory->id == $value->subcategory_id)
                                                        <div class="swiper-slide product-col">
                                                            <div class="product-wrap"
                                                                style="border:1px solid gainsboro; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;padding:10px;">
                                                                <div class="product text-center">
                                                                    <figure class="product-media">
                                                                        <a
                                                                            href="{{ URL::to('/single-product/' . $value->id . '/' . $value->slug) }}">
                                                                            @if ($value->product_image)
                                                                                <img src="{{ URL::asset('root/upload/products/' . $value->product_image->image) }}"
                                                                                    alt="Product" />
                                                                            @else
                                                                                <img src="{{ URL::asset('website-assets/images/dummy-bg-img.png') }}"
                                                                                    alt="Product" />
                                                                            @endif
                                                                        </a>
                                                                        <hr>
                                                                    </figure>
                                                                    <div class="product-details">
                                                                        <p class="text-left"
                                                                            style="margin-top:-25px;">
                                                                            <a style="color: black;font-size:20px;font-weight: bold;"
                                                                                href="{{ URL::to('/single-product/' . $value->id . '/' . $value->slug) }}">{{ $value->model_no }}</a>
                                                                        </p>
                                                                        <p class="text-left"
                                                                            style="margin-top: -10px;font-size:12px;">
                                                                            {{ $value->name }}</p>
                                                                        <div
                                                                            style="color: black;font-size:10px;text-align: left!important;">
                                                                            {!! Str::words($value->description, 35) !!}</div>
                                                                        <div class="text-left" style="">
                                                                            <a href="{{ URL::to('/single-product/' . $value->id . '/' . $value->slug) }}"
                                                                                style="font-size: 12px;">View Details
                                                                                <i class="w-icon-angle-right"
                                                                                    style="font-size:9px;margin-left:2px;position: relative;top:0px;"></i>
                                                                                <i class="w-icon-angle-right"
                                                                                    style="margin-left: -15px;font-size:9px;position: relative;top:0px;"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="old-price text-right">
                                                                            <p
                                                                                style="font-size: 15px;margin-bottom:20px;">
                                                                                <del
                                                                                    id="finalValue22{{ $key }}">&nbsp;{{ $settings->currency . '' . $value->new_price }}&nbsp;</del>
                                                                            </p>
                                                                        </div>
                                                                        <div class="sale-price text-right">
                                                                            <p style="font-size: 20px;margin-top:-35px;margin-bottom:20px;"
                                                                                id="finalValue222{{ $key }}">
                                                                                &nbsp;{{ $settings->currency . '' . $value->new_sale_price }}&nbsp;
                                                                            </p>
                                                                        </div>

                                                                        <div style="margin-bottom:20px;width:150px;position: relative;left:45px;margin-top:-20px;"
                                                                            class="ml-auto">
                                                                            <input type="hidden"
                                                                                id="amount12{{ $key }}"
                                                                                value="{{ $value->new_sale_price }}">
                                                                            <input type="hidden" name="price"
                                                                                id="amount222{{ $key }}"
                                                                                value="{{ $value->new_price }}">

                                                                            <select class="to"
                                                                                id="currencyChange2{{ $key }}">
                                                                                <option value="USD" selected>USD
                                                                                </option>
                                                                                <option value="AED">AED</option>
                                                                                <option value="ARS">ARS</option>
                                                                                <option value="AUD">AUD</option>
                                                                                <option value="BGN">BGN</option>
                                                                                <option value="BRL">BRL</option>
                                                                                <option value="BSD">BSD</option>
                                                                                <option value="CAD">CAD</option>
                                                                                <option value="CHF">CHF</option>
                                                                                <option value="CLP">CLP</option>
                                                                                <option value="CNY">CNY</option>
                                                                                <option value="COP">COP</option>
                                                                                <option value="CZK">CZK</option>
                                                                                <option value="DKK">DKK</option>
                                                                                <option value="DOP">DOP</option>
                                                                                <option value="EGP">EGP</option>
                                                                                <option value="EUR">EUR</option>
                                                                                <option value="FJD">FJD</option>
                                                                                <option value="GBP">GBP</option>
                                                                                <option value="GTQ">GTQ</option>
                                                                                <option value="HKD">HKD</option>
                                                                                <option value="HRK">HRK</option>
                                                                                <option value="HUF">HUF</option>
                                                                                <option value="IDR">IDR</option>
                                                                                <option value="ILS">ILS</option>
                                                                                <option value="INR">INR</option>
                                                                                <option value="ISK">ISK</option>
                                                                                <option value="JPY">JPY</option>
                                                                                <option value="KRW">KRW</option>
                                                                                <option value="KZT">KZT</option>
                                                                                <option value="MVR">MVR</option>
                                                                                <option value="MXN">MXN</option>
                                                                                <option value="MYR">MYR</option>
                                                                                <option value="NOK">NOK</option>
                                                                                <option value="NZD">NZD</option>
                                                                                <option value="PAB">PAB</option>
                                                                                <option value="PEN">PEN</option>
                                                                                <option value="PHP">PHP</option>
                                                                                <option value="PKR">PKR</option>
                                                                                <option value="PLN">PLN</option>
                                                                                <option value="PYG">PYG</option>
                                                                                <option value="RON">RON</option>
                                                                                <option value="RUB">RUB</option>
                                                                                <option value="SAR">SAR</option>
                                                                                <option value="SEK">SEK</option>
                                                                                <option value="SGD">SGD</option>
                                                                                <option value="THB">THB</option>
                                                                                <option value="TRY">TRY</option>
                                                                                <option value="TWD">TWD</option>
                                                                                <option value="UAH">UAH</option>
                                                                                <option value="UYU">UYU</option>
                                                                                <option value="ZAR">ZAR</option>
                                                                            </select>
                                                                        </div>
                                                                        <script>
                                                                            $(document).ready(function() {
                                                                                $('#currencyChange2{{ $key }}').change(function() {
                                                                                    var amount = $('#amount12{{ $key }}').val();
                                                                                    var amount2 = $('#amount222{{ $key }}').val();
                                                                                    var currency = $(this).val();
                                                                                    $.ajax({
                                                                                        type: 'GET',
                                                                                        dataType: "json",
                                                                                        url: 'https://api.exchangerate-api.com/v4/latest/USD',
                                                                                        success: function(data, status, xhr) {
                                                                                            // console.log('data: ', data.rates);
                                                                                            var res = (data.rates[currency] / data.rates.USD) * amount;
                                                                                            var res2 = (data.rates[currency] / data.rates.USD) * amount2;

                                                                                            $('#finalValue222{{ $key }}').html(currency + '' + res
                                                                                                .toFixed(2));
                                                                                            $('#finalValue22{{ $key }}').html(currency + '' + res2
                                                                                                .toFixed(2));
                                                                                        }
                                                                                    });
                                                                                });
                                                                            });
                                                                        </script>
                                                                        <div class="row" style="">
                                                                            <div class="col-8 text-left"
                                                                                style="margin-top: -80px;">
                                                                                <span><i class="w-icon-map-marker"></i>
                                                                                    <b>Location</b></span>
                                                                                <p
                                                                                    style="font-size: 12px;margin-top:-5px;margin-bottom:5px;">
                                                                                    &emsp;
                                                                                    @if ($value->shipping_details)
                                                                                        @foreach ($value->shipping_details as $key2 => $value2)
                                                                                            @if ($key2 == $value->shipping_details->count() - 1)
                                                                                                {{ $value2->location->name }}
                                                                                            @else
                                                                                                {{ $value2->location->name }},
                                                                                            @endif
                                                                                        @endforeach
                                                                                    @endif
                                                                                </p>
                                                                                <div style="margin-top:-10px;">
                                                                                    <span><i class="w-icon-sale"></i>
                                                                                        <b>Brand</b></span>
                                                                                    <div>
                                                                                        &emsp;&nbsp;<img
                                                                                            src="{{ URL::asset('root/upload/brands/small/' . $value->brand->logo) }}"
                                                                                            style="width: 50px;margin-top:-15px;margin-bottom:40px;"
                                                                                            alt="">
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                            <div class="col-4 text-right">
                                                                                @php 
                                                                                    $stockIn = 0; 
                                                                                    $stockOut = 0; 
                                                                                @endphp
                                                                                @foreach ($value->stock as $stock)
                                                                                    @php 
                                                                                        $stockIn += $stock->qty_in; 
                                                                                        $stockOut += $stock->qty_out; 
                                                                                    @endphp
                                                                                @endforeach
                                                                                @if(($stockIn-$stockOut)<=0)
                                                                                    <p style="color: red;font-style: italic;margin-top:-20px;">OUT OF STOCK</p>
                                                                                @else
                                                                                    <p style="color: green;font-style: italic;margin-top:-20px;">IN STOCK</p>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-7 text-left">
                                                                                <div style="margin-top: -30px;">
                                                                                    <span><i class="w-icon-sale"></i>
                                                                                        <b>Condition</b></span>
                                                                                    <div class="mt-2">
                                                                                        @foreach ($value->conditions as $key1 => $value1)
                                                                                            @if ($key1 == 0)
                                                                                                @if ($value1->condition->name == 'NEW')
                                                                                                    <label
                                                                                                        for=""
                                                                                                        id="changeBgColor{{ $key . '_' . $key1 }}"
                                                                                                        onclick="ChangeCondition2({{ $key }},{{ $key1 }})"
                                                                                                        class="active"
                                                                                                        style="background-color: #1C77C3;color:white;padding:5px;">{{ $value1->condition->name }}
                                                                                                        <input
                                                                                                            type="hidden"
                                                                                                            name="conditionChoice{{ $key }}"
                                                                                                            id="conditionChoice{{ $key }}{{ $key1 }}"
                                                                                                            checked
                                                                                                            style="position: relative;top:2px;"
                                                                                                            id="conditionChoice1"
                                                                                                            value="{{ $value1->condition->name . '_' . $value->new_price . '_' . $value->new_sale_price }}">
                                                                                                    </label>
                                                                                                    @elseif($value1->condition->name == 'REFURBISHED')
                                                                                                    <label
                                                                                                        for=""
                                                                                                        id="changeBgColorr{{ $key . '_' . $key1 }}"
                                                                                                        class="active"
                                                                                                        onclick="ChangeCondition2({{ $key }},{{ $key1 }})"
                                                                                                        style="background-color: #1C77C3;color:white;padding:5px;">{{ $value1->condition->name }}
                                                                                                        <input
                                                                                                            type="hidden"
                                                                                                            name="conditionChoice{{ $key }}"
                                                                                                            id="conditionChoice{{ $key }}{{ $key1 }}"
                                                                                                            checked
                                                                                                            style="position: relative;top:2px;"
                                                                                                            value="{{ $value1->condition->name . '_' . $value->refurnished_price . '_' . $value->refurnished_sale_price }}">
                                                                                                    </label>
                                                                                                @endif
                                                                                            @else
                                                                                                @if ($value1->condition->name == 'NEW')
                                                                                                    <label
                                                                                                        for=""
                                                                                                        id="changeBgColor{{ $key . '_' . $key1 }}"
                                                                                                        onclick="ChangeCondition2({{ $key }},{{ $key1 }})"
                                                                                                        style="background-color: #CCCCCC;color:black;padding:5px;margin-left:3px;">{{ $value1->condition->name }}
                                                                                                        <input
                                                                                                            type="hidden"
                                                                                                            name="conditionChoice{{ $key }}"
                                                                                                            id="conditionChoice{{ $key }}{{ $key1 }}"
                                                                                                            style="position: relative;top:2px;"
                                                                                                            value="{{ $value1->condition->name . '_' . $value->new_price . '_' . $value->new_sale_price }}">
                                                                                                    </label>
                                                                                                    @elseif($value1->condition->name == 'REFURBISHED')
                                                                                                    <label
                                                                                                        for=""
                                                                                                        id="changeBgColorr{{ $key . '_' . $key1 }}"
                                                                                                        onclick="ChangeCondition2({{ $key }},{{ $key1 }})"
                                                                                                        style="background-color: #CCCCCC;color:black;padding:5px;margin-left:3px;">{{ $value1->condition->name }}
                                                                                                        <input
                                                                                                            type="hidden"
                                                                                                            name="conditionChoice{{ $key }}"
                                                                                                            id="conditionChoice{{ $key }}{{ $key1 }}"
                                                                                                            style="position: relative;top:2px;"
                                                                                                            value="{{ $value1->condition->name . '_' . $value->refurnished_price . '_' . $value->refurnished_sale_price }}">
                                                                                                    </label>
                                                                                                @endif
                                                                                            @endif
                                                                                        @endforeach
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-5 text-right">
                                                                                <a href="{{ URL::to('/add-to-wishlist/' . $value->id) }}"
                                                                                    title="Add To Wishlist"
                                                                                    style="font-size: 10px;"><i
                                                                                        class="w-icon-heart-full"></i>
                                                                                    Add To Wishlist
                                                                                </a>
                                                                            </div>
                                                                            <div class="col-7 text-left">
                                                                                <a href="{{ URL::to('/single-product/' . $value->id . '/' . $value->slug) }}"
                                                                                    class="btn btn-sm btn-primary btn-block"
                                                                                    style="margin-top: 10px;"><i
                                                                                        class="w-icon-cart"></i>
                                                                                    View
                                                                                    Details</a>
                                                                            </div>
                                                                            <div class="col-5 text-right">
                                                                                <div class="star-rating "
                                                                                    style="font-size: 13px;float: right;margin-top:10px;">
                                                                                    <i class="w-icon-star-square-full"
                                                                                        style="color: #1C77C3"></i>
                                                                                    <i class="w-icon-star-square-full"
                                                                                        style="color: #1C77C3"></i>
                                                                                    <i class="w-icon-star-square-full"
                                                                                        style="color: #1C77C3"></i>
                                                                                    <i class="w-icon-star-square-full"
                                                                                        style="color: #1C77C3"></i>
                                                                                    <i class="w-icon-star-square"
                                                                                        style="color: #CCCCCC"></i>
                                                                                    <br />
                                                                                    <span
                                                                                        style="font-size: 12px;position: relative;top:-5px;">12
                                                                                        Review(s)</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
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









                <div class="row category-cosmetic-lifestyle appear-animate mb-5">
                    <div class="col-md-6 mb-4">
                        <div class="banner banner-fixed category-banner-1 br-xs">
                            <figure>
                                <img src="{{ $homeSettings->center_image1 }}"
                                    alt="Category Banner" width="610" height="200"
                                    style="background-color: #3B4B48;" />
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="banner banner-fixed category-banner-2 br-xs">
                            <figure>
                                <img src="{{ $homeSettings->center_image2 }}"
                                    alt="Category Banner" width="610" height="200"
                                    style="background-color: #E5E5E5;" />
                            </figure>
                        </div>
                    </div>
                </div>
                <!-- End of Category Cosmetic Lifestyle -->

                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <h2 class="title text-left ls-normal mt-10 pt-1 appear-animate" title="{{ $category3->name }}">{{ substr($category3->name,0,57) }}...</h2>
                        {{-- <hr class="banner-divider bg-dark mb-2" style="margin-top: -10px;"> --}}
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12">
                        <div class="tab tab-nav-boxed tab-nav-outline appear-animate">
                            <ul class="nav nav-tabs justify-content-right" style="float: right;margin-top:45px;"
                                role="tablist">
                                @php $tab3=0; @endphp
                                @foreach ($SubcategoriesList3 as $value)
                                    @if ($tab3 == 0)
                                        <li class="nav-item mr-2 mb-2">
                                            <a class="nav-link active br-sm font-size-md ls-normal" title="{{ $value->name }}"
                                                href="#tab3-{{ $tab3 }}">{{ substr($value->name, 0, 16) }}...</a>
                                        </li>
                                    @else
                                        <li class="nav-item mr-2 mb-2">
                                            <a class="nav-link br-sm font-size-md ls-normal" title="{{ $value->name }}"
                                                href="#tab3-{{ $tab3 }}">{{ substr($value->name, 0, 16) }}...</a>
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
                                    <div class="col-lg-9 col-sm-8">
                                        <div class="swiper-container swiper-theme"
                                            data-swiper-options="{
                                            'spaceBetween': 20,
                                            'slidesPerView': 1,
                                            'breakpoints': {
                                                '992': {
                                                    'slidesPerView': 2
                                                },
                                                '1200': {
                                                    'slidesPerView': 3
                                                }
                                            }
                                        }">
                                            <div class="swiper-wrapper row cols-xl-4 cols-lg-3 cols-2">
                                                @php $n3=0; @endphp
                                                @foreach ($products as $key => $value)
                                                    @if ($subcategory->id == $value->subcategory_id)
                                                        <div class="swiper-slide product-col">
                                                            <div class="product-wrap"
                                                                style="border:1px solid gainsboro; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;padding:10px;">
                                                                <div class="product text-center">
                                                                    <figure class="product-media">
                                                                        <a
                                                                            href="{{ URL::to('/single-product/' . $value->id . '/' . $value->slug) }}">
                                                                            @if ($value->product_image)
                                                                                <img src="{{ URL::asset('root/upload/products/' . $value->product_image->image) }}"
                                                                                    alt="Product" />
                                                                            @else
                                                                                <img src="{{ URL::asset('website-assets/images/dummy-bg-img.png') }}"
                                                                                    alt="Product" />
                                                                            @endif
                                                                        </a>
                                                                        <hr>
                                                                    </figure>
                                                                    <div class="product-details">
                                                                        <p class="text-left"
                                                                            style="margin-top:-25px;">
                                                                            <a style="color: black;font-size:20px;font-weight: bold;"
                                                                                href="{{ URL::to('/single-product/' . $value->id . '/' . $value->slug) }}">{{ $value->model_no }}</a>
                                                                        </p>
                                                                        <p class="text-left"
                                                                            style="margin-top: -10px;font-size:12px;">
                                                                            {{ $value->name }}</p>
                                                                        <div
                                                                            style="color: black;font-size:10px;text-align: left!important;">
                                                                            {!! Str::words($value->description, 35) !!}</div>
                                                                        <div class="text-left" style="">
                                                                            <a href="{{ URL::to('/single-product/' . $value->id . '/' . $value->slug) }}"
                                                                                style="font-size: 12px;">View Details
                                                                                <i class="w-icon-angle-right"
                                                                                    style="font-size:9px;margin-left:2px;position: relative;top:0px;"></i>
                                                                                <i class="w-icon-angle-right"
                                                                                    style="margin-left: -15px;font-size:9px;position: relative;top:0px;"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="old-price text-right">
                                                                            <p
                                                                                style="font-size: 15px;margin-bottom:20px;">
                                                                                <del
                                                                                    id="finalValue223{{ $key }}">&nbsp;{{ $settings->currency . '' . $value->new_price }}&nbsp;</del>
                                                                            </p>
                                                                        </div>
                                                                        <div class="sale-price text-right">
                                                                            <p style="font-size: 20px;margin-top:-35px;margin-bottom:20px;"
                                                                                id="finalValue2223{{ $key }}">
                                                                                &nbsp;{{ $settings->currency . '' . $value->new_sale_price }}&nbsp;
                                                                            </p>
                                                                        </div>

                                                                        <div style="margin-bottom:20px;width:150px;position: relative;left:45px;margin-top:-20px;"
                                                                            class="ml-auto">
                                                                            <input type="hidden"
                                                                                id="amount123{{ $key }}"
                                                                                value="{{ $value->new_sale_price }}">
                                                                            <input type="hidden" name="price"
                                                                                id="amount2223{{ $key }}"
                                                                                value="{{ $value->new_price }}">

                                                                            <select class="to"
                                                                                id="currencyChange3{{ $key }}">
                                                                                <option value="USD" selected>USD
                                                                                </option>
                                                                                <option value="AED">AED</option>
                                                                                <option value="ARS">ARS</option>
                                                                                <option value="AUD">AUD</option>
                                                                                <option value="BGN">BGN</option>
                                                                                <option value="BRL">BRL</option>
                                                                                <option value="BSD">BSD</option>
                                                                                <option value="CAD">CAD</option>
                                                                                <option value="CHF">CHF</option>
                                                                                <option value="CLP">CLP</option>
                                                                                <option value="CNY">CNY</option>
                                                                                <option value="COP">COP</option>
                                                                                <option value="CZK">CZK</option>
                                                                                <option value="DKK">DKK</option>
                                                                                <option value="DOP">DOP</option>
                                                                                <option value="EGP">EGP</option>
                                                                                <option value="EUR">EUR</option>
                                                                                <option value="FJD">FJD</option>
                                                                                <option value="GBP">GBP</option>
                                                                                <option value="GTQ">GTQ</option>
                                                                                <option value="HKD">HKD</option>
                                                                                <option value="HRK">HRK</option>
                                                                                <option value="HUF">HUF</option>
                                                                                <option value="IDR">IDR</option>
                                                                                <option value="ILS">ILS</option>
                                                                                <option value="INR">INR</option>
                                                                                <option value="ISK">ISK</option>
                                                                                <option value="JPY">JPY</option>
                                                                                <option value="KRW">KRW</option>
                                                                                <option value="KZT">KZT</option>
                                                                                <option value="MVR">MVR</option>
                                                                                <option value="MXN">MXN</option>
                                                                                <option value="MYR">MYR</option>
                                                                                <option value="NOK">NOK</option>
                                                                                <option value="NZD">NZD</option>
                                                                                <option value="PAB">PAB</option>
                                                                                <option value="PEN">PEN</option>
                                                                                <option value="PHP">PHP</option>
                                                                                <option value="PKR">PKR</option>
                                                                                <option value="PLN">PLN</option>
                                                                                <option value="PYG">PYG</option>
                                                                                <option value="RON">RON</option>
                                                                                <option value="RUB">RUB</option>
                                                                                <option value="SAR">SAR</option>
                                                                                <option value="SEK">SEK</option>
                                                                                <option value="SGD">SGD</option>
                                                                                <option value="THB">THB</option>
                                                                                <option value="TRY">TRY</option>
                                                                                <option value="TWD">TWD</option>
                                                                                <option value="UAH">UAH</option>
                                                                                <option value="UYU">UYU</option>
                                                                                <option value="ZAR">ZAR</option>
                                                                            </select>
                                                                        </div>
                                                                        <script>
                                                                            $(document).ready(function() {
                                                                                $('#currencyChange3{{ $key }}').change(function() {
                                                                                    var amount = $('#amount123{{ $key }}').val();
                                                                                    var amount2 = $('#amount2223{{ $key }}').val();
                                                                                    var currency = $(this).val();
                                                                                    $.ajax({
                                                                                        type: 'GET',
                                                                                        dataType: "json",
                                                                                        url: 'https://api.exchangerate-api.com/v4/latest/USD',
                                                                                        success: function(data, status, xhr) {
                                                                                            // console.log('data: ', data.rates);
                                                                                            var res = (data.rates[currency] / data.rates.USD) * amount;
                                                                                            var res2 = (data.rates[currency] / data.rates.USD) * amount2;

                                                                                            $('#finalValue2223{{ $key }}').html(currency + '' + res
                                                                                                .toFixed(2));
                                                                                            $('#finalValue223{{ $key }}').html(currency + '' + res2
                                                                                                .toFixed(2));
                                                                                        }
                                                                                    });
                                                                                });
                                                                            });
                                                                        </script>
                                                                        <div class="row" style="">
                                                                            <div class="col-8 text-left"
                                                                                style="margin-top: -80px;">
                                                                                <span><i
                                                                                        class="w-icon-map-marker"></i>
                                                                                    <b>Location</b></span>
                                                                                <p
                                                                                    style="font-size: 12px;margin-top:-5px;margin-bottom:5px;">
                                                                                    &emsp;
                                                                                    @if ($value->shipping_details)
                                                                                        @foreach ($value->shipping_details as $key2 => $value2)
                                                                                            @if ($key2 == $value->shipping_details->count() - 1)
                                                                                                {{ $value2->location->name }}
                                                                                            @else
                                                                                                {{ $value2->location->name }},
                                                                                            @endif
                                                                                        @endforeach
                                                                                    @endif
                                                                                </p>
                                                                                <div style="margin-top:-10px;">
                                                                                    <span><i class="w-icon-sale"></i>
                                                                                        <b>Brand</b></span>
                                                                                    <div>
                                                                                        &emsp;&nbsp;<img
                                                                                            src="{{ URL::asset('root/upload/brands/small/' . $value->brand->logo) }}"
                                                                                            style="width: 50px;margin-top:-15px;margin-bottom:40px;"
                                                                                            alt="">
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                            <div class="col-4 text-right">
                                                                                @php 
                                                                                    $stockIn = 0; 
                                                                                    $stockOut = 0; 
                                                                                @endphp
                                                                                @foreach ($value->stock as $stock)
                                                                                    @php 
                                                                                        $stockIn += $stock->qty_in; 
                                                                                        $stockOut += $stock->qty_out; 
                                                                                    @endphp
                                                                                @endforeach
                                                                                @if(($stockIn-$stockOut)<=0)
                                                                                    <p style="color: red;font-style: italic;margin-top:-20px;">OUT OF STOCK</p>
                                                                                @else
                                                                                    <p style="color: green;font-style: italic;margin-top:-20px;">IN STOCK</p>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-7 text-left">
                                                                                <div style="margin-top: -30px;">
                                                                                    <span><i class="w-icon-sale"></i>
                                                                                        <b>Condition</b></span>
                                                                                    <div class="mt-2">
                                                                                        @foreach ($value->conditions as $key1 => $value1)
                                                                                            @if ($key1 == 0)
                                                                                                @if ($value1->condition->name == 'NEW')
                                                                                                    <label
                                                                                                        for=""
                                                                                                        id="changeBgColor23{{ $key . '_' . $key1 }}"
                                                                                                        onclick="ChangeCondition3({{ $key }},{{ $key1 }})"
                                                                                                        class="active"
                                                                                                        style="background-color: #1C77C3;color:white;padding:5px;">{{ $value1->condition->name }}
                                                                                                        <input
                                                                                                            type="hidden"
                                                                                                            name="conditionChoice23{{ $key }}"
                                                                                                            id="conditionChoice23{{ $key }}{{ $key1 }}"
                                                                                                            checked
                                                                                                            style="position: relative;top:2px;"
                                                                                                            value="{{ $value1->condition->name . '_' . $value->new_price . '_' . $value->new_sale_price }}">
                                                                                                    </label>
                                                                                                    @elseif($value1->condition->name == 'REFURBISHED')
                                                                                                    <label
                                                                                                        for=""
                                                                                                        id="changeBgColorr23{{ $key . '_' . $key1 }}"
                                                                                                        class="active"
                                                                                                        onclick="ChangeCondition3({{ $key }},{{ $key1 }})"
                                                                                                        style="background-color: #1C77C3;color:white;padding:5px;">{{ $value1->condition->name }}
                                                                                                        <input
                                                                                                            type="hidden"
                                                                                                            name="conditionChoice23{{ $key }}"
                                                                                                            id="conditionChoice23{{ $key }}{{ $key1 }}"
                                                                                                            checked
                                                                                                            style="position: relative;top:2px;"
                                                                                                            value="{{ $value1->condition->name . '_' . $value->refurnished_price . '_' . $value->refurnished_sale_price }}">
                                                                                                    </label>
                                                                                                @endif
                                                                                            @else
                                                                                                @if ($value1->condition->name == 'NEW')
                                                                                                    <label
                                                                                                        for=""
                                                                                                        id="changeBgColor23{{ $key . '_' . $key1 }}"
                                                                                                        onclick="ChangeCondition3({{ $key }},{{ $key1 }})"
                                                                                                        style="background-color: #CCCCCC;color:black;padding:5px;margin-left:3px;">{{ $value1->condition->name }}
                                                                                                        <input
                                                                                                            type="hidden"
                                                                                                            name="conditionChoice23{{ $key }}"
                                                                                                            id="conditionChoice23{{ $key }}{{ $key1 }}"
                                                                                                            style="position: relative;top:2px;"
                                                                                                            value="{{ $value1->condition->name . '_' . $value->new_price . '_' . $value->new_sale_price }}">
                                                                                                    </label>
                                                                                                    @elseif($value1->condition->name == 'REFURBISHED')
                                                                                                    <label
                                                                                                        for=""
                                                                                                        id="changeBgColorr23{{ $key . '_' . $key1 }}"
                                                                                                        onclick="ChangeCondition3({{ $key }},{{ $key1 }})"
                                                                                                        style="background-color: #CCCCCC;color:black;padding:5px;margin-left:3px;">{{ $value1->condition->name }}
                                                                                                        <input
                                                                                                            type="hidden"
                                                                                                            name="conditionChoice23{{ $key }}"
                                                                                                            id="conditionChoice23{{ $key }}{{ $key1 }}"
                                                                                                            style="position: relative;top:2px;"
                                                                                                            value="{{ $value1->condition->name . '_' . $value->refurnished_price . '_' . $value->refurnished_sale_price }}">
                                                                                                    </label>
                                                                                                @endif
                                                                                            @endif
                                                                                        @endforeach
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-5 text-right">
                                                                                <a href="{{ URL::to('/add-to-wishlist/' . $value->id) }}"
                                                                                    title="Add To Wishlist"
                                                                                    style="font-size: 10px;"><i
                                                                                        class="w-icon-heart-full"></i>
                                                                                    Add To Wishlist
                                                                                </a>
                                                                            </div>
                                                                            <div class="col-7 text-left">
                                                                                <a href="{{ URL::to('/single-product/' . $value->id . '/' . $value->slug) }}"
                                                                                    class="btn btn-sm btn-primary btn-block"
                                                                                    style="margin-top: 10px;"><i
                                                                                        class="w-icon-cart"></i>
                                                                                    View
                                                                                    Details</a>
                                                                            </div>
                                                                            <div class="col-5 text-right">
                                                                                <div class="star-rating "
                                                                                    style="font-size: 13px;float: right;margin-top:10px;">
                                                                                    <i class="w-icon-star-square-full"
                                                                                        style="color: #1C77C3"></i>
                                                                                    <i class="w-icon-star-square-full"
                                                                                        style="color: #1C77C3"></i>
                                                                                    <i class="w-icon-star-square-full"
                                                                                        style="color: #1C77C3"></i>
                                                                                    <i class="w-icon-star-square-full"
                                                                                        style="color: #1C77C3"></i>
                                                                                    <i class="w-icon-star-square"
                                                                                        style="color: #CCCCCC"></i>
                                                                                    <br />
                                                                                    <span
                                                                                        style="font-size: 12px;position: relative;top:-5px;">12
                                                                                        Review(s)</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
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
                                    <div class="col-lg-9 col-sm-8">
                                        <div class="swiper-container swiper-theme"
                                            data-swiper-options="{
                                            'spaceBetween': 20,
                                            'slidesPerView': 1,
                                            'breakpoints': {
                                                '992': {
                                                    'slidesPerView': 2
                                                },
                                                '1200': {
                                                    'slidesPerView': 3
                                                }
                                            }
                                        }">
                                            <div class="swiper-wrapper row cols-xl-4 cols-lg-3 cols-2">
                                                @php $n3=0; @endphp
                                                @foreach ($products as $key => $value)
                                                    @if ($subcategory->id == $value->subcategory_id)
                                                        <div class="swiper-slide product-col">
                                                            <div class="product-wrap"
                                                                style="border:1px solid gainsboro; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;padding:10px;">
                                                                <div class="product text-center">
                                                                    <figure class="product-media">
                                                                        <a
                                                                            href="{{ URL::to('/single-product/' . $value->id . '/' . $value->slug) }}">
                                                                            @if ($value->product_image)
                                                                                <img src="{{ URL::asset('root/upload/products/' . $value->product_image->image) }}"
                                                                                    alt="Product" />
                                                                            @else
                                                                                <img src="{{ URL::asset('website-assets/images/dummy-bg-img.png') }}"
                                                                                    alt="Product" />
                                                                            @endif
                                                                        </a>
                                                                        <hr>
                                                                    </figure>
                                                                    <div class="product-details">
                                                                        <p class="text-left"
                                                                            style="margin-top:-25px;">
                                                                            <a style="color: black;font-size:20px;font-weight: bold;"
                                                                                href="{{ URL::to('/single-product/' . $value->id . '/' . $value->slug) }}">{{ $value->model_no }}</a>
                                                                        </p>
                                                                        <p class="text-left"
                                                                            style="margin-top: -10px;font-size:12px;">
                                                                            {{ $value->name }}</p>
                                                                        <div
                                                                            style="color: black;font-size:10px;text-align: left!important;">
                                                                            {!! Str::words($value->description, 35) !!}</div>
                                                                        <div class="text-left" style="">
                                                                            <a href="{{ URL::to('/single-product/' . $value->id . '/' . $value->slug) }}"
                                                                                style="font-size: 12px;">View Details
                                                                                <i class="w-icon-angle-right"
                                                                                    style="font-size:9px;margin-left:2px;position: relative;top:0px;"></i>
                                                                                <i class="w-icon-angle-right"
                                                                                    style="margin-left: -15px;font-size:9px;position: relative;top:0px;"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="old-price text-right">
                                                                            <p
                                                                                style="font-size: 15px;margin-bottom:20px;">
                                                                                <del
                                                                                    id="finalValue223{{ $key }}">&nbsp;{{ $settings->currency . '' . $value->new_price }}&nbsp;</del>
                                                                            </p>
                                                                        </div>
                                                                        <div class="sale-price text-right">
                                                                            <p style="font-size: 20px;margin-top:-35px;margin-bottom:20px;"
                                                                                id="finalValue2223{{ $key }}">
                                                                                &nbsp;{{ $settings->currency . '' . $value->new_sale_price }}&nbsp;
                                                                            </p>
                                                                        </div>

                                                                        <div style="margin-bottom:20px;width:150px;position: relative;left:45px;margin-top:-20px;"
                                                                            class="ml-auto">
                                                                            <input type="hidden"
                                                                                id="amount123{{ $key }}"
                                                                                value="{{ $value->new_sale_price }}">
                                                                            <input type="hidden" name="price"
                                                                                id="amount2223{{ $key }}"
                                                                                value="{{ $value->new_price }}">

                                                                            <select class="to"
                                                                                id="currencyChange3{{ $key }}">
                                                                                <option value="USD" selected>USD
                                                                                </option>
                                                                                <option value="AED">AED</option>
                                                                                <option value="ARS">ARS</option>
                                                                                <option value="AUD">AUD</option>
                                                                                <option value="BGN">BGN</option>
                                                                                <option value="BRL">BRL</option>
                                                                                <option value="BSD">BSD</option>
                                                                                <option value="CAD">CAD</option>
                                                                                <option value="CHF">CHF</option>
                                                                                <option value="CLP">CLP</option>
                                                                                <option value="CNY">CNY</option>
                                                                                <option value="COP">COP</option>
                                                                                <option value="CZK">CZK</option>
                                                                                <option value="DKK">DKK</option>
                                                                                <option value="DOP">DOP</option>
                                                                                <option value="EGP">EGP</option>
                                                                                <option value="EUR">EUR</option>
                                                                                <option value="FJD">FJD</option>
                                                                                <option value="GBP">GBP</option>
                                                                                <option value="GTQ">GTQ</option>
                                                                                <option value="HKD">HKD</option>
                                                                                <option value="HRK">HRK</option>
                                                                                <option value="HUF">HUF</option>
                                                                                <option value="IDR">IDR</option>
                                                                                <option value="ILS">ILS</option>
                                                                                <option value="INR">INR</option>
                                                                                <option value="ISK">ISK</option>
                                                                                <option value="JPY">JPY</option>
                                                                                <option value="KRW">KRW</option>
                                                                                <option value="KZT">KZT</option>
                                                                                <option value="MVR">MVR</option>
                                                                                <option value="MXN">MXN</option>
                                                                                <option value="MYR">MYR</option>
                                                                                <option value="NOK">NOK</option>
                                                                                <option value="NZD">NZD</option>
                                                                                <option value="PAB">PAB</option>
                                                                                <option value="PEN">PEN</option>
                                                                                <option value="PHP">PHP</option>
                                                                                <option value="PKR">PKR</option>
                                                                                <option value="PLN">PLN</option>
                                                                                <option value="PYG">PYG</option>
                                                                                <option value="RON">RON</option>
                                                                                <option value="RUB">RUB</option>
                                                                                <option value="SAR">SAR</option>
                                                                                <option value="SEK">SEK</option>
                                                                                <option value="SGD">SGD</option>
                                                                                <option value="THB">THB</option>
                                                                                <option value="TRY">TRY</option>
                                                                                <option value="TWD">TWD</option>
                                                                                <option value="UAH">UAH</option>
                                                                                <option value="UYU">UYU</option>
                                                                                <option value="ZAR">ZAR</option>
                                                                            </select>
                                                                        </div>
                                                                        <script>
                                                                            $(document).ready(function() {
                                                                                $('#currencyChange3{{ $key }}').change(function() {
                                                                                    var amount = $('#amount123{{ $key }}').val();
                                                                                    var amount2 = $('#amount2223{{ $key }}').val();
                                                                                    var currency = $(this).val();
                                                                                    $.ajax({
                                                                                        type: 'GET',
                                                                                        dataType: "json",
                                                                                        url: 'https://api.exchangerate-api.com/v4/latest/USD',
                                                                                        success: function(data, status, xhr) {
                                                                                            // console.log('data: ', data.rates);
                                                                                            var res = (data.rates[currency] / data.rates.USD) * amount;
                                                                                            var res2 = (data.rates[currency] / data.rates.USD) * amount2;

                                                                                            $('#finalValue2223{{ $key }}').html(currency + '' + res
                                                                                                .toFixed(2));
                                                                                            $('#finalValue223{{ $key }}').html(currency + '' + res2
                                                                                                .toFixed(2));
                                                                                        }
                                                                                    });
                                                                                });
                                                                            });
                                                                        </script>
                                                                        <div class="row" style="">
                                                                            <div class="col-8 text-left"
                                                                                style="margin-top: -80px;">
                                                                                <span><i
                                                                                        class="w-icon-map-marker"></i>
                                                                                    <b>Location</b></span>
                                                                                <p
                                                                                    style="font-size: 12px;margin-top:-5px;margin-bottom:5px;">
                                                                                    &emsp;
                                                                                    @if ($value->shipping_details)
                                                                                        @foreach ($value->shipping_details as $key2 => $value2)
                                                                                            @if ($key2 == $value->shipping_details->count() - 1)
                                                                                                {{ $value2->location->name }}
                                                                                            @else
                                                                                                {{ $value2->location->name }},
                                                                                            @endif
                                                                                        @endforeach
                                                                                    @endif
                                                                                </p>
                                                                                <div style="margin-top:-10px;">
                                                                                    <span><i class="w-icon-sale"></i>
                                                                                        <b>Brand</b></span>
                                                                                    <div>
                                                                                        &emsp;&nbsp;<img
                                                                                            src="{{ URL::asset('root/upload/brands/small/' . $value->brand->logo) }}"
                                                                                            style="width: 50px;margin-top:-15px;margin-bottom:40px;"
                                                                                            alt="">
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                            <div class="col-4 text-right">
                                                                                @php 
                                                                                    $stockIn = 0; 
                                                                                    $stockOut = 0; 
                                                                                @endphp
                                                                                @foreach ($value->stock as $stock)
                                                                                    @php 
                                                                                        $stockIn += $stock->qty_in; 
                                                                                        $stockOut += $stock->qty_out; 
                                                                                    @endphp
                                                                                @endforeach
                                                                                @if(($stockIn-$stockOut)<=0)
                                                                                    <p style="color: red;font-style: italic;margin-top:-20px;">OUT OF STOCK</p>
                                                                                @else
                                                                                    <p style="color: green;font-style: italic;margin-top:-20px;">IN STOCK</p>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-7 text-left">
                                                                                <div style="margin-top: -30px;">
                                                                                    <span><i class="w-icon-sale"></i>
                                                                                        <b>Condition</b></span>
                                                                                    <div class="mt-2">
                                                                                        @foreach ($value->conditions as $key1 => $value1)
                                                                                            @if ($key1 == 0)
                                                                                                @if ($value1->condition->name == 'NEW')
                                                                                                    <label
                                                                                                        for=""
                                                                                                        id="changeBgColor23{{ $key . '_' . $key1 }}"
                                                                                                        onclick="ChangeCondition3({{ $key }},{{ $key1 }})"
                                                                                                        class="active"
                                                                                                        style="background-color: #1C77C3;color:white;padding:5px;">{{ $value1->condition->name }}
                                                                                                        <input
                                                                                                            type="hidden"
                                                                                                            name="conditionChoice23{{ $key }}"
                                                                                                            id="conditionChoice23{{ $key }}{{ $key1 }}"
                                                                                                            checked
                                                                                                            style="position: relative;top:2px;"
                                                                                                            value="{{ $value1->condition->name . '_' . $value->new_price . '_' . $value->new_sale_price }}">
                                                                                                    </label>
                                                                                                    @elseif($value1->condition->name == 'REFURBISHED')
                                                                                                    <label
                                                                                                        for=""
                                                                                                        id="changeBgColorr23{{ $key . '_' . $key1 }}"
                                                                                                        class="active"
                                                                                                        onclick="ChangeCondition3({{ $key }},{{ $key1 }})"
                                                                                                        style="background-color: #1C77C3;color:white;padding:5px;">{{ $value1->condition->name }}
                                                                                                        <input
                                                                                                            type="hidden"
                                                                                                            name="conditionChoice23{{ $key }}"
                                                                                                            id="conditionChoice23{{ $key }}{{ $key1 }}"
                                                                                                            checked
                                                                                                            style="position: relative;top:2px;"
                                                                                                            value="{{ $value1->condition->name . '_' . $value->refurnished_price . '_' . $value->refurnished_sale_price }}">
                                                                                                    </label>
                                                                                                @endif
                                                                                            @else
                                                                                                @if ($value1->condition->name == 'NEW')
                                                                                                    <label
                                                                                                        for=""
                                                                                                        id="changeBgColor23{{ $key . '_' . $key1 }}"
                                                                                                        onclick="ChangeCondition3({{ $key }},{{ $key1 }})"
                                                                                                        style="background-color: #CCCCCC;color:black;padding:5px;margin-left:3px;">{{ $value1->condition->name }}
                                                                                                        <input
                                                                                                            type="hidden"
                                                                                                            name="conditionChoice23{{ $key }}"
                                                                                                            id="conditionChoice23{{ $key }}{{ $key1 }}"
                                                                                                            style="position: relative;top:2px;"
                                                                                                            value="{{ $value1->condition->name . '_' . $value->new_price . '_' . $value->new_sale_price }}">
                                                                                                    </label>
                                                                                                    @elseif($value1->condition->name == 'REFURBISHED')
                                                                                                    <label
                                                                                                        for=""
                                                                                                        id="changeBgColorr23{{ $key . '_' . $key1 }}"
                                                                                                        onclick="ChangeCondition3({{ $key }},{{ $key1 }})"
                                                                                                        style="background-color: #CCCCCC;color:black;padding:5px;margin-left:3px;">{{ $value1->condition->name }}
                                                                                                        <input
                                                                                                            type="hidden"
                                                                                                            name="conditionChoice23{{ $key }}"
                                                                                                            id="conditionChoice23{{ $key }}{{ $key1 }}"
                                                                                                            style="position: relative;top:2px;"
                                                                                                            value="{{ $value1->condition->name . '_' . $value->refurnished_price . '_' . $value->refurnished_sale_price }}">
                                                                                                    </label>
                                                                                                @endif
                                                                                            @endif
                                                                                        @endforeach
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-5 text-right">
                                                                                <a href="{{ URL::to('/add-to-wishlist/' . $value->id) }}"
                                                                                    title="Add To Wishlist"
                                                                                    style="font-size: 10px;"><i
                                                                                        class="w-icon-heart-full"></i>
                                                                                    Add To Wishlist
                                                                                </a>
                                                                            </div>
                                                                            <div class="col-7 text-left">
                                                                                <a href="{{ URL::to('/single-product/' . $value->id . '/' . $value->slug) }}"
                                                                                    class="btn btn-sm btn-primary btn-block"
                                                                                    style="margin-top: 10px;"><i
                                                                                        class="w-icon-cart"></i>
                                                                                    View
                                                                                    Details</a>
                                                                            </div>
                                                                            <div class="col-5 text-right">
                                                                                <div class="star-rating "
                                                                                    style="font-size: 13px;float: right;margin-top:10px;">
                                                                                    <i class="w-icon-star-square-full"
                                                                                        style="color: #1C77C3"></i>
                                                                                    <i class="w-icon-star-square-full"
                                                                                        style="color: #1C77C3"></i>
                                                                                    <i class="w-icon-star-square-full"
                                                                                        style="color: #1C77C3"></i>
                                                                                    <i class="w-icon-star-square-full"
                                                                                        style="color: #1C77C3"></i>
                                                                                    <i class="w-icon-star-square"
                                                                                        style="color: #CCCCCC"></i>
                                                                                    <br />
                                                                                    <span
                                                                                        style="font-size: 12px;position: relative;top:-5px;">12
                                                                                        Review(s)</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
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
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <h2 class="title text-left ls-normal mt-10 pt-1 appear-animate" title="{{ $category4->name }}">{{ substr($category4->name,0,57) }}...</h2>
                        {{-- <hr class="banner-divider bg-dark mb-2" style="margin-top: -10px;"> --}}
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12">
                        <div class="tab tab-nav-boxed tab-nav-outline appear-animate">
                            <ul class="nav nav-tabs justify-content-right" style="float: right;margin-top:45px;"
                                role="tablist">
                                @php $tab4=0; @endphp
                                @foreach ($SubcategoriesList4 as $value)
                                    @if ($tab4 == 0)
                                        <li class="nav-item mr-2 mb-2">
                                            <a class="nav-link active br-sm font-size-md ls-normal" title="{{ $value->name }}"
                                                href="#tab4-{{ $tab4 }}">{{ substr($value->name, 0, 16) }}...</a>
                                        </li>
                                    @else
                                        <li class="nav-item mr-2 mb-2">
                                            <a class="nav-link br-sm font-size-md ls-normal" title="{{ $value->name }}"
                                                href="#tab4-{{ $tab4 }}">{{ substr($value->name, 0, 16) }}...</a>
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
                                    <div class="col-lg-9 col-sm-8">
                                        <div class="swiper-container swiper-theme"
                                            data-swiper-options="{
                                            'spaceBetween': 20,
                                            'slidesPerView': 1,
                                            'breakpoints': {
                                                '992': {
                                                    'slidesPerView': 2
                                                },
                                                '1200': {
                                                    'slidesPerView': 3
                                                }
                                            }
                                        }">
                                            <div class="swiper-wrapper row cols-xl-4 cols-lg-3 cols-2">
                                                @php $n4=0; @endphp
                                                @foreach ($products as $key => $value)
                                                    @if ($subcategory->id == $value->subcategory_id)
                                                        <div class="swiper-slide product-col">
                                                            <div class="product-wrap"
                                                                style="border:1px solid gainsboro; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;padding:10px;">
                                                                <div class="product text-center">
                                                                    <figure class="product-media">
                                                                        <a
                                                                            href="{{ URL::to('/single-product/' . $value->id . '/' . $value->slug) }}">
                                                                            @if ($value->product_image)
                                                                                <img src="{{ URL::asset('root/upload/products/' . $value->product_image->image) }}"
                                                                                    alt="Product" />
                                                                            @else
                                                                                <img src="{{ URL::asset('website-assets/images/dummy-bg-img.png') }}"
                                                                                    alt="Product" />
                                                                            @endif
                                                                        </a>
                                                                        <hr>
                                                                    </figure>
                                                                    <div class="product-details">
                                                                        <p class="text-left"
                                                                            style="margin-top:-25px;">
                                                                            <a style="color: black;font-size:20px;font-weight: bold;"
                                                                                href="{{ URL::to('/single-product/' . $value->id . '/' . $value->slug) }}">{{ $value->model_no }}</a>
                                                                        </p>
                                                                        <p class="text-left"
                                                                            style="margin-top: -10px;font-size:12px;">
                                                                            {{ $value->name }}</p>
                                                                        <div
                                                                            style="color: black;font-size:10px;text-align: left!important;">
                                                                            {!! Str::words($value->description, 35) !!}</div>
                                                                        <div class="text-left" style="">
                                                                            <a href="{{ URL::to('/single-product/' . $value->id . '/' . $value->slug) }}"
                                                                                style="font-size: 12px;">View Details
                                                                                <i class="w-icon-angle-right"
                                                                                    style="font-size:9px;margin-left:2px;position: relative;top:0px;"></i>
                                                                                <i class="w-icon-angle-right"
                                                                                    style="margin-left: -15px;font-size:9px;position: relative;top:0px;"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="old-price text-right">
                                                                            <p
                                                                                style="font-size: 15px;margin-bottom:20px;">
                                                                                <del
                                                                                    id="finalValue2234{{ $key }}">&nbsp;{{ $settings->currency . '' . $value->new_price }}&nbsp;</del>
                                                                            </p>
                                                                        </div>
                                                                        <div class="sale-price text-right">
                                                                            <p style="font-size: 20px;margin-top:-35px;margin-bottom:20px;"
                                                                                id="finalValue22234{{ $key }}">
                                                                                &nbsp;{{ $settings->currency . '' . $value->new_sale_price }}&nbsp;
                                                                            </p>
                                                                        </div>

                                                                        <div style="margin-bottom:20px;width:150px;position: relative;left:45px;margin-top:-20px;"
                                                                            class="ml-auto">
                                                                            <input type="hidden"
                                                                                id="amount1234{{ $key }}"
                                                                                value="{{ $value->new_sale_price }}">
                                                                            <input type="hidden" name="price"
                                                                                id="amount22234{{ $key }}"
                                                                                value="{{ $value->new_price }}">

                                                                            <select class="to"
                                                                                id="currencyChange4{{ $key }}">
                                                                                <option value="USD" selected>USD
                                                                                </option>
                                                                                <option value="AED">AED</option>
                                                                                <option value="ARS">ARS</option>
                                                                                <option value="AUD">AUD</option>
                                                                                <option value="BGN">BGN</option>
                                                                                <option value="BRL">BRL</option>
                                                                                <option value="BSD">BSD</option>
                                                                                <option value="CAD">CAD</option>
                                                                                <option value="CHF">CHF</option>
                                                                                <option value="CLP">CLP</option>
                                                                                <option value="CNY">CNY</option>
                                                                                <option value="COP">COP</option>
                                                                                <option value="CZK">CZK</option>
                                                                                <option value="DKK">DKK</option>
                                                                                <option value="DOP">DOP</option>
                                                                                <option value="EGP">EGP</option>
                                                                                <option value="EUR">EUR</option>
                                                                                <option value="FJD">FJD</option>
                                                                                <option value="GBP">GBP</option>
                                                                                <option value="GTQ">GTQ</option>
                                                                                <option value="HKD">HKD</option>
                                                                                <option value="HRK">HRK</option>
                                                                                <option value="HUF">HUF</option>
                                                                                <option value="IDR">IDR</option>
                                                                                <option value="ILS">ILS</option>
                                                                                <option value="INR">INR</option>
                                                                                <option value="ISK">ISK</option>
                                                                                <option value="JPY">JPY</option>
                                                                                <option value="KRW">KRW</option>
                                                                                <option value="KZT">KZT</option>
                                                                                <option value="MVR">MVR</option>
                                                                                <option value="MXN">MXN</option>
                                                                                <option value="MYR">MYR</option>
                                                                                <option value="NOK">NOK</option>
                                                                                <option value="NZD">NZD</option>
                                                                                <option value="PAB">PAB</option>
                                                                                <option value="PEN">PEN</option>
                                                                                <option value="PHP">PHP</option>
                                                                                <option value="PKR">PKR</option>
                                                                                <option value="PLN">PLN</option>
                                                                                <option value="PYG">PYG</option>
                                                                                <option value="RON">RON</option>
                                                                                <option value="RUB">RUB</option>
                                                                                <option value="SAR">SAR</option>
                                                                                <option value="SEK">SEK</option>
                                                                                <option value="SGD">SGD</option>
                                                                                <option value="THB">THB</option>
                                                                                <option value="TRY">TRY</option>
                                                                                <option value="TWD">TWD</option>
                                                                                <option value="UAH">UAH</option>
                                                                                <option value="UYU">UYU</option>
                                                                                <option value="ZAR">ZAR</option>
                                                                            </select>
                                                                        </div>
                                                                        <script>
                                                                            $(document).ready(function() {
                                                                                $('#currencyChange4{{ $key }}').change(function() {
                                                                                    var amount = $('#amount1234{{ $key }}').val();
                                                                                    var amount2 = $('#amount22234{{ $key }}').val();
                                                                                    var currency = $(this).val();
                                                                                    $.ajax({
                                                                                        type: 'GET',
                                                                                        dataType: "json",
                                                                                        url: 'https://api.exchangerate-api.com/v4/latest/USD',
                                                                                        success: function(data, status, xhr) {
                                                                                            // console.log('data: ', data.rates);
                                                                                            var res = (data.rates[currency] / data.rates.USD) * amount;
                                                                                            var res2 = (data.rates[currency] / data.rates.USD) * amount2;

                                                                                            $('#finalValue22234{{ $key }}').html(currency + '' + res
                                                                                                .toFixed(2));
                                                                                            $('#finalValue2234{{ $key }}').html(currency + '' + res2
                                                                                                .toFixed(2));
                                                                                        }
                                                                                    });
                                                                                });
                                                                            });
                                                                        </script>
                                                                        <div class="row" style="">
                                                                            <div class="col-8 text-left"
                                                                                style="margin-top: -80px;">
                                                                                <span><i
                                                                                        class="w-icon-map-marker"></i>
                                                                                    <b>Location</b></span>
                                                                                <p
                                                                                    style="font-size: 12px;margin-top:-5px;margin-bottom:5px;">
                                                                                    &emsp;
                                                                                    @if ($value->shipping_details)
                                                                                        @foreach ($value->shipping_details as $key2 => $value2)
                                                                                            @if ($key2 == $value->shipping_details->count() - 1)
                                                                                                {{ $value2->location->name }}
                                                                                            @else
                                                                                                {{ $value2->location->name }},
                                                                                            @endif
                                                                                        @endforeach
                                                                                    @endif
                                                                                </p>
                                                                                <div style="margin-top:-10px;">
                                                                                    <span><i class="w-icon-sale"></i>
                                                                                        <b>Brand</b></span>
                                                                                    <div>
                                                                                        &emsp;&nbsp;<img
                                                                                            src="{{ URL::asset('root/upload/brands/small/' . $value->brand->logo) }}"
                                                                                            style="width: 50px;margin-top:-15px;margin-bottom:40px;"
                                                                                            alt="">
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                            <div class="col-4 text-right">
                                                                                @php 
                                                                                    $stockIn = 0; 
                                                                                    $stockOut = 0; 
                                                                                @endphp
                                                                                @foreach ($value->stock as $stock)
                                                                                    @php 
                                                                                        $stockIn += $stock->qty_in; 
                                                                                        $stockOut += $stock->qty_out; 
                                                                                    @endphp
                                                                                @endforeach
                                                                                @if(($stockIn-$stockOut)<=0)
                                                                                    <p style="color: red;font-style: italic;margin-top:-20px;">OUT OF STOCK</p>
                                                                                @else
                                                                                    <p style="color: green;font-style: italic;margin-top:-20px;">IN STOCK</p>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-7 text-left">
                                                                                <div style="margin-top: -30px;">
                                                                                    <span><i class="w-icon-sale"></i>
                                                                                        <b>Condition</b></span>
                                                                                    <div class="mt-2">
                                                                                        @foreach ($value->conditions as $key1 => $value1)
                                                                                            @if ($key1 == 0)
                                                                                                @if ($value1->condition->name == 'NEW')
                                                                                                    <label
                                                                                                        for=""
                                                                                                        id="changeBgColor234{{ $key . '_' . $key1 }}"
                                                                                                        onclick="ChangeCondition4({{ $key }},{{ $key1 }})"
                                                                                                        class="active"
                                                                                                        style="background-color: #1C77C3;color:white;padding:5px;">{{ $value1->condition->name }}
                                                                                                        <input
                                                                                                            type="hidden"
                                                                                                            name="conditionChoice234{{ $key }}"
                                                                                                            id="conditionChoice234{{ $key }}{{ $key1 }}"
                                                                                                            checked
                                                                                                            style="position: relative;top:2px;"
                                                                                                            value="{{ $value1->condition->name . '_' . $value->new_price . '_' . $value->new_sale_price }}">
                                                                                                    </label>
                                                                                                    @elseif($value1->condition->name == 'REFURBISHED')
                                                                                                    <label
                                                                                                        for=""
                                                                                                        id="changeBgColorr234{{ $key . '_' . $key1 }}"
                                                                                                        class="active"
                                                                                                        onclick="ChangeCondition4({{ $key }},{{ $key1 }})"
                                                                                                        style="background-color: #1C77C3;color:white;padding:5px;">{{ $value1->condition->name }}
                                                                                                        <input
                                                                                                            type="hidden"
                                                                                                            name="conditionChoice234{{ $key }}"
                                                                                                            id="conditionChoice234{{ $key }}{{ $key1 }}"
                                                                                                            checked
                                                                                                            style="position: relative;top:2px;"
                                                                                                            value="{{ $value1->condition->name . '_' . $value->refurnished_price . '_' . $value->refurnished_sale_price }}">
                                                                                                    </label>
                                                                                                @endif
                                                                                            @else
                                                                                                @if ($value1->condition->name == 'NEW')
                                                                                                    <label
                                                                                                        for=""
                                                                                                        id="changeBgColor234{{ $key . '_' . $key1 }}"
                                                                                                        onclick="ChangeCondition4({{ $key }},{{ $key1 }})"
                                                                                                        style="background-color: #CCCCCC;color:black;padding:5px;margin-left:3px;">{{ $value1->condition->name }}
                                                                                                        <input
                                                                                                            type="hidden"
                                                                                                            name="conditionChoice234{{ $key }}"
                                                                                                            id="conditionChoice234{{ $key }}{{ $key1 }}"
                                                                                                            style="position: relative;top:2px;"
                                                                                                            value="{{ $value1->condition->name . '_' . $value->new_price . '_' . $value->new_sale_price }}">
                                                                                                    </label>
                                                                                                    @elseif($value1->condition->name == 'REFURBISHED')
                                                                                                    <label
                                                                                                        for=""
                                                                                                        id="changeBgColorr234{{ $key . '_' . $key1 }}"
                                                                                                        onclick="ChangeCondition4({{ $key }},{{ $key1 }})"
                                                                                                        style="background-color: #CCCCCC;color:black;padding:5px;margin-left:3px;">{{ $value1->condition->name }}
                                                                                                        <input
                                                                                                            type="hidden"
                                                                                                            name="conditionChoice234{{ $key }}"
                                                                                                            id="conditionChoice234{{ $key }}{{ $key1 }}"
                                                                                                            style="position: relative;top:2px;"
                                                                                                            value="{{ $value1->condition->name . '_' . $value->refurnished_price . '_' . $value->refurnished_sale_price }}">
                                                                                                    </label>
                                                                                                @endif
                                                                                            @endif
                                                                                        @endforeach
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-5 text-right">
                                                                                <a href="{{ URL::to('/add-to-wishlist/' . $value->id) }}"
                                                                                    title="Add To Wishlist"
                                                                                    style="font-size: 10px;"><i
                                                                                        class="w-icon-heart-full"></i>
                                                                                    Add To Wishlist
                                                                                </a>
                                                                            </div>
                                                                            <div class="col-7 text-left">
                                                                                <a href="{{ URL::to('/single-product/' . $value->id . '/' . $value->slug) }}"
                                                                                    class="btn btn-sm btn-primary btn-block"
                                                                                    style="margin-top: 10px;"><i
                                                                                        class="w-icon-cart"></i>
                                                                                    View
                                                                                    Details</a>
                                                                            </div>
                                                                            <div class="col-5 text-right">
                                                                                <div class="star-rating "
                                                                                    style="font-size: 13px;float: right;margin-top:10px;">
                                                                                    <i class="w-icon-star-square-full"
                                                                                        style="color: #1C77C3"></i>
                                                                                    <i class="w-icon-star-square-full"
                                                                                        style="color: #1C77C3"></i>
                                                                                    <i class="w-icon-star-square-full"
                                                                                        style="color: #1C77C3"></i>
                                                                                    <i class="w-icon-star-square-full"
                                                                                        style="color: #1C77C3"></i>
                                                                                    <i class="w-icon-star-square"
                                                                                        style="color: #CCCCCC"></i>
                                                                                    <br />
                                                                                    <span
                                                                                        style="font-size: 12px;position: relative;top:-5px;">12
                                                                                        Review(s)</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
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
                                    <div class="col-lg-9 col-sm-8">
                                        <div class="swiper-container swiper-theme"
                                            data-swiper-options="{
                                            'spaceBetween': 20,
                                            'slidesPerView': 1,
                                            'breakpoints': {
                                                '992': {
                                                    'slidesPerView': 2
                                                },
                                                '1200': {
                                                    'slidesPerView': 3
                                                }
                                            }
                                        }">
                                            <div class="swiper-wrapper row cols-xl-4 cols-lg-3 cols-2">
                                                @php $n4=0; @endphp
                                                @foreach ($products as $key => $value)
                                                    @if ($subcategory->id == $value->subcategory_id)
                                                        <div class="swiper-slide product-col">
                                                            <div class="product-wrap"
                                                                style="border:1px solid gainsboro; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;padding:10px;">
                                                                <div class="product text-center">
                                                                    <figure class="product-media">
                                                                        <a
                                                                            href="{{ URL::to('/single-product/' . $value->id . '/' . $value->slug) }}">
                                                                            @if ($value->product_image)
                                                                                <img src="{{ URL::asset('root/upload/products/' . $value->product_image->image) }}"
                                                                                    alt="Product" />
                                                                            @else
                                                                                <img src="{{ URL::asset('website-assets/images/dummy-bg-img.png') }}"
                                                                                    alt="Product" />
                                                                            @endif
                                                                        </a>
                                                                        <hr>
                                                                    </figure>
                                                                    <div class="product-details">
                                                                        <p class="text-left"
                                                                            style="margin-top:-25px;">
                                                                            <a style="color: black;font-size:20px;font-weight: bold;"
                                                                                href="{{ URL::to('/single-product/' . $value->id . '/' . $value->slug) }}">{{ $value->model_no }}</a>
                                                                        </p>
                                                                        <p class="text-left"
                                                                            style="margin-top: -10px;font-size:12px;">
                                                                            {{ $value->name }}</p>
                                                                        <div
                                                                            style="color: black;font-size:10px;text-align: left!important;">
                                                                            {!! Str::words($value->description, 35) !!}</div>
                                                                        <div class="text-left" style="">
                                                                            <a href="{{ URL::to('/single-product/' . $value->id . '/' . $value->slug) }}"
                                                                                style="font-size: 12px;">View Details
                                                                                <i class="w-icon-angle-right"
                                                                                    style="font-size:9px;margin-left:2px;position: relative;top:0px;"></i>
                                                                                <i class="w-icon-angle-right"
                                                                                    style="margin-left: -15px;font-size:9px;position: relative;top:0px;"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="old-price text-right">
                                                                            <p
                                                                                style="font-size: 15px;margin-bottom:20px;">
                                                                                <del
                                                                                    id="finalValue2234{{ $key }}">&nbsp;{{ $settings->currency . '' . $value->new_price }}&nbsp;</del>
                                                                            </p>
                                                                        </div>
                                                                        <div class="sale-price text-right">
                                                                            <p style="font-size: 20px;margin-top:-35px;margin-bottom:20px;"
                                                                                id="finalValue22234{{ $key }}">
                                                                                &nbsp;{{ $settings->currency . '' . $value->new_sale_price }}&nbsp;
                                                                            </p>
                                                                        </div>

                                                                        <div style="margin-bottom:20px;width:150px;position: relative;left:45px;margin-top:-20px;"
                                                                            class="ml-auto">
                                                                            <input type="hidden"
                                                                                id="amount1234{{ $key }}"
                                                                                value="{{ $value->new_sale_price }}">
                                                                            <input type="hidden" name="price"
                                                                                id="amount22234{{ $key }}"
                                                                                value="{{ $value->new_price }}">

                                                                            <select class="to"
                                                                                id="currencyChange4{{ $key }}">
                                                                                <option value="USD" selected>USD
                                                                                </option>
                                                                                <option value="AED">AED</option>
                                                                                <option value="ARS">ARS</option>
                                                                                <option value="AUD">AUD</option>
                                                                                <option value="BGN">BGN</option>
                                                                                <option value="BRL">BRL</option>
                                                                                <option value="BSD">BSD</option>
                                                                                <option value="CAD">CAD</option>
                                                                                <option value="CHF">CHF</option>
                                                                                <option value="CLP">CLP</option>
                                                                                <option value="CNY">CNY</option>
                                                                                <option value="COP">COP</option>
                                                                                <option value="CZK">CZK</option>
                                                                                <option value="DKK">DKK</option>
                                                                                <option value="DOP">DOP</option>
                                                                                <option value="EGP">EGP</option>
                                                                                <option value="EUR">EUR</option>
                                                                                <option value="FJD">FJD</option>
                                                                                <option value="GBP">GBP</option>
                                                                                <option value="GTQ">GTQ</option>
                                                                                <option value="HKD">HKD</option>
                                                                                <option value="HRK">HRK</option>
                                                                                <option value="HUF">HUF</option>
                                                                                <option value="IDR">IDR</option>
                                                                                <option value="ILS">ILS</option>
                                                                                <option value="INR">INR</option>
                                                                                <option value="ISK">ISK</option>
                                                                                <option value="JPY">JPY</option>
                                                                                <option value="KRW">KRW</option>
                                                                                <option value="KZT">KZT</option>
                                                                                <option value="MVR">MVR</option>
                                                                                <option value="MXN">MXN</option>
                                                                                <option value="MYR">MYR</option>
                                                                                <option value="NOK">NOK</option>
                                                                                <option value="NZD">NZD</option>
                                                                                <option value="PAB">PAB</option>
                                                                                <option value="PEN">PEN</option>
                                                                                <option value="PHP">PHP</option>
                                                                                <option value="PKR">PKR</option>
                                                                                <option value="PLN">PLN</option>
                                                                                <option value="PYG">PYG</option>
                                                                                <option value="RON">RON</option>
                                                                                <option value="RUB">RUB</option>
                                                                                <option value="SAR">SAR</option>
                                                                                <option value="SEK">SEK</option>
                                                                                <option value="SGD">SGD</option>
                                                                                <option value="THB">THB</option>
                                                                                <option value="TRY">TRY</option>
                                                                                <option value="TWD">TWD</option>
                                                                                <option value="UAH">UAH</option>
                                                                                <option value="UYU">UYU</option>
                                                                                <option value="ZAR">ZAR</option>
                                                                            </select>
                                                                        </div>
                                                                        <script>
                                                                            $(document).ready(function() {
                                                                                $('#currencyChange4{{ $key }}').change(function() {
                                                                                    var amount = $('#amount1234{{ $key }}').val();
                                                                                    var amount2 = $('#amount22234{{ $key }}').val();
                                                                                    var currency = $(this).val();
                                                                                    $.ajax({
                                                                                        type: 'GET',
                                                                                        dataType: "json",
                                                                                        url: 'https://api.exchangerate-api.com/v4/latest/USD',
                                                                                        success: function(data, status, xhr) {
                                                                                            // console.log('data: ', data.rates);
                                                                                            var res = (data.rates[currency] / data.rates.USD) * amount;
                                                                                            var res2 = (data.rates[currency] / data.rates.USD) * amount2;

                                                                                            $('#finalValue22234{{ $key }}').html(currency + '' + res
                                                                                                .toFixed(2));
                                                                                            $('#finalValue2234{{ $key }}').html(currency + '' + res2
                                                                                                .toFixed(2));
                                                                                        }
                                                                                    });
                                                                                });
                                                                            });
                                                                        </script>
                                                                        <div class="row" style="">
                                                                            <div class="col-8 text-left"
                                                                                style="margin-top: -80px;">
                                                                                <span><i
                                                                                        class="w-icon-map-marker"></i>
                                                                                    <b>Location</b></span>
                                                                                <p
                                                                                    style="font-size: 12px;margin-top:-5px;margin-bottom:5px;">
                                                                                    &emsp;
                                                                                    @if ($value->shipping_details)
                                                                                        @foreach ($value->shipping_details as $key2 => $value2)
                                                                                            @if ($key2 == $value->shipping_details->count() - 1)
                                                                                                {{ $value2->location->name }}
                                                                                            @else
                                                                                                {{ $value2->location->name }},
                                                                                            @endif
                                                                                        @endforeach
                                                                                    @endif
                                                                                </p>
                                                                                <div style="margin-top:-10px;">
                                                                                    <span><i class="w-icon-sale"></i>
                                                                                        <b>Brand</b></span>
                                                                                    <div>
                                                                                        &emsp;&nbsp;<img
                                                                                            src="{{ URL::asset('root/upload/brands/small/' . $value->brand->logo) }}"
                                                                                            style="width: 50px;margin-top:-15px;margin-bottom:40px;"
                                                                                            alt="">
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                            <div class="col-4 text-right">
                                                                                @php 
                                                                                    $stockIn = 0; 
                                                                                    $stockOut = 0; 
                                                                                @endphp
                                                                                @foreach ($value->stock as $stock)
                                                                                    @php 
                                                                                        $stockIn += $stock->qty_in; 
                                                                                        $stockOut += $stock->qty_out; 
                                                                                    @endphp
                                                                                @endforeach
                                                                                @if(($stockIn-$stockOut)<=0)
                                                                                    <p style="color: red;font-style: italic;margin-top:-20px;">OUT OF STOCK</p>
                                                                                @else
                                                                                    <p style="color: green;font-style: italic;margin-top:-20px;">IN STOCK</p>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-7 text-left">
                                                                                <div style="margin-top: -30px;">
                                                                                    <span><i class="w-icon-sale"></i>
                                                                                        <b>Condition</b></span>
                                                                                    <div class="mt-2">
                                                                                        @foreach ($value->conditions as $key1 => $value1)
                                                                                            @if ($key1 == 0)
                                                                                                @if ($value1->condition->name == 'NEW')
                                                                                                    <label
                                                                                                        for=""
                                                                                                        id="changeBgColor234{{ $key . '_' . $key1 }}"
                                                                                                        onclick="ChangeCondition234({{ $key }},{{ $key1 }})"
                                                                                                        class="active"
                                                                                                        style="background-color: #1C77C3;color:white;padding:5px;">{{ $value1->condition->name }}
                                                                                                        <input
                                                                                                            type="hidden"
                                                                                                            name="conditionChoice234{{ $key }}"
                                                                                                            id="conditionChoice234{{ $key }}{{ $key1 }}"
                                                                                                            checked
                                                                                                            style="position: relative;top:2px;"
                                                                                                            value="{{ $value1->condition->name . '_' . $value->new_price . '_' . $value->new_sale_price }}">
                                                                                                    </label>
                                                                                                    @elseif($value1->condition->name == 'REFURBISHED')
                                                                                                    <label
                                                                                                        for=""
                                                                                                        id="changeBgColorr234{{ $key . '_' . $key1 }}"
                                                                                                        class="active"
                                                                                                        onclick="ChangeCondition234({{ $key }},{{ $key1 }})"
                                                                                                        style="background-color: #1C77C3;color:white;padding:5px;">{{ $value1->condition->name }}
                                                                                                        <input
                                                                                                            type="hidden"
                                                                                                            name="conditionChoice234{{ $key }}"
                                                                                                            id="conditionChoice234{{ $key }}{{ $key1 }}"
                                                                                                            checked
                                                                                                            style="position: relative;top:2px;"
                                                                                                            value="{{ $value1->condition->name . '_' . $value->refurnished_price . '_' . $value->refurnished_sale_price }}">
                                                                                                    </label>
                                                                                                @endif
                                                                                            @else
                                                                                                @if ($value1->condition->name == 'NEW')
                                                                                                    <label
                                                                                                        for=""
                                                                                                        id="changeBgColor234{{ $key . '_' . $key1 }}"
                                                                                                        onclick="ChangeCondition234({{ $key }},{{ $key1 }})"
                                                                                                        style="background-color: #CCCCCC;color:black;padding:5px;margin-left:3px;">{{ $value1->condition->name }}
                                                                                                        <input
                                                                                                            type="hidden"
                                                                                                            name="conditionChoice234{{ $key }}"
                                                                                                            id="conditionChoice234{{ $key }}{{ $key1 }}"
                                                                                                            style="position: relative;top:2px;"
                                                                                                            value="{{ $value1->condition->name . '_' . $value->new_price . '_' . $value->new_sale_price }}">
                                                                                                    </label>
                                                                                                    @elseif($value1->condition->name == 'REFURBISHED')
                                                                                                    <label
                                                                                                        for=""
                                                                                                        id="changeBgColorr234{{ $key . '_' . $key1 }}"
                                                                                                        onclick="ChangeCondition3({{ $key }},{{ $key1 }})"
                                                                                                        style="background-color: #CCCCCC;color:black;padding:5px;margin-left:3px;">{{ $value1->condition->name }}
                                                                                                        <input
                                                                                                            type="hidden"
                                                                                                            name="conditionChoice234{{ $key }}"
                                                                                                            id="conditionChoice234{{ $key }}{{ $key1 }}"
                                                                                                            style="position: relative;top:2px;"
                                                                                                            value="{{ $value1->condition->name . '_' . $value->refurnished_price . '_' . $value->refurnished_sale_price }}">
                                                                                                    </label>
                                                                                                @endif
                                                                                            @endif
                                                                                        @endforeach
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-5 text-right">
                                                                                <a href="{{ URL::to('/add-to-wishlist/' . $value->id) }}"
                                                                                    title="Add To Wishlist"
                                                                                    style="font-size: 10px;"><i
                                                                                        class="w-icon-heart-full"></i>
                                                                                    Add To Wishlist
                                                                                </a>
                                                                            </div>
                                                                            <div class="col-7 text-left">
                                                                                <a href="{{ URL::to('/single-product/' . $value->id . '/' . $value->slug) }}"
                                                                                    class="btn btn-sm btn-primary btn-block"
                                                                                    style="margin-top: 10px;"><i
                                                                                        class="w-icon-cart"></i>
                                                                                    View
                                                                                    Details</a>
                                                                            </div>
                                                                            <div class="col-5 text-right">
                                                                                <div class="star-rating "
                                                                                    style="font-size: 13px;float: right;margin-top:10px;">
                                                                                    <i class="w-icon-star-square-full"
                                                                                        style="color: #1C77C3"></i>
                                                                                    <i class="w-icon-star-square-full"
                                                                                        style="color: #1C77C3"></i>
                                                                                    <i class="w-icon-star-square-full"
                                                                                        style="color: #1C77C3"></i>
                                                                                    <i class="w-icon-star-square-full"
                                                                                        style="color: #1C77C3"></i>
                                                                                    <i class="w-icon-star-square"
                                                                                        style="color: #CCCCCC"></i>
                                                                                    <br />
                                                                                    <span
                                                                                        style="font-size: 12px;position: relative;top:-5px;">12
                                                                                        Review(s)</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
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















                <h2 class="title title-underline mb-4 ls-normal appear-animate">Our Partners</h2>
                <div class="swiper-container swiper-theme brands-wrapper mb-9 appear-animate"
                    data-swiper-options="{
                    'spaceBetween': 0,
                    'slidesPerView': 2,
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 3
                        },
                        '768': {
                            'slidesPerView': 4
                        },
                        '992': {
                            'slidesPerView': 5
                        },
                        '1200': {
                            'slidesPerView': 6
                        }
                    }
                }">
                    <div class="swiper-wrapper row gutter-no cols-xl-6 cols-lg-5 cols-md-4 cols-sm-3 cols-2">
                        @include('website.partners-list', ['partners' => $partners])
                    </div>
                </div>
                <!-- End of Brands Wrapper -->

                <h2 class="title title-underline mb-4 ls-normal appear-animate">Brand's</h2>
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
                            <div class="swiper-wrapper row gutter-no cols-xl-7 cols-lg-6 cols-md-4 cols-sm-3 cols-2">
                                @include('website.brands-list', ['brands' => $brands])
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    
                </div>
                <!-- End of Reviewed Producs -->
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