@extends('layouts.master')

@section('title', 'Listado de vacunas')

@section('content')
    <form action="{{ route('nurse.search-vaccine') }}" method="GET" class="input-group barra-busqueda">
        @csrf
        <input type="text" name="search" class="form-control" placeholder="Busca la vacuna">
        <button type="submit" class="btn btn-dark">Buscar</button>
    </form>

    <div class="contenedor">
        @foreach ($vaccines as $vaccine)
            <a href="{{ route('nurse.vaccines.show', $vaccine->id) }}">
                <div class="caja-cita vacuna">{{ $vaccine->name }}</div>
            </a>
        @endforeach
    </div>
@endsection