<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function showautenticacionForm() {
        // echo "Formulario para el login";
        return view('AuthViews.autenticacion');
    }
    public function autenticacion(Request $request) {
        //echo "Funcionalidad para guardar los datos que provienen  del formulario via post";
        //paso 1 obtener los valores del request
        $correo=$request->correo;
        $contraseña=$request->contraseña;
        try {
            $resUsuario = DB::connection('mysql')
                ->table('usuarios as u')
                ->join('credenciales as c', 'u.id_usuarios', '=', 'c.usuarios_id_usuario') // INNER JOIN con 'credenciales'
                ->join('roles_tipo as r', 'u.roles_tipo_id_rol', '=', 'r.id_rol') // INNER JOIN con 'roles_tipo'
                ->select('u.id_usuarios', 'u.nombre', 'u.a_paterno', 'u.a_materno', 'u.correo_electronico', 'r.rol')
                ->where('u.correo_electronico', '=', $correo)
                ->where('u.roles_tipo_id_rol', '!=', 0)
                ->first();

            //dd($resUsuario);
            if($resUsuario) {
                if ($resUsuario->rol == 0) {
                    return redirect('/autenticacion')
                        ->with('inactivo', 'true')
                        ->with('mensaje', 'El usuario está inactivo.');
                }
                if (Hash::check($contraseña, $resUsuario->contraseña)){
                    session()->put('id', $resUsuario->id_usuarios);
                    session()->put('nombreCompleto', $resUsuario->nombre . ' ' . $resUsuario->a_paterno . ' ' . $resUsuario->a_materno
                    );
                    return redirect('/profile');
                }
                else{
                    return redirect('/autenticacion')
                        ->with('inactivo', 'false')
                        ->with('mensaje', 'Usuario o contraseña incorrecta');
                }
            }
            else{
                return redirect('/autenticacion')
                    ->with('inactivo', 'false')
                    ->with('mensaje', 'Confirma tu correo');
            }
        }
        catch (\Exception $e) {
            dd($e->getMessage());
        }

    }

    public function logout() {
        session()->forget('id');
        session()->forget('nombreCompleto');
        return redirect('/Autenticacion');
    }
}
