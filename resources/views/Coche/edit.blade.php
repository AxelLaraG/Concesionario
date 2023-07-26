@extends('layout.master')
@section('contenido')
    <main>
        <div class="container-fluid px-4">
            <h1>Editar Coche</h1>
            {!! Form::open(['method' => 'PATCH', 'url' => 'Coche/' . $coche->matricula, 'class' => 'coche-form']) !!}
            <div class="form-group">
                {!! Form::label('color', 'Color del coche') !!}
                {!! Form::text('color', $coche->color, ['class' => 'form-control', 'placeholder' => 'Ingresa el color']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('marca', 'Marca del coche') !!}
                {!! Form::text('marca', $coche->marca, ['class' => 'form-control', 'placeholder' => 'Ingresa la marca']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('matricula', 'Matricula del coche') !!}
                {!! Form::text('matricula', $coche->matricula, ['class' => 'form-control', 'placeholder' => 'Ingresa la Matricula']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('modelo', 'Modelo del coche') !!}
                {!! Form::text('modelo', $coche->modelo, ['class' => 'form-control', 'placeholder' => 'Ingresa el modelo']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('precio', 'Precio del coche') !!}
                {!! Form::text('precio', $coche->precio, ['class' => 'form-control', 'placeholder' => 'Ingresa el precio']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('tipo', 'Tipo:') !!}
                {!! Form::select('tipo', ['1' => 'Nuevo', '0' => 'Usado'], $coche->tipo, ['class' => 'form-control tipo-select']) !!}
            </div>

            <div class="unidades-input form-group" @if ($coche->tipo != 1) style="display: none;" @endif>
                {!! Form::label('unidades', 'Unidades:') !!}
                {!! Form::text('unidades', optional($cocheNuevo)->unidades, ['class' => 'form-control', 'placeholder' => 'Cantidad de unidades']) !!}
            </div>

            <div class="kilometraje-input form-group" @if ($coche->tipo != 0) style="display: none;" @endif>
                {!! Form::label('kilometraje', 'Kilometraje:') !!}
                {!! Form::text('kilometraje', optional($cocheUsado)->kilometraje, ['class' => 'form-control', 'placeholder' => 'Cantidad de kilometraje']) !!}
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
            <br>
            <div class="form-group">
                {!! Form::submit('Modificar Coche', ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </main>
@endsection
