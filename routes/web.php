<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//home page
Route::get('/','indexController@index');

//Form for registring a student
Route::get('add_student','studentController@form_create');

//data of student form to submit
Route::post('/','studentController@form_store');

//List of all the registered students
Route::get('list-of-students','studentController@list_create');

//search for a student
Route::get('search-student','studentController@search_student');

//searching for student through ajax
Route::get('livesearch','studentController@show_searched_student');

//student clearance form
Route::get('student_clearance','studentController@student_clearance_form');

//student clearnace fetching record
Route::get('fetch_student_clearance_record','studentController@fetch_student_clearance');

//update the fine column
Route::post('update_fine','studentController@updateFine');

//form to register a book
Route::get('add_book_form','bookController@book_form');

//adding book record to database and return to book copy view
Route::post('add-book','bookController@add_book');

//adding book copy to database
Route::post('insert_book_copy','bookController@add_book_copy');

//list of books
Route::get('list_of_book','bookController@list_of_books');

//search book form
Route::get('search_book_form','bookController@search_book_form');

//searched book from database
Route::get('livesearchBook','bookController@searched_book_table');

//Lost book Form
Route::get('student_clearance','studentController@student_clearance_form');

//add subtract Book Quantity
Route::get('add_subtract_bookQuantity','bookController@add_subtract_quantity_form');

//changing book quantity
Route::post('inserting_bookQuantity','bookController@changingBookQuantity');

//subtract quantity of books
Route::get('deleteQuantity','bookController@deleteQuantity');

//issue book form
Route::get('issue_book_form','bookController@issue_book_form');

//Book Issued
Route::post('issue_book','bookController@issue_book');