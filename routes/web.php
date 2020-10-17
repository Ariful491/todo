<?php



Route::get('/', 'SearchController@index');
Route::post('/search', 'SearchController@search')->name('search');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
