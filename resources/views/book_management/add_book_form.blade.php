@extends('layout.master')
@section('title')
Add Book
@endsection
@section('content')
<div class="container content">
        <div class="row panel panel-primary add_student_well">
        <div class="panel-heading bg-primary"><h4><i class="glyphicon glyphicon-plus"></i> Add Book</h4></div>
          	
            	<form method="post" action="add-book" onSubmit="return confirm('Are you sure to add this Book Record?')">
              {{csrf_field()}}
                <div class="col-md-6" style="margin-top:15px;">
                    <div class="form-group">
                <label>Book Title:</label>

                <div class="input-group input-group-lg">
                  <div class="input-group-addon">
                    <i class="fa fa-book"></i>
                  </div>
                    <input type="text" name="book_title" class="form-control" required>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
               
                 <div class="form-group">
                <label>Book Author:</label>

                <div class="input-group input-group-lg">
                  <div class="input-group-addon">
                    <i class="fa fa-book"></i>
                  </div>
                    <input type="text" name="book_author" required class="form-control">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
               
                 <div class="form-group">
                <label>Place of Publication:</label>

                <div class="input-group input-group-lg">
                  <div class="input-group-addon">
                    <i class="fa fa-laptop"></i>
                  </div>
                    <input type="text" name="place_of_publisher" class="form-control">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
                <div class="form-group">
                <label>Year of Publication:</label>

                <div class="input-group input-group-lg">
                  <div class="input-group-addon">
                    <i class="fa fa-laptop"></i>
                  </div>
                  <input type="text" name="year_of_publication" class="form-control">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
                <div class="form-group">
                <label>Pages:</label>

                <div class="input-group input-group-lg">
                  <div class="input-group-addon">
                    <i class="fa fa-laptop"></i>
                  </div>
                    <input type="text" name="pages" class="form-control">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
                <div class="form-group">
                <label>Size:</label>

                <div class="input-group input-group-lg">
                  <div class="input-group-addon">
                    <i class="fa fa-laptop"></i>
                  </div>
                    <input type="text" name="size" class="form-control">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
              <div class="form-group">
                <label>Binding:</label>

                <div class="input-group input-group-lg">
                  <div class="input-group-addon">
                    <i class="fa fa-laptop"></i>
                  </div>
                    <input type="text" name="binding" class="form-control">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
              <div class="form-group">
                <label>Cost:</label>

                <div class="input-group input-group-lg">
                  <div class="input-group-addon">
                    <i class="fa fa-laptop"></i>
                  </div>
                    <input type="text" name="cost" class="form-control">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
              </div>
              <div class="col-md-6" style="margin-top:15px;">
              <div class="form-group">
                <label>Volume:</label>

                <div class="input-group input-group-lg">
                  <div class="input-group-addon">
                    <i class="fa fa-laptop"></i>
                  </div>
                    <input type="text" name="volume" class="form-control">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
              <div class="form-group">
                <label>Publisher:</label>

                <div class="input-group input-group-lg">
                  <div class="input-group-addon">
                    <i class="fa fa-laptop"></i>
                  </div>
                    <input type="text" name="publisher" class="form-control">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
              <div class="form-group">
                <label>Company:</label>

                <div class="input-group input-group-lg">
                  <div class="input-group-addon">
                    <i class="fa fa-laptop"></i>
                  </div>
                    <input type="text" name="company" class="form-control">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
              <div class="form-group">
                <label>Bill number:</label>

                <div class="input-group input-group-lg">
                  <div class="input-group-addon">
                    <i class="fa fa-laptop"></i>
                  </div>
                    <input type="text" name="bill_no" class="form-control">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
              <div class="form-group">
                <label>ISBN:</label>

                <div class="input-group input-group-lg">
                  <div class="input-group-addon">
                    <i class="fa fa-laptop"></i>
                  </div>
                    <input type="text" name="isbn" class="form-control" required>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
              
              <!-- /.form group -->
              <div class="form-group">
                <label>Quantity:</label>

                <div class="input-group input-group-lg">
                  <div class="input-group-addon">
                    <i class="fa fa-laptop"></i>
                  </div>
                    <input type="text" name="quantity" class="form-control">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
              </div>

              <input type="submit" value="Add Book" name="submit" class="btn btn-primary btn-lg" style="margin-top:100px;"><br>&nbsp
            </form>
           
          </div>
        </div>
        <!-- /.box-body -->
        
        
  
<div class="preload">
  <img src="img/ajax_loader.gif"/>
</div>   

@endsection