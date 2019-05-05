<?php

Route::get( '/' , "MainController@start");
Route::get( '/addstory' , "StoryController@addstory");
Route::post('/savestory', ["uses" => "StoryController@savestory"] );
Route::get( '/showstories/{page}', ["uses" => "StoryController@showstories"] );
