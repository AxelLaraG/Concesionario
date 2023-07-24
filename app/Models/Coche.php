<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coche extends Model
{
    use HasFactory;
    protected $table='Coche';    
    protected $fillable=['color','marca','matricula','modelo','precio','tipo','status']; 
    


}
