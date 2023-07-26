@extends('app')
@section('heads')
    <!DOCTYPE html>
    <title>Add New Testimonial</title>
    <link rel="stylesheet" href="{{ URL::asset('website-assets/css/toastr.min.css') }}">
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
                            <h3 class="card-title">Add New Testimonial</h3>
                        </div>

                        {!! Form::open([
                            'url' => 'our-testimonials',
                            'method' => 'POST',
                            'class' => 'form-horizontal',
                            'enctype' => 'multipart/form-data',
                        ]) !!}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        {!! Form::text('name', null, [
                                            'id' => 'name',
                                            'class' => 'form-control',
                                            'required' => 'required',
                                            'autofocus'=>'autofocus'
                                        ]) !!}
                                        @error('name')
                                            <span class="invalid-feedback1">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label for="designation">Designation</label>
                                        {!! Form::text('designation', null, [
                                            'id' => 'designation',
                                            'class' => 'form-control',
                                            'required' => 'required'
                                        ]) !!}
                                        @error('designation')
                                            <span class="invalid-feedback1">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input type="file" name="image" id="image" class="form-control" required>
                                        @error('image')
                                            <span class="invalid-feedback1">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="">Message</label>
                                        {!! Form::textarea('message', null, ['id' => 'message', 'class' => 'form-control']) !!}
                                        @error('message')
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
            </div>
        </div>
    </section>
@stop
@section('scripts')
    <script src="{{ URL::asset('website-assets/js/toastr.min.js') }}"></script>
    {!! Toastr::message() !!}

    <!-- include TinyMceEditor js -->
    <script src="{{ asset('assets/tinymc-editor/tinymce.min.js') }}"></script>

    <script>
        tinymce.init({
            selector: '#message',
            plugins: 'advlist autolink lists link image charmap preview anchor pagebreak lists code',
            toolbar_mode: 'floating',
            toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | numlist bullist deflist code'
        });
    </script>
@stop
