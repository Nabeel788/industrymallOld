@extends('app')
@section('heads')
    <title>Add Brand</title>
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
                            <h3 class="card-title">Add Brand</h3>
                        </div>
                        {!! Form::open([
                            'url' => 'brand',
                            'method' => 'POST',
                            'class' => 'form-horizontal',
                            'enctype' => 'multipart/form-data',
                        ]) !!}
                        {!! Form::hidden('type', 'brand', ['id' => 'type']) !!}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Name</label>
                                        {!! Form::text('brand_name', null, [
                                            'id' => 'brand_name',
                                            'class' => 'form-control',
                                            'autofocus' => 'autofocus',
                                            'required' => 'required',
                                        ]) !!}
                                        @error('brand_name')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Logo (Dim: 410 x 186)</label>
                                        <input type="file" name="logo" id="logo"
                                            class="form-control @error('logo') is-invalid @enderror" required>
                                        @error('logo')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Link</label>
                                        {!! Form::text('link', null, ['id' => 'link', 'class' => 'form-control', 'required' => 'required']) !!}
                                        @error('link')
                                            <span class="invalid-feedback">{{ $message }}</span>
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
                            <h3 class="card-title">Brand Logo</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Logo</label>
                                        <img src="{{ URL::asset('website-assets/images/dummy/img_410_x_186.png') }}"
                                            id="show_brand_logo" class="img-fluid" alt="">

                                    </div>
                                </div>
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
            $('#logo').change(function(event) {
                var filePath1 = URL.createObjectURL(event.target.files[0]);
                $("#show_brand_logo").fadeIn("fast").attr('src', filePath1);
            });
        });
    </script>

    <script src="{{ URL::asset('website-assets/js/toastr.min.js') }}"></script>
    {!! Toastr::message() !!}
@stop
