@extends('layouts.master')

@section('title', 'Ficha médica de '.$pacient->name)

@section('content')
    <div class="contenedor-show-cita" style="gap:2vw;">
        <p><b>Fecha de nacimiento:</b> {{ $pacient->additionalUserInfo->borndate ?? 'No especificado' }}</p>
        <p><b>Género:</b> {{ $pacient->additionalUserInfo->gender ?? 'No especificado' }}</p>
        <p><b>Dirección:</b> {{ $pacient->additionalUserInfo->address ?? 'No especificado' }}</p>
        <p><b>Teléfono:</b> {{ $pacient->additionalUserInfo->phone_number ?? 'No especificado' }}</p>
    </div>

    <div class="contenedor-show-cita-grid">
        <div>
            <h2 class="texto-azul-oscuro">Alergias detectadas</h2>
            <ul>
                @forelse ($allergies as $allergy)
                    <li>{{ $allergy->name }}</li>
                @empty
                    <li>No se han detectado alergias</li>
                @endforelse
            </ul>
        </div>

        <div>
            <h2 class="texto-azul-claro">Enfermedades detectadas</h2>
            <ul>
                @forelse ($diseases as $disease)
                    <li>{{ $disease->name }}</li>
                @empty
                    <li>No se han detectado enfermedades</li>
                @endforelse
            </ul>
        </div>

        <div>
            <h2 class="texto-amarillo">Medicamentos recetados</h2>
            <ul>
                @forelse ($medicines as $medicine)
                    <li>{{ $medicine->name }}</li>
                @empty
                    <li>No se han recetado medicamentos</li>
                @endforelse
            </ul>
        </div>

        <div>
            <h2 class="texto-naranja">Vacunas puestas</h2>
            <ul>
                @forelse ($vaccines as $vaccine)
                    <li>{{ $vaccine->name }}</li>
                @empty
                    <li>No se han puesto vacunas</li>
                @endforelse
            </ul>
        </div>
    </div>
@endsection