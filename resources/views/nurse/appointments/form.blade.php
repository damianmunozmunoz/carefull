@extends('layouts.master')

<p>Crear cita para paciente</p>

@section('content')
<h1 class="text-2xl font-bold mb-6">Nueva cita para un paciente</h1>

<form method="POST" action="{{ route('nurse.appointments.store', ['date' => $date, 'time' => $time]) }}" class="max-w-lg space-y-4">
    @csrf

    <div>
        <label for="pacient_id" class="block font-semibold mb-1">Selecciona paciente:</label>
        <select name="pacient_id" required class="w-full border p-2 rounded">
            <option value="">-- Elige un paciente --</option>
            @foreach ($pacients as $pacient)
                <option value="{{ $pacient->id }}">{{ $pacient->name }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="reason" class="block font-semibold mb-1">Motivo:</label>
        <textarea name="reason" required class="w-full border p-2 rounded"></textarea>
    </div>

    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Crear cita</button>
</form>
@endsection
