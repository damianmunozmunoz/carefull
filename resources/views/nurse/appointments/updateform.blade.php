@extends('layouts.master')

@section('title', 'Edición de cita')

@section('content')
    <form method="POST" action="{{ route('nurse.appointments.update', $appointment->id) }}">
        @csrf
        @method('PUT')

        <div class="contenedor-vdam">
            <label class="titulo-vdam">Observaciones de la cita</label><br>
            <textarea name="observations" rows="4">{{ $appointment->observations }}</textarea>
        </div>

        <!-- Cambiar Episodio -->
        <div class="contenedor-vdam">
            <label class="titulo-episodio-vdam">Episodio</label><br>
            <select name="episode_id" class="fecha" style="width:60%;">
                @foreach ($episodes as $episode)
                    <option value="{{ $episode->id }}" @selected($appointment->episode_id == $episode->id)>
                        {{ $episode->name }}
                    </option>
                @endforeach
            </select>

            <!-- Botón para crear nuevo episodio -->
            <a href="{{ route('nurse.episodes.create', ['pacient_id' => $appointment->episode->pacient_id, 'appointment_id' => $appointment->id]) }}"
                class="boton-formulario-vdam">
                Crear nuevo episodio
            </a>
        </div>

        <!-- Medicamentos recetados -->
        <div class="contenedor-vdam">
            <label class="titulo-vdam">Receta de medicamentos</label>
            <div class="grupo-vdam">
                @foreach ($medicines as $medicine)
                    <label class="vdam vdam-medicine">
                        <input type="checkbox" name="medicine_ids[]" value="{{ $medicine->id }}"
                            @checked($appointment->medicines->contains($medicine->id))>
                        <span>{{ $medicine->name }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        <!-- Enfermedades detectadas -->
        <div class="contenedor-vdam">
            <label class="titulo-vdam">Enfermedades detectadas</label>
            <div class="grupo-vdam">
                @foreach ($diseases as $disease)
                    <label class="vdam vdam-disease">
                        <input type="checkbox" name="disease_ids[]" value="{{ $disease->id }}"
                            @checked($appointment->diseases->contains($disease->id))>
                        <span>{{ $disease->name }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        <!-- Alergias detectadas -->
        <div class="contenedor-vdam">
            <label class="titulo-vdam">Alergias detectadas</label>
            <div class="grupo-vdam">
                @foreach ($allergies as $allergy)
                    <label class="vdam vdam-allergy">
                        <input type="checkbox" name="allergy_ids[]" value="{{ $allergy->id }}"
                            @checked($appointment->allergies->contains($allergy->id))>
                        <span>{{ $allergy->name }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        <!-- Vacunas puestas -->
        <div class="contenedor-vdam">
            <label class="titulo-vdam">Vacunas puestas</label>
            <div class="grupo-vdam">
                @foreach ($vaccines as $vaccine)
                    <label class="vdam vdam-vaccine">
                        <input type="checkbox" name="vaccine_ids[]" value="{{ $vaccine->id }}"
                            @checked($appointment->vaccines->contains($vaccine->id))>
                        <span>{{ $vaccine->name }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        <!-- Botón de actualizar -->
        <div class="botones-update-cita">
            <button type="submit" class="boton-submit-vdam">
                Actualizar Cita
            </button>
        </div>
    </form>
    <form action="{{ route('nurse.appointments.destroy', $appointment->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <div class="botones-update-cita">
            <button type="submit" class="boton-submit-vdam" style="background-color: red;">
                Eliminar Cita
            </button>
        </div>
    </form>
@endsection