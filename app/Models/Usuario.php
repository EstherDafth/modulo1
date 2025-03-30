<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    // Nombre de la tabla
    protected $table = 'usuarios';

    // Atributos que se pueden asignar masivamente
    protected $fillable = [
        'nombre', 'a_paterno', 'a_materno', 'telefono', 'celular', 'correo_electronico'
    ];

    // Desactivar la protección de claves primarias en caso de que no la uses.
    public $timestamps = false; // Si no usas `created_at` y `updated_at` en la tabla

    // Relación con los roles
    /*public function rol()
    {
        return $this->belongsTo(Rol::class, 'roles_tipo_id_rol');
    }*/
}
