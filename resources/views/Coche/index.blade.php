<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coches</title>
</head>

<body>
    <h1>Lista de Coches</h1>
    <a href="Coche/create">Insertar Coche</a>
    <table>
        <tr>
            <th>Matricula</th>
            <th>Modelo</th>
            <th>Marca</th>
            <th>Color</th>
            <th>Precio</th>
        </tr>
        @foreach ($coches as $coch)
            <tr>
                <td>{!! $coch->matricula !!}</td>
                <td>{!! $coch->modelo !!}</td>
                <td>{!! $coch->marca !!}</td>
                <td>{!! $coch->color !!}</td>
                <td>{!! $coch->precio !!}</td>
                <td>
                    <a href="{!! 'Coche/' . $coch->matricula !!}">Detalles</a>
                    <a href="{!! 'Coche/' . $coch->matricula . '/edit' !!}">Editar</a>
                    {!! Form::open(['method' => 'DELETE', 'url' => 'Coche/' . $coch->matricula]) !!}
                    {!! Form::submit('Eliminar') !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
</body>

</html>
