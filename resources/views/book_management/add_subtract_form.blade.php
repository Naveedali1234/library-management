@extends('layout.master')
@section('title')
Add-Subtract Book Quantity
@endsection
@section('content')
<div class="container content">
        <div class="row panel panel-primary add_student_well">
        <div class="panel-heading bg-primary"><h4><i class="glyphicon glyphicon-plus"></i> Add/Subtract Book Quantity</h4></div>
        <form method="post" enctype="multipart/form-data" action="inserting_bookQuantity">
        {{csrf_field()}}
              <div class="col-md-3"></div>
             <div class="col-md-6" style="margin-top:15px;">

             
             <div class="form-group">
               

                <div class="input-group input-group-lg">
                  <div class="input-group-addon">
                    <i class="fa fa-laptop"></i>
                  </div>
                    <input type="text" id="book_isbn" name="barcode" class="form-control" placeholder="Enter Book ISBN">
                </div>

                 
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
              <div class="form-group">
               

                <div class="input-group input-group-lg">
                  <div class="input-group-addon">
                    <i class="fa fa-laptop"></i>
                  </div>
                    <input type="text" id="book_copy" name="quantity" class="form-control" placeholder="Enter Book copies">
                </div>
                 
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
              
              <div class="form-group">
                  <button type="submit" id="addition" value="add"  name="submit"  class="btn btn-primary form-control" style="margin-top:15px;">Add Quantity</button>
                  <button type="submit" id="subtraction" value="subtract" name="submit"  class="btn btn-info form-control" data-toggle="modal" data-target=".bs-example-modal-lg" style="margin-top:15px;">Subtract Quantity</button>
              </div>
             </div>
            
         </form>
        
        </div>
</div>

<div class="preload">
  <img src="img/ajax_loader.gif"/>
</div>   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endsection