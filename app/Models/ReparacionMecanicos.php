<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReparacionMecanicos extends Model
{
    use HasFactory;

    protected $table = 'reparaciones_mecanicos'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'id_reparacion',
        'id_mecanico',
        'tiempo',
        'status',
    ];

    // Relación con el modelo Reparacion (una reparación pertenece a muchos mecanicos)
    public function reparacion()
    {
        return $this->belongsTo('App\Models\Reparacion', 'id_reparacion');
    }

    // Relación con el modelo Mecanico (un mecanico puede estar asignado a varias reparaciones)
    public function mecanico()
    {
        return $this->belongsTo('App\Models\Mecanico', 'id_mecanico');
    }
}
