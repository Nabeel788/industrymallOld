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
                                        @if(isset($donor->order->first_name) && isset($donor->order->last_name))
                                        <td>{{ $donor->order->first_name.''.$donor->order->last_name }}</td>
                                        @else
                                        <td></td>
                                        @endif
                                        <td>{{ $donor->order->phone1 }}</td>
                                        <td>{{ $donor->order->city.', '.$donor->order->country }}</td>
                                        {{-- <td>{{ $donor->payment_method }}</td> --}}
                                        <td>
                                          @if ($donor->order->status=='IN PROCESS')
                                          <span class="badge badge-danger">{{ $donor->order->status }}</span>
                                          @elseif ($donor->order->status=='SHIPPMENT')
                                          <span class="badge badge-secondary">{{ $donor->order->status }}</span>
                                          @elseif ($donor->order->status=='DISPATCH')
                                          <span class="badge badge-danger">{{ $donor->order->status }}</span>
                                          @else
                                          <span class="badge badge-success">{{ $donor->order->status }}</span>
                                          @endif
                                          
                                        </td>
                                        <td>
                                            <!--details button-->
                                            <a href="{{ asset('orders-receipt/'.$donor->id) }}" class="btn btn-success btn-sm" target="_blank">Details</a>
                                            <a href="{{ asset('orders/'.$donor->order_id.'/edit') }}" class="btn btn-info btn-sm">Edit</a>
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
