@extends('app')
@section('heads')
    <title>Home Settings</title>
    <link rel="stylesheet" href="{{ URL::asset('website-assets/css/toastr.min.css') }}">
@stop
@section('contents')
    <section class="content-header"></section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Home Settings</h3>
                        </div>
                        {!! Form::open([
                            'url' => '/update-home-settings',
                            'method' => 'POST',
                            'class' => 'form-horizontal',
                            'enctype' => 'multipart/form-data',
                        ]) !!}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="category1">Category 1</label>
                                        {!! Form::select('category1',$categories,$homeSettings->category1, ['id' => 'category1', 'class' => 'form-control fstdropdown-select']) !!}
                                        @error('category1')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="category1_image">Category1 Image (Dim: 295 x 672)</label>
                                        <input type="file" name="category1_image" id="category1_image" class="form-control">
                                        @error('category1_image')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="category2">Category 2</label>
                                        {!! Form::select('category2',$categories,$homeSettings->category2, ['id' => 'category2', 'class' => 'form-control fstdropdown-select']) !!}
                                        @error('category2')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="category2_image">Category2 Image (Dim: 295 x 672)</label>
                                        <input type="file" name="category2_image" id="category2_image" class="form-control">
                                        @error('category2_image')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="center_image1">Center Image 1 (Dim: 610 x 200)</label>
                                        <input type="file" name="center_image1" id="center_image1" class="form-control">
                                        @error('center_image1')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="center_image2">Center Image 2 (Dim: 610 x 200)</label>
                                        <input type="file" name="center_image2" id="center_image2" class="form-control">
                                        @error('center_image2')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="category3">Category 3</label>
                                        {!! Form::select('category3',$categories,$homeSettings->category3, ['id' => 'category3', 'class' => 'form-control fstdropdown-select']) !!}
                                        @error('category3')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="category3_image">Category3 Image (Dim: 295 x 672)</label>
                                        <input type="file" name="category3_image" id="category3_image" class="form-control">
                                        @error('category3_image')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="category4">Category 4</label>
                                        {!! Form::select('category4',$categories,$homeSettings->category4, ['id' => 'category4', 'class' => 'form-control fstdropdown-select']) !!}
                                        @error('category4')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="category4_image">Category4 Image (Dim: 295 x 672)</label>
                                        <input type="file" name="category4_image" id="category4_image" class="form-control">
                                        @error('category4_image')
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
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Home Images</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Image 1</label>
                                        <img src="{{ $homeSettings->category1_image }}" width="100px" alt="">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Image 2</label>
                                        <img src="{{ $homeSettings->category2_image }}" width="100px" alt="">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Center Img 1</label>
                                        <img src="{{ $homeSettings->center_image1 }}" width="100px" alt="">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Center Img 2</label>
                                        <img src="{{ $homeSettings->center_image2 }}" width="100px" alt="">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Image 3</label>
                                        <img src="{{ $homeSettings->category3_image }}" width="100px" alt="">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Image 4</label>
                                        <img src="{{ $homeSettings->category4_image }}" width="100px" alt="">
                                    </div>
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
