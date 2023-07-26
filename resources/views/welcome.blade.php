@extends('layout.master')
@section('contenido')
    @if (isset($var))
        <div class="alert alert-danger">
            {{ $var }}
        </div>
    @endif
@endsection
