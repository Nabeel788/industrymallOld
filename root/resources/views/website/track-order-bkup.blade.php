<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Timeline */
        .timeline,
        .timeline-horizontal {
            list-style: none;
            padding: 20px;
            position: relative;
        }

        .timeline:before {
            top: 0px;
            bottom: 0;
            position: absolute;
            content: " ";
            width: 3px;
            background-color: dodgerblue;
            left: 50%;
            margin-left: -1.5px;
        }

        .timeline .timeline-item {
            margin-bottom: 20px;
            position: relative;
        }

        .timeline .timeline-item:before,
        .timeline .timeline-item:after {
            content: "";
            display: table;
        }

        .timeline .timeline-item:after {
            clear: both;
        }

        .timeline .timeline-item .timeline-badge {
            color: dodgerblue;
            width: 100px;
            height: 100px;
            line-height: 24px;
            font-size: 18px;
            text-align: center;
            position: absolute;
            top: 18px;
            left: 50%;
            margin-left: -25px;
            background-color: white;
            border: 10px solid dodgerblue;
            z-index: 100;
            border-top-right-radius: 50%;
            border-top-left-radius: 50%;
            border-bottom-right-radius: 50%;
            border-bottom-left-radius: 50%;
        }

        .timeline .timeline-item .timeline-badge i,
        .timeline .timeline-item .timeline-badge .fa,
        .timeline .timeline-item .timeline-badge .glyphicon {
            top: 2px;
            left: 0px;
        }

        .timeline .timeline-item .timeline-badge.primary {
            background-color: #ffffff;
        }

        .timeline .timeline-item .timeline-panel {
            position: relative;
            width: 46%;
            float: left;
            right: 16px;
            border: 1px solid #c0c0c0;
            background: #ffffff;
            border-radius: 2px;
            padding: 20px;
            -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
            box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
        }

        .timeline .timeline-item .timeline-panel:before {
            position: absolute;
            top: 26px;
            right: -16px;
            display: inline-block;
            border-top: 16px solid transparent;
            border-left: 16px solid #c0c0c0;
            border-right: 0 solid #c0c0c0;
            border-bottom: 16px solid transparent;
            content: " ";
        }

        .timeline .timeline-item .timeline-panel .timeline-title {
            margin-top: 0;
            color: inherit;
        }

        .timeline .timeline-item .timeline-panel .timeline-body>p,
        .timeline .timeline-item .timeline-panel .timeline-body>ul {
            margin-bottom: 0;
        }

        .timeline .timeline-item .timeline-panel .timeline-body>p+p {
            margin-top: 5px;
        }

        .timeline .timeline-item:last-child:nth-child(even) {
            float: right;
        }

        .timeline .timeline-item:nth-child(even) .timeline-panel {
            float: right;
            left: 16px;
        }

        .timeline .timeline-item:nth-child(even) .timeline-panel:before {
            border-left-width: 0;
            border-right-width: 14px;
            left: -14px;
            right: auto;
        }

        .timeline-horizontal {
            list-style: none;
            position: relative;
            padding: 20px 0px 20px 0px;
            display: inline-block;
        }

        .timeline-horizontal:before {
            height: 3px;
            top: auto;
            bottom: 45px;
            left: 56px;
            right: 0;
            width: 75%;
            margin-bottom: 20px;
        }

        .timeline-horizontal .timeline-item {
            display: table-cell;
            height: 280px;
            width: 20%;
            min-width: 200px;
            float: none !important;
            padding-left: 0px;
            padding-right: 20px;
            margin: 0 auto;
            vertical-align: bottom;
        }

        .timeline-horizontal .timeline-item .timeline-panel {
            top: auto;
            bottom: 64px;
            display: inline-block;
            float: none !important;
            left: 0 !important;
            right: 0 !important;
            width: 100%;
            margin-bottom: 20px;
        }

        .timeline-horizontal .timeline-item .timeline-panel:before {
            top: auto;
            bottom: -16px;
            left: 28px !important;
            right: auto;
            border-right: 16px solid transparent !important;
            border-top: 16px solid #c0c0c0 !important;
            border-bottom: 0 solid #c0c0c0 !important;
            border-left: 16px solid transparent !important;
        }

        .timeline-horizontal .timeline-item:before,
        .timeline-horizontal .timeline-item:after {
            display: none;
        }

        .timeline-horizontal .timeline-item .timeline-badge {
            top: auto;
            bottom: 0px;
            left: 43px;
        }


        .timeline-item button {
            position: absolute;
            top: auto;
            bottom: 30px;
        }

        .timeline-badge b {
            font-size: 28px;
            font-weight: bold;
            display: table-cell;
            padding-left: 1.3em;
            padding-top: 1em;
            vertical-align: middle;
        }

        .timeline-badge p {}

        #lower-text {
            text-transform: uppercase;
            color: grey;
            font-size: 14px;
            font-weight: 600;
            position: absolute;
            left: 2em;
            bottom: -2em;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div style="display:inline-block;width:100%;">
                <ul class="timeline timeline-horizontal">
                    {{-- <li class="timeline-item">
                        <button class="btn btn-sm btn-primary">31 May 2017</button>

                    </li> --}}
                    <li class="timeline-item">
                        <div class="timeline-badge primary" style="background: #999999!important;">
                            {{-- <b>5</b> --}}
                            <p style="position: relative;top:25px;color:white;"><i class="fa fa-truck fa-2x"></i></p>
                        </div>
                        <p><span id="lower-text">per week</span></p>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-badge primary" style="background: #999999!important;">
                            {{-- <b>5</b> --}}
                            <p style="position: relative;top:25px;color:white;"><i class="fa fa-home fa-2x"></i></p>
                        </div>
                        <p><span id="lower-text">per week</span></p>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-badge primary" style="background: #999999!important;">
                            {{-- <b>4</b> --}}
                            <p style="position: relative;top:25px;color:white;"><i class="fa fa-ship fa-2x"></i></p>
                        </div>
                        <p><span id="lower-text">per hour</span></p>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-badge primary" style="background: #999999!important;">
                            {{-- <b>4</b> --}}
                            <p style="position: relative;top:25px;color:white;"><i class="fa fa-truck fa-2x"></i></p>
                        </div>
                        <p><span id="lower-text">per hour</span></p>
                    </li>
                    {{-- <li class="timeline-item">
                        <button class="btn btn-sm btn-primary">31 May 2017</button>

                    </li> --}}


                </ul>
            </div>
        </div>
    </div>

    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> --}}
</body>

</html>
