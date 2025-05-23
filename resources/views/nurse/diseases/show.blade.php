@extends('layouts.master')

@section('title', $disease->name)

@section('content')
    <div class="contenedor-show-cita" style="border-color: transparent;">
        <p>{!! $disease->description !!}</p>
    </div>

    <h4 class="text-center">Medicamentos que la curan</h4>
    <div class="contenedor">
        @forelse ($disease->medicines as $medicine)
            <a href="{{ route('nurse.medicines.show', $medicine->id) }}">
                <div class="caja-cita medicamento">{{ $medicine->name }}</div>
            </a>
        @empty
            <p>No hay medicamentos asociados.</p>
        @endforelse
    </div>

    <h4 class="text-center">Vacunas que la previenen o curan</h4>
    <div class="contenedor">
        @forelse ($disease->vaccines as $vaccine)
            <a href="{{ route('nurse.vaccines.show', $vaccine->id) }}">
                <div class="caja-cita vacuna">{{ $vaccine->name }}</div>
            </a>
        @empty
            <p>No hay vacunas asociadas.</p>
        @endforelse
    </div>

    <h4 class="text-center">Tus pacientes que padecen esta enfermedad</h4>
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
                <p>Ningun paciente padece esta alergia.</p>
            @endforelse
        </div>
@endsection