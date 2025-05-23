@extends('layouts.master')

@section('title', 'Citas del episodio ' . $episode->name)

@section('content')
    @if ($appointments->isEmpty())
        <p class="text-center">No hay citas en este episodio.</p>
    @else
        <div class="contenedor">
            @foreach($appointments as $appointment)
                <a href="{{ route('pacient.appointments.show', $appointment->id) }}">
                    <div class="caja-cita cita">
                        <div>{{ $appointment->date }}</div>
                        <div>{{ $appointment->time }}</div>
                        <div>{{ $appointment->reason }}</div>
                    </div>
                </a>
            @endforeach
        </div>
    @endif
@endsection