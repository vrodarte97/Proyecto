<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ing. TICS</title>

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
      background: url("{{ asset('assets/backoffice/img/liebre11.jpg') }}" )  no-repeat center;
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
                <li><a class="dropdown-item" href="{{url('administracion')}}">Licenciatura en Administración</a></li>
                <li><a class="dropdown-item" href="{{url('contador')}}">Contador Público</a></li>
                <li><a class="dropdown-item" href="{{url('electromecanica')}}">Ingeniería Electromecánica</a></li>
                <li><a class="dropdown-item" href="{{url('mecanica')}}">Ingeniería Mecánica</a></li>
                <li><a class="dropdown-item" href="{{url('sistemas')}}">Ingeniería en Sistemas Computacionales</a></li>
                <li><a class="dropdown-item" href="{{url('electromecanica')}}">Ingeniería Electrónica</a></li>
                <li><a class="dropdown-item" href="{{url('tics')}}">Ingeniería en Tecnologías de la Información y Comunicaciones</a></li>
                <li><a class="dropdown-item" href="{{url('ige')}}">Ingeniería en Gestión Empresarial</a></li>
                <li><a class="dropdown-item" href="{{url('electrica')}}">Ingeniería Eléctrica</a></li>
                <li><a class="dropdown-item" href="{{url('industrial')}}">Ingeniería Industrial</a></li>
                <li><a class="dropdown-item" href="{{url('logistica')}}">Ingeniería en Logística</a></li>
                <li><a class="dropdown-item" href="{{url('mecatronica')}}">Ingeniería en Mecatrónica</a></li>
              </ul>
            </li>

            
          </ul>
          <form class="d-flex">
           
            <a class="btn btn-primary" type="submit" href="{{url('login')}}">Iniciar Sesión</a>
          </form>
        </div>
      </div>
    </nav>
    <div class="container">
      <br>
      <div class="centered"><h1  class="display-1" style="color: #ffffff"><strong><br>Ingeniería en Tecnologías de la Información y Comunicaciones<strong></h1></div>
    </div>
  </header>
  <!--TERMINA MENU-->

  

  <!--COMIENZA OBJETIVO-->
  <div class="jumbotron jumbotron-fluid" style="background-color:#1B396A;">
    <div class="container">
      <br>
      <h1 class="display-8" style="color:#e9ecef">Objetivo:</h1>
      <p class="lead" style="color:#e9ecef">Formar profesionistas capaces de integrar y administrar tecnologías de la información y comunicaciones, que contribuyan a la productividad y el logro de los objetivos estratégicos de las organizaciones; caracterizándose por ser líderes, críticos, competentes, éticos y con visión empresarial, comprometidos con el desarrollo sustentable.</p>
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
      <p class="lead">Cabe señalar que dentro del campo laboral, un Ingeniero en Tecnologías de la Información y Comunicaciones podrá desarrollarse en empresas o instituciones públicas y privadas tanto a nivel nacional como internacional en donde la innovación tecnológica y la administración de la tecnología sean estratégicas.<br></p>   
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
       <p class="lead" style="color:#e9ecef">El profesional de esta carrera estará formado integralmente en:<br></p>
       <ul class="lead" style="color:#e9ecef">
         <li>El desempeño de funciones de consultoría y auditoría en el campo de las Tecnologías de la información y Comunicaciones.</li>
         <li>Crear empresas en el ámbito de las Tecnologías de la Información y Comunicaciones.</li>
         <li>Diseñar, implementar y administrar redes de cómputo.</li>
         <li>Administrar proyectos que involucren tecnologías de la información y comunicaciones.</li>
         <li>Integrar la diferente arquitectura de hardware y administrar plataformas de software.</li>
         <li>Implementar sistemas de seguridad bajo políticas internas de las organizaciones y estándares aceptados.</li>
         <li>Observar los aspectos legales del uso y explotación de las tecnologías de la información y comunicaciones.</li>
         <li> Desarrollar e implementar sistemas de información para el control y la toma de decisiones utilizando metodologías basadas en estándares internacionales.</li>
         <li>Analizar, diseñar y programar dispositivos con software empotrado.</li>
         <li>Utilizar tecnologías y herramientas actuales y emergentes acordes a las necesidades del entorno.</li>
         <li>Integrar soluciones que interactúen mediante sistemas de comunicaciones.</li>
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
          <li>Identificar las áreas de aplicación de las TIC´s, los elementos que componen un sistema de computo y los diferentes tipos de software.</li>
          <li>Utilizar los diversos tipos de tecnologías web, conocer las implicaciones actuales de las tecnologías de la información y comunicaciones.</li>
          <li>Identificación y utilización de los diferentes modelos de negocio en internet y la administración de sus recursos.</li>
          </ul>    
        <h4 style="color:#1B396A">Especialidades:</h4>
            <p class="lead">Da click en los botones para más información.</p>
            
            <a type="button" class="btn btn-primary" style="background-color: #1B396A;" href="{{ asset('assets/backoffice/img/esp-redes.jpg') }}" download="info-redes">Redes y seguridad informática</a>
            <a type="button" class="btn btn-primary" style="background-color: #1B396A;" href="{{ asset('assets/backoffice/img/esp-software.jpg') }}" download="info-redes">Sotware</a>            
      </div>
      <div class="col-md-5">
        <img src="{{ asset('assets/backoffice/img/tics1.jpg') }}" class="img-fluid" alt="Responsive image">
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
        <img src="{{ asset('assets/backoffice/img/tics2.jpg') }}" class="img-fluid" alt="Responsive image">
      </div>

      <div class="col-md-4">
        <br>
        <ul  class="lead">
          <br>
        <li>Calculo Diferencial</li>
        <li>Fundamentos de Programación</li>
        <li>Matemáticas Discretas I</li>
        <li>Introducción a las TIC´s</li>
        <li>Taller de Ética</li>
        <li>Fundamentos de Investigación</li>
        <li>Calculo integral</li>
        <li>Programación I</li>
        <li>Matemáticas II</li>
        <li>Probabilidad y Estadística</li>
        <li>Contabilidad de Costos</li>
        <li>Algebra Lineal</li>
        <li>Estructura y Organización de Datos</li>
        <li>Matemáticas para la Toma de Decisiones</li>
        <li>Fundamentos de Bases de Datos</li>
        <li>Electricidad y Magnetismo</li>
        <li>Administración Gerencial</li>
        <li>Análisis de Señales y Sistemas de Comunicación</li>
        <li>Programación II</li>
        <li>Administración de Proyectos</li>
        <li>Taller de Base de Datos</li>
        <li>Circuitos Eléctricos y Electrónicos</li>
        <li>Ingeniería de Software I</li>
        <li>Fundamentos de Redes</li>
        <li>Desarrollo Sustentable</li>
        </ul>
      </div> 

      
          <div class="col-md-3">
            <h1 class="featurette-heading"><span style="color:#ffffff">.</span></h1>
            <ul  class="lead">
                <li>Desarrollo de Emprendedores</li>
                <li>Base de Datos Distribuidas</li>
                <li>Arquitectura de Computadoras</li>
                <li>Ingeniería de Software II</li>
                <li>Redes de Computadoras</li>
                <li>Programación Web</li>
                <li>Negocios Electrónicos</li>
                <li>Ingeniería del Conocimiento</li>
                <li>Sistemas Operativos I</li>
                <li>Tecnologías Inalámbricas</li>
                <li>Redes Emergentes</li>
                <li>Programación para Dispositivos Móviles</li>
                <li>Auditoría en Tecnología de Información</li>
                <li>Taller de Investigación I</li>
                <li>Sistemas Operativos II</li>
                <li>Administración y Seguridad de Redes</li>
                <li>Telecomunicaciones</li>
                <li>Interacción Humano Computadora</li>
                <li>Taller de Investigación II</li>
                <li>Materias de Especialidad</li>
                <li>Servicio Social</li>
                <li>Residencia Profesional</li>
                <li>Otros Créditos</li>
        
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
          <h5 class="text-uppercase">Edificio Guillot: Av. Tecnológico #1340 Fracc. El Crucero CP 32500</h5>
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
    <a class="text-white" href="http://itcj.edu.mx/"><center><img src="{{ asset('assets/backoffice/img/tecnm.png') }}" alt="" width="180" height="100" class="d-inline-block align-top"></center></center></a><br>Instituto Tecnológico de Ciudad Juárez: © 2021 Copyright.</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->



  </body>
</html>