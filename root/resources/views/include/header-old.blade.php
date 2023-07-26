@php
use App\Models\Settings;
$settings = Settings::where('id', '=', '1')->get();
use App\Models\SystemLogo;
$system = SystemLogo::first();
@endphp
<style>
    body {
        color: black !important;
        background: #F2F6F8;
    }

    tr {
        /* line-height: 0px; */
        border: 2px solid black;
    }

    .table thead th {
        border-bottom: 2px solid black;
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<div class="row" style="border-bottom: 2px solid;">
    <div class="col-12 col-sm-auto mb-3">
        <div class="mx-auto" style="width: 140px;">
            <img src="{{ URL::asset('root/upload/logo/' . $system->image) }}" style="height: 140px; width: 140px;">
        </div>
    </div>
    <div class="col d-flex flex-column flex-sm-row justify-content-between">
        <div class="text-center text-sm-left mb-2 mb-sm-0">
            <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap" style="color:black; font-weight: 700;text-align:left;">{{ $settings[0]->title }}
            </h4>
            <p class="mb-0" style="color:black; font-weight: 700;text-align:left;">Phone: {{ $settings[0]->phone }}</p>
            <p class="mb-0" style="color:black; font-weight: 700;text-align:left;">Email: {{ $settings[0]->email }}</p>
            <p class="mb-0" style="color:black; font-weight: 700;text-align:left;">Website: {{ $settings[0]->website }}</p>
        </div>
        <div class="text-right text-sm-right">
            <br />
            <button class="btn btn-primary" style="float: right;" onclick="this.style.display='none';window.print()">Print 
                <i class="fa fa-print"></i>
            </button>
            <br />
            <br />
            <div><small style="color:black; font-weight: 700;text-align:right;">Address: {{ $settings[0]->address }}</small></div>
            <div><small style="color:black; font-weight: 700;text-align:right;">City:
                    {{ $settings[0]->city }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State:
                    {{ $settings[0]->state }}</small></div>
            <div><small style="color:black; font-weight: 700;text-align:right;">NTN: {{ $settings[0]->ntn }}</small></div>
        </div>
    </div>
</div>
