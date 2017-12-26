@extends('layout.master')
@section('title')
Student Clearance
@endsection
@section('content')
<div class="container content">
	<div class="row panel panel-primary add_student_well">
		<div class="panel-heading bg-primary"><h3><i class="glyphicon glyphicon-search animated flash"></i>Student Clearance</h3></div>
		<div class="col-md-12">
			
			<div class="panel-body">
				<div class="col-md-12 " style="margin-top:5%;">
					<form action="fetch_student_clearance_record" method="get">
						<div class="form-group">
							<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
							<div class="input-group input-group-lg">
								<div class="input-group-addon">Registration no</div>
								<input type="text" class="form-control search" id="exampleInputAmount" name="registration_no" placeholder="Search by Registration no">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group input-group-lg">
								<input type="submit" class="form-control btn-primary" value="search" name="submit">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="preload">
  <img src="assets/img/ajax_loader.gif"/>
</div>
@endsection