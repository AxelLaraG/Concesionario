<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Ventas</title>
</head>

<body>
    <h1>Lista de Ventas</h1>
    <a href="{{ route('ventas.create') }}">Agregar Venta</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Coche</th>
            <th>Cliente</th>
            <th>Usuario</th>
            <th>Total</th>
        </tr>
        @foreach ($ventas as $venta)
            <tr>
                <td>{!! $venta->id !!}</td>
                <td>{!! $venta->coche->modelo !!}</td>
                <td>{!! $venta->cliente->nombre !!}</td>
                <td>{!! $venta->usuario->nombre !!}</td>
                <td>{!! $venta->total !!}</td>
                <td>
                    <a href="{{ route('ventas.show', $venta->id) }}">Detalles</a>
                    <a href="{{ route('ventas.edit', $venta->id) }}">Editar</a>

                    {!! Form::open(['method'=>'DELETE',
                    'url'=>'ventas/'.$venta->id]) !!}
                    {!! Form::submit('Eliminar') !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
</body>

</html>