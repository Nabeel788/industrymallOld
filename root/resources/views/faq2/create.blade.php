<!DOCTYPE html>
<title>Add New FAQ</title>
@extends('app')
@section('contents')
    <section class="content-header">
        @include('errors.validation')
        <div class="container-fluid">
            @if (Session::has('flash_message'))
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-hidden="true"
                        style="margin-right: 4%;">&times;</a>
                    <strong>Success!</strong> {{ Session::get('flash_message') }}
                </div>
            @endif
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add New FAQ</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        {!! Form::open(['url' => 'our-faq2', 'method' => 'POST', 'class' => 'form-horizontal', 'files' => 'true', 'enctype' => 'multipart/form-data']) !!}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Question</label>
                                        {!! Form::text('question', null, ['id' => 'question', 'class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Answer</label>
                                        {!! Form::textarea('answer', null, ['id' => 'answer', 'class' => 'form-control']) !!}
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
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@stop
