@extends('app')
@section('heads')
    <title>Orders</title>
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
                        <h3 class="card-title">Orders</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sr.NO</th>
                                    <th>Order#</th>
                                    <th>Full Name</th>
                                    <th>Phone</th>
                                    <th>Country</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key=>$donor)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $donor->id }}</td>
                                        <td>{{ $donor->first_name.''.$donor->last_name }}</td>
                                        <td>{{ $donor->phone1 }}</td>
                                        <td>{{ $donor->city.', '.$donor->country }}</td>
                                        <td>
                                          @if ($donor->status=='IN PROCESS')
                                          <span class="badge badge-danger">{{ $donor->status }}</span>
                                          @elseif ($donor->status=='SHIPPMENT')
                                          <span class="badge badge-secondary">{{ $donor->status }}</span>
                                          @elseif ($donor->status=='DISPATCH')
                                          <span class="badge badge-danger">{{ $donor->status }}</span>
                                          @else
                                          <span class="badge badge-success">{{ $donor->status }}</span>
                                          @endif
                                          
                                        </td>
                                        <td>
                                            <!--details button-->
                                            <a href="{{ asset('orders/'.$donor->id) }}" class="btn btn-success btn-sm" target="_blank">Details</a>
                                            <a href="{{ asset('orders/'.$donor->id.'/edit') }}" class="btn btn-info btn-sm">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Sr.NO</th>
                                    <th>Order#</th>
                                    <th>Full Name</th>
                                    <th>Phone</th>
                                    <th>Country</th>
                                    <th>Status</th>
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
