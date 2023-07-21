<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coche extends Model
{
    use HasFactory;
    protected $table='Coche';
    protected $fillabel=['color','eliminado','marca','matricula','modelo','precio','tipo']; 
    
    public function CocheNuevo()
    {
        return $this->belongsTo('App\Models\CocheNuevo','matricula','matricula');
    }

    public function CocheUsado()
    {
        return $this->belongsTo('App\Models\CocheUsado','matricula','matricula');
    }
}
