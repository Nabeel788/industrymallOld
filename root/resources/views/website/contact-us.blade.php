<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Contact US</title>

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
    <link rel="stylesheet" href="{{ URL::asset('website-assets/vendor/swiper/swiper-bundle.min.css') }}">

    <!-- Plugin CSS -->
    <link rel="stylesheet" type="text/css"
        href="{{ URL::asset('website-assets/vendor/magnific-popup/magnific-popup.min.css') }}">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('website-assets/css/style.min.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('website-assets/css/contact.css') }}">
</head>

<body>
    <div class="page-wrapper">

        @include('components.header')

        <!-- Start of Main -->
        <main class="main">
            <!-- Start of Page Header -->
            <div class="page-header">
                <div class="container">
                    <h1 class="page-title mb-0">Contact Us</h1>
                </div>
            </div>
            <!-- End of Page Header -->

            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav mb-10 pb-1">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="{{ URL::to('/') }}">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of PageContent -->
            <div class="page-content contact-us">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            @if(Session::has('flash_message'))
                            <div class="alert alert-icon alert-primary alert-bg alert-inline ">
                                <h4 class="alert-title">
                                    <i class="w-icon-cog"></i>Success!!!</h4>  {{ Session::get('flash_message') }}
                            </div>
                            @endif
                            @if(Session::has('failure_message'))
                            <div class="alert alert-icon alert-error alert-bg alert-inline ">
                                <h4 class="alert-title">
                                    <i class="w-icon-times-circle"></i>Oh snap!</h4> {{ Session::get('failure_message') }}
                            </div>
                            @endif
                        </div>
                        <div class="col-lg-9 col-md-12 col-sm-12">
                            <form action="{{ URL::to('sendContactMessage') }}" method="post" class="contact-form">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 text-left">
                                        <h3>Contact Us</h3>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 text-right">
                                        <span class="required-title"><b>* Required</b></span>
                                    </div>
                                </div>
                                <hr class="hr-1">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
                                        <label for="first_name" class="label-text">First Name:<span class="text-red">*</span></label>
                                        <input type="text" name="first_name" id="first_name" class="form-control @error('first_name') is-invalid @enderror" required>
                                        @error('first_name')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
                                        <label for="last_name" class="label-text">Last Name:<span class="text-red">*</span></label>
                                        <input type="text" name="last_name" id="last_name" class="form-control @error('last_name') is-invalid @enderror" required>
                                        @error('last_name')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
                                        <label for="job_title" class="label-text">Job Title:<span class="text-red">*</span></label>
                                        <input type="text" name="job_title" id="job_title" class="form-control @error('job_title') is-invalid @enderror" required>
                                        @error('job_title')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
                                        <label for="job_function" class="label-text">Job Function:<span class="text-red">*</span></label>
                                        <select name="job_function" id="job_function" class="form-control @error('job_function') is-invalid @enderror" required>
                                            <option value="" selected>0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                        @error('job_function')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
                                        <label for="company" class="label-text">Company Name:<span class="text-red">*</span></label>
                                        <input type="text" name="company" id="company" class="form-control @error('company') is-invalid @enderror" required>
                                        @error('company')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
                                        <label for="industry" class="label-text">Industry:<span class="text-red">*</span></label>
                                        <select name="industry" id="industry" class="form-control @error('industry') is-invalid @enderror" required>
                                            <option value="" selected>0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                        @error('industry')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
                                        <label for="email" class="label-text">Email Address:<span class="text-red">*</span></label>
                                        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" required>
                                        @error('email')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
                                        <label for="phoneno" class="label-text">Phone Number:<span class="text-red">*</span></label>
                                        <input type="text" name="phoneno" id="phoneno" class="form-control @error('phoneno') is-invalid @enderror" required>
                                        @error('phoneno')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
                                        <label for="city" class="label-text">City:<span class="text-red">*</span></label>
                                        <input type="text" name="city" id="city" class="form-control @error('city') is-invalid @enderror" required>
                                        @error('city')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
                                        <label for="state" class="label-text">State:<span class="text-red">*</span></label>
                                        <select name="state" id="state" class="form-control @error('state') is-invalid @enderror" required>
                                            <option value="" selected>0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                        @error('state')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
                                        <label for="subject" class="label-text">Subject:<span class="text-red">*</span></label>
                                        <input type="text" name="subject" id="subject" class="form-control @error('subject') is-invalid @enderror" required>
                                        @error('subject')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
                                        <label for="message" class="label-text">General Message:<span class="text-red">*</span></label>
                                        <input type="text" name="message" id="message" class="form-control @error('message') is-invalid @enderror" required>
                                        @error('message')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 mt-3 text-right">
                                        <input type="submit" class="btn btn-primary form-submit-btn" value="Submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12">
                            <div class="customer-support">
                                <h5>Customer Support / Price & Availability Inquiries</h5>
                                <div style="height: .5px;background-color:black;margin-top:-10px;margin-bottom:10px;">&emsp;</div>
                                <table class="table" id="customer-support-timing-table">
                                    <tbody>
                                        <tr>
                                            <td>Monday:</td>
                                            <td>8 am-5 pm CST</td>
                                        </tr>
                                        <tr>
                                            <td>Tuesday:</td>
                                            <td>8 am-5 pm CST</td>
                                        </tr>
                                        <tr>
                                            <td>Wednesday:</td>
                                            <td>8 am-5 pm CST</td>
                                        </tr>
                                        <tr>
                                            <td>Thursday:</td>
                                            <td>8 am-5 pm CST</td>
                                        </tr>
                                        <tr>
                                            <td>Friday:</td>
                                            <td>8 am-5 pm CST</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">ecommerceorders@smcelectric.com</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="technical-support">
                                <h5>Rockwell Technical Support Services</h5>
                                <div style="height: .5px;background-color:black;margin-top:-10px;margin-bottom:10px;">&emsp;</div>
                                <table class="table" id="technical-support-timing-table">
                                    <tbody>
                                        <tr>
                                            <td>Monday:</td>
                                            <td>8 am-5 pm CST</td>
                                        </tr>
                                        <tr>
                                            <td>Tuesday:</td>
                                            <td>8 am-5 pm CST</td>
                                        </tr>
                                        <tr>
                                            <td>Wednesday:</td>
                                            <td>8 am-5 pm CST</td>
                                        </tr>
                                        <tr>
                                            <td>Thursday:</td>
                                            <td>8 am-5 pm CST</td>
                                        </tr>
                                        <tr>
                                            <td>Friday:</td>
                                            <td>8 am-5 pm CST</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="location-support">
                                <h5>Contact Your Local Branch</h5>
                                <div style="height: .5px;background-color:black;margin-top:-10px;margin-bottom:30px;">&emsp;</div>
                                <button class="btn btn-primary btn-block" onclick="showLocation()">Find a Location</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="container mt-10">
                    <div class="d-none" id="map" style="border: 1px solid #eee;">
                        {!! $settings->map !!}
                    </div>
                </div> --}}
                
            </div>
            <!-- End of PageContent -->
            
        </main><br>
        <!-- End of Main -->
        <section class="bg-white" >
            <div class="container" style="border:3px;">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    {!! $settings->map !!}
                </div>
            </div>
        </div>
        </section>

        @include('components.footer')
    </div>
    <!-- End of Page Wrapper -->

    @include('components.sticky-footer')

    <!-- Plugin JS File -->
    <script src="{{ URL::asset('website-assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/js/main.min.js') }}"></script>
    <script src="{{ URL::asset('website-assets/js/scroll.js') }}"></script>
    <script>
        function showLocation()
        {
            document.getElementById('map').classList.remove("d-none");
        }
    </script>
</body>

</html>
