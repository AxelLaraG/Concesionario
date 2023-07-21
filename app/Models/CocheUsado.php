<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CocheUsado extends Model
{
    use HasFactory;
    protected $table='CocheUsado';
    protected $fillable=['eliminado','kilometraje','matricula'];
}
