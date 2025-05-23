@extends('layouts.master')

@section('title', 'Crea la cita para un paciente')

@section('content')
    <div class="contenedor-formulario">
        <form method="POST" action="{{ route('nurse.appointments.store', ['date' => $date, 'time' => $time]) }}"
            class="cita-formulario">
            @csrf

            <h5 class="text-center"><b><span class="texto-azul-oscuro">Rellena los </span><span
                        class="texto-azul-medio">datos </span><span class="texto-azul-claro">de la </span><span
                        class="texto-amarillo">cita para </span><span class="texto-naranja">el día </span><br><span
                        class="texto-azul-medio">{{ $date }}</span><span class="texto-azul-claro"> a las </span><span
                        class="texto-amarillo">{{ $time }}</span></b>
            </h5>
            <div class="formulario">
                <label for="pacient_id"><b>Selecciona un paciente:</b></label>
                <select name="pacient_id" required>
                    <option value="">Elige uno de tus pacientes</option>
                    @foreach ($pacients as $pacient)
                        <option value="{{ $pacient->id }}">{{ $pacient->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="formulario">
                <label for="reason"><b>Introduce un motivo:</b></label>
                <textarea name="reason" rows="4" required></textarea>
            </div>

            <button type="submit" class="boton-formulario"><b>Crear cita</b></button>
        </form>
    </div>
@endsection