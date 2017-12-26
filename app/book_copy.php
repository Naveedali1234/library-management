<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book_copy extends Model
{
	protected $primaryKey = 'accession_no';
	public $incrementing = false;
	public $timestamps = false;
    public function book(){
    	return $this->belongsTo('App\Books','barcode_id');
    }
}
