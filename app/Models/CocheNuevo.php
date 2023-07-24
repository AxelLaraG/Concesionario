<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CocheNuevo extends Model
{
    use HasFactory;
    protected $table = "CocheNuevo";
    protected $fillable=['unidades','coche_id','status'];

    public function Coche()
    {
        return $this->belongsTo('App\Models\Coche','coche_id','id');
    }

}
