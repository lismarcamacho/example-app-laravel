<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    ## con invoque se administra una unica ruta
    public function __invoke(){
        return "Bienvenido a la pagina principal";
    }
}