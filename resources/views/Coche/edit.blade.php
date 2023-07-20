<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Pedido</title>
</head>
<body>
    <h1>Editar Pedido</h1>
    {!!Form::open(['method'=>'PATCH','url'=>'pedidos/'.$pedido->id])!!}
    {!!Form::label('cantidad','Cantidad de productos')!!}
    {!! Form::text('cantidad', $pedido->cantidad,['placeholder'=>'Ingrese la cantidad']) !!}
    <br/>
    <br/>
    {!! Form::label('productos_id', 'Producto:') !!}
    {!! Form::select('productos_id', $producto->pluck('nombre','id')->all(), $pedido->productos_id, ['placeholder'=>'Seleccione el producto']) !!}
    <br/>
    <br/>
    {!! Form::label('status', 'Status:') !!}
    {!! Form::select('status', array('1'=>'Activo','0'=>'Baja'), $pedido->status, ['placeholder'=>'Seleccione el Status']) !!}
    <br/>
    <br/>
    {!! Form::submit('Modificar Pedido') !!}
    {!! Form::close() !!}
</body>
</html>