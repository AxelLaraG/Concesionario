<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coche</title>
</head>

<body>
    <h1>Detalles del Coche</h1>
    <br />
    <h2>Matricula: {!! $coche->matricula !!}</h2>
    <h2>Modelo: {!! $coche->modelo !!}</h2>
    <h2>Marca: {!! $coche->marca !!}</h2>
    <h2>Color: {!! $coche->color !!}</h2>
    <h2>Precio: {!! $coche->precio !!}</h2>
    @if ($coche->tipo == 1)
        <h2>Unidades: {!! $coche->CocheNuevo->unidades !!}</h2>
    @else
        <h2>Kilometraje: {!! $coche->CocheUsado->kilometraje !!}</h2>
    @endif
    <a href="{!! asset('Coche') !!}">Regresar a Coches</a>
</body>

</html>
