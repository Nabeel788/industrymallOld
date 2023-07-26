@extends('app')
@section('heads')
    <title>Partners</title>
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
@stop
@section('contents')
    <section class="content-header">
    </section>
    <div class="container-fluid">
        @if (Session::has('flash_message'))
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-hidden="true"
                    style="margin-right: 4%;">&times;</a>
                <strong>Success!</strong> {{ Session::get('flash_message') }}
            </div>
        @endif
    </div>
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Partners Management</h3>&nbsp;&nbsp;&nbsp;
                        <a href="{{ asset('partners/create') }}" style="float:right;" class="btn btn-primary"><i
                                class="fa fa-plus"></i> Add Partner</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Code</th>
                                    <th>Partner Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $sum = 0; @endphp
                                @foreach ($data as $donor)
                                    @php $sum = $sum + 1 @endphp
                                    <tr>
                                        <td>{{ $sum }}</td>
                                        <td>{{ $donor->brand_name }}</td>
                                        <td>
                                            <a href="{{ asset('partners') }}/{{ $donor->id }}/edit"><button type="button"
                                                    class="btn btn-warning">Edit</button></a>
                                            <!-- <a href="{{ asset('categories') }}/{{ $donor->id }}"><button type="button" class="btn btn-primary">Details</button></a> -->
                                            <a onclick="return confirm('Are you sure you want to delete?')"
                                                href="{{ asset('partners') }}/{{ $donor->id }}/destroy"><button
                                                    type="button" class="btn btn-danger">Delete</button></a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                            <tfoot>
                              <tr>
                                <th>Code</th>
                                <th>Partner Name</th>
                                <th>Actions</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
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
@stop
