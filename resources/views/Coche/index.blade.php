@extends('layout.master')
@section('contenido')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Lista de coches</h1>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    <a href="Coche/create">Insertar Coche</a>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Matricula</th>
                                <th>Modelo</th>
                                <th>Marca</th>
                                <th>Color</th>
                                <th>Precio</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Matricula</th>
                                <th>Modelo</th>
                                <th>Marca</th>
                                <th>Color</th>
                                <th>Precio</th>
                                <th>Acciones</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($coches as $coch)
                                <tr>
                                    <td>{!! $coch->matricula !!}</td>
                                    <td>{!! $coch->modelo !!}</td>
                                    <td>{!! $coch->marca !!}</td>
                                    <td>{!! $coch->color !!}</td>
                                    <td>{!! $coch->precio !!}</td>
                                    <td>
                                        <a href="{!! 'Coche/' . $coch->matricula !!}">Detalles</a>
                                        <a href="{!! 'Coche/' . $coch->matricula . '/edit' !!}">Editar</a>
                                        {!! Form::open(['method' => 'DELETE', 'url' => 'Coche/' . $coch->matricula]) !!}
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
