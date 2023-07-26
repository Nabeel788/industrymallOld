@extends('app')
@section('heads')
<title>Add New Intructor</title>
<style>
    .invalid-message {
        color: red;
        font-weight: bold;
    }
</style>
<link rel="stylesheet" href="{{ URL::asset('website-assets/css/toastr.min.css') }}">
@stop
@section('contents')
<section class="content-header"></section>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card card-primary">
                    <div class="card-header bg-info">
                        <h3 class="card-title">Add New Intructor</h3>
                    </div>
                    {!! Form::open(['url' => 'intructor', 'method' => 'POST', 'class' => 'form-horizontal', 'files'
                    => 'true', 'enctype' => 'multipart/form-data']) !!}
                    {!! Form::hidden('created_by',Auth::User()->id,['id'=>'created_by']) !!}
                    {!! Form::hidden('updated_by',Auth::User()->id,['id'=>'updated_by']) !!}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Name</label>
                                    {!! Form::text('name', null, ['id' => 'name', 'class' =>
                                    'form-control','autofocus'=>'autofocus','required'=>'required']) !!}
                                    @error('title')
                                    <span class="invalid-message">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Courses</label>
                                    {!! Form::text('courses', null, ['id' => 'courses', 'class' =>
                                    'form-control','autofocus'=>'autofocus','required'=>'required']) !!}
                                    @error('title')
                                    <span class="invalid-message">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Education</label>
                                    {!! Form::text('education', null, ['id' => 'education', 'class' =>
                                    'form-control','autofocus'=>'autofocus','required'=>'required']) !!}
                                    @error('title')
                                    <span class="invalid-message">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    {!! Form::text('email', null, ['id' => 'email', 'class' =>
                                    'form-control','autofocus'=>'autofocus','required'=>'required']) !!}
                                    @error('title')
                                    <span class="invalid-message">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Phone</label>
                                    {!! Form::text('phone', null, ['id' => 'phone', 'class' =>
                                    'form-control','autofocus'=>'autofocus','required'=>'required']) !!}
                                    @error('title')
                                    <span class="invalid-message">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="image" id="image" class="form-control" required>
                                    @error('image')
                                    <span class="invalid-message">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</section>
@stop
@section('scripts')
<script src="{{ URL::asset('website-assets/js/toastr.min.js') }}"></script>
{!! Toastr::message() !!}
@stop