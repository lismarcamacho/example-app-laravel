<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    //metodo encargado de mostrar la pag principal index
    public function index(){
        return"Bienvenido a la pagina principal de cursos";

    }

    public function create(){
        
        return "Bienvenido, en esta pagina podrás crear un curso";
    }

    public function show($curso){
        return "Bienvenido al curso: $curso";

    }





}
