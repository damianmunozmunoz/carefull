@extends('layouts.master')

@section('content')
    <h1 class="text-2xl font-bold mb-6">Historial Médico de {{ $pacient->name }}</h1>

    @if ($episodes->isEmpty())
        <p class="text-gray-600">Este paciente no tiene episodios registrados.</p>
    @else
        <table class="w-full border border-collapse">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border px-4 py-2">Nombre del Episodio</th>
                    <th class="border px-4 py-2">Fecha de Inicio</th>
                    <th class="border px-4 py-2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($episodes as $episode)
                    <tr>
                        <td class="border px-4 py-2">{{ $episode->name }}</td>
                        <td class="border px-4 py-2">{{ $episode->created_at }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('nurse.episode.appointments', $episode->id) }}" class="text-blue-600 underline">
                                Ver citas
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
