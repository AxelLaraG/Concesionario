<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Mecánicos</title>
</head>

<body>
    <h1>Lista de Mecánicos</h1>
    <a href="{{ route('mecanicos.create') }}">Agregar Mecánico</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Salario</th>
        </tr>
        @foreach ($mecanicos as $mecanico)
            <tr>
                <td>{!! $mecanico->id !!}</td>
                <td>{!! $mecanico->nombre !!}</td>
                <td>{!! $mecanico->apPaterno !!}</td>
                <td>{!! $mecanico->apMaterno !!}</td>
                <td>{!! $mecanico->salario !!}</td>
                <td>
                    <a href="{{ route('mecanicos.show', $mecanico->id) }}">Detalles</a>
                    <a href="{{ route('mecanicos.edit', $mecanico->id) }}">Editar</a>

                    {!! Form::open(['method'=>'DELETE',
                    'url'=>'mecanicos/'.$mecanico->id]) !!}
                    {!! Form::submit('Eliminar') !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
</body>

</html>
