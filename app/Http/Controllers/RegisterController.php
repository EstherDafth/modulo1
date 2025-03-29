<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function create(){
        return view('RegisterViews.registrarusuario');
        //echo "**Formulario** para guardar un usuario, listo para enviar por POST";
    }
}
