<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class AddinfoRequest extends Request {
	
	public function authorize()
	{
		return true;
	}
	
	public function rules()
	{
		return [
			'title' 		=> 'required' ,
			'price' 		=> 'required' ,
			'description' 	=> 'required' ,
			'taxi_id' 		=> 'required' ,
		];
	}

}
