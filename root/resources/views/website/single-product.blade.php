@php
use Carbon\Carbon;
@endphp
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Industry Mall | Shop | {{ $product->name }}</title>

    <meta name="keywords" content="Marketplace ecommerce responsive HTML5 Template" />
    <meta name="description" content="">
    <meta name="author" content="D-THEMES">

    <!-- Social Media Share Meta Descriptions -->
    <!-- For Facebook | Meta -->
    <meta property="og:title" content="{{ $product->name }}">
    <meta property="og:site_name" content="{{ $product->name }}">
    <meta property="og:url" content="{{ Request::url() }}">
    <meta property="og:description" content="{{ strip_tags($product->description) }}">
    <meta property="og:type" content="article">
    <meta property="og:image" content="{{ URL::asset('root/upload/products/' . $product->product_images[0]->image) }}">


    <!-- For Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="{{ Request::url() }}">
    <meta name="twitter:title" content="{{ $product->name }}">
    <meta name="twitter:description" content="{{ strip_tags($product->description) }}">
    <meta name="twitter:image" content="{{ URL::asset('root/upload/products/' . $product->product_images[0]->image) }}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ URL::asset('website-assets/images/icons/favicon.png') }}">

    <!-- WebFont.js -->
    <script>
        WebFontConfig = {
            google: {
                families: ['Poppins:400,500,600,700']
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
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('website-assets/vendor/animate/animate.min.css') }}">

    <!-- Plugin CSS -->
    <link rel="stylesheet" type="text/css"
        href="{{ URL::asset('website-assets/vendor/magnific-popup/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('website-assets/vendor/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ URL::asset('website-assets/vendor/photoswipe/photoswipe.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ URL::asset('website-assets/vendor/photoswipe/default-skin/default-skin.min.css') }}">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('website-assets/css/style.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('website-assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('website-assets/css/toastr.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        html {
           scroll-behavior: smooth;
        }
        .invalid-feedback1{
            color: red;
            font-weight: bold;
        }
        .toast{
            opacity: .9!important;
        }
    </style>
    <style>
        .imagee
   {
       position: relative;
       top: 0;
       left: 0;
   }
   .water
   {
       position: absolute;
       opacity: 0.3 !important;
       top: 10px;
       left: 10px;
   }
   .product-image img:last-child {
       /* opacity:0.7 !important; */
   }
   .flow{
    /* position:absolute; */
    overflow-y:auto;
    max-height:500px;
   }
   </style>

    <script src="{{ URL::asset('website-assets/vendor/jquery/jquery.min.js') }}"></script>
</head>

<body>
    <div class="page-wrapper">

        @include('components.header')

        <!-- Start of Main -->
        <main class="main mb-10 pb-1">
            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav container">
                <ul class="breadcrumb bb-no">
                    <li><a href="{{ URL::to('/') }}">Home</a></li>
                    <li><a href="{{ URL::to('/shop/subcat/'.$product->subcategories->id.'/'.$product->subcategories->slug) }}">{{ $product->subcategories->name }}</a></li>
                    <li>{{ $product->name }}</li>
                </ul>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of Page Content -->
            <div class="page-content">
                <div class="container">
                    <div class="product product-single row">
                        <div class="col-md-6 mb-6">
                            <div class="product-gallery product-gallery-sticky product-gallery-vertical">
                                <div class="swiper-container product-single-swiper swiper-theme nav-inner"
                                    data-swiper-options="{
                                    'navigation': {
                                        'nextEl': '.swiper-button-next',
                                        'prevEl': '.swiper-button-prev'
                                    }
                                }">
                                    <div class="swiper-wrapper row cols-1 gutter-no">
                                        @foreach ($product->product_images as $image)
                                            <div class="swiper-slide">
                                                <figure class="product-image">
                                                    <div style="position: relative; left: 0; top: 0;">
                                                        <img src="{{ URL::asset($image->url) }}" class="imagee" style="width:100%"
                                                            alt="Product" />
                                                        <img src="{{ URL::asset('root/upload/logo/water.png') }}" class="water"
                                                            alt="Product" />
                                                        </div>
                                                </figure>
                                            </div>
                                        @endforeach
                                    </div>
                                    <button class="swiper-button-next"></button>
                                    <button class="swiper-button-prev"></button>
                                </div>
                                <div class="product-thumbs-wrap swiper-container"
                                    data-swiper-options="{
                                    'navigation': {
                                        'nextEl': '.swiper-button-next',
                                        'prevEl': '.swiper-button-prev'
                                    },
                                    'breakpoints': {
                                        '992': {
                                            'direction': 'vertical',
                                            'slidesPerView': 'auto'
                                        }
                                    }
                                }">
                                    <div class="product-thumbs swiper-wrapper row cols-lg-1 cols-4 gutter-sm">
                                        @foreach ($product->product_images as $image)
                                            <div class="product-thumb swiper-slide">
                                                <div style="position: relative; left: 0; top: 0;">
                                                <img src="{{ URL::asset('root/upload/products/' . $image->image) }}" class="imagee"
                                                    alt="Product Thumb">
                                                    <img src="{{ URL::asset('root/upload/logo/water.png') }}" class="water"
                                                    alt="Product" />
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <button class="swiper-button-prev"></button>
                                    <button class="swiper-button-next"></button>
                                </div>
                            </div>
                        </div>

                        
                        <div class="col-md-6 mb-4 mb-md-6">
                            <div class="product-details">
                                <h1 class="product-title pt-3">{{ substr($product->model_no,0,100) }}</h1>
                                <p style="margin-top: -15px;margin-bottom:-10px;">{{ substr($product->name,0,100) }}</p>
                                <hr class="product-divider">

                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width:{{($reviewsAverage)*20 }}%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="#" class="rating-reviews">({{ $overAllProductRating }} Reviews)</a>
                                </div>

                                
                                <div class="product-short-desc lh-2">
                                    {!! Str::words($product->description,60) !!}
                                    <br>
                                    <a href="#product-details-section">Read More</a>
                                    <br><br>
                                    @if ($product->new_price!=null)
                                    <hr class="product-divider" id="product-divider1">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <h5>
                                                <i class="w-icon-map-marker"></i>
                                                <span class="icon-name">Condition</span>
                                            </h5>
                                            <p style="margin-top: -10px;margin-bottom:0px;">
                                                @foreach ($product->conditions as $key => $conditions)
                                                    @if ($key == 0)
                                                        @if ($conditions->condition->name == 'NEW')
                                                            <label for="condition{{ $key }}">
                                                                <input type="radio" name="condition"
                                                                    id="condition{{ $key }}"
                                                                    value="{{ $conditions->condition->name . '_' . $product->new_price . '_' . $product->new_sale_price. '_' . $product->new_warranty_days. '_' . $key }}"
                                                                    checked onclick="ChangeCondition(this.value)">
                                                                <span id="conditionn{{ $key }}"
                                                                    style="background: #F95506;color:white; padding:5px 10px 5px 7px;margin-left: 5px;">{{ $conditions->condition->name }}</span>
                                                            </label>
                                                        @elseif ($conditions->condition->name == 'REFURBISHED')
                                                            <label for="condition{{ $key }}">
                                                                <input type="radio" name="condition"
                                                                    id="condition{{ $key }}"
                                                                    value="{{ $conditions->condition->name . '_' . $product->refurnished_price . '_' . $product->refurnished_sale_price . '_' . $product->refurnished_warranty_days. '_' . $key }}"
                                                                    checked onclick="ChangeCondition(this.value)">
                                                                <span id="conditionn{{ $key }}"
                                                                    style="background: #F95506;color:white; padding:5px 10px 5px 7px;margin-left: 5px;">{{ $conditions->condition->name }}</span>
                                                            </label>
                                                        @endif
                                                    @else
                                                        @if ($conditions->condition->name == 'NEW')
                                                            <label for="condition{{ $key }}">
                                                                <input type="radio" name="condition"
                                                                    id="condition{{ $key }}"
                                                                    value="{{ $conditions->condition->name . '_' . $product->new_price . '_' . $product->new_sale_price. '_' . $product->new_warranty_days. '_' . $key }}"
                                                                    onclick="ChangeCondition(this.value)">
                                                                <span id="conditionn{{ $key }}"
                                                                    style="color:black; padding:5px 10px 5px 7px;margin-left: 5px;">{{ $conditions->condition->name }}</span>
                                                            </label>
                                                        @elseif ($conditions->condition->name == 'REFURBISHED')
                                                            <label for="condition{{ $key }}">
                                                                <input type="radio" name="condition"
                                                                    id="condition{{ $key }}"
                                                                    value="{{ $conditions->condition->name . '_' . $product->refurnished_price . '_' . $product->refurnished_sale_price . '_' . $product->refurnished_warranty_days. '_' . $key }}"
                                                                    onclick="ChangeCondition(this.value)">
                                                                <span id="conditionn{{ $key }}"
                                                                    style="color:black; padding:5px 10px 5px 7px;margin-left: 5px;">{{ $conditions->condition->name }}</span>
                                                            </label>
                                                        @endif
                                                    @endif
                                                    &emsp;
                                                @endforeach
                                            </p>
                                            <h5 style="margin-top: 20px;">
                                                <i class="w-icon-map-marker"></i>
                                                <span class="icon-name">Delivery Location</span>
                                            </h5>
                                           
                                            <p class="delivery-locations">
                                                @foreach ($product->shipping_details as $key => $locations)
                                                    @if ($key == 0)
                                                        <label for="location{{ $key }}">
                                                            <input type="radio" name="location"
                                                                id="location{{ $key }}"
                                                                value="{{ $locations->location->name . '_' . $locations->shipping_charges . '_' . $locations->import_charges . '_' . $locations->tax_charges . '_' . $locations->other_charges . '_' . $locations->shipping_days . '_' . $locations->new_price . '_' . $locations->new_sale_price . '_' . $locations->new_warranty_days . '_' . $locations->refurnished_price . '_' . $locations->refurnished_sale_price . '_' . $locations->refurnished_warranty_days }}"
                                                                checked onclick="ChangeCountry(this.value)">
                                                            <span
                                                                style="margin-left: 5px;">{{ $locations->location->name }}</span>
                                                        </label>
                                                    @else
                                                        <label for="location{{ $key }}">
                                                            <input type="radio" name="location"
                                                                id="location{{ $key }}"
                                                                value="{{ $locations->location->name . '_' . $locations->shipping_charges . '_' . $locations->import_charges . '_' . $locations->tax_charges . '_' . $locations->other_charges . '_' . $locations->shipping_days . '_' . $locations->new_price . '_' . $locations->new_sale_price . '_' . $locations->new_warranty_days . '_' . $locations->refurnished_price . '_' . $locations->refurnished_sale_price . '_' . $locations->refurnished_warranty_days }}"
                                                                onclick="ChangeCountry(this.value)">
                                                            <span
                                                                style="margin-left: 5px;">{{ $locations->location->name }}</span>
                                                        </label>
                                                    @endif
                                                    &emsp;
                                                @endforeach
                                            </p>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 text-right">
                                            <div class="product-price">
                                                <del class="old-price" id="finalOldValue"
                                                    style="font-size:30px;">{{ $settings->currency . '' . $product->new_price }}</del>
                                                    <p style="margin-top:-20px;margin-bottom:0px;"><ins class="new-price" id="finalNewValue"
                                                        style="font-size:35px;">{{ $settings->currency . '' . $product->new_sale_price }}
                                                    </ins></p>
                                            </div>


                                            <div class="mr-auto changeCurrDropdown" style="margin-top: -10px;">
                                                <select class="to" id="currencyChange">
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
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 text-right">
                                            <p class="saved-prices">You saved: <span
                                                    id="discount_price">{{ $settings->currency . '' . $product->new_sale_price - $product->new_price }}</span>
                                            </p>
                                            <p style="margin-top: -25px;font-size:10px;"><i>(Min. Order ≤ {{ $product->min_order }} piece)</i></p>
                                        </div>
                                    </div>
                                    <hr class="product-divider" id="product-divider2">
                                    @endif
                                </div>
                                @if ($product->new_price!=null)
                                <div class="row">
                                    <div class="col-6">
                                        <p style="margin-top: -15px;">Brand: <i class="fa fa-lightbulb-o"></i></p>
                                        <div class="product-bm-wrapper" style="margin-top: -20px;">
                                            <figure class="brand">
                                                <img src="{{ URL::asset('root/upload/brands/small/' . $product->brand->logo) }}"
                                                    alt="Brand" width="105" height="48" />
                                            </figure>
                                            <div class="product-meta">
                                                <div class="product-sku" style="position: relative;top:-5px;">
                                                    SKU: <span>{{ $product->sku }}</span>
                                                </div>
                                                <div class="product-sku">
                                                    @if($totalStock<=0)
                                                    Stock: <span style="color:red;font-weight:bold;"> OUT OF STOCK</span>
                                                    @else
                                                    Stock: <span style="color:green;font-weight:bold;"> IN STOCK</span>
                                                    @endif
                                                    
                                                </div>
                                            </div>
                                        </div>                                  
                                    </div>
                                    <div class="col-6 text-right">
                                        <p style="margin-top: -15px;">Supplier: <i class="w-icon-sale"></i></p>
                                        @if ($product->biller->image!=null)
                                        <a href="{{ URL::to("/vendor-products/".$product->biller->id) }}" target="_blank"><img src="{{asset('root/upload/users/'. $product->biller->image) }}" style="width: 80px;margin-top: -20px;" alt=""></a>
                                        @else
                                        <img src="{{ URL::asset('root/upload/logo/im.png') }}" style="width: 80px;margin-top: -20px;" alt="">
                                        @endif
                                        
                                    </div>
                                </div>

                                <form action="{{ asset('addtocart') }}" method="post" id="cart-form">
                                    @csrf
                                    <input type="hidden" name="id" id="id"
                                        value="{{ $product->id }}">
                                    <input type="hidden" name="name" id="name"
                                        value="{{ $product->name }}">
                                    <input type="hidden" name="image" id="image"
                                        value="{{ URL::asset('root/upload/products/' . $product->product_images[0]->image) }}">
                                    <input type="hidden" name="price" id="price"
                                        value="{{ $product->new_sale_price }}">
                                    <input type="hidden" name="slug" id="slug"
                                        value="{{ $product->slug }}">
                                    <input type="hidden" name="color" id="color" value="Red">

                                    <input type="hidden" name="amount_new" id="amount_new"
                                        value="{{ $product->new_sale_price }}">
                                    <input type="hidden" name="amount_old" id="amount_old"
                                        value="{{ $product->new_price }}">
                                    <input type="hidden" name="conditionType" id="conditionType"
                                        value="{{ $product->conditions[0]->condition->name }}">
                                    <input type="hidden" name="ship_charges" id="ship_charges" value="{{ $product->shipping_details[0]->shipping_charges }}">
                                    <input type="hidden" name="locatedin" id="locatedin" value="{{ $product->shipping_details[0]->location->name }}">
                                    <input type="hidden" name="imp_charges" id="imp_charges" value="{{ $product->shipping_details[0]->import_charges }}">
                                    <input type="hidden" name="t_charges" id="t_charges" value="{{ $product->shipping_details[0]->tax_charges }}">
                                    <input type="hidden" name="oth_charges" id="oth_charges" value="{{ $product->shipping_details[0]->other_charges }}">
                                    <input type="hidden" name="ship_days" id="ship_days" value="{{ $product->shipping_details[0]->shipping_days }}">
                                    <input type="hidden" name="brand_id" id="brand_id" value="{{ $product->brand->id }}">
                                    <input type="hidden" name="brand_logo" id="brand_logo" value="{{ $product->brand->logo }}">

                                    <div class="fix-bottom product-sticky-content sticky-content">
                                        <div class="product-form container">
                                            <div class="product-qty-form with-label">
                                                <label>Quantity:</label>
                                                <div class="input-group">
                                                    <input class="quantity form-control" type="number"
                                                        min="1" max="10" name="quantity" id="quantity"
                                                        value="1">
                                                    @if($totalStock<=0)
                                                    <button type="button" class="quantity-plus fas fa-plus" disabled></button>
                                                    <button type="button"
                                                        class="quantity-minus w-icon-minus" disabled></button>
                                                    @else
                                                    <button type="button" class="quantity-plus fas fa-plus"></button>
                                                    <button type="button"
                                                        class="quantity-minus fas fa-minus"></button>
                                                    @endif
                                                </div>
                                            </div>
                                            {{-- @if($totalStock<=0)
                                            <button type="button" class="btn btn-primary btn-cart disabled" disabled>
                                                <i class="w-icon-cart"></i>
                                                <span>Add to Cart</span>
                                            </button>
                                            @else --}}
                                            <button type="submit" class="btn btn-primary btn-cart" onclick="document.querySelector('#cart-form').submit()">
                                                <i class="fas fa-shopping-cart"></i>
                                                <span>Add to Cart</span>
                                            </button>
                                            {{-- @endif --}}
                                            
                                        </div>
                                    </div>
                                </form>
                                @else
                                <div class="row">
                                    <hr class="product-divider" id="product-divider2"><br>
                                    <div class="col-6">
                                        <p style="margin-top: -15px;">Brand: <i class="fa fa-lightbulb-o"></i></p>
                                        <div class="product-bm-wrapper" style="margin-top: -20px;">
                                            <figure class="brand">
                                                <img src="{{ URL::asset('root/upload/brands/small/' . $product->brand->logo) }}"
                                                    alt="Brand" width="105" height="48" />
                                            </figure>
                                            <div class="product-meta">
                                                <div class="product-sku" style="position: relative;top:-5px;">
                                                    SKU: <span>{{ $product->sku }}</span>
                                                </div>
                                                <div class="product-sku">
                                                    @if($totalStock<=0)
                                                    Stock: <span style="color:red;font-weight:bold;"> OUT OF STOCK</span>
                                                    @else
                                                    Stock: <span style="color:green;font-weight:bold;"> IN STOCK</span>
                                                    @endif
                                                    
                                                </div>
                                            </div>
                                        </div>                                  
                                    </div>
                                    <div class="col-6 text-right">
                                        <a href="#single-product-contact-form-section"><img src="{{ URL::asset('website-assets/images/GET-A-QUOTE.png') }}" style="width:200px;margin-bottom:30px;" alt=""></a>
                                    </div>
                                </div>
                                @endif
                                <div class="social-links-wrapper" id="social-links-wrapper">
                                    <div class="social-links">
                                        <div class="social-icons social-no-color border-thin">
                                            <a onClick="window.open('http://www.facebook.com/sharer.php?s=100&amp;p[title]={{ $product->name }}&amp;p[summary]={{ strip_tags($product->description) }}&amp;p[url]={{ Request::URL() }}&amp;&p[images][0]={{ URL::asset('root/upload/products/' . $product->product_images[0]->image) }}', 'sharer', 'toolbar=0,status=0,width=548,height=325');" target="_parent" href="javascript: void(0)" 
                                                href="https://www.facebook.com/sharer/sharer.php?u={{ Request::url() }}&t={{ $product->name }}"
                                                class="social-icon social-facebook fab fa-facebook"
                                                target="_blank"></a>
                                            <a href="https://twitter.com/share?url={{ Request::url() }}&text={{ $product->name }}" onclick="window.open(this.href, &#39;windowName&#39;, &#39;width=550, height=450, left=24, top=24, scrollbars, resizable&#39;); return false;" class="social-icon social-twitter fab fa-twitter"></a>
                                            <a href="https://www.tumblr.com/widgets/share/tool?canonicalUrl={{ Request::url() }}" target="_blank" class="social-icon social-tumblr  fab fa-tumblr" style="font-size: 15px;"></a>
                                            <a href="https://mail.google.com/mail/u/0/?view=cm&to&su={{ $product->name }}&body={{ Request::url() }}" target="_blank" class="social-icon social-google-plus  fab fa-google-plus" style="font-size: 15px;"></a>
                                            <a href="https://api.whatsapp.com/send?text={{ Request::url() }}" data-action="share/whatsapp/share" target="_blank" class="social-icon social-whatsapp fab fa-whatsapp"></a>
                                            <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ Request::url() }}&title={{ $product->name }}" class="social-icon social-youtube fab fa-linkedin-in"></a>
                                        </div>
                                    </div>
                                    <span class="divider d-xs-show"></span>
                                    <div class="product-link-wrapper d-flex">
                                        <a href="{{ URL::to('/add-to-wishlist/' . $product->id) }}"
                                            class="btn-product-icon w-icon-heart"
                                            title="Add To Wishlist"><span></span></a>
                                    </div>
                                </div>
                            </div>
                            <hr style="margin: 0px;">
                            <table class="table" style="padding: 0px;margin:0px;">
                                <tbody>
                                    <tr>
                                        @if ($product->width!=null)
                                            <td>Width: {{ $product->width }}</td>
                                        @endif
                                        @if ($product->height!=null)
                                            <td>Height: {{ $product->height }}</td>
                                        @endif
                                        @if ($product->depth!=null)
                                            <td>Depth: {{ $product->depth }}</td>
                                        @endif
                                        @if ($product->weight!=null)
                                            <td>Weight: {{ $product->weight }}</td>
                                        @endif
                                    </tr>
                                </tbody>
                            </table>
                            <hr style="margin: 0px;">
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <p><i class="w-icon-sale"></i> Instant Solutions</p>
                            <table class="table table-bordered instant-solutions-table text-center">
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="https://web.whatsapp.com/send?phone=+92{{ preg_replace("/[\s_]/", "", $product->biller->phone1) }}&text={{ Request::URL() }} " target="_blank">
                                                <section style="font-size: 25px;color: #0071BC;"><i class="w-icon-headphone"></i></section>
                                                <section>Get Support</section>
                                           </a>
                                            <br>
                                        </td>
                                        <td>
                                            @if ($product->details!=null)
                                            <a href="{{ URL::to('/generate-pdf/'.$product->id) }}">
                                                <section style="font-size: 25px;color: #0071BC;"><i
                                                    class="w-icon-orders"></i></section>
                                                <section>Documentation</section>
                                            </a>
                                            @else
                                            <section style="font-size: 25px;color: #0071BC;"><i
                                                class="w-icon-orders"></i></section>
                                            <section>Documentation</section>
                                            @endif
                                            <br>
                                        </td>
                                        <td>
                                            <section style="font-size: 25px;color: #0071BC;"><i
                                                    class="w-icon-download"></i></section>
                                            @if ($product->attachment != null)
                                            <section><a href="{{ URL::asset('root/upload/products/attachments/' . $product->attachment) }}" style="color: #666" download>Download</a></section>
                                            @else
                                            <section>Download</section>
                                            @endif
                                            <br>
                                        </td>
                                        <td>
                                            <section style="font-size: 25px;color: #0071BC;"><i
                                                    class="w-icon-cart"></i></section>
                                            <section><a href="#single-product-contact-form-section" style="color: #666">Suggest Product</a></section>
                                            <br>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            {{-- <div style="margin-top: 40px;"></div>
                            <table class="table table-bordered instant-solutions-table text-center">
                                <tbody>
                                    <tr>
                                        <td>
                                            <section style="font-size: 25px;color: #0071BC;"><i class="fa fa-truck"></i></section>
                                            <section><b style="color: #0071BC;">Fast Shipping</b></section>
                                            <p style="line-height: 20px;">Receive products in amazing time</p>
                                        </td>
                                        <td>
                                            <section style="font-size: 25px;color: #0071BC;"><i class="fa fa-undo"></i></section>
                                            <section><b style="color: #0071BC;">Easy Returns</b></section>
                                            <p style="line-height: 20px;">Return policy that lets you shop at ease</p>
                                        </td>
                                        <td>
                                            <section style="font-size: 25px;color: #0071BC;"><i class="fa fa-shield"></i></section>
                                            <section><b style="color: #0071BC;">Always Authentic</b></section>
                                            <p style="line-height: 20px;">We only sell 100% authentic products</p>
                                        </td>
                                        <td>
                                            <section style="font-size: 25px;color: #0071BC;"><i class="fa fa-lock"></i></section>
                                            <section><b style="color: #0071BC;">Secure Shopping</b></section>
                                            <p style="line-height: 20px;">Your data is always protected</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table> --}}
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="row" style="margin-top: 20px;">
                                <div class="col-4">
                                    <b>Shipping:</b>
                                </div>
                                <div class="col-8">
                                    <p>
                                        <b>{{ $settings->currency }}
                                            <span id="shipping_price1">{{ $product->shipping_details[0]->shipping_charges }}</span></b>
                                        International Priority Shipping to Pakistan via Global
                                    </p>
                                </div>
                            </div>
                            <div class="row" style="margin-top: -20px;">
                                <div class="col-4">
                                    <b>Located in:</b>
                                </div>
                                <div class="col-8">
                                    <p>
                                        <b id="located_in1">{{ $product->shipping_details[0]->location->name }}</b> 
                                        <label title="{!! $productInfo->shipping !!}"><i class="w-icon-exclamation-circle"></i></label>
                                    </p>
                                </div>
                            </div>
                            @if (($product->shipping_details[0]->import_charges)!=0)
                            <div class="row" style="margin-top: -20px;">
                                <div class="col-4">
                                    <b>Import charges:</b>
                                </div>
                                <div class="col-8">
                                    <p><b>{{ $settings->currency }}<span
                                                id="import_charges1">{{ number_format($product->shipping_details[0]->import_charges) }}</span></b>
                                        (amount confirmed at checkout)</p>
                                </div>
                            </div>
                            @endif
                            @if (($product->shipping_details[0]->tax_charges)!=0)
                            <div class="row" style="margin-top: -20px;">
                                <div class="col-4">
                                    <b>Tax charges:</b>
                                </div>
                                <div class="col-8">
                                    <p><b>{{ $settings->currency }}<span
                                                id="tax_charges1">{{ number_format($product->shipping_details[0]->tax_charges) }}</span></b>
                                    </p>
                                </div>
                            </div>
                            @endif
                            @if (($product->shipping_details[0]->other_charges)!=0)
                            <div class="row" style="margin-top: -20px;">
                                <div class="col-4">
                                    <b>Other charges:</b>
                                </div>
                                <div class="col-8">
                                    <p><b>{{ $settings->currency }}<span
                                                id="other_charges1">{{ number_format($product->shipping_details[0]->other_charges) }}</span></b>
                                    </p>
                                </div>
                            </div>
                            @endif
                            <div class="row" style="margin-top: -20px;">
                                <div class="col-4">
                                    <b>Delivery:</b>
                                </div>
                                <div class="col-8">
                                    <p>Estimated between <b>{{ Carbon::now()->format('D, M d') }}</b> and
                                        <b
                                            id="add_shipping_days">{{ Carbon::now()->addDays($product->shipping_details[0]->shipping_days)->format('D, M d') }}</b>
                                        Includes
                                        international tracking 
                                        <label title="{!! $productInfo->delivery !!}"><i class="w-icon-exclamation-circle"></i></label>                                        
                                    </p>
                                </div>
                            </div>
                            <div class="row" style="margin-top: -20px;">
                                <div class="col-4">
                                    <b>Returns: </b>
                                </div>
                                <div class="col-8">
                                    <p>Return or Exchange this product within 15-Days | <span> See
                                            details</span> 
                                        <label title="{!! $productInfo->returns !!}"><i class="w-icon-exclamation-circle"></i></label>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <b>Payment Methods:</b>
                                </div>
                                <div class="col-8" style="margin-top: -15px;">
                                    <img src="{{ URL::asset('website-assets/images/visa-card-logo.png') }}"
                                    width="50px" alt="visa-card" style="margin-right: 10px;">
                                <img src="{{ URL::asset('website-assets/images/master-card-logo.png') }}"
                                    width="50px" alt="visa-card" style="margin-right: 10px;">
                                <img src="{{ URL::asset('website-assets/images/bank.png') }}"
                                    width="50px" alt="visa-card" style="margin-right: 10px;">
                                <img src="{{ URL::asset('website-assets/images/chequ.png') }}"
                                    width="50px" alt="visa-card" style="margin-right: 10px;">
                                <img src="{{ URL::asset('website-assets/images/cash.png') }}"
                                    width="50px" alt="visa-card" style="margin-right: 10px;">
                                <img src="{{ URL::asset('website-assets/images/online-transfer.png') }}"
                                    width="50px" alt="visa-card" style="margin-right: 10px;">
                                    <label title="{!! $productInfo->payment_method !!}"><i class="w-icon-exclamation-circle"></i></label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-4"></div>
                                <div class="col-8">
                                    <p style="font-size: 9px;">International shipping and import charges
                                        according to
                                        country’s upgraded rules & regulations</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <hr class="product-divider">
                                </div>
                            </div>
                        </div>
                    </div>
                    @if ($product->type == 'Parent')
                        @if (count($childProducts) > 0)
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <h4>Product Section</h4>
                                    <p>SERIES OPTIONS: ControlLogix 5580 Controllers</p>
                                    <div class="table-responsive flow">
                                       
                                        <table class="table table-striped product-section-table">
                                            <thead>
                                                <tr align="left">
                                                    <th>Model Number</th>
                                                    <th>Description</th>
                                                    <th>Make</th>
                                                    <th>For More Info</th>
                                                    <th>Detail</th>
                                                    <th>Old Price</th>
                                                    <th>Unit Price</th>
                                                    <th>Add to Cart</th>
                                                    {{-- <th>Quantity</th> --}}
                                                    
                                                    
                                                </tr>
                                            </thead>
                                            <tbody >
                                                @forelse ($childProducts as $key => $value)
                                                <form action="{{ asset('addtocart') }}" method="post" id="cart-form-child">
                                                    
                                                    <tr >
                                                        <td style="color: #0071BC"><a href="{{ URL::to('/single-product/' . $value->id.'/'.$value->slug) }}" target="_blank">{{ $value->model_no }}</a></td>
                                                        <td><span
                                                                style="position: relative;top:10px;">{!! Str::words($value->description, 4) !!}</span>
                                                        </td>
                                                        <td>{{ Str::words($value->make, 2) }}</td>
                                                        <td style="color: #0071BC"><a href="{{ URL::to('/single-product/' . $value->id.'/'.$value->slug) }}" target="_blank">Read more</a></td>
                                                        @if ($value->attachment!=null)
                                                        <td style="color: #0071BC"><a href="{{ URL::asset('root/upload/products/attachments/' . $value->attachment) }}" download target="_blank">Download pdf <i class="w-icon-long-arrow-down"></i></a></td>
                                                        @else
                                                        <td></td>
                                                        @endif
                                                        <td>{{ $settings->currency . '.' . $value->new_price }}</td>
                                                        <td>{{ $settings->currency . '.' . $value->new_sale_price }}</td>
                                                        @csrf
                                                        <input type="hidden" name="id" id="id"
                                                        value="{{ $value->id }}">
                                                    <input type="hidden" name="name" id="name"
                                                        value="{{ $value->name }}">
                                                    <input type="hidden" name="image" id="image"
                                                        value="{{ URL::asset('root/upload/products/' . $value->product_images[0]->image) }}">
                                                    <input type="hidden" name="price" id="price"
                                                        value="{{ $value->new_sale_price }}">
                                                    <input type="hidden" name="slug" id="slug"
                                                        value="{{ $value->slug }}">
                                                    <input type="hidden" name="color" id="color" value="Red">
                                                    <input type="hidden" name="quantity" id="quantity" value="1" >
                
                                                    <input type="hidden" name="amount_new" id="amount_new"
                                                        value="{{ $value->new_sale_price }}">
                                                    <input type="hidden" name="amount_old" id="amount_old"
                                                        value="{{ $value->new_price }}">
                                                    <input type="hidden" name="conditionType" id="conditionType"
                                                        value="{{ $value->conditions[0]->condition->name }}">
                                                    <input type="hidden" name="ship_charges" id="ship_charges" value="{{ $value->shipping_details[0]->shipping_charges }}">
                                                    <input type="hidden" name="locatedin" id="locatedin" value="{{ $value->shipping_details[0]->location->name }}">
                                                    <input type="hidden" name="imp_charges" id="imp_charges" value="{{ $value->shipping_details[0]->import_charges }}">
                                                    <input type="hidden" name="t_charges" id="t_charges" value="{{ $value->shipping_details[0]->tax_charges }}">
                                                    <input type="hidden" name="oth_charges" id="oth_charges" value="{{ $value->shipping_details[0]->other_charges }}">
                                                    <input type="hidden" name="ship_days" id="ship_days" value="{{ $value->shipping_details[0]->shipping_days }}">
                                                    <input type="hidden" name="brand_id" id="brand_id" value="{{ $value->brand->id }}">
                                                    <input type="hidden" name="brand_logo" id="brand_logo" value="{{ $value->brand->logo }}">
                                                        <td><input type="checkbox" name="" id="" onclick="document.querySelector('#cart-form-child').submit()">
                                                        </td>
                                                        <td>
                                                            <div
                                                                class="fix-bottom product-sticky-content sticky-content">
                                                                {{-- <script>
                                                                   $( document ).ready(function() {
                                                                        var quantity = document.getElementById("quantity-child").value;
                                                                        // alert(document.getElementById("quantity-child").value);
                                                                        document.getElementById("quantity").value = quantity;
                                                                    });
                                                                </script> --}}
                                                                {{-- <div class="product-form container">
                                                                    <div class="product-qty-form with-label">
                                                                        <div class="input-group">
                                                                            <input class="quantity form-control" name="quantity-child" id="quantity-child" 
                                                                                type="number" min="1"
                                                                                max="10000000">
                                                                            <button
                                                                                class="quantity-plus w-icon-plus" disabled></button>
                                                                            <button
                                                                                class="quantity-minus w-icon-minus" disabled></button>
                                                                        </div>
                                                                       
                                                                    </div>
                                                                </div> --}}
                                                            </div>
                                                        </td>
                                                       
                                                   
                                                        
                                                    </tr>
                                                </form>
                                                @empty
                                                    <tr style="rec-not-found">
                                                        <td colspan="8" style="color: red;text-align: center;">
                                                            Child
                                                            Product Not Found</td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                       
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endif

                    <div class="tab tab-nav-boxed tab-nav-underline product-tabs mt-3">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a href="#product-tab-description" class="nav-link active">Description</a>
                            </li>
                            <li class="nav-item">
                                <a href="#product-tab-reviews" class="nav-link">Customer Reviews ({{ $overAllProductRating }})</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="product-tab-description">
                                <div class="row mb-4">
                                    <div class="col-lg-12 col-md-12 col-sm-12 mb-5">
                                        <h4 class="title tab-pane-title font-weight-bold mb-2">Details</h4>
                                        {!! $product->details !!}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <hr>
                                    </div>
                                </div>
                                <div class="row cols-md-3">
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <h5 class="sub-title font-weight-bold"><span class="mr-3" style="color: #0071BC;"><i class="fa fa-truck"></i></span>Fast Shipping</h5>
                                        <p class="detail pl-5">Receive products in amazing time</p>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <h5 class="sub-title font-weight-bold"><span style="color: #0071BC;"><i class="fa fa-undo"></i></span>Easy Returns</h5>
                                        <p class="detail pl-5">Return policy that lets you shop at ease</p>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <h5 class="sub-title font-weight-bold"><span style="color: #0071BC;"><i class="fa fa-shield"></i></span>Always Authentic</h5>
                                        <p class="detail pl-5">We only sell 100% authentic products</p>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <h5 class="sub-title font-weight-bold"><span style="color: #0071BC;"><i class="fa fa-lock"></i></span>Secure Shopping</h5>
                                        <p class="detail pl-5">Your data is always protected</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="product-tab-reviews">
                                <div class="row mb-4">
                                    <div class="col-xl-4 col-lg-5 mb-4">
                                        <div class="ratings-wrapper">
                                            <div class="avg-rating-container">
                                                <h4 class="avg-mark font-weight-bolder ls-50">{{ number_format($reviewsAverage,2) }}</h4>
                                                <div class="avg-rating">
                                                    <p class="text-dark mb-1">Average Rating</p>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 60%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <a href="#" class="rating-reviews">({{ $overAllProductRating }} Reviews)</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ratings-list">

                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <div class="progress-bar progress-bar-sm ">
                                                        <span></span>
                                                    </div>
                                                    <div class="progress-value">
                                                        @if (isset($ReviewsNo5->total_user_rating) && $ReviewsNo5->total_user_rating!=0)
                                                            <mark>{{ number_format(($ReviewsNo5->total_user_rating/$overAllProductRating)*100,0) }}%</mark>
                                                        @else
                                                            <mark>0%</mark>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 80%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <div class="progress-bar progress-bar-sm ">
                                                        <span></span>
                                                    </div>
                                                    <div class="progress-value">
                                                        @if (isset($ReviewsNo4->total_user_rating) && $ReviewsNo4->total_user_rating!=0)
                                                            <mark>{{ number_format(($ReviewsNo4->total_user_rating/$overAllProductRating)*100,0) }}%</mark>
                                                        @else
                                                            <mark>0%</mark>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 60%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <div class="progress-bar progress-bar-sm ">
                                                        <span></span>
                                                    </div>
                                                    <div class="progress-value">
                                                        @if (isset($ReviewsNo3->total_user_rating) && $ReviewsNo3->total_user_rating!=0)
                                                            <mark>{{ number_format(($ReviewsNo3->total_user_rating/$overAllProductRating)*100,0) }}%</mark>
                                                        @else
                                                            <mark>0%</mark>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 40%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <div class="progress-bar progress-bar-sm ">
                                                        <span></span>
                                                    </div>
                                                    <div class="progress-value">
                                                        @if (isset($ReviewsNo2->total_user_rating) && $ReviewsNo2->total_user_rating!=0)
                                                            <mark>{{ number_format(($ReviewsNo2->total_user_rating/$overAllProductRating)*100,0) }}%</mark>
                                                        @else
                                                            <mark>0%</mark>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 20%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <div class="progress-bar progress-bar-sm ">
                                                        <span></span>
                                                    </div>
                                                    <div class="progress-value">
                                                        @if (isset($ReviewsNo1->total_user_rating) && $ReviewsNo1->total_user_rating!=0)
                                                            <mark>{{ number_format(($ReviewsNo1->total_user_rating/$overAllProductRating)*100,0) }}%</mark>
                                                        @else
                                                            <mark>0%</mark>
                                                        @endif
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-7 mb-4">
                                        <div class="review-form-wrapper">
                                            <h3 class="title tab-pane-title font-weight-bold mb-1">Submit Your Review
                                            </h3>
                                            <p class="mb-3">Your email address will not be published. Required fields
                                                are marked *</p>
                                            <form action="{{ URL::to('/submit-review') }}" method="POST" class="review-form">
                                                @csrf
                                                <input type="hidden" name="product_id" id="product_id" value="{{ $product->id }}">
                                                <input type="hidden" name="rating" id="rating" value="1">
                                                <div class="rating-form">
                                                    <label for="rating">Your Rating Of This Product :</label>
                                                    <span class="rating-stars">
                                                        <a class="star-1 active" href="#">1</a>
                                                        <a class="star-2" href="#">2</a>
                                                        <a class="star-3" href="#">3</a>
                                                        <a class="star-4" href="#">4</a>
                                                        <a class="star-5" href="#">5</a>
                                                    </span>
                                                </div>
                                                <textarea cols="30" rows="6" placeholder="Write Your Review Here..."
                                                    class="form-control" name="review" id="review" required></textarea>
                                                <div class="row gutter-md">
                                                    <div class="col-md-6">
                                                        <input type="text" id="customer_name" name="customer_name" class="form-control" placeholder="Your Name"
                                                            id="author" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="email" name="customer_email" id="customer_email" class="form-control" placeholder="Your Email (optional)">
                                                    </div>
                                                </div>
                                                {{-- <div class="form-group">
                                                    <input type="checkbox" class="custom-checkbox" id="save-checkbox">
                                                    <label for="save-checkbox">Save my name, email, and website in this
                                                        browser for the next time I comment.</label>
                                                </div> --}}
                                                <button type="submit" class="btn btn-dark">Submit Review</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>










                    @if ($product->attachment != null)
                        <div class="row mt-5">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="btn-wrap text-center">
                                    <a href="{{ URL::asset('root/upload/products/attachments/' . $product->attachment) }}"
                                        class="btn btn-primary btn-lg btn-shadow btn-rounded" download>Download <i
                                            class="w-icon-download" style="font-size: 25px;"></i></a>
                                </div>
                            </div>
                        </div>
                    @endif
                   
                    <div class="post-wrapper appear-animate mb-4">
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
                                        'slidesPerView': 4
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
                                                        <div style="position: relative; left: 0; top: 0;">
                                                            <img src="{{ URL::asset($value->product_image->url) }}" class="imagee" 
                                                                alt="Product" />
                                                            <img src="{{ URL::asset('root/upload/logo/water.png') }}" class="water"
                                                                alt="Product" />
                                                            </div>
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
                                                            
                                                            @if($total<=0 )
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
                                                        {{-- @if ($value->id == $reviews->product_id ) --}}
                                                        {{-- @foreach($relatedreviews as $reviews)
                                                        @if ($value->id == $relatedreviews->product_id )
                                                        
                                                        @endif
                                                        @endforeach --}}
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
                                                        
                                                        @if($count!=0 && $value->id == $reviews->product_id )
                                                        <div class="col-5 text-right">
                                                            <br>
                                                            {{-- <p>{{ $count }}</p> --}}
                                                            <div class="ratings-container"style="margin-left:40px;">
                                                                <div class="ratings-full">
                                                                    <span class="ratings" style="width:{{($stars/$count)*20 }}%;"></span>
                                                                    <span class="tooltiptext tooltip-top"></span>
                                                                </div>
                                                                {{-- <a href="#" class="rating-reviews">({{ $overAllProductRating }} Reviews)</a> --}}
                                                            </div>
                                                        </div>
                                                        @else  
                                                        <div class="col-5 text-right">
                                                            
                                                            <br>
                                                            <div class="ratings-container"style="margin-left:40px;">
                                                                <div class="ratings-full">
                                                                    <span class="ratings" style="width:0%;"></span>
                                                                    <span class="tooltiptext tooltip-top"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endif
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
                    <!-- Post Wrapper -->
                </div>
                <section class="single-product-contact-form-section" id="single-product-contact-form-section">
                    <form action="{{ URL::to('product-contact-sendMessage#productContactForm') }}" id="productContactForm" method="post">
                        @csrf
                        <input type="hidden" name="pro_id" id="pro_id" value="{{ $product->id }}" required>
                        <input type="hidden" name="make" id="make" value="{{ $product->biller->name }}" required>
                        <input type="hidden" name="vid" id="vid" value="{{ $product->created_by }}" required>
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
                                    <label style="font-size: 20px;font-weight: bold;color:black;">{{ $product->biller->name }}</label>
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


                                <div class="col-lg-2 col-md-2 col-sm-12 mt-3">
                                    <label style="font-size: 17px;position: relative;top:-5px;"><span style="color: red;">*</span>Delivery
                                        Location:</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-12 mt-3">
                                    <div>
                                        @foreach ($product->shipping_details as $key => $locations)
                                            @if ($key == 0)
                                                <label for="country{{ $key }}">
                                                    <input type="radio" name="delivery_location" id="country{{ $key }}"
                                                        value="{{ $locations->location->name }}" checked>
                                                    <span
                                                        style="margin-left: 5px;">{{ $locations->location->name }}</span>
                                                </label>
                                            @else
                                                <label for="country{{ $key }}">
                                                    <input type="radio" name="delivery_location" id="country{{ $key }}"
                                                        value="{{ $locations->location->name }}">
                                                    <span
                                                        style="margin-left: 5px;">{{ $locations->location->name }}</span>
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
                            {{-- <div class="row mt-2">
                                <div class="col-lg-2 col-md-3 col-sm-12">
                                    <label style="font-size: 17px;position: relative;top:-5px;"><span style="color: red;">*</span>Delivery
                                        Location:</label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <div>
                                        @foreach ($product->shipping_details as $key => $locations)
                                            @if ($key == 0)
                                                <label for="country{{ $key }}">
                                                    <input type="radio" name="delivery_location" id="country{{ $key }}"
                                                        value="{{ $locations->location->name }}" checked>
                                                    <span
                                                        style="margin-left: 5px;">{{ $locations->location->name }}</span>
                                                </label>
                                            @else
                                                <label for="country{{ $key }}">
                                                    <input type="radio" name="delivery_location" id="country{{ $key }}"
                                                        value="{{ $locations->location->name }}">
                                                    <span
                                                        style="margin-left: 5px;">{{ $locations->location->name }}</span>
                                                </label>
                                            @endif
                                            &emsp;
                                        @endforeach
                                    </div>
                                    @if($errors->has('delivery_location'))
                                        <span class="invalid-feedback1">{{ $errors->first('delivery_location') }}</span>
                                    @endif
                                </div>
                            </div> --}}
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
            </div>
            <!-- End of Page Content -->
        </main>
        <!-- End of Main -->
        <section class="warranty-return-section">
            <hr>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="text-center pt-1 pb-1">Shipping</div>
                            </div>
                            <div class="card-body collapsed" style="display: block;height:230px;">
                                <div class="row" style="margin-top: 20px;">
                                    <div class="col-4">
                                        <b
                                            style="list-style-type: disc;display: list-item;margin-left: 1em;color:#3775AC;font-weight:bold;margin-top:-20px;"><span
                                                style="color: black;">Shipping :</span></b>
                                    </div>
                                    <div class="col-8" style="">
                                        <p style="margin-top: -20px;"><b>{{ $settings->currency }}<span
                                                    id="shipping_price">{{ $product->shipping_details[0]->shipping_charges }}</span></b>
                                            International Priority Shipping to Pakistan via Global</p>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 0px;">
                                    <div class="col-4">
                                        <b
                                            style="list-style-type: disc;display: list-item;margin-left: 1em;color:#3775AC;font-weight:bold;margin-top:-20px;"><span
                                                style="color: black;">Located in :</span></b>
                                    </div>
                                    <div class="col-8">
                                        <p style="margin-top: -20px;"><b
                                                id="located_in">{{ $product->shipping_details[0]->location->name }}</b>
                                            {{-- <i class="w-icon-exclamation-circle"></i> --}}
                                        </p>
                                    </div>
                                </div>
                                @if (($product->shipping_details[0]->import_charges)!=0)
                                <div class="row">
                                    <div class="col-4">
                                        <b
                                            style="list-style-type: disc;display: list-item;margin-left: 1em;color:#3775AC;font-weight:bold;margin-top:-20px;"><span
                                                style="color: black;">Import charges :</span></b>
                                    </div>
                                    <div class="col-8">
                                        <p style="margin-top: -22px;"><b>{{ $settings->currency }}<span
                                                    id="import_charges">{{ number_format($product->shipping_details[0]->import_charges) }}</span></b>
                                            (amount confirmed at checkout)</p>
                                    </div>
                                </div>
                                @endif
                                @if (($product->shipping_details[0]->tax_charges)!=0)
                                <div class="row">
                                    <div class="col-4">
                                        <b
                                            style="list-style-type: disc;display: list-item;margin-left: 1em;color:#3775AC;font-weight:bold;margin-top:-20px;"><span
                                                style="color: black;">Tax charges :</span></b>
                                    </div>
                                    <div class="col-8">
                                        <p style="margin-top: -20px;"><b>{{ $settings->currency }}<span
                                                    id="tax_charges">{{ number_format($product->shipping_details[0]->tax_charges) }}</span></b>
                                        </p>
                                    </div>
                                </div>
                                @endif
                                @if (($product->shipping_details[0]->other_charges)!=0)
                                <div class="row">
                                    <div class="col-4">
                                        <b
                                            style="list-style-type: disc;display: list-item;margin-left: 1em;color:#3775AC;font-weight:bold;margin-top:-20px;"><span
                                                style="color: black;">Other charges :</span></b>
                                    </div>
                                    <div class="col-8">
                                        <p style="margin-top: -20px;"><b>{{ $settings->currency }}<span
                                                    id="other_charges">{{ number_format($product->shipping_details[0]->other_charges) }}</span></b>
                                        </p>
                                    </div>
                                </div>
                                @endif
                                <div class="row">
                                    <div class="col-4">
                                        <b
                                            style="list-style-type: disc;display: list-item;margin-left: 1em;color:#3775AC;font-weight:bold;margin-top:-20px;"><span
                                                style="color: black;">Delivery :</span></b>
                                    </div>
                                    <div class="col-8">
                                        <p style="margin-top: -20px;">Estimated between
                                            <b>{{ Carbon::now()->format('D, M d') }}</b> and
                                            <b
                                                id="add_shipping_days1">{{ Carbon::now()->addDays($product->shipping_details[0]->shipping_days)->format('D, M d') }}</b>
                                            Includes
                                            international tracking 
                                            {{-- <i class="w-icon-exclamation-circle"></i> --}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="text-center pt-1 pb-1">Payment Method</div>
                            </div>
                            <div class="card-body collapsed" style="display: block;height:230px;">
                                <div class="row">
                                    <div class="col-4">
                                        <b
                                            style="list-style-type: disc;display: list-item;margin-left: 1em;color:#3775AC;font-weight:bold;"><span
                                                style="color: black;">Payment Methods :</span></b>
                                    </div>
                                    <div class="col-8" style="margin-top: -15px;">
                                        <img src="{{ URL::asset('website-assets/images/visa-card-logo.png') }}"
                                            width="50px" alt="visa-card" style="margin-right: 10px;">
                                        <img src="{{ URL::asset('website-assets/images/master-card-logo.png') }}"
                                            width="50px" alt="visa-card" style="margin-right: 10px;">
                                        <img src="{{ URL::asset('website-assets/images/bank.png') }}"
                                            width="50px" alt="visa-card" style="margin-right: 10px;">
                                        <img src="{{ URL::asset('website-assets/images/chequ.png') }}"
                                            width="50px" alt="visa-card" style="margin-right: 10px;">
                                        <img src="{{ URL::asset('website-assets/images/cash.png') }}"
                                            width="50px" alt="visa-card" style="margin-right: 10px;">
                                        <img src="{{ URL::asset('website-assets/images/online-transfer.png') }}"
                                            width="50px" alt="visa-card" style="margin-right: 10px;">
                                        {{-- <i class="w-icon-exclamation-circle"></i> --}}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4"></div>
                                    <div class="col-8">
                                        <p style="font-size: 9px;">International shipping and import charges
                                            according to
                                            country’s upgraded rules & regulations</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <span
                                            style="list-style-type: disc;display: list-item;margin-left: 1em;color:#3775AC;font-weight:bold;">
                                            <span style="color: black;">Please contact us for payment
                                                instructions</span>
                                        </span>
                                        <div style="padding-bottom:104px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="text-center pt-1 pb-1">Warranty and Returns</div>
                            </div>
                            <div class="card-body collapsed" style="display: block;height:230px;">
                                <table class="table single-product-warranty-return-section">
                                    <tbody>
                                        <tr>
                                            <td
                                                style="list-style-type: disc;display: list-item;margin-left: 1em;color:#3775AC;font-weight:bold;">
                                                <span style="color:black;">Warranty :</span>
                                            </td>
                                            <td><span id="warranty_days">{{ $product->new_warranty_days }}</span>-Days Money Back. Manufacturers' warranties DO NOT apply <i
                                                    class="w-icon-exclamation-circle"></i></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><div style="padding-bottom:50px;"></div></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div style="padding-bottom: 71px"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="text-center pt-1 pb-1">Contact US</div>
                            </div>
                            <div class="card-body collapsed" style="display: block;height:230px;">
                                <table class="table single-product-warranty-return-section22">
                                    <tbody>
                                        @foreach ($product->shipping_details as $key => $locations)
                                            <tr>
                                                <td
                                                    style="list-style-type: disc;display: list-item;margin-left: 1em;color:#3775AC;font-weight:bold;">
                                                    <span style="color:black;">{{ $locations->location->name }}
                                                        Office :</span>
                                                </td>
                                                <td>{{ $locations->location->address }}</td>
                                            </tr>
                                            <tr>
                                                <td
                                                    style="list-style-type: none;display: list-item;margin-left: 1em;color:black;">
                                                    Email:</td>
                                                <td>{{ $locations->location->email }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <hr>
                    <div class="text-center" style="margin-top: -10px;">International shipping and import charges according to country’s upgraded
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
    <script src="{{ URL::asset('website-assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/vendor/sticky/sticky.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/vendor/jquery.plugin/jquery.plugin.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/vendor/zoom/jquery.zoom.js') }}"></script>
    <script src="{{ URL::asset('website-assets/vendor/photoswipe/photoswipe.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/vendor/photoswipe/photoswipe-ui-default.min.js') }}"></script>
    <!-- Main JS File -->
    <script src="{{ URL::asset('website-assets/js/main.min.js') }}"></script>
    
    <!-- Toast Notifications -->
    <script src="{{ URL::asset('website-assets/js/toastr.min.js') }}"></script>
    {!! Toastr::message() !!}

    {{-- <script src="{{ URL::asset('custom/jquery.min.js') }}"></script> --}}
   <script>
    document.addEventListener("contextmenu", function (e){
    e.preventDefault();
        }, false);
   </script>
   <script>
        $(document).ready(function() {
            $('#currencyChange').change(function() {
                var amountNew = $('#amount_new').val();
                var amountOld = $('#amount_old').val();
                var currency = $(this).val();

                $.ajax({
                    type: 'GET',
                    dataType: "json",
                    url: 'https://api.exchangerate-api.com/v4/latest/USD',
                    success: function(data, status, xhr) {
                        // console.log('data: ', data.rates);
                        var res = (data.rates[currency] / data.rates.USD) * amountNew;
                        var res1 = (data.rates[currency] / data.rates.USD) * amountOld;

                        $('#finalNewValue').html(currency + '' + res.toFixed());
                        $('#finalOldValue').html(currency + '' + res1.toFixed());
                        $('#discount_price').html(currency + '' + (res - res1).toFixed());
                    }
                });
            });
        });
       
    </script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script>
        function ChangeCountry(country) {
            var country_name = country.split('_')[0];
            var shipping_charges = country.split('_')[1];
            var import_charges = country.split('_')[2];
            var tax_charges = country.split('_')[3];
            var other_charges = country.split('_')[4];
            var shipping_days = country.split('_')[5];
            var new_price = country.split('_')[6];
            var new_sale_price = country.split('_')[7];
            var refurnished_price = country.split('_')[8];
            var refurnished_sale_price = country.split('_')[9];
            var ConditionType = $('#conditionType').val();
            $('#located_in').html(country_name);
            $('#shipping_price').html(shipping_charges);
            $('#import_charges').html(import_charges);
            $('#tax_charges').html(tax_charges);
            $('#other_charges').html(other_charges);


            $('#located_in1').html(country_name);
            $('#shipping_price1').html(shipping_charges);
            $('#import_charges1').html(import_charges);
            $('#tax_charges1').html(tax_charges);
            $('#other_charges1').html(other_charges);

            $('#ship_charges').val(shipping_charges);
            $('#locatedin').val(country_name);
            $('#imp_charges').val(import_charges);
            $('#t_charges').val(tax_charges);
            $('#oth_charges').val(other_charges);
            $('#ship_days').val(shipping_days);

            if (ConditionType == 'NEW') {
                $('#price').val(new_sale_price);
                $('#amount_new').val(new_sale_price);
                $('#amount_old').val(new_price);
       
                $('#conditionType').val('NEW');

                // $('#discount_price').html('$' + (new_sale_price - new_price));
            } else
            if (ConditionType == 'REFURBISHED') {
                $('#price').val(refurnished_sale_price);
                $('#amount_new').val(refurnished_sale_price);
                $('#amount_old').val(refurnished_price);

                $('#conditionType').val('REFURBISHED');

                // $('#discount_price').html('$' + (refurnished_sale_price - refurnished_price));
            }


            var year = new Date().getFullYear();
            var month = new Date().getMonth() + 1;
            var day = parseInt(new Date().getDate());
            var shipping_date = moment(year + '/' + month + '/' + day).add(parseInt(shipping_days), 'd').format(
                'ddd, MMM DD');
            $('#add_shipping_days').html(shipping_date);
            $('#add_shipping_days1').html(shipping_date);
        }
    </script>

    <script>
        function ChangeCondition(condition) {
            var conditionName = condition.split('_')[0];
            
            var price = condition.split('_')[1];
            var sale_price = condition.split('_')[2];
            var warranty_days = condition.split('_')[3];
            var key = condition.split('_')[4];

            $('#price').val(sale_price);
            $('#amount_old').val(price);
            $('#amount_new').val(sale_price);
            $("#finalOldValue").html('$' + price);
            $("#finalNewValue").html('$' + sale_price);
            $('#conditionType').val(conditionName);

            $('#warranty_days').html(warranty_days);

            $('#discount_price').html('$' + (sale_price - price));

            if(conditionName=='NEW')
            {
                $('#conditionn'+key).css('background','#F95506');
                $('#conditionn'+key).css('color','#FFFFFF');
                $('#conditionn'+(parseInt(key)+1)).css('background','#FFFFFF');
                $('#conditionn'+(parseInt(key)+1)).css('color','#000000');
            }
            else
            if(conditionName=='REFURBISHED')
            {
                $('#conditionn'+key).css('background','#F95506');
                $('#conditionn'+key).css('color','#FFFFFF');
                $('#conditionn'+(parseInt(key)-1)).css('background','#FFFFFF');
                $('#conditionn'+(parseInt(key)-1)).css('color','#000000');
            }
        }
        
    </script>




    <!-- Start of LiveChat (www.livechat.com) code -->
    <script>
        window.__lc = window.__lc || {};
        window.__lc.license = 14290611;;
        (function(n, t, c) {
            function i(n) {
                return e._h ? e._h.apply(null, n) : e._q.push(n)
            }
            var e = {
                _q: [],
                _h: null,
                _v: "2.0",
                on: function() {
                    i(["on", c.call(arguments)])
                },
                once: function() {
                    i(["once", c.call(arguments)])
                },
                off: function() {
                    i(["off", c.call(arguments)])
                },
                get: function() {
                    if (!e._h) throw new Error("[LiveChatWidget] You can't use getters before load.");
                    return i(["get", c.call(arguments)])
                },
                call: function() {
                    i(["call", c.call(arguments)])
                },
                init: function() {
                    var n = t.createElement("script");
                    n.async = !0, n.type = "text/javascript", n.src = "https://cdn.livechatinc.com/tracking.js",
                        t.head.appendChild(n)
                }
            };
            !n.__lc.asyncInit && e.init(), n.LiveChatWidget = n.LiveChatWidget || e
        }(window, document, [].slice))
    </script>
    <noscript><a href="https://www.livechat.com/chat-with/14290611/" rel="nofollow">Chat with us</a>, powered by <a
            href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
    <!-- End of LiveChat code -->


    <script>
        function ChangeCondition1(key, key1) {
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
    </script>


    <!-- Star Rating -->
    <script>
        $(document).ready(function(){
            $('.star-1').click(function(){ $('#rating').val(1); });
            $('.star-2').click(function(){ $('#rating').val(2); });
            $('.star-3').click(function(){ $('#rating').val(3); });
            $('.star-4').click(function(){ $('#rating').val(4); });
            $('.star-5').click(function(){ $('#rating').val(5); });
        });
    </script>

<script src="{{ URL::asset('website-assets/js/scroll.js') }}"></script>
</body>

</html>