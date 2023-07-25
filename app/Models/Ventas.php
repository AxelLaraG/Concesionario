<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    use HasFactory;

    protected $table = 'ventas'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'id_cliente',
        'id_coche',
        'id_usuario',
        'total',
        'status',
    ];

    // Relación con el modelo Cliente (una venta pertenece a un cliente)
    public function cliente()
    {
        return $this->belongsTo('App\Models\Cliente', 'id_cliente');
    }

    // Relación con el modelo Coche (una venta pertenece a un coche)
    public function coche()
    {
        return $this->belongsTo('App\Models\Coche', 'id_coche');
    }

    // Relación con el modelo Usuario (una venta pertenece a un usuario)
    public function usuario()
    {
        return $this->belongsTo('App\Models\Usuario', 'id_usuario');
    }
}
