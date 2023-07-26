@extends('app')
@section('heads')
    <title>Add Product</title>
    <!-- Multi Select Dropdown -->
    <link rel="stylesheet" href="{{ URL::asset('css/choices.min.css') }}">
    <style>
        .tox .tox-editor-header {
            z-index: 0 !important;
        }

        .image_container {
            width: 200px;
            height: 120px;
            border-radius: 6px;
            overflow: hidden;
        }

        .image_container img {
            height: 100%;
            width: 200px;
            object-fit: cover;
        }

        .image_container span {
            top: -8px;
            right: 8px;
            color: red;
            font-size: 20px;
            font-weight: normal;
            cursor: pointer;
        }
    </style>
     <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('website-assets/css/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('website-assets/css/image_uploading.css') }}">
@stop
@section('contents')

    <section class="content-header"></section>
    {{-- @include('errors.validation') --}}
    @if ($errors->has('shipping_days.*'))
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        The Shipping Days field is required
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if ($errors->has('images.0'))
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ $errors->first('images.0') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            {!! Form::open([
                'url' => 'products',
                'method' => 'POST',
                'class' => 'form-horizontal',
                'files' => 'true',
                'enctype' => 'multipart/form-data',
            ]) !!}
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 images_names"></div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Add Product</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 d-none">
                                    <div class="form-group">
                                        <label>Product code</label>
                                        {!! Form::text('code', null, ['id' => 'code', 'class' => 'form-control']) !!}
                                        @if ($errors->has('code'))
                                            <span
                                                class="invalid-feedback1 font-weight-bold">{{ $errors->first('code') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Model No <span style="color: red;">*</span></label>
                                        {!! Form::text('model_no', null, [
                                            'id' => 'model_no',
                                            'class' => 'form-control',
                                            'required' => 'required',
                                            'maxlength' => '100',
                                            // 'onselectstart' => 'return false',
                                            // 'onpaste' => 'return false;',
                                            // 'onCopy' => 'return false',
                                            // 'onCut' => 'return false',
                                            // 'onDrag' => 'return false',
                                            // 'onDrop' => 'return false',
                                            // 'autocomplete' => 'off',
                                        ]) !!}
                                        @if ($errors->has('model_no'))
                                            <span
                                                class="invalid-feedback1 font-weight-bold">{{ $errors->first('model_no') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Product Name <span style="color: red;">*</span></label>
                                        {!! Form::text('name', null, [
                                            'id' => 'name',
                                            'class' => 'form-control',
                                            'required' => 'required',
                                            'maxlength' => '150',
                                            // 'onselectstart' => 'return false',
                                            // 'onpaste' => 'return false;',
                                            // 'onCopy' => 'return false',
                                            // 'onCut' => 'return false',
                                            // 'onDrag' => 'return false',
                                            // 'onDrop' => 'return false',
                                            // 'autocomplete' => 'off',
                                        ]) !!}
                                        @if ($errors->has('name'))
                                            <span
                                                class="invalid-feedback1 font-weight-bold">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 d-none">
                                    <div class="form-group">
                                        <label>Locations <span style="color: red;">*</span></label>
                                        <select id="choices-multiple-remove-button" name="location[]"
                                            class="form-control @error('location') is-invalid @enderror"
                                            placeholder="Select Location" multiple>
                                            @foreach ($locations as $value)
                                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                                            @endforeach
                                        </select>

                                        @if ($errors->has('location.0'))
                                            <span class="invalid-feedback1 font-weight-bold"
                                                style="position: relative;top:-20px;">{{ $errors->first('location.0') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Conditions <span style="color: red;">*</span></label>
                                        <select id="choices-multiple-remove-button" name="condition[]"
                                            class="form-control @error('condition') is-invalid @enderror"
                                            placeholder="Select Condition" multiple required>
                                            @foreach ($conditions as $value)
                                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('condition.0'))
                                            <span class="invalid-feedback1 font-weight-bold"
                                                style="position: relative;top:-20px;">{{ $errors->first('condition.0') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <div class="form-group">
                                        <label>New Price <span style="color: red;">*</span></label>
                                        {!! Form::text('new_price', null, [
                                            'id' => 'new_price',
                                            'class' => 'form-control',
                                            'onkeypress' => 'return onlyDecimalNumberKey(event)',
                                            // 'required' => 'required',
                                            'onselectstart' => 'return false',
                                            'onpaste' => 'return false;',
                                            'onCopy' => 'return false',
                                            'onCut' => 'return false',
                                            'onDrag' => 'return false',
                                            'onDrop' => 'return false',
                                            'autocomplete' => 'off',
                                        ]) !!}
                                        @if ($errors->has('new_price'))
                                            <span
                                                class="invalid-feedback1 font-weight-bold">{{ $errors->first('new_price') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <div class="form-group">
                                        <label>N.Sale Price <span style="color: red;">*</span></label>
                                        {!! Form::text('new_sale_price', null, [
                                            'id' => 'new_sale_price',
                                            'class' => 'form-control',
                                            'onkeypress' => 'return onlyDecimalNumberKey(event)',
                                            // 'required' => 'required',
                                            'onselectstart' => 'return false',
                                            'onpaste' => 'return false;',
                                            'onCopy' => 'return false',
                                            'onCut' => 'return false',
                                            'onDrag' => 'return false',
                                            'onDrop' => 'return false',
                                            'autocomplete' => 'off',
                                        ]) !!}
                                        @if ($errors->has('new_sale_price'))
                                            <span
                                                class="invalid-feedback1 font-weight-bold">{{ $errors->first('new_sale_price') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <div class="form-group">
                                        <label>N.Warranty Days <span style="color: red;">*</span></label>
                                        {!! Form::text('new_warranty_days', null, [
                                            'id' => 'new_warranty_days',
                                            'class' => 'form-control',
                                            'onkeypress' => 'return onlyNumberKey(event)',
                                            'required' => 'required',
                                            'onselectstart' => 'return false',
                                            'onpaste' => 'return false;',
                                            'onCopy' => 'return false',
                                            'onCut' => 'return false',
                                            'onDrag' => 'return false',
                                            'onDrop' => 'return false',
                                            'autocomplete' => 'off',
                                        ]) !!}
                                        @if ($errors->has('new_warranty_days'))
                                            <span
                                                class="invalid-feedback1 font-weight-bold">{{ $errors->first('new_warranty_days') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <div class="form-group">
                                        <label>N.Return Days <span style="color: red;">*</span></label>
                                        {!! Form::text('new_return_days', null, [
                                            'id' => 'new_return_days',
                                            'class' => 'form-control',
                                            'onkeypress' => 'return onlyNumberKey(event)',
                                            'required' => 'required',
                                            'onselectstart' => 'return false',
                                            'onpaste' => 'return false;',
                                            'onCopy' => 'return false',
                                            'onCut' => 'return false',
                                            'onDrag' => 'return false',
                                            'onDrop' => 'return false',
                                            'autocomplete' => 'off',
                                        ]) !!}
                                        @if ($errors->has('new_return_days'))
                                            <span
                                                class="invalid-feedback1 font-weight-bold">{{ $errors->first('new_return_days') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <div class="form-group">
                                        <label>Refurbished Price <span style="color: red;">*</span></label>
                                        {!! Form::text('refurnished_price', null, [
                                            'id' => 'refurnished_price',
                                            'class' => 'form-control',
                                            'onkeypress' => 'return onlyDecimalNumberKey(event)',
                                            // 'required' => 'required',
                                            'onselectstart' => 'return false',
                                            'onpaste' => 'return false;',
                                            'onCopy' => 'return false',
                                            'onCut' => 'return false',
                                            'onDrag' => 'return false',
                                            'onDrop' => 'return false',
                                            'autocomplete' => 'off',
                                        ]) !!}
                                        @if ($errors->has('refurnished_price'))
                                            <span
                                                class="invalid-feedback1 font-weight-bold">{{ $errors->first('refurnished_price') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <div class="form-group">
                                        <label>R.Sale Price <span style="color: red;">*</span></label>
                                        {!! Form::text('refurnished_sale_price', null, [
                                            'id' => 'refurnished_sale_price',
                                            'class' => 'form-control',
                                            'onkeypress' => 'return onlyDecimalNumberKey(event)',
                                            // 'required' => 'required',
                                            'onselectstart' => 'return false',
                                            'onpaste' => 'return false;',
                                            'onCopy' => 'return false',
                                            'onCut' => 'return false',
                                            'onDrag' => 'return false',
                                            'onDrop' => 'return false',
                                            'autocomplete' => 'off',
                                        ]) !!}
                                        @if ($errors->has('refurnished_sale_price'))
                                            <span
                                                class="invalid-feedback1 font-weight-bold">{{ $errors->first('refurnished_sale_price') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <div class="form-group">
                                        <label>R.Warranty Days <span style="color: red;">*</span></label>
                                        {!! Form::text('refurnished_warranty_days', null, [
                                            'id' => 'refurnished_warranty_days',
                                            'class' => 'form-control',
                                            'onkeypress' => 'return onlyNumberKey(event)',
                                            // 'required' => 'required',
                                            'onselectstart' => 'return false',
                                            'onpaste' => 'return false;',
                                            'onCopy' => 'return false',
                                            'onCut' => 'return false',
                                            'onDrag' => 'return false',
                                            'onDrop' => 'return false',
                                            'autocomplete' => 'off',
                                        ]) !!}
                                        @if ($errors->has('refurnished_warranty_days'))
                                            <span
                                                class="invalid-feedback1 font-weight-bold">{{ $errors->first('refurnished_warranty_days') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <div class="form-group">
                                        <label>R.Return Days <span style="color: red;">*</span></label>
                                        {!! Form::text('refurnished_return_days', null, [
                                            'id' => 'refurnished_return_days',
                                            'class' => 'form-control',
                                            'onkeypress' => 'return onlyNumberKey(event)',
                                            // 'required' => 'required',
                                            'onselectstart' => 'return false',
                                            'onpaste' => 'return false;',
                                            'onCopy' => 'return false',
                                            'onCut' => 'return false',
                                            'onDrag' => 'return false',
                                            'onDrop' => 'return false',
                                            'autocomplete' => 'off',
                                        ]) !!}
                                        @if ($errors->has('refurnished_return_days'))
                                            <span
                                                class="invalid-feedback1 font-weight-bold">{{ $errors->first('refurnished_return_days') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Min Order <span style="color: red;">*</span></label>
                                        {!! Form::text('min_order', null, [
                                            'id' => 'min_order',
                                            'class' => 'form-control',
                                            'onkeypress' => 'return onlyNumberKey(event)',
                                            'required' => 'required',
                                            'onselectstart' => 'return false',
                                            'onpaste' => 'return false;',
                                            'onCopy' => 'return false',
                                            'onCut' => 'return false',
                                            'onDrag' => 'return false',
                                            'onDrop' => 'return false',
                                            'autocomplete' => 'off',
                                        ]) !!}
                                        @if ($errors->has('min_order'))
                                            <span
                                                class="invalid-feedback1 font-weight-bold">{{ $errors->first('min_order') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>SKU <span style="color: red;">*</span></label>
                                        {!! Form::text('sku', null, [
                                            'id' => 'sku',
                                            'class' => 'form-control',
                                            'required' => 'required',
                                            // 'onselectstart' => 'return false',
                                            // 'onpaste' => 'return false;',
                                            // 'onCopy' => 'return false',
                                            // 'onCut' => 'return false',
                                            // 'onDrag' => 'return false',
                                            // 'onDrop' => 'return false',
                                            // 'autocomplete' => 'off',
                                        ]) !!}
                                        @if ($errors->has('sku'))
                                            <span
                                                class="invalid-feedback1 font-weight-bold">{{ $errors->first('sku') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Make <span style="color: red;">*</span></label>
                                        @if (Auth::User()->role=='Admin')
                                            {!! Form::select('vendors',$vendors,null,['id'=>'vendors','class'=>'form-control fstdropdown-select','onchange'=>'ChangeMakeCondition(this.value)']) !!}
                                            {!! Form::hidden('make', Auth::User()->name, ['id' => 'make', 'class' => 'form-control']) !!}
                                            {!! Form::hidden('created_by',Auth::User()->id,['id'=>'created_by','class'=>'form-control']) !!}
                                        @else
                                            {!! Form::text('make1',Auth::User()->name,['id'=>'make1','class'=>'form-control','disabled'=>'disabled']) !!}
                                            {!! Form::hidden('make', Auth::User()->name, ['id' => 'make', 'class' => 'form-control']) !!}
                                            {!! Form::hidden('created_by',Auth::User()->id,['id'=>'created_by','class'=>'form-control']) !!}
                                        @endif

                                        @if ($errors->has('make'))
                                            <span
                                                class="invalid-feedback1 font-weight-bold">{{ $errors->first('make') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Attachment</label>
                                        <input type="file" name="attachment" id="attachment"
                                            class="form-control @error('attachment') is-invalid @enderror">
                                        @error('attachment')
                                            <span class="invalid-feedback font-weight-bold">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                {{-- <script>
                                    $(document).ready(function() {
                                        $('#images').change(function(event) {
                                            if ($("#images")[0].files.length > 5) {

                                                alert("You can select only 5 images");
                                                // as an array, u have more freedom to transform the file list using array functions.
                                                const fileListArr = Array.from(input.files)
                                                fileListArr.splice(index, 1) // here u remove the file

                                                return false;
                                            }

                                            var filePath1 = URL.createObjectURL(event.target.files[0]);
                                            if (filePath1) {
                                                $("#image1").fadeIn("fast").attr('src', filePath1);
                                            }


                                            var filePath2 = URL.createObjectURL(event.target.files[1]);
                                            if (filePath2) {
                                                $("#image2").fadeIn("fast").attr('src', filePath2);
                                            }


                                            var filePath3 = URL.createObjectURL(event.target.files[2]);
                                            if (filePath3) {
                                                $("#image3").fadeIn("fast").attr('src', filePath3);
                                            }


                                            var filePath4 = URL.createObjectURL(event.target.files[3]);
                                            if (filePath4) {
                                                $("#image4").fadeIn("fast").attr('src', filePath4);
                                            }


                                            var filePath5 = URL.createObjectURL(event.target.files[4]);
                                            if (filePath5) {
                                                $("#image5").fadeIn("fast").attr('src', filePath5);
                                            }
                                        });
                                    });
                                </script> --}}
                                
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Description</label>
                                        {{-- <textarea name="description" id="summernote" cols="30" rows="10"></textarea> --}}
                                        {!! Form::textarea('description', null, [
                                            'id' => 'description',
                                            'class' => 'form-control',
                                            'maxlength' => '1000',
                                           
                                        ]) !!}
                                        @if ($errors->has('description'))
                                            <span
                                                class="invalid-feedback1 font-weight-bold">{{ $errors->first('description') }}</span>
                                        @endif
                                    </div>
                                </div>
                                 <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Details</label>
                                        {{-- <textarea name="details" id="summernote1" cols="30" rows="10"></textarea> --}}
                                        {!! Form::textarea('details', null, [
                                            'id' => 'details',
                                            'class' => 'form-control',
                                           
                                        ]) !!}
                                        @if ($errors->has('details'))
                                            <span
                                                class="invalid-feedback1 font-weight-bold">{{ $errors->first('details') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Select Category</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group" style="margin-top: -10px;">
                                <label for="" class="d-block">Menu 
                                    <span style="color: red;">*</span> 
                                    @if (Auth::User()->role=='Admin')
                                    <a class="float-right" href="{{ URL::to('menus/create') }}" target="_blank"><u>(Add Menu)</u></a>
                                    @endif
                                </label>
                                {!! Form::select('menu_id', $menus, null, [
                                    'id' => 'menu_id',
                                    'class' => 'form-control',
                                    'required' => 'required',
                                ]) !!}
                                @if ($errors->has('menu_id'))
                                    <span
                                        class="invalid-feedback1 font-weight-bold">{{ $errors->first('menu_id') }}</span>
                                @endif
                            </div>
                            <div class="form-group" style="margin-top: -10px;">
                                <label for="" class="d-block">Category 
                                    <span style="color: red;">*</span> 
                                    @if (Auth::User()->role=='Admin')
                                    <a class="float-right" href="{{ URL::to('categories/create') }}" target="_blank"><u>(Add Category)</u></a>
                                    @endif
                                </label>
                                {!! Form::select('category_id', $categories, null, [
                                    'id' => 'category_id',
                                    'class' => 'form-control',
                                    'required' => 'required',
                                ]) !!}
                                @if ($errors->has('category_id'))
                                    <span
                                        class="invalid-feedback1 font-weight-bold">{{ $errors->first('category_id') }}</span>
                                @endif
                            </div>
                            <div class="form-group" style="margin-top: -10px;">
                                <label for="" class="d-block">Sub Category 
                                    <span style="color: red;">*</span> 
                                    @if (Auth::User()->role=='Admin')
                                    <a class="float-right" href="{{ URL::to('sub-category/create') }}" target="_blank"><u>(Add Sub Category)</u></a>
                                    @endif
                                </label>
                                {!! Form::select('subcategory_id', $sub_categories, null, [
                                    'id' => 'subcategory_id',
                                    'class' => 'form-control',
                                    'required' => 'required',
                                ]) !!}
                                @if ($errors->has('subcategory_id'))
                                    <span
                                        class="invalid-feedback1 font-weight-bold">{{ $errors->first('subcategory_id') }}</span>
                                @endif
                            </div>
                            <div class="form-group" style="margin-top: -10px;">
                                <label for="" class="d-block">Select Brand 
                                    <span style="color: red;">*</span> 
                                    @if (Auth::User()->role=='Admin')
                                    <a class="float-right" href="{{ URL::to('brand/create') }}" target="_blank"><u>(Add Brand)</u></a>
                                    @endif
                                </label>
                                {!! Form::select('brand_id', $brands, null, [
                                    'id' => 'brand_id',
                                    'class' => 'form-control',
                                    'required' => 'required',
                                ]) !!}
                                @if ($errors->has('brand_id'))
                                    <span
                                        class="invalid-feedback1 font-weight-bold">{{ $errors->first('brand_id') }}</span>
                                @endif
                            </div>
                            <div class="form-group" style="margin-top: -10px;">
                                <label>Type</label>
                                {!! Form::select('type', $type, null, [
                                    'id' => 'type',
                                    'class' => 'form-control fstdropdown-select',
                                    'required' => 'required',
                                ]) !!}
                                @if ($errors->has('type'))
                                    <span class="invalid-feedback1 font-weight-bold">{{ $errors->first('type') }}</span>
                                @endif
                            </div>
                            <div class="form-group products-list d-none" style="margin-top: -10px;">
                                <label>Product List</label>
                                {!! Form::select('parent_id', $productsList, null, [
                                    'id' => 'parent_id',
                                    'class' => 'form-control fstdropdown-select',
                                ]) !!}
                                @if ($errors->has('parent_id'))
                                    <span
                                        class="invalid-feedback1 font-weight-bold">{{ $errors->first('parent_id') }}</span>
                                @endif
                            </div>
                            <script>
                                $('#type').change(function() {
                                    var type = $(this).val();
                                    if (type == 'Parent') {
                                        $('.products-list').addClass('d-none');
                                    } else {
                                        $('.products-list').removeClass('d-none');
                                    }
                                });
                            </script>
                            <div class="form-group d-none" style="margin-top: 10px;">
                                <div class="card shadow-sm w-100">
                                    <div class="card-header d-flex justify-content-between">
                                        <form action="#" method="post" class="form" id="main-form">
                                            <input type="file" name="image" id="image" class="d-none"
                                                onchange="image_select()" multiple>
                                            <button class="btn btn-sm btn-primary" type="button"
                                                onclick="CHooseImage()">Choose Image</button>
                                        </form>
                                    </div>
                                    <div class="card-body d-flex flex-wrap justify-content-start" id="all_images">
                                    </div>
                                    <div class="card-footer" id="images_paths"></div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>(1 File Size <= 100kb) (Total File Size 2MB) <span style="color: red;">*</span></label>
                                <form method="post" id="upload_form" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input type="file" name="select_file[]" id="select_file" class="form-control"
                                        multiple />
                                    <input type="submit" name="upload" id="upload" class="btn btn-primary d-none"
                                        value="Upload">
                                </form>
                                <br />
                                <span id="uploaded_image"></span>


                                <script>
                                    $(document).ready(function() {

                                        $('#upload_form , #select_file').on('change', function(event) {
                                            event.preventDefault();

                                            $.ajax({
                                                url: "{{ asset('upload_image_ajax') }}",
                                                method: "POST",
                                                data: new FormData(this),
                                                dataType: 'JSON',
                                                contentType: false,
                                                cache: false,
                                                processData: false,
                                                success: function(data) {
                                                    var ImgHTML = '';
                                                    var ImgPath = '';
                                                    $.each(data, function(i, v) {
                                                        ImgHTML += `<label id="row${v}">
                                                        <img src="../root/upload/products/${v}" class="img-thumbnail" style="width:100px;height:80px;" />
                                                            <span data-path="${v}" id="remove_button" style="position:relative;top:-35px;left:-10px;background:red;color:white;padding:0px 5px 3px 5px;border-radius:100%;cursor:pointer;">x</span>  
                                                        </div>  
                                                        </label>`;

                                                        ImgPath +=
                                                            `<input type="hidden" id="${v}" name="images[]" value="${v}" />`;
                                                    });

                                                    $('#uploaded_image').append(ImgHTML);
                                                    $('#select_file').val('');
                                                    $('.images_names').append(ImgPath);
                                                }
                                            })
                                        });


                                        $(document).on('click', '#remove_button', function() {
                                            var path = $(this).attr("data-path");
                                            $.ajax({
                                                url: "{{ asset('delete_image_ajax') }}",
                                                type: "get",
                                                data: {
                                                    path: path
                                                },
                                                success: function(data) {
                                                    document.getElementById('row' + path).remove();
                                                    document.getElementById(path).remove();
                                                }
                                            });
                                        });

                                    });
                                </script>

                            </div>
                        </div>
                        <div class="col-sm-12">
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title font-weight-bold">Dimensions</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="width">Width</label>
                                        {!! Form::text('width', null, [
                                            'id' => 'width',
                                            'class' => 'form-control',
                                            'onkeypress' => 'return onlyNumberKey(event)',
                                            'onselectstart' => 'return false',
                                            'onpaste' => 'return false;',
                                            'onCopy' => 'return false',
                                            'onCut' => 'return false',
                                            'onDrag' => 'return false',
                                            'onDrop' => 'return false',
                                            'autocomplete' => 'off',
                                        ]) !!}
                                        @if ($errors->has('width'))
                                            <span
                                                class="invalid-feedback1 font-weight-bold">{{ $errors->first('width') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="height">Height</label>
                                        {!! Form::text('height', null, [
                                            'id' => 'height',
                                            'class' => 'form-control',
                                            'onkeypress' => 'return onlyNumberKey(event)',
                                            'onselectstart' => 'return false',
                                            'onpaste' => 'return false;',
                                            'onCopy' => 'return false',
                                            'onCut' => 'return false',
                                            'onDrag' => 'return false',
                                            'onDrop' => 'return false',
                                            'autocomplete' => 'off',
                                        ]) !!}
                                        @if ($errors->has('height'))
                                            <span
                                                class="invalid-feedback1 font-weight-bold">{{ $errors->first('height') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="depth">Depth</label>
                                        {!! Form::text('depth', null, [
                                            'id' => 'depth',
                                            'class' => 'form-control',
                                            'onkeypress' => 'return onlyNumberKey(event)',
                                            'onselectstart' => 'return false',
                                            'onpaste' => 'return false;',
                                            'onCopy' => 'return false',
                                            'onCut' => 'return false',
                                            'onDrag' => 'return false',
                                            'onDrop' => 'return false',
                                            'autocomplete' => 'off',
                                        ]) !!}
                                        @if ($errors->has('depth'))
                                            <span
                                                class="invalid-feedback1 font-weight-bold">{{ $errors->first('depth') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="weight">Weight</label>
                                        {!! Form::text('weight', null, [
                                            'id' => 'weight',
                                            'class' => 'form-control',
                                            'onkeypress' => 'return onlyNumberKey(event)',
                                            'onselectstart' => 'return false',
                                            'onpaste' => 'return false;',
                                            'onCopy' => 'return false',
                                            'onCut' => 'return false',
                                            'onDrag' => 'return false',
                                            'onDrop' => 'return false',
                                            'autocomplete' => 'off',
                                        ]) !!}
                                        @if ($errors->has('weight'))
                                            <span
                                                class="invalid-feedback1 font-weight-bold">{{ $errors->first('weight') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                @foreach ($locations as $value)
                    <input type="hidden" name="location_id[]" id="location_id" value="{{ $value->id }}">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title font-weight-bold">{{ $value->name }}</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-2 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Shipping.Days</label>
                                            {!! Form::text('shipping_days[]', null, [
                                                'id' => 'shipping_days',
                                                'class' => 'form-control',
                                                'onkeypress' => 'return onlyNumberKey(event)',
                                                'onselectstart' => 'return false',
                                                'onpaste' => 'return false;',
                                                'onCopy' => 'return false',
                                                'onCut' => 'return false',
                                                'onDrag' => 'return false',
                                                'onDrop' => 'return false',
                                                'autocomplete' => 'off',
                                            ]) !!}
                                            @if ($errors->has('shipping_days'))
                                                <span
                                                    class="invalid-feedback1 font-weight-bold">{{ $errors->first('shipping_days') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Shipping.Charges</label>
                                            {!! Form::text('shipping_charges[]', null, [
                                                'id' => 'shipping_charges',
                                                'class' => 'form-control',
                                                'onkeypress' => 'return onlyDecimalNumberKey(event)',
                                                'onselectstart' => 'return false',
                                                'onpaste' => 'return false;',
                                                'onCopy' => 'return false',
                                                'onCut' => 'return false',
                                                'onDrag' => 'return false',
                                                'onDrop' => 'return false',
                                                'autocomplete' => 'off',
                                            ]) !!}
                                            @if ($errors->has('shipping_charges'))
                                                <span
                                                    class="invalid-feedback1 font-weight-bold">{{ $errors->first('shipping_charges') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Import.Charges</label>
                                            {!! Form::text('import_charges[]', null, [
                                                'id' => 'import_charges',
                                                'class' => 'form-control',
                                                'onkeypress' => 'return onlyDecimalNumberKey(event)',
                                                'onselectstart' => 'return false',
                                                'onpaste' => 'return false;',
                                                'onCopy' => 'return false',
                                                'onCut' => 'return false',
                                                'onDrag' => 'return false',
                                                'onDrop' => 'return false',
                                                'autocomplete' => 'off',
                                            ]) !!}
                                            @if ($errors->has('import_charges'))
                                                <span
                                                    class="invalid-feedback1 font-weight-bold">{{ $errors->first('import_charges') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Tax.Charges</label>
                                            {!! Form::text('tax_charges[]', null, [
                                                'id' => 'tax_charges',
                                                'class' => 'form-control',
                                                'onkeypress' => 'return onlyDecimalNumberKey(event)',
                                                'onselectstart' => 'return false',
                                                'onpaste' => 'return false;',
                                                'onCopy' => 'return false',
                                                'onCut' => 'return false',
                                                'onDrag' => 'return false',
                                                'onDrop' => 'return false',
                                                'autocomplete' => 'off',
                                            ]) !!}
                                            @if ($errors->has('tax_charges'))
                                                <span
                                                    class="invalid-feedback1 font-weight-bold">{{ $errors->first('tax_charges') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Other.Charges</label>
                                            {!! Form::text('other_charges[]', null, [
                                                'id' => 'other_charges',
                                                'class' => 'form-control',
                                                'onkeypress' => 'return onlyDecimalNumberKey(event)',
                                                'onselectstart' => 'return false',
                                                'onpaste' => 'return false;',
                                                'onCopy' => 'return false',
                                                'onCut' => 'return false',
                                                'onDrag' => 'return false',
                                                'onDrop' => 'return false',
                                                'autocomplete' => 'off',
                                            ]) !!}
                                            @if ($errors->has('other_charges'))
                                                <span
                                                    class="invalid-feedback1 font-weight-bold">{{ $errors->first('other_charges') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach

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

@section('scripts')
<script src="{{ asset('assets/tinymc-editor/tinymce1.min.js') }}"></script>
<script>
    tinymce.init({ 
   selector:'#description',
  height: 500,
  toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
    content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }',
   image_class_list: [
            {title: 'img-responsive', value: 'img-responsive'},
            ],
            height: 500,
            setup: function (editor) {
                editor.on('init change', function () {
                    editor.save();
                });
            },
            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste imagetools"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image ",

            image_title: true,
            automatic_uploads: true,
            images_upload_url: '/upload',
            file_picker_types: 'image',
            images_upload_base_path: '/some/basepath',
            file_picker_callback: function(cb, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');
                input.onchange = function() {
                    var file = this.files[0];
                    if(file.size>1048576){
                        alert('File Size is Larger Than 1MB');
                         $('.tox-button ').click();
                        return false;
                    }
                    var reader = new FileReader();
                    reader.readAsDataURL(file);
                    reader.onload = function () {
                        var id = 'blobid' + (new Date()).getTime();

                        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                        var base64 = reader.result.split(',')[1];
                        var blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);
                        cb(blobInfo.blobUri(), { title: file.name });
                    };
                };
                input.click();
            }
});
        
</script>

<script>
    tinymce.init({ 
   selector:'#details',
  height: 500,
  toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
    content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }',
   image_class_list: [
            {title: 'img-responsive', value: 'img-responsive'},
            ],
            height: 500,
            setup: function (editor) {
                editor.on('init change', function () {
                    editor.save();
                });
            },
            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste imagetools"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image ",

            image_title: true,
            automatic_uploads: true,
            images_upload_url: '/upload',
            file_picker_types: 'image',
            images_upload_base_path: '/some/basepath',
            file_picker_callback: function(cb, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');
                input.onchange = function() {
                    var file = this.files[0];
                    if(file.size>1048576){
                        alert('File Size is Larger Than 1MB');
                         $('.tox-button ').click();
                        return false;
                    }
                    var reader = new FileReader();
                    reader.readAsDataURL(file);
                    reader.onload = function () {
                        var id = 'blobid' + (new Date()).getTime();

                        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                        var base64 = reader.result.split(',')[1];
                        var blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);
                        cb(blobInfo.blobUri(), { title: file.name });
                    };
                };
                input.click();
            }
});
        
</script>

<script src="{{ URL::asset('website-assets/js/toastr.min.js') }}"></script>
{!! Toastr::message() !!}
@stop



    <!-- Multi Select Dropdown -->
    <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
    <script>
        $(document).ready(function() {
            var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
                removeItemButton: true,
                // maxItemCount:5,
                // searchResultLimit:5,
                // renderChoiceLimit:5
            });
        });
    </script>


    <script>
        //Change Menus
        $('#menu_id').change(function() {
            var menu_id = $(this).val();
            $.ajax({
                url: "{{ asset('get-categories') }}?menu_id=" + menu_id,
                type: 'get',
                dataType: 'json',
                success: function(response) {
                    if (response.length > 0) {
                        var option = '<option value="" selected>Select Category</option>';
                        $.each(response, function(i, v) {
                            option += `<option value="${v.id}">${v.name}</option>`;
                        });
                        $('#category_id').html(option);
                    } else {
                        var option = '<option value="" selected>Category Not Found</option>';
                        $('#category_id').html(option);
                    }
                }
            });
        });
        // End Here



        // Change Categories 

        $('#category_id').change(function() {
            var cat_id = $(this).val();
            $.ajax({
                url: "{{ asset('get-subcategories') }}?cat_id=" + cat_id,
                type: 'get',
                dataType: 'json',
                success: function(response) {
                    if (response.length > 0) {
                        var option = '<option value="" selected>Select Sub Category</option>';
                        $.each(response, function(i, v) {
                            option += `<option value="${v.id}">${v.name}</option>`;
                        });
                        $('#subcategory_id').html(option);
                    } else {
                        var option = '<option value="" selected>Sub Category Not Found</option>';
                        $('#subcategory_id').html(option);
                    }
                }
            });
        });


        // End Here
    </script>

    <script src="{{ URL::asset('website-assets/js/toastr.min.js') }}"></script>
    {!! Toastr::message() !!}
    <!-- Only Numbers are allowed Validation -->
    <script>
        function onlyNumberKey(evt) {
            // Only ASCII character in that range allowed
            var ASCIICode = (evt.which) ? evt.which : evt.keyCode
            if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
                return false;
            return true;
        }

        function onlyDecimalNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode != 46 && charCode > 31 &&
                (charCode < 48 || charCode > 57))
                return false;

            return true;
        }
    </script>


    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
    {{-- <script src="{{ URL::asset('website-assets/js/multiple_images_uploading.js') }}"></script>

    <!-- include TinyMceEditor js -->
    <script src="{{ asset('assets/tinymc-editor/tinymce.min.js') }}"></script>

    <script>
        tinymce.init({
            selector: '#details',
            plugins: 'advlist autolink lists link image charmap preview anchor pagebreak lists code',
            toolbar_mode: 'floating',
            toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | numlist bullist deflist code'
        });
    </script> --}}


    <script>
        function ChangeMakeCondition(condition)
        {
            document.getElementById('make').value = condition.split('_')[1];
            document.getElementById('created_by').value = condition.split('_')[0];
        }
    </script>
@stop
