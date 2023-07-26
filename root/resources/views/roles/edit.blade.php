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
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit User</h3>
              </div>
              {!! Form::model($edit, ['method' => 'PATCH', 'action' => ['App\Http\Controllers\RoleController@update', $edit->id], 'class' => 'form-horizontal', 'files' => 'true', 'enctype' => 'multipart/form-data' ]) !!}
                               <input type="hidden" id="biller_id" name="biller_id" value="{{Auth::User()->id}}">
                <div class="card-body">
                   <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Name</label>
                        
                        {!! Form::text('name', null, ['id' => 'name','class'=>'form-control', 'autofocus' => 'autofocus']) !!}
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Email</label>
                        {!! Form::email('email', null, ['id' => 'email','class'=>'form-control']) !!}
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Category</label>
                        
                        {!! Form::select('category_id', $shop, null, ['id' => 'category_id','class'=>'form-control']) !!}
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Phone</label>
                        {!! Form::text('phone', null, ['id' => 'phone','class'=>'form-control']) !!}
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Country</label>
                        {!! Form::text('country', null, ['id' => 'country','class'=>'form-control']) !!}
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>City</label>
                        
                        {!! Form::text('city', null, ['id' => 'city','class'=>'form-control']) !!}
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Gender</label>
                        {!! Form::select('gender', array('Male' => 'Male', 'Female' => 'Female'), null, ['id' => 'gender','class'=>'form-control']) !!}
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Profession</label>
                        
                        {!! Form::text('profession', null, ['id' => 'profession','class'=>'form-control']) !!}
                      </div>
                    </div>
                    <!-- <div class="col-sm-6">
                      <div class="form-group">
                        <label>Password</label>
                        {!! Form::text('password', null, ['id' => 'password','class'=>'form-control']) !!}
                      </div>
                    </div> -->
                  </div>

                  <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Address</label>
                        
                        {!! Form::text('addres', null, ['id' => 'addres','class'=>'form-control']) !!}
                      </div>
                    </div>
                  </div>
                 
                  <div class="form-group">
                    <label>Image</label>
                    {!! Form::file('image', null, ['id' => 'image','class'=>'form-control']) !!}
                    <!-- <input type="file" name="image" id="image" class="form-control"> -->
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