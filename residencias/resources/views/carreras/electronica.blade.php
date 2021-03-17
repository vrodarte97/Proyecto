<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ing. Electrónica</title>

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
            background: url("{{ asset('assets/backoffice/img/electo3.png') }}") no-repeat center;
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
                                <li><a class="dropdown-item" href="{{ url('logistica') }}">Ingeniería en
                                        Logística</a>
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
                <h1 class="display-1 animate__animated animate__fadeInLeft" style="color: #ffffff">
                    <strong><br>Ingenieria Electrónica<strong></h1>
            </div>
        </div>
    </header>
    <!--TERMINA MENU-->

    <!--COMIENZA OBJETIVO-->
    <br>
    <div class="jumbotron jumbotron-fluid bg-white">
        <div class="container">
            <br>
            <h1 class="display-8" style="color:#1B396A">Objetivo:</h1>
            <p class="lead">Formar profesionistas en Ingeniería Electrónica con capacidad creativa, emprendedora, de
                análisis y liderazgo, que realicen actividades de diseño, innovación, adaptación y transferencia de
                tecnología para resolver problemas en forma competitiva y atender las necesidades de su entorno con una
                conciencia social y un compromiso con el desarrollo sustentable..</p>
            <br>
        </div>
    </div>
    <!--TERMINA OBJETIVO-->

    <!--COMIENZA PERFIL-->
    <br>
    <div class="jumbotron jumbotron-fluid" style="background-color:#1B396A;">
        <div class="container">
            <br>
            <h1 class="display-8" style="color:#e9ecef">Campo de trabajo:</h1>
            <p class="lead" style="color:#e9ecef">El ingeniero electrónico es un profesional muy flexible, con la
                capacidad de crear su propia empresa o de trabajar tanto en la iniciativa privada como en el sector
                público. Sus competencias incluyen conocimientos de sistemas electrónicos, circuitos y dispositivos
                electrónicos, en los aspectos de diseño, aplicación, operación, selección y mantenimiento, en áreas de
                sistemas digitales, instrumentación, la automatización y la robótica. Capacidad de autoaprendizaje y
                adaptabilidad a los cambios tecnológicos.</p>
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
                <h1 class="featurette-heading"><span style="color:#1B396A">Perfil de egresado:</span></h1><br>
                <ul class="lead">
                    <li>Entender los fundamentos de la tecnología electrónica.</li>
                    <li>Participar la operación de circuitos y sistemas electrónicos.</li>
                    <li>Realizar estudios de posgrado.</li>
                    <li>Comunicarse y colaborar con profesionales de otras disciplinas.</li>
                </ul>
                <h4 style="color:#1B396A">Especialidades:</h4>
                <p class="lead">Sistemas Embebidos para Control.</p>

            </div>
            <div class="col-md-5">
                <img src="{{ asset('assets/backoffice/img/electro3.jpg') }}" class="img-fluid"
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

        <!--COMIENZA PLAN-->

        <br>
        <div class="row featurette">

            <div class="col-md-5">
                <br><br>
                <img src="{{ asset('assets/backoffice/img/electro4.jpg') }}" class="img-fluid"
                    alt="Responsive image">
            </div>

            <div class="col-md-4">
                <br>
                <ul class="lead">
                    <br>
                    <li>Química</li>
                    <li>Cálculo Diferencial</li>
                    <li>Taller de Ética</li>
                    <li>Mecánica Clásica</li>
                    <li>Comunicación Humana</li>
                    <li>Fundamentos de Investigación</li>
                    <li>Cálculo Integral</li>
                    <li>Desarrollo Sustentable</li>
                    <li>Mediciones Eléctricas</li>
                    <li>Tópicos Selectos de Física</li>
                    <li>Probabilidad y Estadística</li>
                    <li>Desarrollo Humano</li>
                    <li>Cálculo Vectorial</li>
                    <li>Procesos de Fabricación</li>
                    <li>Electromagnetismo</li>
                    <li>Algebra Lineal</li>
                    <li>Física de Semiconductores</li>
                    <li>Programación Estructurada</li>
                    <li>Ecuaciones Diferenciales</li>
                    <li>Circuitos Eléctricos I</li>
                    <li>Marco Legal de la Empresa</li>
                    <li>Análisis Numérico</li>
                    <li>Diseño Digital</li>
                    <li>Programación Visual</li>
                    <li>Circuitos Eléctricos II</li>
                    <li>Diodos y Transistores</li>
                    <li>Teoría Electromagnética</li>
                    <li>Máquinas Eléctricas</li>
                    <li>Diseño Digital con VHDL</li>
                    <li>Desarrollo Profesional</li>
                    <li>Control I</li>

                </ul>
            </div>


            <div class="col-md-3">
                <h1 class="featurette-heading"><span style="color:#ffffff">.</span></h1>
                <ul class="lead">

                    <li>Microcontroladores</li>
                    <li>Diseño con Transistores</li>
                    <li>Fundamentos Financieros</li>
                    <li>Taller de Investigación I</li>
                    <li>Control II</li>
                    <li>Amplificadores Operacionales</li>
                    <li>Instrumentación</li>
                    <li>Optoelectrónica</li>
                    <li>Introducción a las Telecomunicaciones</li>
                    <li>Taller de Investigación II</li>
                    <li>Control Digital</li>
                    <li>Electrónica de Potencia</li>
                    <li>Controladores Lógicos Programables</li>
                    <li>Administración General</li>
                    <li>Desarrollo y Evaluación de Proyectos</li>
                    <li>Materias de Especialidad</li>
                    <li>Servicio Social</li>
                    <li>Residencia Profesional</li>
                    <li>Créditos Complementarios</li>
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
