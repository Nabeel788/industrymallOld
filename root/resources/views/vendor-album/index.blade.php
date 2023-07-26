@extends('app')
@section('heads')
    <title>Add New Album</title>
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
                            <h3 class="card-title">Add New Album</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        {!! Form::open([
                            'url' => 'vendor-album',
                            'method' => 'POST',
                            'class' => 'form-horizontal vendor_album_form',
                            'enctype' => 'multipart/form-data',
                            'id'=>"upload_form"
                        ]) !!}

                        <div class="images_names"></div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <form method="post" id="upload_form" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <label for="image">Image</label>
                                            <input type="file" name="select_file[]" id="select_file" class="form-control"
                                                multiple />
                                            <input type="submit" name="upload" id="upload" class="btn btn-primary d-none"
                                                value="Upload">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Album Image's</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="row" id="uploaded_image">
                                    @foreach ($vendorAlbums as $value)
                                    <div class="col-lg-3 col-md-3 col-sm-12 mt-5" id="row{{ $value->image }}">
                                        <i class="fa fa-close" data-path="{{ $value->image }}" id="remove_button" style="position: relative;top:-90px;left:205px;background: #999999;padding:3px;border-radius:10px;color:white;cursor: pointer;"></i>
                                        <img src="{{ URL::asset('root/upload/vendor-album/' . $value->image) }}" style="border: 1px solid #eee;" alt="Vendor Album Image">
                                    </div>
                                    @endforeach
                                </div>


                                <script>
                                    $(document).ready(function() {

                                        $('#upload_form , #select_file').on('change', function(event) {
                                            event.preventDefault();

                                            $.ajax({
                                                url: "{{ asset('upload_vendor_album_image_ajax') }}",
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
                                                        // ImgHTML += `<div class="col-lg-3 col-md-3 col-sm-12 mt-5">
                                                        //                 <label id="row${v}">
                                                        //                     <img src="../root/upload/vendor-album/${v}" style="border: 1px solid #eee;" />
                                                        //                     <span data-path="${v}" id="remove_button" style="position:relative;top:-35px;left:-10px;background:red;color:white;padding:0px 5px 3px 5px;border-radius:100%;cursor:pointer;">x</span>   
                                                        //                 </label>
                                                        //             </div>`;
                                                        ImgHTML += ` <div class="col-lg-3 col-md-3 col-sm-12 mt-5" id="row${v}}">
                                                                        <i class="fa fa-close" data-path="${v}}" id="remove_button" style="position: relative;top:-90px;left:205px;background: #999999;padding:3px;border-radius:10px;color:white;cursor: pointer;"></i>
                                                                        <img src="../root/upload/vendor-album/${v}" style="border: 1px solid #eee;" alt="Vendor Album Image">
                                                                    </div>`;
                                                    });

                                                    $('#uploaded_image').append(ImgHTML);
                                                    $('#select_file').val('');
                                                }
                                            });
                                        });


                                        $(document).on('click', '#remove_button', function() {
                                            var path = $(this).attr("data-path");
                                            $.ajax({
                                                url: "{{ asset('delete_vendor_album_image_ajax') }}",
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
                        </div>
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
