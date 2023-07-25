@extends('layout.master')
@section('contenido')
    <h1>Editar Reparación</h1>
    {!! Form::model($reparacion, ['method' => 'PATCH', 'url' => 'reparaciones/' . $reparacion->id]) !!}
    {!! Form::label('coche_id', 'ID del Coche:') !!}
    {!! Form::select('coche_id', $coches, $reparacion->coche_id, ['placeholder' => 'Selecciona un coche', 'required']) !!}
    <br />
    <br />
    {!! Form::label('fecha_reparacion', 'Fecha de Reparación:') !!}
    {!! Form::date('fecha_reparacion', $reparacion->fecha_reparacion, ['required']) !!}
    <br />
    <br />
    {!! Form::label('horas', 'Horas de Trabajo:') !!}
    {!! Form::number('horas', $reparacion->horas, ['required', 'step' => '0.01']) !!}
    <br />
    <br />
    {!! Form::label('descripcion', 'Descripción:') !!}
    {!! Form::text('descripcion', $reparacion->descripcion, ['required']) !!}
    <br />
    <br />
    {!! Form::label('status', 'Estado de la Reparación:') !!}
    {!! Form::select('status', ['1' => 'Activa', '0' => 'Inactiva'], $reparacion->status) !!}
    <br />
    <br />
    {!! Form::submit('Modificar Reparación') !!}
    {!! Form::close() !!}
@endsection
