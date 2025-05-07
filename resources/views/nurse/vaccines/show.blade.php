@extends('layouts.master')

@section('content')
    <h1 class="text-3xl font-bold mb-4">{{ $vaccine->name }}</h1>

    <h2 class="text-xl font-semibold mb-2">Enfermedades que previene o cura</h2>
    <ul class="list-disc list-inside mb-6">
        @forelse ($vaccine->diseases as $disease)
            <li>
                <a href="{{ route('nurse.diseases.show', $disease->id) }}" class="text-blue-600 underline">
                    {{ $disease->name }}
                </a>
            </li>
        @empty
            <li>No hay enfermedades asociadas.</li>
        @endforelse
    </ul>

    <h2 class="text-xl font-semibold mb-2">Tus pacientes que han recibido esta vacuna</h2>
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
            <li>No hay pacientes que hayan recibido esta vacuna.</li>
        @endforelse
    </ul>
@endsection