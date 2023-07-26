@extends('layout.master')
@section('contenido')
    <div class="container">
        <main>
            <h1 class="mb-4">Insertar Reparacion</h1>
            {!! Form::open(['url' => '/Reparaciones']) !!}

            <div class="form-group">
                {!! Form::label('fecha_reparacion', 'Fecha de reparación:') !!}
                {!! Form::date('fecha_reparacion', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('horas', 'Tiempo de reparación (horas):') !!}
                {!! Form::text('horas', null, ['class' => 'form-control', 'placeholder' => 'Ingresa tiempo de reparación']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('descripcion', 'Descripción de la reparación:') !!}
                {!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Ingresa descripción']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('coche_id', 'Coche:') !!}
                {!! Form::select('coche_id', $coches->pluck('matricula', 'id')->all(), null, [
                    'class' => 'form-control',
                    'placeholder' => 'Seleccionar',
                ]) !!}
            </div>

            <div class="form-group">
                {!! Form::label('mecanicos', 'Mecánicos Asignados') !!}
                <br>
                {{-- Lista de mecánicos con checkboxes --}}
                @foreach ($mecanicos as $mecanico)
                    <div class="form-check">
                        {!! Form::checkbox('mecanicos[]', $mecanico->id, false, ['class' => 'form-check-input']) !!}
                        {!! Form::label('mecanico-' . $mecanico->id, $mecanico->nombre, ['class' => 'form-check-label']) !!}
                    </div>
                @endforeach
            </div>
            <br>
            {!! Form::submit('Guardar reparación', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </main>
    </div>
@endsection
