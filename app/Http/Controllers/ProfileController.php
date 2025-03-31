<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // Mostrar perfil
    public function showProfile()
    {
        return view('ProfileViews.perfildeusuario');
    }


    // Mostrar formulario de edición de perfil
    public function edit($id)
    {
        // Lógica para obtener los datos del perfil y mostrarlos en un formulario
        $user = User::find($id);
        return view('profile.edit', compact('user'));
    }

    // Actualizar perfil
    public function update(Request $request, $id)
    {
        // Validar y actualizar la información del perfil
        $user = User::find($id);
        $user->update($request->all());

        return redirect()->route('profile.show')->with('success', 'Perfil actualizado');
    }
}

