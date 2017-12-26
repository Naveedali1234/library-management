@extends('layout.master')
@section('title')
Issue Book Form
@endsection
@section('content')
 <div class="container content">
 @if(Session::has('notIssued'))
 <div class="alert alert-danger">{{Session::get('notIssued')}}</div>
         @endif
             <div class="row panel panel-primary add_student_well">
                  <div class="panel-heading bg-primary"><h3><i class="glyphicon glyphicon-share-alt"></i> Issue Book</h3></div>
          	
                    <div class="panel-body">
                       <div class="col-lg-12">

                           <form action="issue_book" method="post">
                           {{csrf_field()}}
                               <div class="form-group">
                                    <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                                    <div class="input-group input-group-lg col-lg-6">
                                      <div class="input-group-addon">Student Registration no:</div>
                                      <input type="text" class="form-control search" id="exampleInputAmount" name="registration_no" placeholder="student registration no">
                         
                                    </div>
                               </div>

                                 <div class="form-group">
                                    <div class="input-group input-group-lg col-lg-12">
                                      <div class="input-group-addon">Barcode ID:</div>
                                      <input type="text" class="form-control" id="barcode_id_textBox" autofocus   name="barcode_id" placeholder="Barcode ID">
                                      <span class="input-group-btn" style="width:0px;"></span>
                                      <input type="text" class="form-control " id="book_title_textBox"   name="book_title" placeholder="Book title">

                                    </div>
                               </div>
   
                                <div class="form-group">
                                    <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                                    <div class="input-group input-group-lg col-lg-6">
                                      <div class="input-group-addon">Acession no:</div>
                                      <input type="text" class="form-control " id="exampleInputAmount" name="accession_no" placeholder="accession no">
                         
                                    </div>
                                </div>
                                    <div>
                                    
                                        <input type="submit" value="issue Book" name="submit" class="btn btn-lg btn-primary">
                                    </div>
                                        </form>
 
                        </div><!-- /.col-lg-6 -->

<!--     
                
                       </div> /.col-lg-6 
              -->
	            </div><!-- /.row -->
	    </div>
	    
	</div>

<div class="preload">
  <img src="img/ajax_loader.gif"/>
</div>
@endsection