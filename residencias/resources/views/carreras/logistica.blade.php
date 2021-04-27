<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ing. logistica</title>

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
            background: url("{{ asset('assets/backoffice/img/log3.jpg') }}") no-repeat center;
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
                    <strong><br>Ingenier&iacute;a Logistica<strong>
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
            <p class="lead">Formar integralmente ingenieros capaces de posicionar competitivamente en los mercados a las
                organizaciones productoras de bienes y servicios, al dise&ntilde;ar y mejorar sus procesos
                log&iacute;sticos a trav&eacute;s
                de la cadena de suministro, propiciando satisfacci&oacute;n desde el proveedor hasta al cliente.</p>
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
            <p class="lead" style="color:#e9ecef">El Ingeniero en Log&iacute;stica se puede desempe&ntilde;ar tanto en
                el sector
                privado de la industria y de servicios, como en el sector p&uacute;blico.<br></p>
            <p class="lead" style="color:#e9ecef">En la industria de manufactura de exportaci&oacute;n se puede
                administrar los
                sistemas de flujo de materiales; dirigir actividades de carga, tr&aacute;fico y seguridad de productos;
                dise&ntilde;ar
                y administrar almacenes y centros de distribuci&oacute;n; seleccionar medios de transporte de carga y
                consolidaci&oacute;n de cargas; planear la configuraci&oacute;n de la red desde el proveedor hasta el
                cliente;
                administrar el flujo de informaci&oacute;n y procesamiento de pedidos; realizar operaciones de
                importaci&oacute;n -
                exportaci&oacute;n con apego a la legislaci&oacute;n aduanera.<br></p>
            <p class="lead" style="color:#e9ecef">En la industria de servicios se puede enfocar a los servicios
                log&iacute;sticos en turismo, planeaci&oacute;n de suministros para magnos eventos,
                administraci&oacute;n de suministros y
                espacios en centros hospitalarios.<br></p>
            <p class="lead" style="color:#e9ecef">En el sector p&uacute;blico sus actividades profesionales se enfocan
                en:
                planeaci&oacute;n de suministros para los procesos en obras o servicios p&uacute;blicos,
                administraci&oacute;n de centros de
                almacenamiento y distribuci&oacute;n de suministros del sector gubernamental.</p>

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
                    <li>Capacidad anal&iacute;tica abstracta multidisciplinaria.</li>
                    <li>Trabajo en equipo.</li>
                    <li>Uso de tecnolog&iacute;as de informaci&oacute;n.</li>
                    <li>Gestionar los procesos log&iacute;sticos en el sistema de producci&oacute;n de bienes y
                        servicios con
                        orientaci&oacute;n de servicio al cliente.</li>
                    <li>Poseer la capacidad de an&aacute;lisis, s&iacute;ntesis y abstracci&oacute;n de la realidad.
                    </li>
                    <li>Poseer las habilidades de comunicaci&oacute;n verbal y escrita.</li>
                </ul>
                <br>
                <h2 style="color:#1B396A">Especialidades:</h2>
                <ul class="lead">
                    <li>Planeci&oacute;n y distribuci&oacute;n</li>
                    <li>Autotransporte y distribuci&oacute;n de carga</li>
                </ul>

            </div>
            <div class="col-md-5">
                <img src="{{ asset('assets/backoffice/img/log4.jpg') }}" class="img-fluid" alt="Responsive image">
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
                <img src="{{ asset('assets/backoffice/img/log5.jpg') }}" class="img-fluid" alt="Responsive image">
            </div>

            <div class="col-md-4">
                <br>
                <ul class="lead">
                    <br>
                    <li>Introducci&oacute;n a la Ingenier&iacute;a en Log&iacute;stica</li>
                    <li>C&aacute;lculo Diferencial</li>
                    <li>Qu&iacute;mica</li>
                    <li>Fundamentos de Administraci&oacute;n</li>
                    <li>Dibujo Asistido por Computadora</li>
                    <li>Econom&iacute;a</li>
                    <li>Taller de &eacute;tica</li>
                    <li>C&aacute;lculo Integral</li>
                    <li>Probabilidad y Estad&iacute;stica</li>
                    <li>Desarrollo Humano y Organizacional</li>
                    <li>Fundamentos de Investigaci&oacute;n</li>
                    <li>Contabilidad y Costos</li>
                    <li>Cadena de Suministro</li>
                    <li>&aacute;lgebra Lineal</li>
                    <li>Estad&iacute;stica Inferencial I</li>
                    <li>Fundamentos de Derecho</li>
                    <li>F&iacute;sica I</li>
                    <li>Finanzas</li>
                    <li>Compras</li>
                    <li>Tipolog&iacute;a del Producto</li>
                    <li>Estad&iacute;stica Inferencial II</li>
                    <li>Higiene y Seguridad</li>
                    <li>F&iacute;sica II</li>
                    <li>Base de Datos</li>
                    <li>Almacenes</li>
                </ul>
            </div>


            <div class="col-md-3">
                <h1 class="featurette-heading"><span style="color:#ffffff">.</span></h1>
                <ul class="lead">
                    <li>Inventarios</li>
                    <li>Investigaci&oacute;n de Operaciones I</li>
                    <li>Desarrollo Sustentable</li>
                    <li>Procesos de Fabricaci&oacute;n</li>
                    <li>Mercadotecnia</li>
                    <li>Tr&aacute;fico y Transporte</li>
                    <li>Cultura de Calidad</li>
                    <li>Investigaci&oacute;n de Operaciones II</li>
                    <li>Legislaci&oacute;n Aduanera</li>
                    <li>Taller de Investigaci&oacute;n II</li>
                    <li>Empaque, Envase y Embalaje</li>
                    <li>Servicio al Cliente</li>
                    <li>Programaci&oacute;n de Procesos Productivos</li>
                    <li>Modelos de Simulaci&oacute;n en Log&iacute;stica</li>
                    <li>Comercio Internacional</li>
                    <li>Taller de Investigaci&oacute;n II</li>
                    <li>Ingenier&iacute;a Econ&oacute;mica</li>
                    <li>Innovaci&oacute;n</li>
                    <li>Formulaci&oacute;n y Evaluaci&oacute;n de Proyectos</li>
                    <li>Servicio Social*</li>
                    <li>Gesti&oacute;n de Proyectos</li>
                    <li>Especialidad*</li>
                    <li>Residencia Profesional*</li>
                    <li>Otros cr&eacute;ditos*</li>
                    <br>
                </ul>
                <p class="lead"><b> *Podr&aacute;n cursarse &eacute;stos cr&eacute;ditos desde semestres anteriores</b>
                </p>


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
