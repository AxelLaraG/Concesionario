@extends('layout.master')
@section('contenido')

    <h1>Detalles del Usuario</h1>
    <h2>ID: {{ $usuario->id }}</h2>
    <h2>Nombre: {{ $usuario->nombre }}</h2>
    <h2>Apellido Paterno: {{ $usuario->apPaterno }}</h2>
    <h2>Apellido Materno: {{ $usuario->apMaterno }}</h2>
    <h2>Rol: {{ $usuario->rol->nombre }}</h2>
    <h2>Estado: @if($usuario->status == 1) Activo @else Inactivo @endif</h2>
    @endsection