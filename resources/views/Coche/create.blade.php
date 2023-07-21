<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Agrega esto en la sección <head> o al final del <body> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insertar Coche</title>
</head>

<body>
    <h1>Insertar Coche</h1>
    {!! Form::open(['url' => '/Coche']) !!}
    {!! Form::label('color', 'Color del coche') !!}
    {!! Form::text('color', null, ['placegholder' => 'Ingresa el color']) !!}
    <br /><br />

    {!! Form::label('marca', 'Marca del coche') !!}
    {!! Form::text('marca', null, ['placegholder' => 'Ingresa la marca']) !!}

    <br /><br />

    {!! Form::label('matricula', 'Matricula del coche') !!}
    {!! Form::text('matricula', null, ['placegholder' => 'Ingresa la Matricula']) !!}

    <br /><br />

    {!! Form::label('modelo', 'Modelo del coche') !!}
    {!! Form::text('modelo', null, ['placegholder' => 'Ingresa el modelo']) !!}

    <br /><br />

    {!! Form::label('precio', 'Precio del coche') !!}
    {!! Form::text('precio', null, ['placegholder' => 'Ingresa el precio']) !!}

    <br /><br />

    {!! Form::label('tipo', 'Tipo:') !!}
    {!! Form::select('tipo', ['1' => 'Nuevo', '0' => 'Usado'], '1', [
        'class' => 'tipo-select',
    ]) !!}

    <br /><br />

    <div class="unidades-input">
        {!! Form::label('unidades', 'Unidades:') !!}
        {!! Form::text('unidades', null, ['placeholder' => 'Cantidad de unidades']) !!}
    </div>

    <div class="kilometraje-input" style="display: none;">
        {!! Form::label('kilometraje', 'Kilometraje:') !!}
        {!! Form::text('kilometraje', null, ['placeholder' => 'Cantidad de kilometraje']) !!}
    </div>

    <script>
        $(document).ready(function() {
            // Captura el evento de cambio del select con clase "tipo-select"
            $('.tipo-select').on('change', function() {
                // Obtiene el valor seleccionado
                var tipoSeleccionado = $(this).val();
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

    {!! Form::submit('Guardar Coche') !!}
    {!! Form::close() !!}
</body>

</html>
