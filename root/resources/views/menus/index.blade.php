@extends('app')
@section('heads')
    <title>Menus</title>
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
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Menu Management</h3>&nbsp;&nbsp;&nbsp;
                        <a href="{{ asset('menus/create') }}" class="btn btn-info" style="float:right;"><i
                                class="fa fa-plus"></i> Add Menu</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sr.</th>
                                    <th>Name</th>
                                    <th>Icon</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $sum = 0; @endphp
                                @foreach ($data as $donor)
                                    @php $sum = $sum + 1 @endphp
                                    <tr>
                                        <td>{{ $sum }}</td>
                                        <td>{{ $donor->name }}</td>
                                        <td><i class="{{ $donor->icon }}"></i></td>
                                        <td>
                                            <a href="{{ asset('menus/' . $donor->id . '/edit') }}"
                                                class="btn btn-info btn-sm"><i class="fa fa-pencil"></i></a>
                                            <a onclick="return confirm('Are you sure you want to delete?')"
                                                href="{{ asset('menus/' . $donor->id . '/destroy') }}" class="btn btn-danger btn-sm"><i
                                                    class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Sr.</th>
                                    <th>Name</th>
                                    <th>Icon</th>
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
    <script>
        $(function() {
            $("#example1").DataTable();
        });
    </script>

    <script src="{{ URL::asset('website-assets/js/toastr.min.js') }}"></script>
    {!! Toastr::message() !!}
@stop
