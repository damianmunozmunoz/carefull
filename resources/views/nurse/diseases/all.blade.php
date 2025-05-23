@extends('layouts.master')

@section('title', 'Listado de enfermedades')

@section('content')
    <form action="{{ route('nurse.search-disease') }}" method="GET" class="input-group barra-busqueda">
        @csrf
        <input type="text" name="search" class="form-control" placeholder="Busca la enfermedad">
        <button type="submit" class="btn btn-dark">Buscar</button>
    </form>

    <div class="contenedor">
        @foreach ($diseases as $disease)
            <a href="{{ route('nurse.diseases.show', $disease->id) }}">
                <div class="caja-cita enfermedad">{{ $disease->name }}</div>
            </a>
        @endforeach
    </div>
@endsection