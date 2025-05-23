@extends('layouts.master')

@section('title', $vaccine->name)

@section('content')
    <div class="contenedor-show-cita" style="border-color: transparent;">
        <p>{!! $vaccine->description !!}</p>
    </div>

    <h4 class="text-center">Enfermedades que previene o cura</h4>
    <div class="contenedor">
        @forelse ($vaccine->diseases as $disease)
            <a href="{{ route('nurse.diseases.show', $disease->id) }}">
                <div class="caja-cita enfermedad">{{ $disease->name }}</div>
            </a>
        @empty
            <p>No hay enfermedades asociadas.</p>
        @endforelse
    </div>

    <h4 class="text-center">Tus pacientes que han recibido esta vacuna</h4>
    <div class="contenedor">
        @forelse($pacients as $pacient)
            <div class="caja-paciente">
                <span class="caja-paciente-nombre">
                    <p>{{ $pacient->name }}</p>
                </span>
                <span class="caja-paciente-email">
                    <p>{{ $pacient->email }}</p>
                </span>
                <div class="botones-paciente">
                    <a href="{{ route('nurse.pacients.medical_record', $pacient->id) }}">
                        <button>Ficha<br> médica</button>
                    </a>
                    <a href="{{ route('nurse.pacients.medical_history', $pacient->id) }}">
                        <button>Historial<br> médico</button>
                    </a>
                </div>
            </div>
        @empty
            <p>No hay pacientes que hayan recibido esta vacuna.</p>
        @endforelse
    </div>
@endsection