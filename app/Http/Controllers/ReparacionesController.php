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
        return view('reparaciones.index')->with('reparaciones', $reparaciones);
    }

    public function create()
    {
        $coches = Coche::where('status', 1)->get();
        $mecanicos = Mecanico::where('status', 1)->get();
        return view('reparaciones.create')->with('coches', $coches)->with('mecanicos', $mecanicos);
    }

    public function store(Request $request)
    {
        $request->validate([
            'coche_id' => 'required|exists:coches,id',
            'fecha_reparacion' => 'required|date',
            'horas' => 'required|integer|min:1',
            'descripcion' => 'required|string',
            'status' => 'required|integer',
        ]);

        Reparacion::create($request->all());

        return redirect()->route('reparaciones.index')->with('success', 'Reparación creada exitosamente.');
    }

    public function show(Reparacion $reparacion)
    {
        return view('reparaciones.show', compact('reparacion'));
    }

    public function edit(Reparacion $reparacion)
    {
        $coches = Coche::where('status', 1)->get();
        $mecanicos = Mecanico::where('status', 1)->get();
        return view('reparaciones.edit', compact('reparacion'))->with('coches', $coches)->with('mecanicos', $mecanicos);
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

        return redirect()->route('reparaciones.index')->with('success', 'Reparación eliminada exitosamente.');
    }
}
