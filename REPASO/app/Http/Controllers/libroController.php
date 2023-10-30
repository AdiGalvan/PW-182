<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorRegistro;


class libroController extends Controller
{
    public function metodoPrincipal(){
        return view ('principal');
    }

    public function metodoRegistrar(){
        return view ('registrar_libro');
    }

    public function metodoGuardar(validadorRegistro $req){
        return '¡LIBRO GUARDADO CORRECTAMENTE!';
        
    }

}
