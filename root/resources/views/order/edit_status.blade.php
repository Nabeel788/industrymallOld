@extends('app')
@section('heads')
    <style>
        .fstdiv>.fstdropdown>.fstlist>div {
            font-family: 'FontAwesome', 'sans-serif';
        }

        .fstdiv>.fstdropdown>.fstselected {
            font-family: 'FontAwesome', 'sans-serif';
        }
    </style>
    <title>Edit Status</title>
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('website-assets/css/toastr.min.css') }}">
@stop
@section('contents')

    <section class="content-header"></section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Edit Status</h3>
                        </div>
                        {!! Form::model($edit, [
                            'method' => 'PATCH',
                            'action' => ['App\Http\Controllers\OrderController@update', $edit->id],
                            'class' => 'form-horizontal',
                        ]) !!}
                        {!! Form::hidden('order_id', $edit->id, ['id' => 'order_id']) !!}
                        {!! Form::hidden('updatedby', Auth::User()->name, ['id' => 'updatedby']) !!}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Date Time</label>
                                        {!! Form::datetimelocal('datetime', date('Y-m-d H:i:s'), [
                                            'id' => 'datetime',
                                            'class' => 'form-control',
                                            'required' => 'required',
                                        ]) !!}
                                        @if ($errors->has('datetime'))
                                            <span
                                                class="invalid-feedback1 font-weight-bold">{{ $errors->first('datetime') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Status</label>
                                        {!! Form::select('status1', $status, null, [
                                            'id' => 'status1',
                                            'class' => 'form-control fstdropdown-select',
                                            'required' => 'required',
                                        ]) !!}
                                        @if ($errors->has('status'))
                                            <span
                                                class="invalid-feedback1 font-weight-bold">{{ $errors->first('status') }}</span>
                                        @endif
                                    </div>
                                </div>
                                {{-- <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Direction</label>
                                        {!! Form::text('direction', null, ['id' => 'direction', 'class' => 'form-control', 'required' => 'required']) !!}
                                        @if ($errors->has('direction'))
                                            <span
                                                class="invalid-feedback1 font-weight-bold">{{ $errors->first('direction') }}</span>
                                        @endif
                                    </div>
                                </div> --}}
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Country</label>
                                        {!! Form::select('country', $locations, null, [
                                            'id' => 'country',
                                            'class' => 'form-control fstdropdown-select',
                                            'required' => 'required',
                                        ]) !!}
                                        @if ($errors->has('country'))
                                            <span
                                                class="invalid-feedback1 font-weight-bold">{{ $errors->first('country') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Icon</label>
                                        <select name="icon" id="icon"
                                            class="form-control faselect fstdropdown-select @error('icon') is-invalid @enderror" required>
                                            <option value="">Select Icon</option>
                                            @for ($i = 0; $i < count($data); $i++)
                                                <option value="{{ $data[$i]['name'] }}">{!! $data[$i]['code'] !!}
                                                    {{ $data[$i]['name'] }}</option>
                                            @endfor
                                        </select>
                                        @if ($errors->has('icon'))
                                            <span
                                                class="invalid-feedback1 font-weight-bold">{{ $errors->first('icon') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Previous Status</h3>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Sr.</th>
                                        <th>DateTime</th>
                                        <th>Icon</th>
                                        <th>Country</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orderTrackerDetails as $key => $value)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ date('d/m/Y', strtotime($value->datetime)) }} &emsp;
                                                {{ date('h:i:A', strtotime($value->datetime)) }}</td>
                                            <td><i class="{{ $value->icon }}"></i></td>
                                            <td>{{ $value->country }}</td>
                                            <td>
                                                @if ($value->status == 'IN PROCESS')
                                                    <span class="badge badge-danger">{{ $value->status }}</span>
                                                @elseif ($value->status == 'COURIER')
                                                    <span class="badge badge-secondary">{{ $value->status }}</span>
                                                @elseif ($value->status == 'DISPATCH')
                                                    <span class="badge badge-danger">{{ $value->status }}</span>
                                                @else
                                                    <span class="badge badge-success">{{ $value->status }}</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Sr.</th>
                                        <th>DateTime</th>
                                        <th>Icon</th>
                                        <th>Country</th>
                                        <th>Status</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
@section('scripts')
    <!-- DataTables -->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
    <!-- page script -->
    <script>
        $(function() {
            $("#example1").DataTable();
        });
    </script>

    <script src="{{ URL::asset('website-assets/js/toastr.min.js') }}"></script>
    {!! Toastr::message() !!}
@stop
