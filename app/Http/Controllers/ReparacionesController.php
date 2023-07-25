<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reparaciones as Reparacion;
use App\Models\Coche;
use App\Models\Mecanicos as Mecanico;

class ReparacionesController extends Controller
{
    public function index()
    {
        $reparaciones = Reparacion::where('status', 1)->get();
        return view('Reparaciones.index')->with('reparaciones', $reparaciones);
    }

    public function create()
    {
        $coches = Coche::where('status', 1)->get();
        $mecanicos = Mecanico::where('status', 1)->get();
        return view('Reparaciones.create')->with('coches', $coches)->with('mecanicos', $mecanicos);
    }

    public function store(Request $request)
    {

        Reparacion::create($request->all() + ['status' => 1]);

        return redirect('/Reparaciones')->with('success', 'Reparación creada exitosamente.');
    }

    public function show(Reparacion $reparacion)
    {
        return view('Reparaciones.read', compact('reparacion'));
    }

    public function edit(Reparacion $reparacion)
    {
        $coches = Coche::where('status', 1)->get();
        $mecanicos = Mecanico::where('status', 1)->get();
        return view('Reparaciones.edit', compact('reparacion'))->with('coches', $coches)->with('mecanicos', $mecanicos);
    }

    public function update(Request $request, Reparacion $reparacion)
    {
        $request->validate([
            'coche_id' => 'required|exists:coches,id',
            'fecha_reparacion' => 'required|date',
            'horas' => 'required|integer|min:1',
            'descripcion' => 'required|string',
            'status' => 'required|integer',
        ]);

        $reparacion->update($request->all());

        return redirect()->route('reparaciones.index')->with('success', 'Reparación actualizada exitosamente.');
    }

    public function destroy(Reparacion $reparacion)
    {
        $reparacion->update(['status' => 0]);

        return redirect()->route('Reparaciones.index')->with('success', 'Reparación eliminada exitosamente.');
    }
}
