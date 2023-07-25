@extends('layout.master')
@section('contenido')

    <h1>Detalles del Mecánico</h1>
    <br />
    <h2>ID: {{ $mecanico->id }}</h2>
    <h2>Nombre: {{ $mecanico->nombre }}</h2>
    <h2>Apellido Paterno: {{ $mecanico->apPaterno }}</h2>
    <h2>Apellido Materno: {{ $mecanico->apMaterno }}</h2>
    <h2>Salario: {{ $mecanico->salario }}</h2>
    @endsection