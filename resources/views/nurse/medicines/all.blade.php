@extends('layouts.master')

@section('metatitle', 'Medicamentos')
@section('title', 'Medicamentos')


@section('content')
    <h1 class="text-2xl font-bold mb-6">Listado de Medicamentos</h1>

    <form action="{{ route('nurse.search-medicine') }}" method="GET" class="input-group mb-3">
        @csrf
        <input type="text" name="search" class="form-control" placeholder="Busca el medicamento">

        <button type="submit" class="btn btn-dark">Buscar</button>
    </form>

    <table class="w-full border border-collapse">
        <thead class="bg-gray-100">
            <tr>
                <th class="border px-4 py-2 text-left">Nombre</th>
                <th class="border px-4 py-2 text-left">Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($medicines as $medicine)
                <tr>
                    <td class="border px-4 py-2">{{ $medicine->name }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('nurse.medicines.show', $medicine->id) }}" class="text-blue-600 underline">
                            Ver detalles
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection