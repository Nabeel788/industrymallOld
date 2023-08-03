<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>jQuery UI Price Range Slider</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" type="text/css" media="all" />
<style>


#price-range {
  width: 500px;
  margin:5% auto;
  text-align:center;
}
    </style>
            {{-- @extends('pricebar.slidebar') --}}
                                            {{-- @include('pricebar.slidebar') --}}
</head>

<div id="price-range">
    <div class="section price">
        <div class="price-slider"></div>
        <p class="price-value"></p>
    </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" type="text/javascript"></script>

    <script>
    $( ".price-slider" ).slider({
        range: true,
        min: 0,
        max: 500,
        values: [ 10, 500 ],
        slide: function( event, ui ) {
            $( ".price-value" ).text( "£" + ui.values[ 0 ] + " - £" + ui.values[ 1 ] );
        }
    });
    $( ".price-value" ).text( "£" + $( ".price-slider" ).slider( "values", 0 ) +
            " - £" + $(".price-slider" ).slider( "values", 1 ) );


    </script>


    </body>
</html>
