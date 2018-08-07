<?php

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

// Site
Route::group(['prefix' => '/'], function(){
	Route::get('/cliente/cadastrar', 'ClientsController@cadastrar');
	Route::get('/env', function(){
		var_dump(env('NOME','outro gato'));
	});
});

// Admin
Route::group(['prefix'=> '/admin'], function(){
	Route::get('/cliente/cadastrar', 'ClientsController@cadastrar');
});




/*
Route::get('for-if',function(){
	return view('for-if')
			->with('myArray', ['name1' => 'adriano', 'name2' => 'jose', 'name3' => 'maria' ])
			->with('value', '99');
});

Route::get('/blade', function(){
	$name = 'Adriano';
	return view('test')
			->with('token', '34p9349f390f290r23j')
			->with('test', 'dddd')
			->with('name', 'Adriano');
});

Route::get('/fornecedor/{name}/{id?}', function($name, $id = null){
	return 'Oi -> '.$name. ' id-> '.$id;
});
*/