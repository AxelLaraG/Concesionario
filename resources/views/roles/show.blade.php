@extends('layout.master')
@section('contenido')

    <h1>Detalles del Rol</h1>
    <br>
    <h2>ID: {{ $rol->id }}</h2>
    <h2>Nombre: {{ $rol->nombre }}</h2>
    <h2>Estado: {{ $rol->status }}</h2>
    @endsection