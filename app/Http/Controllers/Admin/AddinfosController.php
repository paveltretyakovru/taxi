<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

// my uses
use App\Http\Requests\AddinfoRequest;	// request
use App\Addinfo;						// model

class AddinfosController extends Controller {

	public function store(AddinfoRequest $request){
		Addinfo::create($request->all());
		return redirect()->back()->with('success' , 'Дополнительная информация успешно добавлена');
	}

	public function update($id , AddinfoRequest $request){
		$addinfo = Addinfo::find($id);

		if($addinfo){			
			$addinfo->fill($request->input())->save();
			return redirect()->back()->with('success' , 'Изменения сохранены!');
		}

	}

	public function destroy($id){
		$addinfo = Addinfo::find($id);
		if($addinfo){			
			$addinfo->delete();
			return redirect()->back()->with('success' , 'Дополнительная информация успешно удалена');
		}else{
			return redirect()->back()->with('error' , 'Дополнительная информация не найдена в базе данных');
		}
	}

}
