<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;
use Session;
use Illuminate\Support\Facades\DB;
class studentController extends Controller
{
    public function form_create(){
    	return view('student_management.add_student_form');
    }
    public function form_store(Request $request){
    	//first validate the input which we had done on client side already
    	$check = Students::find($request->input('reg_no'));

    	if(count($check)>0){
    		Session::flash('message_danger','Student already exist');
    		return back();
    	}
    	else {
    		$student = new Students;
    	$student->registration_no = $request->input('reg_no');
    	$student->student_name =$request->input('student_name') ;
    	$student->father_name = $request->input('father_name');
    	$student->batch =$request->input('batch_no') ;
    	$student->department =$request->input('department') ;
    	$student->password = $request->input('password');
    	$student->mobile_no = $request->input('mobile_no');
    	$student->email = $request->input('email');
    	if($student->save()){
    		Session::flash('message_success','Student Added successfully');
    	}
    	}
    	
    	return back();

    }
    public function list_create(){
        $list = Students::all();
        return view('student_management.student_list',compact('list'));
    }
    public function search_student(){
        return view('student_management.search_student');
    }
    public function show_searched_student(Request $request){
        $search = $request->registration_no;
        $student = Students::where('registration_no','LIKE',"%{$search}%")->get();
        return view('student_management.livesearch',compact('student'));
    }
    public function student_clearance_form(){
        return view('student_management.search_student_clearance');
    }
    public function fetch_student_clearance(Request $request){
        $search = $request->registration_no;
        $students = Students::where('registration_no','=',"$search")->get();
       return view('student_management.fetched_student_clearance_record',compact('students'));
    }
    public function updateFine(Request $request){
       $accession_no = $request->input('accession_no');
       $fine = $request->input('fine');
                $borrowing_info = DB::table('borrowing_info')->where('accession_no', $accession_no)->update(['fine' => $fine]);
           //$borrowing_info[0]->fine;
           //  $borrowing_info[0]->fine = $request->input('fine');
           // $borrowing_info->update();
           // ->update(['fine' => $request->input('fine')]);
            return back();
    }
}
