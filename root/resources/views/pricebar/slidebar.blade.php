<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    #price-range {
  width: 500px;
  margin:5% auto;
  text-align:center;
}
</style>
<body>
    <div id="price-range">
        <div class="section price">
            <div class="price-slider"></div>
            <p class="price-value"></p>
        </div>
        </div>
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
