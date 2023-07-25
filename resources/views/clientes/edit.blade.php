<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Cliente</title>
</head>

<body>
    <h1>Editar Cliente</h1>
    <form method="POST" action="{{ route('clientes.update', $cliente->id) }}">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="{{ $cliente->nombre }}" required>
        <br /><br />

        <label for="apPaterno">Apellido Paterno:</label>
        <input type="text" name="apPaterno" id="apPaterno" value="{{ $cliente->apPaterno }}" required>
        <br /><br />

        <label for="apMaterno">Apellido Materno:</label>
        <input type="text" name="apMaterno" id="apMaterno" value="{{ $cliente->apMaterno }}" required>
        <br /><br />

        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion" id="direccion" value="{{ $cliente->direccion }}" required>
        <br /><br />

        <label for="telefono">Teléfono:</label>
        <input type="text" name="telefono" id="telefono" value="{{ $cliente->telefono }}" required>
        <br /><br />

        <label for="status">Status:</label>
        <select name="status" id="status">
            <option value="1" {{ $cliente->status == 1 ? 'selected' : '' }}>Activo</option>
            <option value="0" {{ $cliente->status == 0 ? 'selected' : '' }}>Inactivo</option>
        </select>
        <br /><br />

        <button type="submit">Modificar Cliente</button>
    </form>
</body>

</html>
