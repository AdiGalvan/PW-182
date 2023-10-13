<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class diarioController extends Controller
{
    public function metodoInicio(){ // definir funcion y su nombre, dentro del parentesis va el parametro
        return view('welcome');

    }

    public function metodoFormulario(){ // definir funcion y su nombre, dentro del parentesis va el parametro
        return view('formulario');

    }

    public function metodoRecuerdos(){ // definir funcion y su nombre, dentro del parentesis va el parametro
        return view('recurdos');

    }
}
