<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administraci&oacute;n</title>

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
            background: url("{{ asset('assets/backoffice/img/admin4.jpg') }}") no-repeat center;
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
                            <a class="nav-link active" aria-current="page" href="{{ url('/') }}"><strong>Inicio</strong></a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false" style="color:#ffffff">
                                <strong>Conoce nuestro Instituto</strong>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item"
                                        href="{{ url('administrativo') }}">Administración/Servicios escolares</a></li>
                                <li><a class="dropdown-item" href="{{ url('extraescolares') }}">Actividades
                                        Extraescolares</a></li>
                                <li><a class="dropdown-item" href="{{ url('audiovisual') }}">Audiovisual/400s</a></li>
                                <li><a class="dropdown-item" href="{{ url('800') }}">Aulas 800s</a></li>
                                <li><a class="dropdown-item" href="{{ url('biblioteca') }}">Biblioteca</a></li>
                                <li><a class="dropdown-item" href="{{ url('computo') }}">Centro de computo</a></li>
                                <li><a class="dropdown-item" href="{{ url('idiomas') }}">Centro de Idiomas</a></li>
                                <li><a class="dropdown-item" href="{{ url('ciencias-basicas') }}">Ciencias
                                        b&aacute;sicas/300s</a></li>
                                <li><a class="dropdown-item" href="{{ url('elect') }}">Departamento de
                                        el&eacute;ctrica y
                                        electr&oacute;nica</a></li>
                                <li><a class="dropdown-item" href="{{ url('dpto-industrial') }}">Departamento de
                                        industrial</a></li>
                                <li><a class="dropdown-item" href="{{ url('dpto-sistemas') }}">Departamento de
                                        sistemas</a></li>
                                <li><a class="dropdown-item" href="{{ url('division-metal') }}">División de
                                        estudios/Metal mec&aacute;nica</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ url('guillot') }}">Edificio Guillot</a></li>
                                <li><a class="dropdown-item" href="{{ url('gestion-vinculacion') }}">Gesti&oacute;n y
                                        vinculaci&oacute;n</a></li>
                                <li><a class="dropdown-item" href="{{ url('laboratorio-electrica') }}">Laboratorio de
                                        el&eacute;ctrica</a></li>
                                <li><a class="dropdown-item" href="{{ url('manufactura') }}">Laboratorio de
                                        Manufactura</a></li>
                                <li><a class="dropdown-item" href="{{ url('lab-mecatronica') }}">Laboratorio de
                                        Mecatr&oacute;nica</a></li>
                                <li><a class="dropdown-item" href="{{ url('metal') }}">Laboratorio de Metal
                                        Mec&aacute;nica</a></li>
                                <li><a class="dropdown-item" href="{{ url('quimica') }}">Laboratorio de
                                        Qu&iacute;mica</a></li>
                                <li><a class="dropdown-item" href="{{ url('posgrado') }}">Posgrado/Aula Magna</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ url('rivera-lara') }}">Rivera Lara/ 100s,
                                        200s</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false" style="color:#ffffff;">
                                <strong>Oferta Educativa</strong>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="{{ url('administracion') }}">Licenciatura en
                                        Administraci&oacute;n</a></li>
                                <li><a class="dropdown-item" href="{{ url('contador') }}">Contador P&uacute;blico</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ url('electromecanica') }}">Ingenier&iacute;a
                                        Electromec&aacute;nica</a></li>
                                <li><a class="dropdown-item" href="{{ url('mecanica') }}">Ingenier&iacute;a
                                        Mec&aacute;nica</a></li>
                                <li><a class="dropdown-item" href="{{ url('sistemas') }}">Ingenier&iacute;a en
                                        Sistemas
                                        Computacionales</a></li>
                                <li><a class="dropdown-item" href="{{ url('electronica') }}">Ingenier&iacute;a
                                        Electr&oacute;nica</a></li>
                                <li><a class="dropdown-item" href="{{ url('tics') }}">Ingenier&iacute;a en
                                        Tecnolog&iacute;as de la
                                        Informaci&oacute;n y Comunicaciones</a></li>
                                <li><a class="dropdown-item" href="{{ url('ige') }}">Ingenier&iacute;a en
                                        Gesti&oacute;n
                                        Empresarial</a></li>
                                <li><a class="dropdown-item" href="{{ url('electrica') }}">Ingenier&iacute;a
                                        El&eacute;ctrica</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ url('industrial') }}">Ingenier&iacute;a
                                        Industrial</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ url('logistica') }}">Ingenier&iacute;a en
                                        Log&iacute;stica</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ url('mecatronica') }}">Ingenier&iacute;a en
                                        Mecatr&oacute;nica</a></li>
                            </ul>
                        </li>


                    </ul>
                    <form class="d-flex">

                        <a class="btn btn-primary" type="submit" href="{{ url('login') }}">Iniciar Sesi&oacute;n</a>
                    </form>
                </div>
            </div>
        </nav>


        <div class="container">
            <br>
            <div class="centered">
                <h1 class="display-1 animate__animated animate__fadeInLeft" style="color: #ffffff">
                    <strong><br>Licenciatura en Administraci&oacute;n<strong>
                </h1>
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
            <p class="lead">Es un profesional a nivel superior especializado en racionalizar y optimizar el
                funcionamiento de organizaciones del sector productivo y de servicios a trav&eacute;s de la
                planeaci&oacute;n,
                instrumentaci&oacute;n, evaluaci&oacute;n, direcci&oacute;n y control de los recursos y actividades
                inherentes a la
                administraci&oacute;n de las mismas.</p>
            <br>
        </div>
    </div>
    <!--TERMINA OBJETIVO-->

    <!--COMIENZA PERFIL-->
    <br>
    <div class="jumbotron jumbotron-fluid" style="background-color:#1B396A;">
        <div class="container">
            <br>
            <h1 class="display-8" style="color:#e9ecef">Perfil del alumno:</h1>
            <p class="lead" style="color:#e9ecef">Dise&ntilde;ar e innovar estructuras administrativas y procesos, con
                base en
                las necesidades de las organizaciones para competir eficientemente en mercados globales.<br></p>
            <p class="lead" style="color:#e9ecef">Desarrollar y aplicar habilidades directivas en el dise&ntilde;o,
                creaci&oacute;n,
                gesti&oacute;n, desarrollo, fortalecimiento e innovacio&oacute;n de las organizaciones, del sector
                productivo y de
                servicios con una orientaci&oacute;n sistem&aacute;tica y sustentable para la toma de decisiones en
                forma efectiva.
            </p>
            <p class="lead" style="color:#e9ecef">Coordinar eficientemente los recursos humanos, tecnol&oacute;gicos,
                materiales y financieros de la organizaci&oacute;n con visi&oacute;n compartida, con el fin de
                suministrar bienes y
                servicios de calidad. <br></p>
            <p class="lead" style="color:#e9ecef">Dise&ntilde;ar e implemenmtar estrategias en las &aacute;reas de la
                mercadotecnia;
                los recursos humanos y de la log&iacute;stica y comerccio internacional, de acuerdo a oportunidades y
                amenazas
                del entono y giro de las organizaciones.</p>
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
                <h1 class="featurette-heading">Oportunidades de trabajo <span style="color:#1B396A">y
                        especialidades:</span></h1><br>
                <p class="lead">La necesidad de personas capacitadas para la administraci&oacute;n de organizaciones
                    dentro del
                    sector productivo y de servicios en nuestra comunidad, oferta un sin n&uacute;mero de espacios
                    laborales
                    para los egresados de la Licenciatura en Administraci&oacute;n.<br></p>
                <h4 style="color:#1B396A">Especialidades:</h4>
                <p class="lead">Mercadotecnia, Recursos Humanos y Comercio Internacional.</p>
                <h4 style="color:#1B396A">Las oportunidades de especializaci&oacute;n incluyen las siguientes
                    maestrias:<br>
                </h4>
                <ul class="lead">
                    <br>
                    <li><strong>Negocios internacionales</strong></li>
                    <li><strong>Ingenier&iacute;a Administrativa</strong></li>
                    <li><strong>Sistemas Administrativos</strong></li>
                    <li><strong>Planificaci&oacute;n Industrial</strong></li>
                    <li><strong>Ciencias de la Educaci&oacute;n</strong></li>
                    <li><strong>Administraci&oacute;n</strong></li>
                    <li><strong>Administraci&oacute;n P&uacute;blica</strong></li>
                    <li><strong>Ciencias de la Administraci&oacute;n</strong></li>
                </ul>
            </div>
            <div class="col-md-5">
                <img src="{{ asset('assets/backoffice/img/admin6.jpg') }}" class="img-fluid" alt="Responsive image">
            </div>
        </div>
        <!--TERMINA OPORTUNIDADES-->
        <br>
        <hr class="featurette-divider">

        <div class="col-md-12" style="text-align: right;">
            <br>
            <h1 class="featurette-heading"><span style="color:#1B396A">Plan de estudios:</span></h1>
        </div>


        <!---div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
        <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
      </div>
    </div-->

        <!--COMIENZA PLAN-->

        <br>
        <div class="row featurette">

            <div class="col-md-5">
                <br><br>
                <img src="{{ asset('assets/backoffice/img/admin5.jpg') }}" class="img-fluid" alt="Responsive image">
            </div>

            <div class="col-md-4">
                <br>
                <ul class="lead">
                    <br>
                    <li>Teor&iacute;a General de la Administraci&oacute;n</li>
                    <li>Funci&oacute;n Administrativa I</li>
                    <li>Funci&oacute;n Administrativa II</li>
                    <li>Gesti&oacute;n Estrat&eacute;gica de Capital Humano I</li>
                    <li>Gesti&oacute;n Estrat&eacute;gica de Capital Humano II</li>
                    <li>Gesti&oacute;n de la Retribuci&oacute;n</li>
                    <li>Plan de Negocios</li>
                    <li>Consultoria Empresarial</li>
                    <li>Inform&aacute;tica para la Administraci&oacute;n</li>
                    <li>Estad&iacute;stica I</li>
                    <li>Estad&iacute;stica II</li>
                    <li>Producci&oacute;n</li>
                    <li>Derecho F&iacute;scal</li>
                    <li>Procesos Estructurales</li>
                    <li>Procesos de Direcci&oacute;n</li>
                    <li>Formulaci&oacute;n y Evaluaci&oacute;n de Proyectos</li>
                    <li>Taller de &eacute;tica</li>
                    <li>Derecho Laboral y Seguridad Social</li>
                    <li>Derecho Empresarial</li>
                    <li>M&eacute;todos Cuantitativos para Administraci&oacute;n</li>
                    <li>Contabilidad General</li>
                    <li>Mezcla de Mercadotecnia</li>
                </ul>
            </div>


            <div class="col-md-3">
                <h1 class="featurette-heading"><span style="color:#ffffff">.</span></h1>
                <ul class="lead">
                    <li>Taller de Investigaci&oacute;n I</li>
                    <li>Costos de Manufactura</li>
                    <li>Taller de Investigaci&oacute;n II</li>
                    <li>Desarrollo Organizacional</li>
                    <li>Fundamentos de Investigaci&oacute;n</li>
                    <li>Comunicaci&oacute;n Corporativa</li>
                    <li>Comportamiento Organizacional</li>
                    <li>Fundamentos de Mercadotecnia</li>
                    <li>Matem&aacute;ticas Aplicadas a la Administraci&oacute;n</li>
                    <li>Administraci&oacute;n de la Calidad</li>
                    <li>Innovaci&oacute;n y Emprendedurismo</li>
                    <li>Economia Internacional</li>
                    <li>Taller de Desarrollo Humano</li>
                    <li>Din&aacute;mica Social</li>
                    <li>Econom&iacute;a Empresarial</li>
                    <li>Administraci&oacute;n Financiera I</li>
                    <li>Administraci&oacute;n Financiera II</li>
                    <li>Diagn&oacute;stico y Evaluaci&oacute;n Empresarial</li>
                    <li>Matem&aacute;ticas Financieras</li>
                    <li>Desarrollo Sustentable</li>
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
            <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/DesarrolloAcademicoITCJ"
                role="button" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <h7>Desarrollo Acad&eacute;mico</h7>

            <!-- Facebook -->
            <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/TecNMCampusCdJuarez"
                role="button" target="_blank"> <i class="fab fa-facebook-f"> </i></a>
            <h7>TecNM Campus Cd. Ju&aacute;rez</h7>

            </section>
            <!-- Section: Social media -->
            <br><br>

            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Edificio Guillot: Av. Tecnol&oacute;gico #1340 Fracc. El Crucero CP
                            32500
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
                        <h5 class="text-uppercase">Cd. Ju&aacute;rez, Chiuahua.</h5>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->

            <!-- Section: Text -->
            <section class="mb-4">
                <p> Proyecto de residencias para el departamento de Desarrollo Acad&eacute;mico. <br><br> Elaborado
                    por:<br>
                    Erick Salvador Luna Gutierrez 16111918<br>
                    V&iacute;ctor Manuel Rodarte Amaro 16111992
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
            </a><br>Instituto Tecnol&oacute;gico de Ciudad Ju&aacute;rez: © 2021 Copyright.</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

</body>

</html>
