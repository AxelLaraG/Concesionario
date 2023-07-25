<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar Venta</title>
</head>

<body>
    <h1>Agregar Venta</h1>
    <form method="POST" action="{{ route('ventas.store') }}">
        @csrf
        <label for="id_coche">Coche:</label>
        <select name="id_coche" id="id_coche" required>
            @foreach ($coches as $coche)
                <option value="{{ $coche->id }}">{{ $coche->modelo }}</option>
            @endforeach
        </select>
        <br /><br />

        <label for="id_cliente">Cliente:</label>
        <select name="id_cliente" id="id_cliente" required>
            @foreach ($clientes as $cliente)
                <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
            @endforeach
        </select>
        <br /><br />

        <label for="id_usuario">Usuario:</label>
        <select name="id_usuario" id="id_usuario" required>
            @foreach ($usuarios as $usuario)
                <option value="{{ $usuario->id }}">{{ $usuario->nombre }}</option>
            @endforeach
        </select>
        <br /><br />

        <label for="total">Total:</label>
        <input type="text" name="total" id="total" required>
        <br /><br />

        <button type="submit">Guardar Venta</button>
    </form>
</body>

</html>
