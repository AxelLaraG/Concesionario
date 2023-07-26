@extends('layout.master')
@section('contenido')
    <main>
        <h1>Insertar Reparacion</h1>
        {!! Form::open(['url' => '/Reparaciones']) !!}

        {!! Form::label('fecha_reparacion', 'Fecha de reparacion:') !!}
        {!! Form::text('fecha_reparacion', null, ['placegholder' => 'Ingresa fecha de reparacion']) !!}
        <br /><br />

        {!! Form::label('horas', 'Tiempo de reparacion:') !!}
        {!! Form::text('horas', null, ['placegholder' => 'Ingresa tiempo de reparacion (horas)']) !!}

        <br /><br />

        {!! Form::label('descripcion', 'Descripcion de la reparacion:') !!}
        {!! Form::text('descripcion', null, ['placegholder' => 'Ingresa descripcion']) !!}

        <br /><br />

        {!! Form::label('coche_id', 'Coche:') !!}
        {!! Form::select('coche_id', $coches->pluck('matricula', 'id')->all(), null, [
            'placeholder' => 'seleccionar',
        ]) !!}

        <br /><br />

        <!-- ... Otros elementos del cuerpo ... -->
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


        {!! Form::submit('Guardar reparacion') !!}
        {!! Form::close() !!}

    </main>
@endsection
