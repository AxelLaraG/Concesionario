<?php

namespace App\Http\Controllers;

use App\Models\Mecanicos;
use Illuminate\Http\Request;
use App\Models\Reparaciones;
use App\Models\Coche;
use App\Models\Mecanicos as Mecanico;

class ReparacionesController extends Controller
{
    public function index()
    {
        $reparaciones = Reparaciones::where('status', 1)->get();
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

        $reparacion = Reparaciones::create($request->all() + ['status' => 1]);

        $reparacion_id = $reparacion->id;


        if ($request->has('mecanicos')) {
            foreach ($request->mecanicos as $mecanico_id) {

                $mecanico = Mecanico::find($mecanico_id);

                if ($mecanico) {
                    $mecanico->reparaciones()->attach($reparacion_id, ['status' => 1]);
                }
            }
        }


        return redirect('/Reparaciones')->with('success', 'Reparación creada exitosamente.');
    }

    public function show(string $id)
    {
        $reparacion = Reparaciones::with('mecanicos')->findOrFail($id);
        return view('Reparaciones.read', compact('reparacion'));
    }

    public function edit(string $id)
    {
        $coches = Coche::where('status', 1);
        $reparacion = Reparaciones::with('coche', 'mecanicos')->findOrFail($id);

        $mecanicos = Mecanico::where('status', 1)->get();

        return view('Reparaciones.edit', compact('reparacion', 'mecanicos'))->with('coches', $coches);
    }

    public function update(Request $request, string $id)
    {
        // Recuperar la reparación específica por su ID
        $reparacion = Reparaciones::findOrFail($id);

        // Validar los datos enviados desde el formulario (ajusta esto según tus necesidades)
        $request->validate([
            'fecha_reparacion' => 'required|date',
            'horas' => 'required|numeric',
            'descripcion' => 'required|string',
            'coche_id' => 'required|exists:coches,id',
            'mecanicos' => 'array', // Aquí asumimos que los mecánicos vienen en un array
        ]);

        // Actualizar los datos de la reparación con los valores del formulario
        $reparacion->fecha_reparacion = $request->fecha_reparacion;
        $reparacion->horas = $request->horas;
        $reparacion->descripcion = $request->descripcion;
        $reparacion->coche_id = $request->coche_id;

        // Actualizar la relación de mecánicos para la reparación (si aplica)
        if ($request->has('mecanicos')) {
            $mecanicos = [];
            foreach ($request->mecanicos as $mecanicoId) {
                // Asignar el valor de status deseado para cada mecánico (en este caso, 1).
                $mecanicos[$mecanicoId] = ['status' => 1];
            }
            $reparacion->mecanicos()->sync($mecanicos);
        }

        // Guardar los cambios en la base de datos
        $reparacion->save();


        return redirect()->route('Reparaciones.show', $reparacion->id);
    }

    public function destroy(string $id)
    {
        $reparacion = Reparaciones::find($id);
        $reparacion->update(['status' => 0]);

        return redirect()->route('Reparaciones.index')->with('success', 'Reparación eliminada exitosamente.');
    }
}