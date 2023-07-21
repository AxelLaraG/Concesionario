<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coche;

class coche_Controller extends Controller
{
    public function index()
    {
        $coch = Coche::where('eliminado', 0)->orderBy('precio', 'asc')->get();
        return view('Coche.index')->with('coches', $coch);
    }
    public function create()
    {
        return view('Coche.create');
    }
    public function store(Request $request)
    {
        //
    }
    public function show(string $matricula)
    {
        $coche = Coche::where('matricula', $matricula)->first();
        return view('Coche.read')->with('coche', $coche);
    }
    public function edit(string $id)
    {
        //
    }
    public function update(Request $request, string $matricula)
    {
        $datos = $request->all();
        $coche = Coche::where('matricula', $matricula)->first();
        $coche->update($datos);
        return redirect('/Coche');
    }
    public function destroy(string $matricula)
    {
        $coche = Coche::where('matricula', $matricula)->first();
        $coche->update(['eliminado' => 1]);
        return redirect('/Coche');
    }
}