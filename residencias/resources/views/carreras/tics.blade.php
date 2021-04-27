<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ing. TICS</title>

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
            background: url("{{ asset('assets/backoffice/img/tics3.jpg') }}") no-repeat center;
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
                <a class="navbar-brand" href="{{ url('/') }}">
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
                            <a class="nav-link dropdown-toggle" href="{{ url('/') }}" id="navbarDropdownMenuLink" role="button"
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
                            <a class="nav-link dropdown-toggle" href="{{ url('/') }}" id="navbarDropdownMenuLink" role="button"
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
                                        Tecnolog&iacute;as de la Informaci&oacute;n y Comunicaciones</a></li>
                                <li><a class="dropdown-item" href="{{ url('ige') }}">Ingenier&iacute;a en
                                        Gesti&oacute;n Empresarial</a></li>
                                <li><a class="dropdown-item" href="{{ url('electrica') }}">Ingenier&iacute;a
                                        El&eacute;ctrica</a></li>
                                <li><a class="dropdown-item" href="{{ url('industrial') }}">Ingenier&iacute;a
                                        Industrial</a></li>
                                <li><a class="dropdown-item" href="{{ url('logistica') }}">Ingenier&iacute;a en
                                        Log&iacute;stica</a></li>
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
                <h1 class="display-1" style="color: #ffffff"><strong><br>Ingenier&iacute;a en Tecnolog&iacute;as de la
                        Informaci&oacute;n y Comunicaciones<strong></h1>
            </div>
        </div>
    </header>
    <!--TERMINA MENU-->



    <!--COMIENZA OBJETIVO-->
    <div class="jumbotron jumbotron-fluid" style="background-color:#1B396A;">
        <div class="container">
            <br>
            <h1 class="display-8" style="color:#e9ecef">Objetivo:</h1>
            <p class="lead" style="color:#e9ecef">Formar profesionistas capaces de integrar y administrar
                tecnolog&iacute;as de la informaci&oacute;n y comunicaciones, que contribuyan a la productividad y el
                logro de los objetivos estrat&eacute;gicos de las organizaciones; caracteriz&aacute;ndose por ser
                l&iacute;deres, cr&iacute;ticos, competentes, &eacute;ticos y con visi&oacute;n empresarial,
                comprometidos con el desarrollo sustentable.</p>
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
            <p class="lead">Cabe se&ntilde;alar que dentro del campo laboral, un Ingeniero en Tecnolog&iacute;as de la
                Informaci&oacute;n y Comunicaciones podr&aacute; desarrollarse en empresas o instituciones
                p&uacute;blicas y privadas tanto a nivel nacional como internacional en donde la innovaci&oacute;n
                tecnol&oacute;gica y la administraci&oacute;n de la tecnolog&iacute;a sean estrat&eacute;gicas.<br></p>
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
            <p class="lead" style="color:#e9ecef">El profesional de esta carrera estar&aacute; formado integralmente
                en:<br></p>
            <ul class="lead" style="color:#e9ecef">
                <li>El desempe&ntilde;o de funciones de consultor&iacute;a y auditor&iacute;a en el campo de las
                    Tecnolog&iacute;as de la informaci&oacute;n y Comunicaciones.</li>
                <li>Crear empresas en el &aacute;mbito de las Tecnolog&iacute;as de la Informaci&oacute;n y
                    Comunicaciones.</li>
                <li>Dise&ntilde;ar, implementar y administrar redes de c&oacute;mputo.</li>
                <li>Administrar proyectos que involucren tecnolog&iacute;as de la informaci&oacute;n y comunicaciones.
                </li>
                <li>Integrar la diferente arquitectura de hardware y administrar plataformas de software.</li>
                <li>Implementar sistemas de seguridad bajo pol&iacute;ticas internas de las organizaciones y
                    est&aacute;ndares aceptados.</li>
                <li>Observar los aspectos legales del uso y explotaci&oacute;n de las tecnolog&iacute;as de la
                    informaci&oacute;n y comunicaciones.</li>
                <li> Desarrollar e implementar sistemas de informaci&oacute;n para el control y la toma de decisiones
                    utilizando metodolog&iacute;as basadas en est&aacute;ndares internacionales.</li>
                <li>Analizar, dise&ntilde;ar y programar dispositivos con software empotrado.</li>
                <li>Utilizar tecnolog&iacute;as y herramientas actuales y emergentes acordes a las necesidades del
                    entorno.</li>
                <li>Integrar soluciones que interact&uacute;en mediante sistemas de comunicaciones.</li>
            </ul>
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
                    <li>Identificar las &aacute;reas de aplicaci&oacute;n de las TIC´s, los elementos que componen un
                        sistema de computo y los diferentes tipos de software.</li>
                    <li>Utilizar los diversos tipos de tecnolog&iacute;as web, conocer las implicaciones actuales de las
                        tecnolog&iacute;as de la informaci&oacute;n y comunicaciones.</li>
                    <li>Identificaci&oacute;n y utilizaci&oacute;n de los diferentes modelos de negocio en internet y la
                        administraci&oacute;n de sus recursos.</li>
                </ul>
                <h4 style="color:#1B396A">Especialidades:</h4>
                <p class="lead">Da click en los botones para m&aacute;s informaci&oacute;n.</p>

                <a type="button" class="btn btn-primary" style="background-color: #1B396A;"
                    href="{{ asset('assets/backoffice/img/esp-redes.jpg') }}" download="info-redes">Redes y seguridad
                    inform&aacute;tica</a>
                <a type="button" class="btn btn-primary" style="background-color: #1B396A;"
                    href="{{ asset('assets/backoffice/img/esp-software.jpg') }}" download="info-redes">Sotware</a>
            </div>
            <div class="col-md-5">
                <img src="{{ asset('assets/backoffice/img/tics4.jpg') }}" class="img-fluid" alt="Responsive image">
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
                <img src="{{ asset('assets/backoffice/img/tics5.jpg') }}" class="img-fluid" alt="Responsive image">
            </div>

            <div class="col-md-4">
                <br>
                <ul class="lead">
                    <br>
                    <li>Calculo Diferencial</li>
                    <li>Fundamentos de Programaci&oacute;n</li>
                    <li>Matem&aacute;ticas Discretas I</li>
                    <li>Introducci&oacute;n a las TIC´s</li>
                    <li>Taller de &eacute;tica</li>
                    <li>Fundamentos de Investigaci&oacute;n</li>
                    <li>Calculo integral</li>
                    <li>Programaci&oacute;n I</li>
                    <li>Matem&aacute;ticas II</li>
                    <li>Probabilidad y Estad&iacute;stica</li>
                    <li>Contabilidad de Costos</li>
                    <li>Algebra Lineal</li>
                    <li>Estructura y Organizaci&oacute;n de Datos</li>
                    <li>Matem&aacute;ticas para la Toma de Decisiones</li>
                    <li>Fundamentos de Bases de Datos</li>
                    <li>Electricidad y Magnetismo</li>
                    <li>Administraci&oacute;n Gerencial</li>
                    <li>An&aacute;lisis de Se&ntilde;ales y Sistemas de Comunicaci&oacute;n</li>
                    <li>Programaci&oacute;n II</li>
                    <li>Administraci&oacute;n de Proyectos</li>
                    <li>Taller de Base de Datos</li>
                    <li>Circuitos El&eacute;ctricos y Electr&oacute;nicos</li>
                    <li>Ingenier&iacute;a de Software I</li>
                    <li>Fundamentos de Redes</li>
                    <li>Desarrollo Sustentable</li>
                </ul>
            </div>


            <div class="col-md-3">
                <h1 class="featurette-heading"><span style="color:#ffffff">.</span></h1>
                <ul class="lead">
                    <li>Desarrollo de Emprendedores</li>
                    <li>Base de Datos Distribuidas</li>
                    <li>Arquitectura de Computadoras</li>
                    <li>Ingenier&iacute;a de Software II</li>
                    <li>Redes de Computadoras</li>
                    <li>Programaci&oacute;n Web</li>
                    <li>Negocios Electr&oacute;nicos</li>
                    <li>Ingenier&iacute;a del Conocimiento</li>
                    <li>Sistemas Operativos I</li>
                    <li>Tecnolog&iacute;as Inal&aacute;mbricas</li>
                    <li>Redes Emergentes</li>
                    <li>Programaci&oacute;n para Dispositivos M&oacute;viles</li>
                    <li>Auditor&iacute;a en Tecnolog&iacute;a de Informaci&oacute;n</li>
                    <li>Taller de Investigaci&oacute;n I</li>
                    <li>Sistemas Operativos II</li>
                    <li>Administraci&oacute;n y Seguridad de Redes</li>
                    <li>Telecomunicaciones</li>
                    <li>Interacci&oacute;n Humano Computadora</li>
                    <li>Taller de Investigaci&oacute;n II</li>
                    <li>Materias de Especialidad</li>
                    <li>Servicio Social</li>
                    <li>Residencia Profesional</li>
                    <li>Otros Cr&eacute;ditos</li>

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
                            32500</h5>
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
