@extends('layout.master')
@section('contenido')
    <div class="container">
        <h1 class="mb-4">Editar Venta</h1>
        <form method="POST" action="{{ route('ventas.update', $venta->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="id_coche">Coche:</label>
                <select name="id_coche" id="id_coche" class="form-control" required>
                    @foreach ($coches as $coche)
                        <option value="{{ $coche->id }}">{{ $coche->modelo }} ({{ $coche->matricula }})</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="id_cliente">Cliente:</label>
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
                <input type="text" name="total" id="total" value="{{ $venta->total }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select name="status" id="status" class="form-control">
                    <option value="1" {{ $venta->status == 1 ? 'selected' : '' }}>Activo</option>
                    <option value="0" {{ $venta->status == 0 ? 'selected' : '' }}>Inactivo</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Modificar Venta</button>
        </form>
    </div>
@endsection
