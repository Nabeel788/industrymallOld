@extends('app')
@section('heads')
    <title>Sub Categories</title>
    <!-- FOR DATA TABLES -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/dist/css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('website-assets/css/toastr.min.css') }}">
@stop
@section('contents')
    <section class="content-header"></section>
    <section class="content">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Sub Catagories Management</h3>&nbsp;&nbsp;&nbsp;
                        <a href="{{ asset('sub-category/create') }}" style="float:right;" class="btn btn-primary">Add
                            Subcatagory <i class="fa fa-plus"></i></a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sr</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key=>$donor)
                                    <tr>
                                        <td>{{ number_format($key+1) }}</td>
                                        <td>{{ $donor->name }}</td>
                                        <td>
                                            @if ($donor->categories)
                                                {{ $donor->categories->name }}
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ asset('sub-category') }}/{{ $donor->id }}/edit"><button
                                                    type="button" class="btn btn-warning">Edit</button></a>
                                            <a onclick="return confirm('Are you sure you want to delete?')"
                                                href="{{ asset('sub-category') }}/{{ $donor->id }}/destroy"><button
                                                    type="button" class="btn btn-danger">Delete</button></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                              <tr>
                                <th>Sr</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Actions</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
@section('scripts')
    <!-- //For Data Tables -->
    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- DataTables -->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
    <!-- AdminLTE App -->
    <!-- <script src="{{ asset('dist/js/adminlte.min.js') }}"></script> -->
    <!-- AdminLTE for demo purposes -->
    <!-- <script src="{{ asset('dist/js/demo.js') }}"></script> -->
    <!-- page script -->
    <script>
        $(function() {
            $("#example1").DataTable();
        });
    </script>
    <script src="{{ URL::asset('website-assets/js/toastr.min.js') }}"></script>
    {!! Toastr::message() !!}
@stop
