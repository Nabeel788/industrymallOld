@extends('app')
@section('heads')
    <title>Edit Blog Sub Category</title>
    <style>
        .invalid-message{
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
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header bg-info">
                            <h3 class="card-title">Edit Blog Category</h3>
                        </div>
                        {!! Form::model($edit, ['method' => 'PATCH', 'action' => ['App\Http\Controllers\BlogSubCategoryController@update', $edit->id], 'class' => 'form-horizontal']) !!}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Title</label>
                                        {!! Form::text('title', null, ['id' => 'title', 'class' => 'form-control','required'=>'required']) !!}
                                        @error('title')
                                            <span class="invalid-message">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                  <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Category:</label>
                                        {!! Form::select('blog_category_id', $blogcategory, null,['id' => 'blog_category_id', 'class' => 'form-control','required'=>'required']) !!}
                                        @error('title')
                                            <span class="invalid-message">{{ $message }}</span>
                                        @enderror
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
