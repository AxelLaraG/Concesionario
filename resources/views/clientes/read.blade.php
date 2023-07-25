<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles del Cliente</title>
</head>

<body>
    <h1>Detalles del Cliente</h1>
    <br />
    <h2>ID: {{ $cliente->id }}</h2>
    <h2>Nombre: {{ $cliente->nombre }}</h2>
    <h2>Apellido Paterno: {{ $cliente->apPaterno }}</h2>
    <h2>Apellido Materno: {{ $cliente->apMaterno }}</h2>
    <h2>Dirección: {{ $cliente->direccion }}</h2>
    <h2>Teléfono: {{ $cliente->telefono }}</h2>
    <h2>Status: {{ $cliente->status === 1 ? 'Activo' : 'Inactivo' }}</h2>
    <br />
    <a href="{{ route('clientes.index') }}">Regresar a la lista de Clientes</a>
</body>

</html>
