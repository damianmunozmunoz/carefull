@extends('layouts.master')

@section('content')
    <h1 class="text-2xl font-bold mb-6">Citas del Episodio: {{ $episode->name }}</h1>

    @if ($appointments->isEmpty())
        <p class="text-gray-600">No hay citas en este episodio.</p>
    @else
        <table class="w-full border border-collapse">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border px-4 py-2">Fecha</th>
                    <th class="border px-4 py-2">Hora</th>
                    <th class="border px-4 py-2">Motivo</th>
                    <th class="border px-4 py-2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($appointments as $appointment)
                    <tr>
                        <td class="border px-4 py-2">{{ $appointment->date }}</td>
                        <td class="border px-4 py-2">{{ $appointment->time }}</td>
                        <td class="border px-4 py-2">{{ $appointment->reason }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('pacient.appointments.show', $appointment->id) }}" class="text-blue-600 underline">
                                Ver detalles
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
