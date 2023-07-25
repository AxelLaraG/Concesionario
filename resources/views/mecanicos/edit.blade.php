@extends('layout.master')
@section('contenido')

    <h1>Editar Mecánico</h1>
    <form method="POST" action="{{ route('mecanicos.update', $mecanico->id) }}">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="{{ $mecanico->nombre }}" required>
        <br /><br />

        <label for="apPaterno">Apellido Paterno:</label>
        <input type="text" name="apPaterno" id="apPaterno" value="{{ $mecanico->apPaterno }}" required>
        <br /><br />

        <label for="apMaterno">Apellido Materno:</label>
        <input type="text" name="apMaterno" id="apMaterno" value="{{ $mecanico->apMaterno }}" required>
        <br /><br />

        <label for="salario">Salario:</label>
        <input type="number" name="salario" id="salario" step="0.01" value="{{ $mecanico->salario }}" required>
        <br /><br />

        <button type="submit">Modificar Mecánico</button>
    </form>
    @endsection