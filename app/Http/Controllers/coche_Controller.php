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
        $datos_coche_general = $request->except('unidades','coche','_token');
        $coche_creado = Coche::create($datos_coche_general);
        $request->request->add(['coche_id' => $coche_creado->id]);
        $datos = $request->except('color', 'marca', 'matricula', 'modelo', 'precio', 'tipo', '_token');
        if($request->get('tipo' == 1)){
            CocheNuevo::create($datos);  
        }else{
            CocheUsado::create($datos);
        } 
        
        return redirect('/Coche');
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
        //cambios de prueba
        $coche = Coche::where('matricula', $matricula)->first();
        if($coche->tipo == 1){
            CocheNuevo::updateOrCreate(['coche_id',$coche->id],['status' => 0]);
        }else{
            CocheUsado::updateOrCreate(['coche_id',$coche->id],['status' => 0]);
        }
        $coche::updateOrCreate(['matricula' => $matricula], ['status' => 0]);
        
        return redirect('/Coche');
    }
}