<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ing. Electromecánica</title>

    <link rel="icon" type="image/png" href="{{ asset('assets/backoffice/img/itcj.ico') }}" sizes="64x64">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/jumbotron/">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>

    <style>
        .header {
            background: url("{{ asset('assets/backoffice/img/ele3.jpg') }}") no-repeat center;
            background-size: cover;
            min-height: 100vh;
        }

        .header .navbar {
            background-color: transparent !important;
        }

        .centered {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

</head>

<body>

    <!--COMIENZA MENU-->
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('assets/backoffice/img/dda.png') }}" alt="" width="180" height="180"
                        class="d-inline-block align-top"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"><strong>Inicio</strong></a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false" style="color:#ffffff">
                                <strong>Conoce nuestra Instituto</strong>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">100's</a></li>
                                <li><a class="dropdown-item" href="#">200's</a></li>
                                <li><a class="dropdown-item" href="#">300's</a></li>
                                <li><a class="dropdown-item" href="#">400's</a></li>
                                <li><a class="dropdown-item" href="#">500's</a></li>
                                <li><a class="dropdown-item" href="#">600's</a></li>
                                <li><a class="dropdown-item" href="#">700's</a></li>
                                <li><a class="dropdown-item" href="#">800's</a></li>
                                <li><a class="dropdown-item" href="#">900's</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false" style="color:#ffffff;">
                                <strong>Oferta Educativa</strong>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="{{ url('administracion') }}">Licenciatura en
                                        Administración</a></li>
                                <li><a class="dropdown-item" href="{{ url('contador') }}">Contador Público</a></li>
                                <li><a class="dropdown-item" href="{{ url('electromecanica') }}">Ingeniería
                                        Electromecánica</a></li>
                                <li><a class="dropdown-item" href="{{ url('mecanica') }}">Ingeniería Mecánica</a></li>
                                <li><a class="dropdown-item" href="{{ url('sistemas') }}">Ingeniería en Sistemas
                                        Computacionales</a></li>
                                <li><a class="dropdown-item" href="{{ url('electronica') }}">Ingeniería
                                        Electrónica</a></li>
                                <li><a class="dropdown-item" href="{{ url('tics') }}">Ingeniería en Tecnologías de la
                                        Información y Comunicaciones</a></li>
                                <li><a class="dropdown-item" href="{{ url('ige') }}">Ingeniería en Gestión
                                        Empresarial</a></li>
                                <li><a class="dropdown-item" href="{{ url('electrica') }}">Ingeniería Eléctrica</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ url('industrial') }}">Ingeniería Industrial</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ url('logistica') }}">Ingeniería en Logística</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ url('mecatronica') }}">Ingeniería en
                                        Mecatrónica</a></li>
                            </ul>
                        </li>


                    </ul>
                    <form class="d-flex">

                        <a class="btn btn-primary" type="submit" href="{{ url('login') }}">Iniciar Sesión</a>
                    </form>
                </div>
            </div>
        </nav>
        <div class="container">
            <br>
            <div class="centered">
                <h1 class="display-1 animate__animated animate__fadeInLeft" style="color: #ffffff"><strong><br>Ingeniería Electromecánica<strong></h1>
            </div>
        </div>
    </header>
    <!--TERMINA MENU-->



    <!--COMIENZA OBJETIVO-->
    <div class="jumbotron jumbotron-fluid" style="background-color:#1B396A;">
        <div class="container">
            <br>
            <h1 class="display-8" style="color:#e9ecef">Objetivo:</h1>
            <p class="lead" style="color:#e9ecef">Formar profesionistas de excelencia en Ingeniería Electromecánica, con
                actitud emprendedora, con liderazgo y capacidad de analizar, diagnosticar, diseñar, seleccionar,
                instalar, administrar, mantener e innovar sistemas electromecánicos, en forma eficiente, segura y
                económica; considerando las normas y estándares nacionales e internacionales para fomentar el desarrollo
                sustentable con plena conciencia ética, humanística y social.</p>
            <br>
        </div>
    </div>
    <!--TERMINA OBJETIVO-->

    <!--COMIENZA PERFIL-->
    <br>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <br>
            <h1 class="display-8" style="color:#1B396A">Campo de trabajo:</h1>
            <p class="lead">El Ingeniero Electromecánico es un profesional que puede incorporarse a empresas que
                ofrezcan bienes y servicios, tanto públicas como privadas, por ejemplo: industrias extractivas, de la
                transformación, centros dedicados a la producción de alimentos, hospitales, centros de investigación y
                educación, venta de equipo electromecánico, PEMEX, CFE, y en general en la micro, pequeña y mediana
                empresa.<br></p>
            <br>
        </div>
    </div>
    <br>
    <!--TERMINA PERFIL-->

    <!--COMIENZA PERFIL-->
    <br>
    <div class="jumbotron jumbotron-fluid" style="background-color:#1B396A;">
        <div class="container">
            <br>
            <h1 class="display-8" style="color:#e9ecef">Perfil del egresado: </h1>
            <p class="lead" style="color:#e9ecef">El Ingeniero Electromecánico, formula, gestiona y evalúa proyectos de
                Ingeniería relacionados con sistemas y dispositivos en el área Electromecánica, proponiendo soluciones
                con tecnologías de vanguardia, en el marco del desarrollo sustentable.
                Diseña e implementa sistemas y dispositivos electromecánicos, utilizando estrategias para el uso
                eficiente de la energía en los sectores productivo y de servicios apegado a normas y acuerdos nacionales
                e internacionales.<br></p>
            <br>
        </div>
    </div>
    <br>
    <!--TERMINA PERFIL-->



    <div class="container marketing">

        <br><br>

        <!--COMIENZA OPORTUNIDADES-->
        <div class="row featurette">
            <div class="col-md-7">
                <h1 class="featurette-heading"> <span style="color:#1B396A">Competencias especificas</span></h1>
                <ul class="lead">
                    <br>
                    <li>Diseñar e implementar estrategias y programas para el control y/o automatización de los procesos
                        productivos y los dispositivos en los sistemas electromecánicos.</li>
                    <li>Aplicar herramientas computacionales de acuerdo a las tecnologías de vanguardia, para el diseño,
                        simulación y operación de sistemas electromecánicos acordes a la demanda del sector industrial.
                    </li>
                    <li>Formular administrar y supervisar programas de mantenimiento para la continuidad y optimización
                        de procesos productivos, considerando el cuidado del medio ambiente.</li>
                </ul>
                <h4 style="color:#1B396A">Especialidades:</h4>
                <p class="lead">Da click en los botones para más información.</p>
                <ul class="lead">
                    <li>Automatización y Robótica.</li>
                    <li>Sistemas Modernos de Enegría</li>
                </ul>
            </div>
            <div class="col-md-5">
                <img src="{{ asset('assets/backoffice/img/electro1.png') }}" class="img-fluid"
                    alt="Responsive image">
            </div>
        </div>
        <!--TERMINA OPORTUNIDADES-->
        <br>
        <hr class="featurette-divider">

        <div class="col-md-12" style="text-align: right;">
            <br>
            <h1 class="featurette-heading"><span style="color:#1B396A">Plan de estudios:</span></h1>
        </div>


        <br>
        <div class="row featurette">

            <div class="col-md-5">
                <br><br>
                <img src="{{ asset('assets/backoffice/img/electro2.jpg') }}" class="img-fluid"
                    alt="Responsive image">
            </div>

            <div class="col-md-4">
                <br>
                <ul class="lead">
                    <br>
                    <li>Química</li>
                    <li>Cálculo Diferencial</li>
                    <li>Álgebra Lineal</li>
                    <li>Taller de Ética</li>
                    <li>Introducción a la Programación</li>
                    <li>Fundamentos de Investigación</li>
                    <li>Estática</li>
                    <li>Cálculo Integral</li>
                    <li>Desarrollo Sustentable</li>
                    <li>Mediciones Mecánicas y Eléctricas</li>
                    <li>Tecnología de los Materiales</li>
                    <li>Probabilidad y Estadística</li>
                    <li>Dinámica</li>
                    <li>Cálculo Vectorial</li>
                    <li>Electricidad y Magnetismo</li>
                    <li>Dibujo Electromecánico</li>
                    <li>Procesos de Manufactura</li>
                    <li>Análisis y Síntesis de Mecanismos</li>
                    <li>Ecuaciones Diferenciales y Transformada de Laplace</li>
                    <li>Análisis de Circuitos en CD</li>
                    <li>Termodinámica</li>
                    <li>Mecánica de Materiales</li>
                    <li>Eléctronica Analógica</li>
                    <li>Diseño de Elementos de Maquinas</li>
                    <li>Mecánica de Fluidos</li>
                </ul>
            </div>


            <div class="col-md-3">
                <h1 class="featurette-heading"><span style="color:#ffffff">.</span></h1>
                <ul class="lead">
                    <li>Análisis de Circuitos de CA</li>
                    <li>Transferencia de Calor</li>
                    <li>Electrónica Digital</li>
                    <li>Máquinas y Equipos Térmicos I</li>
                    <li>Sistemas y Máquinas de Fluidos</li>
                    <li>Máquinas Eléctricas</li>
                    <li>Instalaciones Eléctricas</li>
                    <li>Taller de Investigación I</li>
                    <li>Diseño e Ingeniería Asistido por Computadora</li>
                    <li>Maquinas y Equipos Térmicos II</li>
                    <li>Sistemas Eléctricos de Potencia</li>
                    <li>Controles Eléctricos</li>
                    <li>Taller de Investigación II</li>
                    <li>Administración y Técnica de Mantenimiento</li>
                    <li>Refrigeración y Aire Acondicionado</li>
                    <li>Sistemas Hidráulicos y Neumáticos de Potencia</li>
                    <li>Ahorro de Energía</li>
                    <li>Ingeniería de Control Clásico</li>
                    <li>Subestaciones Eléctricas</li>
                    <li>Evaluación y Formulación de Proyectos</li>
                    <li>Asignaturas de Especialidad</li>
                    <li>Residencia Profesional</li>
                </ul>

            </div>

        </div>
        <hr class="featurette-divider">
        <!--TERMINA PLAN-->
    </div>


    <!-- Footer -->
    <footer class="text-center text-white" style="background-color: #1B396A;">
        <!-- Grid container -->
        <div class="container p-4">
            <!-- Section: Social media -->

            <!-- Facebook -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                    class="fab fa-facebook-f"></i></a>

            <!-- Twitter -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>

            </section>
            <!-- Section: Social media -->
            <br><br>

            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Edificio Guillot: Av. Tecnológico #1340 Fracc. El Crucero CP 32500
                        </h5>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Lunes-Viernes:<br> 08:00 am- 03:00 pm<h5>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Tel. (656) 688-2500 Ext.2303</h5>
                    </div>
                    <!--Grid column-->


                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Cd. Juárez, Chiuahua.</h5>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->

            <!-- Section: Text -->
            <section class="mb-4">
                <p> Proyecto de residencias para el departamento de Desarrollo Académico. <br><br> Elaborado por:<br>
                    Erick Salvador Luna Gutierrez 16111918<br>
                    Víctor Manuel Rodarte Amaro 16111992
                </p>
            </section>
            <!-- Section: Text -->


        </div>
        <!-- Grid container -->
        <hr>
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: #1B396A;">
            <a class="text-white" href="http://itcj.edu.mx/">
                <center><img src="{{ asset('assets/backoffice/img/tecnm.png') }}" alt="" width="180" height="100"
                        class="d-inline-block align-top"></center>
                </center>
            </a><br>Instituto Tecnológico de Ciudad Juárez: © 2021 Copyright.</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->



</body>

</html>
