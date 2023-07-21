<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Coche</title>
</head>

<body>
    <h1>Editar Coche</h1>
    {!! Form::open(['method' => 'PATCH', 'url' => 'Coche/' . $coche->matricula]) !!}
    {!! Form::label('color', 'Color del coche') !!}
    {!! Form::text('color', $coche->color , ['placegholder' => 'Ingresa el color']) !!}
    <br />
    <br />
    {!! Form::label('marca', 'Marca del coche') !!}
    {!! Form::text('marca', $coche->marca, ['placegholder' => 'Ingresa la marca']) !!}
    <br />
    <br />
    {!! Form::label('matricula', 'Matricula del coche') !!}
    {!! Form::text('matricula', $coche->matricula, ['placegholder' => 'Ingresa la Matricula']) !!}
    <br />
    <br />
    {!! Form::label('modelo', 'Modelo del coche') !!}
    {!! Form::text('modelo', $coche->modelo, ['placegholder' => 'Ingresa el modelo']) !!}
    <br />
    <br />
    {!! Form::label('precio', 'Precio del coche') !!}
    {!! Form::text('precio', $coche->precio, ['placegholder' => 'Ingresa el precio']) !!}
    <br />
    <br />
    {!! Form::label('tipo', 'Tipo:') !!}
    {!! Form::select('tipo', ['1' => 'Nuevo', '0' => 'Usado'], $coche->tipo, ['placeholder' => 'Seleccione el Status']) !!}
    <br />
    <br />
    {!! Form::submit('Modificar Coche') !!}
    {!! Form::close() !!}
</body>

</html>
