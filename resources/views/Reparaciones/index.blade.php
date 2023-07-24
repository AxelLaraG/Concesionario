<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reparaciones</title>
</head>

<body>
    <h1>Lista de reparaciones</h1>
    <a href="Reparaciones/create">Insertar reparacion</a>
    <table>
        <tr>
            <th>Matricula</th>
            <th>Fecha</th>
            <th>Horas</th>
            <th>Descripcion</th>
        </tr>
        @foreach ($reparaciones as $reparacion)
            <tr>
                <td>{!! $reparacion->Coche->matricula !!}</td>
                <td>{!! $reparacion->fecha_reparacion !!}</td>
                <td>{!! $reparacion->horas !!}</td>
                <td>{!! $reparacion->descripcion !!}</td>
                <td>
                    <a href="{!! 'reparaciones/' . $reparacion->matricula !!}">Detalles</a>
                    <a href="{!! 'reparaciones/' . $reparacion->matricula . '/edit' !!}">Editar</a>
                    {!! Form::open(['method' => 'DELETE', 'url' => 'reparaciones/' . $reparacion->matricula]) !!}
                    {!! Form::submit('Eliminar') !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
</body>

</html>
