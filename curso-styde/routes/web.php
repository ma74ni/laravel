<?php

Route::get('/', function () {
    return 'Inicio';
});
Route::get('/usuario/nuevo', function() {
    return "Crear nuevo usuario";
});
Route::get('/usuario/{id}', function($id) {
    return "Hola usuario: {$id}";
});
Route::get('/saludo/{name}/{nickname?}', function($name, $nickname = null) {
    $name = ucfirst($name);
    if($nickname){
        return "Bienvenido {$name}, tu nickname es: {$nickname}";
    } else {
        return "Bienvenido {$name}";
    }
});