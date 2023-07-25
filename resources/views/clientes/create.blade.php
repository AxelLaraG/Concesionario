<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar Cliente</title>
</head>

<body>
    <h1>Agregar Cliente</h1>
    <form method="POST" action="{{ route('clientes.store') }}">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        <br /><br />

        <label for="apPaterno">Apellido Paterno:</label>
        <input type="text" name="apPaterno" id="apPaterno" required>
        <br /><br />

        <label for="apMaterno">Apellido Materno:</label>
        <input type="text" name="apMaterno" id="apMaterno" required>
        <br /><br />

        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion" id="direccion" required>
        <br /><br />

        <label for="telefono">Teléfono:</label>
        <input type="text" name="telefono" id="telefono" required>
        <br /><br />

        <button type="submit">Guardar Cliente</button>
    </form>
</body>

</html>
