@extends('layout.master')
@section('contenido')
    <div class="container">
        <h1>Detalles del Usuario</h1>
        <table class="table table-bordered">
            <tr>
                <th>ID:</th>
                <td>{{ $usuario->id }}</td>
            </tr>
            <tr>
                <th>Nombre:</th>
                <td>{{ $usuario->nombre }}</td>
            </tr>
            <tr>
                <th>Apellido Paterno:</th>
                <td>{{ $usuario->apPaterno }}</td>
            </tr>
            <tr>
                <th>Apellido Materno:</th>
                <td>{{ $usuario->apMaterno }}</td>
            </tr>
            <tr>
                <th>Rol:</th>
                <td>{{ $usuario->rol->nombre }}</td>
            </tr>
            <tr>
                <th>Estado:</th>
                <td>@if($usuario->status == 1) Activo @else Inactivo @endif</td>
            </tr>
        </table>
    </div>
    <br>
    <a href="{!! asset('usuarios') !!}" class="boton">Regresar a usuarios</a>


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
