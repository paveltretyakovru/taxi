<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Addinfo extends Model {

	protected $table = "addinfos";

	protected $fillable = [
		'title' , 'price' , 'description' , 'taxi_id'
	];
}
