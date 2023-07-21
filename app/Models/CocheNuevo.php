<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CocheNuevo extends Model
{
    use HasFactory;
    protected $table = "CocheNuevo";
    protected $fillabel=['eliminado','matricula','unidades'];
}
