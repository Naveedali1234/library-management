@extends('layout.master')
@section('title')
Insert Accession No
@endsection
@section('content')
    <div class="container">
     <div class="row panel panel-primary add_student_well">
              <div class="panel-heading bg-primary"><h3><i class="glyphicon glyphicon-search animated flash"></i> Entering the Accession Numbers</h3></div>
          	<div class="col-md-12">
               
                <div class="panel-body">
           <div class="col-md-12 well" style="margin-top:5%;">
               <form action="insert_book_copy" method="post">
               {{csrf_field()}}
                  <div class="form-group">
                        <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                        <div class="input-group input-group-lg">
                          <div class="input-group-addon">Accession no</div>
                          <input type="text" class="form-control search" id="exampleInputAmount" name="accession_no" placeholder="Accession no">
                          </div>
                          </div>
                          <div class="form-group">
                       <div class="input-group">
                       <input type="hidden" name="barcode" value='{{$barcode}}'>
                       <input type="hidden" name="quantity" value="{{$quantity}}">
                         <input type="submit" value="Add accession no" name="submit" class="btn btn-primary">
                       </div>
                     </div>       
                </form>
                <div class="success"></div>
           </div>
       </div>
       
   </div>
   @endsection