@extends('layout.master')
@section('contenido')
    <div class="container">
        <h1>Editar Rol</h1>
        <form action="{{ route('roles.update', $rol->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="nombre">Nombre del Rol:</label>
                <input type="text" name="nombre" id="nombre" value="{{ $rol->nombre }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="status">Estado:</label>
                <input type="number" name="status" id="status" value="{{ $rol->status }}" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Rol</button>
        </form>
    </div>
@endsection
