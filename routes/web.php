<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/cursos', function () {
    return"Bienvenido a la pagina de cursos";
});

Route::get('/cursos/create', function () {
    return"En esta pagina podrás crear un curso";
});

## definicion de la ruta contenido de curso

/*

Route::get('/cursos/{curso}', function ($curso) {
    return"Bienvenido al curso: $curso";
});

*/


Route::get('/cursos/{curso}/{categoria}', function ($curso,$categoria) {
    return"Bienvenido al curso: $curso de la categoria $categoria";
});

## para no escribir dos veces estas rutas el 
## ultimo codigo se puede reeescribir indicando ? (categoria coomo opcional)

## inicializando la variable categoria e 
## indicando que si tiene ul valor me devuelva las dos variables

Route::get('/cursos/{curso}/{categoria?}', function ($curso,$categoria = null) {

    if($categoria){
    return "Bienvenido al curso: $curso de la categoria $categoria";
    }else{
        return "Bienvenido al curso: $curso";
});