@extends('app')
@section('heads')
    <title>Edit Training</title>
    <style>
        .invalid-message {
            color: red;
            font-weight: bold;
        }
    </style>
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
                            <h3 class="card-title">Edit Training</h3>
                        </div>
                        {!! Form::model($edit, [
                            'method' => 'PATCH',
                            'action' => ['App\Http\Controllers\TrainingsController@update', $edit->id],
                            'class' => 'form-horizontal',
                            'enctype' => 'multipart/form-data',
                        ]) !!}
                        {!! Form::hidden('updated_by', Auth::User()->id, ['id' => 'updated_by']) !!}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Title</label>
                                        {!! Form::text('title', null, ['id' => 'title', 'class' =>
                                        'form-control','autofocus'=>'autofocus','required'=>'required']) !!}
                                        @error('title')
                                        <span class="invalid-message">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Training Category</label>
                                        {!! Form::select('training_category_id',$trainingCategories,null,['id' =>
                                        'training_category_id', 'class' => 'form-control fstdropdown-select']) !!}
                                        @error('training_category_id')
                                        <span class="invalid-message">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
    
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" name="image" id="image" class="form-control" required>
                                        @error('image')
                                        <span class="invalid-message">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Description</label>
                                        {!! Form::textarea('description', null, ['id' => 'description', 'class' =>
                                        'form-control']) !!}
                                        @error('description')
                                        <span class="invalid-message">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Specification</label>
                                        {!! Form::textarea('specification', null, ['id' => 'specification', 'class' =>
                                        'form-control']) !!}
                                        @error('specification')
                                        <span class="invalid-message">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Language</label>
                                        {!! Form::text('language', null, ['id' => 'language', 'class' =>
                                        'form-control','autofocus'=>'autofocus','required'=>'required']) !!}
                                        @error('language')
                                        <span class="invalid-message">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Instructor Name</label>
                                        {!! Form::select('intructor_id',$instructor,null,['id' => 'intructor_id', 'class' =>
                                        'form-control fstdropdown-select']) !!}
                                        @error('intructor_id')
                                        <span class="invalid-message">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Students</label>
                                        {!! Form::text('students', null, ['id' => 'students', 'class' =>
                                        'form-control','autofocus'=>'autofocus','required'=>'required']) !!}
                                        @error('students')
                                        <span class="invalid-message">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Lectures</label>
                                        {!! Form::text('lectures', null, ['id' => 'lectures', 'class' =>
                                        'form-control','autofocus'=>'autofocus','required'=>'required']) !!}
                                        @error('lectures')
                                        <span class="invalid-message">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Quizzes</label>
                                        {!! Form::text('quizzes', null, ['id' => 'quizzes', 'class' =>
                                        'form-control','autofocus'=>'autofocus','required'=>'required']) !!}
                                        @error('quizzes')
                                        <span class="invalid-message">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Duration</label>
                                        {!! Form::text('duration', null, ['id' => 'duration', 'class' =>
                                        'form-control','autofocus'=>'autofocus','required'=>'required']) !!}
                                        @error('duration')
                                        <span class="invalid-message">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Skill Level</label>
                                        {!! Form::text('skill_level', null, ['id' => 'skill_level', 'class' =>
                                        'form-control','autofocus'=>'autofocus','required'=>'required']) !!}
                                        @error('skill_level')
                                        <span class="invalid-message">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
    
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Certificate</label>
                                        {!! Form::text('certificate', null, ['id' => 'certificate', 'class' =>
                                        'form-control','autofocus'=>'autofocus','required'=>'required']) !!}
                                        @error('certificate')
                                        <span class="invalid-message">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Assessments</label>
                                        {!! Form::text('assessments', null, ['id' => 'assessments', 'class' =>
                                        'form-control','autofocus'=>'autofocus','required'=>'required']) !!}
                                        @error('assessments')
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
        images_upload_url: '{{URL::to("/uploads1")}}',
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
        tinymce.init({
        selector: "textarea#specification",
        relative_urls: false,
        paste_data_images: true,
        image_title: true,
        automatic_uploads: true,
        // images_upload_url: '/post/image/upload',
        // images_upload_url: '{{asset('upload')}}',
        images_upload_url: '{{URL::to("/uploads1")}}',
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
            input.setAttribute("type", "file1");
            input.setAttribute("accept", "image/*");
            input.onchange = function() {
            var file = this.files[0];
                var reader = new FileReader();
                reader.readAsDataURL(file1);
                reader.onload = function() {
                    var id = "blobid" + new Date().getTime();
                    var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                    var base64 = reader.result.split(",")[1];
                    var blobInfo = blobCache.create(id, file, base64);
                    blobCache.add(blobInfo);
                    cb(blobInfo.blobUri(), { title: file1.name });
                };
            };
            input.click();
        }
    });
</script>





    <!--<script src="{{ URL::asset('website-assets/js/toastr.min.js') }}"></script>-->
    <!--{!! Toastr::message() !!}-->
    
    <!-- include TinyMceEditor js -->
    <!-- <script src="{{ asset('assets/tinymc-editor/tinymce.min.js') }}"></script>-->

    <!--<script>-->
    <!--    tinymce.init({-->
    <!--        selector: '#description',-->
    <!--        plugins: 'advlist autolink lists link image charmap preview anchor pagebreak lists code',-->
    <!--        toolbar_mode: 'floating',-->
    <!--        toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | numlist bullist deflist code'-->
    <!--    });-->
    <!--    tinymce.init({-->
    <!--        selector: '#specification',-->
    <!--        plugins: 'advlist autolink lists link image charmap preview anchor pagebreak lists code',-->
    <!--        toolbar_mode: 'floating',-->
    <!--        toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | numlist bullist deflist code'-->
    <!--    });-->
    <!--</script>-->
@stop
