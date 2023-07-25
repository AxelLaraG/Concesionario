@extends('layout.master')
@section('contenido')

    <h1>Lista de Roles</h1>
    <a href="{{ route('roles.create') }}">Crear Rol</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
        @foreach ($roles as $rol)
            <tr>
                <td>{{ $rol->id }}</td>
                <td>{{ $rol->nombre }}</td>
                <td>{{ $rol->status }}</td>
                <td>
                    <a href="{{ route('roles.show', $rol->id) }}">Detalles</a>
                    <a href="{{ route('roles.edit', $rol->id) }}">Editar</a>
                    {!! Form::open(['method'=>'DELETE',
                    'url'=>'roles/'.$rol->id]) !!}
                    {!! Form::submit('Eliminar') !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
    
    @endsection
