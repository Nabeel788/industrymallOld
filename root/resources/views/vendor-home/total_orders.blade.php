@extends('app')
@section('heads')
    <title>Total Orders</title>
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
                                    <th>Order Date</th>
                                    <th>Shipping Date</th>
                                    <th>Qty</th>
                                    <th>Customer</th>
                                    <th>Vendor</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($TotalOrders as $key=>$value)
                                    @isset($value->order_details[0])
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ date('d/m/Y', strtotime($value->date)) }}</td>
                                            <td>{{ date('d/m/Y', strtotime($value->shipping)) }}</td>
                                            <td>
                                                @php $tQty = 0; @endphp
                                                @foreach ($value->order_details as $value1)
                                                    @php $tQty += $value1->quantity; @endphp
                                                @endforeach
                                                {{ number_format($tQty, 2) }}
                                            </td>
                                            <td>
                                                @if ($value->customer)
                                                {{ $value->customer->name }}
                                                @endif
                                            </td>
                                            <td>
                                                @isset($value->order_details[0])
                                                {{ $value->order_details[0]->vendor->name }}
                                                @endisset
                                            </td>
                                            <td><span class="badge badge-success">{{ $value->status }}</span></td>
                                        </tr>
                                    @endisset
                                @empty
                                    <td colspan="7" align="center" style="color: red;font-weight:bold;"><b>Record Not
                                            Found</b></td>
                                @endforelse
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Sr.</th>
                                    <th>Order Date</th>
                                    <th>Shipping Date</th>
                                    <th>Qty</th>
                                    <th>Customer</th>
                                    <th>Vendor</th>
                                    <th>Status</th>
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
