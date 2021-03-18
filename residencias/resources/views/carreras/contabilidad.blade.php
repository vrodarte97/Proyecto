<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contabilidad</title>

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
            background: url("{{ asset('assets/backoffice/img/conta3.jpg') }}") no-repeat center;
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
                                        Administraci&oacute;n</a></li>
                                <li><a class="dropdown-item" href="{{ url('contador') }}">Contador P&uacute;blico</a></li>
                                <li><a class="dropdown-item" href="{{ url('electronica') }}">Ingenier&iacute;a
                                  Electr&oacute;nica</a></li>
                                <li><a class="dropdown-item" href="{{ url('electromecanica') }}">Ingenier&iacute;a
                                  Electromecanica</a></li>  
                                <li><a class="dropdown-item" href="{{ url('mecanica') }}">Ingenier&iacute;a Mec&aacute;nica</a></li>
                                <li><a class="dropdown-item" href="{{ url('sistemas') }}">Ingenier&iacute;a en Sistemas
                                        Computacionales</a></li>
                                <li><a class="dropdown-item" href="{{ url('electronica') }}">Ingenier&iacute;a
                                        Electr&oacute;nica</a></li>
                                <li><a class="dropdown-item" href="{{ url('tics') }}">Ingenier&iacute;a en Tecnolog&iacute;as de la
                                        Informaci&oacute;n y Comunicaciones</a></li>
                                <li><a class="dropdown-item" href="{{ url('ige') }}">Ingenier&iacute;a en Gesti&oacute;n
                                        Empresarial</a></li>
                                <li><a class="dropdown-item" href="{{ url('electrica') }}">Ingenier&iacute;a El&eacute;ctrica</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ url('industrial') }}">Ingenier&iacute;a Industrial</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ url('logistica') }}">Ingenier&iacute;a en Log&iacute;stica</a>
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
                <h1 class="display-1 animate__animated animate__fadeInLeft" style="color: #ffffff"><strong><br>Contador
                        P&uacute;blico<strong></h1>
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
            <p class="lead">Formar profesionales competitivos, capaces de dise&ntilde;ar, establecer, aplicar, controlar y
                evaluar sistemas de informaci&oacute;n administrativa, financiera y fiscal, para la toma de desiciones de las
                entidades econ&oacute;micas nacionales e internacionales, con una actitud &eacute;tica, cr&iacute;tica, emprenderoda y de
                liderazgo, a trav&eacute;s de la investigaci&oacute;n y el uso de la tecnolog&iacute;a de la informaci&oacute;n y la comunicaci&oacute;n,
                fomentado el desarrollo sustentable.</p>
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
            <p class="lead" style="color:#e9ecef"><b>El egresado tendr&aacute; competencias para trabajar en:</b><br></p>
            <ul class="lead" style="color:#e9ecef">
                <li>Dise&ntilde;ar, implementar y evaluar sistemas de infromaci&oacute;n contable, administrativa, fiscal y
                    financiera.</li>
                <li>Asesorar y participar en la plamneaci&oacute;n financiera para la toma de decisiones.</li>
                <li>Asesorar a las organizaciones en el cumplimiento de las disposiciones fisclaes, mercantiles,
                    laborales y civiles.</li>
                <li>Realizar funciones de contralor&iacute;a, custodia y administraci&oacute;n de bienes.</li>
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
                <h1 class="featurette-heading"><span style="color:#1B396A">Perfil del egresado:</span></h1><br>
                <p class="lead">El contador es un profesiona, indispensable en el desempe&ntilde;o de las entidades p&uacute;blicas y
                    privadas, de todo tama&ntilde;o y giro. En la actualidad destaca su funci&oacute;n como asesor en toma de
                    decisiones, por sus capacidades para generar, analizar e interpretar informaci&oacute;n financiera. Tiene
                    f&eacute; p&uacute;bblica, diferentes leyes y c&oacute;digos lo se&ntilde;alan como el &uacute;nico autorizado para firmar informaci&oacute;n
                    financiera y auditorias.<br></p>
                <h4 style="color:#1B396A">Especialidades:</h4>
                <p class="lead">Consultor&iacute;a Fiscal y Auditor&iacute;a Integral, Alta Direcci&oacute;n en Gerencia Financiera y Gesti&oacute;n
                    de Costos .</p>

            </div>
            <div class="col-md-5">
                <img src="{{ asset('assets/backoffice/img/conta4.jpg') }}" class="img-fluid" alt="Responsive image">
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
                <img src="{{ asset('assets/backoffice/img/conta5.jpg') }}" class="img-fluid" alt="Responsive image">
            </div>


            <div class="col-md-4">
                <br>
                <ul class="lead">
                    <br>
                    <li>Introducci&oacute;n a la contabilidad financiera</li>
                    <li>Administraci&oacute;n</li>
                    <li>&aacute;lgebra lineal</li>
                    <li>Fundamentos de derecho</li>
                    <li>Desarrollo humano</li>
                    <li>Fundamentos de investigaci&oacute;n</li>
                    <li>Tutor&iacute;as</li>
                    <li>Contabilidad Financiera I</li>
                    <li>Taller de &eacute;tica</li>
                    <li>Calculo diferencial e integral</li>
                    <li>Derecho mercantil</li>
                    <li>Din&aacute;mica social</li>
                    <li>Estad&iacute;stica administrativa</li>
                    <li>Comunicaci&oacute;n humana</li>
                    <li>Contabilidad financiera II</li>
                    <li>Mercadotecnia</li>
                    <li>Matem&aacute;ticas financieras</li>
                    <li>Derecho laboral y seg. Social</li>
                    <li>Gesti&oacute;n de talento humano</li>
                    <li>Taller de inform&aacute;tica I</li>
                    <li>Contabilidad de sociedades</li>
                    <li>Sistemas de costos hist&oacute;ricos</li>
                    <li>Microeconomia</li>
                    <li>Derecho tributario</li>
                    <li>Fundamentos de auditoria</li>
                    <li>Taller de Investigaci&oacute;n I</li>
                    <li>Desarrollo sustentable</li>
                    <li>Contabilidad avanzada</li>
                    <li>Sistemas de costos</li>
                </ul>
            </div>


            <div class="col-md-3">
                <h1 class="featurette-heading"><span style="color:#ffffff">.</span></h1>
                <ul class="lead">


                    <li>Macroeconomia</li>
                    <li>Impuestos personas morales</li>
                    <li>Auditor&iacute;a para efectos financieros</li>
                    <li>Taller de investigaci&oacute;n II</li>
                    <li>An&aacute;lisis e interpretaci&oacute;n de Estados financieros</li>
                    <li>Contabilidad Internacional</li>
                    <li>Gesti&oacute;n y toma de decisiones</li>
                    <li>Administraci&oacute;n de la Prod. y de las Op</li>
                    <li>Impuestos personas f&iacute;sicas</li>
                    <li>Auditor&iacute;a para Efectos fiscales</li>
                    <li>Econom&iacute;a Internacional</li>
                    <li>Planeaci&oacute;n Financiera</li>
                    <li>Seminario de contabilidad</li>
                    <li>Administraci&oacute;n estrat&eacute;gica</li>
                    <li>Elaboraci&oacute;n y evaluaci&oacute;n de proyectos de inversi&oacute;n</li>
                    <li>Otros impuestos y contribuciones</li>
                    <li>Materia de especialidad</li>
                    <li>Taller de inform&aacute;tica II</li>
                    <li>Alternativas de inversi&oacute;n y financiamiento</li>
                    <li>Materias de especialidad</li>
                    <li>Servicio social</li>
                    <li>Residencia profesional</li>
                    <li>otros cr&eacute;ditos</li>
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
                        <h5 class="text-uppercase">Edificio Guillot: Av. Tecnol&oacute;gico #1340 Fracc. El Crucero CP 32500
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
                <p> Proyecto de residencias para el departamento de Desarrollo Acad&eacute;mico. <br><br> Elaborado por:<br>
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
