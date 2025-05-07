@extends('layouts.master')

@section('content')
    <h1 class="text-3xl font-bold mb-4">{{ $disease->name }}</h1>

    <p class="mb-6 text-gray-700">
        <strong>Descripción:</strong><br>
        {{ $disease->description ?? 'Sin descripción disponible.' }}
    </p>

    <h2 class="text-xl font-semibold mb-2">Medicamentos que la curan</h2>
    <ul class="list-disc list-inside mb-6">
        @forelse ($disease->medicines as $medicine)
            <li>
                <a href="{{ route('nurse.medicines.show', $medicine->id) }}" class="text-blue-600 underline">
                    {{ $medicine->name }}
                </a>
            </li>
        @empty
            <li>No hay medicamentos asociados.</li>
        @endforelse
    </ul>

    <h2 class="text-xl font-semibold mb-2">Vacunas que la previenen o curan</h2>
    <ul class="list-disc list-inside mb-6">
        @forelse ($disease->vaccines as $vaccine)
            <li>
                <p>{{ $pacient->name }}
                    <a href="{{ route('nurse.pacients.medical_record', $pacient->id) }}"
                        class="text-blue-600 hover:underline">Ficha
                        médica</a>
                    <a href="{{ route('nurse.pacients.medical_history', $pacient->id) }}"
                        class="text-blue-600 hover:underline">Historial médico</a>
                </p>
            </li>
        @empty
            <li>No hay vacunas asociadas.</li>
        @endforelse
    </ul>

    <h2 class="text-xl font-semibold mb-2">Tus pacientes que padecen esta enfermedad</h2>
    <ul class="list-disc list-inside">
        @forelse ($pacients as $pacient)
            <li>
                <a href="{{ route('nurse.pacients.medical_record', $pacient->id) }}" class="text-blue-600 underline">
                    {{ $pacient->name }}
                </a>
            </li>
        @empty
            <li>No hay pacientes que padezcan esta enfermedad.</li>
        @endforelse
    </ul>
@endsection