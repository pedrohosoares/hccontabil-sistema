<?php

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();
Route::get('/register', function(){
    return redirect('/home');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function() {    

    Route::group(['prefix' => 'clientes'], function() {
        Route::get('/', 'Admin\\ClientesController@index')->name('clientes.index');
        Route::get('/form', 'Admin\\ClientesController@form')->name('clientes.form');
        Route::post('/store', 'Admin\\ClientesController@store')->name('clientes.store');
        Route::get('/show/{id}', 'Admin\\ClientesController@show')->name('clientes.show');
        Route::get('/edit/{id}', 'Admin\\ClientesController@edit')->name('clientes.edit');
        Route::post('/update', 'Admin\\ClientesController@update')->name('clientes.update');
        Route::get('/delete/{id}', 'Admin\\ClientesController@delete')->name('clientes.delete');
        Route::post('/pesquisar', 'Admin\\ClientesController@search')->name('clientes.pesquisar');
    });
    Route::group(['prefix' => 'usuarios'], function() {
        Route::get('/', 'Admin\\UsersController@index')->name('usuarios.index');
        Route::get('/form', 'Admin\\UsersController@form')->name('usuarios.form');
        Route::post('/store', 'Admin\\UsersController@store')->name('usuarios.store');
        Route::get('/show/{id}', 'Admin\\UsersController@show')->name('usuarios.show');
        Route::get('/edit/{id}', 'Admin\\UsersController@edit')->name('usuarios.edit');
        Route::post('/update', 'Admin\\UsersController@update')->name('usuarios.update');
        Route::get('/delete/{id}', 'Admin\\UsersController@delete')->name('usuarios.delete');
        Route::post('/pesquisar', 'Admin\\UsersController@search')->name('usuarios.pesquisar');
    });

});

