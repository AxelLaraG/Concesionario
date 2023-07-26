@extends('layout.master')
@section('contenido')

    <div class="container-fluid px-4">
        <h1>Detalles del Cliente</h1>
        <br />
        <table class="table table-bordered">
            <tr>
                <th>ID:</th>
                <td>{{ $cliente->id }}</td>
            </tr>
            <tr>
                <th>Nombre:</th>
                <td>{{ $cliente->nombre }}</td>
            </tr>
            <tr>
                <th>Apellido Paterno:</th>
                <td>{{ $cliente->apPaterno }}</td>
            </tr>
            <tr>
                <th>Apellido Materno:</th>
                <td>{{ $cliente->apMaterno }}</td>
            </tr>
            <tr>
                <th>Dirección:</th>
                <td>{{ $cliente->direccion }}</td>
            </tr>
            <tr>
                <th>Teléfono:</th>
                <td>{{ $cliente->telefono }}</td>
            </tr>
            <tr>
                <th>Status:</th>
                <td>{{ $cliente->status === 1 ? 'Activo' : 'Inactivo' }}</td>
            </tr>
        </table>
    </div>
@endsection
