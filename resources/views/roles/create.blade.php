@extends('layout.master')
@section('contenido')
    <div class="container">
        <h1>Crear Rol</h1>
        <form action="{{ route('roles.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre del Rol:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="status">Estado:</label>
                <input type="number" name="status" id="status" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Rol</button>
        </form>
    </div>
@endsection
