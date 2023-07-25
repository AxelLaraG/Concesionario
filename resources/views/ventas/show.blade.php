<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles de la Venta</title>
</head>

<body>
    <h1>Detalles de la Venta</h1>
    <br />
    <h2>ID: {{ $venta->id }}</h2>
    <h2>Coche: {{ $venta->coche->modelo }}</h2>
    <h2>Cliente: {{ $venta->cliente->nombre }}</h2>
    <h2>Usuario: {{ $venta->usuario->nombre }}</h2>
    <h2>Total: {{ $venta->total }}</h2>
    <h2>Status: {{ $venta->status === 1 ? 'Activo' : 'Inactivo' }}</h2>
    <br />
    <a href="{{ route('ventas.index') }}">Regresar a la lista de Ventas</a>
</body>

</html>

