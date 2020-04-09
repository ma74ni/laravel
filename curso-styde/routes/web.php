<?php

Route::get('/', function () {
    return 'Inicio';
});
Route::get('/usuarios', 'UserController@index');

Route::get('/usuarios/nuevo', 'UserController@create');
Route::get('/usuario/{id}', 'UserController@show');
Route::get('/saludo/{name}/{nickname?}', 'WelcomeUserController@index');