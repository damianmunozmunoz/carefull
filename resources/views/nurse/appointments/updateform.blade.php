@extends('layouts.master')

@section('content')
<h1 class="text-2xl font-bold mb-6">Editar Cita</h1>

<form method="POST" action="{{ route('nurse.appointments.update', $appointment->id) }}">
    @csrf
    @method('PUT')

    <!-- Observaciones -->
    <div class="mb-4">
        <label class="block font-semibold">Observaciones:</label>
        <textarea name="observations" class="w-full border p-2 rounded">{{ $appointment->observations }}</textarea>
    </div>

    <!-- Cambiar Episodio -->
    <div class="mb-4">
        <label class="block font-semibold">Episodio:</label>
        <div class="flex items-center gap-4">
        <select name="episode_id" class="w-full border p-2 rounded">
            @foreach ($episodes as $episode)
                <option value="{{ $episode->id }}" @selected($appointment->episode_id == $episode->id)>
                    {{ $episode->name }}
                </option>
            @endforeach
        </select>

        <!-- Botón para crear nuevo episodio -->
        <a href="{{ route('nurse.episodes.create', ['pacient_id' => $appointment->episode->pacient_id, 'appointment_id' => $appointment->id]) }}"
           class="bg-blue-500 px-3 py-2 rounded text-sm">
            Crear nuevo episodio
        </a>
    </div>
    </div>

    <!-- Medicamentos recetados -->
    <div class="mb-4">
        <label class="block font-semibold mb-2">Medicamentos recetados:</label>
        <div class="flex flex-wrap gap-4">
            @foreach ($medicines as $medicine)
                <label class="inline-flex items-center">
                    <input type="checkbox" name="medicine_ids[]" value="{{ $medicine->id }}" class="form-checkbox"
                        @checked($appointment->medicines->contains($medicine->id))>
                    <span class="ml-2">{{ $medicine->name }}</span>
                </label>
            @endforeach
        </div>
    </div>

    <!-- Enfermedades detectadas -->
    <div class="mb-4">
        <label class="block font-semibold mb-2">Enfermedades detectadas:</label>
        <div class="flex flex-wrap gap-4">
            @foreach ($diseases as $disease)
                <label class="inline-flex items-center">
                    <input type="checkbox" name="disease_ids[]" value="{{ $disease->id }}" class="form-checkbox"
                        @checked($appointment->diseases->contains($disease->id))>
                    <span class="ml-2">{{ $disease->name }}</span>
                </label>
            @endforeach
        </div>
    </div>

    <!-- Alergias detectadas -->
    <div class="mb-4">
        <label class="block font-semibold mb-2">Alergias detectadas:</label>
        <div class="flex flex-wrap gap-4">
            @foreach ($allergies as $allergy)
                <label class="inline-flex items-center">
                    <input type="checkbox" name="allergy_ids[]" value="{{ $allergy->id }}" class="form-checkbox"
                        @checked($appointment->allergies->contains($allergy->id))>
                    <span class="ml-2">{{ $allergy->name }}</span>
                </label>
            @endforeach
        </div>
    </div>

    <!-- Vacunas puestas -->
    <div class="mb-4">
        <label class="block font-semibold mb-2">Vacunas puestas:</label>
        <div class="flex flex-wrap gap-4">
            @foreach ($vaccines as $vaccine)
                <label class="inline-flex items-center">
                    <input type="checkbox" name="vaccine_ids[]" value="{{ $vaccine->id }}" class="form-checkbox"
                        @checked($appointment->vaccines->contains($vaccine->id))>
                    <span class="ml-2">{{ $vaccine->name }}</span>
                </label>
            @endforeach
        </div>
    </div>

    <!-- Botón de actualizar -->
    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
        Actualizar Cita
    </button>
</form>
@endsection
