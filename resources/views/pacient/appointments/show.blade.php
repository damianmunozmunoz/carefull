@extends('layouts.master')

@section('title', 'Detalles de tu cita')

@section('content')
    <div class="contenedor-show-cita">
        <p><b>Fecha:</b> {{ $appointment->date }}</p>
        <p><b>Hora:</b> {{ \Carbon\Carbon::parse($appointment->time)->format('H:i') }}</p>
        <p><b>Motivo:</b> {{ $appointment->reason }}</p>
        <p><b>Observaciones:</b> {{ $appointment->observations ?? 'Sin observaciones aún' }}</p>
        <p><b>Médico:</b> {{ $appointment->episode->nurse->name }}</p>
        <p><b>Paciente:</b> {{ $appointment->episode->pacient->name }}</p>
    </div>

    <div class="contenedor-show-cita-grid">
        <div>
            <h2 class="texto-azul-oscuro">Alergias detectadas</h2>
            <ul>
                @forelse ($appointment->allergies as $allergy)
                    <li>{{ $allergy->name }}</li>
                @empty
                    <li>No se han detectado alergias</li>
                @endforelse
            </ul>
        </div>

        <div>
            <h2 class="texto-azul-claro">Enfermedades detectadas</h2>
            <ul>
                @forelse ($appointment->diseases as $disease)
                    <li>{{ $disease->name }}</li>
                @empty
                    <li>No se han detectado enfermedades</li>
                @endforelse
            </ul>
        </div>

        <div>
            <h2 class="texto-amarillo">Medicamentos recetados</h2>
            <ul>
                @forelse ($appointment->medicines as $medicine)
                    <li>{{ $medicine->name }}</li>
                @empty
                    <li>No se han recetado medicamentos</li>
                @endforelse
            </ul>
        </div>

        <div>
            <h2 class="texto-naranja">Vacunas puestas</h2>
            <ul>
                @forelse ($appointment->vaccines as $vaccine)
                    <li>{{ $vaccine->name }}</li>
                @empty
                    <li>No se han puesto vacunas</li>
                @endforelse
            </ul>
        </div>
    </div>
    <form action="{{ route('pacient.appointments.destroy', $appointment->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <div class="botones-update-cita">
            <button type="submit" class="boton-submit-vdam" style="background-color: red;">
                Eliminar Cita
            </button>
        </div>
    </form>
@endsection