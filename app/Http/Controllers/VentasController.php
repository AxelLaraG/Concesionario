<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ventas as Venta;
use App\Models\Coche;
use App\Models\Cliente;
use App\Models\Usuario;

class VentasController extends Controller
{
    public function index()
    {
        $ventas = Venta::where('status', 1)->get();
        return view('ventas.index')->with('ventas', $ventas);
    }

    public function create()
    {
        $coches = Coche::where('status', 1)->get();
        $clientes = Cliente::where('status', 1)->get();
        $usuarios = Usuario::where('status', 1)->get();
        return view('ventas.create')->with('coches', $coches)->with('clientes', $clientes)->with('usuarios', $usuarios);
    }

    public function store(Request $request)
    {
        $venta = new Venta();
        $venta->id_coche = $request->input('id_coche');
        $venta->id_cliente = $request->input('id_cliente');
        $venta->id_usuario = $request->input('id_usuario');
        $venta->total = $request->input('total');
        $venta->status = 1; // Por defecto, al crear una nueva venta, el status será 1 (activo)
        $venta->save();

        return redirect()->route('ventas.index');
    }

    public function show($id)
    {
        $venta = Venta::findOrFail($id);
        return view('ventas.show')->with('venta', $venta);
    }

    public function edit($id)
    {
        $venta = Venta::findOrFail($id);
        $coches = Coche::where('status', 1)->get();
        $clientes = Cliente::where('status', 1)->get();
        $usuarios = Usuario::where('status', 1)->get();
        return view('ventas.edit')->with('venta', $venta)->with('coches', $coches)->with('clientes', $clientes)->with('usuarios', $usuarios);
    }

    public function update(Request $request, $id)
    {
        $venta = Venta::findOrFail($id);
        $venta->id_coche = $request->input('id_coche');
        $venta->id_cliente = $request->input('id_cliente');
        $venta->id_usuario = $request->input('id_usuario');
        $venta->total = $request->input('total');
        $venta->status = $request->input('status');
        $venta->save();

        return redirect()->route('ventas.index');
    }

    public function destroy($id)
    {
        $venta = Venta::findOrFail($id);
        $venta->status = 0; // Al realizar el borrado lógico, se establece el status en 0 (inactivo)
        $venta->save();

        return redirect()->route('ventas.index');
    }
}
