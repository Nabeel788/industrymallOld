@extends('app')
@section('heads')
    <title>Add New Vendor</title>
    <link rel="stylesheet" href="{{ URL::asset('website-assets/css/toastr.min.css') }}">
@stop
@section('contents')
    <section class="content-header"></section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Add New User</h3>
                        </div>

                        {!! Form::open([
                            'url' => 'roles',
                            'method' => 'POST',
                            'class' => 'form-horizontal',
                            'files' => 'true',
                            'enctype' => 'multipart/form-data',
                        ]) !!}
                        <input type="hidden" id="biller_id" name="biller_id" value="{{ Auth::User()->id }}">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Name</label>
                                        {!! Form::text('name', null, ['id' => 'name', 'class' => 'form-control', 'autofocus' => 'autofocus']) !!}
                                    </div>
                                </div>
                                {{-- <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Category</label>
                                        {!! Form::select('category_id', $shop, null, ['id' => 'category_id', 'class' => 'form-control']) !!}
                                    </div>
                                </div> --}}
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        {!! Form::text('phone', null, ['id' => 'phone', 'class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Gender</label>
                                        {!! Form::select('gender', ['Male' => 'Male', 'Female' => 'Female'], null, [
                                            'id' => 'gender',
                                            'class' => 'form-control',
                                        ]) !!}
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Profession</label>
                                        {!! Form::text('profession', null, ['id' => 'profession', 'class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>City</label>
                                        {!! Form::text('city', null, ['id' => 'city', 'class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Country</label>
                                        {!! Form::text('country', 'PAKISTAN', ['id' => 'country', 'class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        {!! Form::text('addres', null, ['id' => 'addres', 'class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" name="image" id="image" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Email</label>
                                        {!! Form::email('email', null, ['id' => 'email', 'class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Password</label>
                                        {!! Form::text('password', null, ['id' => 'password', 'class' => 'form-control']) !!}
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