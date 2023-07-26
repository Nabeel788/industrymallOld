@extends('app')
@section('heads')
    <title>Customer Queries</title>
    <!-- FOR DATA TABLES -->
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
                <!-- /.card -->
                <div class="card">
                    <div class="card-header bg-info">
                        <h3 class="card-title">Customer Queries</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ URL::to('/product-contacts') }}" method="get">
                            @csrf
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label for="">From Date</label>
                                        <input type="date" name="from_date" id="from_date" value="{{ date('Y-m-d') }}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label for="">To Date</label>
                                        <input type="date" name="to_date" id="to_date" value="{{ date('Y-m-d') }}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-info" style="margin-top: 31px;">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sr</th>
                                    <th>Product Name</th>
                                    <th>Model#</th>
                                    <th>Brand</th>
                                    <th>MOQ</th>
                                    <th>Make</th>
                                    <th>Message</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($productContacts as $key => $contact)
                                    <tr>
                                        <td>{{ number_format($key + 1) }}</td>
                                        <td>{{ $contact->pro_name }}</td>
                                        <td>{{ $contact->model_no }}</td>
                                        <td>{{ $contact->brand_name }}</td>
                                        <td>{{ $contact->moq }}</td>
                                        <td>{{ $contact->make }}</td>
                                        <td>{{ $contact->message }}</td>
                                    </tr>
                                @endforeach

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Sr</th>
                                    <th>Product Name</th>
                                    <th>Model#</th>
                                    <th>Brand</th>
                                    <th>MOQ</th>
                                    <th>Make</th>
                                    <th>Message</th>
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
@stop
