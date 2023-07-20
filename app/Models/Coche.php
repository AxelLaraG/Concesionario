<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coche extends Model
{
    use HasFactory;
    protected $table='Coche';
    protected $fillabel=['color','eliminado','marca','matricula','modelo','precio'];   
}
