@extends('app')
@section('heads')
    <title>Banners</title>
    <link rel="stylesheet" href="{{ URL::asset('website-assets/css/toastr.min.css') }}">
@stop
@section('contents')

    <section class="content-header"></section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Banner's Management</h3>
                        </div>
       
                        {!! Form::open([
                            'url' => 'vendor-banners',
                            'method' => 'POST',
                            'class' => 'form-horizontal',
                            'enctype' => 'multipart/form-data',
                        ]) !!}
                    
                        {!! Form::hidden('vendor_id',Auth::User()->id,['id'=>'vendor_id']) !!}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="image">Image 1</label>
                                        <input type="file" name="image1" id="image1" class="form-control">
                                        @error('image1')
                                            <span class="invalid-feedback1">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Image 2</label>
                                        <input type="file" name="image2" id="image2" class="form-control">
                                        @error('image2')
                                            <span class="invalid-feedback1">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Image 3</label>
                                        <input type="file" name="image3" id="image3" class="form-control">
                                        @error('image3')
                                            <span class="invalid-feedback1">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Banner Image's</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Image 1</label>
                                @if (isset($vendorBanners->banner_image1))
                                <img src="{{ URL::asset('root/upload/vendor-banners/'.$vendorBanners->banner_image1) }}" class="img-fluid" id="show_image1" alt="Industry Mall vendor profile image 1">
                                @else
                                <img src="{{ URL::asset('root/upload/vendor-banners/820X430_image.png') }}" class="img-fluid" id="show_image1" alt="Industry Mall vendor profile image 1">
                                @endif
                            </div>
                            <div class="form-group">
                                @if (isset($vendorBanners->banner_image2))
                                <img src="{{ URL::asset('root/upload/vendor-banners/'.$vendorBanners->banner_image2) }}" class="img-fluid" id="show_image2" alt="Industry Mall vendor profile image 2">
                                @else
                                <img src="{{ URL::asset('root/upload/vendor-banners/400X205_image.png') }}" class="img-fluid" id="show_image2" alt="Industry Mall vendor profile image 2">
                                @endif
                            </div>
                            <div class="form-group">
                                @if (isset($vendorBanners->banner_image3))
                                <img src="{{ URL::asset('root/upload/vendor-banners/'.$vendorBanners->banner_image3) }}" class="img-fluid" id="show_image3" alt="Industry Mall vendor profile image 3">
                                @else
                                <img src="{{ URL::asset('root/upload/vendor-banners/400X205_image.png') }}" class="img-fluid" id="show_image3" alt="Industry Mall vendor profile image 3">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
@section('scripts')
    <script>
        $(document).ready(function() {
            $('#image1').change(function(event) {
                var filePath = URL.createObjectURL(event.target.files[0]);
                $("#show_image1").fadeIn("fast").attr('src', filePath);
            });
            $('#image2').change(function(event) {
                var filePath = URL.createObjectURL(event.target.files[0]);
                $("#show_image2").fadeIn("fast").attr('src', filePath);
            });
            $('#image3').change(function(event) {
                var filePath = URL.createObjectURL(event.target.files[0]);
                $("#show_image3").fadeIn("fast").attr('src', filePath);
            });
        });
    </script>
    <script src="{{ URL::asset('website-assets/js/toastr.min.js') }}"></script>
    {!! Toastr::message() !!}
@stop
