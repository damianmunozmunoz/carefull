@extends('layouts.master')

@section('content')
    <h1 class="text-3xl font-bold mb-4">{{ $allergy->name }}</h1>

    <h2 class="text-xl font-semibold mb-2">Medicamentos que la tratan</h2>
    <ul class="list-disc list-inside mb-6">
        @forelse ($allergy->medicines as $medicine)
            <li>
                <a href="{{ route('nurse.medicines.show', $medicine->id) }}" class="text-blue-600 underline">
                    {{ $medicine->name }}
                </a>
            </li>
        @empty
            <li>No hay medicamentos asociados.</li>
        @endforelse
    </ul>

    <h2 class="text-xl font-semibold mb-2">Tus pacientes que padecen esta alergia</h2>
    <ul class="list-disc list-inside">
        @forelse ($pacients as $pacient)
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
            <li>No hay pacientes que padezcan esta alergia.</li>
        @endforelse
    </ul>
@endsection