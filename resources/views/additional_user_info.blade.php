@extends('layouts.master')

@section('content')
    <h1 class="text-xl font-bold mb-4">Editar información personal</h1>

    @if(session('success'))
        <div class="mb-4 text-green-600 font-semibold">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('user.info.update', $info->id) }}" class="space-y-4 max-w-md">
        @csrf
        @method('PUT')

        <!-- Fecha de nacimiento -->
        <div>
            <label class="block font-semibold">Fecha de nacimiento:</label>
            <input type="date" name="borndate" value="{{ $info->borndate }}" class="w-full border p-2 rounded">
        </div>

        <!-- Género -->
        <div>
            <label class="block font-semibold">Género:</label>
            <select name="gender" class="w-full border p-2 rounded">
                <option value="">-- Seleccionar --</option>
                <option value="Hombre">Hombre</option>
                <option value="Mujer">Mujer</option>
            </select>
        </div>

        <!-- Dirección -->
        <div>
            <label class="block font-semibold">Dirección:</label>
            <input type="text" name="address" value="{{ $info->address }}" class="w-full border p-2 rounded">
        </div>

        <!-- Teléfono -->
        <div>
            <label class="block font-semibold">Teléfono:</label>
            <input type="text" name="phone_number" value="{{ $info->phone_number }}" class="w-full border p-2 rounded">
        </div>

        <!-- Botón guardar -->
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
            Guardar cambios
        </button>
    </form>
@endsection
