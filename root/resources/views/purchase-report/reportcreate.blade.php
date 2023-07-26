@extends("app")
@section("contents")

    <section class="content-header">
        @include('errors.validation')
         <div class="container-fluid">
        @if (Session::has('flash_message'))
           <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-hidden="true"  style="margin-right: 4%;">&times;</a>
            <strong>Success!</strong> {{ Session::get('flash_message') }}
            </div>
        @endif
      </div>
     <!--  <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Register Donor</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{asset('/home')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Register Donor</li>
            </ol>
          </div>
        </div>
      </div> -->
     
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><b>Purchase By Date</b></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            
             
              {!! Form::open(['url' => 'report', 'method' => 'POST', 'class'=>'form-horizontal']) !!}
                <div class="card-body">

                 <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Supplier</label>
                        
                       {!! Form::select('supplier_id',$c, null, ['id' => 'supplier_id', 'class'=>'form-control']) !!}
                      </div>
                    </div>
                  </div>

                   <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>From</label>
                        
                       <input type="date" name="from_date" id="from_date" value="<?php echo date("Y-m-d");?>" class="form-control" required autofocus>
                      </div>
                    </div>
                  </div>

                    <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>To</label>
                        
                        <input type="date" name="to_date" id="to_date" value="<?php echo date("Y-m-d");?>" class="form-control">
                      </div>
                    </div>
                  
                  </div>

             
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
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
<script src="{{asset('/js/plugins/select2/select2.full.min.js')}}"></script>
<script type="text/javascript">
  $("#supplier_id").select2();
  $("#supplier_id").next(".select2").find(".select2-selection").focus(function() {
  $("#supplier_id").select2("open");
     });
</script>
@stop
