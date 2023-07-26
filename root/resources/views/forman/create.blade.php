<?php
use App\Models\Settings;
$settings = Settings::where('id', '=', 1)->get();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from adminlte.io/themes/v3/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Feb 2020 11:10:28 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>{{$settings[0]->title}}</title>
  <!-----custom--------->

   <link rel="stylesheet" href="{{asset('custom/adminlte.min.css')}}"> 
   <link rel="stylesheet" href="{{asset('custom/bootstrap.min.css')}}"> 
   <link rel="stylesheet" href="{{asset('custom/jquery-ui.css')}}"> 
   <link rel="stylesheet" href="{{asset('custom/select2.min.css')}}"> 

<!----end custom links--------->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- IonIcons -->
 <link rel="stylesheet" href="{{asset('custom/ionicons.min.css')}}"> 
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="{{asset('custom/css.css')}}"> 
  <!----custom links----->
  <script src="{{asset('/custom/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('/custom/jquery.min.js')}}"></script>
  <script src="{{asset('/custom/jquery-ui.min.js')}}"></script>
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
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card">
              <div class="card-header"  style="background-color:#D4AF37;">
                <h3 class="card-title" style=""><b>Issue to Forman</b></h3>
               <p class="text-end" style=""><b><a class="text-dark" href="{{asset('/home')}}">Go Back</a></b></p>



              </div>
              <!-- /.card-header -->
              <!-- form start -->
            
             
              {!! Form::open(['url' => 'forman', 'method' => 'POST', 'class'=>'form-horizontal']) !!}
                <div class="card-body">
                  <input type="hidden" id="DeleteID" name="DeleteID">

                  <!----->
          <input type="hidden" name="biller_id" value="{{Auth::User()->id}}">
          <input type="text" name="status" value="ISSUE" id="status">
                  <!---->
                  <!-------->
                   <div class="col-md-12">
        <div class="row">
      <div class="col-md-3">
        <div class="form-group">
          <label for="exampleFormControlSelect1">Date</label>
          <input id="date" type="date" value="<?php echo date('Y-m-d');?>" name="date" class="form-control"> 
        </div></div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="exampleFormControlInput1">Bill No</label>
          {!! Form::text('bill_no', $codes, ['id' => 'bill_no','class'=>'form-control', 'onkeyup'=>'BillKeyUp($(this).val());'])!!}
          </div>
        </div>
      </div></div>
                  <!-------->

                  <div class="col-md-5">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Select Supplier</label>
             
             {!! Form::select('supplier_id',$c, null, ['id' => 'supplier_id', 'class'=>'form-control']) !!}
          
          </div>
        </div>
             <!-------------->



        <div class="col-md-12">
        <div class="row">
          <div class="col-md-1">
            <div class="form-group">
              <label for="exampleFormControlInput1">Code</label>
              {!! Form::text('code', null, ['id' => 'code','class'=>'form-control',  'autofocus'=>'autofocus']) !!}
            </div>
          </div>
      <div class="col-md-3">
        <div class="form-group">
          <label for="exampleFormControlSelect1">Product Name</label>
           {!! Form::select('produc_id', $p, null, ['id' => 'produc_id', 'onchange' => 'productMouseUp($(this).val());','class'=>'form-control']) !!}
        </div>
      </div>
        <div class="col-md-1">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Unit</label>
             {!! Form::select('unit_id', $uom, null, ['id' => 'unit_id','class'=>'form-control']) !!}
          </div></div>
          <div class="col-md-1">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Carat</label>
             {!! Form::select('carat_id', $carat, null, ['id' => 'carat_id','class'=>'form-control']) !!}
          </div></div>
          <div class="col-md-1">
            <div class="form-group">
              <label for="exampleFormControlInput1">Quantity</label>
              {!! Form::text('quantity_out', null, ['id' => 'quantity_out','class'=>'form-control', 'onkeyup' => 'QuantityKeyUp($(this).val())']) !!}
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label for="exampleFormControlInput1">Cost</label>
              {!! Form::text('cost', null, ['id' => 'cost','class'=>'form-control',  'onkeyup' => 'PriceKeyUp($(this).val())']) !!}
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label for="exampleFormControlInput1">Total</label>
              {!! Form::text('total', null, ['id' => 'total','class'=>'form-control']) !!}
            </div>
          </div>

          <!----->
          <div class="col-md-1">
            <div class="form-group">
              <label for="exampleFormControlInput1">Action</label>
            <button class="btn btn-primary" id="add" , onkeyup  = 'AddGridData();'>Add</button> 
           

            </div>
          </div>
       
      </div>
    </div>

<div id="myData">

    </div>














           <!----------->
           
 <div class="col-md-12" style="background-color: #D4AF37;border-radius: 5px;">
      <div class="row">
        <div class="col-md-6 mt-4">
            <h4 style="color: snow;"><b>Total Records</b></h4>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="exampleFormControlInput1">Total Quantity</label>
             {!! Form::text('total_quantity', 0, ['id' => 'total_quantity','class'=>'form-control']) !!}
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="exampleFormControlInput1">Total Amount</label>
             {!! Form::text('total_amount', 0, ['id' => 'total_amount','class'=>'form-control']) !!}
          </div>
        </div>
      </div>
    </div>
 
             
                </div>
                <!-- /.card-body -->


                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <!-- <button class="btn btn-danger" id="deletebtn" style="display:none;"><a href="{{asset('forman/1/destroy')}}" style="color: white;">Delete</a></button> -->
                   
                  <button type="button" class="btn btn-info" id="printbtn" style="display:none; color: white;" onclick="PrintPurchase();">Print</button>

                  <button type="button" class="btn btn-danger" id="deletebtn" style="display:none; color: white;" onclick="DeletePurchase();">Delete</button>

                </div>
              {!! Form::close() !!}
            </div>


          </div>
          <!--/.col (left) -->
          <!-- right column -->
          
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->





<script type="text/javascript">

  
  function DeletePurchase(){
   //var price = document.getElementById('cost').value;
   //alert("go")
   var deleteID= document.getElementById('DeleteID').value;
   //alert(deleteID)
   window.location.href ="{{asset('forman')}}/"+deleteID+"/destroy";

    }
     function PrintPurchase(){
   //var price = document.getElementById('cost').value;
   //alert("go")
   //var deleteID= document.getElementById('DeleteID').value;
   //alert(deleteID)
   var PrintID= document.getElementById('DeleteID').value;
   window.location.href ="{{asset('forman')}}/"+PrintID;

    }

function QuantityKeyUp(quantity){
   var price = document.getElementById('cost').value;

     

      total = (quantity * price);
      document.getElementById('total').value = total;

    }
function PriceKeyUp(price){
      var quantity = document.getElementById('quantity_out').value;
      
      total = (price * quantity);
     // alert(total);
      document.getElementById('total').value = total;
    }
function productMouseUp(productID){
  //alert(productID);
     // var id = document.getElementById('produc_id').value.split("_")[0];
     // var product_name = document.getElementById('produc_id').value.split("_")[1];
      var cost = document.getElementById('produc_id').value.split("_")[2];
      var code = document.getElementById('produc_id').value.split("_")[3];
     // alert(cost)
      document.getElementById('cost').value = cost;
      document.getElementById('code').value = code;

     
    }
      function myDeleteFunction(row) {
      var total = $(row).find("div:eq('15')").find("input").val();
      var total_amount = document.getElementById('total_amount').value;
      var grand = parseInt(total_amount) - parseInt(total);  
      document.getElementById('total_amount').value = grand;


     var q = $(row).find("div:eq('12')").find("input").val();
   //  alert(q);
     var total_q = document.getElementById('total_quantity').value;
     var grands = parseInt(total_q) - parseInt(q);  
      document.getElementById('total_quantity').value = grands;

// alert(total_amount);

      $(row).remove();

        
   

   
  }



function AddGridData(){

     
var code = document.getElementById('code').value;
var q = document.getElementById('quantity_out').value;
var cost = document.getElementById('cost').value;
var total = document.getElementById('total').value;
var productID = document.getElementById('produc_id').value.split("_")[0];
var productName = document.getElementById('produc_id').value.split("_")[1];
var unitID = document.getElementById('unit_id').value.split("_")[0];
var unitName = document.getElementById('unit_id').value.split("_")[1];
var caratID = document.getElementById('carat_id').value.split("_")[0];
var caratName = document.getElementById('carat_id').value.split("_")[1];
//var productName = document.getElementById('produc_id').value.split("_").pop();

var grandtotal = document.getElementById('total_amount').value;
var grandtotal = parseInt(total) + parseInt(grandtotal);
var grandtotal = document.getElementById('total_amount').value = grandtotal;



var grandtotal_q = document.getElementById('total_quantity').value;
var grandtotal_q = parseInt(q) + parseInt(grandtotal_q);
var grandtotal_q = document.getElementById('total_quantity').value = grandtotal_q;
  // alert(productID)
  // alert(productName)
//var unit = document.getElementById('unit_id').value;
   var tableHtml = '<div class="col-md-12" id= "del">';
  // tableHtml += `<table>`;
  //          tableHtml += `<tr>`;
  //          tableHtml += `<td>`;
       tableHtml += ` <div class="row">`;

 

         tableHtml += ` <div class="col-md-1">`;
           tableHtml += ` <div class="form-group">`;
             // tableHtml += `<label for="exampleFormControlInput1">Code</label>`;
              tableHtml += `{!! Form::text('code[]', '${code}', ['id' => 'code', 'class'=>'form-control']) !!}`;
            tableHtml += `</div>`;
          tableHtml += `</div>`;
           tableHtml += `<div class="col-md-4"  style="display:none;">`;
         tableHtml += `<div class="form-group">`;
           tableHtml += ` {!! Form::text('produc_id[]', '${productID}', ['id' => 'produc_id','class'=>'form-control']) !!}`;
             tableHtml += `</div>`;
          tableHtml += `</div>`;

            tableHtml += `<div class="col-md-3">`;
         tableHtml += `<div class="form-group">`;
           tableHtml += ` {!! Form::text('produc_name[]', '${productName}', ['id' => 'produc_name','class'=>'form-control']) !!}`;
             tableHtml += `</div>`;
          tableHtml += `</div>`;

          tableHtml += `<div class="col-md-3" style="display:none;">`;
         tableHtml += `<div class="form-group">`;
           tableHtml += ` {!! Form::text('unit_id[]', '${unitID}', ['id' => 'unit_id','class'=>'form-control']) !!}`;
             tableHtml += `</div>`;
          tableHtml += `</div>`;

          tableHtml += `<div class="col-md-1">`;
         tableHtml += `<div class="form-group">`;
          // tableHtml += `<label for="exampleFormControlSelect1">Unit</label>`;
            tableHtml += `{!! Form::text('unit_name[]', '${unitName}', ['id' => 'unit_name','class'=>'form-control']) !!}`;
          tableHtml += `</div>`;
          tableHtml += `</div>`;
      tableHtml += `<div class="col-md-3" style="display:none;">`;
         tableHtml += `<div class="form-group">`;
           tableHtml += ` {!! Form::text('carat_id[]', '${caratID}', ['id' => 'carat_id','class'=>'form-control']) !!}`;
             tableHtml += `</div>`;
          tableHtml += `</div>`;
           tableHtml += `<div class="col-md-1">`;
         tableHtml += `<div class="form-group">`;
          // tableHtml += `<label for="exampleFormControlSelect1">Unit</label>`;
            tableHtml += `{!! Form::text('carat_name[]', '${caratName}', ['id' => 'carat_name','class'=>'form-control']) !!}`;
          tableHtml += `</div>`;
          tableHtml += `</div>`;

         tableHtml += `<div class="col-md-1">`;
            tableHtml += `<div class="form-group">`;
         //   tableHtml +=  `<label for="exampleFormControlInput1">Quantity</label>`;
             tableHtml += `{!! Form::text('quantity_out[]', '${q}', ['id' => 'quantity_out','class'=>'form-control']) !!}`;
            tableHtml += `</div>`;
          tableHtml += `</div>`;
          tableHtml += `<div class="col-md-2">`;
            tableHtml += `<div class="form-group">`;
           //  tableHtml += `<label for="exampleFormControlInput1">Cost</label>`;
              tableHtml += `{!! Form::text('cost[]', '${cost}', ['id' => 'cost','class'=>'form-control']) !!}`;
           tableHtml += `</div>`;
          tableHtml += `</div>`;
          tableHtml += `<div class="col-md-2">`;
            tableHtml += `<div class="form-group">`;
            //  tableHtml += `<label for="exampleFormControlInput1">Total</label>`;
              tableHtml += `{!! Form::text('total[]', '${total}', ['id' => 'total','class'=>'form-control', 'onkeyup' => 'AddGridData()']) !!}`;
         tableHtml += `</div>`;
      tableHtml += ` </div>`;

       tableHtml += `<div class="col-md-1">`;
            tableHtml += `<div class="form-group">`;
            //  tableHtml += `<label for="exampleFormControlInput1">Total</label>`;
          
             tableHtml += `<button type="button" class="btn btn-danger" name="btn" id="btn"><i onclick="javascript:myDeleteFunction($(this).closest('#del'));" class="icon-trash">Delete</button>`;
            
              
         tableHtml += `</div>`;
      tableHtml += ` </div>`;


        tableHtml += `</div>`;
     //   tableHtml += `</td>`;
     //    tableHtml += `</tr>`;
     //      tableHtml += `</table>`;
      tableHtml += '</div>';
    $('#myData').append(tableHtml);
  document.getElementById('code').focus();
 

  }

  //top grid

  function BillKeyUp(){
    $("#myData div").remove();
    $('#deletebtn').hide();
    $('#printbtn').hide();
    var bill = document.getElementById('bill_no').value;
    //alert(bill)
    $.ajax({
      type: "GET",
      url: "{{url('formanbill-ajax')}}?bill_no=" + bill,
     success: function(result) {
        if(result.length > 0)
        {

          
     // delete all crud in purchase and purchas details
        var totals = 0;
        $('#deletebtn').show();
        $('#printbtn').show();
         
          $("#DeleteID").val(result[0].id);
          $("#date").val(result[0].date);
          $("#supplier_id").val(result[0].supplier_id);
          $.each(result[0].purchase_details, function(key, value){

       //  alert("2")
        var tableHtml = '<div class="col-md-12" id= "del">';
       tableHtml += ` <div class="row">`;

         tableHtml += ` <div class="col-md-1">`;
           tableHtml += ` <div class="form-group">`;
              tableHtml += `<input type="text" name="code[]" id="code" value="${result[0].purchase_details[key].prodcts.code}" class="form-control">`;
            tableHtml += `</div>`;
          tableHtml += `</div>`;
           tableHtml += `<div class="col-md-4"  style="display:none;">`;
         tableHtml += `<div class="form-group">`;
           tableHtml += `<input type="text" name="produc_id[]" id="produc_id" value="${result[0].purchase_details[key].prodcts.id}" class="form-control">`;
             tableHtml += `</div>`;
          tableHtml += `</div>`;

            tableHtml += `<div class="col-md-3">`;
         tableHtml += `<div class="form-group">`;
           tableHtml += `<input type="text" name="produc_name[]" id="produc_name" value="${result[0].purchase_details[key].prodcts.name}" class="form-control">`;
          
             tableHtml += `</div>`;
          tableHtml += `</div>`;

          tableHtml += `<div class="col-md-3" style="display:none;">`;
         tableHtml += `<div class="form-group">`;
           tableHtml += `<input type="text" name="unit_id[]" id="unit_id" value="${result[0].purchase_details[key].uoms.id}" class="form-control">`;
             tableHtml += `</div>`;
          tableHtml += `</div>`;

          tableHtml += `<div class="col-md-1">`;
         tableHtml += `<div class="form-group">`;
          // tableHtml += `<label for="exampleFormControlSelect1">Unit</label>`;
            tableHtml += `<input type="text" name="unit_name[]" id="unit_name" value="${result[0].purchase_details[key].uoms.uom}" class="form-control">`;

          tableHtml += `</div>`;
          tableHtml += `</div>`;
          //
           tableHtml += `<div class="col-md-3" style="display:none;">`;
         tableHtml += `<div class="form-group">`;
           tableHtml += `<input type="text" name="carat_id[]" id="carat_id" value="${result[0].purchase_details[key].carats.id}" class="form-control">`;
             tableHtml += `</div>`;
          tableHtml += `</div>`;

          tableHtml += `<div class="col-md-1">`;
         tableHtml += `<div class="form-group">`;
          // tableHtml += `<label for="exampleFormControlSelect1">Unit</label>`;
            tableHtml += `<input type="text" name="carat_name[]" id="carat_name" value="${result[0].purchase_details[key].carats.name}" class="form-control">`;

          tableHtml += `</div>`;
          tableHtml += `</div>`;
          //
         tableHtml += `<div class="col-md-1">`;
            tableHtml += `<div class="form-group">`;
         //   tableHtml +=  `<label for="exampleFormControlInput1">Quantity</label>`;

             tableHtml += `<input type="text" name="quantity_out[]" id="quantity_out" value="${result[0].purchase_details[key].quantity_out}" class="form-control">`;
            tableHtml += `</div>`;
          tableHtml += `</div>`;
          tableHtml += `<div class="col-md-2">`;
            tableHtml += `<div class="form-group">`;
           //  tableHtml += `<label for="exampleFormControlInput1">Cost</label>`;
              tableHtml += `<input type="text" name="cost[]" id="cost" value="${result[0].purchase_details[key].cost}" class="form-control">`;
           tableHtml += `</div>`;
          tableHtml += `</div>`;
          tableHtml += `<div class="col-md-2">`;
            tableHtml += `<div class="form-group">`;
            //  tableHtml += `<label for="exampleFormControlInput1">Total</label>`;

              tableHtml += `<input type="text" name="total[]" id="total" value="${result[0].purchase_details[key].total}" class="form-control", onkeyup = 'AddGridData();'>`;
         tableHtml += `</div>`;
      tableHtml += ` </div>`;

       tableHtml += `<div class="col-md-1">`;
            tableHtml += `<div class="form-group">`;
            //  tableHtml += `<label for="exampleFormControlInput1">Total</label>`;
          
             tableHtml += `<button type="button" class="btn btn-danger" name="btn" id="btn"><i onclick="javascript:myDeleteFunction($(this).closest('#del'));" class="icon-trash">Delete</button>`;
            
              
         tableHtml += `</div>`;
      tableHtml += ` </div>`;


        tableHtml += `</div>`;
     //   tableHtml += `</td>`;
     //    tableHtml += `</tr>`;
     //      tableHtml += `</table>`;
      tableHtml += '</div>';

    $('#myData').append(tableHtml);
  document.getElementById('code').focus();

  //Sum of total value
  var test = document.getElementById('total_amount').value;    
 var last = parseInt(test) + parseInt(result[0].purchase_details[key].total);
document.getElementById('total_amount').value = last;
//End Sum of total value
 //Sum of total value
  var quantity = document.getElementById('total_quantity').value;    
 var fast = parseInt(quantity) + parseInt(result[0].purchase_details[key].quantity_out);
document.getElementById('total_quantity').value = fast;
//End Sum of total value

        });

          
        } 
      },
     // error: function (xhr, ajaxOptions, thrownError) {
       // alert(xhr.status);
       // alert(thrownError);
  
    //  }       
    });
}
 

</script>


<!-- Select2-->
<!-- Select2-->
<script src="{{asset('/js/plugins/select2/select2.full.min.js')}}"></script>
<script type="text/javascript">
  $("#produc_id").select2();
  $("#produc_id").next(".select2").find(".select2-selection").focus(function() {
  $("#produc_id").select2("open");
     });

  // $("#supplier_id").select2();
  // $("#supplier_id").next(".select2").find(".select2-selection").focus(function() {
  // $("#supplier_id").select2("open");
  //    });

  $("#carat_id").select2();
  $("#carat_id").next(".select2").find(".select2-selection").focus(function() {
  $("#carat_id").select2("open");
     });

  $("#unit_id").select2();
  $("#unit_id").next(".select2").find(".select2-selection").focus(function() {
  $("#unit_id").select2("open");
     });
</script>



<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE -->
<script src="{{asset('dist/js/adminlte.js')}}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('dist/js/demo.js')}}"></script>
<script src="{{asset('dist/js/pages/dashboard3.js')}}"></script>
<!------->


<script src="{{asset('/js/plugins/nouislider/nouislider.min.js')}}"></script>
<!-- Input Mask-->
<script src="{{asset('/js/plugins/jasny/jasny-bootstrap.min.js')}}"></script>

<!--Bootstrap ColorPicker-->
<script src="{{asset('/js/plugins/colorpicker/bootstrap-colorpicker.min.js')}}"></script>
<!--Bootstrap DatePicker-->
<script src="{{asset('/js/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
<!------->
<!----//custom--->

</body>
<!-- Mirrored from adminlte.io/themes/v3/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Feb 2020 11:10:30 GMT -->
</html>
