<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

/*
Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', HomeController::class);

Route::get('/cursos', [CursoController::class, 'index']);


Route::get('/cursos/create', [CursoController::class, 'create']);

Route::get('/cursos/{curso}', [CursoController::class, 'show']);

/*

Route::get('/cursos', function () {
    return"Bienvenido a la pagina de cursos";
});*/

/*

Route::get('/cursos/create', function () {
    return"En esta pagina podrás crear un curso";
});

*/

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
    }
});

