@php
use App\Models\Locations;
$locations = Locations::select('id', 'name')
    ->orderBy('id')
    ->get();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Industry Mall | {{ $vendor->name }} | Products</title>

    <meta name="keywords" content="Marketplace ecommerce responsive HTML5 Template" />
    <meta name="description" content="Wolmart is powerful marketplace &amp; ecommerce responsive Html5 Template.">
    <meta name="author" content="D-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ URL::asset('website-assets/images/icons/favicon.png') }}">

    <!-- WebFont.js -->
    <script>
        WebFontConfig = {
            google: {
                families: ['Swiss 721 Thin:400,500,600,700']
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = "{{ URL::asset('Swiss-721-Light.otf') }}";
            // wf.src = "{{ URL::asset('website-assets/js/webfont.js') }}";
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

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ URL::asset('website-assets/vendor/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ URL::asset('website-assets/vendor/nouislider/nouislider.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ URL::asset('website-assets/vendor/magnific-popup/magnific-popup.min.css') }}">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('website-assets/css/style.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('website-assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('website-assets/css/toastr.min.css') }}">

    <script src="{{ URL::asset('website-assets/vendor/jquery/jquery.min.js') }}"></script>
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
        .list-group li a{
            color:black;
        }
        .product-media1{
            box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
        }
        .basic-information-title{
            margin-top: 50px;
        }
        .company-details-table{
            border-bottom: 1px solid black;
        }
        .company-details-table tbody tr{
            border-bottom: 2px solid black;
        }
        .company-details-table tbody tr td{
            padding: 15px;
        }
        .company-details-table tbody tr td:nth-child(odd){
            background-color: #eee;
        }
        .invalid-feedback1{
            color: red;
        }
    </style>
</head>

<body>
    <div class="page-wrapper">
        <h1 class="d-none">VENDOR PRODUCTS</h1>
        @include('components.header')
        <!-- Start of Main -->
        <main class="main">
            <nav class="breadcrumb-nav" style="border-bottom: 1px solid #eee;margin-bottom:50px;">
                <div class="container">
                    <ul class="breadcrumb bb-no">
                        <li><a href="{{ URL::to('/') }}">Home</a></li>
                        <li><a href="javascript:void(0);">Vendor</a></li>
                        <li>{{ $vendor->name }}</li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb-nav -->
            
            <div class="container slider-section mb-5">
                <!-- Slider -->
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12">
                        @if ($vendor->banner_image1!= null)
                        <img src="{{ URL::asset('root/upload/vendor-banners/'.$vendor->banner_image1) }}" alt=""
                        class="slider-img1">
                        @else
                        <img src="{{ URL::asset('root/upload/vendor-banners/slide-1.jpg') }}" alt=""
                            class="slider-img1">
                        @endif
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                @if ($vendor->banner_image2!= null)
                                <img src="{{ URL::asset('root/upload/vendor-banners/'.$vendor->banner_image2) }}" alt=""
                                class="slider-img2">
                                @else
                                <img src="{{ URL::asset('root/upload/vendor-banners/slide-1.jpg') }}" alt=""
                                    class="slider-img2">
                                @endif
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                @if ($vendor->banner_image3!= null)
                                <img src="{{ URL::asset('root/upload/vendor-banners/'.$vendor->banner_image3) }}" alt=""
                                class="slider-img3">
                                @else
                                <img src="{{ URL::asset('root/upload/vendor-banners/slide-1.jpg') }}" alt=""
                                    class="slider-img3">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Slider -->
                <!-- Dropdown Section -->
                <br>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <ul class="list-group">
                            <li><a href="#products-section"><i class="fa fa-building"></i> Products</a></li>
                            <li><a href="#best-selling-products-section"><i class="fa fa-cube"></i> Best Selling</a></li>
                            <li><a href="#vendor-album"><i class="fa fa-search"></i> Vendor Album</a></li>
                            <li><a href="#basic-information"><i class="fa fa-hourglass-half"></i> Basic Information</a></li>
                            <li><a href="#company-details"><i class="fa fa-signal" id="products-section"></i> Company Details</a></li>
                            <li><a href="#vendor-contact-form-section"><i class="fa fa-gift"></i> Contact</a></li>

                            {{-- <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-2">
                            <li><a href="#products-section"><i class="fa fa-building"></i> Products</a></li>
                           
                        </div>  
                            <div class="col-lg-2 col-md-2 col-sm-2">
                            <li><a href="#best-selling-products-section"><i class="fa fa-cube"></i> Best Selling</a></li>
                            
                        </div>
                            <div class="col-lg-2 col-md-2 col-sm-2">
                            <li><a href="#vendor-album"><i class="fa fa-search"></i> Vendor Album</a></li>
                            
                        </div>
                            <div class="col-lg-2 col-md-2 col-sm-2">
                            <li><a href="#basic-information"><i class="fa fa-hourglass-half"></i> Basic Information</a></li>
                           
                        </div>
                            <div class="col-lg-2 col-md-2 col-sm-2">
                            <li><a href="#company-details"><i class="fa fa-signal" id="products-section"></i> Company Details</a></li>
                            
                        </div>
                            <div class="col-lg-2 col-md-2 col-sm-2">
                            <li><a href="#vendor-contact-form-section"><i class="fa fa-gift"></i> Contact</a></li>
                             
                        </div>
                            </div>   --}}
                        </ul>
                    </div>
                </div>
                <!-- End Dropdown Section -->
            </div>
            
            <!-- Dropdown & Products Section -->
            <div class="page-content mb-12">
                <div class="container">
                    <!-- Start of Main Content -->
                    <div class="main-content">
                        <!-- Start of Shop Banner -->
                        @if ($errors->any())
                            <div class="alert alert-error alert-bg alert-block alert-inline show-code-action">
                                <h4 class="alert-title">
                                    <i class="w-icon-exclamation-triangle"></i>Oh snap!
                                </h4>
                                Change a few things up and try submitting again.
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button class="btn btn-link btn-close" aria-label="button">
                                    <i class="close-icon"></i>
                                </button>
                            </div>
                            <br>
                        @endif
                        <!-- End of Shop Banner -->

                        <div class="product-wrapper row cols-md-3 cols-sm-1 cols-1">
                            @if (count($products) > 0)
                                @forelse ($products as $key=>$value)
                                    <div class="product-wrap">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <a
                                                    href="{{ URL::to('/single-product/' . $value->id . '/' . $value->slug) }}">
                                                    @if ($value->product_image)
                                                        <img src="{{ URL::asset('root/upload/products/' . $value->product_image->image) }}"
                                                            alt="Product" />
                                                    @else
                                                        <img src="{{ URL::asset('website-assets/images/dummy-bg-img.png') }}"
                                                            alt="Product" style="height: 167px;" />
                                                    @endif
                                                </a>
                                                <hr>
                                            </figure>
                                            <div class="product-details">
                                                <p class="text-left" style="margin-top: -15px;">
                                                    <a style="color: black;font-size:20px;font-weight: bold;"
                                                        href="{{ URL::to('/single-product/' . $value->id . '/' . $value->slug) }}">{{ $value->model_no }}</a>
                                                </p>
                                                <p class="text-left" style="margin-top: -23px;font-size:12px;">
                                                    {{ $value->name }}</p>
                                                <div
                                                    style="color: black;text-align: left!important;margin-top:-20px;margin-bottom:20px;">
                                                    {!! Str::words($value->description, 35) !!}</div>
                                                <div class="text-left" style="margin-top:-5px;">
                                                    <a href="{{ URL::to('/single-product/' . $value->id . '/' . $value->slug) }}"
                                                        style="font-size: 15px;position: relative;top:-13px;">View
                                                        Details
                                                        <i class="w-icon-angle-right"
                                                            style="font-size:12px;margin-left:1px;"></i>
                                                        <i class="w-icon-angle-right"
                                                            style="margin-left: -20px;font-size:12px;"></i></a>
                                                </div>
                                                @if ($value->new_price != null)
                                                    <div class="old-price text-right">
                                                        <p style="font-size: 15px;">
                                                            <del
                                                                id="finalValue2{{ $key }}">&nbsp;{{ $settings->currency . '' . $value->new_price }}&nbsp;</del>
                                                        </p>
                                                    </div>
                                                    <div class="sale-price text-right">
                                                        <p style="font-size: 20px;margin-top:-30px;"
                                                            id="finalValue{{ $key }}">
                                                            &nbsp;{{ $settings->currency . '' . $value->new_sale_price }}&nbsp;
                                                        </p>
                                                    </div>

                                                    <div style="margin-bottom:20px;width:150px;position: relative;left:45px;margin-top:-20px;"
                                                        class="ml-auto">
                                                        <input type="hidden" id="amount1{{ $key }}"
                                                            value="{{ $value->new_sale_price }}">
                                                        <input type="hidden" name="price"
                                                            id="amount2{{ $key }}"
                                                            value="{{ $value->new_price }}">

                                                        <select class="to"
                                                            id="currencyChange{{ $key }}">
                                                            <option value="USD" selected>USD</option>
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
                                                                            .toFixed());
                                                                        $('#finalValue2{{ $key }}').html(currency + '' + res2
                                                                            .toFixed());
                                                                    }
                                                                });
                                                            });
                                                        });
                                                    </script>
                                                    <div class="row" style="margin-top: -20px;">
                                                        <div class="col-8 text-left" style="margin-top: -80px;">
                                                            <span><i class="w-icon-map-marker"></i>
                                                                <b>Location</b></span>
                                                            <p style="font-size: 12px;">&emsp;
                                                                @if ($value->shipping_details)
                                                                    @foreach ($value->shipping_details as $value2)
                                                                        {{ $value2->location->name }},
                                                                    @endforeach
                                                                @endif
                                                            </p>
                                                            <div style="margin-top:-10px;">
                                                                <span><i class="w-icon-sale"></i> <b>Brand</b></span>
                                                                <div>
                                                                    &emsp;&nbsp;<img
                                                                        src="{{ URL::asset('root/upload/brands/small/' . $value->brand->logo) }}"
                                                                        width="50px" alt="">
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
                                                            @if ($stockIn - $stockOut <= 0)
                                                                <p
                                                                    style="color: red;font-style: italic;font-size:10px;">
                                                                    OUT OF STOCK</p>
                                                            @else
                                                                <p style="color: green;font-style: italic;font-size: 10px;">IN STOCK
                                                                </p>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="row" style="margin-top: -25px;">
                                                        <div class="col-7 text-left">
                                                            <div style="margin-top: -5px;">
                                                                <span><i class="w-icon-sale"></i>
                                                                    <b>Condition</b></span>
                                                                <div class="mt-2">
                                                                    @foreach ($value->conditions as $key1 => $value1)
                                                                        @if ($key1 == 0)
                                                                            @if ($value1->condition->name == 'NEW')
                                                                                <label for=""
                                                                                    id="changeBgColor{{ $key . '_' . $key1 }}"
                                                                                    onclick="ChangeCondition({{ $key }},{{ $key1 }})"
                                                                                    class="active"
                                                                                    style="background-color: #1C77C3;color:white;padding:5px;">{{ $value1->condition->name }}
                                                                                    <input type="hidden"
                                                                                        name="conditionChoice{{ $key }}"
                                                                                        id="conditionChoice{{ $key }}{{ $key1 }}"
                                                                                        checked
                                                                                        style="position: relative;top:2px;"
                                                                                        id="conditionChoice1"
                                                                                        value="{{ $value1->condition->name . '_' . $value->new_price . '_' . $value->new_sale_price }}">
                                                                                </label>
                                                                            @elseif ($value1->condition->name == 'REFURBISHED')
                                                                                <label for=""
                                                                                    id="changeBgColorr{{ $key . '_' . $key1 }}"
                                                                                    class="active"
                                                                                    onclick="ChangeCondition({{ $key }},{{ $key1 }})"
                                                                                    style="background-color: #1C77C3;color:white;padding:5px;">{{ $value1->condition->name }}
                                                                                    <input type="hidden"
                                                                                        name="conditionChoice{{ $key }}"
                                                                                        id="conditionChoice{{ $key }}{{ $key1 }}"
                                                                                        checked
                                                                                        style="position: relative;top:2px;"
                                                                                        value="{{ $value1->condition->name . '_' . $value->refurnished_price . '_' . $value->refurnished_sale_price }}">
                                                                                </label>
                                                                            @endif
                                                                        @else
                                                                            @if ($value1->condition->name == 'NEW')
                                                                                <label for=""
                                                                                    id="changeBgColor{{ $key . '_' . $key1 }}"
                                                                                    onclick="ChangeCondition({{ $key }},{{ $key1 }})"
                                                                                    style="background-color: #CCCCCC;color:black;padding:5px;margin-left:3px;">{{ $value1->condition->name }}
                                                                                    <input type="hidden"
                                                                                        name="conditionChoice{{ $key }}"
                                                                                        id="conditionChoice{{ $key }}{{ $key1 }}"
                                                                                        style="position: relative;top:2px;"
                                                                                        value="{{ $value1->condition->name . '_' . $value->new_price . '_' . $value->new_sale_price }}">
                                                                                </label>
                                                                            @elseif ($value1->condition->name == 'REFURBISHED')
                                                                                <label for=""
                                                                                    id="changeBgColorr{{ $key . '_' . $key1 }}"
                                                                                    onclick="ChangeCondition({{ $key }},{{ $key1 }})"
                                                                                    style="background-color: #CCCCCC;color:black;padding:5px;margin-left:3px;">{{ $value1->condition->name }}
                                                                                    <input type="hidden"
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

                                                        <div class="col-5 text-right" style="margin-top:20px;">
                                                            <a href="{{ URL::to('/add-to-wishlist/' . $value->id) }}"
                                                                title="Add To Wishlist" style="font-size: 10px;"><i
                                                                    class="w-icon-heart-full"></i>
                                                                Add To Wishlist
                                                            </a>
                                                        </div>
                                                        <div class="col-7 text-left" style="margin-top:20px;">
                                                            <a href="{{ URL::to('/single-product/' . $value->id . '/' . $value->slug) }}"
                                                                class="btn btn-sm btn-primary btn-block"><i
                                                                    class="w-icon-cart"></i>
                                                                View
                                                                Details</a>
                                                        </div>
                                                        <div class="col-5 text-right">
                                                            @php 
                                                            $stars=0;
                                                            $count=0;
                                                            @endphp
                                                            @foreach($relatedreviews as $reviews)
                                                            @if ($value->id == $reviews->product_id )
                                                            @php
                                                                $count= $count+1;
                                                                $stars+= $reviews->rating;
                                                            @endphp
                                                            @endif
                                                            @endforeach
                                                            
                                                            @if($count!=0 )
                                                            <div class="col-5 text-right">
                                                                <br>
                                                                {{-- <p>{{ $count }}</p> --}}
                                                                <div class="ratings-container"style="margin-left:110px;">
                                                                    <div class="ratings-full">
                                                                        {{-- <p>{{ $stars }}</p> --}}
                                                                        <span class="ratings" style="width:{{($stars/$count)*20 }}%;"></span>
                                                                        <span class="tooltiptext tooltip-top"></span>
                                                                    </div>
                                                                    {{-- <a href="#" class="rating-reviews">({{ $overAllProductRating }} Reviews)</a> --}}
                                                                </div>
                                                            </div>
                                                            @else  
                                                            <div class="col-5 text-right">
                                                                
                                                                <br>
                                                                <div class="ratings-container"style="margin-left:120px;">
                                                                    <div class="ratings-full">
                                                                        {{-- <p>{{ $count }}</p> --}}
                                                                        
                                                                        <span class="ratings" style="width:0%;"></span>
                                                                        <span class="tooltiptext tooltip-top"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endif
                                                            {{-- <div class="star-rating "
                                                                style="font-size: 13px;float: right;margin-top:20px;">
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
                                                            </div> --}}
                                                        </div>
                                                    </div>
                                                @else
                                                    <div class="row" style="margin-top: -35px;">
                                                        <div class="col-12">
                                                            <a href="{{ URL::to('/single-product/' . $value->id . '/' . $value->slug) }}"
                                                                style="cursor: pointer;"><img
                                                                    src="{{ URL::asset('website-assets/images/GET-A-QUOTE.png') }}"
                                                                    style="width:250px;margin-bottom:30px;"
                                                                    alt=""></a>
                                                        </div>
                                                        <div class="col-7 text-left">
                                                            <a href="{{ URL::to('/single-product/' . $value->id . '/' . $value->slug) }}"
                                                                class="btn btn-sm btn-primary btn-block"
                                                                style="margin-top: 10px;"><i class="w-icon-cart"></i>
                                                                View
                                                                Details</a>
                                                        </div>
                                                        <div class="col-5 text-right">
                                                            @php 
                                                            $stars=0;
                                                            $count=0;
                                                            @endphp
                                                            @foreach($relatedreviews as $reviews)
                                                            @if ($value->id == $reviews->product_id )
                                                            @php
                                                                $count= $count+1;
                                                                $stars+= $reviews->rating;
                                                            @endphp
                                                            @endif
                                                            @endforeach
                                                            
                                                            @if($count!=0 )
                                                            <div class="col-5 text-right">
                                                                <br>
                                                                {{-- <p>{{ $count }}</p> --}}
                                                                <div class="ratings-container"style="margin-left:110px;">
                                                                    <div class="ratings-full">
                                                                        {{-- <p>{{ $stars }}</p> --}}
                                                                        <span class="ratings" style="width:{{($stars/$count)*20 }}%;"></span>
                                                                        <span class="tooltiptext tooltip-top"></span>
                                                                    </div>
                                                                    {{-- <a href="#" class="rating-reviews">({{ $overAllProductRating }} Reviews)</a> --}}
                                                                </div>
                                                            </div>
                                                            @else  
                                                            <div class="col-5 text-right">
                                                                
                                                                <br>
                                                                <div class="ratings-container"style="margin-left:110px;">
                                                                    <div class="ratings-full">
                                                                        {{-- <p>{{ $count }}</p> --}}
                                                                        
                                                                        <span class="ratings" style="width:0%;"></span>
                                                                        <span class="tooltiptext tooltip-top"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endif
                                                            {{-- <div class="star-rating "
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
                                                            </div> --}}
                                                        </div>
                                                    </div>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="product-wrap">
                                        <div class="product text-center">
                                            <figure class="product-media1">
                                                <img src="{{ URL::asset('website-assets/images/not-found.jpg') }}"
                                                    alt="Product Not Found">
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="product text-center"></div>
                                    </div>
                                @endforelse
                            @else
                                <div class="product-wrap">
                                    <div class="product text-center"></div>
                                </div>
                                <div class="product-wrap">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <img src="{{ URL::asset('website-assets/images/not-found.jpg') }}"
                                                alt="Product Not Found">
                                        </figure>
                                    </div>
                                </div>
                                <div class="product-wrap">
                                    <div class="product text-center"></div>
                                </div>
                            @endif

                        </div>

                        <div class="post-wrapper appear-animate mb-4" id="best-selling-products-section">
                            <div class="title-link-wrapper pb-1 mb-4">
                                <h2 class="title ls-normal mb-0">Related Products</h2>
                            </div>
                            <div class="swiper">
                                <div class="swiper-container swiper-theme" data-swiper-options="{
                                    'slidesPerView': 1,
                                    'spaceBetween': 20,
                                    'breakpoints': {
                                        '576': {
                                            'slidesPerView': 2
                                        },
                                        '768': {
                                            'slidesPerView': 3
                                        },
                                        '992': {
                                            'slidesPerView': 3
                                        }
                                    }
                                }">
                                    <div class="swiper-wrapper cols-md-3 cols-sm-2 cols-1">
                                        @foreach ($relatedProducts as $key=>$value)
                                        <div class="swiper-slide post text-center"> 
                                            <div class="product-wrap">
                                                <div class="product text-center" style="border: 1px solid #e3e3e3;">
                                                    <figure class="product-media">
                                                        <a
                                                            href="{{ URL::to('/single-product/' . $value->id . '/' . $value->slug) }}">
                                                            @if ($value->product_image)
                                                                <img src="{{ URL::asset('root/upload/products/' . $value->product_image->image) }}"
                                                                    alt="Product" />
                                                            @else
                                                                <img src="{{ URL::asset('website-assets/images/dummy-bg-img.png') }}"
                                                                    style="height: 167px;" alt="Product" />
                                                            @endif
                                                        </a>
                                                        <hr>
                                                    </figure>
                                                    <div class="product-details">
                                                        <p class="text-left" style="margin-top: -15px;">
                                                            <a style="color: black;font-size:20px;font-weight: bold;"
                                                                href="{{ URL::to('/single-product/' . $value->id . '/' . $value->slug) }}">{{ $value->model_no }}</a>
                                                        </p>
                                                        <p class="text-left" style="margin-top: -23px;font-size:12px;">{{ $value->name }}</p>
                                                        <div style="color: black;text-align: left!important;margin-top:-20px;">
                                                            {!! Str::words($value->description, 35) !!}</div>
                                                        <div class="text-left" style="margin-top:15px;">
                                                            <a href="{{ URL::to('/single-product/' . $value->id . '/' . $value->slug) }}"
                                                                style="font-size: 15px;position: relative;top:-13px;">View
                                                                Details
                                                                <i class="w-icon-angle-right"
                                                                    style="font-size:12px;margin-left:1px;"></i>
                                                                <i class="w-icon-angle-right"
                                                                    style="margin-left: -20px;font-size:12px;"></i></a>
                                                        </div>
                                                        <div class="old-price text-right">
                                                            <p style="font-size: 15px;">
                                                                <del
                                                                    id="finalValue2{{ $key }}">&nbsp;{{ $settings->currency . '' . $value->new_price }}&nbsp;</del>
                                                            </p>
                                                        </div>
                                                        <div class="sale-price text-right">
                                                            <p style="font-size: 20px;margin-top:-30px;"
                                                                id="finalValue{{ $key }}">
                                                                &nbsp;{{ $settings->currency . '' . $value->new_sale_price }}&nbsp;
                                                            </p>
                                                        </div>
                
                                                        <div style="margin-bottom:20px;width:150px;position: relative;left:45px;margin-top:-20px;"
                                                            class="ml-auto">
                                                            <input type="hidden" id="amount1{{ $key }}"
                                                                value="{{ $value->new_sale_price }}">
                                                            <input type="hidden" name="price"
                                                                id="amount2{{ $key }}"
                                                                value="{{ $value->new_price }}">
                
                                                            <select class="to" id="currencyChange{{ $key }}">
                                                                <option value="USD" selected>USD</option>
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
                                                                        .toFixed());
                                                                            $('#finalValue2{{ $key }}').html(currency + '' + res2
                                                                            .toFixed());
                                                                        }
                                                                    });
                                                                });
                                                            });
                                                        </script>
                                                        <div class="row" style="margin-top: -20px;">
                                                            <div class="col-8 text-left" style="margin-top: -80px;">
                                                                <span><i class="w-icon-map-marker"></i> <b>Location</b></span>
                                                                <p style="font-size: 12px;">&emsp;
                                                                    @if ($value->shipping_details)
                                                                        @foreach ($value->shipping_details as $value2)
                                                                            {{ $value2->location->name }},
                                                                        @endforeach
                                                                    @endif
                                                                </p>
                                                                <div style="margin-top:-20px;">
                                                                    <span><i class="w-icon-sale"></i> <b>Brand</b></span>
                                                                    <div>
                                                                        &emsp;&nbsp;<img
                                                                            src="{{ URL::asset('root/upload/brands/small/' . $value->brand->logo) }}"
                                                                            style="width: 50px!important;margin-top:-20px;" alt="">
                                                                    </div>
                                                                </div>
                
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                @php 
                                                                $sumin=0;
                                                                $sumout=0;
                                                                $total=0;
                                                                // $count=0;
                                                                @endphp
                                                                @foreach($relatedinout as $reviews)
                                                                @if ($value->id == $reviews->pro_id )
                                                                @php
                                                                    // $count= $count+1;
                                                                    $sumin+= $reviews->qty_in;
                                                                    $sumout+= $reviews->qty_out;
                                                                    $total =  $sumin - $sumout;
                                                                @endphp
                                                                @endif
                                                                @endforeach
                                                                
                                                                @if($total<=0  )
                                                                {{-- <p>{{ $total }}</p> --}}
                                                                <p style="color: rgb(187, 28, 0);font-style: italic;font-size: 10px;">OUT OF STOCK</p>
                                                                @else  
                                                                {{-- <p>{{ $total }}</p> --}}
                                                                <p style="color: green;font-style: italic;font-size: 10px;">IN STOCK</p>
                                                                @endif
                                                                {{-- <p style="color: green;font-style: italic;">IN STOCK</p> --}}
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-7 text-left">
                                                                <div style="margin-top: -40px;">
                                                                    <span><i class="w-icon-sale"></i> <b>Condition</b></span>
                                                                    <div class="mt-2">
                                                                        @foreach ($value->conditions as $key1 => $value1)
                                                                            @if ($key1 == 0)
                                                                                @if ($value1->condition->name == 'NEW')
                                                                                    <label for=""
                                                                                        id="changeBgColor{{ $key . '_' . $key1 }}"
                                                                                        onclick="ChangeCondition1({{ $key }},{{ $key1 }})"
                                                                                        class="active"
                                                                                        style="background-color: #1C77C3;color:white;padding:5px;">{{ $value1->condition->name }}
                                                                                        <input type="hidden"
                                                                                            name="conditionChoice{{ $key }}"
                                                                                            id="conditionChoice{{ $key }}{{ $key1 }}"
                                                                                            checked
                                                                                            style="position: relative;top:2px;"
                                                                                            id="conditionChoice1"
                                                                                            value="{{ $value1->condition->name . '_' . $value->new_price . '_' . $value->new_sale_price }}">
                                                                                    </label>
                                                                                @elseif ($value1->condition->name == 'REFURBISHED')
                                                                                    <label for=""
                                                                                        id="changeBgColorr{{ $key . '_' . $key1 }}"
                                                                                        class="active"
                                                                                        onclick="ChangeCondition1({{ $key }},{{ $key1 }})"
                                                                                        style="background-color: #1C77C3;color:white;padding:5px;">{{ $value1->condition->name }}
                                                                                        <input type="hidden"
                                                                                            name="conditionChoice{{ $key }}"
                                                                                            id="conditionChoice{{ $key }}{{ $key1 }}"
                                                                                            checked
                                                                                            style="position: relative;top:2px;"
                                                                                            value="{{ $value1->condition->name . '_' . $value->refurnished_price . '_' . $value->refurnished_sale_price }}">
                                                                                    </label>
                                                                                @endif
                                                                            @else
                                                                                @if ($value1->condition->name == 'NEW')
                                                                                    <label for=""
                                                                                        id="changeBgColor{{ $key . '_' . $key1 }}"
                                                                                        onclick="ChangeCondition1({{ $key }},{{ $key1 }})"
                                                                                        style="background-color: #CCCCCC;color:black;padding:5px;margin-left:3px;">{{ $value1->condition->name }}
                                                                                        <input type="hidden"
                                                                                            name="conditionChoice{{ $key }}"
                                                                                            id="conditionChoice{{ $key }}{{ $key1 }}"
                                                                                            style="position: relative;top:2px;"
                                                                                            value="{{ $value1->condition->name . '_' . $value->new_price . '_' . $value->new_sale_price }}">
                                                                                    </label>
                                                                                @elseif ($value1->condition->name == 'REFURBISHED')
                                                                                    <label for=""
                                                                                        id="changeBgColorr{{ $key . '_' . $key1 }}"
                                                                                        onclick="ChangeCondition1({{ $key }},{{ $key1 }})"
                                                                                        style="background-color: #CCCCCC;color:black;padding:5px;margin-left:3px;">{{ $value1->condition->name }}
                                                                                        <input type="hidden"
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
                
                                                            <div class="col-5 text-right" style="margin-top: -13px;">
                                                                <a href="{{ URL::to('/add-to-wishlist/' . $value->id) }}"
                                                                    title="Add To Wishlist" style="font-size: 10px;"><i
                                                                        class="w-icon-heart-full"></i>
                                                                    Add To Wishlist
                                                                </a>
                                                            </div>
                                                            <div class="col-7 text-left">
                                                                <a href="{{ URL::to('/single-product/' . $value->id . '/' . $value->slug) }}"
                                                                    class="btn btn-sm btn-primary btn-block"
                                                                    style="margin-top: 10px;"><i class="w-icon-cart"></i> View
                                                                    Details</a>
                                                            </div>
                                                            <div class="col-5 text-right">
                                                                @php 
                                                                $stars=0;
                                                                $count=0;
                                                                @endphp
                                                                @foreach($relatedreviews as $reviews)
                                                                @if ($value->id == $reviews->product_id )
                                                                @php
                                                                    $count= $count+1;
                                                                    $stars+= $reviews->rating;
                                                                @endphp
                                                                @endif
                                                                @endforeach
                                                                
                                                                @if($count!=0 )
                                                                <div class="col-5 text-right">
                                                                    <br>
                                                                    {{-- <p>{{ $count }}</p> --}}
                                                                    <div class="ratings-container"style="margin-left:110px;">
                                                                        <div class="ratings-full">
                                                                            {{-- <p>{{ $stars }}</p> --}}
                                                                            <span class="ratings" style="width:{{($stars/$count)*20 }}%;"></span>
                                                                            <span class="tooltiptext tooltip-top"></span>
                                                                        </div>
                                                                        {{-- <a href="#" class="rating-reviews">({{ $overAllProductRating }} Reviews)</a> --}}
                                                                    </div>
                                                                </div>
                                                                @else  
                                                                <div class="col-5 text-right">
                                                                    
                                                                    <br>
                                                                    <div class="ratings-container"style="margin-left:110px;">
                                                                        <div class="ratings-full">
                                                                            {{-- <p>{{ $count }}</p> --}}
                                                                            
                                                                            <span class="ratings" style="width:0%;"></span>
                                                                            <span class="tooltiptext tooltip-top"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @endif
                                                                {{-- <div class="star-rating "
                                                                    style="font-size: 13px;float: right;margin-top:15px;">
                                                                    <i class="w-icon-star-square-full"
                                                                        style="color: #1C77C3"></i>
                                                                    <i class="w-icon-star-square-full"
                                                                        style="color: #1C77C3"></i>
                                                                    <i class="w-icon-star-square-full"
                                                                        style="color: #1C77C3"></i>
                                                                    <i class="w-icon-star-square-full"
                                                                        style="color: #1C77C3"></i>
                                                                    <i class="w-icon-star-square" style="color: #CCCCCC"></i>
                                                                    <br />
                                                                    <span
                                                                        style="font-size: 12px;position: relative;top:-5px;">12
                                                                        Review(s)</span>
                                                                </div> --}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                        <div id="vendor-album"></div>
                        <br>
                    </div>
                    <!-- End of Main Content -->
                </div>
            </div>
            <!-- End Dropdown & Products Section -->

            <!-- Vendor Album Section -->
            <div class="container mt-5">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <hr>
                        <h3 class="display-3 mt-5">VENDOR ALBUM</h3>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12" style="height: 600px;overflow-y:scroll;">
                                <div class="row">
                                    @foreach ($vendorAlbums as $value)
                                    <div class="col-lg-2 col-md-2 col-sm-12">
                                        <div class="product-wrap">
                                            <div class="product text-center">
                                                <figure class="product-media">
                                                    <img src="{{ URL::asset('root/upload/vendor-album/' . $value->image) }}" alt="Vendor ALbum" />
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="row mt-5" id="basic-information">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <hr>
                                    <h3 class="basic-information-title" id="company-details">Basic Information</h3>
                                    {!! $vendor->basic_information !!}
                                    <h3 class="mt-5">Company Detail</h3>
                                    <table class="table table-borderless company-details-table">
                                        <tbody>
                                            <tr>
                                                <td>Company Name</td>
                                                <td>
                                                    @if (isset($vendor->company))
                                                    {{ $vendor->company }}
                                                    @else
                                                    Name Goes Here
                                                    @endif
                                                </td>
                                                <td>Member Since</td>
                                                <td>
                                                @if (isset($vendor->member_since))
                                                    {{ $vendor->member_since}}
                                                    @else
                                                    Name Goes Here
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Location</td>
                                                <td>
                                                    @if (isset($vendor->addres))
                                                    {{ $vendor->addres }}
                                                    @else
                                                    Name Goes Here
                                                    @endif
                                                </td>
                                                <td>Certifications</td>
                                                <td>
                                                @if (isset($vendor->certifications))
                                                    {{ $vendor->certifications }}
                                                    @else
                                                    Name Goes Here
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr >
                                                <td>Name or Business</td>
                                                <td>
                                                    @if (isset($vendor->name))
                                                    {{ $vendor->name }}
                                                    @else
                                                    Name Goes Here
                                                    @endif
                                                </td>
                                                <td  >Accepted Payment Type</td>
                                                <td >
                                                @if (isset($vendor->accepted_payment_type))
                                                    {{ $vendor->accepted_payment_type }}
                                                    @else
                                                    Name Goes Here
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Total Emploees</td>
                                                <td>
                                                    @if (isset($vendor->total_employees))
                                                    {{ $vendor->total_employees }}
                                                    @else
                                                    Name Goes Here
                                                    @endif
                                                </td>
                                                <td  >Major Clients</td>
                                                <td >
                                                @if (isset($vendor->major_clients))
                                                    {{ $vendor->major_clients }}
                                                    @else
                                                    Name Goes Here
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Established In</td>
                                                <td>
                                                    @if (isset($vendor->established_in))
                                                    {{ $vendor->established_in }}
                                                    @else
                                                    Name Goes Here
                                                    @endif
                                                </td>
                                                <td  >Annual Export ($)</td>
                                                <td >
                                                @if (isset($vendor->annual_export))
                                                    {{ $vendor->annual_export }}
                                                    @else
                                                    Name Goes Here
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Deals In</td>
                                                <td>
                                                    @if (isset($vendor->deals_in))
                                                    {{ $vendor->deals_in }}
                                                    @else
                                                    Name Goes Here
                                                    @endif
                                                </td>
                                                <td  >Annual Import ($)</td>
                                                <td >
                                                @if (isset($vendor->annual_import))
                                                    {{ $vendor->annual_import }}
                                                    @else
                                                    Name Goes Here
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Main Market</td>
                                                <td>
                                                    @if (isset($vendor->main_market))
                                                    {{ $vendor->main_market }}
                                                    @else
                                                    Name Goes Here
                                                    @endif
                                                </td>
                                                <td  >Annual Revenue ($)</td>
                                                <td >
                                                @if (isset($vendor->annual_revenue))
                                                    {{ $vendor->annual_revenue }}
                                                    @else
                                                    Name Goes Here
                                                    @endif
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Vendor Album Section -->
            <!-- Vendor Contact FOrm -->
            <section class="single-product-contact-form-section" id="vendor-contact-form-section">
                <form action="{{ URL::to('vendor-contact-sendMessage#vendorContactForm') }}" id="vendorContactForm" method="post">
                    <input type="hidden" name="make" id="make" value="{{ $vendor->name }}">
                    <input type="hidden" name="vid" id="vid" value="{{ $vendor->id }}">
                    @csrf                    
                    <div class="container pt-5">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                @error('pro_id')
                                    <span class="invalid-feedback1">{{ $message }}</span>
                                @enderror
                                <h4 class="pt-5">Send your message to this supplier</h4>
                            </div>
                        </div>
                        <div class="row" style="margin-top: -15px;">
                            <div class="col-lg-2 col-md-3 col-sm-12">
                                <label style="font-size: 17px;">To:</label>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <label style="font-size: 20px;font-weight: bold;color:black;">{{ $vendor->name }}</label>
                                @error('make')
                                    <span class="invalid-feedback1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-lg-2 col-md-2 col-sm-12">
                                <label style="font-size: 17px;"><span style="color: red;">*</span>Message:</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-12">
                                <textarea name="message" id="message" cols="30" rows="4"
                                    class="form-control bg-white single-product-msgbox"
                                    placeholder="Enter your inquiry details such as product name, model number, MOQ, FOB, etc" required></textarea>
                                <label for="">This message must be between 100-400 characters.</label>
                                @error('message')
                                    <span class="invalid-feedback1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-lg-2 col-md-2 col-sm-12 mt-3">
                                <label style="font-size: 17px;"><span style="color: red;">*</span>Product Name:</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <input type="text" name="pro_name" id="pro_name" class="form-control single-product-input-box bg-white" required>
                                @error('pro_name')
                                    <span class="invalid-feedback1">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 mt-3">
                                <label style="font-size: 17px;"><span style="color: red;">*</span>Model Number:</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <input type="text" name="model_no" id="model_no" class="form-control single-product-input-box bg-white" required>
                                @error('model_no')
                                    <span class="invalid-feedback1">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 mt-5">
                                <label style="font-size: 17px;"><span style="color: red;">*</span>Brand Name:</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 mt-3">
                                <input type="text" name="brand_name" id="brand_name" class="form-control single-product-input-box bg-white" required>
                                @error('brand_name')
                                    <span class="invalid-feedback1">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 mt-5 text-left">
                                <label style="font-size: 17px;"><span style="color: red;">*</span>MOQ:</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 mt-3">
                                <input type="text" name="moq" id="moq" class="form-control single-product-input-box bg-white">
                                @error('moq')
                                    <span class="invalid-feedback1">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="col-lg-2 col-md-2 col-sm-12 mt-5">
                                <label style="font-size: 17px;"><span style="color: red;">*</span>Company:</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 mt-3">
                                <input type="text" name="company" id="company" class="form-control single-product-input-box bg-white" required>
                                @error('company')
                                    <span class="invalid-feedback1">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 mt-5">
                                <label style="font-size: 17px;"><span style="color: red;">*</span>Address:</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 mt-3">
                                <input type="text" name="address" id="address" class="form-control single-product-input-box bg-white" required>
                                @error('address')
                                    <span class="invalid-feedback1">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="col-lg-2 col-md-2 col-sm-12 mt-5">
                                <label style="font-size: 17px;"><span style="color: red;">*</span>PTCL No:</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 mt-3">
                                <input type="text" name="ptcl" id="ptcl" class="form-control single-product-input-box bg-white">
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 mt-5">
                                <label style="font-size: 17px;"><span style="color: red;">*</span>Phone No:</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 mt-3">
                                <input type="text" name="phoneno" id="phoneno" class="form-control single-product-input-box bg-white" required>
                                @error('phoneno')
                                    <span class="invalid-feedback1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg-2 col-md-3 col-sm-12">
                                <label style="font-size: 17px;position: relative;top:-5px;"><span style="color: red;">*</span>Delivery
                                    Location:</label>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <div>
                                    @foreach ($locations as $key => $location)
                                        @if ($key == 0)
                                            <label>
                                                <input type="radio" name="delivery_location" id="delivery_location" value="{{ $location->name }}" checked>
                                                <span style="margin-left: 5px;">{{ $location->name }}</span>
                                            </label>
                                        @else
                                            <label>
                                                <input type="radio" name="delivery_location" id="delivery_location" value="{{ $location->name }}">
                                                <span style="margin-left: 5px;">{{ $location->name }}</span>
                                            </label>
                                        @endif
                                        &emsp;
                                    @endforeach
                                </div>
                                @error('delivery_location')
                                    <span class="invalid-feedback1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2 col-md-3 col-sm-12"></div>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <label for="agree-checkbox">
                                    <input type="checkbox" name="agree-checkbox" class="single-product-input-radio"
                                        value="USA" required>&nbsp;&nbsp;I agree to share my Business Card to the
                                    supplier.&emsp;&emsp;
                                </label>
                            </div>
                        </div>
                        <div class="row mt-2" style="margin-bottom: -30px;">
                            <div class="col-lg-2 col-md-3 col-sm-12"></div>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <button class="btn btn-primary">SEND</button>
                            </div>
                        </div>
                    </div>
                </form>
            </section>
            <!-- End Vendor Contact FOrm -->
        </main>
        <!-- End of Main -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <hr>
                    <div class="text-center" style="margin-top: 60px;">International shipping and import charges according to country’s upgraded
                        rules & regulations</div>
                    <hr>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="text-center pt-1 pb-1">Disclaimer</div>
                        </div>
                        <div class="card-body collapsed text-center" style="display: block;">
                            {!! $productInfo->disclaimer !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('components.footer')

    </div>
    <!-- End of Page Wrapper -->

    @include('components.sticky-footer')


    <!-- Plugin JS File -->

    <script src="{{ URL::asset('website-assets/vendor/sticky/sticky.js') }}"></script>
    <script src="{{ URL::asset('website-assets/vendor/jquery.plugin/jquery.plugin.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/vendor/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/vendor/jquery.countdown/jquery.countdown.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/vendor/zoom/jquery.zoom.js') }}"></script>
    <script src="{{ URL::asset('website-assets/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ URL::asset('website-assets/js/main.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/js/toastr.min.js') }}"></script>
    {!! Toastr::message() !!}

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

        // setInterval(function() {
        //     document.querySelector('.alert').style.display = 'none';
        // }, 5000);
    </script>
    <script src="{{ URL::asset('website-assets/js/scroll.js') }}"></script>
</body>

</html>
