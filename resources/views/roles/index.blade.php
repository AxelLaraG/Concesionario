@extends('layout.master')
@section('contenido')

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Lista de Roles</h1>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                <a href="roles/create">Crear Rol</a>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Estado</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Estado</th>
                            <th>Opciones</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($roles as $rol)
                        <tr>
                            <td>{{ $rol->id }}</td>
                            <td>{{ $rol->nombre }}</td>
                            <td>{{ $rol->status }}</td>
                            <td>
                                <a href="{{ route('roles.show', $rol->id) }}">Detalles</a>
                                <a href="{{ route('roles.edit', $rol->id) }}">Editar</a>
                                {!! Form::open(['method'=>'DELETE',
                                'url'=>'roles/'.$rol->id]) !!}
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
