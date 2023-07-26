@extends('layout.master')
@section('contenido')
    <h1>Detalles de la Reparacion</h1>
    <br />
    <h2>Matricula: {!! $reparacion->Coche->matricula !!}</h2>
    <h2>Fecha: {!! $reparacion->fecha_reparacion !!}</h2>
    <h2>Horas: {!! $reparacion->horas !!}</h2>
    <h2>Desc: {!! $reparacion->descripcion !!}</h2>
    <a href="{!! asset('Reparaciones') !!}">Regresar a reparaciones</a>
@endsection
