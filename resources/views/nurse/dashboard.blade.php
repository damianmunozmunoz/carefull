@extends('layouts.master')

@section('title', 'Panel de enfermería')

@section('content')
    <nav>
        <a href="{{ route('nurse.diseases.index') }}" class="nav-nurse">
            <div class="azul-oscuro">Enfermedades</div>
        </a>
        <a href="{{ route('nurse.allergies.index') }}" class="nav-nurse">
            <div class="azul-claro">Alergias</div>
        </a>
        <a href="{{ route('nurse.medicines.index') }}" class="nav-nurse">
            <div class="amarillo">Medicamentos</div>
        </a>
        <a href="{{ route('nurse.vaccines.index') }}" class="nav-nurse">
            <div class="naranja">Vacunas</div>
        </a>
    </nav>

    <h4 class="text-center m-3">Pacientes asignados</h4>
    <div class="contenedor">
        @foreach($pacients as $pacient)
            <div class="caja-paciente">
                <span class="caja-paciente-nombre">
                    <p>{{ $pacient->name }}</p>
                </span>
                <span class="caja-paciente-email">
                    <p>{{ $pacient->email }}</p>
                </span>
                <div class="botones-paciente">
                    <a href="{{ route('nurse.pacients.medical_record', $pacient->id) }}">
                        <button>Ficha<br> médica</button>
                    </a>
                    <a href="{{ route('nurse.pacients.medical_history', $pacient->id) }}">
                        <button>Historial<br> médico</button>
                    </a>
                </div>
            </div>
        @endforeach
    </div>

    <h4 class="text-center">Registra citas para tus pacientes</h4>
    <form method="GET" action="{{ route('nurse.dashboard') }}" class="text-center">
        @csrf
        <label for="date">Selecciona una fecha para agendar la cita</label><br>
        <input type="date" name="date" value="{{ $date }}" onchange="this.form.submit()" class="fecha">
    </form>

    <div class="contenedor">
        @foreach($dailyAppointments as $time)
            @php
                $appointment = $myAppointments->get($time);
            @endphp
            @if($appointment)
                <a href="{{ route('nurse.appointments.edit', $appointment->id) }}">
                    <div class="caja-cita editable">
                        <div>{{ $time }}</div>
                        <div><b>Paciente: </b>{{ $appointment->episode->pacient->name }}</div>
                        <div><b>Motivo: </b>{{ $appointment->reason }}</div>
                    </div>
                </a>
            @else
                <a href="{{ route('nurse.appointments.create', ['date' => $date, 'time' => $time]) }}">
                    <div class="caja-cita libre">
                        <div>{{ $time }}</div>
                        <div class="caja-cita-texto">Reserva una cita</div>
                    </div>
                </a>
            @endif
        @endforeach
    </div>
@endsection