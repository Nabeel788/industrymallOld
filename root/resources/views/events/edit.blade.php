@extends('app')
@section('heads')
    <title>Edit Events</title>
    <style>
        .invalid-message {
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
                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Edit Events</h3>
                        </div>
                        {!! Form::model($edit, [
                            'method' => 'PATCH',
                            'action' => ['App\Http\Controllers\EventsController@update', $edit->id],
                            'class' => 'form-horizontal',
                            'enctype' => 'multipart/form-data',
                        ]) !!}
                        {!! Form::hidden('updated_by', Auth::User()->id, ['id' => 'updated_by']) !!}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Title</label>
                                        {!! Form::text('title', null, [
                                            'id' => 'title',
                                            'class' => 'form-control',
                                            'autofocus' => 'autofocus',
                                            'required' => 'required',
                                        ]) !!}
                                        @error('title')
                                            <span class="invalid-message">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Event Category</label>
                                        {!! Form::select('event_category_id', $eventsCategories, null, [
                                            'id' => 'event_category_id',
                                            'class' => 'form-control fstdropdown-select',
                                        ]) !!}
                                        @error('event_category_id')
                                            <span class="invalid-message">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" name="image" id="image" class="form-control">
                                        @error('image')
                                            <span class="invalid-message">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Description</label>
                                        {!! Form::textarea('description', null, ['id' => 'description', 'class' => 'form-control']) !!}
                                        @error('description')
                                            <span class="invalid-message">{{ $message }}</span>
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
