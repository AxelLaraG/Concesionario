@extends('layout.master')
@section('contenido')
    <div class="container-fluid px-4">
        <h1>Agregar Cliente</h1>
        <form method="POST" action="{{ route('clientes.store') }}">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>
            <br />

            <div class="form-group">
                <label for="apPaterno">Apellido Paterno:</label>
                <input type="text" name="apPaterno" id="apPaterno" class="form-control" required>
            </div>
            <br />

            <div class="form-group">
                <label for="apMaterno">Apellido Materno:</label>
                <input type="text" name="apMaterno" id="apMaterno" class="form-control" required>
            </div>
            <br />

            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input type="text" name="direccion" id="direccion" class="form-control" required>
            </div>
            <br />

            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" name="telefono" id="telefono" class="form-control" required>
            </div>
            <br />

            <button type="submit" class="btn btn-primary">Guardar Cliente</button>
        </form>
    </div>
@endsection
