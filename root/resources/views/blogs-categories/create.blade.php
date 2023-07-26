@extends('app')
@section('heads')
    <title>Add Blog Category</title>
    <style>
        .invalid-message {
            color: red;
            font-weight: bold;
        }
    </style>
    <link rel="stylesheet" href="{{ URL::asset('website-assets/css/toastr.min.css') }}">
@stop
@section('contents')
    <title>Add Blog Category</title>
    <section class="content-header"></section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header bg-info">
                            <h3 class="card-title">Add Blog Category</h3>
                        </div>

                        {!! Form::open([
                            'url' => 'blogs-categories',
                            'method' => 'POST',
                            'class' => 'form-horizontal',
                            'files' => 'true',
                            'enctype' => 'multipart/form-data',
                        ]) !!}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Title</label>
                                        {!! Form::text('title', null, ['id' => 'title', 'class' => 'form-control','required'=>'required']) !!}
                                        @error('title')
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