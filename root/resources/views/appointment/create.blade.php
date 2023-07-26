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
                <h3 class="card-title">Add Appointment</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            
             
              {!! Form::open(['url' => 'appointment', 'method' => 'POST', 'class'=>'form-horizontal', 'files' => 'true', 'enctype' => 'multipart/form-data']) !!}
                <div class="card-body">


                   <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                       
                        
                        {!! Form::hidden('created_by', Auth::User()->id, ['id' => 'created_by','class'=>'form-control', 'placeholder'=>'created_by']) !!}
                     
                       
                        
                      
                      
                      <div class="form-group">
                        <label>Appointment No</label>
                        
                        {!! Form::text('appoint_no', null, ['id' => 'appoint_no','class'=>'form-control']) !!}
                      </div>
                       <div class="form-group">
                        <label>Date</label>
                        
                      
                        <input type="date" name="date" id="date" value="<?php echo date("Y-m-d");?>" class="form-control" required autofocus>
                      </div>
                       <div class="form-group">
                        <label>Designation</label>
                        
                        {!! Form::text('designation', null, ['id' => 'designation','class'=>'form-control']) !!}
                      </div>
                      <div class="form-group">
                        <label>Employee Name</label>
                        
                        {!! Form::text('employee_name', null, ['id' => 'employee_name','class'=>'form-control']) !!}
                      </div>
                      <div class="form-group">
                        <label>Salary</label>
                        
                        {!! Form::text('salary', null, ['id' => 'salary','class'=>'form-control']) !!}
                      </div>
                      <div class="form-group">
                        <label>Status</label>
                        
                        {!! Form::select('status', array('ACTIVE' => 'ACTIVE', 'INACTIVE' => 'INACTIVE'), null, ['id' => 'status','class'=>'form-control']) !!}
                      </div>
                      <div class="form-group">
                        <label>Phone</label>
                        
                        {!! Form::text('phone', null, ['id' => 'phone','class'=>'form-control']) !!}
                      </div>
                      <div class="form-group">
                        <label>Address</label>
                        
                        {!! Form::text('address', null, ['id' => 'address','class'=>'form-control']) !!}
                      </div>
                       <div class="form-group">
                        <label>Image </label>
                        
                        {!! Form::file('image', null, ['id' => 'image','class'=>'form-control']) !!}
                   
                      </div>
                       <div class="form-group">
                        <label>ID Front</label>
                        
                        {!! Form::file('image_f', null, ['id' => 'image_f','class'=>'form-control']) !!}
                   
                      </div>
                       <div class="form-group">
                        <label>ID Back </label>
                        
                        {!! Form::file('image_b', null, ['id' => 'image_b','class'=>'form-control']) !!}
                   
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