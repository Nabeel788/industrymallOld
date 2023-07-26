@extends('app')
@section('heads')
    <title>Add New Blog</title>
    <style>
        .invalid-message {
            color: red;
            font-weight: bold;
        }
    </style>
@stop
@section('contents')
    <title>Add New Blog</title>
    <section class="content-header">
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

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card card-primary">
                        <div class="card-header bg-primary">
                            <h3 class="card-title">Add New Blog</h3>
                        </div>

                        {!! Form::open([
                            'url' => 'our-blogs',
                            'method' => 'POST',
                            'class' => 'form-horizontal',
                            'files' => 'true',
                            'enctype' => 'multipart/form-data',
                        ]) !!}
                        {!! Form::hidden('created_by', Auth::User()->id, ['id' => 'created_by']) !!}
                        {!! Form::hidden('updated_by', Auth::User()->id, ['id' => 'updated_by']) !!}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Title</label>
                                        {!! Form::text('title', null, ['id' => 'title', 'class' => 'form-control']) !!}
                                        @error('title')
                                            <span class="invalid-message">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Blog Category</label>
                                        {!! Form::select('blog_category_id', $blogsCategories, null, [
                                            'id' => 'blog_category_id',
                                            'class' => 'form-control fstdropdown-select',
                                        ]) !!}
                                        @error('blog_category_id')
                                            <span class="invalid-message">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Blog Sub Category</label>
                                        {!! Form::select('blog_sub_category_id', $blogssubCategories, null, [
                                            'id' => 'blog_sub_category_id',
                                            'class' => 'form-control',
                                        ]) !!}
                                        @error('blog_sub_category_id')
                                            <span class="invalid-message">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" name="image" id="image" class="form-control">
                                        @error('image')
                                            <span class="invalid-message">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Description</label>
                                        {!! Form::textarea('description', null, ['id' => 'description', 'class' => 'form-control']) !!}
                                        @error('description')
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
<script src="https://cdn.tiny.cloud/1/nnd7pakaxqr7isf3oqefsdlew1jsidgl78umfeus6tg21ng0/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script src="{{ URL::asset('website-assets/js/toastr.min.js') }}"></script>
{!! Toastr::message() !!}
<script>
        tinymce.init({
        selector: "textarea#description",
        relative_urls: false,
        paste_data_images: true,
        image_title: true,
        automatic_uploads: true,
        // images_upload_url: '/post/image/upload',
        // images_upload_url: '{{asset('upload')}}',
        images_upload_url: '{{URL::to("/uploads")}}',
        file_picker_types: "image",
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern"
        ],
        toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
        // override default upload handler to simulate successful upload
        file_picker_callback: function(cb, value, meta) {
            var input = document.createElement("input");
            input.setAttribute("type", "file");
            input.setAttribute("accept", "image/*");
            input.onchange = function() {
            var file = this.files[0];
                var reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = function() {
                    var id = "blobid" + new Date().getTime();
                    var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                    var base64 = reader.result.split(",")[1];
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
    // Change Categories 

    $('#blog_category_id').change(function() {
        var cat_id = $(this).val();
        // alert(cat_id);
        $.ajax({
            url: "{{ asset('get-blogsubcategories') }}?cat_id=" + cat_id,
            type: 'get',
            dataType: 'json',
            success: function(response) {
                // alert(response);
                
                if (response.length > 0) {
                    console.log(response);
                    var option;
                    $.each(response, function(i, v) {
                        option += `<option value="${v.id}">${v.title}</option>`;
                        
                    });
                    $('#blog_sub_category_id').html(option);
                } else {
                    var option = '<option value="" selected>Sub Category Not Found</option>';
                    $('#blog_sub_category_id').html(option);
                }
            }
        });
    });

    // End Here
</script>
    <!-- include TinyMceEditor js -->
    <!--<script src="{{ asset('assets/tinymc-editor/tinymce.min.js') }}"></script>-->

    <!--<script>-->
    <!--    tinymce.init({-->
    <!--        selector: '#description',-->
    <!--        plugins: 'advlist autolink lists link image charmap preview anchor pagebreak lists code',-->
    <!--        toolbar_mode: 'floating',-->
    <!--        toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | numlist bullist deflist code'-->
    <!--    });-->
    <!--</script>-->
@stop
