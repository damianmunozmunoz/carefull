@extends('layouts.master')

@section('title', 'Creación de nuevo episodio')

@section('content')
    <div class="contenedor-formulario">
        <form method="POST" action="{{ route('nurse.episodes.store', request()->only(['pacient_id', 'appointment_id'])) }}"
            class="cita-formulario">
            @csrf
            <div>
                <label class="titulo-formulario">Introduce el nombre del nuevo episodio</label>
                <input type="text" name="name" class="formulario-texto" style="margin-top:2vh; margin-bottom:2vh;">
            </div>

            <button type="submit" class="boton-formulario">Guardar episodio</button>
        </form>
    </div>
@endsection