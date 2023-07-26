<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rol;

class RolesController extends Controller
{
    public function index()
    {
        $roles = Rol::where('status',1)->get();
        return view('roles.index')->with('roles', $roles);
    }

    public function create()
    {
        return view('roles.create');
    }

    public function store(Request $request)
    {
        $rol = new Rol();
        $rol->nombre = $request->input('nombre');
        $rol->status = 1; // Por defecto, al crear un nuevo rol, el status será 1 (activo)
        $rol->save();

        return redirect()->route('roles.index');
    }

    public function show($id)
    {
        $rol = Rol::findOrFail($id);
        return view('roles.show')->with('rol', $rol);
    }

    public function edit($id)
    {
        $rol = Rol::findOrFail($id);
        return view('roles.edit')->with('rol', $rol);
    }

    public function update(Request $request, $id)
    {
        $rol = Rol::findOrFail($id);
        $rol->nombre = $request->input('nombre');
        $rol->status = $request->input('status');
        $rol->save();

        return redirect()->route('roles.index');
    }

    public function destroy($id)
    {
        $rol = Rol::findOrFail($id);
        $rol->status = 0; // Al realizar el borrado lógico, se establece el status en 0 (inactivo)
        $rol->save();

        return redirect()->route('roles.index');
    }
}
