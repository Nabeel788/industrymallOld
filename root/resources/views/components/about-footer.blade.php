@php
    use App\Models\Locations;
    $locations = Locations::orderBy('id')->take(3)->get(['name','address','email','company']);
@endphp

<!-- Start of Footer -->
<footer class="footer footer-dark appear-animate" data-animation-options="{
    'name': 'fadeIn'
}">
    <div class="container">
        <div class="footer-top">
            <div class="row">
                @foreach ($locations as $location)
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget">
                        <ul class="widget-body">
                            <li>{{ $location->company }}</li>
                        </ul>
                        <h3 class="widget-title">{{ $location->name }}</h3>
                        <ul class="widget-body">
                            <li>{{ $location->address }}</li>
                            <li>{{ $location->email }}</li>
                        </ul>
                    </div>
                </div>
                @endforeach
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget">
                        <ul class="widget-body">
                            <li>&emsp;</li>
                        </ul>
                        <h3 class="widget-title">Contact US</h3>
                        <ul class="widget-body">
                            <li>{{ $settings->phone }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-left">
                <p class="copyright">Copyright © <span id="year"></span> {{ $settings->title }}. All Rights Reserved. Developed By <i
                        class="fa fa-heart"></i> <a href="https://itlifee.net"
                        target="_blank"><strong>iT-Life</strong></a></p>
            </div>
            <div class="footer-right">
                <span class="payment-label mr-lg-8">We're using safe payment for</span>
                <figure class="payment">
                    <img src="{{ URL::asset('website-assets/images/payment.png') }}" alt="payment" width="159"
                        height="25" />
                </figure>
            </div>
        </div>
    </div>
</footer>
<!-- End of Footer -->
<script>
    document.getElementById("year").innerHTML = new Date().getFullYear();
</script>