@extends('layouts.master')

@section('title', 'Panel del paciente')

@section('content')
    <nav id="nav-pacient">
        <a href="{{ route('pacient.medical_history') }}" class="nav-pacient">
            <div class="azul-claro">Tu historial médico</div>
        </a>
        <a href="{{ route('pacient.medical_record') }}" class="nav-pacient">
            <div class="naranja">Tu ficha médica</div>
        </a>
    </nav>

    <br>
    <h4 class="text-center">Registra tu próxima cita</h4>
    <form method="GET" action="{{ route('pacient.dashboard') }}" class="text-center">
        @csrf
        <label for="date">Selecciona un día y una hora para agendar tu cita</label><br>
        <input type="date" name="date" value="{{ $date }}" onchange="this.form.submit()" class="fecha">
    </form>

    <div class="contenedor">
        @foreach ($dailyAppointments as $time)
            @php
                $myAppointment = $myAppointments->get($time);
                $appointment = $allAppointments->get($time);
            @endphp
            @if($myAppointment)
                <a href="{{ route('pacient.appointments.show', $myAppointment->id) }}">
                    <div class="caja-cita tuya">
                        <div>{{ $time }}</div>
                        <div><b>Médico: </b>{{ $myAppointment->episode->nurse->name }}</div>
                        <div><b>Motivo: </b>{{ $myAppointment->reason }}</div>
                    </div>
                </a>
            @elseif($appointment)
                <div class="caja-cita ocupada">
                    <div>{{ $time }}</div>
                    <p class="caja-cita-texto">No disponible</p>
                </div>
            @else
                <a href="{{ route('pacient.appointments.create', ['date' => $date, 'time' => $time]) }}">
                    <div class="caja-cita editable">
                        <div>{{ $time }}</div>
                        <p class="caja-cita-texto">Reserva una cita</p>
                    </div>
                </a>
            @endif
        @endforeach
    </div>
@endsection