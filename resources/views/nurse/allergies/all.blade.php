@extends('layouts.master')

@section('content')
<h1 class="text-2xl font-bold mb-6">Listado de Alergias</h1>

<table class="w-full border border-collapse">
    <thead class="bg-gray-100">
        <tr>
            <th class="border px-4 py-2 text-left">Nombre</th>
            <th class="border px-4 py-2 text-left">Acción</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($allergies as $allergy)
            <tr>
                <td class="border px-4 py-2">{{ $allergy->name }}</td>
                <td class="border px-4 py-2">
                    <a href="{{ route('nurse.allergies.show', $allergy->id) }}" class="text-blue-600 underline">
                        Ver detalles
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
