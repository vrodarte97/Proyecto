<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ing. Mecatr&oacute;nica</title>

    <link rel="icon" type="image/png" href="{{ asset('assets/backoffice/img/itcj.ico') }}" sizes="64x64">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/jumbotron/">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  
    <style>
    .header {
      background: url("{{ asset('assets/backoffice/img/meca6.jpg') }}" )  no-repeat center;
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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

</head>

  <body>

    <!--COMIENZA MENU-->
    <header class="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('assets/backoffice/img/dda.png') }}" alt="" width="180" height="180" class="d-inline-block align-top"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav m-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#"><strong>Inicio</strong></a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:#ffffff">
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
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"  style="color:#ffffff;">
                <strong>Oferta Educativa</strong>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="{{url('administracion')}}">Licenciatura en Administraci&oacute;n</a></li>
                <li><a class="dropdown-item" href="{{url('contador')}}">Contador P&uacute;blico</a></li>
                <li><a class="dropdown-item" href="{{url('electromecanica')}}">Ingenier&iacute;a Electromec&aacute;nica</a></li>
                <li><a class="dropdown-item" href="{{url('mecanica')}}">Ingenier&iacute;a Mec&aacute;nica</a></li>
                <li><a class="dropdown-item" href="{{url('sistemas')}}">Ingenier&iacute;a en Sistemas Computacionales</a></li>
                <li><a class="dropdown-item" href="{{ url('electronica') }}">Ingenier&iacute;a
                  Electr&oacute;nica</a></li>
                <li><a class="dropdown-item" href="{{url('tics')}}">Ingenier&iacute;a en Tecnolog&iacute;as de la Informaci&oacute;n y Comunicaciones</a></li>
                <li><a class="dropdown-item" href="{{url('ige')}}">Ingenier&iacute;a en Gesti&oacute;n Empresarial</a></li>
                <li><a class="dropdown-item" href="{{url('electrica')}}">Ingenier&iacute;a El&eacute;ctrica</a></li>
                <li><a class="dropdown-item" href="{{url('industrial')}}">Ingenier&iacute;a Industrial</a></li>
                <li><a class="dropdown-item" href="{{url('logistica')}}">Ingenier&iacute;a en Log&iacute;stica</a></li>
                <li><a class="dropdown-item" href="{{url('mecatronica')}}">Ingenier&iacute;a en Mecatr&oacute;nica</a></li>
              </ul>
            </li>

            
          </ul>
          <form class="d-flex">
           
            <a class="btn btn-primary" type="submit" href="{{url('login')}}">Iniciar Sesi&oacute;n</a>
          </form>
        </div>
      </div>
    </nav>
    <div class="container">
      <br>
      <div class="centered"><h1 class="display-1 animate__animated animate__fadeInLeft" style="color: #ffffff"><strong><br>Ingenieria Mecatr&oacute;nica<strong></h1></div>
    </div>
  </header>
  <!--TERMINA MENU-->

  <!--COMIENZA OBJETIVO-->
  <br>
  <div class="jumbotron jumbotron-fluid bg-white">
    <div class="container">
      <br>
      <h1 class="display-8" style="color:#1B396A">Objetivo:</h1>
      <p class="lead">Formar profesionistas en la Ingenier&iacute;a Mecatr&oacute;nica con capacidad anal&iacute;tica, cr&iacute;tica y creativa que le permita dise&ntilde;ar, proyectar, construir, innovar y administrar equipos mecatr&oacute;nicos en el sector social y productivo; as&iacute; como integrar, operar y mantenerlos con un compromiso &eacute;tico y de calidad en un marco de desarrollo sustentable.</p>
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
      <p class="lead" style="color:#e9ecef">El egresado de la carrera de Ingenier&iacute;a Mecatr&oacute;nica, tendr&aacute; las aptitudes y destrezas para desempe&ntilde;arse entre otras, en las siguientes industrias: industria automotriz de ensamble y producci&oacute;n de partes, industria metal-mec&aacute;nica, industria qu&iacute;mica. industria petroqu&iacute;mica, industria de alimentos. Adem&aacute;s, en las actividades siguientes: promoci&oacute;n y activaci&oacute;n de empresas de servicios, Como investigador, como gestor tecnol&oacute;gico en proyectos de mecatr&oacute;nica y docencia.</p>
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
           <li>Ejercer su profesi&oacute;n dentro de un marco legal, teniendo un sentido de responsabilidad social.</li>
           <li>Analizar, sintetizar, dise&ntilde;ar, simular, construir e innovar productos, procesos, equipos y sistemas mecatr&oacute;nicos.</li>
           <li>Integrar, instalar, construir, optimizar, operar, controlar, mantener, administrar y/o automatizar sistemas mec&aacute;nicos.</li>
           <li>Evaluar y generar proyectos Industriales y de car&aacute;cter social.</li>
           <li>Coordinar y dirigir grupos multidisciplinarios fomentando el trabajo en equipo.</li>
            </ul>
            <h4 style="color:#1B396A">Especialidades:</h4>
            <p class="lead">Automatizaci&oacute;n y Manufactura Industrial.</p>
            
      </div>
      <div class="col-md-5">
        <img src="{{ asset('assets/backoffice/img/meca7.jpg') }}" class="img-fluid" alt="Responsive image">
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
        <img src="{{ asset('assets/backoffice/img/meca8.jpg') }}" class="img-fluid" alt="Responsive image">
      </div>

      <div class="col-md-4">
        <br>
        <ul  class="lead">
          <br>
            <li>Qu&iacute;mica</li>
            <li>C&aacute;lculo Diferencial</li>
            <li>Taller de &eacute;tica</li>
            <li>Dibujo Asistido por Computadora</li>
            <li>Metrolog&iacute;a y Normalizaci&oacute;n</li>
            <li>Fundamentos de Investigaci&oacute;n</li>
            <li>C&aacute;lculo Integral</li>
            <li>&aacute;lgebra Lineal</li>
            <li>Ciencia e Ingenier&iacute;a de Materiales</li>
            <li>Programaci&oacute;n B&aacute;sica</li>
            <li>Estad&iacute;stica y Control de Calidad</li>
            <li>Administraci&oacute;n y Contabilidad</li>
            <li>C&aacute;lculo Vectorial</li>
            <li>Procesos de Fabricaci&oacute;n</li>
            <li>Electricidad y Magnetismo</li>
            <li>Est&aacute;tica</li>
            <li>M&eacute;todos Num&eacute;ricos</li>
            <li>Desarrollo Sustentable</li>
            <li>Ecuaciones Diferenciales</li>
            <li>Fundamentos de Termodin&aacute;mica</li>
            <li>Mec&aacute;nica de Materiales</li>
            <li>Din&aacute;mica</li>
            <li>An&aacute;lisis de Circuitos El&eacute;ctricos</li>
            <li>M&aacute;quinas El&eacute;ctricas</li>
            <li>Electr&oacute;nica Anal&oacute;gica</li>
            <li>Mecanismos</li>
        </ul>
      </div> 

      
          <div class="col-md-3">
            <h1 class="featurette-heading"><span style="color:#ffffff">.</span></h1>
            <ul  class="lead">
             <li>Electr&oacute;nica Anal&oacute;gica</li>
             <li>Mecanismos</li>
              <li>An&aacute;lisis de Fluidos</li>
              <li>Taller de Investigaci&oacute;n I</li>
              <li>Electr&oacute;nica de Potencia Aplicada</li>
              <li>Instrumentaci&oacute;n</li>
              <li>Dise&ntilde;o de Elementos Mec&aacute;nicos</li>
              <li>Electr&oacute;nica Digital</li>
              <li>An&aacute;lisis Vibraciones</li>
              <li>Taller de Investigaci&oacute;n II</li>
              <li>Din&aacute;mica de Sistemas</li>
              <li>Manufactura Avanzada</li>
              <li>Circuitos Hidr&aacute;ulicos y Neum&aacute;ticos</li>
              <li>Mantenimiento</li>
              <li>Microcontroladores</li>
              <li>Programaci&oacute;n Avanzada</li>
              <li>Control</li>
              <li>Formulaci&oacute;n y Evaluaci&oacute;n de Proyectos</li>
              <li>Controladores L&oacute;gicos Programables</li>
              <li>Rob&oacute;tica</li>
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
       <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

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
          <h5 class="text-uppercase">Edificio Guillot: Av. Tecnol&oacute;gico #1340 Fracc. El Crucero CP 32500</h5>
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
    <a class="text-white" href="http://itcj.edu.mx/"><center><img src="{{ asset('assets/backoffice/img/tecnm.png') }}" alt="" width="180" height="100" class="d-inline-block align-top"></center></center></a><br>Instituto Tecnol&oacute;gico de Ciudad Ju&aacute;rez: © 2021 Copyright.</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->



  </body>
</html>