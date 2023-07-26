@extends('app')
@section('heads')
    <!-- FOR DATA TABLES -->
    <!-- Font Awesome -->
    <title>Banners</title>
    <link rel="stylesheet" href="{{ asset('/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/dist/css/adminlte.min.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('website-assets/css/toastr.min.css') }}">
@stop
@section('contents')
    <section class="content-header"></section>
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Banner's Management</h3>&nbsp;&nbsp;&nbsp;
                        <a href="{{ route('banners.create') }}" class="btn btn-info" style="float:right;">
                            <i class="fa fa-plus"></i>
                            Add New Banner
                        </a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sr.</th>
                                    <th>Title 1</th>
                                    <th>Title 2</th>
                                    <th>Offer</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($banners as $key=>$donor)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $donor->title1 }}</td>
                                        <td>{{ $donor->title2 }}</td>
                                        <td>{{ $donor->offer }}</td>
                                        <td>
                                            <a href="{{ asset('banners') }}/{{ $donor->id }}/edit"
                                                class="btn btn-info btn-sm"><i class="fa fa-pencil"></i></a>
                                            <a onclick="return confirm('Are you sure you want to delete?')"
                                                href="{{ asset('banners/destroy/' . $donor->id) }}"
                                                class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <th>Sr.</th>
                                    <th>Title 1</th>
                                    <th>Title 2</th>
                                    <th>Offer</th>
                                    <th>Actions</th>
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
    <script>
        $(function() {
            $("#example1").DataTable();
        });
    </script>

    <script src="{{ URL::asset('website-assets/js/toastr.min.js') }}"></script>
    {!! Toastr::message() !!}
@stop
