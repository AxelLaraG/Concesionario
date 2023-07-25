<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Rol</title>
</head>

<body>
    <h1>Editar Rol</h1>
    <form action="{{ route('roles.update', $rol->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <label for="nombre">Nombre del Rol:</label>
        <input type="text" name="nombre" id="nombre" value="{{ $rol->nombre }}" required>
        <br><br>
        <label for="status">Estado:</label>
        <input type="number" name="status" id="status" value="{{ $rol->status }}" required>
        <br><br>
        <button type="submit">Actualizar Rol</button>
    </form>
</body>

</html>
