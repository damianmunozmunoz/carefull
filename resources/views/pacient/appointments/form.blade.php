@extends('layouts.master')

@section('title', 'Reserva tu cita')

@section('content')
    <div class="contenedor-formulario">
        <form method="POST" action="{{ route('pacient.appointments.store', ['date' => $date, 'time' => $time]) }}"
            class="cita-formulario">
            @csrf
            <h5 class="titulo-formulario"><b>Introduce el motivo de tu cita para el día <br> {{ $date }} a las {{ $time }}</b></h5>
            <div class="formulario">
                <textarea name="reason" rows="4" required></textarea>
            </div>

            <button type="submit" class="boton-formulario">Reservar cita</button>
        </form>
    </div>
@endsection