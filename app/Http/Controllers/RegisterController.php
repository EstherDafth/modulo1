<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConfirmarCorreoMailable;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    // Obtener todos los usuarios
    public function create(){
        return view('RegisterViews.registrarusuario');
    }

    public function store(Request $request)
    {
        try {
            // Validación de los datos
            $validatedData = $request->validate([
                'nombre' => 'required|string|max:255',
                'apellidos' => 'required|string|max:255',
                'telefono' => 'nullable|string|max:10',
                'celular' => 'required|string|max:10',
                'curp' => 'required|string|max:18',
                'nombre_usuario' => 'required|string|max:255|unique:usuario,nombre_usuario',
                'correo_electronico' => 'required|email|max:255|unique:usuario,correo_electronico',
                'contrasennia' => 'required|string|min:6|confirmed', // Confirmación de la contraseña
            ]);

            // Asignación de variables
            $nombre = $validatedData['nombre'];
            $apellidos = $validatedData['apellidos'];
            $telefono = $validatedData['telefono'];
            $celular = $validatedData['celular'];
            $curp = $validatedData['curp'];
            $nombre_usuario = $validatedData['nombre_usuario'];
            $correo_electronico = $validatedData['correo_electronico'];
            $contrasennia = Hash::make($validatedData['contrasennia']); // Cifrar la contraseña

            // Crear nuevo usuario
            $usuario = new Usuario();
            $usuario->nombre = $nombre;
            $usuario->apellidos = $apellidos;
            $usuario->telefono = $telefono;
            $usuario->celular = $celular;
            $usuario->curp = $curp;
            $usuario->nombre_usuario = $nombre_usuario;
            $usuario->correo_electronico = $correo_electronico;
            $usuario->contrasennia = $contrasennia;
            $usuario->activo = 1;
            $usuario->id_rol = 1; // Perfil por defecto

            // Guardar en la base de datos
            if ($usuario->save()) {
                return response()->json(['message' => 'Usuario registrado con éxito'], 201);
            } else {
                return response()->json(['error' => 'No se pudo registrar el usuario'], 500);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al registrar el usuario: ' . $e->getMessage()], 500);
        }
    }

    public function ConfirmMail($correo)
    {
        //echo  "saludos $correo";
        DB::connection('mysql')->
        table('usuarios')
            ->where('correo_electronico','=', $correo)
            ->update(['activo' => 1]);


        return view('RegisterViews.mensajecorreoconfirmado',['correo' => $correo]);
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

    public function testConnection()
    {
        dd(DB::connection()->getPdo());
    }
    public function __construct()
    {
        $this->middleware('guest')->except('store');
    }


}

