@extends('layout.master')
@section('contenido')

    <h1>Listado de Usuarios</h1>
    <a href="{{ route('usuarios.create') }}">Crear Usuario</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Rol</th>
            <th>Acciones</th>
        </tr>
        @foreach ($usuarios as $usuario)
        <tr>
            <td>{{ $usuario->id }}</td>
            <td>{{ $usuario->nombre }}</td>
            <td>{{ $usuario->apPaterno }}</td>
            <td>{{ $usuario->apMaterno }}</td>
            <td>{{ $usuario->rol->nombre }}</td>
            <td>
                <a href="{{ route('usuarios.show', $usuario->id) }}">Detalles</a>
                <a href="{{ route('usuarios.edit', $usuario->id) }}">Editar</a>
                <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    @endsection