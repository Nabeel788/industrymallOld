@php
use App\Models\TermsConditions;
$terms = TermsConditions::where('id', '=', '1')->get();
use App\Models\SystemLogo;
$system = SystemLogo::first();
@endphp
<br><br>
<div class="container">
    <div class="row">
        <div class="col-5" >
            <h5 class="anton" style="font-weight:1;border-top:1px solid black;">Terms & Conditions:</h5>
          
        </div>
        <div class="col-12" >
            {!! $terms[0]->description !!}
          
        </div>
    </div>
</div>
