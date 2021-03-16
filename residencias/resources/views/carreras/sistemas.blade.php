<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ing. en Sistemas</title>

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
      background: url("{{ asset('assets/backoffice/img/sistemas.jpeg') }}" )  no-repeat center;
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
      <div class="centered"><h1  class="display-1" style="color: #ffffff"><strong><br>Ingeniería en Sistemas Computacionales<strong></h1></div>
    </div>
  </header>
  <!--TERMINA MENU-->

  

  <!--COMIENZA OBJETIVO-->
  <div class="jumbotron jumbotron-fluid" style="background-color:#1B396A;">
    <div class="container">
      <br>
      <h1 class="display-8" style="color:#e9ecef">Objetivo:</h1>
      <p class="lead" style="color:#e9ecef">Formar profesionistas líderes, analíticos, críticos y creativos con visión estratégica y amplio sentido ético, capaces de diseñar, implementar y administrar infraestructura computacional para aportar soluciones innovadoras en beneficio de la sociedad, en un contexto global, multidisciplinario y sustentable.</p>
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
      <p class="lead">El campo de trabajo en México para Ingenieros en Sistemas se encuentra en el inicio de su explotación tanto en nivel de empresa pública como privada, por esta razón el especialista en esta área es sumamente valioso.<br></p>   
        <ul class="lead">
            <li>Sector Empresarial: Creando centros de asesorías y servicio.</li>
            <li>Sector Público: Prestando servicios en dependencias de gobierno tales como: SHCP, SEP, CFE, SCT, Ayuntamiento, entre otros.</li>
            <li>Sector Privado: Apoyando con sus servicios a las empresas, en el manejo de todo tipo de sistemas de información</li>
        </ul>
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
        <li>Diseño, configuración y administración de redes computacionales aplicando las normas y estándares vigentes.</li>
        <li>Desarrollo, implementación y administración de software.</li>
        <li> Habilidad para coordinar y participar en proyectos interdisciplinarios.</li>
        <li>Diseñar, desarrollar y administrar bases de datos.</li>
        <li>Habilidades metodológicas de investigación para favorecer el desarrollo cultural, científico y tecnológico en el ámbito de sistemas computacionales y disciplinas afines.</li>
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
        <img src="{{ asset('assets/backoffice/img/sis1.jpg') }}" class="img-fluid" alt="Responsive image">
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
        <img src="{{ asset('assets/backoffice/img/sis2.jpg') }}" class="img-fluid" alt="Responsive image">
      </div>

      <div class="col-md-4">
        <br>
        <ul  class="lead">
          <br>
          <li>Calculo Diferencial</li>
          <li>Fundamentos de Programación</li>
          <li>Taller de Ética</li>
          <li>Matemáticas Discretas</li>
          <li>Taller de Administración</li>
          <li>Fundamentos de Investigación</li>
          <li>Calculo Integral</li>
          <li>Programación Orientada a Objetos</li>
          <li>Contabilidad Financiera</li>
          <li>Química General</li>
          <li>Algebra Lineal</li>
          <li>Probabilidad y Estadística</li>
          <li>Calculo Vectorial</li>
          <li>Estructura de Datos</li>
          <li>Cultura Empresarial</li>
          <li>Investigación de Operaciones</li>
          <li>Física General</li>
          <li>Fundamentos de Ingeniería de Software</li>
          <li>Ecuaciones Diferenciales</li>
          <li>aciones Diferenciales
           Tópicos Avanzados de Programación</li>
          <li>Fundamentos de Base de Datos</li>
          <li>Métodos Numéricos</li>
          <li>Principios Eléctricos y Aplicaciones Digitales</li>
          <li>Graficación</li>
          <li>Desarrollo Sustentable</li>
        </ul>
      </div> 

      
          <div class="col-md-3">
            <h1 class="featurette-heading"><span style="color:#ffffff">.</span></h1>
            <ul  class="lead">
                <li>Telecomunicaciones</li>
                <li>Taller de Base de Datos</li>
                <li>Sistemas Operativos</li>
                <li>Simulación</li>
                <li>Arquitectura de Computadoras</li>
                <li>Lenguajes y Autómatas</li>
                <li>Redes de Computadoras</li>
                <li>Administración de Base de Datos</li>
                <li>Taller de Sistemas Operativos</li>
                <li>Ingeniería de Software</li>
                <li>Lenguajes de Interfaz</li>
                <li>Lenguajes y Autómatas II</li>
                <li>Conmutación y Enrutamiento de Redes de Datos</li>
                <li>Taller de Investigación I</li>
                <li>Sistemas Programables</li>
                <li>Gestión de Proyectos de Software</li>
                <li>Programación Lógica</li>
                <li>Administración de Redes</li>
                <li>Taller de Investigación II</li>
                <li>Programación Web</li>
                <li>Inteligencia Artificial</li>
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