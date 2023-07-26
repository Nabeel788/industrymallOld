@php

use App\Models\Menu;

$menus = Menu::with([
    'categories' => function ($query) {
        $query->with('subcategories');
    },
])->OrderBy('id', 'asc')->get();

use Cart as Cart;
$tCartQty = Cart::getContent()->count();

use App\Models\Settings;
$settings = Settings::first();

@endphp

<style>
@media only screen and (max-width: 970px) {
    .header-top {
        position: fixed;
        z-index: 1000;
    }

    #login {
        margin-left: -10px;
    }
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<!-- Start of Header -->
<header class="header">
    <div class="header-top">
        <div class="container">
            <div class="header-left">
                <p class="welcome-msg">Welcome to Industry MALL</p>
            </div>
            <div class="header-right">
                {{-- <div class="dropdown">
                    <a href="#currency">USD</a>
                    <div class="dropdown-box">
                        <a href="#USD">USD</a>
                        <a href="#EUR">EUR</a>
                    </div>
                </div> --}}
                <!-- End of DropDown Menu -->

                {{-- <div class="dropdown">
                    <a href="#language"><img src="{{ URL::asset('website-assets/images/flags/eng.png') }}"
                            alt="ENG Flag" width="14" height="8" class="dropdown-image" /> ENG</a>
                    <div class="dropdown-box">
                        <a href="#ENG">
                            <img src="{{ URL::asset('website-assets/images/flags/eng.png') }}" alt="ENG Flag"
                                width="14" height="8" class="dropdown-image" />
                            ENG
                        </a>
                        <a href="#FRA">
                            <img src="{{ URL::asset('website-assets/images/flags/fra.png') }}" alt="FRA Flag"
                                width="14" height="8" class="dropdown-image" />
                            FRA
                        </a>
                    </div>
                </div> --}}
                <!-- End of Dropdown Menu -->
                {{-- <span class="divider d-lg-show"></span> --}}
                <a href="{{ URL::to('/blogs') }}" class="d-lg-show">Blog</a>
                <a href="{{ URL::to('/contact-us') }}" class="d-lg-show">Contact Us</a>
                <a href="{{ URL::to('/my-account') }}" class="d-lg-show">My Account</a>
                @if (Auth::User())
                <form action="{{ URL::to('/logout') }}" method="post" id="logout-form">
                    @csrf
                    <a class="login" onclick="document.getElementById('logout-form').submit()" style="cursor: pointer;"><i
                        class="w-icon-account"></i>Logout</a>
                </form>
                @else
                <a href="{{ URL::to('/login') }}" class="login"><i
                    class="w-icon-account"></i>Sign In</a>
                <span class="delimiter d-lg-show">/</span>
                <a href="{{ URL::to('/register') }}"
                    class="ml-0 login">Register</a>
                @endif
            </div>
        </div>
    </div>
    <!-- End of Header Top -->

    <div class="header-middle">
        <div class="container">
            <div class="header-left mr-md-4">
                <a href="#" class="mobile-menu-toggle  w-icon-hamburger" aria-label="menu-toggle">
                </a>
                <a href="{{ URL::to('/') }}" class="logo ml-lg-0">
                    <img src="{{ URL::asset('root/upload/logo/' . $settings->logo) }}" alt="logo" width="144"
                        height="45" />
                </a>
                <form method="get" role="search"
                    class="header-search hs-expanded hs-round d-none d-md-flex input-wrapper">
                    @csrf
                    <div>
                        <input type="text" class="form-control" name="name" id="name" value=""
                            placeholder="Search in..." required />
                        <div id="dragsearch" style="position: sticky;"></div>
                    </div>
                </form>
                <script>
                $(document).ready(function() {

                    $('#name').keyup(function() {
                        var query = $(this).val();
                        if (query != '') {
                            var _token = $('input[name="_token"]').val();
                            $.ajax({
                                url: "{{ URL::to('search-product') }}",
                                method: "get",
                                data: {
                                    query: query,
                                    _token: _token
                                },
                                success: function(data) {
                                    $('#dragsearch').fadeIn();
                                    $('#dragsearch').html(data);
                                }
                            });
                        }
                    });

                    $(document).on('click', 'li', function() {
                        $('#name').val($(this).text());
                        $('#dragsearch').fadeOut();
                    });

                });
                </script>
               
               
            </div>
            <div class="header-right ml-4">
                <div class="header-call d-xs-show d-lg-flex align-items-center">
                    <a href="tel:#" class="fa fa-phone"></a>
                    <div class="call-info d-lg-show">
                        <h4 class="chat font-weight-normal font-size-md text-normal ls-normal text-light mb-0">
                            <a href="mailto:#" class="text-capitalize">Live Chat</a> or :
                        </h4>
                        <a href="tel:#" class="phone-number font-weight-bolder ls-50">0(800)123-456</a>
                    </div>
                </div>
                <a class="wishlist label-down link d-xs-show" href="{{ URL::to('/wishlist') }}">
                    <i class="w-icon-heart"></i>
                    <span class="wishlist-label d-lg-show">Wishlist</span>
                </a>
                {{-- <a class="compare label-down link d-xs-show" href="compare.html">
                    <i class="w-icon-compare"></i>
                    <span class="compare-label d-lg-show">Compare</span>
                </a> --}}
                <div class="dropdown cart-dropdown cart-offcanvas mr-0 mr-lg-2">
                    <div class="cart-overlay"></div>
                    <a href="{{ URL::to('/cart') }}" onclick="location.href='{{ URL::to('/cart') }}'" class="cart-toggle label-down link">
                        <i class="fa fa-shopping-cart">
                            <span class="cart-count">{{ $tCartQty }}</span>
                        </i>
                        <span class="cart-label">Cart</span>
                    </a>
                    {{-- <div class="dropdown-box">
                        <div class="cart-header">
                            <span>Shopping Cart</span>
                            <a href="#" class="btn-close">Close<i class="w-icon-long-arrow-right"></i></a>
                        </div>

                        <div class="products">
                            <div class="product product-cart">
                                <div class="product-detail">
                                    <a href="product-default.html" class="product-name">Beige knitted
                                        elas<br>tic
                                        runner shoes</a>
                                    <div class="price-box">
                                        <span class="product-quantity">1</span>
                                        <span class="product-price">$25.68</span>
                                    </div>
                                </div>
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{ URL::asset('website-assets/images/cart/product-1.jpg') }}"
                                            alt="product" height="84" width="94" />
                                    </a>
                                </figure>
                                <button class="btn btn-link btn-close" aria-label="button">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>

                            <div class="product product-cart">
                                <div class="product-detail">
                                    <a href="product-default.html" class="product-name">Blue utility
                                        pina<br>fore
                                        denim dress</a>
                                    <div class="price-box">
                                        <span class="product-quantity">1</span>
                                        <span class="product-price">$32.99</span>
                                    </div>
                                </div>
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="{{ URL::asset('website-assets/images/cart/product-2.jpg') }}"
                                            alt="product" width="84" height="94" />
                                    </a>
                                </figure>
                                <button class="btn btn-link btn-close" aria-label="button">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>

                        <div class="cart-total">
                            <label>Subtotal:</label>
                            <span class="price">$58.67</span>
                        </div>

                        <div class="cart-action">
                            <a href="cart.html" class="btn btn-dark btn-outline btn-rounded">View Cart</a>
                            <a href="checkout.html" class="btn btn-primary  btn-rounded">Checkout</a>
                        </div>
                    </div> --}}
                    <!-- End of Dropdown Box -->
                </div>
            </div>
        </div>
    </div>
    <!-- End of Header Middle -->

    <div class="header-bottom sticky-content fix-top sticky-header">
        <div class="container">
            <div class="inner-wrap">
                <div class="header-left">
                    <div class="dropdown category-dropdown has-border" data-visible="true">
                        <a href="#" class="category-toggle" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="true" data-display="static"
                            title="Browse Categories">
                            <i class="w-icon-category"></i>
                            <span>Browse Categories</span>
                        </a>

                        <div class="dropdown-box" style="width:100%;">
                            <ul class="menu vertical-menu category-menu">
                                @php
                                    $margnTop = 60;
                                @endphp
                                @foreach ($menus as $menuKey => $menu)
                                    @if ($menuKey==0)
                                        @php $margnTop = 60; @endphp
                                    @else
                                        @php $margnTop += 40; @endphp
                                    @endif

                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="{!! $menu->icon !!}"></i>{{ $menu->name }}
                                        </a>

                                        <ul class="megamenu" style="width:365%;height:450px;margin-top:-{{ $margnTop }}px!important;background-image: url({{ URL::asset('root/upload/menu/'.$menu->image) }});background-repeat:no-repeat;">
                                            @foreach ($menu->categories as $category)
                                                <li>
                                                    <h4 class="menu-title" style="height: 30px;">{{ $category->name }}</h4>
                                                    <hr class="divider">
                                                    <ul>
                                                        @foreach ($category->subcategories as $subcategories)
                                                            <li style="font-size:13px;">
                                                                <a href="{{ URL::to('/shop/subcat/' . $subcategories->id . '/' . $subcategories->slug) }}">{{ $subcategories->name }}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            @endforeach
                                            {{-- <li>
                                                <div class="banner-fixed menu-banner menu-banner2">
                                                    <figure>
                                                        <img src="{{ URL::asset('root/upload/menu/'.$menu->image) }}"
                                                            alt="Menu Banner" width="235" height="347" />
                                                    </figure>
                                                    <div class="banner-content">
                                                        <div class="banner-price-info mb-1 ls-normal">Get up to
                                                            <strong
                                                                class="text-primary text-uppercase">20%Off</strong>
                                                        </div>
                                                        <h3 class="banner-title ls-normal">Hot Sales</h3>
                                                        <a href="shop-banner-sidebar.html"
                                                            class="btn btn-dark btn-sm btn-link btn-slide-right btn-icon-right">
                                                            Shop Now<i class="w-icon-long-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li> --}}
                                        </ul>

                                    </li>
                                @endforeach
                                {{-- <li class="d-none">
                                    <a href="shop-fullwidth-banner.html">
                                        <i class="w-icon-home"></i>Home & Garden
                                    </a>
                                    <ul class="megamenu">
                                        <li>
                                            <h4 class="menu-title">Bedroom</h4>
                                            <hr class="divider">
                                            <ul>
                                                <li><a href="shop-fullwidth-banner.html">Beds, Frames &
                                                        Bases</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Dressers</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Nightstands</a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.html">Kid's Beds &
                                                        Headboards</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Armoires</a></li>
                                            </ul>

                                            <h4 class="menu-title mt-1">Living Room</h4>
                                            <hr class="divider">
                                            <ul>
                                                <li><a href="shop-fullwidth-banner.html">Coffee Tables</a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.html">Chairs</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Tables</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Futons & Sofa
                                                        Beds</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Cabinets &
                                                        Chests</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <h4 class="menu-title">Office</h4>
                                            <hr class="divider">
                                            <ul>
                                                <li><a href="shop-fullwidth-banner.html">Office Chairs</a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.html">Desks</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Bookcases</a></li>
                                                <li><a href="shop-fullwidth-banner.html">File Cabinets</a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.html">Breakroom
                                                        Tables</a></li>
                                            </ul>

                                            <h4 class="menu-title mt-1">Kitchen & Dining</h4>
                                            <hr class="divider">
                                            <ul>
                                                <li><a href="shop-fullwidth-banner.html">Dining Sets</a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.html">Kitchen Storage
                                                        Cabinets</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Bashers Racks</a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.html">Dining Chairs</a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.html">Dining Room
                                                        Tables</a></li>
                                                <li><a href="shop-fullwidth-banner.html">Bar Stools</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="menu-banner banner-fixed menu-banner3">
                                                <figure>
                                                    <img src="{{ URL::asset('website/assets/images/menu/banner-3.jpg') }}"
                                                        alt="Menu Banner" width="235" height="461" />
                                                </figure>
                                                <div class="banner-content">
                                                    <h4 class="banner-subtitle font-weight-normal text-white mb-1">
                                                        Restroom</h4>
                                                    <h3 class="banner-title font-weight-bolder text-white ls-normal">
                                                        Furniture Sale</h3>
                                                    <div class="banner-price-info text-white font-weight-normal ls-25">
                                                        Up to <span
                                                            class="text-secondary text-uppercase font-weight-bold">25%
                                                            Off</span></div>
                                                    <a href="shop-banner-sidebar.html"
                                                        class="btn btn-white btn-link btn-sm btn-slide-right btn-icon-right">
                                                        Shop Now<i class="w-icon-long-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                    <nav class="main-nav">
                        <ul class="menu active-underline">
                            <li><a href="{{ URL::to('/') }}">Home</a></li>
                            <li><a href="{{ URL::to('/about-us') }}">About</a></li>
                            <li><a href="{{ URL::to('/shop-by-brand') }}">Shop By Brand</a></li>
                            <li><a href="{{ URL::to('/events') }}">Events</a></li>
                            <li><a href="{{ URL::to('/services') }}">Services</a></li>
                            <li><a href="{{ URL::to('/blogs') }}">blogs</a></li>
                            <li><a href="{{ URL::to('/contact-us') }}">Contact</a></li>
                            <li><a href="{{ URL::to('/trainings') }}">Training</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="header-right">
                    <a href="{{ URL::to('/track-order') }}" class="d-xl-show"><i class="w-icon-map-marker mr-1"></i>Track Order</a>
                    {{-- <a href="#"><i class="w-icon-sale"></i>Daily Deals</a> --}}
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End of Header -->