<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Taxi;
use App\Http\Requests\TaximaindataRequest;

class TaxiController extends Controller {

	public function index()
	{
		$taxis = Taxi::all();

		return view('admin.taxi.index' , compact('taxis'));
	}


	public function create()
	{
		return view('admin.taxi.create');
	}


	public function store(TaximaindataRequest $req){
		$taxi = Taxi::create($req->all());
		return redirect()->route('admin.taxi.index')->with('success' , 'Новое такси успешно добавлено');
	}


	public function show($id)
	{
		//
	}


	public function edit($id)
	{
		//
	}


	public function update($id)
	{
		//
	}

	public function destroy($id)
	{
		$taxi = Taxi::find($id);
		if($taxi){
			$taxi->get();
			$taxi->delete();
			return redirect()->back()->with('success' , 'Такси успешно удалено');
		}else{
			return redirect()->back()->with('error' , 'Такси не найдено в базе данных');
		}
	}

}
