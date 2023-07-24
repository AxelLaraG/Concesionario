<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Coche;
use App\Models\CocheNuevo;
use App\Models\CocheUsado;

class coche_Controller extends Controller
{
    public function index()
    {
        $coch = Coche::where('status', 1)->orderBy('precio', 'asc')->get();
        return view('Coche.index')->with('coches', $coch);
    }
    public function create()
    {
        return view('Coche.create');
    }
    public function store(Request $request)
    {
        $request->request->add(['status' => 1]);
        $datos_coche_general = $request->except('unidades', 'coche', '_token');
        $coche_creado = Coche::create($datos_coche_general);
        $request->request->add(['coche_id' => $coche_creado->id]);
        $datos = $request->except('color', 'marca', 'matricula', 'modelo', 'precio', 'tipo', '_token');
        if ($request->get('tipo') == 1) {
            CocheNuevo::create($datos);
        } else {
            CocheUsado::create($datos);
        }

        return redirect('/Coche');
    }
    public function show(string $matricula)
    {
        $coch = Coche::where('matricula', $matricula)->first();
        if ($coch->tipo == 1) {
            $cocheVariante = CocheNuevo::where('coche_id', $coch->id)->first();
            return view('Coche.read')->with('coche', $coch)->with('cocheNuevo', $cocheVariante);
        } else {
            $cocheVariante = CocheUsado::where('coche_id', $coch->id)->first();
            return view('Coche.read')->with('coche', $coch)->with('cocheUsado', $cocheVariante);
        }
    }
    public function edit(string $matricula)
    {
        $coch = Coche::where('matricula', $matricula)->first();
        $cocheNuevo = null;
        $cocheUsado = null;

        if ($coch->tipo == 1) {
            $cocheNuevo = CocheNuevo::where('coche_id', $coch->id)->first();
            return view('Coche.edit')->with('coche', $coch)->with('cocheNuevo', $cocheNuevo)->with('cocheUsado', $cocheUsado);
        } else {
            $cocheUsado = CocheUsado::where('coche_id', $coch->id)->first();
            return view('Coche.edit')->with('coche', $coch)->with('cocheUsado', $cocheUsado)->with('cocheNuevo', $cocheNuevo);
        }
    }
    public function update(Request $request, string $matricula)
    {
        $coche = Coche::where('matricula', $matricula)->first();
        $datos_coche_general = $request->except('unidades', 'coche', '_token');
        $coche->update($datos_coche_general);
        $datos = $request->except('color', 'marca', 'matricula', 'modelo', 'precio', 'tipo', '_token');
        if ($request->get('tipo') == 1) {
            //CocheUsado::destroy('');
            CocheNuevo::create($datos + ['coche_id' => $coche->id] + ['status' => 1]);
        } else {
            CocheUsado::create($datos + ['coche_id' => $coche->id] + ['status' => 1]);
        }
        return redirect('/Coche');
    }
    public function destroy(string $matricula)
    {
        $coche = Coche::where('matricula', $matricula)->first();
        if ($coche->tipo == 1) {
            CocheNuevo::where('coche_id', $coche->id)->update(['status' => 0]);
        } else {
            CocheUsado::where('coche_id', $coche->id)->update(['status' => 0]);
        }

        $coche::where('matricula', $matricula)->update(['status' => 0]);

        return redirect('/Coche');
    }
}