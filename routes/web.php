<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function() {    

    Route::group(['prefix' => 'customers'], function() {
        Route::get('/', 'Customer\\CustomerController@index')->name('index');
    });
});

