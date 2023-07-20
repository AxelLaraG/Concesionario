<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Pedido</title>
</head>
<body>
    <h1>Crear Pedido</h1>
    {!! Form::open(['url'=>'/pedidos']) !!}
    {!! Form::label('cantidad', 'Cantidad de productos') !!}
    {!! Form::text('cantidad', null, ['placegholder'=>'Ingresa la cantidad']) !!}
    <br/>
    <br/>
    {!! Form::label('productos_id', 'Producto:') !!}
    {!! Form::select('productos_id', $productos->pluck('nombre','id')->all(), null, ['placeholder'=>'Seleccione el producto']) !!}
    <br/>
    <br/>
    {!! Form::label('status', 'Status:') !!}
    {!! Form::select('status', array('1'=>'Activo','0'=>'Baja'), null, ['placeholder'=>'Seleccione el Status']) !!}
    <br/>
    <br/>
    {!! Form::submit('Guardar Pedido') !!}
    {!! Form::close() !!}
</body>
</html>