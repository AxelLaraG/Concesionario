<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rol</title>
</head>

<body>
    <h1>Detalles del Rol</h1>
    <br>
    <h2>ID: {{ $rol->id }}</h2>
    <h2>Nombre: {{ $rol->nombre }}</h2>
    <h2>Estado: {{ $rol->status }}</h2>
    <a href="{{ route('roles.index') }}">Regresar a Roles</a>
</body>

</html>
