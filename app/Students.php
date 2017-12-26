<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
	protected $primaryKey = 'registration_no';
	public $incrementing = false;
	protected $fillable = [
        'reg_no','student_name', 'email', 'password','father_name','department','mobile_no','batch_no'
    ];
    public function books() {
    	return $this->belongsToMany(Books::class,'borrowing_info','registration_no','barcode_id')->withPivot('accession_no','date_of_borrowed','fine');
    }
}