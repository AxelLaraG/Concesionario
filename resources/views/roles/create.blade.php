@extends('layout.master')
@section('contenido')

    <h1>Crear Rol</h1>
    <form action="{{ route('roles.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre del Rol:</label>
        <input type="text" name="nombre" id="nombre" required>
        <br><br>
        <label for="status">Estado:</label>
        <input type="number" name="status" id="status" required>
        <br><br>
        <button type="submit">Guardar Rol</button>
    </form>
    
    @endsection