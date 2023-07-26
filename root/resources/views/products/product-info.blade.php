@extends('app')
@section('heads')
    <title>Edit Product Info</title>
    <style>
        /* .tox .tox-editor-header {
            z-index: 0 !important;
        } */

        .conditions-box {
            color: red;
            margin-top: -20px;
        }
    </style>

    <link rel="stylesheet" href="{{ URL::asset('website-assets/css/toastr.min.css') }}">
@stop
@section('contents')

    <section class="content-header"></section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            {!! Form::model($edit, [
                'method' => 'PATCH',
                'action' => ['App\Http\Controllers\SingleProductInfoController@update', $edit->id],
                'class' => 'form-horizontal',
                'files' => 'true',
                'enctype' => 'multipart/form-data',
            ]) !!}

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Edit Product Info</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Shipping</label>
                                        {!! Form::textarea('shipping', null, ['id' => 'shipping', 'class' => 'form-control']) !!}
                                        @error('shipping')
                                            <span class="invalid-feedback1 font-weight-bold">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Delivery</label>
                                        {!! Form::textarea('delivery', null, ['id' => 'delivery', 'class' => 'form-control']) !!}
                                        @error('delivery')
                                            <span class="invalid-feedback1 font-weight-bold">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Returns</label>
                                        {!! Form::textarea('returns', null, ['id' => 'returns', 'class' => 'form-control']) !!}
                                        @error('returns')
                                            <span class="invalid-feedback1 font-weight-bold">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Payment Methods</label>
                                        {!! Form::textarea('payment_method', null, ['id' => 'payment_method', 'class' => 'form-control']) !!}
                                        @error('payment_method')
                                            <span class="invalid-feedback1 font-weight-bold">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Disclaimer</label>
                                        {!! Form::textarea('disclaimer', null, ['id' => 'disclaimer', 'class' => 'form-control']) !!}
                                        @error('disclaimer')
                                            <span class="invalid-feedback1 font-weight-bold">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-footer">
                            <button type="submit" name="primary" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </section>
@stop
@section('scripts')
    <script src="{{ URL::asset('website-assets/js/toastr.min.js') }}"></script>
    {!! Toastr::message() !!}

    <!-- include TinyMceEditor js -->
    {{-- <script src="{{ asset('assets/tinymc-editor/tinymce.min.js') }}"></script>

    <script>
        tinymce.init({
            selector: '#shipping, #delivery, #returns, #payment_method, #disclaimer',
            plugins: 'advlist autolink lists link image charmap preview anchor pagebreak lists code',
            toolbar_mode: 'floating',
            toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | numlist bullist deflist code'
        });
    </script> --}}
@stop
