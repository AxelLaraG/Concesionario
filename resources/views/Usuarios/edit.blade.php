@extends('layout.master')
@section('contenido')

    <h1>Editar Usuario</h1>
    <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="id_rol">Rol:</label>
        <select name="id_rol" id="id_rol">
            @foreach ($roles as $rol)
                <option value="{{ $rol->id }}" @if($usuario->id_rol == $rol->id) selected @endif>{{ $rol->nombre }}</option>
            @endforeach
        </select>
        <br><br>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="{{ $usuario->nombre }}">
        <br><br>
        <label for="apPaterno">Apellido Paterno:</label>
        <input type="text" name="apPaterno" id="apPaterno" value="{{ $usuario->apPaterno }}">
        <br><br>
        <label for="apMaterno">Apellido Materno:</label>
        <input type="text" name="apMaterno" id="apMaterno" value="{{ $usuario->apMaterno }}">
        <br><br>
        <label for="password">Nueva Contraseña:</label>
        <input type="password" name="password" id="password">
        <br><br>
        <label for="status">Estado:</label>
        <select name="status" id="status">
            <option value="1" @if($usuario->status == 1) selected @endif>Activo</option>
            <option value="0" @if($usuario->status == 0) selected @endif>Inactivo</option>
        </select>
        <br><br>
        <button type="submit">Actualizar Usuario</button>
        @endsection