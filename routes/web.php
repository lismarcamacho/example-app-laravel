<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/cursos', function () {
    return"Bienvenido a la pagina de cursos";
});


## definicion de la ruta contenido de curso

Route::get('/cursos/{curso}', function ($curso) {
    return"Bienvenido al curso: $curso";
});