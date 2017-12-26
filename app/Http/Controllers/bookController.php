<?php

namespace App\Http\Controllers;
use App\Books;
use App\book_copy;
use Illuminate\Http\Request;
use Session;
use App\Students;
class bookController extends Controller
{
    public function book_form(){
    	return view('book_management.add_book_form');
    }
    public function add_book(Request $request){
    	$book = new Books;
        $barcode = $request->input('isbn');
        $quantity = $request->input('quantity');
    	$book->barcode_id = $barcode;
        $book->place_of_publisher = $request->input('place_of_publisher');
    	$book->book_title = $request->input('book_title');
    	$book->book_author = $request->input('book_author');
    	$book->isbn = $request->input('isbn');
    	$book->quantity = $quantity;
        $book->remaining_quantity = $quantity;
    	$book->save();
    	return view('book_management.insert_accession',compact('barcode','quantity'));
    }
    public function add_book_copy(Request $request){
        $quantity = $request->input('quantity');
        $accession_no = $request->input('accession_no');
        $book = Books::find($request->input('barcode'));
        $copies = new book_copy;
        $copies->accession_no = $accession_no;
        $copies->status = 'available';
        $comment = $book->book_copy()->save($copies);
        for($i=1;$i<$quantity;$i++){
        $copies_ = new book_copy;
        $copies_->accession_no = $copies->accession_no+1;
        $copies_->status = 'available';
        $comment = $book->book_copy()->save($copies_);
        $copies->accession_no=$copies->accession_no+1;
    }
        return view('book_management.add_book_form');
    }
    public function list_of_books(){
        $books = Books::all();
        return view('book_management.list_of_books',compact('books'));
    }
    public function search_book_form(){
        return view('book_management.search_book_form');
    }
    public function searched_book_table(Request $request){
        $search = $request->book_title;
        $books = Books::where('book_title','LIKE',"%{$search}%")->get();
        return view('book_management.livesearch',compact('books'));
    }
    public function add_subtract_quantity_form(){
        return view('book_management.add_subtract_form');
    }
    public function changingBookQuantity(Request $request){
        $status = $request->submit;
        $barcode = $request->barcode;
        $quantity = $request->quantity;
        if($status=='add'){
            return view('book_management.insert_accession',compact('barcode','quantity'));
        }
        else if($status=='subtract'){
            return view('book_management.insert_accession_to_subtract',compact('barcode','quantity'));
        }
    }
    public function deleteQuantity(Request $request){
        $quantity = $request->input('quantity');
        $barcode = $request->barcode;
        $accession_no = $request->input('accession_no');
        $check = book_copy::find($accession_no);

        if(!empty($check)){
        $book = Books::find($request->input('barcode'));
        $copies = $book->book_copy()->where('accession_no','=',$accession_no)->delete();

        //$s = book_copy::delete($copies);
        $quantity = $quantity-1;
        if($quantity==0){
            return view('book_management.add_subtract_form');
        }
        else{
        return view('book_management.insert_accession_to_subtract',compact('barcode','quantity'));
    }
    }
    else{
        Session::flash('accession','Invalid Accession No');
        return view('book_management.insert_accession_to_subtract',compact('barcode','quantity'));
    }
    }
    public function issue_book_form(){
        return view('circulation_record.issue_book_form');
    }
    public function issue_book(Request $request){
        $registration_no = $request->registration_no;
        $barcode_id = $request->barcode_id;
        $accession_no = $request->accession_no;
        $student = Students::find($registration_no);
        $check = $student->books()->where('accession_no',$accession_no)->exists();
        if($check){
        $issue = $student->books()->attach($barcode_id,['accession_no'=>$accession_no,'fine'=>0]);
        return view('circulation_record.issue_book_form');
    }
    else{
        Session::flash('notIssued','This Book already issued');
        return view('circulation_record.issue_book_form');
    }
    }
}
