@extends('layout.master')
@section('contenido')

    <div class="container-fluid px-4">
        <h1>Editar Cliente</h1>
        <form method="POST" action="{{ route('clientes.update', $cliente->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" value="{{ $cliente->nombre }}" class="form-control" required>
            </div>
            <br />

            <div class="form-group">
                <label for="apPaterno">Apellido Paterno:</label>
                <input type="text" name="apPaterno" id="apPaterno" value="{{ $cliente->apPaterno }}" class="form-control" required>
            </div>
            <br />

            <div class="form-group">
                <label for="apMaterno">Apellido Materno:</label>
                <input type="text" name="apMaterno" id="apMaterno" value="{{ $cliente->apMaterno }}" class="form-control" required>
            </div>
            <br />

            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input type="text" name="direccion" id="direccion" value="{{ $cliente->direccion }}" class="form-control" required>
            </div>
            <br />

            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" name="telefono" id="telefono" value="{{ $cliente->telefono }}" class="form-control" required>
            </div>
            <br />

            <div class="form-group">
                <label for="status">Status:</label>
                <select name="status" id="status" class="form-control">
                    <option value="1" {{ $cliente->status == 1 ? 'selected' : '' }}>Activo</option>
                    <option value="0" {{ $cliente->status == 0 ? 'selected' : '' }}>Inactivo</option>
                </select>
            </div>
            <br />

            <button type="submit" class="btn btn-primary">Modificar Cliente</button>
        </form>
    </div>
@endsection
