<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function showautenticacionForm() {
        // echo "Formulario para el login";
        return view('AuthViews.autenticacion');
    }
}
