@extends('app')
@section('heads')
    <title>Add Category</title>
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
                            <h3 class="card-title">Add Category</h3>
                        </div>
                        {!! Form::open([
                            'url' => 'categories',
                            'method' => 'POST',
                            'class' => 'form-horizontal',
                            'files' => 'true',
                            'enctype' => 'multipart/form-data',
                        ]) !!}
                        {!! Form::hidden('biller',Auth::User()->id,['id'=>'biller']) !!}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Menu Name</label>
                                        {!! Form::select('menu_id', $menu, null, ['id' => 'menu_id', 'class' => 'form-control','required'=>'required']) !!}
                                        @error('menu_id')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Name</label>
                                        {!! Form::text('name', null, ['id' => 'name', 'class' => 'form-control','required'=>'required']) !!}
                                        @error('name')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Commission</label>
                                        {!! Form::text('commission', null, ['id' => 'commission', 'class' => 'form-control','required'=>'required']) !!}
                                        @error('commission')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Category Image</label>
                                        <input type="file" name="img" id="img" class="form-control">
                                        @error('img')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @endif
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
    <script src="{{ URL::asset('website-assets/js/toastr.min.js') }}"></script>
    {!! Toastr::message() !!}
@stop
