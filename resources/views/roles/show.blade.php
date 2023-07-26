@extends('layout.master')
@section('contenido')
    <div class="container">
        <h1>Detalles del Rol</h1>
        <br>
        <table class="table table-bordered">
            <tr>
                <th>ID:</th>
                <td>{{ $rol->id }}</td>
            </tr>
            <tr>
                <th>Nombre:</th>
                <td>{{ $rol->nombre }}</td>
            </tr>
            <tr>
                <th>Estado:</th>
                <td>{{ $rol->status }}</td>
            </tr>
        </table>
    </div>
    <br>
    <a href="{!! asset('roles') !!}" class="boton">Regresar a roles</a>


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
