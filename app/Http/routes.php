<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$router->get('/', 'TaxiController@index');

$router->get('admin', function()
{
	return view('admin.index');
});

Route::group(array('namespace' => 'Admin'), function(){
	Route::resource('admin/taxi', 'TaxiController');
});


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
