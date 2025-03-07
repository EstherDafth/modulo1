<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    // obtener
    public function index()
    {
        $usuarios = DB::select("SELECT * FROM usuarios");
        return response()->json($usuarios, 200);
    }

    // crear
    public function store(Request $request)
    {
        $request->validate([
            'Correo' => 'required|email|max:30|unique:usuarios,Correo',
            'Nombre' => 'required|string|max:15',
            'contraseña' => 'required|string|min:8|max:8',
            'Periodo' => 'required|integer',
            'perfil' => 'required|in:administrador,secretario,tesorero,vocal',
            'apt_pat' => 'required|string|max:15',
            'apt_mat' => 'required|string|max:15',
            'nombre_usuario' => 'nullable|string|max:255'
        ]);

        DB::insert("INSERT INTO usuarios (Correo, Nombre, contraseña, Periodo, perfil, apt_pat, apt_mat, nombre_usuario)
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?)", [
            $request->Correo,
            $request->Nombre,
            $request->contraseña,
            $request->Periodo,
            $request->perfil,
            $request->apt_pat,
            $request->apt_mat,
            $request->nombre_usuario
        ]);

        return response()->json(['message' => 'Usuario creado correctamente'], 201);
    }

    // mostrar un usuario por correo
    public function show($correo)
    {
        $usuario = DB::select("SELECT * FROM usuarios WHERE Correo = ?", [$correo]);
        if (empty($usuario)) {
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }
        return response()->json($usuario[0], 200);
    }

    // Actualizar un usuario
    public function update(Request $request, $correo)
    {
        $usuario = DB::select("SELECT * FROM usuarios WHERE Correo = ?", [$correo]);
        if (empty($usuario)) {
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }

        DB::update("UPDATE usuarios SET Nombre = ?, contraseña = ?, Periodo = ?, perfil = ?, apt_pat = ?, apt_mat = ?, nombre_usuario = ? WHERE Correo = ?", [
            $request->Nombre ?? $usuario[0]->Nombre,
            $request->contraseña ?? $usuario[0]->contraseña,
            $request->Periodo ?? $usuario[0]->Periodo,
            $request->perfil ?? $usuario[0]->perfil,
            $request->apt_pat ?? $usuario[0]->apt_pat,
            $request->apt_mat ?? $usuario[0]->apt_mat,
            $request->nombre_usuario ?? $usuario[0]->nombre_usuario,
            $correo
        ]);

        return response()->json(['message' => 'Usuario actualizado correctamente'], 200);
    }

    // Eliminar un usuario
    public function destroy($correo)
    {
        $usuario = DB::select("SELECT * FROM usuarios WHERE Correo = ?", [$correo]);
        if (empty($usuario)) {
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }

        DB::delete("DELETE FROM usuarios WHERE Correo = ?", [$correo]);

        return response()->json(['message' => 'Usuario eliminado correctamente'], 200);
    }
}
