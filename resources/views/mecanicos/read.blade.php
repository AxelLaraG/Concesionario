<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles del Mecánico</title>
</head>

<body>
    <h1>Detalles del Mecánico</h1>
    <br />
    <h2>ID: {{ $mecanico->id }}</h2>
    <h2>Nombre: {{ $mecanico->nombre }}</h2>
    <h2>Apellido Paterno: {{ $mecanico->apPaterno }}</h2>
    <h2>Apellido Materno: {{ $mecanico->apMaterno }}</h2>
    <h2>Salario: {{ $mecanico->salario }}</h2>
    <br />
    <a href="{{ route('mecanicos.index') }}">Regresar a la lista de Mecánicos</a>
</body>

</html>
