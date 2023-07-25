
@extends('layout.master')
@section('contenido')
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
@endsection
