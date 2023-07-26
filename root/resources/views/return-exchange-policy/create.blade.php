<!DOCTYPE html>
<title>Add New Policy</title>
@extends('app')
@section('contents')
    <section class="content-header">
        @include('errors.validation')
        <div class="container-fluid">
            @if (Session::has('flash_message'))
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-hidden="true"
                        style="margin-right: 4%;">&times;</a>
                    <strong>Success!</strong> {{ Session::get('flash_message') }}
                </div>
            @endif
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Add New Policy</h3>
                        </div>

                        {!! Form::open(['url' => 'return-exchange-policy', 'method' => 'POST', 'class' => 'form-horizontal', 'files' => 'true', 'enctype' => 'multipart/form-data']) !!}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Title</label>
                                        {!! Form::text('title', null, ['id' => 'title', 'class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Description</label>
                                        {!! Form::textarea('description', null, ['id' => 'description', 'class' => 'form-control']) !!}
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
<!-- include TinyMceEditor js -->
<script src="{{ asset('assets/tinymc-editor/tinymce.min.js') }}"></script>

<script>
    tinymce.init({
        selector: '#description',
        plugins: 'advlist autolink lists link image charmap preview anchor pagebreak lists code',
        toolbar_mode: 'floating',
        toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | numlist bullist deflist code'
    });
</script>
@stop