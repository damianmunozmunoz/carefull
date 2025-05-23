@extends('layouts.master')

@section('title', 'Listado de alergias')

@section('content')
    <form action="{{ route('nurse.search-allergy') }}" method="GET" class="input-group barra-busqueda">
        @csrf
        <input type="text" name="search" class="form-control" placeholder="Busca la alergia">
        <button type="submit" class="btn btn-dark">Buscar</button>
    </form>

    <div class="contenedor">
        @foreach ($allergies as $allergy)
            <a href="{{ route('nurse.allergies.show', $allergy->id) }}">
                <div class="caja-cita alergia">{{ $allergy->name }}</div>
            </a>
        @endforeach
    </div>
@endsection