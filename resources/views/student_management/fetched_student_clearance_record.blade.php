@extends('layout.master')
@section('title')
Searched Student Clearance
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
@section('content')
<div class="container">
	<div class="row panel panel-primary add_student_well">
		<div class="panel-heading bg-primary"><h3><i class="glyphicon glyphicon-book"></i>List of Books Issued</h3></div>
		<div class="col-md-12">
			<div class="panel-body">
				<table class="table table-bordered table-striped">
					<thead class="bg-primary">
						<th>Student Name</th>
						<th>Registration No</th>
						<th>Department</th>
						<th>Issued Book</th>
						<th>Accession No</th>
						<th>Book Price</th>
						<th>Fine</th>
					</thead>
					@if ($students->count() > 0)
					
					@foreach($students as $student)
					@foreach($student->books as $book)
					<tr id="book{{$book->pivot->id}}">
						<td>{{$student->student_name}}</td>
						<td id='registration'>{{$student->registration_no}}</td>
						<td>{{$student->department}}</td>
						<td>{{$book->book_title}}</td>
						<td>{{$book->pivot->accession_no}}</td>
						<td>{{$book->cost}}</td>
						<td>{{$book->pivot->fine}}</td>
						<td><button data-toggle='modal' class='getUser' value="{{$book->pivot->id}}" data-id='{{$book->pivot->accession_no}}' id='getUser' ><i class='glyphicon glyphicon-eye-open'>  </i>Pay Fine</button>
						</tr>
						@endforeach
						@endforeach
						@elseif(count($students)==0)
						<div class="alert alert-warning alert-dismissable">'
							<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
							<strong>Warning!</strong> This Student doesn't exist.
						</div>
						@elseif($students->books)
						<div class="alert alert-info alert-dismissable">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
							<strong>Info!</strong> This Student has been cleared.
						</div>
						@endif
						@endsection
						<script>
						$('document').ready(function(){
						
						$(".getUser").on('click', function(e){
						e.preventDefault();
						var access_no = $(this).attr('data-id');
						$('#accession_no').val(access_no); // get id of clicked row
						$('#view-modal').modal('show');
						
						});
						});
						</script>
						<!-- Modal -->
						<div id="view-modal" class="modal fade"  tabindex="-1" aria-labelledby="myModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="myModalLabel">Total Fine Of Book</h4>
									</div>
									<div class="modal-body">
										<form action="update_fine" method="POST" id="dynamic-content" >
										{{csrf_field()}}
										<div class="form-group">
											<div class="input-group input-group-lg col-lg-6">
												<div class="input-group-addon">Book Accession No:</div>
												<input type="text" class="form-control" readonly="true" id="accession_no" name="accession_no">
											</div>
										</div>
										<div class="form-group">
											<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
											<div class="input-group input-group-lg col-lg-6">
												<div class="input-group-addon">Total Fine:</div>
												<input type="text" class="form-control" id="fine" name="fine" placeholder="Fine">
												
											</div>
											
										</div>
										<div class="form-group">
											<button  type="submit" name="submit" class="btn btn-primary">Save changes</button>
										</div>
										</form>
									</div>
									
									
									
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										
										
									</div>
									
								</div>
							</div>
						</div>