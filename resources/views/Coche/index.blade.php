{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coches</title>
</head>

<body>
    <h1>Lista de Coches</h1>
    <a href="Coche/create">Insertar Coche</a>
    <table>
        <tr>
            <th>Matricula</th>
            <th>Modelo</th>
            <th>Marca</th>
            <th>Color</th>
            <th>Precio</th>
        </tr>
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
    </table>
</body>
</html> --}}

@extends('layout.master')
@section('contenido')

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Lista de coches</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                
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
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Matricula</th>
                                            <th>Modelo</th>
                                            <th>Marca</th>
                                            <th>Color</th>
                                            <th>Precio</th>
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
