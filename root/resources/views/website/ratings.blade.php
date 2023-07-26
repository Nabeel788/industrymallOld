<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Ratings</title>

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
    <link rel="stylesheet" type="text/css"
        href="{{ URL::asset('website-assets/vendor/magnific-popup/magnific-popup.min.css') }}">

    <!-- Plugin CSS -->
    <link rel="stylesheet" type="text/css"
        href="{{ URL::asset('website-assets/vendor/magnific-popup/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('website-assets/vendor/swiper/swiper-bundle.min.css') }}">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('website-assets/css/style.min.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('website-assets/css/toastr.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style>
        .text-warning{
            color: #FFB639!important;
        }

        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
        #container .edit {
            position: relative;
            right: 10px;
            top: 5px;
            font-size: 12px;
            color: #666;
            font-weight: 500;
            cursor: pointer;
        }

        #container .edit:hover {
            text-decoration: underline;
        }

        #container .star-widget input {
            display: none;
        }

        .star-widget label {
            font-size: 15px;
            color: #444;
            padding: 2px;
            float: right;
            transition: all 0.2s ease;
        }

        input:not(:checked)~label:hover,
        input:not(:checked)~label:hover~label {
            color: #fd4;
        }

        input:checked~label {
            color: #fd4;
        }

        #container form {
            display: none;
        }

        input:checked~form {
            display: block;
        }
        .star-widget{
            margin: auto;
        }
        #rating-form{
            margin-left: -150px;
            margin-right: 40px;
        }
        #submit-rating-btn{
            float: right;
            margin-top: -15px;
            margin-right: 20px;
        }
        @media only screen and (max-width: 892px) and (min-width: 768px) {
            .star-widget{
                position: relative;
                left: 20px;
            }
            #submit-rating-btn{
                position: relative;
                left: 20px;
            }
        }

        @media only screen and (max-width: 767px) and (min-width: 768px) {
            #rating-form{
                float: left;
                margin-left: -150px;
                margin-right: 40px;
            }
        }
        /*
        @media only screen and (max-width: 768px) {
            #rating-form{
                margin-left: -10px;
            }
        } */
    </style>
</head>

<body>
    <div class="page-wrapper">
        @include('components.header')
        <main class="main wishlist-page">
            <div class="page-header">
                <div class="container">
                    <h1 class="page-title mb-0">Ratings</h1>
                </div>
            </div>
            <nav class="breadcrumb-nav mb-10">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="{{ URL::to('/') }}">Home</a></li>
                        <li>Account</li>
                        <li>Ratings</li>
                    </ul>
                </div>
            </nav>

            <div class="page-content">
                <div class="container">
                    <h3 class="wishlist-title">Ratings</h3>
                    <table class="shop-table wishlist-table">
                        <thead>
                            <tr>
                                <th class="product-name"><span>Product</span></th>
                                <th class="product-image"><span>Image</span></th>
                                <th class="product-price"><span>Price</span></th>
                                <th class="product-stock-ratings"><span>Rating</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($orderProductsList as $value)
                                <tr align="center">
                                    <td><b style="color: black;">{{ $value->products->name }}</b></td>
                                    <td>
                                        <figure>
                                            <img src="{{ URL::asset('root/upload/products/' . $value->product_image->image) }}"
                                                alt="product" width="300" height="338">
                                        </figure>
                                    </td>
                                    <td>{{ number_format($value->price, 2) }}</td>
                                    <td align="center">
                                        <form action="{{ URL::to('/submit-rating') }}" id="rating-form" method="post">
                                            @csrf
                                            <input type="hidden" name="id" id="id" value="{{ $value->id }}">
                                            <div class="container" id="container">
                                                <div class="star-widget">
                                                    <input type="radio" name="rate" id="rate-5">
                                                    <label for="rate-5" class="fas fa-star"></label>
                                                    <input type="radio" name="rate" id="rate-4">
                                                    <label for="rate-4" class="fas fa-star"></label>
                                                    <input type="radio" name="rate" id="rate-3">
                                                    <label for="rate-3" class="fas fa-star"></label>
                                                    <input type="radio" name="rate" id="rate-2">
                                                    <label for="rate-2" class="fas fa-star"></label>
                                                    <input type="radio" name="rate" id="rate-1">
                                                    <label for="rate-1" class="fas fa-star"></label>
                                                </div>
                                            </div>
                                            <br><br>

                                            <button type="submit" class="btn btn-primary" id="submit-rating-btn">Submit</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" align="center">
                                        <span style="color: red;">No Items in Orders List</span>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <br><br><br>
                    <br><br><br>
                </div>
            </div>
        </main>

        @include('components.footer')
    </div>

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
