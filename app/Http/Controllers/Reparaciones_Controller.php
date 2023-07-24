<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reparaciones;
use App\Models\Coche;

class Reparaciones_Controller extends Controller
{
    public function index()
    {
        $reparaciones = Reparaciones::where('status', 1)->get();
        return view('Reparaciones.index')->with('reparaciones',$reparaciones);
    }
    public function create()
    {
        $coches = Coche::where('status', 1)->get();
        return view('Reparaciones.create')->with('coches',$coches);
    }
    public function store(Request $request)
    {
        Reparaciones::create($request->all() + ['status' => 1]);
        return redirect('/Reparaciones');
    }
    public function show(string $matricula)
    {
        $coche = Coche::where('matricula', $matricula)->first();
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
        if($coche->tipo == 1){
            CocheNuevo::where('coche_id',$coche->id)->update(['status' => 0]);
        }else{
            CocheUsado::where('coche_id',$coche->id)->update(['status' => 0]);
        }

        $coche::where('matricula',$matricula)->update(['status' => 0]);
        
        return redirect('/Coche');
    }
}
