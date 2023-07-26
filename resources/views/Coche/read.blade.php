@extends('layout.master')
@section('contenido')
    <div class="container-fluid px-4">
        <h1>Detalles del Coche</h1>
        <br />
        <table class="table table-bordered">
            <tr>
                <th>Matricula:</th>
                <td>{!! $coche->matricula !!}</td>
            </tr>
            <tr>
                <th>Modelo:</th>
                <td>{!! $coche->modelo !!}</td>
            </tr>
            <tr>
                <th>Marca:</th>
                <td>{!! $coche->marca !!}</td>
            </tr>
            <tr>
                <th>Color:</th>
                <td>{!! $coche->color !!}</td>
            </tr>
            <tr>
                <th>Precio:</th>
                <td>{!! $coche->precio !!}</td>
            </tr>
            @if ($coche->tipo == 1)
                <tr>
                    <th>Unidades:</th>
                    <td>{!! $cocheNuevo->unidades !!}</td>
                </tr>
            @else
                <tr>
                    <th>Kilometraje:</th>
                    <td>{!! $cocheUsado->kilometraje !!}</td>
                </tr>
            @endif
        </table>
    </div>
    <br>
    <a href="{!! asset('Coche') !!}" class="boton">Regresar a coches</a>


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

