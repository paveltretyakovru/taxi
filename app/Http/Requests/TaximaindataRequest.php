<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class TaximaindataRequest extends Request {

	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
			'title' 		=> 'required' ,
			'phone' 		=> 'required' ,
			'cityprice' 	=> 'required' ,
			'outcityprice'	=> 'required' ,
			'simple' 		=> 'required' , 
			'landing' 		=> 'required' , 
			'min' 			=> 'required' ,
			'contact' 		=> 'required' ,
			'addcontact' 	=> 'required'
		];
	}

}
