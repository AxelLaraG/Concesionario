<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Agrega esto en la sección <head> o al final del <body> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insertar Reparacion</title>
</head>

<body>
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

    {!! Form::submit('Guardar reparacion') !!}
    {!! Form::close() !!}
</body>

</html>
