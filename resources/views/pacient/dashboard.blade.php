@extends('layouts.master')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Panel del Paciente</h1>

    <p class="mb-4 text-gray-700">Nurse asignado: <strong>{{ $nurse->name }}</strong></p>

    <form method="GET" action="{{ route('pacient.dashboard') }}" class="mb-6">
        <label for="date" class="font-semibold mr-2">Selecciona una fecha:</label>
        <input type="date" name="date" value="{{ $date }}" onchange="this.form.submit()" class="border px-2 py-1">
    </form>

    <table class="w-full border border-collapse">
        <thead class="bg-gray-100">
            <tr>
                <th class="border px-4 py-2">Hora</th>
                <th class="border px-4 py-2">Estado</th>
                <th class="border px-4 py-2">Detalle</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dailyAppointments as $time)
                @php
                    $myAppointment = $myAppointments->get($time);
                    $appointment = $allAppointments->get($time);
                @endphp
                <tr class="{{ $myAppointment ? 'bg-green-100' : ($appointment ? 'bg-red-100' : 'bg-white') }}">
                    <td class="border px-4 py-2 font-mono">{{ $time }}</td>
                    <td class="border px-4 py-2">
                        @if ($myAppointment)
                            <a href="{{ route('pacient.appointments.show', $myAppointment->id) }}" class="text-blue-600 underline">
                                Tu cita
                            </a>
                        @elseif ($appointment)
                            No disponible
                        @else
                            Libre
                        @endif
                    </td>
                    <td class="border px-4 py-2">
                        @if ($myAppointment)
                            Médico: {{ $myAppointment->episode->nurse->name ?? 'N/D' }}<br>
                            Motivo: {{ $myAppointment->reason }}
                        @elseif (!$appointment)
                            <a href="{{ route('pacient.appointments.create', ['date' => $date, 'time' => $time]) }}"
                                class="text-blue-600 underline">Reserva tu cita en esta hora</a>
                        @else
                            —
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection