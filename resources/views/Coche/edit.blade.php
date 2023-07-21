<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Coche</title>
</head>

<body>
    <h1>Editar Coche</h1>
    {!! Form::open(['method' => 'PATCH', 'url' => 'Coche/' . $coche->matricula]) !!}
    {!! Form::label('color', 'Color del coche') !!}
    {!! Form::text('color', $coche->color, ['placegholder' => 'Ingresa el color']) !!}
    <br />
    <br />
    {!! Form::label('marca', 'Marca del coche') !!}
    {!! Form::text('marca', $coche->marca, ['placegholder' => 'Ingresa la marca']) !!}
    <br />
    <br />
    {!! Form::label('matricula', 'Matricula del coche') !!}
    {!! Form::text('matricula', $coche->matricula, ['placegholder' => 'Ingresa la Matricula']) !!}
    <br />
    <br />
    {!! Form::label('modelo', 'Modelo del coche') !!}
    {!! Form::text('modelo', $coche->modelo, ['placegholder' => 'Ingresa el modelo']) !!}
    <br />
    <br />
    {!! Form::label('precio', 'Precio del coche') !!}
    {!! Form::text('precio', $coche->precio, ['placegholder' => 'Ingresa el precio']) !!}
    <br />
    <br />

    {!! Form::label('tipo', 'Tipo:') !!}
    {!! Form::select('tipo', ['1' => 'Nuevo', '0' => 'Usado'], $coche->tipo, [
        'class' => 'tipo-select',
    ]) !!}

    <br /><br />

    <div class="unidades-input" @if ($coche->tipo != 1) style="display: none;" @endif>
        {!! Form::label('unidades', 'Unidades:') !!}
        {!! Form::text('unidades', optional($coche->CocheNuevo)->unidades, [
            'placeholder' => 'Cantidad de unidades',
            'class' => 'unidades-input',
        ]) !!}
    </div>

    <div class="kilometraje-input" @if ($coche->tipo != 0) style="display: none;" @endif>
        {!! Form::label('kilometraje', 'Kilometraje:') !!}
        {!! Form::text('kilometraje', optional($coche->CocheUsado)->kilometraje, [
            'placeholder' => 'Cantidad de kilometraje',
            'class' => 'kilometraje-input',
        ]) !!}
    </div>

    <script>
        $(document).ready(function() {
            // Captura el evento de cambio del select con clase "tipo-select"
            $('.tipo-select').on('change', function() {
                // Obtiene el valor seleccionado
                var tipoSeleccionado = $(this).val();
                console.log('Tipo seleccionado:', tipoSeleccionado); // Verifica el valor seleccionado

                // Muestra u oculta los campos de unidades y kilometraje según el valor seleccionado
                if (tipoSeleccionado === '1') {
                    $('.unidades-input').show();
                    $('.kilometraje-input').hide();
                } else if (tipoSeleccionado === '0') {
                    $('.unidades-input').hide();
                    $('.kilometraje-input').show();
                } else {
                    // Si se selecciona el placeholder (ninguna opción seleccionada), oculta ambos campos
                    $('.unidades-input').hide();
                    $('.kilometraje-input').hide();
                }
            });
        });
    </script>


    <br /><br />

    {!! Form::submit('Modificar Coche') !!}
    {!! Form::close() !!}
</body>

</html>
