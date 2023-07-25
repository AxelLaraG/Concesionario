{{-- <!DOCTYPE html>
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

</html> --}}

@extends('layout.master')
@section('contenido')

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Lista de reparaciones</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Matricula</th>
                                            <th>Fecha</th>
                                            <th>Horas</th>
                                            <th>Descripcion</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Matricula</th>
                                            <th>Fecha</th>
                                            <th>Horas</th>
                                            <th>Descripcion</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($reparaciones as $reparacion)
                                        <tr>
                                            <td>{!! $reparacion->Coche->matricula !!}</td>
                                            <td>{!! $reparacion->fecha_reparacion !!}</td>
                                            <td>{!! $reparacion->horas !!}</td>
                                            <td>{!! $reparacion->descripcion !!}</td>
                                            <td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>

@endsection