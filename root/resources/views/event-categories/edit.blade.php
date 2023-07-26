@extends('app')
@section('heads')
    <title>Edit Event Category</title>
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
                            <h3 class="card-title">Edit Event Category</h3>
                        </div>
                        {!! Form::model($edit, [
                            'method' => 'PATCH',
                            'action' => ['App\Http\Controllers\EventCategoriesController@update', $edit->id],
                            'class' => 'form-horizontal'
                        ]) !!}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        {!! Form::text('title',null,['id'=>'title','class'=>'form-control']) !!}
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
