@extends('layout.master')
@section('title')
Search Book
@endsection
<script src="assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script>
	$('document').ready(function() {
		
$('.search').keyup(function(){
		var search=$(this).val();
		if(search == "") {
			$( ".success" ).html("<b>Book information will be listed here...</b>");
		}else {
			$.get( "{{ url('/livesearchBook?book_title=') }}"+search,
			function(data){
				$('.success').html(data);
			});
		}
	});
});
</script>
@section('content')
<div class="container">
     <div class="row panel panel-primary add_student_well">
              <div class="panel-heading bg-primary"><h3><i class="glyphicon glyphicon-search animated flash"></i> Search Book</h3></div>
          	<div class="col-md-12">
               
                <div class="panel-body">
           <div class="col-md-12 well" style="margin-top:5%;">
               <form action="searched_book_table" method="post">
                  <div class="form-group">
                        <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                        <div class="input-group input-group-lg">
                          <div class="input-group-addon">Search</div>
                          <input type="text" class="form-control search" id="exampleInputAmount" name="search" placeholder="Search by name">
                         
                        </div>
                  </div>
                          
                </form>
                <div class="success"></div>
           </div>
       </div>
   </div> 
@endsection