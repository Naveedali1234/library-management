@extends('layout.master')
@section('title')
New Student Record
@stop
@section('content')
 @if(Session::has('message_success'))
         <div class="alert alert-success">{{Session::get('message_success')}}</div>
         @endif
          @if(Session::has('message_danger'))
         <div class="alert alert-danger">{{Session::get('message_danger')}}</div>
         @endif
<div class="container content">
  <div class="row panel panel-primary add_student_well">
    <div class="panel-heading bg-primary"><h3><i class="glyphicon glyphicon-plus"></i> Add Student</h3></div>
    <div class="col-md-8">
      <div class="panel-body" >
        <form method="post" action="/" >
        {{ csrf_field() }}
          <div class="form-group">
            <label>Student Name:</label>
            <div class="input-group input-group-lg">
              <div class="input-group-addon">
                <i class="fa fa-user"></i>
              </div>
              <input type="text" name="student_name" class="form-control" required>
              
            </div>
            <!-- /.input group -->
          </div>
          <!-- /.form group -->
          
          <div class="form-group">
            <label>Father Name:</label>
            <div class="input-group input-group-lg">
              <div class="input-group-addon">
                <i class="fa fa-user"></i>
              </div>
              <input type="text" name="father_name" class="form-control" required>
            </div>
            <!-- /.input group -->
          </div>
          <!-- /.form group -->
          
          <div class="form-group">
            <label>Registration Number:</label>
            <div class="input-group input-group-lg">
              <div class="input-group-addon">
                <i class="fa fa-user"></i>
              </div>
              <input type="text" name="reg_no" class="form-control" required>
            </div>
            <!-- /.input group -->
          </div>
          <!-- /.form group -->
          <div class="form-group">
            <label>Batch Number:</label>
            <div class="input-group input-group-lg">
              <div class="input-group-addon">
                <i class="fa fa-user"></i>
              </div>
              <input type="text" name="batch_no" class="form-control"  required>
            </div>
            <!-- /.input group -->
          </div>
          <!-- /.form group -->
          <div class="form-group">
            <label>Department:</label>
            <div class="input-group input-group-lg">
              <div class="input-group-addon">
                <i class="fa fa-list"></i>
              </div>
              <select name="department" class="form-control selectpicker" required>
                <option value="">Select Department</option>
                <option>Department of Computer Software</option>
                <option>Department of Telecommunication</option>
                <option >Department of Electrical Engineering Power</option>
                <option >Department of Electrical Engineering Communication</option>
              </select>
            </div>
            <!-- /.input group -->
          </div>
          
          <!-- /.form group -->
          
          <div class="form-group">
            <label>Mobile Number:</label>
            <div class="input-group input-group-lg ">
              <div class="input-group-addon">
                <i class="fa fa-mobile"></i>
              </div>
              <input type="text" name="mobile_no" class="form-control" required>
            </div>
            <!-- /.input group -->
          </div>
          
          <div class="form-group">
            <label>Email:</label>
            <div class="input-group input-group-lg ">
              <div class="input-group-addon">
                <i class="fa fa-address-book"></i>
              </div>
              <input type="email" name="email" class="form-control" required>
            </div>
            <!-- /.input group -->
          </div>
          
          <div class="form-group">
            <label>Password:</label>
            <div class="input-group input-group-lg">
              <div class="input-group-addon">
                <i class="fa fa-lock"></i>
              </div>
              <input type="password" name="password" class="form-control" required>
            </div>
            <!-- /.input group -->
          </div>
          <!-- /.form group -->
          <!-- <div class="form-group">
            <label>Upload Image:</label>
            <div class="input-group input-group-lg">
              <div class="input-group-addon">
                <i class="fa fa-image"></i>
              </div>
              <input type="file" name="image" class="form-control"  required>
            </div>
           
          </div> -->
          <!-- /.form group -->
          <input type="submit" value="Add student" name="submit" class="btn btn-primary">
        </form>
      </div>
    </div>
  </div>
</div>
<!-- code for gif -->
<div class="preload">
  <img src="assets/img/ajax_loader.gif"/>
</div>
@stop
