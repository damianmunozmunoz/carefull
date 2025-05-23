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

<body>
    <header>
        <h1 id="titulo-carefull" onclick="location.href='{{ route(auth()->user()->role . '.dashboard') }}'"><span class="texto-azul-oscuro">Ca</span><span class="texto-azul-medio">r</span><span
                class="texto-azul-claro">e</span><span class="texto-amarillo">fu</span><span
                class="texto-naranja">ll</span></h1>
        <h6 id="subtitulo-carefull">Tu salud, nuestra prioridad</h6>

        <div class="barra">
            <div class="azul-oscuro"></div>
            <div class="azul-medio"></div>
            <div class="azul-claro"></div>
            <div class="amarillo"></div>
            <div class="naranja"></div>
        </div>

        <div id="autenticado">
            <div class="texto-azul-oscuro">
                {{ auth()->user()->name }}
            </div>
            <div>
                <a href="{{ route('user.info.edit') }}">
                    <span class="texto-azul-medio">Modificar </span><span class="texto-azul-claro">información</span>
                </a>
            </div>
            <div>
                <a href="#" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <span class="texto-amarillo">Cerrar </span><span class="texto-naranja">sesión</span>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </header>

    <main>
        <h2 id="titulo-pagina" class="m3">@yield('title')</h2>
        @yield('content')
    </main>

</body>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const cajitas = document.querySelectorAll('.contenedor > a');
        cajitas.forEach((cajita, indice) => {
            cajita.style.animationDelay = `${indice * 0.1}s`;
        });
    });
</script>
</html>