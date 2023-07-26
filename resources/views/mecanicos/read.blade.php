@extends('layout.master')
@section('contenido')
    <div class="container">
        <h1 class="mb-4">Detalles del Mecánico</h1>
        <table class="table table-bordered">
            <tr>
                <th>ID:</th>
                <td>{{ $mecanico->id }}</td>
            </tr>
            <tr>
                <th>Nombre:</th>
                <td>{{ $mecanico->nombre }}</td>
            </tr>
            <tr>
                <th>Apellido Paterno:</th>
                <td>{{ $mecanico->apPaterno }}</td>
            </tr>
            <tr>
                <th>Apellido Materno:</th>
                <td>{{ $mecanico->apMaterno }}</td>
            </tr>
            <tr>
                <th>Salario:</th>
                <td>{{ $mecanico->salario }}</td>
            </tr>
        </table>
    </div>

    <a href="{!! asset('mecanicos') !!}" class="boton">Regresar a mecanicos</a>


    <style>
        /* Estilos para los botones */
        .boton {
            display: inline-block;
            padding: 10px 20px;
            background-color: #81af4c;
            color: white;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            border-radius: 4px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .boton:hover {
            background-color: #1d96c2;
        }
    </style>
@endsection
