<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('products', 'ProductsController@index');
Route::get('products/{id}/edit', 'ProductsController@edit');
Route::post('products/{id}', 'ProductsController@update');


