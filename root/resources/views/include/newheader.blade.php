@php
use App\Models\Settings;
$settings = Settings::where('id', '=', '1')->get();
use App\Models\SystemLogo;
$system = SystemLogo::first();


@endphp
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anton">
<style>
    body {
        color: black !important;
        background: #F2F6F8;
    }
    .heading{
        font-family: Anton;
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
{{-- <div class="row" style="border-bottom: 2px solid black;margin-top:-20px;"> --}}
<div class="row" style="margin-top:-20px;">
    <div class="col-7 ">
        <div style="width: 140px;">
            <img src="{{ asset('/root/upload/users') }}/{{  $order->order_details[0]->vendor->image}}" style="height: 100px; width: 200px;">
            {{--<img src="{{ asset('/root/upload/logo') }}/{{ $system->image }}" style="height: 100px; width: 200px;">--}}
        </div>
    </div>
    <div class="col-5 " style="margin-left:0px;margin-top:30px;font-size:20px;">
    <em><h4>Industrial Automation Supplier</h4></em>
    </div>
    
    {{-- <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3" style="display:none!important;">
        <div class="text-center text-sm-left mb-2 mb-sm-0">
            <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap" style="color:black; font-weight: 700;margin-top:-10px;">
                {{ $settings[0]->title }}
            </h4>
            <p class="mb-0" style="color:black; font-weight: 700;margin-top:-5px;">Phone: {{ $settings[0]->phone }}
            </p>
            <p class="mb-0" style="color:black; font-weight: 700;margin-top:-5px;">Email: {{ $settings[0]->email }}
            </p>
            <p class="mb-0" style="color:black; font-weight: 700;margin-top:-5px;">Website:
                {{ $settings[0]->website }}</p>
        </div>
        <div class="text-center text-sm-right">
            <button onclick="window.print()" class="btn btn-primary">Print <i class="fa fa-print"></i></button>
            <div><small style="color:black; font-weight: 700;">Address: {{ $settings[0]->address }}</small></div>
            <div style="margin-top:-5px;"><small style="color:black; font-weight: 700;">City:
                    {{ $settings[0]->city }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State:
                    {{ $settings[0]->state }}</small></div>
            <div style="margin-top:-5px;"><small style="color:black; font-weight: 700;">NTN:
                    {{ $settings[0]->ntn }}</small></div>
        </div>
    </div> --}}
</div>
<br><br><br>
<div class="row gx-0 justify-content-between" style="padding:10px;">
    <div class="col-8" style="border-bottom: 10px solid rgb(23, 108, 205)">
       {{-- <div class="line-dashed"></div> --}}
    </div>
    <div class="col-2 heading" style="padding: 0px 0px 0px 0px;    margin: -19px -52px -17px -43px;">
        <p style="font-family:inherit;     margin: 1px -9px -21px 29px;font-size:25px;">I N V O I C E</p>
    </div>
    
    <div class="col-2" style="border-bottom: 10px solid rgb(246, 83, 29)">
            {{-- <div class="line-dashed"></div> --}}
    </div>
    </div>
</div>
