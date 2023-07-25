<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Rol;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::where('status', 1)->get();
        return view('usuarios.index')->with('usuarios', $usuarios);
    }

    public function create()
    {
        $roles = Rol::all();
        return view('usuarios.create')->with('roles', $roles);
    }

    public function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario->id_rol = $request->input('id_rol');
        $usuario->nombre = $request->input('nombre');
        $usuario->apPaterno = $request->input('apPaterno');
        $usuario->apMaterno = $request->input('apMaterno');
        $usuario->password = bcrypt($request->input('password'));
        $usuario->status = 1; // Por defecto, al crear un nuevo usuario, el status será 1 (activo)
        $usuario->save();

        return redirect()->route('usuarios.index');
    }

    public function show($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('usuarios.show')->with('usuario', $usuario);
    }

    public function edit($id)
    {
        $usuario = Usuario::findOrFail($id);
        $roles = Rol::all();
        return view('usuarios.edit')->with('usuario', $usuario)->with('roles', $roles);
    }

    public function update(Request $request, $id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->id_rol = $request->input('id_rol');
        $usuario->nombre = $request->input('nombre');
        $usuario->apPaterno = $request->input('apPaterno');
        $usuario->apMaterno = $request->input('apMaterno');
        if ($request->filled('password')) {
            $usuario->password = bcrypt($request->input('password'));
        }
        $usuario->status = $request->input('status');
        $usuario->save();

        return redirect()->route('usuarios.index');
    }

    public function destroy($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->status = 0; // Al realizar el borrado lógico, se establece el status en 0 (inactivo)
        $usuario->save();

        return redirect()->route('usuarios.index');
    }
}
