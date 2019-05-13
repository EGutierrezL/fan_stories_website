<?php

Route::get( '/' , "MainController@start");
Route::get( '/addstory' , "StoryController@addstory");
Route::post('/savestory', ["uses" => "StoryController@savestory"] );
Route::get( '/showstories/{page}', ["uses" => "StoryController@showstories"] );

Auth::routes();

Route::view('/', 'welcome'); //quan vagi a home retorni la vista welcome
Route::get('/home', 'HomeController@index')->name('home'); //donem nom a la ruta
//opcio2 Route::get( '/home/{nom?}' , function() { return "hola ".$nom })->middleware('auth.basic'); //retornem nom d'usuari

Route::post('statuses', 'StatusesController@store')->name('statuses.store')->middleware('auth');
Route::auth();

Route::get('/contacts', "DashboardController@index")->name('dashboard')->middleware('auth.basic');//enviem metode index per executar
//RESTRINGIR ACCES SIMPLE A ALGUNES PAGINES:
//Route::get( '/' , function() { return view(''); })->middleware('auth.basic');



//ctl + P buscar q fa cada linia