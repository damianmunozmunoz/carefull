@extends('layouts.master')

<p>Reserva tu cita</p>

@section('content')
<h1 class="text-2xl font-bold mb-6">Reserva tu cita</h1>

<form method="POST" action="{{ route('pacient.appointments.store', ['date' => $date, 'time' => $time]) }}" class="max-w-lg space-y-4">
    @csrf

    <div>
        <label for="reason" class="block font-semibold mb-1">Motivo:</label>
        <textarea name="reason" required class="w-full border p-2 rounded"></textarea>
    </div>

    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Reservar</button>
</form>
@endsection
