<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

//1. PRIMERA RUTA

Route::get('/usuarios', function () {
    return 'Usuarios';
});

//2. SEGUNDA RUTA
Route::get('/usuarios/nuevo', function() {
    return 'Crear nuevo Usuario';
});

//3. TERCERA RUTA

Route::get('/usuarios/{id}', function($id){
    return "Mostrando detalle del usuario: {$id}";
})->where ('id', '[0-9]+');

//4. CUARTA RUTA

Route::get('/saludo/{name}/{nickname?}', function($name, $nickname = null){
    if ($nickname){
        return "Bienvenido {$name}, tu apodo es {$nickname}";
    }else{
        return "Bienvenido {$name}, no tienes apodo";
    }
});


