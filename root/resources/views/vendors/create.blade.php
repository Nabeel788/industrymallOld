@extends('app')
@section('heads')
    <title>Add New Vendor</title>
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
                            <h3 class="card-title">Add New Vendor</h3>
                        </div>
 
                        {!! Form::open([
                            'url' => 'vendors',
                            'method' => 'POST',
                            'class' => 'form-horizontal',
                            'enctype' => 'multipart/form-data',
                        ]) !!}
                        {!! Form::hidden('role','Vendor',['id'=>'role']) !!}
                        {!! Form::hidden('biller_id',Auth::User()->id,['id'=>'biller_id']) !!}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="first_name">First Name</label>
                                        {!! Form::text('first_name', null, [
                                            'id' => 'first_name',
                                            'class' => 'form-control',
                                            'autofocus' => 'autofocus',
                                            'required' => 'required'
                                        ]) !!}
                                    @error('first_name')
                                        <span class="invalid-feedback1">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="last_name">Last Name</label>
                                        {!! Form::text('last_name', null, [
                                            'id' => 'last_name',
                                            'class' => 'form-control',
                                            'required' => 'required'
                                        ]) !!}
                                    @error('last_name')
                                        <span class="invalid-feedback1">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="phone1">Phone No</label>
                                        {!! Form::text('phone1', null, [
                                            'id' => 'phone1',
                                            'class' => 'form-control',
                                            'required' => 'required'
                                        ]) !!}
                                    @error('phone1')
                                        <span class="invalid-feedback1">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input type="file" name="image" id="image" class="form-control" required>
                                        @error('image')
                                            <span class="invalid-feedback1">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        {!! Form::email('email', null, [
                                            'id' => 'email',
                                            'class' => 'form-control',
                                            'required' => 'required'
                                        ]) !!}
                                    @error('email')
                                        <span class="invalid-feedback1">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        {!! Form::text('password', null, [
                                            'id' => 'password',
                                            'class' => 'form-control',
                                            'required' => 'required'
                                        ]) !!}
                                    @error('password')
                                        <span class="invalid-feedback1">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        {!! Form::select('status',$status,null, [
                                            'id' => 'status',
                                            'class' => 'form-control fstdropdown-select',
                                            'required' => 'required'
                                        ]) !!}
                                    @error('status')
                                        <span class="invalid-feedback1">{{ $message }}</span>
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
