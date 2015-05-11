<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Taxi extends Model {

	protected $table = "taxi";

	protected $fillable = [
		'title' , 'phone' , 'cityprice' , 'outcityprice' , 'simple' , 'landing' , 'min' , 'contact' ,	'addcontact'
	];

}
