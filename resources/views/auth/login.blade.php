<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareFull</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    <link rel="icon" href="{{ asset('logo.png') }}" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prosto+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

<body class="body-auth">
    <div class="auth-formulario">
        <img src="{{ asset('logo.png') }}">
        <h2 class="titulo-pagina">Iniciar Sesión</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="auth-campo">
                <label for="email">Correo electrónico</label>
                <input type="email" name="email" id="email" required>
            </div>

            <div class="auth-campo">
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" required>
            </div>

            <input type="submit" value="Entrar" class="boton-formulario-vdam">
        </form>

        <div>
            <a href="{{ route('register') }}">¿No tienes cuenta? Regístrate</a>
        </div>
    </div>
</body>

</html>