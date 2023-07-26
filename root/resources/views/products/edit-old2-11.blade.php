@extends('app')
@section('heads')
    <title>Edit Product</title>
    <!-- Multi Select Dropdown -->
    <link rel="stylesheet" href="{{ URL::asset('css/choices.min.css') }}">
    <style>
        .tox .tox-editor-header {
            z-index: 0 !important;
        }
    </style>

    <link rel="stylesheet" href="{{ URL::asset('website-assets/css/toastr.min.css') }}">
@stop
@section('contents')

    <section class="content-header"></section>
    {{-- @include('errors.validation') --}}
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            {!! Form::model($edit, [
                'method' => 'PATCH',
                'action' => ['App\Http\Controllers\ProductController@update', $edit->id],
                'class' => 'form-horizontal',
                'files' => 'true',
                'enctype' => 'multipart/form-data',
            ]) !!}

            {!! Form::hidden('updated_by',Auth::User()->id,['id'=>'updated_by']) !!}
            {!! Form::hidden('menu',$edit->menu_id,['id'=>'menu']) !!}
            {!! Form::hidden('category',$edit->category_id,['id'=>'category']) !!}
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Edit Product</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 d-none">
                                    <div class="form-group">
                                        <label>Product code</label>
                                        {!! Form::text('code',null,['id'=>'code','class'=>'form-control']) !!}
                                        @if ($errors->has('code'))
                                            <span class="invalid-feedback1 font-weight-bold">{{ $errors->first('code') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Product Name</label>
                                        {!! Form::text('name',null,['id'=>'name','class'=>'form-control', 'required' => 'required']) !!}
                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback1 font-weight-bold">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Model No</label>
                                        {!! Form::text('model_no',null,['id'=>'model_no','class'=>'form-control', 'required' => 'required']) !!}
                                        @if ($errors->has('model_no'))
                                            <span class="invalid-feedback1 font-weight-bold">{{ $errors->first('model_no') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Locations</label>
                                        <select id="choices-multiple-remove-button" name="location[]"
                                            class="form-control @error('location') is-invalid @enderror"
                                            placeholder="Select Location" multiple>
                                            @foreach ($locations as $value)
                                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                                            @endforeach
                                        </select>
                                        
                                        @if ($errors->has('location.0'))
                                            <span class="invalid-feedback1 font-weight-bold" style="position: relative;top:-20px;">{{ $errors->first('location.0') }}</span>
                                        @endif
                                    </div>
                                    <p style="color: red;margin-top:-10px;margin-bottom:0px;font-weight: bold;">Selected: 
                                        @foreach ($edit->locations as $value)
                                            {{ $value->location->name }}, 
                                        @endforeach
                                    </p>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Conditions</label>
                                        <select id="choices-multiple-remove-button" name="condition[]"
                                            class="form-control @error('condition') is-invalid @enderror"
                                            placeholder="Select Condition" multiple>
                                            @foreach ($conditions as $key=>$value)
                                                @if ($edit->locations[$key]->location==$value->name)
                                                    <option value="{{ $value->id }}" selected>{{ $value->name }}</option>
                                                @else
                                                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @if ($errors->has('condition.0'))
                                            <span class="invalid-feedback1 font-weight-bold" style="position: relative;top:-20px;">{{ $errors->first('condition.0') }}</span>
                                        @endif
                                    </div>
                                    <p style="color: red;margin-top:-10px;margin-bottom:10px;font-weight: bold;">Selected: 
                                        @foreach ($edit->conditions as $value)
                                            {{ $value->condition->name }}, 
                                        @endforeach
                                    </p>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label>New Price</label>
                                        {!! Form::text('new_price',null,['id'=>'new_price','class'=>'form-control','onkeypress'=>"return onlyNumberKey(event)", 'required' => 'required']) !!}
                                        @if ($errors->has('new_price'))
                                        <span class="invalid-feedback1 font-weight-bold">{{ $errors->first('new_price') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label>New Sale Price</label>
                                        {!! Form::text('new_sale_price',null,['id'=>'new_sale_price','class'=>'form-control','onkeypress'=>"return onlyNumberKey(event)", 'required' => 'required']) !!}
                                        @if ($errors->has('new_sale_price'))
                                            <span class="invalid-feedback1 font-weight-bold">{{ $errors->first('new_sale_price') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label>New Warranty Days</label>
                                        {!! Form::text('new_warranty_days',null,['id'=>'new_warranty_days','class'=>'form-control','onkeypress'=>"return onlyNumberKey(event)", 'required' => 'required']) !!}
                                        @if ($errors->has('new_warranty_days'))
                                            <span class="invalid-feedback1 font-weight-bold">{{ $errors->first('new_warranty_days') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label>Refurnished Price</label>
                                        {!! Form::text('refurnished_price',null,['id'=>'refurnished_price','class'=>'form-control','onkeypress'=>"return onlyNumberKey(event)", 'required' => 'required']) !!}
                                        @if ($errors->has('refurnished_price'))
                                            <span class="invalid-feedback1 font-weight-bold">{{ $errors->first('refurnished_price') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label>Refurnished Sale Price</label>
                                        {!! Form::text('refurnished_sale_price',null,['id'=>'refurnished_sale_price','class'=>'form-control','onkeypress'=>"return onlyNumberKey(event)", 'required' => 'required']) !!}
                                        @if ($errors->has('refurnished_sale_price'))
                                            <span class="invalid-feedback1 font-weight-bold">{{ $errors->first('refurnished_sale_price') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label>Refurnished Warranty Days</label>
                                        {!! Form::text('refurnished_warranty_days',null,['id'=>'refurnished_warranty_days','class'=>'form-control','onkeypress'=>"return onlyNumberKey(event)", 'required' => 'required']) !!}
                                        @if ($errors->has('refurnished_warranty_days'))
                                            <span class="invalid-feedback1 font-weight-bold">{{ $errors->first('refurnished_warranty_days') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Make</label>
                                        <input type="text" name="make1" id="make1" class="form-control"
                                            value="{{ Auth::User()->name }}" disabled>
                                        {!! Form::hidden('make',Auth::User()->name,['id'=>'make','class'=>'form-control', 'required' => 'required']) !!}
                                        @if ($errors->has('make'))
                                            <span class="invalid-feedback1 font-weight-bold">{{ $errors->first('make') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Min Order</label>
                                        {!! Form::text('min_order',null,['id'=>'min_order','class'=>'form-control','onkeypress'=>"return onlyNumberKey(event)", 'required' => 'required']) !!}
                                        @if ($errors->has('min_order'))
                                            <span class="invalid-feedback1 font-weight-bold">{{ $errors->first('min_order') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Images (MAX 5) (File Size < 1MB)</label>
                                        <input type="file" name="images[]" id="images"
                                            class="form-control @error('images') is-invalid @enderror"
                                            accept="image/jpg, image/jpeg, image/png" multiple>
                                        @if ($errors->has('images'))
                                            <span class="invalid-feedback1 font-weight-bold">{{ $errors->first('images') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>SKU</label>
                                        {!! Form::text('sku',null,['id'=>'sku','class'=>'form-control']) !!}
                                        @if ($errors->has('sku'))
                                            <span class="invalid-feedback1 font-weight-bold">{{ $errors->first('sku') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Attachment</label>
                                        <input type="file" name="attachment" id="attachment"
                                            class="form-control @error('attachment') is-invalid @enderror">
                                        @error('attachment')
                                            <span class="invalid-feedback font-weight-bold">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <script>
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
                                </script>

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Description</label>
                                        {!! Form::textarea('description',null,['id'=>'description','class'=>'form-control', 'maxlength'=>'1000']) !!}
                                        @if ($errors->has('description'))
                                            <span class="invalid-feedback1 font-weight-bold">{{ $errors->first('description') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Details</label>
                                        {!! Form::textarea('details',null,['id'=>'details','class'=>'form-control']) !!}
                                        @if ($errors->has('details'))
                                        <span class="invalid-feedback1 font-weight-bold">{{ $errors->first('details') }}</span>
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
                                <label for="">Menu</label>
                                {!! Form::select('menu_id', $menus, null, [
                                    'id' => 'menu_id',
                                    'class' => 'form-control',
                                    'required' => 'required'
                                ]) !!}
                                @if ($errors->has('menu_id'))
                                    <span class="invalid-feedback1 font-weight-bold">{{ $errors->first('menu_id') }}</span>
                                @endif
                            </div>
                            <div class="form-group" style="margin-top: -10px;">
                                <label for="">Category</label>
                                {!! Form::select('category_id', $categories, null, [
                                    'id' => 'category_id',
                                    'class' => 'form-control',
                                    'required' => 'required'
                                ]) !!}
                                @if ($errors->has('category_id'))
                                    <span class="invalid-feedback1 font-weight-bold">{{ $errors->first('category_id') }}</span>
                                @endif
                            </div>
                            <div class="form-group" style="margin-top: -10px;">
                                <label for="">Sub Category</label>
                                {!! Form::select('subcategory_id', $sub_categories, null, [
                                    'id' => 'subcategory_id',
                                    'class' => 'form-control',
                                    'required' => 'required'
                                ]) !!}
                                @if ($errors->has('subcategory_id'))
                                    <span class="invalid-feedback1 font-weight-bold">{{ $errors->first('subcategory_id') }}</span>
                                @endif
                            </div>
                            <div class="form-group" style="margin-top: -10px;">
                                <label>Select Brand</label>
                                {!! Form::select('brand_id', $brands, null, [
                                    'id' => 'brand_id',
                                    'class' => 'form-control',
                                    'required' => 'required'
                                ]) !!}
                                @if ($errors->has('brand_id'))
                                    <span class="invalid-feedback1 font-weight-bold">{{ $errors->first('brand_id') }}</span>
                                @endif
                            </div>
                            <div class="form-group" style="margin-top: -10px;">
                                <label>Type</label>
                                {!! Form::select('type', $type, null, [
                                    'id' => 'type',
                                    'class' => 'form-control fstdropdown-select'
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
                                    <span class="invalid-feedback1 font-weight-bold">{{ $errors->first('parent_id') }}</span>
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
                            <div class="form-group" style="margin-top: 10px;">
                                <label>Upload Images</label>
                                <br>
                                <img src="{{ URL::asset('website-assets/images/800x600.png') }}" id="image1"
                                    width="95px" height="100px" alt=""
                                    style="margin-top: 10px;border:1px solid black;">
                                <img src="{{ URL::asset('website-assets/images/800x600.png') }}" id="image2"
                                    width="95px" height="100px" alt=""
                                    style="margin-top: 10px;border:1px solid black;">
                                <img src="{{ URL::asset('website-assets/images/800x600.png') }}" id="image3"
                                    width="95px" height="100px" alt=""
                                    style="margin-top: 10px;border:1px solid black;">
                                <img src="{{ URL::asset('website-assets/images/800x600.png') }}" id="image4"
                                    width="95px" height="100px" alt=""
                                    style="margin-top: 10px;border:1px solid black;">
                                <img src="{{ URL::asset('website-assets/images/800x600.png') }}" id="image5"
                                    width="95px" height="100px" alt=""
                                    style="margin-top: 10px;border:1px solid black;">
                            </div>
                            <div class="form-group" style="margin-top: 10px;">
                                <label>Uploaded Images</label>
                                <br>
                                @foreach ($edit->product_images as $value)
                                    <img src="{{ URL::asset('root/upload/products/small/'.$value->image) }}" id="image1"
                                        width="95px" height="100px" alt=""
                                        style="margin-top: 10px;border:1px solid black;">
                                @endforeach
                                
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
                                        {!! Form::text('width',null,['id'=>'width','class'=>'form-control','onkeypress'=>"return onlyNumberKey(event)"]) !!}
                                        @if ($errors->has('width'))
                                            <span class="invalid-feedback1 font-weight-bold">{{ $errors->first('width') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="height">Height</label>
                                        {!! Form::text('height',null,['id'=>'height','class'=>'form-control','onkeypress'=>"return onlyNumberKey(event)"]) !!}
                                        @if ($errors->has('height'))
                                            <span class="invalid-feedback1 font-weight-bold">{{ $errors->first('height') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="depth">Depth</label>
                                        {!! Form::text('depth',null,['id'=>'depth','class'=>'form-control','onkeypress'=>"return onlyNumberKey(event)"]) !!}
                                        @if ($errors->has('depth'))
                                            <span class="invalid-feedback1 font-weight-bold">{{ $errors->first('depth') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="weight">Weight</label>
                                        {!! Form::text('weight',null,['id'=>'weight','class'=>'form-control','onkeypress'=>"return onlyNumberKey(event)"]) !!}
                                        @if ($errors->has('weight'))
                                            <span class="invalid-feedback1 font-weight-bold">{{ $errors->first('weight') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                @foreach ($locations as $key=>$value)
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
                                            {!! Form::text('shipping_days[]',$edit->shipping_details[$key]->shipping_days,['id'=>'shipping_days','class'=>'form-control','onkeypress'=>"return onlyNumberKey(event)"]) !!}
                                            @if ($errors->has('shipping_days'))
                                                <span class="invalid-feedback1 font-weight-bold">{{ $errors->first('shipping_days') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Shipping.Charges</label>
                                            {!! Form::text('shipping_charges[]',$edit->shipping_details[$key]->shipping_charges,['id'=>'shipping_charges','class'=>'form-control','onkeypress'=>"return onlyNumberKey(event)"]) !!}
                                            @if ($errors->has('shipping_charges'))
                                                <span class="invalid-feedback1 font-weight-bold">{{ $errors->first('shipping_charges') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Import.Charges</label>
                                            {!! Form::text('import_charges[]',$edit->shipping_details[$key]->import_charges,['id'=>'import_charges','class'=>'form-control','onkeypress'=>"return onlyNumberKey(event)"]) !!}
                                            @if ($errors->has('import_charges'))
                                                <span class="invalid-feedback1 font-weight-bold">{{ $errors->first('import_charges') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Tax.Charges</label>
                                            {!! Form::text('tax_charges[]',$edit->shipping_details[$key]->tax_charges,['id'=>'tax_charges','class'=>'form-control','onkeypress'=>"return onlyNumberKey(event)"]) !!}
                                            @if ($errors->has('tax_charges'))
                                                <span class="invalid-feedback1 font-weight-bold">{{ $errors->first('tax_charges') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Other.Charges</label>
                                            {!! Form::text('other_charges[]',$edit->shipping_details[$key]->other_charges,['id'=>'other_charges','class'=>'form-control','onkeypress'=>"return onlyNumberKey(event)"]) !!}
                                            @if ($errors->has('other_charges'))
                                                <span class="invalid-feedback1 font-weight-bold">{{ $errors->first('other_charges') }}</span>
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
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </section>
@stop
@section('scripts')
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
@stop
