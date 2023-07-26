<?php
use App\Models\Settings;
$settings = Settings::where('id', '=', 1)->get();
?>
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    @yield('heads')

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- IonIcons -->
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link href="{{ URL::asset('custom/select2.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ URL::asset('custom/jquery-ui.css') }}"
        type="text/css" />

    <script src="{{ URL::asset('custom/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('custom//jquery-ui.min.js') }}"></script>



   

    
    <!-- SearchAble Dropdown Library -->
    <link rel="stylesheet" href="{{ asset('css/fstdropdown.css') }}">


    <style>
        .tox-notification {
            display: none !important;
        }
        .invalid-feedback{
          font-weight: bold;
        }
        .invalid-feedback1{
            width: 100%;
            margin-top: 0.25rem;
            font-size: 80%;
            color: #dc3545;
            font-weight: bold;
        }
    </style>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to to the body tag
to get the desired effect
|---------------------------------------------------------|
|LAYOUT OPTIONS | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                @if (Auth::User()->role=='Admin')
                {{-- <li class="nav-item d-none d-md-inline-block">
                    <a href="{{ asset('/settings/'.Auth::User()->id.'/edit') }}" class="nav-link">System Profile</a>
                </li> --}}
                @endif
                <li class="nav-item d-none d-md-inline-block">
                    <a href="{{ asset('/account-setting/'.Auth::User()->id.'/edit') }}" class="nav-link">Change Password</a>
                </li>

            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item d-none d-md-inline-block">
                    <a href="{{ route('logout') }}" class="nav-link"
                        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ asset('/home') }}" class="brand-link">
                <img src="{{ asset('/root/upload/logo/'.$settings[0]->logo) }}" alt=""
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <!-- <span class="brand-text font-weight-light">Equal Foundation</span> -->
                <span class="brand-text font-weight-light">{{ $settings[0]->title }}</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        @if (Auth::User()->image != null)
                            <img src="{{ asset('/root/upload/logo/dummy.png') }}"
                                class="img-circle elevation-2" alt="User Image">
                        @else
                            <img src="{{ asset('/root/upload/logo/dummy.png') }}" class="img-circle elevation-2"
                                alt="User Image">
                        @endif
                    </div>
                    <div class="info">
                        <a href="{{ asset('/account-setting/'.Auth::User()->id.'/edit') }}" class="d-block">{{ Auth::User()->name }}</a>
                    </div>
                </div>
                @if (Auth::User()->role=='Admin')
                    @include('navbars.admin')
                @elseif (Auth::User()->role=='Vendor')
                    @include('navbars.vendor')
                @endif
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            @yield('contents')

        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2022 Developed By <i class="fa fa-heart text-danger"></i> <a href="https://www.itlifee.net" target="_blank"> iT-Life</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.0.2
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE -->
    <script src="{{ asset('dist/js/adminlte.js') }}"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('dist/js/demo.js') }}"></script>
    <script src="{{ asset('dist/js/pages/dashboard3.js') }}"></script>
    <!------->

    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script> --}}
    <script src="{{ asset('/js/plugins/nouislider/nouislider.min.js') }}"></script>
    <!-- Input Mask-->
    <script src="{{ asset('/js/plugins/jasny/jasny-bootstrap.min.js') }}"></script>
    <!-- Select2-->
    <script src="{{ asset('/js/plugins/select2/select2.full.min.js') }}"></script>
    <!--Bootstrap ColorPicker-->
    <script src="{{ asset('/js/plugins/colorpicker/bootstrap-colorpicker.min.js') }}"></script>
    <!--Bootstrap DatePicker-->
    <script src="{{ asset('/js/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
   
    <!------->
    {{-- SearchAble Dropdown Script --}}
    <script src="{{ asset('js/fstdropdown.js') }}"></script>
    <script>
        function setDrop() {
            if (!document.getElementById('third').classList.contains("fstdropdown-select"))
                document.getElementById('third').className = 'fstdropdown-select';
            setFstDropdown();
        }
        setFstDropdown();

        function removeDrop() {
            if (document.getElementById('third').classList.contains("fstdropdown-select")) {
                document.getElementById('third').classList.remove('fstdropdown-select');
                document.getElementById("third").fstdropdown.dd.remove();
                document.querySelector("#third~.fstdiv").remove();
            }
        }

        function addOptions(add) {
            var select = document.getElementById("fourth");
            for (var i = 0; i < add; i++) {
                var opt = document.createElement("option");
                var o = Array.from(document.getElementById("fourth").querySelectorAll("option")).slice(-1)[0];
                var last = o == undefined ? 1 : Number(o.value) + 1;
                opt.text = opt.value = last;
                select.add(opt);
            }
        }

        function removeOptions(remove) {
            for (var i = 0; i < remove; i++) {
                var last = Array.from(document.getElementById("fourth").querySelectorAll("option")).slice(-1)[0];
                if (last == undefined)
                    break;
                Array.from(document.getElementById("fourth").querySelectorAll("option")).slice(-1)[0].remove();
            }
        }

        function updateDrop() {
            document.getElementById("fourth").fstdropdown.rebind();
        }
    </script>
    {{-- End Here Script --}}
    @yield('scripts')

    
</body>

</html>
