@extends('app')
@section('heads')
    <title>Edit Skill</title>
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
                            <h3 class="card-title">Edit Skill</h3>
                        </div>

                        {!! Form::model($edit, [
                            'method' => 'PATCH',
                            'action' => ['App\Http\Controllers\SkillsController@update', $edit->id],
                            'class' => 'form-horizontal',
                        ]) !!}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" name="title" id="title"
                                            class="form-control @error('title') is-invalid @enderror" value="{{ $edit->title }}" required>
                                        @error('title')
                                            <span class="invalid-feedback1">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="percentage">Percentage</label>
                                        <input type="text" name="percentage" id="percentage"
                                            class="form-control @error('percentage') is-invalid @enderror" value="{{ $edit->percentage }}" required onkeypress="return onlyDecimalNumberKey(event)">
                                        @error('percentage')
                                            <span class="invalid-feedback1">{{ $message }}</span>
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
    <script>
        function onlyDecimalNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode != 46 && charCode > 31 &&
                (charCode < 48 || charCode > 57))
                return false;

            return true;
        }
    </script>

    <script src="{{ URL::asset('website-assets/js/toastr.min.js') }}"></script>
    {!! Toastr::message() !!}
@stop
