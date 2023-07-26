@extends('app')
@section('heads')
    <title>Add Partner</title>
@stop
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

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add Partner</h3>
                        </div>

                        {!! Form::open(['url' => 'partners', 'method' => 'POST', 'class' => 'form-horizontal','enctype'=>'multipart/form-data']) !!}
                        {!! Form::hidden('type','partner',['id'=>'type']) !!}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Name</label>
                                        {!! Form::text('brand_name', null, ['id' => 'brand_name', 'class' => 'form-control', 'autofocus' => 'autofocus']) !!}
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Logo</label>
                                        <input type="file" name="logo" id="logo" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Link</label>
                                        {!! Form::text('link', null, ['id' => 'link', 'class' => 'form-control']) !!}
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
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Partner Logo</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Logo</label>
                                        <img src="{{ URL::asset('website-assets/images/dummy/img_410_x_186.png') }}"
                                            id="show_brand_logo" class="img-fluid" alt="">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@stop
@section('scripts')
    <script>
        $(document).ready(function() {
            $('#logo').change(function(event) {
                var filePath1 = URL.createObjectURL(event.target.files[0]);
                $("#show_brand_logo").fadeIn("fast").attr('src', filePath1);
            });
        });
    </script>
@stop
