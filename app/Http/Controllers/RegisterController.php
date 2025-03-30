<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    // Obtener todos los usuarios
    public function create(){
        return view('RegisterViews.registrarusuario');
    }

    public function store(Request $request)
    {
        $nombre = $request->nombre;
        $correo = $request->correo_electronico;
        $usuario = $request->nombre_usuario;
        $contrasennia = $request->contraseña;
        $contraseniaCifrada = Hash::make($contrasennia);
        $MensajeError = "";

        try {
            DB::connection('mysql')
                ->table('usuarios')
                ->insert([
                    'nombre' => $nombre,
                    'a_paterno' => $request->a_paterno,
                    'a_materno' => $request->a_materno,
                    'telefono' => $request->telefono,
                    'celular' => $request->celular,
                    'correo_electronico' => $correo,
                    'contraseña' => $contraseniaCifrada, // Contraseña cifrada
                    'roles_tipo_id_rol' => $request->roles_tipo_id_rol,
                    'activo' => 0 // Usuario inactivo hasta confirmación
                ]);

            $MensajeError = "Registro exitoso";

            // Enviar correo de confirmación
            Mail::to($correo)
                ->send(new ConfirmarCorreoMailable($nombre, $correo));

            return redirect('/login')
                ->with('sessionInsertado', 'true')
                ->with('mensaje', $MensajeError);

        } catch (\Swift_TransportException $e) {
            return redirect('/register')
                ->with('sessionInsertado', 'false')
                ->with('mensaje', "Error al enviar el correo.");
        } catch (\Exception $e) {
            return redirect('/register')
                ->with('sessionInsertado', 'false')
                ->with('mensaje', "Hubo un error en el servidor.");
        }
    }

    public function ConfirmMail($correo)
    {
        // Activar la cuenta del usuario al confirmar el correo
        DB::connection('mysql')
            ->table('usuarios')
            ->where('correo_electronico', '=', $correo)
            ->update(['activo' => 1]);

        return view('RegisterViews.mensajecorreoconfirmado', ['correo' => $correo]);
    }

    // Actualizar un usuario
    public function update(Request $request, $correo)
    {
        $usuario = Usuario::where('correo_electronico', $correo)->first();

        if (!$usuario) {
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }

        // Actualizar solo los campos que se envíen
        $usuario->update($request->only([
            'nombre', 'contraseña', 'periodo', 'perfil', 'a_paterno', 'a_materno', 'nombre_usuario'
        ]));

        return response()->json(['message' => 'Usuario actualizado correctamente', 'usuario' => $usuario], 200);
    }

    // Eliminar un usuario
    public function destroy($correo)
    {
        $usuario = Usuario::where('correo_electronico', $correo)->first();

        if (!$usuario) {
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }

        $usuario->delete();

        return response()->json(['message' => 'Usuario eliminado correctamente'], 200);
    }
}
