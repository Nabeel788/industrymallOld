<!DOCTYPE html>
@extends('app')
@section('contents')
    <title>Edit About Us</title>
    <section class="content-header">
        <div class="container-fluid"></div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Edit About Us</h3>
                        </div>

                        {!! Form::model($edit, [
                            'method' => 'PATCH',
                            'action' => ['App\Http\Controllers\AboutUsController@update', $edit->id],
                            'class' => 'form-horizontal',
                        ]) !!}
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>OUR MISSION</label>
                                        {!! Form::textarea('mission', null, ['id' => 'mission', 'class' => 'form-control', 'autofocus' => 'autofocus']) !!}
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>OUR STORIES</label>
                                        {!! Form::textarea('stories', null, ['id' => 'stories', 'class' => 'form-control', 'autofocus' => 'autofocus']) !!}
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>OUR APPROACH</label>
                                        {!! Form::textarea('approach', null, [
                                            'id' => 'approach',
                                            'class' => 'form-control',
                                            'autofocus' => 'autofocus',
                                        ]) !!}
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>OUR PHILOSOPHY</label>
                                        {!! Form::textarea('philosophy', null, [
                                            'id' => 'philosophy',
                                            'class' => 'form-control',
                                            'autofocus' => 'autofocus',
                                        ]) !!}
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="form-group">
                                        <label>WORLD AWARDS</label>
                                        {!! Form::text('awards', null, [
                                            'id' => 'awards',
                                            'class' => 'form-control',
                                            'autofocus' => 'autofocus',
                                        ]) !!}
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="form-group">
                                        <label>PROJECT SUCCESS</label>
                                        {!! Form::text('projects', null, [
                                            'id' => 'projects',
                                            'class' => 'form-control',
                                            'autofocus' => 'autofocus',
                                        ]) !!}
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="form-group">
                                        <label>EMPLOYEES</label>
                                        {!! Form::text('employees', null, [
                                            'id' => 'employees',
                                            'class' => 'form-control',
                                            'autofocus' => 'autofocus',
                                        ]) !!}
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="form-group">
                                        <label>WORLDWIDE CLIENTS</label>
                                        {!! Form::text('clients', null, [
                                            'id' => 'clients',
                                            'class' => 'form-control',
                                            'autofocus' => 'autofocus',
                                        ]) !!}
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
    <!-- include TinyMceEditor js -->
    <script src="{{ asset('assets/tinymc-editor/tinymce.min.js') }}"></script>

    <script>
        tinymce.init({
            selector: '#mission, #stories, #approach, #philosophy',
            plugins: 'advlist autolink lists link image charmap preview anchor pagebreak lists code',
            toolbar_mode: 'floating',
            toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | numlist bullist deflist code'
        });
    </script>
@stop
