<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function showProfile()
    {
        if (session()->has('nombreCompleto')) {
            return view('ProfileViews.perfildeusuario');
        } else {
            return redirect('/autenticacion')
                ->with('inactivo', 'false')
                ->with('mensaje', 'Su session ha expirado');
        }
    }

}
