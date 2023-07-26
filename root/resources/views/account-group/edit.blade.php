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

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            
             
              {!! Form::model($edit, ['method' => 'PATCH', 'action' => ['App\Http\Controllers\AccountGroupController@update', $edit->id], 'class' => 'form-horizontal' ]) !!}
                <div class="card-body">
                   <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Name</label>
                        
                        {!! Form::text('group_name', null, ['id' => 'group_name','class'=>'form-control', 'autofocus' => 'autofocus']) !!}
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
@stop