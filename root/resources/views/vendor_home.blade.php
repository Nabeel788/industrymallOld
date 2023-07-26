@extends('app')
@section('contents')
@php
 $memberSince =  Auth::user()->created_at;
@endphp
    <div class="content-header">
        <div class="container-fluid">
            @if (Session::has('flash_message'))
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"
                    style="margin-right: 20px;margin-top: 15px;">&times;</button>
                <div class="alert alert-success"> {{ Session::get('flash_message') }} </div>
            @endif
            <div class="row mb-2">
                <div class="col-sm-4">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div>
                <div class="col-sm-4 " >
                 <p><b>Member Since {{ date("F j, Y",strtotime($memberSince)) }}</b></p>
                </div>
                <div class="col-sm-4">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner" style="padding-bottom:4px;">
                            <h4><b>My<br>Profile</b> &emsp;</h4>
                            {{-- <br> --}}
                            <p style="font-size:12px;font-weight:100;">&emsp;</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <a href="{{ URL::to("/vendor-products/".Auth::user()->id) }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $totalOrders }}</h3>
                            <p>Total Orders</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person"></i>
                        </div>
                        <a href="{{ route('total.orders') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $PendingOrders }}</h3>
                            <p>Pending Orders</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="{{ route('total.pending-orders') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ $CompleteOrders }}</h3>
                            <p>Complete Orders</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="{{ route('total.complete-orders') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{ $totalOutOfStockItems }}</h3>
                            <p>Out of Stock Items</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <a href="{{ route('total.out-of-stock-items') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{ $totalProductQueries }}</h3>
                            <p>Product Queries</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <a href="{{ route('total.product-queries') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner" style="padding-bottom:4px;">
                            <h4><b>Buying<br> History</b> &emsp;</h4>
                            {{-- <br> --}}
                            <p style="font-size:12px;font-weight:100;">&emsp;</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <a href="{{ asset('purchase') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{ $totalSale }}</h5>
                            <p>Total Sale</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <a href="javascript:void(0);" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
