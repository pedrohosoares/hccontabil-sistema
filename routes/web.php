<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function() {    

    Route::group(['prefix' => 'clientes'], function() {
        Route::get('/index', 'Admin\\ClientesController@index')->name('clientes.index');
        Route::get('/form', 'Admin\\ClientesController@form')->name('clientes.form');
        Route::post('/store', 'Admin\\ClientesController@store')->name('clientes.store');
        Route::get('/show/{id}', 'Admin\\ClientesController@show')->name('clientes.show');
    });
});

