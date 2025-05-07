@extends('layouts.master')

@section('content')
<h1 class="text-2xl font-bold mb-6">Ficha médica de {{ $user->name }}</h1>

<h2 class="text-xl font-semibold mb-2">Información personal</h2>
<ul class="mb-6">
    <li><strong>Fecha de nacimiento:</strong> {{ $user->additionalUserInfo->borndate ?? 'No especificado' }}</li>
    <li><strong>Género:</strong> {{ $user->additionalUserInfo->gender ?? 'No especificado' }}</li>
    <li><strong>Dirección:</strong> {{ $user->additionalUserInfo->address ?? 'No especificada' }}</li>
    <li><strong>Teléfono:</strong> {{ $user->additionalUserInfo->phone_number ?? 'No especificado' }}</li>
</ul>

<h2 class="text-xl font-semibold mb-2">Alergias</h2>
<ul class="list-disc list-inside mb-6">
    @forelse ($allergies as $allergy)
        <li>{{ $allergy->name }}</li>
    @empty
        <li>No hay alergias registradas.</li>
    @endforelse
</ul>

<h2 class="text-xl font-semibold mb-2">Enfermedades</h2>
<ul class="list-disc list-inside mb-6">
    @forelse ($diseases as $disease)
        <li>{{ $disease->name }}</li>
    @empty
        <li>No hay enfermedades registradas.</li>
    @endforelse
</ul>

<h2 class="text-xl font-semibold mb-2">Medicamentos</h2>
<ul class="list-disc list-inside mb-6">
    @forelse ($medicines as $medicine)
        <li>{{ $medicine->name }}</li>
    @empty
        <li>No hay medicamentos registrados.</li>
    @endforelse
</ul>

<h2 class="text-xl font-semibold mb-2">Vacunas</h2>
<ul class="list-disc list-inside">
    @forelse ($vaccines as $vaccine)
        <li>{{ $vaccine->name }}</li>
    @empty
        <li>No hay vacunas registradas.</li>
    @endforelse
</ul>
@endsection
