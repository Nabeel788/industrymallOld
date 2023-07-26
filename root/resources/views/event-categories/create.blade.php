@extends('app')
@section('heads')
    <title>Add New Event Category</title>
    <link rel="stylesheet" href="{{ URL::asset('website-assets/css/toastr.min.css') }}">
@stop
@section('contents')
    <section class="content-header"></section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Add New Event Category</h3>
                        </div>

                        {!! Form::open([
                            'url' => 'events-categories',
                            'method' => 'POST',
                            'class' => 'form-horizontal'
                        ]) !!}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" name="title" id="title"
                                            class="form-control @error('title') is-invalid @enderror" required autofocus>
                                        @error('title')
                                            <span class="invalid-feedback">{{ $message }}</span>
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
