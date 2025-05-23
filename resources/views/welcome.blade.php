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
        <h1 id="titulo-carefull"><span class="texto-azul-oscuro">Ca</span><span class="texto-azul-medio">r</span><span
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
            @if (Route::has('login'))
                @auth
                    @php
                        $role = auth()->user()->role;
                    @endphp

                    @if($role == 'nurse')
                        <a href="{{ route('nurse.dashboard') }}">
                            <span class="texto-azul-oscuro">Accede a tu página</span>
                        </a>
                    @else
                        <a href="{{ route('pacient.dashboard') }}">
                            <span class="texto-azul-oscuro">Accede a tu página</span>
                        </a>
                    @endif
                @else
                    <div>
                        <a href="{{ route('login') }}">
                            <span class="texto-azul-medio">Iniciar </span><span class="texto-azul-claro">sesión</span>
                        </a>
                    </div>
                    @if (Route::has('register'))
                        <div>
                            <a href="{{ route('register') }}">
                                <span class="texto-amarillo">Regis</span><span class="texto-naranja">trarse</span>
                            </a>
                        </div>
                    @endif
                @endauth
            @endif
        </div>
    </header>

    <main>
        <h2 id="titulo-pagina" class="m3">¡Bienvenido/a a CareFull!</h2>
        <div class="contenedor-welcome">
            <div class="apartado-welcome">
                <div class="texto-welcome">
                    <p>CareFull surge de un proyecto de final de grado superior de un estudiante de Desarrollo de
                        Aplicaciones Web.
                        Con este proyecto se busca emplear todo lo aprendido a lo largo del grado aplicándolo a una
                        aplicación real.<br><br>
                        CareFull se define como un software de gestión sanitaria. Durante el desarrollo se han incluido
                        diversas funcionalidades como reservas de citas o consulta del historial médico del paciente.
                        Incluso se ha desarrollado una biblioteca de libre acceso con información acerca de
                        enfermedades, medicamentos, vacunas y alergias.<br><br>
                        Además CareFull está pensado tanto para pacientes como para el personal sanitario permitiendo
                        así una comunicación entre ellos a través de la red. En los siguientes apartados se explican las
                        funcionalidades que ambos tipos de usuario pueden realizar.<br><br>
                    </p>
                </div>
            </div>
            <div class="apartado-welcome">
                <div class="texto-welcome" style="font-size:0.8rem;">
                    <h4 class="m3">Funcionalidades del paciente</h4>
                    <p>Se han diseñado distintas funciones para los pacientes. Pueden reservar citas, consultar la
                        información sobre las mismas y borrarlas si así lo desean.<br><br>
                        También pueden consultar su ficha médica donde aparecen las enfermedades que han padecido, los
                        medicamentos que se le han recetado, las alergias que padecen o las vacunas que llevan
                        puestas.<br><br>
                        Por último, tienen acceso a su historial médico completo registrado en la aplicación,
                        permitiendo así a estos pacientes navegar entre los distintos episodios y citas que hayan tenido
                        desde que están registrados en CareFull.
                    </p>
                </div>
                <div class="imagen-welcome">
                    <img src="{{ asset('images/pac.png') }}" alt="Panel del paciente">
                </div>
            </div>
            <div class="apartado-welcome">
                <div class="imagen-welcome">
                    <img src="{{ asset('images/enf.png') }}" alt="Panel de enfermería">
                </div>
                <div class="texto-welcome" style="font-size:0.8rem;">
                    <h4 class="m3">Funcionalidades del personal sanitario</h4>
                    <p>¡El personal sanitario registrado en CareFull tiene acceso a muchas más funcionalidades!<br>
                        La aplicación permite a estos usuarios consultar el historial médico y la ficha médica de todos
                        sus pacientes.<br><br>
                        Pueden reservar citas para sus pacientes, editar o borrar las ya existentes, recetar
                        medicamentos,
                        detectar enfermedades y alergias o poner vacunas.<br><br>
                        Y por si fuera poco ¡pueden consultar la biblioteca de CareFull! Se les proporciona acceso a una
                        extensa fuente de información acerca de distintos medicamentos, las enfermedades para las que
                        sirven dichos medicamentos, información sobre algunas vacunas y mucho más.
                    </p>
                </div>
            </div>
        </div>
        <h4 class="m3 text-center">¿Con ganas de probar CareFull? ¡Accede ahora!</h4>
        <div class="botones-welcome">
            @if (Route::has('login'))
                @auth
                    @php
                        $role = auth()->user()->role;
                    @endphp

                    @if($role == 'nurse')
                        <a href="{{ route('nurse.dashboard') }}">
                            <button>Accede a tu página</button>
                        </a>
                    @else
                        <a href="{{ route('pacient.dashboard') }}">
                            <button>Accede a tu página</button>
                        </a>
                    @endif
                @else
                    <a href="{{ route('login') }}">
                        <button>Iniciar sesión</button>
                    </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">
                            <button>Registrarse</button>
                        </a>
                    @endif
                @endauth
            @endif
        </div>
    </main>
</body>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const apartados = document.querySelectorAll('.apartado-welcome');

        apartados.forEach((apartado, indice) => {
            if (indice % 2 == 0) {
                apartado.classList.add('izdadcha');
            }
            else {
                apartado.classList.add('dchaizda');
            }
        });

        const visor = new IntersectionObserver(vistas => {
            vistas.forEach(vista => {
                if (vista.isIntersecting) {
                    vista.target.classList.add('apartado-visible');
                    visor.unobserve(vista.target)
                }
            });
        }, { threshold: 0.2 });
        apartados.forEach(apartado => {
            visor.observe(apartado);
        });
    });

</script>

</html>