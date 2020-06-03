<?php

use Illuminate\Support\Facades\Route;

//Ruta para cambiar el lenguaje de la pagina
Route::get('lang/{lang}', function($lang) {
	\Session::put('lang', $lang);
	return \Redirect::back();
})->middleware('web')->name('change_lang');
//App::setlocale('es');

Route::view('/', 'home')->name('home');
Route::view('/quien-soy', 'about')->name('about');
Route::view('/login', 'login')->name('login');

Route::resource('portafolio', 'ProjectController')
	->names('projects')
	->parameters(['portafolio' => 'project']);

/*
Route::get('/portafolio', 'ProjectController@index')->name('projects.index');
Route::get('/portafolio/crear', 'ProjectController@create')->name('projects.create');
Route::post('/portafolio', 'ProjectController@store')->name('projects.store');
Route::get('/portafolio/{project}/editar', 'ProjectController@edit')->name('projects.edit');
Route::patch('/portafolio/{project}', 'ProjectController@update')->name('projects.update');
Route::get('/portafolio/{project}', 'ProjectController@show')->name('projects.show');
Route::delete('/portafolio/{project}', 'ProjectController@destroy')->name('projects.destroy');
*/

Route::view('/contacto', 'contact')->name('contact');
Route::post('contact', 'FormController@store')->name('form.store');

Auth::routes(['register' => false]);