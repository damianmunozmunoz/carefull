@extends('layouts.master')

@section('title', 'Historial médico')

@section('content')
    <div class="contenedor">
        @foreach ($episodes as $episode)
            <a href="{{ route('pacient.episode.appointments', $episode->id) }}">
                <div class="caja-cita episodio">
                    <div>{{ $episode->name }}</div>
                    <div>Inicio del episodio: {{ $episode->created_at }}</div>
                </div>
            </a>
        @endforeach
    </div>
@endsection