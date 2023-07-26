@extends('app')
@section('heads')
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
            <input type="hidden" id="created_by" name="created_by" value="{{ Auth::User()->id }}">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Add Product</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Product code</label>
                                        <input type="text" name="code" id="code"
                                            class="form-control @error('code') is-invalid @enderror"
                                            value="{{ old('code') }}">
                                        @error('code')
                                            <span class="invalid-feedback font-weight-bold">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Product Name</label>
                                        <input type="text" name="name" id="name"
                                            class="form-control @error('name') is-invalid @enderror"
                                            value="{{ old('name') }}">
                                        @error('name')
                                            <span class="invalid-feedback font-weight-bold">{{ $message }}</span>
                                        @enderror
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
                                        @error('location')
                                            <span class="invalid-feedback font-weight-bold">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Conditions</label>
                                        <select id="choices-multiple-remove-button" name="condition[]"
                                            class="form-control @error('condition') is-invalid @enderror"
                                            placeholder="Select Condition" multiple>
                                            @foreach ($conditions as $value)
                                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('condition')
                                            <span class="invalid-feedback font-weight-bold">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label>New Price</label>
                                        <input type="text" name="new_price" id="new_price"
                                            class="form-control @error('new_price') is-invalid @enderror"
                                            value="{{ old('new_price') }}">
                                        @error('new_price')
                                            <span class="invalid-feedback font-weight-bold">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label>New Sale Price</label>
                                        <input type="text" name="new_sale_price" id="new_sale_price"
                                            class="form-control @error('new_sale_price') is-invalid @enderror"
                                            value="{{ old('new_sale_price') }}">
                                        @error('new_sale_price')
                                            <span class="invalid-feedback font-weight-bold">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label>New Warranty Days</label>
                                        <input type="text" name="new_warranty_days" id="new_warranty_days"
                                            class="form-control @error('new_warranty_days') is-invalid @enderror"
                                            value="{{ old('new_warranty_days') }}">
                                        @error('new_warranty_days')
                                            <span class="invalid-feedback font-weight-bold">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label>Refurnished Price</label>
                                        <input type="text" name="refurnished_price" id="refurnished_price"
                                            class="form-control @error('refurnished_price') is-invalid @enderror"
                                            value="{{ old('refurnished_price') }}">
                                        @error('refurnished_price')
                                            <span class="invalid-feedback font-weight-bold">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label>Refurnished Sale Price</label>
                                        <input type="text" name="refurnished_sale_price" id="refurnished_sale_price"
                                            class="form-control @error('refurnished_sale_price') is-invalid @enderror"
                                            value="{{ old('refurnished_sale_price') }}">
                                        @error('refurnished_sale_price')
                                            <span class="invalid-feedback font-weight-bold">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label>Refurnished Warranty Days</label>
                                        <input type="text" name="refurnished_warranty_days"
                                            id="refurnished_warranty_days"
                                            class="form-control @error('refurnished_warranty_days') is-invalid @enderror"
                                            value="{{ old('refurnished_warranty_days') }}">
                                        @error('refurnished_warranty_days')
                                            <span class="invalid-feedback font-weight-bold">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label>Model No</label>
                                        <input type="text" name="model_no1" id="model_no1"
                                            class="form-control @error('model_no') is-invalid @enderror"
                                            value="{{ old('model_no') }}">
                                        @error('model_no')
                                            <span class="invalid-feedback font-weight-bold">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label>Make</label>
                                        <input type="text" name="make1" id="make1"
                                            class="form-control"
                                            value="{{ Auth::User()->name }}" disabled>
                                        <input type="hidden" name="make" id="make"
                                            class="form-control @error('make') is-invalid @enderror"
                                            value="{{ Auth::User()->name}}">
                                        @error('make')
                                            <span class="invalid-feedback font-weight-bold">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label>Min Order</label>
                                        <input type="text" name="min_order" id="min_order"
                                            class="form-control" required 
                                            value="{{ old('min_order') }}">
                                        @error('min_order')
                                            <span class="invalid-feedback font-weight-bold">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Images (MAX 5) (File Size < 1MB)</label>
                                                <input type="file" name="images[]" id="images"
                                                    class="form-control @error('images') is-invalid @enderror"
                                                    accept="image/jpg, image/jpeg, image/png" multiple required>
                                                @error('images')
                                                    <span class="invalid-feedback font-weight-bold">{{ $message }}</span>
                                                @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>SKU</label>
                                        <input type="text" name="sku" id="sku"
                                            class="form-control @error('sku') is-invalid @enderror"
                                            value="{{ old('sku') }}">
                                        @error('sku')
                                            <span class="invalid-feedback font-weight-bold">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Attachment</label>
                                        <input type="file" name="attachment" id="attachment"
                                            class="form-control @error('attachment') is-invalid @enderror" required>
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
                                        <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror"
                                            rows="4" value="{{ old('description') }}"></textarea>
                                        @error('description')
                                            <span class="invalid-feedback font-weight-bold">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Details</label>
                                        <textarea name="details" id="details" class="form-control @error('details') is-invalid @enderror" rows="4"
                                            value="{{ old('details') }}"></textarea>
                                        @error('details')
                                            <span class="invalid-feedback font-weight-bold">{{ $message }}</span>
                                        @enderror
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
                                    'required' => 'required',
                                ]) !!}
                            </div>
                            <div class="form-group" style="margin-top: -10px;">
                                <label for="">Category</label>
                                {!! Form::select('category_id', $categories, null, [
                                    'id' => 'category_id',
                                    'class' => 'form-control',
                                    'required' => 'required',
                                ]) !!}
                            </div>
                            <div class="form-group" style="margin-top: -10px;">
                                <label for="">Sub Category</label>
                                {!! Form::select('subcategory_id', $sub_categories, null, [
                                    'id' => 'subcategory_id',
                                    'class' => 'form-control',
                                    'required' => 'required',
                                ]) !!}
                            </div>
                            <div class="form-group" style="margin-top: -10px;">
                                <label>Select Brand</label>
                                {!! Form::select('brand_id', $brands, null, [
                                    'id' => 'brand_id',
                                    'class' => 'form-control',
                                    'required' => 'required',
                                ]) !!}
                            </div>
                            <div class="form-group" style="margin-top: -10px;">
                                <label>Type</label>
                                {!! Form::select('type', $type, null, [
                                    'id' => 'type',
                                    'class' => 'form-control fstdropdown-select',
                                    'required' => 'required',
                                ]) !!}
                            </div>
                            <div class="form-group products-list d-none" style="margin-top: -10px;">
                                <label>Product List</label>
                                {!! Form::select('parent_id', $productsList, null, [
                                    'id' => 'parent_id',
                                    'class' => 'form-control fstdropdown-select',
                                ]) !!}
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
                                        <input type="text" name="width" id="width"
                                            class="form-control @error('width') is-invalid @enderror"
                                            value="{{ old('width') }}" required>
                                        @error('width')
                                            <span class="invalid-feedback font-weight-bold">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="height">Height</label>
                                        <input type="text" name="height" id="height"
                                            class="form-control @error('height') is-invalid @enderror"
                                            value="{{ old('height') }}" required>
                                        @error('height')
                                            <span class="invalid-feedback font-weight-bold">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="depth">Depth</label>
                                        <input type="text" name="depth" id="depth"
                                            class="form-control @error('depth') is-invalid @enderror"
                                            value="{{ old('depth') }}" required>
                                        @error('depth')
                                            <span class="invalid-feedback font-weight-bold">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="weight">Weight</label>
                                        <input type="text" name="weight" id="weight"
                                            class="form-control @error('weight') is-invalid @enderror"
                                            value="{{ old('weight') }}" required>
                                        @error('weight')
                                            <span class="invalid-feedback font-weight-bold">{{ $message }}</span>
                                        @enderror
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
                                            <input type="text" name="shipping_days[]" id="shipping_days"
                                                class="form-control @error('shipping_days') is-invalid @enderror"
                                                value="{{ old('shipping_days') }}">
                                            @error('shipping_days')
                                                <span class="invalid-feedback font-weight-bold">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Shipping.Charges</label>
                                            <input type="text" name="shipping_charges[]" id="shipping_charges"
                                                class="form-control @error('shipping_charges') is-invalid @enderror"
                                                value="{{ old('shipping_charges') }}">
                                            @error('shipping_charges')
                                                <span class="invalid-feedback font-weight-bold">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Import.Charges</label>
                                            <input type="text" name="import_charges[]" id="import_charges"
                                                class="form-control @error('import_charges') is-invalid @enderror"
                                                value="{{ old('import_charges') }}">
                                            @error('import_charges')
                                                <span class="invalid-feedback font-weight-bold">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Tax.Charges</label>
                                            <input type="text" name="tax_charges[]" id="tax_charges"
                                                class="form-control @error('tax_charges') is-invalid @enderror"
                                                value="{{ old('tax_charges') }}">
                                            @error('tax_charges')
                                                <span class="invalid-feedback font-weight-bold">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Other.Charges</label>
                                            <input type="text" name="other_charges[]" id="other_charges"
                                                class="form-control @error('other_charges') is-invalid @enderror"
                                                value="{{ old('other_charges') }}">
                                            @error('other_charges')
                                                <span class="invalid-feedback font-weight-bold">{{ $message }}</span>
                                            @enderror
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
                        var option = '<option selected>Category Not Found</option>';
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
                        var option = '<option selected>Sub Category Not Found</option>';
                        $('#subcategory_id').html(option);
                    }
                }
            });
        });


        // End Here
    </script>

    <script src="{{ URL::asset('website-assets/js/toastr.min.js') }}"></script>
    {!! Toastr::message() !!}
@stop