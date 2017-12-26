<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Students;
use App\Books;
use App\Admin;
use App\Book_Student;
class indexController extends Controller
{
    //
    public function index(){
    	$students = Students::all();
    	$books = Books::all();
    	$admin = Admin::all()->count();
    	$singleBook = new Books;
    	//$borrowing_info = Book_Student::all();
    	//$borrowing_info = students->get();
        $borrowing_info = DB::table('borrowing_info')->count();
    	return View('index',compact('students','books','admin','borrowing_info'));
    }
}
