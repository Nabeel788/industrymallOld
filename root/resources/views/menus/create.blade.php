@extends('app')
@section('heads')
    <title>Add Menu</title>
    <link rel="stylesheet" href="{{ URL::asset('website-assets/css/toastr.min.css') }}">
    <style>
        .fstdiv>.fstdropdown>.fstlist>div {
            font-family: 'FontAwesome', 'sans-serif';
        }

        .fstdiv>.fstdropdown>.fstselected {
            font-family: 'FontAwesome', 'sans-serif';
        }
    </style>
@stop
@section('contents')

    <section class="content-header"></section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Add Menu</h3>
                        </div>

                        {!! Form::open([
                            'url' => 'menus',
                            'method' => 'POST',
                            'class' => 'form-horizontal',
                            'enctype' => 'multipart/form-data',
                        ]) !!}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Name</label>
                                        {!! Form::text('name', null, [
                                            'id' => 'name',
                                            'class' => 'form-control',
                                            'autofocus' => 'autofocus',
                                            'required' => 'required',
                                        ]) !!}
                                        @error('name')
                                            <span class="invalid-feedback1 font-weight-bold">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Icon</label>
                                        <select name="icon" id="icon"
                                            class="form-control faselect fstdropdown-select @error('icon') is-invalid @enderror"
                                            required>
                                            <option value="">Select Icon</option>
                                            @for ($i = 0; $i < count($data); $i++)
                                                <option value="{{ $data[$i]['name'] }}">{!! $data[$i]['code'] !!}
                                                    {{ $data[$i]['name'] }}</option>
                                            @endfor
                                        </select>
                                        @error('icon')
                                            <span class="invalid-feedback1 font-weight-bold">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Image (1100 x 450)</label>
                                        <input type="file" name="image" id="image" class="form-control" required>
                                        @error('image')
                                            <span class="invalid-feedback1 font-weight-bold">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Image For App (100 x 100)</label>
                                        <input type="file" name="imageforapp" id="imageforapp" class="form-control" required>
                                        @error('imageforapp')
                                            <span class="invalid-feedback1 font-weight-bold">{{ $message }}</span>
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
    <script src="{{ URL::asset('website-assets/js/toastr.min.js') }}"></script>
    {!! Toastr::message() !!}
@stop
