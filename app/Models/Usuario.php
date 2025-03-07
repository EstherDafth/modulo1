<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'Correo';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'Correo',
        'Nombre',
        'contraseña',
        'Periodo',
        'perfil',
        'apt_pat',
        'apt_mat',
        'nombre_usuario'
    ];

    public $timestamps = false;
}

