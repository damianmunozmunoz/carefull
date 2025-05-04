@extends('layouts.master')

@section('content')
    <h1 class="text-2xl font-bold mb-6">Detalle de tu Cita</h1>

    <div class="bg-white p-6 rounded shadow mb-6">
        <p><strong>Fecha:</strong> {{ $appointment->date }}</p>
        <p><strong>Hora:</strong> {{ \Carbon\Carbon::parse($appointment->time)->format('H:i') }}</p>
        <p><strong>Motivo:</strong> {{ $appointment->reason }}</p>
        <p><strong>Observaciones:</strong> {{ $appointment->observations ?? 'Sin observaciones aún' }}</p>
        <p><strong>Médico:</strong> {{ $appointment->episode->nurse->name }}</p>
        <p><strong>Paciente:</strong> {{ $appointment->episode->pacient->name }}</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
            <h2 class="font-semibold mb-2">Alergias detectadas:</h2>
            <ul class="list-disc list-inside">
                @forelse ($appointment->allergies as $allergy)
                    <li>{{ $allergy->name }}</li>
                @empty
                    <li>No se han detectado alergias</li>
                @endforelse
            </ul>
        </div>

        <div>
            <h2 class="font-semibold mb-2">Enfermedades detectadas:</h2>
            <ul class="list-disc list-inside">
                @forelse ($appointment->diseases as $disease)
                    <li>{{ $disease->name }}</li>
                @empty
                    <li>No se han detectado enfermedades</li>
                @endforelse
            </ul>
        </div>

        <div>
            <h2 class="font-semibold mb-2">Medicamentos recetados:</h2>
            <ul class="list-disc list-inside">
                @forelse ($appointment->medicines as $medicine)
                    <li>{{ $medicine->name }}</li>
                @empty
                    <li>No se han recetado medicamentos</li>
                @endforelse
            </ul>
        </div>

        <div>
            <h2 class="font-semibold mb-2">Vacunas puestas:</h2>
            <ul class="list-disc list-inside">
                @forelse ($appointment->vaccines as $vaccine)
                    <li>{{ $vaccine->name }}</li>
                @empty
                    <li>No se han puesto vacunas</li>
                @endforelse
            </ul>
        </div>
    </div>
@endsection
