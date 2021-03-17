<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ing. Industrial</title>

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
      background: url("{{ asset('assets/backoffice/img/industrial3.jpg') }}" )  no-repeat center;
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
                <li><a class="dropdown-item" href="{{url('administracion')}}">Licenciatura en Administración</a></li>
                <li><a class="dropdown-item" href="{{url('contador')}}">Contador Público</a></li>
                <li><a class="dropdown-item" href="{{url('electromecanica')}}">Ingeniería Electromecánica</a></li>
                <li><a class="dropdown-item" href="{{url('mecanica')}}">Ingeniería Mecánica</a></li>
                <li><a class="dropdown-item" href="{{url('sistemas')}}">Ingeniería en Sistemas Computacionales</a></li>
                <li><a class="dropdown-item" href="{{ url('electronica') }}">Ingeniería
                  Electrónica</a></li>
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
      <div class="centered"><h1 class="display-1 animate__animated animate__fadeInLeft" style="color: #ffffff"><strong><br>Ingeniería Industrial<strong></h1></div>
    </div>
  </header>
  <!--TERMINA MENU-->

  

  <!--COMIENZA OBJETIVO-->
  <br>
  <div class="jumbotron jumbotron-fluid bg-white">
    <div class="container">
      <br>
      <h1 class="display-8" style="color:#1B396A">Objetivo:</h1>
      <p class="lead">Formar profesionistas en el campo de la ingeniería industrial, líderes creativos y emprendedores con visión sistemática, así como, cpacidad analítica y competitiva que le permita diseñar, implementar, mejorar, innovar, optimizar y administrar sistemas de producción de bienes y servicios en un entorno global, cn un enfoque sustentable, ético y comprometidos con la sociedad.</p>
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
      <p class="lead" style="color:#e9ecef">En el sector industrial, puede administrar los sistemas de producción, de calidad de materiales, de seguridad, o en el desarrollo de nuevos proyectos y procesos. En las empresas de servicios es capaz de implantar y mejorar sistemas para elevar su calidad y productividad.<br></p>
      <p class="lead" style="color:#e9ecef">En el sector público puede desarrollar u optiomizar sistemas para mayor efectividad y eficiencia en la prestación de servicios y en la administración de los recursos. Así mismo puede emprender su propia empresa de manufactura o de servicios.</p>
     
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
      <p class="lead">Los aspirantes a estudiar el programa de ingeniería industrial deberán ser egresados del bachillerato, tener aptitudes y habilidad para las matemáticas, física, computación y administración; habilidad analítica y creativa para la solución de problemas; conciencia ecológica, disciplina y alto sentido de responsabilidad. Además de tener competencias comunicativas del español.</p>
      
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
       <p class="lead" style="color:#e9ecef">El egresado será capaz de: <br></p>
       <ul class="lead" style="color:#e9ecef">
            <li>Analizar, diseñar y gestionar sistemas productivos</li>
            <li>Conocer, seleccionar y aplicar tecnologías de automatización para optimizar procesos productivos</li>
            <li>Diseñar, implementar y administrar sistemas de mantenimiento.</li>
            <li>Implementar e interpretar estrategias de gestión de calidad.</li>
            <li>Implementar e interpretar estrategias y métodos estadísticos</li>
            <li>Seleccionar y adecuar modelos de calidad y diseño de experimentos en procesos.</li>
            <li>Gestionar sistemas de seguridad, salud ocupacional y protección al medio ambiente</li>
            <li>Identificar necesidades de su entorno y desarrollar investigación aplicada para cear o innovar bienes y/o servicios.</li>
            <li>Crear y mejorar productos de alto valor agregado bajo los principios de productivad y competitividad.</li>
            <li>Participar en proyectos de transferencia, desarrollo y adaptación de tecnologías en los sistemas productivos</li>
            <li>Diseñar, implementar y mejorar sistemas y estaciones de trabajo considerando factores ergonómicos para optimizar la producción. </li>
            <li>Emprender e incubar la creación de nuevas empresas</li>
            <li>Forular, evaluar y gestionar proyectos de inversión</li>
            <li>Tomar decisiones patra la mejora de sistemas productivos.</li>
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
          <li>Identificar la estructura y características de los modelos de excelencia más utilizados en el sector productivo y de servicios y aplicarlos para incrementar la competitividad de las organizaciones.</li>
          <li>Conocer y aplicar normas vigentes de gestión de calidad para todo tipo de organización.</li>
          <li>Distinguir y analizar las formas, medios y métodos de competitividad de una organización.</li>
          <li>Conocer y aplicar estrategias para mejorar e innovar los sistemas de una organización</li>
          <li>Manejar software básico para procesamiento de datos y elaboración de documentos.</li>
          </ul> 
          <br>   
        <h2 style="color:#1B396A">Especialidades:</h2>
            <ul class="lead">
                <li>Gestión de la calidad y productividad</li>
                <li>Manufactura digital</li>
            </ul>
            
      </div>
      <div class="col-md-5">
        <img src="{{ asset('assets/backoffice/img/industrial1.jpg') }}" class="img-fluid" alt="Responsive image">
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
        <img src="{{ asset('assets/backoffice/img/industrial2.jpg') }}" class="img-fluid" alt="Responsive image">
      </div>

      <div class="col-md-4">
        <br>
        <ul  class="lead">
          <br>
          <li>Fundamentos de investigación</li>
          <li>Taller de ética</li>
          <li>Cálculo diferencial</li>
          <li>Taller de herramientas intelectuales</li>
          <li>Química</li>
          <li>Dibujo industrial</li>
          <li>Electricidad y electrónica Industrial</li>
          <li>Propiedad de los materiales</li>
          <li>Cálculo integral</li>
          <li>Ingeniería de sistemas</li>
          <li>Probabilidad y Estadística</li>
          <li>Análisis de la Realidad Nacional</li>
          <li>Taller de Liderazgo</li>
          <li>Metrología y Normalización</li>
          <li>Algoritmos y Lenguajes de Programación</li>
          <li>Cálculo Vectorial</li>
          <li>Economía Industrial</li>
          <li>Estadística Inferencial I</li>
          <li>Estudio de Trabajo I</li>
          <li>Procesos de Fabricación</li>
          <li>Física I</li>
          <li>Álgebra Lineal</li>
          <li>Investigación de Operaciones</li>
          <li>Estadística Inferencial II</li>
          <li>Estudio de Trabajo II</li>
          <li>Higiene y Seguridad Industrial</li>
          <li>Administración de Proyectos</li>
          <li>Gestión de Costos</li>
        </ul>
      </div> 

      
          <div class="col-md-3">
            <h1 class="featurette-heading"><span style="color:#ffffff">.</span></h1>
            <ul  class="lead">
                <li>Administración de las Operaciones I</li>
                <li>Investigación de Operaciones II</li>
                <li>Control Estadístico de la Calidad</li>
                <li>Ergonomía</li>
                <li>Desarrollo Sustentable</li>
                <li>Taller de Investigación I</li>
                <li>Ingeniería Económica</li>
                <li>Administración de las Operaciones II</li>
                <li>Simulación</li>
                <li>Administración de Mantenimiento</li>
                <li>Mercadotecnia</li>
                <li>Taller de Investigación II</li>
                <li>Planeación Financiera</li>
                <li>Planeación y Diseño de Instalaciones</li>
                <li>Sistema de Manufactura</li>
                <li>Logística y Cadenas de Suministro</li>
                <li>Gestión de los Sistemas de Calidad</li>
                <li>Formulación y Evaluación de Proyectos</li>
                <li>Relaciones Industriales</li>
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