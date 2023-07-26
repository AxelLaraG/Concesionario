@extends('layout.master')
@section('contenido')
    <div class="container">
        <h1 class="mb-4">Agregar Mecánico</h1>
        <form method="POST" action="{{ route('mecanicos.store') }}">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="apPaterno">Apellido Paterno:</label>
                <input type="text" name="apPaterno" id="apPaterno" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="apMaterno">Apellido Materno:</label>
                <input type="text" name="apMaterno" id="apMaterno" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="salario">Salario:</label>
                <input type="number" name="salario" id="salario" step="0.01" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Mecánico</button>
        </form>
    </div>
    <br>
    
@endsection
