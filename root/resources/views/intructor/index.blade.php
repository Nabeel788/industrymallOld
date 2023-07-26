@extends('app')
@section('heads')
    <title>Instructor</title>
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
                        <h3 class="card-title">Intructor Management</h3>&nbsp;&nbsp;&nbsp;
                        <a href="{{ URL::to('/intructor/create') }}" class="btn btn-info" style="float:right;"><i
                                class="fa fa-plus"></i> Add New Intructor</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped" id="dataTable">
                            <thead>
                                <tr>
                                    <th>Sr.</th>
                                    <th>Name</th>
                                    <th>Picture</th>
                                    <th>Courses</th>
                                    <th>Education</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $key=>$value)
                                    <tr>
                                        <td>{{ number_format($key + 1) }}</td>
                                        <td>{{ $value->name }}</td>
                                        <td>
                                           <img src="{{ asset('root/upload/intructor/big/'.$value->image)}}" width="80px">
                                        </td>
                                        <td>{{ $value->courses }}</td>
                                        <td>{{ $value->education }}</td>
                                        <td>{{ $value->email }}</td>
                                        <td>{{ $value->phone }}</td>
                                        <td>
                                            <a href="{{ URL::to('/intructor/' . $value->id . '/edit') }}"
                                                class="btn btn-info btn-sm"><i class="fa fa-pencil"></i></a>
                                            <a onclick="return confirm('Are you sure you want to delete?')"
                                                href="{{ URL::to('/intructor/destroy/' . $value->id) }}"
                                                class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>

                                @empty
                                    <tr>
                                        <td colspan="8" align="center"><b class="text-danger">Record Not Found</b></td>
                                    </tr>
                                @endforelse
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Sr.</th>
                                    <th>Name</th>
                                    <th>Picture</th>
                                    <th>Courses</th>
                                    <th>Education</th>
                                    <th>Email</th>
                                    <th>Phone</th>
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
            $("#dataTable").DataTable();
        });
    </script>
    <script src="{{ URL::asset('website-assets/js/toastr.min.js') }}"></script>
    {!! Toastr::message() !!}
@stop
