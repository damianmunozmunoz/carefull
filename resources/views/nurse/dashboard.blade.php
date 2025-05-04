@extends('layouts.master')

@section('content')
    <h1 class="text-2xl font-bold mb-6">Panel de Enfermería</h1>

    <form method="GET" action="{{ route('nurse.dashboard') }}" class="mb-4">
        <label for="date">Fecha:</label>
        <input type="date" name="date" value="{{ $date }}" onchange="this.form.submit()" class="border px-2 py-1">
    </form>

    <table class="w-full border border-collapse">
        <thead class="bg-gray-100">
            <tr>
                <th class="border px-4 py-2">Hora</th>
                <th class="border px-4 py-2">Motivo</th>
                <th class="border px-4 py-2">Paciente</th>
                <th class="border px-4 py-2">Editar?</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dailyAppointments as $time)
                @php
                    $appointment = $myAppointments->get($time);
                @endphp
                @if ($appointment)
                    <tr class="bg-green-100">
                        <td class="border px-4 py-2">{{ $time }}</td>
                        <td class="border px-4 py-2">{{ $appointment->reason }}</td>
                        <td class="border px-4 py-2">{{ $appointment->episode->pacient->name ?? '-' }}</td>
                        <td>
                            <a href="{{ route('nurse.appointments.edit', $appointment->id) }}"
                                class="text-blue-600 underline">Editar cita</a>
                        </td>
                    </tr>
                @else
                    <tr class="bg-white">
                        <td class="border px-4 py-2">{{ $time }}</td>
                        <td colspan="2" class="border px-4 py-2 text-center text-gray-500 italic">
                            <a href="{{ route('nurse.appointments.create', ['date' => $date, 'time' => $time]) }}"
                                class="text-blue-600 underline">Reserva citas para tus pacientes</a>
                        </td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
@endsection