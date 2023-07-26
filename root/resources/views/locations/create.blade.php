@extends('app')
@section('heads')
    <title>Add New Location</title>
    <link rel="stylesheet" href="{{ URL::asset('website-assets/css/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}">
@stop
@section('contents')
    <section class="content-header"></section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title font-weight-bold">Add New Location</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        {!! Form::open([
                            'url' => 'our-locations',
                            'method' => 'POST',
                            'class' => 'form-horizontal',
                        ]) !!}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" id="name"
                                            class="form-control @error('name') is-invalid @enderror">
                                        @error('name')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="phoneno">Phone No</label>
                                        <input type="text" name="phoneno" id="phoneno"
                                            class="form-control @error('phoneno') is-invalid @enderror">
                                        @error('phoneno')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" id="email"
                                            class="form-control @error('email') is-invalid @enderror">
                                        @error('email')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" name="address" id="address"
                                            class="form-control @error('address') is-invalid @enderror">
                                        @error('address')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="company">Company</label>
                                        <input type="text" name="company" id="company"
                                            class="form-control @error('company') is-invalid @enderror">
                                        @error('company')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="google_link">Google Link</label>
                                        <input type="text" name="google_link" id="google_link"
                                            class="form-control @error('google_link') is-invalid @enderror">
                                        @error('google_link')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="for_about">For About</label>
                                        {!! Form::select('for_about', $for_about, null, [
                                            'id' => 'for_about',
                                            'class' => 'form-control fstdropdown-select',
                                        ]) !!}
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
            </div>
        </div>
    </section>

    <script src="{{ URL::asset('website-assets/js/toastr.min.js') }}"></script>
    {!! Toastr::message() !!}
@stop
