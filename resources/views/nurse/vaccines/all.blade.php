@extends('layouts.master')

@section('content')
<h1 class="text-2xl font-bold mb-6">Listado de Vacunas</h1>

<table class="w-full border border-collapse">
    <thead class="bg-gray-100">
        <tr>
            <th class="border px-4 py-2 text-left">Nombre</th>
            <th class="border px-4 py-2 text-left">Acción</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($vaccines as $vaccine)
            <tr>
                <td class="border px-4 py-2">{{ $vaccine->name }}</td>
                <td class="border px-4 py-2">
                    <a href="{{ route('nurse.vaccines.show', $vaccine->id) }}" class="text-blue-600 underline">
                        Ver detalles
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
