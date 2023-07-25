<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Usuario</title>
</head>
<body>
    <h1>Detalles del Usuario</h1>
    <h2>ID: {{ $usuario->id }}</h2>
    <h2>Nombre: {{ $usuario->nombre }}</h2>
    <h2>Apellido Paterno: {{ $usuario->apPaterno }}</h2>
    <h2>Apellido Materno: {{ $usuario->apMaterno }}</h2>
    <h2>Rol: {{ $usuario->rol->nombre }}</h2>
    <h2>Estado: @if($usuario->status == 1) Activo @else Inactivo @endif</h2>
    <a href="{{ route('usuarios.index') }}">Regresar al Listado de Usuarios</a>
</body>
</html>
