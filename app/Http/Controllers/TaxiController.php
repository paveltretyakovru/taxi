<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Taxi;
use App\Addinfo;

class TaxiController extends Controller {

	public function index(){
		$taxis 		= Taxi::all()->toArray();
		$data_array = [];
		
		foreach ($taxis as $key => $taxi) {			
			$addinfo = Addinfo::where(['taxi_id' => $taxi['id']])->get();
			
			$data_array[$key] = [
				'taxi-name' 	=> $taxi['title'] ,
				't-phone' 		=> explode("\n",$taxi['phone']) ,
				't-price-inT' 	=> $taxi['cityprice'] ,
				't-price-outT'	=> $taxi['outcityprice'] ,
				't-time'		=> $taxi['simple'] ,
				't-getIn' 		=> $taxi['landing'] ,
				't-min'			=> $taxi['min'] ,
				'info-text' 	=> $taxi['contact'] ,
				'info-number'	=> $taxi['addcontact']
			];

			if($addinfo->count()){
				$data_array[$key]['addinfo'] 		= array();
				foreach($addinfo as $info) {
					$data_array[$key]['addinfo'][] = [
						'title' 		=> $info->title ,
						'description'	=> $info->description ,
						'price'			=> $info->price
					];
				}
			}else{
				$data_array[$key]['addinfo'] = array();
			}
		}

		//dd($data_array);

		$data_json = json_encode($data_array , JSON_UNESCAPED_UNICODE);
		
		return view('main.index' , compact('data_array' , 'data_json'));
	}

}
