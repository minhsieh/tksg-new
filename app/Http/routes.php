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

Route::get('/', function () {
    return view('home.index');
});

Route::group(['prefix' => 'login'] , function(){
	Route::get('/', ['uses' => 'LoginController@index']);
	Route::post('/', ['uses' => 'LoginController@login']);
});
Route::get('/logout' , ['uses' => 'LoginController@logout']);

Route::group(['prefix' => 'manage' , 'middleware' => 'auth'] , function(){
	Route::get('/' , function(){
		return view('manage.index');
	});

	Route::group(['prefix' => 'user'],function(){
		Route::get('/' , ['uses' => 'Manage\UserController@index']);
	});

	Route::group(['prefix' => 'page'],function(){
		Route::get('edit/{pc_id}' , ['uses' => 'Manage\PageController@edit']);
		Route::post('update' , ['uses' => 'Manage\PageController@update']);
		Route::post('store',['uses' => 'Manage\PageController@store']);
		Route::get('create/{id}',['uses' => 'Manage\PageController@create']);

		Route::get('/{id}' , ['uses' => 'Manage\PageController@index']);
	});
});