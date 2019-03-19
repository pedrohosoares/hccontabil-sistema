<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function() {    

    Route::group(['prefix' => 'clientes'], function() {
        Route::get('/index', 'Admin\\ClientesController@index')->name('clientes.index');
        Route::get('/form', 'Admin\\ClientesController@formu')->name('clientes.form');
    });
});

