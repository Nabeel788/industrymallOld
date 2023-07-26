@php
use App\Models\Locations;
$locations = Locations::select('id', 'name')->orderBy('id')->get();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Industry Mall | Shop | Products</title>

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
            margin-bottom: 0% !important;
        }
        
        #categories-section ul{
            height: 400px;
            overflow-y: scroll;
        }
        #categories-section ul::-webkit-scrollbar {
            /* width: 12px; */
        }
        #categories-section ul::-webkit-scrollbar {
            width: 5px;
        }
        /* Track */
        #categories-section ul::-webkit-scrollbar-track {
            background: #f1f1f1; 
        }
        
        /* Handle */
        #categories-section ul::-webkit-scrollbar-thumb {
            background: #888; 
        }
        
        /* Handle on hover */
        #categories-section ul::-webkit-scrollbar-thumb:hover {
            background: #555; 
        }

        .priceSlider{
            margin-top: -20px;
            margin-left: -10px;
            width: 100%;
            background: #fff;
            border-radius: 10px;
            padding: 10px 10px;
            /* box-shadow: 0px 0px 3px 1px #888; */
        }
        .min-max label{
            font-size: 14px;
            float: left;
            margin-right: 5px;
            line-height: 1.6;
        }
        .min{
            float: left;
        }
        .max{
            float: right;
        }
        .min-max{
            width: 90%;
            max-width: 200px;
            margin: 0 auto;
            /* padding: 25px 0px 15px 0px; */
        }

        .min-max span{
            font-size: 10px;
            text-align: center;
            display: inline-block;
            width: 30px;
            border: 1px solid #dedede;
        }
        .min-max-range{
            padding: 30px 0px 20px 0px;
        }
        .range{
            -webkit-appearance: none;
            appearance: none;
            width: 50%;
            height: 10px;
            max-width: 400px;
            background: #dedede;
            margin: 0px;
            padding: 0px;
            outline: none;
            float: left;
        }
        .range::-webkit-slider-thumb{
            -webkit-appearance: none;
            appearance: none;
            background: #003cbf;
            height: 15px;
            width: 15px;
            border-radius: 50%;
            cursor: pointer;
        }
        .range::moz-range-thumb{
            -webkit-appearance: none;
            appearance: none;
            background: #00355a;
            height: 15px;
            width: 15px;
            border-radius: 50%;
            cursor: pointer;
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
   </style>
   <style>
                // doesnt work funnly on firefox or edge, need to fix

            .range-slider {
            width: 300px;
            text-align: center;
            position: relative;
            .rangeValues {
                display: block;
            }
            }

            input[type=range] {
            -webkit-appearance: none;
            border: 1px solid white;
            width: 300px;
            position: absolute;
            left: 0;
            }

            input[type=range]::-webkit-slider-runnable-track {
            width: 300px;
            height: 5px;
            background: #ddd;
            border: none;
            border-radius: 3px;

            }

            input[type=range]::-webkit-slider-thumb {
            -webkit-appearance: none;
            border: none;
            height: 16px;
            width: 16px;
            border-radius: 50%;
            background: #044c88;
            margin-top: -4px;
                cursor: pointer;
                position: relative;
                z-index: 1;
            }

            input[type=range]:focus {
            outline: none;
            }

            input[type=range]:focus::-webkit-slider-runnable-track {
            background: #ccc;
            }

            input[type=range]::-moz-range-track {
            width: 300px;
            height: 5px;
            background: #ddd;
            border: none;
            border-radius: 3px;
            }

            input[type=range]::-moz-range-thumb {
            border: none;
            height: 16px;
            width: 16px;
            border-radius: 50%;
            background: #21c1ff;
            
            }


            /*hide the outline behind the border*/

            input[type=range]:-moz-focusring {
            outline: 1px solid white;
            outline-offset: -1px;
            }

            input[type=range]::-ms-track {
            width: 300px;
            height: 5px;
            /*remove bg colour from the track, we'll use ms-fill-lower and ms-fill-upper instead */
            background: transparent;
            /*leave room for the larger thumb to overflow with a transparent border */
            border-color: transparent;
            border-width: 6px 0;
            /*remove default tick marks*/
            color: transparent;
                z-index: -4;

            }

            input[type=range]::-ms-fill-lower {
            background: #777;
            border-radius: 10px;
            }

            input[type=range]::-ms-fill-upper {
            background: #ddd;
            border-radius: 10px;
            }

            input[type=range]::-ms-thumb {
            border: none;
            height: 16px;
            width: 16px;
            border-radius: 50%;
            background: #21c1ff;
            }

            input[type=range]:focus::-ms-fill-lower {
            background: #888;
            }

            input[type=range]:focus::-ms-fill-upper {
            background: #ccc;
            }

   </style>
    
</head>

<body>
    <div class="page-wrapper">
        <h1 class="d-none">SHOP</h1>
        @include('components.header')
        <!-- Start of Main -->
        <main class="main">
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb bb-no">
                        <li><a href="{{ URL::to('/') }}">Home</a></li>
                        <li><a href="javascript:void(0);">Shop</a></li>
                        <li>{{ $subCategorySingle->name }}</li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb-nav -->

            <div class="page-content mb-10">
                <div class="container">
                    <!-- Start of Shop Content -->
                    <div class="shop-content row gutter-lg">
                        <!-- Start of Sidebar, Shop Sidebar -->
                        <aside class="sidebar shop-sidebar sticky-sidebar-wrapper sidebar-fixed">
                            <!-- Start of Sidebar Overlay -->
                            <div class="sidebar-overlay"></div>
                            <a class="sidebar-close" href="#"><i class="close-icon"></i></a>

                            <!-- Start of Sidebar Content -->
                            <div class="sidebar-content scrollable">
                                <!-- Start of Sticky Sidebar -->
                                <div class="sticky-sidebar">
                                    <div class="filter-actions">
                                        <label>Filter :</label>
                                        <a href="#" class="btn btn-dark btn-link filter-clean">Clean All</a>
                                    </div>
                                    <!-- Start of Collapsible widget -->
                                    <div class="widget widget-collapsible" id="categories-section">
                                        <h3 class="widget-title"><span>All Categories</span></h3>
                                        <ul class="widget-body filter-items search-ul" style="">
                                            @foreach ($categoriesList as $value)
                                                <li style="margin-bottom: -10px;">
                                                    @if (Request::path()=='shop/cat/'.$value->id)
                                                    <a href="{{ URL::to('/shop/cat/'.$value->id) }}"><i class="w-icon-check-solid"></i> <b style="color: #F95506;">{{ $value->name }}</b></a>
                                                    @else
                                                    <a href="{{ URL::to('/shop/cat/'.$value->id) }}"><b>{{ $value->name }}</b></a>
                                                    @endif
                                                    
                                                    @foreach ($value->subcategories as $value1)
                                                        @if (Request::path()=='shop/subcat/'.$value1->id.'/'.$value1->slug)
                                                        <li style="margin-top: -30px;margin-left:20px;">&emsp;<a href="{{ URL::to('/shop/subcat/'.$value1->id.'/'.$value1->slug) }}" style="color: #F95506;"><i class="w-icon-check-solid"></i> {{ $value1->name }}</a></li>
                                                        @else
                                                        <li style="margin-top: -30px;margin-left:20px;">&emsp;<a href="{{ URL::to('/shop/subcat/'.$value1->id.'/'.$value1->slug) }}">{{ $value1->name }}</a></li>
                                                        @endif
                                                    @endforeach
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <!-- End of Collapsible Widget -->

                                    <!-- Start of Collapsible Widget -->
                                    <div class="widget widget-collapsible">
                                        <h3 class="widget-title"><span>Product Name</span></h3>
                                        <div class="widget-body" style="margin-bottom: 0px!important;padding:0px!important;">
                                            <form class="price-range" id="price-range-form form-inline"
                                                action="{{ URL::to('/shop/subcat/filterbyname') }}">
                                                @csrf
                                                <input type="hidden" name="sub_category_id" id="sub_category_id"
                                                    value="{{ $subCategorySingle->id }}" required>
                                                <input type="text" name="product_name_model" id="product_name_model"
                                                    class="form-control" placeholder="Name OR Model No"
                                                    style="width: 100%;min-height:3.7rem!important;">
                                                <button class="btn btn-primary btn-lg btn-rounded"
                                                    style="width:30%; height: 3.7rem!important;">GO</button>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End of Collapsible Widget -->

                                    <!-- Start of Collapsible Widget -->
                                    <div class="widget widget-collapsible">
                                        <h3 class="widget-title"><span>Condition</span></h3>
                                        <div class="widget-body" style="margin-bottom: 0px!important;padding:0px!important;">
                                            <form class="price-range" id="price-range-form form-inline"
                                                action="{{ URL::to('/shop/subcat/filterbycondition') }}">
                                                @csrf
                                                <input type="hidden" name="sub_category_id" id="sub_category_id"
                                                    value="{{ $subCategorySingle->id }}" required>
                                                {!! Form::select('condition',$ProductConditions,null,['id'=>'condition','class'=>'form-control','style'=>'min-height:3.7rem!important;']) !!}
                                                <button class="btn btn-primary btn-lg btn-rounded" style="width:30%; height: 3.7rem;">GO</button>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End of Collapsible Widget -->

                                    <!-- Start of Collapsible Widget -->
                                    <div class="widget widget-collapsible">
                                        <h3 class="widget-title"><span>Maker</span></h3>
                                        <div class="widget-body" style="margin-bottom: 0px!important;padding:0px!important;">
                                            <form class="price-range" id="price-range-form form-inline"
                                                action="{{ URL::to('/shop/subcat/filterbymaker') }}">
                                                @csrf
                                                <input type="hidden" name="sub_category_id" id="sub_category_id"
                                                    value="{{ $subCategorySingle->id }}" required>
                                                <input type="text" name="maker_name" id="maker_name" class="form-control" placeholder="Maker Name" style="width: 100%;min-height:3.7rem!important;">
                                                <button class="btn btn-primary btn-lg btn-rounded"
                                                    style="width:30%; height: 3.7rem;">GO</button>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End of Collapsible Widget -->

                                    <!-- Start of Collapsible Widget -->
                                    <div class="widget widget-collapsible">
                                        <h3 class="widget-title"><span>Type</span></h3>
                                        <div class="widget-body" style="margin-bottom: 0px!important;padding:0px!important;">
                                            <form class="price-range" id="price-range-form form-inline"
                                                action="{{ URL::to('/shop/subcat/filterbytype') }}">
                                                @csrf
                                                <input type="hidden" name="sub_category_id" id="sub_category_id"
                                                    value="{{ $subCategorySingle->id }}" required>
                                                <select name="type" id="type" class="form-control" style="min-height:3.7rem!important;">
                                                    <option value="Parent">Parent</option>
                                                    <option value="Child">Child</option>
                                                </select>
                                                <button class="btn btn-primary btn-lg btn-rounded" style="width:30%; height: 3.7rem;">GO</button>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End of Collapsible Widget -->

                                    <!-- Start of Collapsible Widget -->
                                    <div class="widget widget-collapsible">
                                      
                                        <h3 class="widget-title"><span>Price</span></h3>
                                        <div class="widget-body" style="margin-bottom: 0px!important;padding:0px!important;">
                                            
                                            <form class="price-range" id="price-range-form"
                                                action="{{ URL::to('/shop/subcat/filterbyprice-min-max') }}">
                                                @csrf
                                                <input type="hidden" name="sub_category_id" id="sub_category_id"
                                                    value="{{ $subCategorySingle->id }}">
                                                <input type="number" name="min_price" id="min_price" class="min_price text-center"
                                                    placeholder="Min" required value="{{ $minPrice!=0 }}"><span
                                                    class="delimiter">-</span><input type="number" name="max_price" id="max_price"
                                                    class="max_price text-center" placeholder="Max" required
                                                    value="@if($maxPrice)!=0 {{ $maxPrice }} @endif"><a href="#"
                                                    class="btn btn-primary btn-rounded"
                                                    onclick="document.getElementById('price-range-form').submit();">Go</a>
                                            </form>
                                           
                                            <div class="priceSlider">
                                                {{-- <h1>Range Slider</h1>
                                                <p>Move Slider to choose the price range:</p> --}}
                                                <div class="min-max" style="display: none;">
                                                    <div class="min">
                                                        <label for="">Min</label>
                                                        <span id="min-value"></span>
                                                    </div>
                                                    <div class="max">
                                                        <label for="">Max</label>
                                                        <span id="max-value"></span>
                                                    </div>
                                                </div>
                                                <div class="min-max-range">
                                                    @php
                                                        $meanPrice=($minPrice+$maxPrice)/2;
                                                    @endphp
                                                    <input type="range" name="" id="min" min="{{$minPrice }}" max="{{ $maxPrice }}"  class="range" value="{{ $minPrice }}">
                                                    <input type="range" name="" id="max"  min="{{$minPrice }}"  max="{{ $maxPrice }}" class="range" value="{{ $maxPrice }}">
                                                </div>
                                                <div style="clear: both;"></div>
                                                                       
                                                <script>
                                                    var minSlider = document.getElementById('min');
                                                    var maxSlider = document.getElementById('max');
                                                    var outputMin = document.getElementById('min-value');
                                                    var outputMax = document.getElementById('max-value');
                                                    outputMin.innerHTML = minSlider.value;
                                                    outputMax.innerHTML = maxSlider.value;

                                                    document.getElementById('min_price').value = minSlider.value;
                                                    document.getElementById('max_price').value = maxSlider.value;

                                                    minSlider.oninput = function(){
                                                        outputMin.innerHTML = this.value;
                                                        document.getElementById('min_price').value = this.value;
                                                    }
                                                    maxSlider.oninput = function(){
                                                        outputMax.innerHTML = this.value;
                                                        document.getElementById('max_price').value = this.value;
                                                    }

                                                </script>
                                          
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Collapsible Widget -->

                                    <!-- Start of Collapsible Widget -->
                                    <div class="widget widget-collapsible" style="display:none;">
                                        <h3 class="widget-title"><span>Size</span></h3>
                                        <ul class="widget-body filter-items item-check mt-1">
                                            <li><a href="#">Extra Large</a></li>
                                            <li><a href="#">Large</a></li>
                                            <li><a href="#">Medium</a></li>
                                            <li><a href="#">Small</a></li>
                                        </ul>
                                    </div>
                                    <!-- End of Collapsible Widget -->

                                    <!-- Start of Collapsible Widget -->
                                    <div class="widget widget-collapsible">
                                        <h3 class="widget-title"><span>Brand</span></h3>
                                        <ul class="widget-body filter-items item-check mt-1 ml-4 collapsed" style="margin-bottom: 0px!important;padding:0px!important;">
                                            @foreach ($brands as $key => $brand)
                                                <li style="list-style: circle;">
                                                    <div
                                                        class="form-checkbox d-flex align-items-center justify-content-between mt-2">
                                                        <form class="brand-form1" id="brand-form{{ $key }}"
                                                            action="{{ URL::to('/shop/subcat/filterbyBrand') }}">
                                                            @csrf
                                                            <input type="hidden" name="sub_category_id"
                                                                id="sub_category_id"
                                                                value="{{ $subCategorySingle->id }}">
                                                            <input type="hidden" name="brand_id" id="brand_id"
                                                                value="{{ $brand->id }}">
                                                            {{-- <label id="brand-list"
                                                                onclick="document.getElementById('brand-form{{ $key }}').submit();">{{ $brand->brand_name }}</label> --}}
                                                            <label id="brand-list"
                                                                onclick="document.getElementById('brand-form{{ $key }}').submit();">
                                                                <img src="{{ URL::asset('root/upload/brands/small/'.$brand->logo) }}" style="border: 1px solid #e3e3e3;width:100px;" alt="">
                                                            </label>
                                                        </form>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    
                                    <!-- End of Collapsible Widget -->

                                    <!-- Start of Collapsible Widget -->
                                    <div class="widget widget-collapsible">
                                        <h3 class="widget-title"><span>Locations</span></h3>
                                        <ul class="widget-body filter-items item-check mt-1 ml-4">
                                            @foreach ($locations as $key => $location)
                                                <li style="list-style: circle;">
                                                    <div
                                                        class="form-checkbox d-flex align-items-center justify-content-between mt-2">
                                                        <form class="location-form1"
                                                            id="location-form{{ $key }}"
                                                            action="{{ URL::to('/shop/subcat/filterbyLocation') }}">
                                                            @csrf
                                                            <input type="hidden" name="sub_category_id"
                                                                id="sub_category_id"
                                                                value="{{ $subCategorySingle->id }}">
                                                            <input type="hidden" name="location_id" id="location_id"
                                                                value="{{ $location->id }}">
                                                            <label id="location-list"
                                                                onclick="document.getElementById('location-form{{ $key }}').submit();">{{ $location->name }}</label>
                                                        </form>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <!-- End of Collapsible Widget -->
                                </div>
                                <!-- End of Sidebar Content -->
                            </div>
                            <!-- End of Sidebar Content -->
                        </aside>
                        <!-- End of Shop Sidebar -->

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
                            @if ($singleCategory->img!=null)
                            <div class="shop-default-banner shop-boxed-banner banner d-flex align-items-center mb-6 br-xs"
                                style="background-image: url({{ URL::asset($singleCategory->img) }}); background-color: #FFC74E;">
                                <div class="banner-content">
                                    {{-- <h4 class="banner-subtitle font-weight-bold">Accessories Collection</h4> --}}
                                    <h3 class="banner-title text-white text-uppercase font-weight-bolder ls-10">{{ $singleCategory->name }}</h3>
                                    {{-- <a href="javascript:void(0);"
                                        class="btn btn-dark btn-rounded btn-icon-right">Discover Now<i
                                            class="w-icon-long-arrow-right"></i></a> --}}
                                </div>
                            </div>
                            @else
                            <div class="shop-default-banner shop-boxed-banner banner d-flex align-items-center mb-6 br-xs"
                                    style="background-image: url({{ URL::asset('website-assets/images/1200x300_dummy_image.png') }}); background-color: #FFC74E;">
                                    <div class="banner-content">
                                        {{-- <h4 class="banner-subtitle font-weight-bold">Accessories Collection</h4> --}}
                                        <h3 class="banner-title text-white text-uppercase font-weight-bolder ls-10">{{ $singleCategory->name }}</h3>
                                        {{-- <a href="javascript:void(0);"
                                            class="btn btn-dark btn-rounded btn-icon-right">Discover Now<i
                                                class="w-icon-long-arrow-right"></i></a> --}}
                                    </div>
                            </div>
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
                                                        <div style="position: relative; left: 0; top: 0;">
                                                            <img src="{{ URL::asset($value->product_image->url) }}" class="imagee"
                                                                alt="Product" />
                                                            <img src="{{ URL::asset('root/upload/logo/water.png') }}" class="water"
                                                                alt="Product" />
                                                            </div>
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
                                                        {!! Str::words($value->description, 7) !!}</div>
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
                                                    <div class="row">
                                                        <div class="col-7 text-left">
                                                            <div style="margin-top: -30px;">
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

                                                        <div class="col-5 text-right">
                                                            <a href="{{ URL::to('/add-to-wishlist/' . $value->id) }}"
                                                                title="Add To Wishlist" style="font-size: 10px;"><i
                                                                    class="w-icon-heart-full"></i>
                                                                Add To Wishlist
                                                            </a>
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
                                                                                    <div class="ratings-container"style="margin-left:80px;">
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
                                                                                    <div class="ratings-container"style="margin-left:80px;">
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
                                                    @else
                                                    <div class="row">
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
                    <!-- End of Shop Content -->
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
    <script src="{{ URL::asset('website-assets/js/scroll.js') }}"></script>
</body>

</html>