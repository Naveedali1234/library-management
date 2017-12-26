@extends('layout.master')
@section('title')
List Of Books
@endsection
@section('content')
 <div class="container content">
     <div class="row panel panel-primary add_student_well">
              <div class="panel-heading bg-primary"><h3><i class="glyphicon glyphicon-book"></i> List of Books</h3></div>
          	<div class="col-md-12">
            <div class="panel-body">
            <!-- label to show the deleted label start-->
           <!-- label to show the deleted label end-->
            
              <table id="example1" class="table table-bordered table-striped">
                <thead class="bg-primary">
                <tr>
                  <th>Book Title</th>
                  <th>Author</th>
                  <th>ISBN</th>
                  <th>Publisher</th>
                  <th>Book Copies</th>
                  <th>Remaining Books</th>
                   <th>Action</th>
                </tr>
                </thead>
                 @if(count($books)>0)
                <tbody>
               
                @foreach($books as $book)
                    <tr>
                  <td>{{$book->book_title}}</td>
                  <td>{{$book->book_author}}</td>
                  <td>{{$book->isbn}}</td>
                  <td>{{$book->place_of_publisher}}</td>
                  <td>{{$book->quantity}}</td>
                  <td>{{$book->remaining_quantity}}</td>
                
                  <td><a rel="tooltip"  title="Edit" href="edit-book.php?edit={{$book->isbn}}"><input type="button" class="btn btn-primary" value="Edit"></a>
                  <!--<a rel="tooltip"  title="Delete" href="list_of_book.php?del=<?php //echo $isbn ?>"><input type="button" class="btn btn-warning" value="Delete"></a>--></td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Book Title</th>
                  <th>Author</th>
                  <th>ISBN</th>
                  <th>Publisher</th>
                  <th>Quantity</th>
                  <th>Remaining Books</th>

                  <th>Action</th>
                </tr>
                </tfoot>
                 @else
                        {{'no user availble'}}
                    		
                  @endif
              </table>
              
                   
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
                
                </div>
             </div>  <!--row --> 
             
     

<div class="preload">
  <img src="img/ajax_loader.gif"/>
</div>
@endsection