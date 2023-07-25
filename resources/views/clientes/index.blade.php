@extends('layout.master')
@section('contenido')

    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Lista de Clientes</h1>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    <a href="clientes/create">Agregar Clientes</a>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellido Paterno</th>
                                <th>Apellido Materno</th>
                                <th>Dirección</th>
                                <th>Teléfono</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellido Paterno</th>
                                <th>Apellido Materno</th>
                                <th>Dirección</th>
                                <th>Teléfono</th>
                                <th>Opciones</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($clientes as $cliente)
                            <tr>
                                <td>{!! $cliente->id !!}</td>
                                <td>{!! $cliente->nombre !!}</td>
                                <td>{!! $cliente->apPaterno !!}</td>
                                <td>{!! $cliente->apMaterno !!}</td>
                                <td>{!! $cliente->direccion !!}</td>
                                <td>{!! $cliente->telefono !!}</td>
                                <td>
                                    <a href="{{ route('clientes.show', $cliente->id) }}">Detalles</a>
                                    <a href="{{ route('clientes.edit', $cliente->id) }}">Editar</a>

                                    {!! Form::open(['method'=>'DELETE',
                                    'url'=>'clientes/'.$cliente->id]) !!}
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