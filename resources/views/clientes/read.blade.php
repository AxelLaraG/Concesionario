@extends('layout.master')
@section('contenido')

    <h1>Detalles del Cliente</h1>
    <br />
    <h2>ID: {{ $cliente->id }}</h2>
    <h2>Nombre: {{ $cliente->nombre }}</h2>
    <h2>Apellido Paterno: {{ $cliente->apPaterno }}</h2>
    <h2>Apellido Materno: {{ $cliente->apMaterno }}</h2>
    <h2>Dirección: {{ $cliente->direccion }}</h2>
    <h2>Teléfono: {{ $cliente->telefono }}</h2>
    <h2>Status: {{ $cliente->status === 1 ? 'Activo' : 'Inactivo' }}</h2>
    @endsection