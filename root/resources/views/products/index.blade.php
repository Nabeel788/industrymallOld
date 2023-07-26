@extends('app')
@section('heads')
    <title>Products</title>
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
    <link rel="stylesheet" href="{{ URL::asset('website-assets/css/toastr.min.css') }}">
@stop
@section('contents')
    <section class="content-header"></section>
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

                <!-- /.card -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Products</h3>&nbsp;&nbsp;&nbsp;
                        <a href="{{ asset('products/create') }}" style="float:right;" class="btn btn-info"><i
                                class="fa fa-plus"></i> Add Product</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sr</th>
                                    <th>Product Name</th>
                                    <th>Model#</th>
                                    <th>SKU</th>
                                    <th>Category</th>
                                    <th>Type</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $product)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->model_no }}</td>
                                        <td>{{ $product->sku }}</td>
                                        <td>
                                            @if ($product->categories)
                                                {{ $product->categories->name }}
                                            @endif
                                            ,
                                            @if ($product->subcategories)
                                                {{ $product->subcategories->name }}
                                            @endif
                                        </td>
                                        <td>
                                            @if ($product->type == 'Parent')
                                                <span class="badge badge-primary">{{ $product->type }}</span>
                                            @elseif ($product->type == 'Child')
                                                <span class="badge badge-danger">{{ $product->type }}</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="btn-group mr-2" role="group" aria-label="First group">
                                                <a href="{{ URL::to('products/' . $product->id . '/edit') }}"
                                                    class="btn-info btn-sm"><i class="fa fa-pencil"></i></a>
                                                <a onclick="return confirm('Are you sure you want to delete?')"
                                                    href="{{ asset('products') }}/{{ $product->id }}/destroy"
                                                    class="btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                                <a href="{{ URL::to('single-product/' . $product->id . '/' . $product->slug) }}"
                                                    class="btn-warning btn-sm" target="_blank"><i class="fa fa-eye"></i></a>
                                                    <a href="{{ URL::to('products/' . $product->id . '/dupe') }}"
                                                        class="btn-success btn-sm"><i class="fa fa-clone"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Sr</th>
                                    <th>Product Name</th>
                                    <th>Model#</th>
                                    <th>SKU</th>
                                    <th>Category</th>
                                    <th>Type</th>
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

    <script>
        $(function() {
            $("#example1").DataTable();
        });
    </script>

    <script src="{{ URL::asset('website-assets/js/toastr.min.js') }}"></script>
    {!! Toastr::message() !!}
@stop
