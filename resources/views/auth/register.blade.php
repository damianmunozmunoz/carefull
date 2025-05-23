<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>CareFull - Registro</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}" />
    <link rel="icon" href="{{ asset('logo.png') }}" type="image/png" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Prosto+One&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body class="body-auth">
    <div class="auth-formulario" style="margin:5vw;">
        <img src="{{ asset('logo.png') }}" alt="CareFull Logo" />
        <h2 class="titulo-pagina">Registro</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="auth-campo">
                <label for="name">Nombre</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required>
            </div>

            <div class="auth-campo">
                <label for="email">Correo electrónico</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required>
            </div>

            <div class="auth-campo">
                <label for="password">Contraseña</label>
                <input id="password" type="password" name="password" required>
            </div>

            <div class="auth-campo">
                <label for="password_confirmation">Confirmar contraseña</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required>
                @error('password_confirmation')
                    <p class="text-danger small">{{ $message }}</p>
                @enderror
            </div>

            <div class="auth-campo">
                <label>Tipo de cuenta</label>
                <div class="caja-roles">
                    <div class="solapa"></div>

                    <input type="radio" name="role" value="pacient" id="rol-pacient" hidden checked>
                    <label for="rol-pacient" class="rol">Paciente</label>

                    <input type="radio" name="role" value="nurse" id="rol-nurse" hidden>
                    <label for="rol-nurse" class="rol">Personal sanitario</label>
                </div>
            </div>

            <input type="submit" value="Registrar" class="boton-formulario-vdam" />
        </form>

        <a href="{{ route('login') }}">¿Ya tienes cuenta? Inicia sesión</a>
    </div>
</body>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const roles = document.querySelectorAll('input[type="radio"]');
        const solapa = document.querySelector('.solapa');

        roles.forEach((rol, indice) => {
            if (rol.checked) {
                solapa.style.transform = `translateX(${indice * 100}%)`;
            }

            // Al cambiar de opción
            rol.addEventListener('change', () => {
                solapa.style.transform = `translateX(${indice * 100}%)`;
            });
        });
    });
</script>
</html>