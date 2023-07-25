<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Clientes</title>
</head>

<body>
    <h1>Lista de Clientes</h1>
    <a href="{{ route('clientes.create') }}">Agregar Cliente</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Dirección</th>
            <th>Teléfono</th>
        </tr>
        @foreach ($clientes as $cliente)
            <tr>
                <td>{!! $cliente->id !!}</td>
                <td>{!! $cliente->nombre !!}</td>
                <td>{!! $cliente->apPaterno !!}</td>
                <td>{!! $cliente->apMaterno !!}</td>
                <td>{!! $cliente->direccion !!}</td>
                <td>{!! $cliente->telefono !!}</td>
                <td>
                    <a href="{{ route('clientes.show', $cliente->id) }}">Detalles</a>
                    <a href="{{ route('clientes.edit', $cliente->id) }}">Editar</a>

                    {!! Form::open(['method'=>'DELETE',
                    'url'=>'clientes/'.$cliente->id]) !!}
                    {!! Form::submit('Eliminar') !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
</body>

</html>
