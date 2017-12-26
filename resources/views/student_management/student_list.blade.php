@extends ('layout.master')
@section('title')
Student List
@endsection
@section('content')
<div class="preload">
	<img src="img/ajax_loader.gif"/>
</div>
<div class="container content">
	<div class="row panel panel-primary add_student_well">
		<div class="panel-heading bg-primary"><h3><i class="glyphicon glyphicon-plus"></i> List of Students</h3></div>
		<div class="col-md-12">
			<div class="panel-body">
				@if(count($list)>0)
				<table id="example1" class="table table-hover table-striped table-bordered">
					<thead class="bg-primary" >
						
						<tr>
							<th>Registration Number</th>
							<th>Name</th>
							<th>Father Name</th>
							<th>Batch</th>
							<th>Department</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($list as $student)
						<tr>
							<td>{{$student->registration_no}}</td>
							<td>{{$student->student_name}}</td>
							<td>{{$student->father_name}}</td>
							<td>{{$student->batch}}</td>
							<td>{{$student->department}}</td>
							<td><a rel="tooltip"  title="Edit" href="edit-student?edit={{$student->registration_no}}"><input type="button" class="btn btn-primary" value="Edit"></a>
							<!--<a rel="tooltip"  title="Delete" href="list_of_student.php?del=<?php //echo $reg_no ?>"><input type="button" class="btn btn-warning" value="Delete"></a> --></td>
						</tr>
						@endforeach
					</tbody>
					<tfoot>
					<tr>
						<th>Registration Number</th>
						<th>Name</th>
						<th>Father Name</th>
						<th>Batch</th>
						<th>Department</th>
						<th>Action</th>
					</tr>
					</tfoot>
				</table>
				@else
				<center><h2><span style="color:red;">{{'no user availble'}}</span> </h2></center>
				@endif
				<!-- /.box -->
			</div>
		</div>
	</div>
</div>
@endsection