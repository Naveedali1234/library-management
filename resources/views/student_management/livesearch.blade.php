@if(!empty($student))
<div class="table-responsive">
<table class="table table-bordered">
<thead class="bg-primary">
	<th>Name</th>
	<th>Reg</th>
    <th>batch</th>
    <th>Department</th>
    <th>Book Title</th>
    <th>Accession no</th>
    <th><a href="" class="bg-primary">Edit</a></th>

</thead>
		@foreach($student as $student)
		@foreach($student->books as $book) 	
		<tr>
		<td>{{$student->student_name}}</td>
		<td>{{$student->registration_no}}</td>
		<td>{{$student->batch}}</td>
		<td>{{$student->department}}</td>
		<td>{{$book->book_title}} </td>
		<td>{{$book->pivot->accession_no}} </td>      
		
		</tr>
		@endforeach
        @endforeach

</table>
</div>
@else
{{"no data found"}}
@endif