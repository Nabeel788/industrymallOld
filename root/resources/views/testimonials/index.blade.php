@extends('app')
@section('heads')
<title>Testimonials</title>
    <!-- FOR DATA TABLES -->
    <!-- Font Awesome -->
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
                        <h3 class="card-title">Testimonials Management</h3>&nbsp;&nbsp;&nbsp;
                        <a href="{{ asset('our-testimonials/create') }}" style="float:right;" class="btn btn-info"><i
                                    class="fa fa-plus"></i> Add New Testimonial</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sr.</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th>Message</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($testimonials as $key=>$donor)
                                    <tr>
                                        <td>{{ number_format($key+1) }}</td>
                                        <td>{{ $donor->name }}</td>
                                        <td>{{ $donor->designation }}</td>
                                        <td>{!! $donor->message !!}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ asset('our-testimonials/'.$donor->id.'/edit') }}" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i></a>
                                                <a onclick="return confirm('Are you sure you want to delete?')"
                                                    href="{{ asset('our-testimonials/destroy/'.$donor->id) }}" class="btn btn-danger btn-sm ml-1"><i class="fa fa-trash"></i></a>
                                            </div>
                                            
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                            <tfoot>
                              <tr>
                                <th>Sr.</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Message</th>
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
    <script src="{{ URL::asset('website-assets/js/toastr.min.js') }}"></script>
    {!! Toastr::message() !!}
@stop
