<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>
</head>
<body>
    <h1>Crear Usuario</h1>
    <form action="{{ route('usuarios.store') }}" method="POST">
        @csrf
        <label for="id_rol">Rol:</label>
        <select name="id_rol" id="id_rol">
            @foreach ($roles as $rol)
                <option value="{{ $rol->id }}">{{ $rol->nombre }}</option>
            @endforeach
        </select>
        <br><br>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">
        <br><br>
        <label for="apPaterno">Apellido Paterno:</label>
        <input type="text" name="apPaterno" id="apPaterno">
        <br><br>
        <label for="apMaterno">Apellido Materno:</label>
        <input type="text" name="apMaterno" id="apMaterno">
        <br><br>
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password">
        <br><br>
        <button type="submit">Guardar Usuario</button>
    </form>
</body>
</html>
