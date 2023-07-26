<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mecanicos extends Model
{
    use HasFactory;

    protected $table = 'mecanicos'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'nombre',
        'apPaterno',
        'apMaterno',
        'salario',
        'status',
    ];

    public function reparaciones()
    {
        return $this->belongsToMany(Reparaciones::class, 'reparaciones_mecanicos', 'id_mecanico', 'id_reparacion')
                    ->withTimestamps();
    }
}
