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
                            <h3 class="card-title">Blogs Settings</h3>
                        </div>
                        {!! Form::open([
                            'url' => '/update-blogs-settings',
                            'method' => 'POST',
                            'class' => 'form-horizontal',
                            'enctype' => 'multipart/form-data',
                        ]) !!}
                        <div class="card-body">
                            <div class="row">
                                {{-- <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="category1">Category 1</label>
                                        {!! Form::select('category1',$categories,$homeSettings->category1, ['id' => 'category1', 'class' => 'form-control fstdropdown-select']) !!}
                                        @error('category1')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div> --}}
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="category1">Category 1</label>
                                        {!! Form::select('blog_category1',$categories,$BlogsSetting->blog_category1,['id' => 'blog_category1', 'class' => 'form-control fstdropdown-select']) !!}
                                        @error('category1')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                               
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="category2">Category 2</label>
                                        {!! Form::select('blog_category2',$categories,$BlogsSetting->blog_category2,['id' => 'blog_category2', 'class' => 'form-control fstdropdown-select']) !!}
                                        @error('category2')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="category3">Category 3</label>
                                        {!! Form::select('blog_category3',$categories,$BlogsSetting->blog_category3,['id' => 'blog_category3', 'class' => 'form-control fstdropdown-select']) !!}
                                        @error('category3')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="category4">Category 4</label>
                                        {!! Form::select('blog_category4',$categories,$BlogsSetting->blog_category4,['id' => 'blog_category4', 'class' => 'form-control fstdropdown-select']) !!}
                                        @error('category4')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="category4">Category 5</label>
                                        {!! Form::select('blog_category5',$categories,$BlogsSetting->blog_category5,['id' => 'blog_category5', 'class' => 'form-control fstdropdown-select']) !!}
                                        @error('category4')
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
               
            </div>
        </div>
    </section>
@stop
@section('scripts')
<script src="{{ URL::asset('website-assets/js/toastr.min.js') }}"></script>
    {!! Toastr::message() !!}
@stop
