@extends('layout.master')
@section('contenido')
    <div class="container">
        <h1>Editar Usuario</h1>
        <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="id_rol">Rol:</label>
                <select name="id_rol" id="id_rol" class="form-control">
                    @foreach ($roles as $rol)
                        <option value="{{ $rol->id }}" @if($usuario->id_rol == $rol->id) selected @endif>{{ $rol->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" value="{{ $usuario->nombre }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="apPaterno">Apellido Paterno:</label>
                <input type="text" name="apPaterno" id="apPaterno" value="{{ $usuario->apPaterno }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="apMaterno">Apellido Materno:</label>
                <input type="text" name="apMaterno" id="apMaterno" value="{{ $usuario->apMaterno }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="password">Nueva Contraseña:</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>

            <div class="form-group">
                <label for="status">Estado:</label>
                <select name="status" id="status" class="form-control">
                    <option value="1" @if($usuario->status == 1) selected @endif>Activo</option>
                    <option value="0" @if($usuario->status == 0) selected @endif>Inactivo</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar Usuario</button>
        </form>
    </div>
@endsection
