<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestión empresarial</title>

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
      <div class="centered"><h1  class="display-1" style="color: #ffffff"><strong><br>Ingeniería en Gestión Empresarial<strong></h1></div>
    </div>
  </header>
  <!--TERMINA MENU-->

  

  <!--COMIENZA OBJETIVO-->
  <br>
  <div class="jumbotron jumbotron-fluid bg-white">
    <div class="container">
      <br>
      <h1 class="display-8" style="color:#1B396A">Objetivo:</h1>
      <p class="lead">Formar profesionistas, capaces de desarrollar, mantener e innovar sistemas, procesos y productos industriales y de servicio que apoyen a la solución de problemas, propiciando y mejorando la calidad de la productividad.</p>
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
      <p class="lead" style="color:#e9ecef">El egresado tendrá competencias para trabajar en: <br></p>
      <ul class="lead" style="color:#e9ecef">
          <li>Creación y gestión de su propia empresa</li>
          <li>En la industria y servicios</li>
          <li>Empresas públicas y privadas</li>
          <li>Consultorías</li>
          <li>Proyectos de inversión</li>

      </ul>
    <br>
    </div>
  </div>
  <br>
  <!--TERMINA PERFIL-->

  
  <!--COMIENZA OBJETIVO-->
  <br>
  <div class="jumbotron jumbotron-fluid bg-white">
    <div class="container">
      <br>
      <h1 class="display-8" style="color:#1B396A">Perfil del aspirante:</h1>
      <p class="lead">Aplicar métodos cuantitativos y cualitativos para el ánalisis e interpretación de datos y modelado de sistemas, en los procesos organizacionales para la mejora continua, atendiendo estándares de calidad mundial.<br></p>
      <ul class="lead">
        <li>Gestionar la cadena de suministros de las organizaciones con un enfoque orientado a procesos.</li>
        <li>Integrar, dirigir y desarrollar equipos de trabajo para la mejora continua y el crecimiento integral de las organizaciones.</li>
        <li>Establecer programas para el fortalecimiento de la seguridad e higiene en las organizaciones.</li>

    </ul>
      <br>
    </div>
  </div>
  <!--TERMINA OBJETIVO-->

   <!--COMIENZA PERFIL-->
   <br>
   <div class="jumbotron jumbotron-fluid" style="background-color:#1B396A;">
     <div class="container">
       <br>
       <h1 class="display-8" style="color:#e9ecef">Perfil del egresado: </h1>
       <p class="lead" style="color:#e9ecef">El profesional de esta carrera estará formado integralmente en: <br></p>
       <ul class="lead" style="color:#e9ecef">
           <li>Capacidad de análisis y síntesis</li>
           <li>Habilidad analítica y creatividad</li>
           <li>Aplicación en la solución de problemas</li>
           <li>Disciplina y alto sentido de responsabilidad</li>
           <li>Capacidad administrativa y de interrelación</li>
           <li>Independencia de juicio</li>
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
          <li>Formular planes estratégios, tácticos y operativos para la empresa.</li>
          <li>Gestionar sistemas de recursos para la solución de problemas operativos y administrativos.</li>
          <li>Gestionar proyectos de desarrollo empresarial</li>
          <li>Gestionar la creación de nuevos negocios.</li>
          <li>Dirigir el desempeño de organismos empresariales.</li>
          <li>Aplicar los conocimientos básicos de la ingeniería en Gestión Empresarial.</li>
          </ul>    
        <h4 style="color:#1B396A">Especialidades:</h4>
            <p class="lead">Liderazgo Gerencial y sistemas de Manufactura de clase mundial.</p>
            
      </div>
      <div class="col-md-5">
        <img src="{{ asset('assets/backoffice/img/ige1.jpg') }}" class="img-fluid" alt="Responsive image">
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
        <img src="{{ asset('assets/backoffice/img/ige2.jpg') }}" class="img-fluid" alt="Responsive image">
      </div>

      <div class="col-md-4">
        <br>
        <ul  class="lead">
          <br>
        <li>Fundamentos de investigación</li>
        <li>Cálculo diferencial</li>
        <li>Desarrollo humano</li>
        <li>Fundamentos de gestion empresarial</li>
        <li>Fundamentos de física</li>
        <li>Fundamentos de química</li>
        <li>Software de aplicación ejecutivo</li>
        <li>Cálculo integral</li>
        <li>Contabilidad orientada a los negocios</li>
        <li>Dinámica social</li>
        <li>Taller de ética</li>
        <li>Legislación laboral</li>
        <li>Marco legal de las organizaciones</li>
        <li>Probabilidad y estadística descriptiva</li>
        <li>Costos empresariales</li>
        <li>Habilidades directivas I</li>
        <li>Economia empresarial</li>
        <li>Álgebra lineal</li>
        <li>Ingeniería económica</li>
        <li>Estadistica inferencial I</li>
        <li>Instrumentos de presupuestación empresarial</li>
        <li>Habilidades directivas II</li>
        <li>Entorno Macroeconómico</li>
        </ul>
      </div> 

      
          <div class="col-md-3">
            <h1 class="featurette-heading"><span style="color:#ffffff">.</span></h1>
            <ul  class="lead">
          <li>Investigación de operaciones</li>
          <li>Finanzas en las organizaciones</li>
          <li>Estadistica inferencial II</li>
          <li>Ingeniería de procesos</li>
          <li>Gestión de capital humano</li>
          <li>Taller de investigación I</li>
          <li>Mercadotecnia</li>
          <li>Administración de la salud y seguridad ocupacional</li>
          <li>El emprenderos y la innovación</li>
          <li>Gestión de la producción I</li>
          <li>Diseño organizacional</li>
          <li>Taller de investigación II</li>
          <li>Sistemas de información de la mercadotecnia</li>
          <li>Calidad aplicada a la gestión empresarial</li>
          <li>Formulación y evaluación de proyectos</li>
          <li>Gestión de la producción II</li>
          <li>Gestión estrégica</li>
          <li>Desarrollo sustentable</li>
          <li>Mercadotécnia</li>
          <li>Cadena de suministros</li>
          <li>Materias de especialidad</li>
        </ul>
        
      </div>
      
    </div>

    <div class="col-md-12" style="text-align: center;">
        <br>
        <h4 class="featurette-heading"><span style="color:#1B396A"><b>*Nota: El alumno deberá cursar el servicio social, residencia profesional y otros créditos.</b></span></h4>
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