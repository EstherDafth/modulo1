<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showautenticacionForm() {
        return view('AuthViews.autenticacion');
    }

    public function autenticacion(Request $request) {
        // Paso 1: Obtener los valores del request
        $correo = $request->correo;
        $contraseña = $request->contraseña;

        try {
            // Buscar el usuario en la base de datos
            $resUsuario = DB::table('usuario')  // Utiliza la tabla `usuario` directamente
            ->select('id', 'nombre', 'apellidos', 'correo_electronico', 'contrasennia', 'activo') // Selecciona los campos necesarios
            ->where('correo_electronico', '=', $correo)
                ->first();

            // Verifica si el usuario existe
            if ($resUsuario) {
                // Verifica si el usuario está activo
                if ($resUsuario->activo == 0) {
                    return redirect('/autenticacion')
                        ->with('inactivo', 'true')
                        ->with('mensaje', 'El usuario está inactivo.');
                }

                // Verifica la contraseña
                if (Hash::check($contraseña, $resUsuario->contrasennia)) {
                    // Inicia la sesión del usuario
                    session()->put('id', $resUsuario->id);
                    session()->put('nombreCompleto', $resUsuario->nombre . ' ' . $resUsuario->apellidos);
                    return redirect('/profile');  // Redirige al perfil del usuario
                } else {
                    return redirect('/autenticacion')
                        ->with('inactivo', 'false')
                        ->with('mensaje', 'Usuario o contraseña incorrecta');
                }
            } else {
                return redirect('/autenticacion')
                    ->with('inactivo', 'false')
                    ->with('mensaje', 'Confirma tu correo');
            }
        } catch (\Exception $e) {
            dd($e->getMessage());  // Muestra el mensaje de error en caso de excepción
        }
    }

    public function logout() {
        session()->forget('id');
        session()->forget('nombreCompleto');
        return redirect('/autenticacion');  // Redirige a la página de login
    }
}
