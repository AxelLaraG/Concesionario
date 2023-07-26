@extends('layout.master')
@section('contenido')
    <h1>Detalles de la Reparacion</h1>
    <br>
    <table>
        <tr>
            <th>Matrícula</th>
            <td>{!! $reparacion->Coche->matricula !!}</td>
        </tr>
        <tr>
            <th>Fecha</th>
            <td>{!! $reparacion->fecha_reparacion !!}</td>
        </tr>
        <tr>
            <th>Horas</th>
            <td>{!! $reparacion->horas !!}</td>
        </tr>
        <tr>
            <th>Descripción</th>
            <td>{!! $reparacion->descripcion !!}</td>
        </tr>
    </table>
    <br>
    <h2>Mecánicos Asignados</h2>
    <table>
        <tr>
            <th>Nombre</th>
        </tr>
        @foreach ($reparacion->mecanicos as $mecanico)
            <tr>
                <td>{{ $mecanico->nombre }}</td>
            </tr>
        @endforeach
    </table>
    <br>
    <a href="{!! asset('Reparaciones') !!}" class="boton">Regresar a reparaciones</a>


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

<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }
</style>
