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
    <title>PURCHASES</title>
    <!-----custom--------->
    <link rel="stylesheet" href="{{ asset('custom/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('custom/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('custom/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('custom/select2.min.css') }}">

    <!----end custom links--------->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}"> <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- IonIcons -->
    <link rel="stylesheet" href="{{ asset('custom/ionicons.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="{{ asset('custom/css.css') }}">
    <!----custom links----->
    <script src="{{ asset('custom/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('custom/jquery.min.js') }}"></script>
    <script src="{{ asset('custom/jquery-ui.min.js') }}"></script>
    <!-- SearchAble Dropdown Library -->
    <link rel="stylesheet" href="{{ asset('css/fstdropdown.css') }}">
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
                <div class="col-lg-12 col-md-12 col-sm-12">
                    @if (Session::has('flash_message'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('flash_message') }}
                        </div>
                    @endif
                    @if (Session::has('failure_message'))
                        <div class="alert alert-danger" role="alert">
                            {{ Session::get('failure_message') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card">
                        <div class="card-header" style="background-color:#D4AF37;">
                            <h3 class="card-title" style=""><b>Add Purchase</b></h3>
                            <p class="text-end" style=""><b><a class="text-dark"
                                        href="{{ asset('/purchase') }}">Go
                                        Back</a></b></p>
                        </div>

                        {!! Form::open(['url' => 'purchase', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
                        <div class="card-body">
                            <input type="hidden" id="DeleteID" name="DeleteID">
                            <!----->
                            <input type="hidden" name="biller_id" value="{{ Auth::User()->id }}">
                            <input type="hidden" name="type" value="PURCHASE" id="type">
                            <!---->
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Date</label>
                                            <input id="date" type="date" value="<?php echo date('Y-m-d'); ?>"
                                                name="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Bill No</label>
                                            {!! Form::text('bill_no', $codes, [
                                                'id' => 'bill_no',
                                                'class' => 'form-control',
                                                'onkeyup' => 'BillKeyUp($(this).val());',
                                            ]) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-------->

                            <div class="col-md-5 d-none">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Select Supplier</label>
                                    {!! Form::select('supplier_id', $c, null, ['id' => 'supplier_id', 'class' => 'form-control']) !!}
                                </div>
                            </div>
                            <!-------------->

                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-1 d-none">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Code</label>
                                            {{-- {!! Form::text('code', null, ['id' => 'code','class'=>'form-control',  'autofocus'=>'autofocus']) !!} --}}
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">SKU</label>
                                            {!! Form::select('produc_id', $p, null, [
                                                'id' => 'produc_id',
                                                'onchange' => 'productMouseUp($(this).val());',
                                                'class' => 'form-control fstdropdown-select',
                                                // 'autofocus' => 'autofocus',
                                            ]) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        {{-- <div class="form-group">
                                            <label for="exampleFormControlSelect1">SKU</label>
                                            {!! Form::text('sku', null, ['id' => 'sku', 'class' => 'form-control']) !!}
                                        </div> --}}
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Product</label>
                                            {!! Form::text('p_id', null, ['id' => 'p_id', 'class' => 'form-control']) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-1 d-none">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Carat</label>
                                            {!! Form::select('carat_id', $carat, null, ['id' => 'carat_id', 'class' => 'form-control']) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Quantity</label>
                                            {!! Form::text('quantity', null, [
                                                'id' => 'quantity',
                                                'class' => 'form-control',
                                                'onkeyup' => 'QuantityKeyUp($(this).val())',
                                            ]) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Cost</label>
                                            {!! Form::text('cost', null, [
                                                'id' => 'cost',
                                                'class' => 'form-control',
                                                'onkeyup' => 'PriceKeyUp($(this).val())',
                                            ]) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Total</label>
                                            {!! Form::text('total', null, ['id' => 'total', 'class' => 'form-control']) !!}
                                        </div>
                                    </div>

                                    <!----->
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Action</label>
                                            <button type="button" class="btn btn-primary" id="add" ,
                                                onkeyup='AddGridData();' onclick="AddGridData();">Add</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="myData"></div>
                            <!----------->
                            <div class="col-md-12" style="background-color: #D4AF37;border-radius: 5px;">
                                <div class="row">
                                    <div class="col-md-6 mt-4">
                                        <h4 style="color: snow;"><b>Total Records</b></h4>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Total Quantity</label>
                                            {!! Form::text('total_quantity', 0, ['id' => 'total_quantity', 'class' => 'form-control']) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Total Amount</label>
                                            {!! Form::text('total_amount', 0, ['id' => 'total_amount', 'class' => 'form-control']) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <!-- <button class="btn btn-danger" id="deletebtn" style="display:none;"><a href="{{ asset('purchase/1/destroy') }}" style="color: white;">Delete</a></button> -->
                            <button type="button" class="btn btn-info" id="printbtn"
                                style="display:none; color: white;" onclick="PrintPurchase();">Print</button>

                            <button type="button" class="btn btn-danger" id="deletebtn"
                                style="display:none; color: white;" onclick="DeletePurchase();">Delete</button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->

    <script type="text/javascript">
        function DeletePurchase() {
            var deleteID = document.getElementById('DeleteID').value;
            window.location.href = "{{ asset('purchase') }}/" + deleteID + "/destroy";
        }

        function PrintPurchase() {
            var PrintID = document.getElementById('DeleteID').value;
            window.location.href = "{{ asset('purchase') }}/" + PrintID;
        }

        function QuantityKeyUp(quantity) {
            var price = document.getElementById('cost').value;
            total = (quantity * price);
            document.getElementById('total').value = total;
        }

        function PriceKeyUp(price) {
            var quantity = document.getElementById('quantity').value;
            total = (price * quantity);
            document.getElementById('total').value = total;
        }

        function productMouseUp(productID) {
            if (!productID) {
                document.getElementById('cost').value = null;
                document.getElementById('sku').value = null;
            } else {
                var cost = document.getElementById('produc_id').value.split("_")[2];
                var sku = productID.split("_")[3];
                var product = productID.split("_")[1];
                document.getElementById('cost').value = cost;
                // document.getElementById('sku').value = sku;
                document.getElementById('p_id').value = product;
            }
        }

        function myDeleteFunction(row) {
            var total = $(row).find("div:eq('15')").find("input").val();
            var total_amount = document.getElementById('total_amount').value;
            var grand = parseInt(total_amount) - parseInt(total);
            document.getElementById('total_amount').value = grand;

            var q = $(row).find("div:eq('12')").find("input").val();

            var total_q = document.getElementById('total_quantity').value;
            var grands = parseInt(total_q) - parseInt(q);
            document.getElementById('total_quantity').value = grands;
            $(row).remove();
        }

        function AddGridData() {
            // var code = document.getElementById('code').value;
            var q = document.getElementById('quantity').value;
            var cost = document.getElementById('cost').value;
            var total = document.getElementById('total').value;
            var productID = document.getElementById('produc_id').value.split("_")[0];
            var productName = document.getElementById('produc_id').value.split("_")[1];
            var sku = document.getElementById('produc_id').value.split("_")[3];
            // var unitID = document.getElementById('unit_id').value.split("_")[0];
            // var unitName = document.getElementById('unit_id').value.split("_")[1];

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



            //  tableHtml += ` <div class="col-md-1">`;
            //  tableHtml += ` <div class="form-group">`;
            // tableHtml += `<label for="exampleFormControlInput1">Code</label>`;
            // tableHtml += `{!! Form::text('code[]', '${code}', ['id' => 'code', 'class' => 'form-control']) !!}`;
            // tableHtml += `</div>`;
            // tableHtml += `</div>`;
            tableHtml += `<div class="col-md-4"  style="display:none;">`;
            tableHtml += `<div class="form-group">`;
            tableHtml += ` {!! Form::text('product_id[]', '${productID}', ['id' => 'product_id', 'class' => 'form-control']) !!}`;
            tableHtml += `</div>`;
            tableHtml += `</div>`;


            tableHtml += `<div class="col-md-2">`;
            tableHtml += `<div class="form-group">`;
            // tableHtml += `<label for="exampleFormControlSelect1">Unit</label>`;
            tableHtml += `{!! Form::text('sku[]', '${sku}', ['id' => 'sku', 'class' => 'form-control', 'disabled' => 'disabled']) !!}`;
            tableHtml += `</div>`;
            tableHtml += `</div>`;


            // tableHtml += `<div class="col-md-3" style="display:none;">`;
            // tableHtml += `<div class="form-group">`;
            // tableHtml += ` {!! Form::text('unit_id[]', '${unitID}', ['id' => 'unit_id', 'class' => 'form-control']) !!}`;
            // tableHtml += `</div>`;
            // tableHtml += `</div>`;


            tableHtml += `<div class="col-md-3">`;
            tableHtml += `<div class="form-group">`;
            tableHtml += ` {!! Form::text('product_name[]', '${productName}', [
                'id' => 'product_name',
                'class' => 'form-control',
                'disabled' => 'disabled',
            ]) !!}`;
            tableHtml += `</div>`;
            tableHtml += `</div>`;


            tableHtml += `<div class="col-md-3" style="display:none;">`;
            tableHtml += `<div class="form-group">`;
            tableHtml += ` {!! Form::text('carat_id[]', '${caratID}', ['id' => 'carat_id', 'class' => 'form-control']) !!}`;
            tableHtml += `</div>`;
            tableHtml += `</div>`;
            tableHtml += `<div class="col-md-1 d-none">`;
            tableHtml += `<div class="form-group">`;
            // tableHtml += `<label for="exampleFormControlSelect1">Unit</label>`;
            tableHtml += `{!! Form::text('carat_name[]', '${caratName}', ['id' => 'carat_name', 'class' => 'form-control']) !!}`;
            tableHtml += `</div>`;
            tableHtml += `</div>`;
            tableHtml += `<div class="col-md-1">`;
            tableHtml += `<div class="form-group">`;
            //   tableHtml +=  `<label for="exampleFormControlInput1">Quantity</label>`;
            tableHtml += `{!! Form::text('quantity[]', '${q}', ['id' => 'quantity', 'class' => 'form-control']) !!}`;
            tableHtml += `</div>`;
            tableHtml += `</div>`;
            tableHtml += `<div class="col-md-2">`;
            tableHtml += `<div class="form-group">`;
            //  tableHtml += `<label for="exampleFormControlInput1">Cost</label>`;
            tableHtml += `{!! Form::text('cost[]', '${cost}', ['id' => 'cost', 'class' => 'form-control']) !!}`;
            tableHtml += `</div>`;
            tableHtml += `</div>`;
            tableHtml += `<div class="col-md-2">`;
            tableHtml += `<div class="form-group">`;
            //  tableHtml += `<label for="exampleFormControlInput1">Total</label>`;
            tableHtml += `{!! Form::text('total[]', '${total}', [
                'id' => 'total',
                'class' => 'form-control',
                'onkeyup' => 'AddGridData()',
            ]) !!}`;
            tableHtml += `</div>`;
            tableHtml += ` </div>`;

            tableHtml += `<div class="col-md-1">`;
            tableHtml += `<div class="form-group">`;
            //  tableHtml += `<label for="exampleFormControlInput1">Total</label>`;

            tableHtml +=
                `<button type="button" class="btn btn-danger" name="btn" id="btn"><i onclick="javascript:myDeleteFunction($(this).closest('#del'));" class="icon-trash">Delete</button>`;


            tableHtml += `</div>`;
            tableHtml += ` </div>`;


            tableHtml += `</div>`;
            //   tableHtml += `</td>`;
            //    tableHtml += `</tr>`;
            //      tableHtml += `</table>`;
            tableHtml += '</div>';
            $('#myData').append(tableHtml);
            // document.getElementById('code').focus();

            // document.getElementById('produc_id').selectedIndex = 0;
            // document.getElementById('select2-produc_id-container').innerHTML = 'Select SKU';
            // document.getElementById('select2-produc_id-container').setAttribute('title', '');
            document.querySelector('.fstselected').selectedIndex = 0;
            document.querySelector('.fstselected').innerHTML = 'Select SKU';
            document.querySelector('.fstlist div').setAttribute('class', '');
            document.getElementById('p_id').value = '';
            document.getElementById('quantity').value = '';
            document.getElementById('cost').value = '';
            document.getElementById('total').value = '';
        }

        //top grid

        function BillKeyUp() {
            var bill = document.getElementById('bill_no').value;
            $.ajax({
                type: "GET",
                url: "{{ url('purchasebill-ajax') }}?bill_no=" + bill,
                success: function(result) {
                    console.log(result);
                    if (result.length > 0) {
                        $('#myData').html('');
                        $('#total_amount').val(0);
                        $('#total_quantity').val(0);

                        var totals = 0;
                        $('#deletebtn').show();
                        $('#printbtn').show();

                        $("#DeleteID").val(result[0].bill_no);
                        $("#date").val(result[0].date);
                        // $("#supplier_id").val(result[0].supplier_id);
                        $.each(result, function(key, value) {

                            var tableHtml = '<div class="col-md-12" id= "del">';
                            tableHtml += ` <div class="row">`;
                            tableHtml += `<div class="col-md-4"  style="display:none;">`;
                            tableHtml += `<div class="form-group">`;
                            tableHtml +=
                                `<input type="text" name="product_id[]" id="product_id" value="${value.pro_id}" class="form-control">`;
                            tableHtml += `</div>`;
                            tableHtml += `</div>`;


                            tableHtml += `<div class="col-md-2">`;
                            tableHtml += `<div class="form-group">`;
                            // tableHtml += `<label for="exampleFormControlSelect1">Unit</label>`;
                            tableHtml +=
                                `<input type="text" name="sku[]" id="sku" value="${value.product.sku}" class="form-control" disabled>`;

                            tableHtml += `</div>`;
                            tableHtml += `</div>`;




                            tableHtml += `<div class="col-md-3" style="display:none;">`;
                            tableHtml += `<div class="form-group">`;
                            tableHtml +=
                                `<input type="text" name="unit_id[]" id="unit_id" value="${value.uoms.id}" class="form-control">`;
                            tableHtml += `</div>`;
                            tableHtml += `</div>`;



                            tableHtml += `<div class="col-md-3">`;
                            tableHtml += `<div class="form-group">`;
                            tableHtml +=
                                `<input type="text" name="produc_name[]" id="produc_name" value="${value.product.name}" class="form-control" disabled>`;
                            tableHtml += `</div>`;
                            tableHtml += `</div>`;



                            //
                            tableHtml += `<div class="col-md-3" style="display:none;">`;
                            tableHtml += `<div class="form-group">`;
                            tableHtml +=
                                `<input type="text" name="carat_id[]" id="carat_id" value="0" class="form-control">`;
                            tableHtml += `</div>`;
                            tableHtml += `</div>`;

                            //   tableHtml += `<div class="col-md-1">`;
                            //  tableHtml += `<div class="form-group">`;
                            // tableHtml += `<label for="exampleFormControlSelect1">Unit</label>`;
                            // tableHtml += `<input type="text" name="carat_name[]" id="carat_name" value="${result[0].purchase_details[key].carats.name}" class="form-control">`;

                            // tableHtml += `</div>`;
                            // tableHtml += `</div>`;
                            //
                            tableHtml += `<div class="col-md-1">`;
                            tableHtml += `<div class="form-group">`;
                            //   tableHtml +=  `<label for="exampleFormControlInput1">Quantity</label>`;

                            tableHtml +=
                                `<input type="text" name="quantity[]" id="quantity" value="${value.qty_in}" class="form-control">`;
                            tableHtml += `</div>`;
                            tableHtml += `</div>`;
                            tableHtml += `<div class="col-md-2">`;
                            tableHtml += `<div class="form-group">`;
                            //  tableHtml += `<label for="exampleFormControlInput1">Cost</label>`;
                            tableHtml +=
                                `<input type="text" name="cost[]" id="cost" value="${value.cost}" class="form-control">`;
                            tableHtml += `</div>`;
                            tableHtml += `</div>`;
                            tableHtml += `<div class="col-md-2">`;
                            tableHtml += `<div class="form-group">`;
                            //  tableHtml += `<label for="exampleFormControlInput1">Total</label>`;

                            tableHtml +=
                                `<input type="text" name="total[]" id="total" value="${value.total}" class="form-control", onkeyup = 'AddGridData();'>`;
                            tableHtml += `</div>`;
                            tableHtml += ` </div>`;

                            tableHtml += `<div class="col-md-1">`;
                            tableHtml += `<div class="form-group">`;
                            //  tableHtml += `<label for="exampleFormControlInput1">Total</label>`;

                            tableHtml +=
                                `<button type="button" class="btn btn-danger" name="btn" id="btn"><i onclick="javascript:myDeleteFunction($(this).closest('#del'));" class="icon-trash">Delete</button>`;


                            tableHtml += `</div>`;
                            tableHtml += ` </div>`;


                            tableHtml += `</div>`;
                            //   tableHtml += `</td>`;
                            //    tableHtml += `</tr>`;
                            //      tableHtml += `</table>`;
                            tableHtml += '</div>';


                            $('#myData').append(tableHtml);
                            // document.getElementById('code').focus();

                            //Sum of total value
                            var test = document.getElementById('total_amount').value;
                            var last = parseInt(test) + parseInt(value.total);
                            document.getElementById('total_amount').value = last;
                            //End Sum of total value
                            //Sum of total value
                            var quantity = document.getElementById('total_quantity').value;
                            var fast = parseInt(quantity) + parseInt(value.qty_in);
                            document.getElementById('total_quantity').value = fast;
                            //End Sum of total value

                        });
                    }
                }
            });
        }
    </script>

    <!-- Select2-->
    <script src="{{ asset('/js/plugins/select2/select2.full.min.js') }}"></script>
    <script type="text/javascript">
        // $("#produc_id").select2();
        // $("#produc_id").next(".select2").find(".select2-selection").focus(function() {
        //     $("#produc_id").select2("open");
        // });

        $("#supplier_id").select2();
        $("#supplier_id").next(".select2").find(".select2-selection").focus(function() {
            $("#supplier_id").select2("open");
        });
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

    <script src="{{ asset('/js/plugins/nouislider/nouislider.min.js') }}"></script>
    <!-- Input Mask-->
    <script src="{{ asset('/js/plugins/jasny/jasny-bootstrap.min.js') }}"></script>

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
</body>

</html>
