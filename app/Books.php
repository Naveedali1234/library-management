<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Books extends Model
{
    protected $primaryKey = 'barcode_id';
	public $incrementing = false;
	public $timestamps = false;
	protected $fillable = [
        'barcode_id','book_title', 'book_author','isbn','quantity'
    ];
    public function students(){
    	return $this->belongsToMany('App\Students','borrowing_info','barcode_id','registration_no')->withPivot('accession_no','date_of_borrowed','fine');
    }
    public function book_copy(){
    	return $this->hasMany('App\book_copy','barcode_id');
    }
}
