@extends('layout.master')
@section('contenido')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Lista de ventas</h1>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    <a href="ventas/create">Agregar venta</a>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Coche</th>
                                <th>Cliente</th>
                                <th>Usuario</th>
                                <th>Total</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Coche</th>
                                <th>Cliente</th>
                                <th>Usuario</th>
                                <th>Total</th>
                                <th>Opciones</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($ventas as $venta)
                            <tr>
                                <td>{!! $venta->id !!}</td>
                                <td>{!! $venta->coche->modelo !!}</td>
                                <td>{!! $venta->cliente->nombre !!}</td>
                                <td>{!! $venta->usuario->nombre !!}</td>
                                <td>{!! $venta->total !!}</td>
                                <td>
                                    <a href="{{ route('ventas.show', $venta->id) }}">Detalles</a>
                                    <a href="{{ route('ventas.edit', $venta->id) }}">Editar</a>

                                    {!! Form::open(['method'=>'DELETE',
                                    'url'=>'ventas/'.$venta->id]) !!}
                                    {!! Form::submit('Eliminar') !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    @endsection
