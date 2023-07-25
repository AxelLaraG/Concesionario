<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar Mecánico</title>
</head>

<body>
    <h1>Agregar Mecánico</h1>
    <form method="POST" action="{{ route('mecanicos.store') }}">
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

        <label for="salario">Salario:</label>
        <input type="number" name="salario" id="salario" step="0.01" required>
        <br /><br />

        <button type="submit">Guardar Mecánico</button>
    </form>
</body>

</html>
