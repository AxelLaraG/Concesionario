<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insertar Coche</title>
</head>

<body>
    <h1>Insertar Coche</h1>
    {!! Form::open(['url' => '/Coche']) !!}
    {!! Form::label('color', 'Color del coche') !!}
    {!! Form::text('color', null, ['placegholder' => 'Ingresa el color']) !!}
    <br />
    <br />
    {!! Form::label('marca', 'Marca del coche') !!}
    {!! Form::text('marca', null, ['placegholder' => 'Ingresa la marca']) !!}
    <br />
    <br />
    {!! Form::label('matricula', 'Matricula del coche') !!}
    {!! Form::text('matricula', null, ['placegholder' => 'Ingresa la Matricula']) !!}
    <br />
    <br />
    {!! Form::label('modelo', 'Modelo del coche') !!}
    {!! Form::text('modelo', null, ['placegholder' => 'Ingresa el modelo']) !!}
    <br />
    <br />
    {!! Form::label('precio', 'Precio del coche') !!}
    {!! Form::text('precio', null, ['placegholder' => 'Ingresa el precio']) !!}
    <br />
    <br />
    {!! Form::label('tipo', 'Tipo:') !!}
    {!! Form::select('tipo', ['1' => 'Nuevo', '0' => 'Usado'], null, ['placeholder' => 'Seleccione el Status']) !!}
    <br />
    <br />
    {!! Form::submit('Guardar Coche') !!}
    {!! Form::close() !!}
</body>

</html>
