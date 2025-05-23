@extends('layouts.master')

@section('title', 'Listado de medicamentos')

@section('content')
    <form action="{{ route('nurse.search-medicine') }}" method="GET" class="input-group barra-busqueda">
        @csrf
        <input type="text" name="search" class="form-control" placeholder="Busca el medicamento">
        <button type="submit" class="btn btn-dark">Buscar</button>
    </form>

    <div class="contenedor">
        @foreach ($medicines as $medicine)
            <a href="{{ route('nurse.medicines.show', $medicine->id) }}">
                <div class="caja-cita medicamento">{{ $medicine->name }}</div>
            </a>
        @endforeach
    </div>
@endsection