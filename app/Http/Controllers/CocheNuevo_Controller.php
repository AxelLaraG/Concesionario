<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CocheNuevo;
use App\Models\Coche;

class CocheNuevo_Controller extends Controller
{
    public function index()
    {
        $coch = CocheNuevo::where('status', 1)->get();
        return view('Coche.index')->with('coches', $coch);
    }
    public function create()
    {
        return view('Coche.create');
    }
    public function store(Request $request)
    {
        $datos_coche_general = $request->except('unidades','coche','_token');
        $coche_creado = Coche::create($datos_coche_general);
        $datos = $request->except('color', 'marca', 'matricula', 'modelo', 'precio', 'tipo', '_token');
        CocheNuevo::create($datos + ['coche_id' => $coche_creado->id]);
        return redirect('/Coche');
    }
    public function show(string $matricula)
    {
        $coche = CocheNuevo::where('matricula', $matricula)->first();
        return view('Coche.read')->with('coche', $coche);
    }
    public function edit(string $matricula)
    {
        $coch = Coche::where('matricula', $matricula)->first();
        return view('Coche.edit')->with('coche',$coch);
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
        $coche::updateOrCreate(['matricula' => $matricula], ['eliminado' => 1]);
        return redirect('/Coche');
    }
}
