@extends('layout.master')
@section('contenido')

    <h1>Editar Rol</h1>
    <form action="{{ route('roles.update', $rol->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <label for="nombre">Nombre del Rol:</label>
        <input type="text" name="nombre" id="nombre" value="{{ $rol->nombre }}" required>
        <br><br>
        <label for="status">Estado:</label>
        <input type="number" name="status" id="status" value="{{ $rol->status }}" required>
        <br><br>
        <button type="submit">Actualizar Rol</button>
    </form>
    @endsection