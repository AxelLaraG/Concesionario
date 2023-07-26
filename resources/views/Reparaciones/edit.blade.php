@extends('layout.master')
@section('contenido')
    <div class="container">
        <main>
            <h1 class="mb-4">Insertar Reparacion</h1>
            {!! Form::open(['method' => 'PATCH', 'url' => 'Reparaciones/' . $reparacion->id]) !!}

            <div class="form-group">
                {!! Form::label('fecha_reparacion', 'Fecha de reparación:') !!}
                {!! Form::date('fecha_reparacion', $reparacion->fecha_reparacion, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('horas', 'Tiempo de reparación (horas):') !!}
                {!! Form::text('horas', $reparacion->horas, ['class' => 'form-control', 'placeholder' => 'Ingresa tiempo de reparación']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('descripcion', 'Descripción de la reparación:') !!}
                {!! Form::text('descripcion', $reparacion->descripcion, ['class' => 'form-control', 'placeholder' => 'Ingresa descripción']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('coche_id', 'Coche:') !!}
                {!! Form::select('coche_id', $coches->pluck('matricula', 'id')->all(), $reparacion->coche_id, ['class' => 'form-control', 'placeholder' => 'Seleccionar']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('mecanicos', 'Mecánicos Asignados') !!}
                <br>
                {{-- Lista de mecánicos con checkboxes --}}
                @foreach ($mecanicos as $mecanico)
                    <div class="form-check">
                        {!! Form::checkbox('mecanicos[]', $mecanico->id, in_array($mecanico->id, $reparacion->mecanicos->pluck('id')->all()), ['class' => 'form-check-input']) !!}
                        {!! Form::label('mecanico-' . $mecanico->id, $mecanico->nombre, ['class' => 'form-check-label']) !!}
                    </div>
                @endforeach
            </div>

            {!! Form::submit('Guardar reparación', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </main>
    </div>
@endsection
