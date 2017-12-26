@if(!empty($books))
<table class="table table-bordered">
<thead class="bg-primary">
	<th>Book title</th>
	<th>Book Author</th>
    <th>ISBN</th>
    <th>Accession No</th>
    <th>Status</th>
    <th>Action</th>

</thead>
		@foreach($books as $book)
		@foreach($book->book_copy as $book_copy)
		<tr>
		<td>{{$book->book_title}}</td>
		<td>{{$book->book_author}}</td>
		<td>{{$book->isbn}}</td>
		<td>{{$book_copy->accession_no}}</td>
		<td>{{$book_copy->status}}</td>
		<td><a  title="Edit" href="edit-book.php?edit={{$book->isbn}}"><input type="button" class="btn btn-primary" value="Edit"></a>
            <a  title="Delete" href="list_of_book.php?del={{$book_copy->accession_no}}"><input type="button" class="btn btn-warning" value="Delete"></a></td>
		</tr>
		@endforeach
		@endforeach
		
@else
{{"no data found"}}
@endif
</table>