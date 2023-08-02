@extends('app')
@section('heads')
    <!DOCTYPE html>
    <title>Edit Service</title>
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
                            <h3 class="card-title">Edit Service</h3>
                        </div>
                        <!-- form start -->
                        {!! Form::model($edit, [
                            'method' => 'PATCH',
                            'action' => ['App\Http\Controllers\ServicesController@update', $edit->id],
                            'class' => 'form-horizontal',
                            'enctype' => 'multipart/form-data',
                        ]) !!}
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        {!! Form::text('title', null, [
                                            'id' => 'title',
                                            'class' => 'form-control',
                                            'autofocus' => 'autofocus',
                                            'required' => 'required',
                                        ]) !!}
                                        @error('title')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input type="file" name="image" id="image" class="form-control">
                                        @error('image')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        {!! Form::textarea('description', null, [
                                            'id' => 'description',
                                            'class' => 'form-control',
                                        ]) !!}
                                        @error('description')
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
        images_upload_url: '{{URL::to("/uploads2")}}',
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
@stop
