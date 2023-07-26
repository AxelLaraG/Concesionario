@extends('layout.master')
@section('contenido')
    <div class="container">
        <h1 class="mb-4">Agregar Venta</h1>
        <form method="POST" action="{{ route('ventas.store') }}">
            @csrf
            <div class="form-group">
                <label for="id_coche">Coche:</label>
                <select name="id_coche" id="id_coche" class="form-control" required>
                    @foreach ($coches as $coche)
                        <option value="{{ $coche->id }}">{{ $coche->modelo }} ({{ $coche->matricula }})</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="id_cliente">
                    Cliente: <a href="{{ route('clientes.create') }}">¿Cliente nuevo?</a>
                </label>
                <select name="id_cliente" id="id_cliente" class="form-control" required>
                    @foreach ($clientes as $cliente)
                        <option value="{{ $cliente->id }}">{{ $cliente->nombre }} {{ $cliente->apPaterno }} {{ $cliente->apMaterno }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="usuario">Usuario:</label>
                <input type="text" id="usuario" name="usuario" value="{{ $usuarioSesion->nombre }}" readonly class="form-control">
            </div>
            <div class="form-group">
                <label for="total">Total:</label>
                <input type="number" name="total" id="total" class="form-control" required>
            </div>

            <input type="hidden" name="id_usuario" value="{{ $usuarioSesion->id }}">

            <button type="submit" class="btn btn-primary">Guardar Venta</button>
        </form>
    </div>
@endsection
