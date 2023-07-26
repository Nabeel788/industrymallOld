<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Wishlist</title>

    <meta name="keywords" content="Marketplace ecommerce responsive HTML5 Template" />
    <meta name="description" content="Wolmart is powerful marketplace &amp; ecommerce responsive Html5 Template.">
    <meta name="author" content="D-THEMES">

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
    <link rel="stylesheet" type="text/css"
        href="{{ URL::asset('website-assets/vendor/magnific-popup/magnific-popup.min.css') }}">

    <!-- Plugin CSS -->
    <link rel="stylesheet" type="text/css"
        href="{{ URL::asset('website-assets/vendor/magnific-popup/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('website-assets/vendor/swiper/swiper-bundle.min.css') }}">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('website-assets/css/style.min.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('website-assets/css/toastr.min.css') }}">
</head>

<body>
    <div class="page-wrapper">
        @include('components.header')
        <!-- Start of Main -->
        <main class="main wishlist-page">
            <!-- Start of Page Header -->
            <div class="page-header">
                <div class="container">
                    <h1 class="page-title mb-0">Wishlist</h1>
                </div>
            </div>
            <!-- End of Page Header -->

            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav mb-10">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="{{ URL::to('/') }}">Home</a></li>
                        <li>Wishlist</li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of PageContent -->
            <div class="page-content">
                <div class="container">
                    <h3 class="wishlist-title">My wishlist</h3>
                    <table class="shop-table wishlist-table">
                        <thead>
                            <tr>
                                <th class="product-name"><span>Product</span></th>
                                <th></th>
                                <th class="product-price"><span>Price</span></th>
                                <th class="product-stock-status"><span>Stock Status</span></th>
                                <th class="wishlist-action">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($wishlist_items as $value)
                                <tr>
                                    <td class="product-thumbnail">
                                        <div class="p-relative">
                                            <form action="{{ URL::to('/remove-wishlist-item/' . $value->product->id) }}"
                                                method="get">
                                                @csrf
                                                <a
                                                    href="{{ URL::to('/single-product/' . $value->product->id . '/' . $value->product->slug) }}">
                                                    <figure>
                                                        <img src="{{ URL::asset('root/upload/products/' . $value->product->product_image->image) }}"
                                                            alt="product" width="300" height="338">
                                                    </figure>
                                                </a>
                                                <button type="submit" class="btn btn-close"><i
                                                        class="fas fa-times"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                    <td class="product-name">
                                        <a href="{{ URL::to('/single-product/' . $value->product->id . '/' . $value->product->slug) }}"
                                            target="_blank">
                                            {{ $value->product->name }}
                                        </a>
                                    </td>
                                    <td class="product-price" align="center">
                                        <ins
                                            class="new-price">{{ $settings->currency . '' . $value->product->new_sale_price }}</ins>
                                    </td>
                                    <td class="product-stock-status" align="center">
                                        <span class="wishlist-in-stock">In Stock</span>
                                    </td>
                                    <td class="wishlist-action" align="center">
                                            <a href="{{ URL::to('/single-product/' . $value->product->id . '/' . $value->product->slug) }}"
                                                class="btn btn-outline btn-default btn-rounded btn-sm mb-2 mb-lg-0"
                                                target="_blank">
                                                View Product</a>
                                    </td>
                                </tr>
                            @empty
                            <tr>
                                <td colspan="5" align="center">
                                    <span style="color: red;">No Items in Wishlist</span>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <br><br><br>
                    <br><br><br>
                </div>
            </div>
            <!-- End of PageContent -->
        </main>
        <!-- End of Main -->

        @include('components.footer')
    </div>
    <!-- End of Page Wrapper -->

    @include('components.sticky-footer')

    <!-- Plugin JS File -->
    <script src="{{ URL::asset('website-assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/js/main.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/js/scroll.js') }}"></script>
    <script src="{{ URL::asset('website-assets/js/toastr.min.js') }}"></script>
    {!! Toastr::message() !!}
</body>


</html>
