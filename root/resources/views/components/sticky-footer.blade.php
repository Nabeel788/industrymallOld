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
<!-- Start of Sticky Footer -->
<div class="sticky-footer sticky-content fix-bottom" id="sticky-footer-bar">
    <a href="{{ URL::to('/') }}" class="sticky-link active">
        <i class="w-icon-home"></i>
        <p>Home</p>
    </a>
    <a href="{{ URL::to('my-account') }}" class="sticky-link">
        <i class="w-icon-account"></i>
        <p>Account</p>
    </a>
    <div class="cart-dropdown dir-up">
        <a href="{{ URL::to('cart') }}" class="sticky-link">
            <i class="fa fa-shopping-cart"></i>
            <p>Cart</p>
        </a>
        <!-- End of Dropdown Box -->
    </div>

</div>
<!-- End of Sticky Footer -->

<!-- Start of Scroll Top -->
<a id="scroll-top" class="scroll-top" href="#top" title="Top" role="button"> <i class="fa fa-angle-up"></i> <svg
        version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70">
        <circle id="progress-indicator" fill="transparent" stroke="#000000" stroke-miterlimit="10" cx="35" cy="35"
            r="34" style="stroke-dasharray: 16.4198, 400;"></circle>
    </svg> </a>
<!-- End of Scroll Top -->

<!-- Start of Mobile Menu -->
<div class="mobile-menu-wrapper">
    <div class="mobile-menu-overlay"></div>
    <!-- End of .mobile-menu-overlay -->

    <a href="#" class="mobile-menu-close"><i class="close-icon"></i></a>
    <!-- End of .mobile-menu-close -->

    <div class="mobile-menu-container scrollable">
        <form action="#" method="get" class="input-wrapper">
            <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Search"
                required />
            <button class="btn btn-search" type="submit">
                <i class="w-icon-search"></i>
            </button>
        </form>
        <!-- End of Search Form -->
        <div class="tab">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a href="#main-menu" class="nav-link active">Main Menu</a>
                </li>
                <li class="nav-item">
                    <a href="#categories" class="nav-link">Categories</a>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane active" id="main-menu">
                <ul class="mobile-menu">
                    <li><a href="{{ URL::to('/') }}">Home</a></li>
                    <li><a href="{{ URL::to('/about-us') }}">About</a></li>
                    <li><a href="{{ URL::to('/shop-by-brand') }}">Shop By Brand</a></li>
                    <li><a href="{{ URL::to('/events') }}">Events</a></li>
                    <li><a href="{{ URL::to('/services') }}">Services</a></li>
                    <li><a href="{{ URL::to('/contact-us') }}">Contact</a></li>
                    @if (Auth::User())
                        <li>
                            <form action="{{ URL::to('/logout') }}" method="post" id="logout-form">
                                @csrf

                                <a class="login" onclick="document.getElementById('logout-form').submit()"
                                    style="cursor: pointer;">Logout</a>
                            </form>
                        </li>
                    @endif
                </ul>
            </div>
            <div class="tab-pane" id="categories">
                <ul class="mobile-menu">
                    @foreach ($menus as $menuKey => $menu)
                        <li>
                            <a href="javscript:void(0)">
                                <i class="{{ $menu->icon }}"></i>{{ $menu->name }}
                            </a>
                            <ul>
                                @foreach ($menu->categories as $category)
                                    <li>
                                        <a href="javscript:void(0)">{{ $category->name }}</a>
                                        <ul>
                                            @foreach ($category->subcategories as $subcategories)
                                                <li><a
                                                        href="{{ URL::to('/shop/subcat/' . $subcategories->id . '/' . $subcategories->slug) }}">{{ $subcategories->name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End of Mobile Menu -->