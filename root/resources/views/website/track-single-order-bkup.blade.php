<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Industry Mall | Track Order</title>

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

    <!-- Plugin CSS -->
    <link rel="stylesheet" type="text/css"
        href="{{ URL::asset('website-assets/vendor/magnific-popup/magnific-popup.min.css') }}">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('website-assets/css/style.min.css') }}">
    <!-- Trackorder timeline custom css -->
    <link rel="stylesheet" href="{{ URL::asset('website-assets/css/timeline.css') }}">
</head>

<body>
    <div class="page-wrapper">
        <h1 class="d-none">Track Order</h1>

        @include('components.header')

        <!-- Start of Main -->
        <main class="main cart">
            <!-- Start of Page Header -->
            <div class="page-header" style="background-color: #eee">
                <div class="container">
                    <h1 class="page-title mb-0">Track Order</h1>
                </div>
            </div>
            <!-- End of Page Header -->

            <!-- Start of PageContent -->
            @if (count($orderTracker)>0)
            <center>
                <div class="container" style="margin-top: -150px;margin-bottom:200px;">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div style="display:inline-block;width:100%;">
                                <ul class="timeline timeline-horizontal">
                                    @foreach ($orderTracker as $key=>$value)
                                        @if ($order->status == $value->status)
                                        <li class="timeline-item">
                                            <div class="timeline-badge primary"
                                                style="background: #999999!important;border:10px solid #0070BB;">
                                                <p style="position: relative;top:25px;color:white;">
                                                    @if ($key==0)
                                                        <i class="fa fa-truck fa-2x"></i>
                                                    @elseif ($key==1)
                                                        <i class="fa fa-home fa-2x"></i>
                                                    @elseif ($key==2)
                                                        <i class="fa fa-ship fa-2x"></i>
                                                    @elseif ($key==3)
                                                        <i class="fa fa-truck fa-2x"></i>
                                                    @endif
                                                </p>
                                            </div>
                                            {{-- <p><span id="lower-text" style="margin-left: -30px;font-size:12px;font-weight:normal">Wed, Jun 29, 2022 | 07:00 pm</span></p> --}}
                                            <p><span id="lower-text" style="margin-left: -20px;font-size:12px;font-weight:normal">{{ \Carbon\Carbon::parse($value->datetime)->format('D, M d | h:i A') }}</span></p>
                                            <p style="position: relative;top:20px;"><span id="lower-text" style="margin-left: -35px;font-size:12px;font-weight:normal;color:black;">{{ $value->direction }}</span></p>
                                            <p style="position: relative;top:40px;"><span id="lower-text" style="margin-left: 10px;font-size:12px;font-weight:normal;">{{ $value->country }}</span></p>
                                        </li>
                                        @else
                                        <li class="timeline-item">
                                            <div class="timeline-badge primary" style="background: #999999!important;border:10px solid #E6E6E6;">
                                                <p style="position: relative;top:25px;color:white;">
                                                    @if ($key==0)
                                                        <i class="fa fa-truck fa-2x"></i>
                                                    @elseif ($key==1)
                                                        <i class="fa fa-home fa-2x"></i>
                                                    @elseif ($key==2)
                                                        <i class="fa fa-ship fa-2x"></i>
                                                    @elseif ($key==3)
                                                        <i class="fa fa-truck fa-2x"></i>
                                                    @endif
                                                </p>
                                            </div>
                                            <p><span id="lower-text" style="margin-left: -20px;font-size:12px;font-weight:normal">{{ \Carbon\Carbon::parse($value->datetime)->format('D, M d | h:i A') }}</span></p>
                                            <p style="position: relative;top:20px;"><span id="lower-text" style="margin-left: -35px;font-size:12px;font-weight:normal;color:black;">{{ $value->direction }}</span></p>
                                            <p style="position: relative;top:40px;"><span id="lower-text" style="margin-left: 10px;font-size:12px;font-weight:normal;">{{ $value->country }}</span></p>
                                        </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </center> 
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4 style="margin-top: -130px;text-align:left;">Tracker ID: {{ $order->id }}</h4>
                        <h4 style="margin-top: -20px;text-align:left;">Estimated Date: {{ date('d/m/Y',strtotime($order->shipping)) }}</h4>
                    </div>
                </div>
            </div>
            <hr style="margin-top: -70px;height:2px;background: black;">
            @endif
            <div class="product-details-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <p style="font-size: 20px;color:black;">Buyer Contact Detail:</p>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <p style="font-size: 20px;color:black;">Product and Price Detail:</p>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12" style="height: 1px;background: black;margin-top:-15px;"></div>
                        <div class="col-lg-4 col-md-4 col-sm-12" style="margin-right:0px;padding-right:0px;">
                            <div>
                                <h5>Address:</h5>
                                <p style="margin-top: -10px;border-bottom:1px solid gainsboro;"><i class="w-icon-map-marker"></i> {{ $order->address_01 }}</p>
                            </div>
                            <div>
                                <h5>Buyer Name:</h5>
                                <p style="margin-top: -10px;"> {{ $order->first_name.' '.$order->last_name }}</p>
                            </div>
                            <div>
                                <h5>Company Name:</h5>
                                <p style="margin-top: -10px;">
                                    @if ($order->company==null)
                                        None
                                    @else
                                        {{ $order->company }}
                                    @endif 
                                </p>
                            </div>
                            <div>
                                <h5>PTCL NUMBER</h5>
                                <p style="margin-top: -10px;"> {{ $order->phone1 }}</p>
                            </div>
                            <div>
                                <h5>MOBILE NUMBER</h5>
                                <p style="margin-top: -10px;">{{ $order->phone2 }}</p>
                            </div>
                            <div>
                                <h5>EMAIL ADDRESS:</h5>
                                <p style="margin-top: -10px;">{{ $order->email }}</p>
                            </div>
                            <div>
                                <h5>WEBSITE:</h5>
                                <p style="margin-top: -10px;">www.industrymall.net</p>
                            </div>
                            <div>
                                <h5>COUNTRY</h5>
                                <p style="margin-top: -10px;">{{ $order->country }}</p>
                            </div>
                            <div>
                                <h5>CITY:</h5>
                                <p style="margin-top: -10px;">{{ $order->city }}</p>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-12" style="border-left: 1px solid gainsboro;">
                            @foreach ($orderDetails as $value)
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <p style="font-size: 25px;">{{ $value->products->model_no }}</p>
                                    <p style="font-size: 15px;margin-top:-30px;">{{ $value->products->name }}</p>
                                    <p style="font-size: 16px;color:black;font-weight:bold;"><i class="w-icon-map-marker"></i> Delivery Location</p>
                                    <p style="font-size: 15px;margin-top:-30px;margin-left:20px;">{{ $value->locatedin }}</p>
                                    <p style="font-size: 16px;color:black;font-weight:bold;margin-top:-25px;"><i class="w-icon-fax"></i> Condition</p>
                                    <p style="font-size: 15px;margin-top:-30px;margin-left:20px;">{{ $value->conditionType }}</p>
                                    <p style="font-size: 16px;color:black;font-weight:bold;margin-top:-25px;"><i class="w-icon-star-full"></i> Brand</p>
                                    <p style="font-size: 15px;margin-top:-20px;margin-left:20px;"><img src="{{ URL::asset('root/upload/brands/small/'.$value->brand_logo) }}" style="width:80px;" alt=""></p>
                                    <p style="font-size: 16px;color:black;margin-top:-5px;"><b>SKU:</b> {{ $value->products->sku }}</p>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <img src="{{ $value->image }}" style="float: right;width:300px;clear:both;" alt="">
                                    <div class="row" style="clear: both;border-bottom:1px solid black;font-size:20px;">
                                        <div class="col-6 text-left">
                                            Regular Price:
                                        </div>
                                        <div class="col-6 text-right">
                                            <del>&emsp;&emsp;{{ number_format($value->amount_old,2) }}&emsp;&emsp;</del>
                                        </div>
                                    </div>
                                    <div class="row" style="clear: both;border-bottom:1px solid black;font-size:20px;">
                                        <div class="col-6 text-left">
                                            Price:
                                        </div>
                                        <div class="col-6 text-right">
                                            <h4 style="margin-top: 5px;">&emsp;&emsp;{{ number_format($value->amount_new,2) }}&emsp;&emsp;</h4>
                                            <p style="margin-top: -20px;font-size:12px;margin-bottom:0px;">You saved: {{ number_format($value->amount_old-$value->amount_new,2) }} USD (22%)</p>
                                        </div>
                                    </div>
                                    <div class="row" style="clear: both;border-bottom:1px solid black;font-size:20px;">
                                        <div class="col-6 text-left">
                                            Shipping Charges:
                                        </div>
                                        <div class="col-6 text-right">
                                            <h4 style="margin-bottom: -5px;margin-top:5px;">&emsp;&emsp;{{ number_format($value->ship_charges,2) }}&emsp;&emsp;</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr style="height:2px;background: black;">
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br>
            <br><br><br>
            <br><br><br>
            <!-- End of PageContent -->
        </main>
        <!-- End of Main -->
        @include('components.footer')
    </div>
    @include('components.sticky-footer')

    <!-- Plugin JS File -->
    <script src="{{ URL::asset('website-assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/vendor/sticky/sticky.js') }}"></script>
    <script src="{{ URL::asset('website-assets/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/js/main.min.js') }}"></script>
</body>

</html>
