@extends('app')
@section('heads')
    <title>Total Vendors</title>
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
                    <div class="card-body">
                        <table id="dataTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sr.</th>
                                    <th>Vendor ID</th>
                                    <th>Name</th>
                                    <th>Vendor Company</th>
                                    <th>Address</th>
                                    <th>Contact Number</th>
                                    <th>Email ID</th>
                                    <th>Memebership</th>
                                    <th>Actions Buttons</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($Vendors as $key=>$value)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $value->id}}</td>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->company }}</td>
                                    <td>{{ $value->address1 }}</td>
                                    <td>{{ $value->phone1 }}</td>
                                    <td>{{ $value->email }}</td>
                                    <td>{{ $value->role }}</td>
                                    <td>{{ $value->country }}</td>
                                </tr>
                                @empty
                                <td colspan="7" align="center" style="color: red;font-weight:bold;"><b>Record Not Found</b></td>
                                @endforelse
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Sr.</th>
                                    <th>Vendor ID</th>
                                    <th>Name</th>
                                    <th>Vendor Company</th>
                                    <th>Address</th>
                                    <th>Contact Number</th>
                                    <th>Email ID</th>
                                    <th>Memebership</th>
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
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
    <script>
        $(function() {
            $("#dataTable").DataTable();
        });
    </script>

    <script src="{{ URL::asset('website-assets/js/toastr.min.js') }}"></script>
    {!! Toastr::message() !!}
@stop
