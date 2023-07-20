<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pedidos</title>
</head>
<body>
    <h1>Detalles del Pedido</h1>
    <br/>
    <h2>Cantidad: {!! $pedido->cantidad !!}</h2>
    <h2>Producto: {!! $pedido->productos->nombre !!}</h2>
    <h2>Status: {!! $pedido->status !!}</h2>
    <a href="{!! asset('pedidos') !!}">Regresar a Pedidos</a>
</body>
</html>