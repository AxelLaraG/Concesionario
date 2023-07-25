<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::where('status', 1)->get();
        return view('clientes.index')->with('clientes', $clientes);
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        $cliente = new Cliente();
        $cliente->nombre = $request->input('nombre');
        $cliente->apPaterno = $request->input('apPaterno');
        $cliente->apMaterno = $request->input('apMaterno');
        $cliente->direccion = $request->input('direccion');
        $cliente->telefono = $request->input('telefono');
        $cliente->status = 1; // Por defecto, al crear un nuevo cliente, el status será 1 (activo)
        $cliente->save();

        return redirect()->route('clientes.index');
    }

    public function show($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.read')->with('cliente', $cliente);
    }

    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.edit')->with('cliente', $cliente);
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->nombre = $request->input('nombre');
        $cliente->apPaterno = $request->input('apPaterno');
        $cliente->apMaterno = $request->input('apMaterno');
        $cliente->direccion = $request->input('direccion');
        $cliente->telefono = $request->input('telefono');
        $cliente->status = $request->input('status');
        $cliente->save();

        return redirect()->route('clientes.index');
    }

    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->status = 0; // Al realizar el borrado lógico, se establece el status en 0 (inactivo)
        $cliente->save();

        return redirect()->route('clientes.index');
    }
}
