@extends('layout.master')
@section('contenido')
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Lista de Mecánicos</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                <a href="mecanicos/create">Agregar mecanico</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Apellido Paterno</th>
                                            <th>Apellido Materno</th>
                                            <th>Salario</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Apellido Paterno</th>
                                            <th>Apellido Materno</th>
                                            <th>Salario</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($mecanicos as $mecanico)
                                            <tr>
                                                <td>{!! $mecanico->id !!}</td>
                                                <td>{!! $mecanico->nombre !!}</td>
                                                <td>{!! $mecanico->apPaterno !!}</td>
                                                <td>{!! $mecanico->apMaterno !!}</td>
                                                <td>{!! $mecanico->salario !!}</td>
                                                <td>
                                                    <a href="{{ route('mecanicos.show', $mecanico->id) }}">Detalles</a>
                                                    <a href="{{ route('mecanicos.edit', $mecanico->id) }}">Editar</a>

                                                    {!! Form::open(['method'=>'DELETE',
                                                    'url'=>'mecanicos/'.$mecanico->id]) !!}
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
