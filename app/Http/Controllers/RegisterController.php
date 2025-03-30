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

    public function register(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|max:20',
            'a_paterno' => 'required|max:20',
            'a_materno' => 'required|max:20',
            'telefono' => 'nullable|max:10',
            'celular' => 'nullable|max:10',
            'correo_electronico' => 'required|email|max:50',
           // 'roles_tipo_id_rol' => 'required|integer',
        ]);

        // Crear el nuevo usuario
        $usuario = new Usuario();
        $usuario->nombre = $request->nombre;
        $usuario->a_paterno = $request->a_paterno;
        $usuario->a_materno = $request->a_materno;
        $usuario->telefono = $request->telefono;
        $usuario->celular = $request->celular;
        $usuario->correo_electronico = $request->correo_electronico;
       // $usuario->roles_tipo_id_rol = $request->roles_tipo_id_rol;
        $usuario->save(); // Guardar el usuario en la base de datos

        // Redirigir o retornar mensaje de éxito
        return redirect()->route('registro')->with('success', 'Usuario registrado correctamente');
    }
}
