@extends('layout.master')
@section('contenido')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Lista de coches</h1>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    <a href="Coche/create">Insertar Coche</a>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Matricula</th>
                                <th>Modelo</th>
                                <th>Marca</th>
                                <th>Color</th>
                                <th>Precio</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Matricula</th>
                                <th>Modelo</th>
                                <th>Marca</th>
                                <th>Color</th>
                                <th>Precio</th>
                                <th>Acciones</th>
                            </tr>
                        </tfoot>
                        <tbody>
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
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
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
@endsection
