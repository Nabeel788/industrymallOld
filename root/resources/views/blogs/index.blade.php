@extends('app')
@section('heads')
    <title>Blogs</title>
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
                        <h3 class="card-title">Blogs Management</h3>&nbsp;&nbsp;&nbsp;
                        <a href="{{ URL::to('/our-blogs/create') }}" class="btn btn-primary" style="float:right;"><i
                                class="fa fa-plus"></i> Add New Blog</a>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered table-striped" id="dataTable">
                            <thead>
                                <tr>
                                    <th>Sr.</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Sub Category</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $key=>$value)
                                    <tr>
                                        <td>{{ number_format($key + 1) }}</td>
                                        <td>{{ $value->title }}</td>
                                        <td>
                                            @if($value->blog_category)
                                                {{ $value->blog_category->title }}
                                               @else{{ "No Category" }}
                                            @endif
                                        </td>
                                        <td>
                                            @if($value->blog_sub_category)
                                                {{ $value->blog_sub_category->title  }}
                                               @else{{ "No Sub Category" }}
                                            @endif
                                        <td>
                                            <a href="{{ URL::to('/our-blogs') }}/{{ $value->id }}/edit"><button
                                                    type="button" class="btn btn-warning">Edit</button></a>
                                            <a onclick="return confirm('Are you sure you want to delete?')"
                                                href="{{ URL::to('/our-blogs') }}/destroy/{{ $value->id }}"><button
                                                    type="button" class="btn btn-danger">Delete</button></a>
                                        </td>
                                    </tr>

                                @empty
                                    <tr>
                                        <td colspan="4" align="center"><b class="text-danger">Record Not Found</b></td>
                                    </tr>
                                @endforelse
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Sr.</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Sub Category</th>
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
    <!-- AdminLTE App -->
    <!-- <script src="{{ asset('dist/js/adminlte.min.js') }}"></script> -->
    <!-- AdminLTE for demo purposes -->
    <!-- <script src="{{ asset('dist/js/demo.js') }}"></script> -->
    <!-- page script -->
    <script>
        $(function() {
            $("#dataTable").DataTable();
        });
    </script>
    <script src="{{ URL::asset('website-assets/js/toastr.min.js') }}"></script>
    {!! Toastr::message() !!}
@stop
