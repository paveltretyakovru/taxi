<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TaxiController extends Controller {

	public function index(){
		return view('main.index');
	}

}
