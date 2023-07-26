@extends('layout.master')
@section('contenido')
    <main>
        <div class="container-fluid px-4">
            <h1>Insertar Coche</h1>
            {!! Form::open(['url' => '/Coche', 'class' => 'coche-form']) !!}
            <div class="form-group">
                {!! Form::label('color', 'Color del coche') !!}
                {!! Form::text('color', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el color']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('marca', 'Marca del coche') !!}
                {!! Form::text('marca', null, ['class' => 'form-control', 'placeholder' => 'Ingresa la marca']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('matricula', 'Matricula del coche') !!}
                {!! Form::text('matricula', null, ['class' => 'form-control', 'placeholder' => 'Ingresa la Matricula']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('modelo', 'Modelo del coche') !!}
                {!! Form::text('modelo', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el modelo']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('precio', 'Precio del coche') !!}
                {!! Form::text('precio', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el precio']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('tipo', 'Tipo:') !!}
                {!! Form::select('tipo', ['1' => 'Nuevo', '0' => 'Usado'], '1', ['class' => 'form-control tipo-select']) !!}
            </div>

            <div class="unidades-input form-group">
                {!! Form::label('unidades', 'Unidades:') !!}
                {!! Form::text('unidades', null, ['class' => 'form-control', 'placeholder' => 'Cantidad de unidades']) !!}
            </div>

            <div class="kilometraje-input form-group" style="display: none;">
                {!! Form::label('kilometraje', 'Kilometraje:') !!}
                {!! Form::text('kilometraje', null, ['class' => 'form-control', 'placeholder' => 'Cantidad de kilometraje']) !!}
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
            <br>
            <div class="form-group">
                {!! Form::submit('Guardar Coche', ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </main>
@endsection

