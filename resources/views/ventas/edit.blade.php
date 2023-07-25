<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Venta</title>
</head>

<body>
    <h1>Editar Venta</h1>
    <form method="POST" action="{{ route('ventas.update', $venta->id) }}">
        @csrf
        @method('PUT')
        <label for="id_coche">Coche:</label>
        <select name="id_coche" id="id_coche" required>
            @foreach ($coches as $coche)
                <option value="{{ $coche->id }}" {{ $venta->id_coche == $coche->id ? 'selected' : '' }}>{{ $coche->modelo }}</option>
            @endforeach
        </select>
        <br /><br />

        <label for="id_cliente">Cliente:</label>
        <select name="id_cliente" id="id_cliente" required>
            @foreach ($clientes as $cliente)
                <option value="{{ $cliente->id }}" {{ $venta->id_cliente == $cliente->id ? 'selected' : '' }}>{{ $cliente->nombre }}</option>
            @endforeach
        </select>
        <br /><br />

        <label for="id_usuario">Usuario:</label>
        <select name="id_usuario" id="id_usuario" required>
            @foreach ($usuarios as $usuario)
                <option value="{{ $usuario->id }}" {{ $venta->id_usuario == $usuario->id ? 'selected' : '' }}>{{ $usuario->nombre }}</option>
            @endforeach
        </select>
        <br /><br />

        <label for="total">Total:</label>
        <input type="text" name="total" id="total" value="{{ $venta->total }}" required>
        <br /><br />

        <label for="status">Status:</label>
        <select name="status" id="status">
            <option value="1" {{ $venta->status == 1 ? 'selected' : '' }}>Activo</option>
            <option value="0" {{ $venta->status == 0 ? 'selected' : '' }}>Inactivo</option>
        </select>
        <br /><br />

        <button type="submit">Modificar Venta</button>
    </form>
</body>

</html>
