<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from themes.the4.co/kalles-html/product-detail-external-affiliate.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Jul 2021 14:22:55 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/k_favicon_32x.png">
    <title>Kalle's product detail External/Affiliate</title>
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:300,300i,400,400i,500,500i&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('website-jewellery/assets/css/drift-basic.min.css')}}">
    <link rel="stylesheet" href="{{asset('website-jewellery/assets/css/photoswipe.css')}}">
    <link rel="stylesheet" href="{{asset('website-jewellery/assets/css/font-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('website-jewellery/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('website-jewellery/assets/css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('website-jewellery/assets/css/defined.css')}}">
    <link rel="stylesheet" href="{{asset('website-jewellery/assets/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('website-jewellery/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('website-jewellery/assets/css/home-default.css')}}">
    <link rel="stylesheet" href="{{asset('website-jewellery/assets/css/single-masonry-theme.css')}}">
    <link rel="stylesheet" href="{{asset('website-jewellery/assets/css/single-product.css')}}">
    <link rel="stylesheet" href="{{asset('website-jewellery/assets/css/custom.css')}}">
</head>
<body class="kalles-template single-product-template zoom_tp_2 header_full_true des_header_3 css_scrollbar lazy_icons btnt4_style_2 css_scrollbar template-index kalles_toolbar_true hover_img2 swatch_style_rounded swatch_list_size_small label_style_rounded wrapper_full_width header_full_true hide_scrolld_true lazyload">

<!--head banner-->
<!-- header -->
    <header id="ntheader" class="ntheader header_3 h_icon_iccl ">
        <div class="kalles-header__wrapper ntheader_wrapper pr z_200">
            @include('website-jewellery.include.topbar')
            <div class="sp_header_mid">
                <div class="header__mid">
                    <div class="container">
                       @include('website-jewellery.include.header')
                        <!-- MENU -->
                        @include('website-jewellery.include.menu')
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->
    <center>
    
<!--end head banner-->
<div class="wrapper">
 {!! Form::open(['url' => 'trackorder', 'method' => 'POST', 'class'=>'form-horizontal', 'files' => 'true', 'enctype' => 'multipart/form-data']) !!}
 <!-----
 <div class="col-md-8">
    <div class="input-group mb-3">
    <div class="input-group-prepend">
    <input type="text" name="track" placeholder="Track Order" class="form-control"  style="border-radius: 50px;"></div></div>
    <button class="btn btn-primary" value="Submit"  style="border-radius: 30px;">Submit</button>
</div>---->
<div class="col-md-12">
    <div class="row">
        <div class="col-md-3 col-xs-12"></div>
   <div class='col-md-5'>
       <input type="text" name="track" placeholder="Track Order" class="form-control mt-2"  style="border-radius: 50px;">
   </div>

   <div class='col-md-1 col-xs-12'>
       <button class="btn btn-primary mt-2" value="Submit"  style="border-radius: 30px;">Submit</button>
   </div>
   <div class="col-md-2"></div>
    </div></div>
 <div class="col-md-8">

{!! Form::close() !!}
 @if(isset($order))
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col" colspan="2">Details</th>
      
    </tr>
  </thead>
  <tbody>
   
    <tr>
   
      <th scope="row">Trcking #:</th>
      <th scope="row">
        {{$order[0]->id}}
        </th>
       
    </tr>
    <tr>
   
      <th scope="row">Status</th>
      <th scope="row">
        {{$order[0]->status}}
      </th>
       
    </tr>
    <tr>
   
      <th scope="row">Name</th>
      <th scope="row">
        {{$order[0]->first_name}}
        {{$order[0]->last_name}}</th>
       
    </tr>

    <tr>
   
      <th scope="row">Email</th>
      <th scope="row">{{$order[0]->email}}</th>
       
    </tr>
    <tr>
   
      <th scope="row">Address</th>
      <th scope="row">
        {{$order[0]->address_01}}
        </th>
       
    </tr>
    <tr>
   
      <th scope="row">Payment Method</th>
      <th scope="row">
        {{$order[0]->payment_method}}
        </th>
       
    </tr>
     
  </tbody>
</table>
@endif
</div></div>
</center>
</body>
   <!-- footer -->
    @include('website-jewellery.include.footer')
    <!-- end footer -->

</html>