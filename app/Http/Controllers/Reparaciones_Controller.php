<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Reparaciones_Controller extends Controller
{
    public function index()
    {
        //$coch = Coche::where('status', 1)->orderBy('precio', 'asc')->get();
        return view('Reparaciones.index');
    }
}
