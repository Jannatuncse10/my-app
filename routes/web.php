<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/products', 'ProductsController@index')->name('products.index');
    Route::get('/products/{product}', 'ProductsController@show')->name('products.show');
});
