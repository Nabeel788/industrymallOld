@php
use App\Models\Settings;
$settings = Settings::where('id', '=', '1')->get();
use App\Models\SystemLogo;
$system = SystemLogo::first();
@endphp
<div class="row gx-0 justify-content-between" style="padding:10px;">
    <div class="col-7" style="border-bottom: 10px solid rgb(23, 108, 205)">
       {{-- <div class="line-dashed"></div> --}}
    </div>
    <div class="col-3" >
        <p style="border-bottom: 2px solid rgb(0, 0, 0);padding-left:5px;margin-top:20px;"></p>
    </div>
    
    <div class="col-1" style="border-bottom: 10px solid rgb(246, 83, 29)">
            {{-- <div class="line-dashed"></div> --}}
    </div>
    <div class="col-4">
        <p style="color:grey"> <b >{{ $settings[0]->title }}</b> (for any queries please contact us)</p>
    </div>
    <div class="col-3">
        <p style="border-bottom: 1.5px solid rgb(111, 110, 110);padding-left:5px;margin-top:15px;"></p>
    </div>
    <div class="col-5">
        <h4 style="margin-left:63px;">Authorized Sign</h4>
    </div>
    <div class="col-2"></div>
    </div>
</div>
<br>
<div class="container">
<div class="row gx-0 justify-content-between" style="padding:10px;">
    <div class="col-2">
        <h5 class="anton" style="text-align:center;font-weight:100;color:rgb(0, 0, 0)">Contact #</h5>
        <p style="text-align:center;color:rgb(63, 63, 63);font-weight:500;">{{ $settings[0]->phone }}</p>
    </div><p style="font-weight:700;">|</p>
    <div class="col-2">
        <h5 class="anton" style="text-align:center;font-weight:100;color:rgb(0, 0, 0)">Address:</h5>
        <p style="text-align:center;color:rgb(63, 63, 63);font-weight:500;">{{ $settings[0]->address }}</p>
    </div><p style="font-weight:700;">|</p>
    <div class="col-2">
        <h5 class="anton" style="text-align:center;font-weight:100;color:rgb(0, 0, 0)">Email:</h5>
        <p style="text-align:center;color:rgb(63, 63, 63);font-weight:500;">{{ $settings[0]->email }}</p>
    </div><p style="font-weight:700;">|</p>
    <div class="col-2">
        <h5 class="anton" style="text-align:center;font-weight:100;color:rgb(0, 0, 0)">Website:</h5>
        <p style="text-align:center;color:rgb(63, 63, 63);font-weight:500;">{{ $settings[0]->website }}</p>
    </div><p style="font-weight:700;"></p>
</div>
</div>
<br>