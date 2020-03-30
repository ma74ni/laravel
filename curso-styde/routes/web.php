<?php

Route::get('/', function () {
    return 'Inicio';
});
Route::get('/usuarios', function() {
    return "Usuarios";
});
Route::get('/usuarios/nuevo', function() {
    return "Crear nuevo usuario";
});
Route::get('/usuarios/{id}', function($id) {
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