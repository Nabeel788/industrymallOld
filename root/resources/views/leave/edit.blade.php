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
                <h3 class="card-title">Edit Leave Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            
                {!! Form::model($edit, ['method' => 'PATCH', 'action' => ['App\Http\Controllers\LeaveController@update', $edit->id], 'class' => 'form-horizontal' ]) !!}
                <div class="card-body">
                <div class="card-body">


                   <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                       
                        
                        {!! Form::hidden('updated_by', Auth::User()->name, ['id' => 'updated_by','class'=>'form-control', 'placeholder'=>'updated_by']) !!}
                     
                       
                        
                      
                      
                      <div class="form-group">
                        <label>From</label>
                        
                      
                        <input type="date" name="from" id="from" value="<?php echo date("Y-m-d");?>" class="form-control" required autofocus>
                      </div>
                       <div class="form-group">
                        <label>to</label>
                        
                      
                        <input type="date" name="to" id="to" value="<?php echo date("Y-m-d");?>" class="form-control" required autofocus>
                      </div>
                       <div class="form-group">
                        <label>Days</label>
                        
                        {!! Form::text('days', null, ['id' => 'days','class'=>'form-control']) !!}
                      </div>
                      <div class="form-group">
                        <label>Employee Name</label>
                        
                        {!! Form::select('employee_id',$appoint, null, ['id' => 'employee_id','class'=>'form-control']) !!}
                      </div>
                      <div class="form-group">
                        <label>Reason</label>
                        
                        {!! Form::textarea('reason', null, ['id' => 'reason','class'=>'form-control']) !!}
                      </div>
                     
                      <!------->
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
@stop