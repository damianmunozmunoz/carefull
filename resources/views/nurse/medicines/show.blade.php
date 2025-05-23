@extends('layouts.master')

@section('title', $medicine->name)

@section('content')
    <div class="contenedor-show-cita" style="border-color: transparent;">
        <p>{!! $medicine->description !!}</p>
    </div>

    <h4 class="text-center">Enfermedades tratadas</h4>
    <div class="contenedor">
        @forelse ($medicine->diseases as $disease)
            <a href="{{ route('nurse.diseases.show', $disease->id) }}">
                <div class="caja-cita enfermedad">{{ $disease->name }}</div>
            </a>
        @empty
            <p>No hay enfermedades asociadas.</p>
        @endforelse
    </div>

    <h4 class="text-center">Alergias tratadas</h4>
    <div class="contenedor">
        @forelse ($medicine->allergies as $allergy)
            <a href="{{ route('nurse.allergies.show', $allergy->id) }}">
                <div class="caja-cita alergia">{{ $allergy->name }}</div>
            </a>
        @empty
            <p>No hay alergias asociadas.</p>
        @endforelse
    </div>

    <h4 class="text-center">Tus pacientes que han recibido este medicamento</h4>
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
            <p>No hay pacientes que hayan recibido este medicamento.</p>
        @endforelse
    </div>
@endsection