@extends('layouts.master')

@section('title', 'Editar información personal')

@section('content')
    <div class="contenedor-formulario">
        <form method="POST" action="{{ route('user.info.update', $info->id) }}" class="cita-formulario">
            @csrf
            @method('PUT')

            <div class="formulario">
                <label>Fecha de nacimiento:</label>
                <input type="date" name="borndate" value="{{ $info->borndate }}" class="fecha">
            </div>

            <div class="formulario">
                <label>Género:</label>
                <select name="gender" class="fecha">
                    <option value="">-- Seleccionar --</option>
                    <option value="Hombre">Hombre</option>
                    <option value="Mujer">Mujer</option>
                </select>
            </div>

            <div class="formulario">
                <label>Dirección:</label>
                <input type="text" name="address" value="{{ $info->address }}" class="fecha">
            </div>

            <!-- Teléfono -->
            <div class="formulario">
                <label>Teléfono:</label>
                <input type="text" name="phone_number" value="{{ $info->phone_number }}" class="fecha" placeholder="999888777">
            </div>

            <!-- Botón guardar -->
            <button type="submit" class="boton-formulario">
                Guardar cambios
            </button>
        </form>
    </div>
@endsection