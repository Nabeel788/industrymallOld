@extends('app')
@section('heads')
    <title>Pending Orders</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/dist/css/adminlte.min.css') }}">
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
                                    <th>order#</th>
                                    <th>Order Date</th>
                                    <th>Shipping Date</th>
                                    <th>Qty</th>
                                    <th>Customer Name</th>
                                    <th>Status</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($PendingOrders as $key => $value)
                                    @isset($value->order_details[0])
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $value->id }}</td>
                                            <td>{{ date('d/m/Y', strtotime($value->date)) }}</td>
                                            <td>{{ date('d/m/Y', strtotime($value->shipping)) }}</td>
                                            <td>
                                                @php $tQty = 0; @endphp
                                                @foreach ($value->order_details as $value1)
                                                    @php $tQty += $value1->quantity; @endphp
                                                @endforeach
                                                {{ number_format($tQty, 2) }}
                                            </td>
                                            <td>{{ $value->customer->name ?? '' }}</td>
                                            <td><span class="badge badge-success">{{ $value->status ?? '' }}</span></td>
                                            <td>
                                                <a href="{{ url('orders/'.$value->id) }}" class="btn btn-success btn-sm" target="_blank">Details</a>
                                            </td>
                                        </tr>
                                    @endisset
                                @empty
                                    <tr>
                                        <td colspan="8" align="center" style="color: red;font-weight:bold;"><b>Record Not Found</b></td>
                                    </tr>
                                @endforelse
                            </tbody>
                            
                            <tfoot>
                                <tr>
                                    <th>Sr.</th>
                                    <th>order#</th>
                                    <th>Order Date</th>
                                    <th>Shipping Date</th>
                                    <th>Qty</th>
                                    <th>Customer Name</th>
                                    <th>Status</th>
                                    <th>Details</th>
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
@stop


