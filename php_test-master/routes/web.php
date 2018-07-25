<?php



Route::get('/Product/list','ProductController@index');
Route::get('/Product/create','ProductController@create');
Route::post('/Product/store','ProductController@store');
Route::get('/Product/edit/{id}','ProductController@edit');
Route::post('/Product/update','ProductController@update');
Route::post('/Product/destroy/{id}','ProductController@destroy');



Route::get('/category/list','CategoryController@index');
Route::get('/category/create','CategoryController@create');
Route::post('/category/store','CategoryController@store');
Route::get('/category/edit/{id}','CategoryController@edit');
Route::post('/category/update','CategoryController@update');
Route::post('/category/destroy/{id}','CategoryController@destroy');



