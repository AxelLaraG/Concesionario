<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mecanicos as Mecanico;

class MecanicosController extends Controller
{
    public function index()
    {
        $mecanicos = Mecanico::where('status', 1)->get();
        return view('mecanicos.index')->with('mecanicos', $mecanicos);
    }

    public function create()
    {
        return view('mecanicos.create');
    }

    public function store(Request $request)
    {
        $mecanico = new Mecanico();
        $mecanico->nombre = $request->input('nombre');
        $mecanico->apPaterno = $request->input('apPaterno');
        $mecanico->apMaterno = $request->input('apMaterno');
        $mecanico->salario = $request->input('salario');
        $mecanico->status = 1; // Por defecto, al crear un nuevo mecánico, el status será 1 (activo)
        $mecanico->save();

        return redirect()->route('mecanicos.index');
    }

    public function show($id)
    {
        $mecanico = Mecanico::findOrFail($id);
        return view('mecanicos.read')->with('mecanico', $mecanico);
    }

    public function edit($id)
    {
        $mecanico = Mecanico::findOrFail($id);
        return view('mecanicos.edit')->with('mecanico', $mecanico);
    }

    public function update(Request $request, $id)
    {
        $mecanico = Mecanico::findOrFail($id);
        $mecanico->nombre = $request->input('nombre');
        $mecanico->apPaterno = $request->input('apPaterno');
        $mecanico->apMaterno = $request->input('apMaterno');
        $mecanico->salario = $request->input('salario');
        $mecanico->save();

        return redirect()->route('mecanicos.index');
    }

    public function destroy($id)
    {
        $mecanico = Mecanico::findOrFail($id);
        $mecanico->status = 0; // Al realizar el borrado lógico, se establece el status en 0 (inactivo)
        $mecanico->save();

        return redirect()->route('mecanicos.index');
    }
}
