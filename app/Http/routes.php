<?php

$router->get('/', 'TaxiController@index');

$router->group(['middleware' => 'auth'], function() {
	Route::group(['middleware' => 'admin'], function() {
		Route::group(array('namespace' => 'Admin'), function(){
			Route::resource('admin/taxi', 'TaxiController');
			Route::resource('admin/addinfo', 'AddinfosController' , ['only' => ['store' , 'update' , 'destroy']]);
		});

		Route::get('admin', function()
		{
			return view('admin.index');
		});
	});
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('home' , 'HomeController@index');