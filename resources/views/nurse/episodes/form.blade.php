@extends('layouts.master')

@section('content')
<h1 class="text-2xl font-bold mb-6">Crear nuevo episodio</h1>

<form method="POST" action="{{ route('nurse.episodes.store', request()->only(['pacient_id', 'appointment_id'])) }}" class="space-y-4">
    @csrf

    <div>
        <label class="block font-semibold">Nombre del episodio:</label>
        <input type="text" name="name" class="w-full border p-2 rounded" required>
    </div>

    <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">
        Guardar episodio
    </button>
</form>
@endsection
