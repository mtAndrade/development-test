<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'OrderController@index');

Route::group(array("prefix"=>"product"), function (){
    Route::get('/', 'ProductController@index');

    Route::get('edit/{id}', 'ProductController@edit');
    Route::post('update/{id}', 'ProductController@update');

    Route::get('create', 'ProductController@create');
    Route::post('store', 'ProductController@store');

    Route::get('delete/{id}', 'ProductController@delete');
    Route::get('list', function (){
        return \App\Product::all();
    });
});


