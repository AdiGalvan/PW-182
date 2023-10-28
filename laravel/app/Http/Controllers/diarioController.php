<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFormDiario;//se hace la importacion del request usanado la carpeta app dentro de htto de requst que se llama validadorFormDiario

class diarioController extends Controller
{
    public function metodoInicio(){ // definir funcion y su nombre, dentro del parentesis va el parametro
        return view('welcome');

    }

    public function metodoFormulario(){ // definir funcion y su nombre, dentro del parentesis va el parametro
        return view('formulario');

    }

    public function metodoRecuerdos(){ // definir funcion y su nombre, dentro del parentesis va el parametro
        return view('recuerdos');

    }

    public function metodoGuardar(validadorFormDiario $req){ // aqui si necesita un parametro para trabajar, en este caso es request, aqui se dice que necesita una variable de tipo de request, 


        return redirect('/formulario')->with('confirmacion', 'Turecurdo llegó al controlador');



               /*  //Validaciones en el controlador 
        $validated = $req->validate([
            'txtTitulo' => 'required|max:15',//las reglas de valodacion se separan con un absoluto
            'txtRecuerdo' => 'required|min:5',
        ]); */
        










/*         echo"<p>";
             echo $req->path();
             echo " - ";
             echo $req->method();
             echo " - ";
             echo $req->ip();
             echo " - ";
             echo $req->url();
        echo"<p>"; */


    }
}
