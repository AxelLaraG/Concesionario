<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'id_rol',
        'nombre',
        'apPaterno',
        'apMaterno',
        'usuario',
        'password',
        'status',
    ];

    // Relación con el modelo Rol (un usuario pertenece a un rol)
    public function rol()
    {
        return $this->belongsTo('App\Models\Rol', 'id_rol');
    }
}
