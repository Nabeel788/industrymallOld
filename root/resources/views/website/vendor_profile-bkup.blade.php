@php
use App\Models\Locations;
$locations = Locations::select('id', 'name')->orderBy('id')->get();
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
            margin-bottom: 0px!important;
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
                                            @if ($value->new_price!=null)
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
                                                        @if(($stockIn-$stockOut)<=0)
                                                        <p style="color: red;font-style: italic;font-size:10px;">OUT OF STOCK</p>
                                                        @else
                                                        <p style="color: green;font-style: italic;">IN STOCK</p>
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
                                                            class="btn btn-sm btn-primary btn-block"><i class="w-icon-cart"></i>
                                                            View
                                                            Details</a>
                                                    </div>
                                                    <div class="col-5 text-right">
                                                        <div class="star-rating "
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
                                                        </div>
                                                    </div>
                                                </div>
                                                @else
                                                <div class="row" style="margin-top: -35px;">
                                                    <div class="col-12">
                                                        <a href="{{ URL::to('/single-product/' . $value->id . '/' . $value->slug) }}" style="cursor: pointer;"><img src="{{ URL::asset('website-assets/images/GET-A-QUOTE.png') }}" style="width:250px;margin-bottom:30px;" alt=""></a>
                                                    </div>
                                                    <div class="col-7 text-left">
                                                        <a href="{{ URL::to('/single-product/' . $value->id . '/' . $value->slug) }}"
                                                            class="btn btn-sm btn-primary btn-block"
                                                            style="margin-top: 10px;"><i class="w-icon-cart"></i>
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
                                                @endif



                                                

                                            </div>
                                        </div>
                                    </div>
                                @empty
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

                        <div class="toolbox toolbox-pagination justify-content-between">
                            @if (count($products) > 0)
                                <p class="showing-info mb-2 mb-sm-0">
                                    Showing
                                    <span>
                                        {{ $products->firstItem() }}
                                        -
                                        {{ $products->lastItem() }}
                                        of
                                        {{ $products->total() }}
                                    </span>
                                    Products
                                </p>
                                <div class="d-flex justify-content-center">
                                    {!! $products->links('vendor.pagination.custom') !!}
                                </div>
                            @else
                                <p class="showing-info mb-2 mb-sm-0">
                                    Showing
                                    <span>
                                        0
                                        -
                                        0
                                        of
                                        0
                                    </span>
                                    Products
                                </p>
                                {{-- <div class="d-flex justify-content-center">
                                {!! $products->links('vendor.pagination.custom') !!}
                            </div> --}}
                            @endif

                        </div>
                    </div>
                    <!-- End of Main Content -->
                </div>
            </div>
        </main>
        <!-- End of Main -->

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

        setInterval(function() {
            document.querySelector('.alert').style.display='none';
        }, 5000);
    </script>
</body>

</html>