<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reparaciones extends Model
{
    use HasFactory;
    protected $table='Reparaciones';
    protected $fillable=['coche_id','fecha_reparacion','horas','descripcion','status']; 
    
    public function Coche()
    {
        return $this->belongsTo('App\Models\Coche','coche_id','id');
    }
}
