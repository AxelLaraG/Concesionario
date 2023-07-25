<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'nombre',
        'apPaterno',
        'apMaterno',
        'direccion',
        'telefono',
        'status',
    ];

    // Relación con el modelo Rol (un cliente pertenece a un rol)
}
