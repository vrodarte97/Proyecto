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
      <div class="centered"><h1 class="display-1 animate__animated animate__fadeInLeft" style="color: #ffffff"><strong><br>Ingenier&iacute;a Industrial<strong></h1></div>
    </div>
  </header>
  <!--TERMINA MENU-->

  

  <!--COMIENZA OBJETIVO-->
  <br>
  <div class="jumbotron jumbotron-fluid bg-white">
    <div class="container">
      <br>
      <h1 class="display-8" style="color:#1B396A">Objetivo:</h1>
      <p class="lead">Formar profesionistas en el campo de la ingenier&iacute;a industrial, l&iacute;deres creativos y emprendedores con visi&oacute;n sistem&aacute;tica, as&iacute; como, cpacidad anal&iacute;tica y competitiva que le permita dise&ntilde;ar, implementar, mejorar, innovar, optimizar y administrar sistemas de producci&oacute;n de bienes y servicios en un entorno global, cn un enfoque sustentable, &eacute;tico y comprometidos con la sociedad.</p>
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
      <p class="lead" style="color:#e9ecef">En el sector industrial, puede administrar los sistemas de producci&oacute;n, de calidad de materiales, de seguridad, o en el desarrollo de nuevos proyectos y procesos. En las empresas de servicios es capaz de implantar y mejorar sistemas para elevar su calidad y productividad.<br></p>
      <p class="lead" style="color:#e9ecef">En el sector p&uacute;blico puede desarrollar u optiomizar sistemas para mayor efectividad y eficiencia en la prestaci&oacute;n de servicios y en la administraci&oacute;n de los recursos. As&iacute; mismo puede emprender su propia empresa de manufactura o de servicios.</p>
     
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
      <p class="lead">Los aspirantes a estudiar el programa de ingenier&iacute;a industrial deber&aacute;n ser egresados del bachillerato, tener aptitudes y habilidad para las matem&aacute;ticas, f&iacute;sica, computaci&oacute;n y administraci&oacute;n; habilidad anal&iacute;tica y creativa para la soluci&oacute;n de problemas; conciencia ecol&oacute;gica, disciplina y alto sentido de responsabilidad. Adem&aacute;s de tener competencias comunicativas del espa&ntilde;ol.</p>
      
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
       <p class="lead" style="color:#e9ecef">El egresado ser&aacute; capaz de: <br></p>
       <ul class="lead" style="color:#e9ecef">
            <li>Analizar, dise&ntilde;ar y gestionar sistemas productivos</li>
            <li>Conocer, seleccionar y aplicar tecnolog&iacute;as de automatizaci&oacute;n para optimizar procesos productivos</li>
            <li>Dise&ntilde;ar, implementar y administrar sistemas de mantenimiento.</li>
            <li>Implementar e interpretar estrategias de gesti&oacute;n de calidad.</li>
            <li>Implementar e interpretar estrategias y m&eacute;todos estad&iacute;sticos</li>
            <li>Seleccionar y adecuar modelos de calidad y dise&ntilde;o de experimentos en procesos.</li>
            <li>Gestionar sistemas de seguridad, salud ocupacional y protecci&oacute;n al medio ambiente</li>
            <li>Identificar necesidades de su entorno y desarrollar investigaci&oacute;n aplicada para cear o innovar bienes y/o servicios.</li>
            <li>Crear y mejorar productos de alto valor agregado bajo los principios de productivad y competitividad.</li>
            <li>Participar en proyectos de transferencia, desarrollo y adaptaci&oacute;n de tecnolog&iacute;as en los sistemas productivos</li>
            <li>Dise&ntilde;ar, implementar y mejorar sistemas y estaciones de trabajo considerando factores ergon&oacute;micos para optimizar la producci&oacute;n. </li>
            <li>Emprender e incubar la creaci&oacute;n de nuevas empresas</li>
            <li>Forular, evaluar y gestionar proyectos de inversi&oacute;n</li>
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
          <li>Identificar la estructura y caracter&iacute;sticas de los modelos de excelencia m&aacute;s utilizados en el sector productivo y de servicios y aplicarlos para incrementar la competitividad de las organizaciones.</li>
          <li>Conocer y aplicar normas vigentes de gesti&oacute;n de calidad para todo tipo de organizaci&oacute;n.</li>
          <li>Distinguir y analizar las formas, medios y m&eacute;todos de competitividad de una organizaci&oacute;n.</li>
          <li>Conocer y aplicar estrategias para mejorar e innovar los sistemas de una organizaci&oacute;n</li>
          <li>Manejar software b&aacute;sico para procesamiento de datos y elaboraci&oacute;n de documentos.</li>
          </ul> 
          <br>   
        <h2 style="color:#1B396A">Especialidades:</h2>
            <ul class="lead">
                <li>Gesti&oacute;n de la calidad y productividad</li>
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
          <li>Fundamentos de investigaci&oacute;n</li>
          <li>Taller de &eacute;tica</li>
          <li>C&aacute;lculo diferencial</li>
          <li>Taller de herramientas intelectuales</li>
          <li>Qu&iacute;mica</li>
          <li>Dibujo industrial</li>
          <li>Electricidad y electr&oacute;nica Industrial</li>
          <li>Propiedad de los materiales</li>
          <li>C&aacute;lculo integral</li>
          <li>Ingenier&iacute;a de sistemas</li>
          <li>Probabilidad y Estad&iacute;stica</li>
          <li>An&aacute;lisis de la Realidad Nacional</li>
          <li>Taller de Liderazgo</li>
          <li>Metrolog&iacute;a y Normalizaci&oacute;n</li>
          <li>Algoritmos y Lenguajes de Programaci&oacute;n</li>
          <li>C&aacute;lculo Vectorial</li>
          <li>Econom&iacute;a Industrial</li>
          <li>Estad&iacute;stica Inferencial I</li>
          <li>Estudio de Trabajo I</li>
          <li>Procesos de Fabricaci&oacute;n</li>
          <li>F&iacute;sica I</li>
          <li>&aacute;lgebra Lineal</li>
          <li>Investigaci&oacute;n de Operaciones</li>
          <li>Estad&iacute;stica Inferencial II</li>
          <li>Estudio de Trabajo II</li>
          <li>Higiene y Seguridad Industrial</li>
          <li>Administraci&oacute;n de Proyectos</li>
          <li>Gesti&oacute;n de Costos</li>
        </ul>
      </div> 

      
          <div class="col-md-3">
            <h1 class="featurette-heading"><span style="color:#ffffff">.</span></h1>
            <ul  class="lead">
                <li>Administraci&oacute;n de las Operaciones I</li>
                <li>Investigaci&oacute;n de Operaciones II</li>
                <li>Control Estad&iacute;stico de la Calidad</li>
                <li>Ergonom&iacute;a</li>
                <li>Desarrollo Sustentable</li>
                <li>Taller de Investigaci&oacute;n I</li>
                <li>Ingenier&iacute;a Econ&oacute;mica</li>
                <li>Administraci&oacute;n de las Operaciones II</li>
                <li>Simulaci&oacute;n</li>
                <li>Administraci&oacute;n de Mantenimiento</li>
                <li>Mercadotecnia</li>
                <li>Taller de Investigaci&oacute;n II</li>
                <li>Planeaci&oacute;n Financiera</li>
                <li>Planeaci&oacute;n y Dise&ntilde;o de Instalaciones</li>
                <li>Sistema de Manufactura</li>
                <li>Log&iacute;stica y Cadenas de Suministro</li>
                <li>Gesti&oacute;n de los Sistemas de Calidad</li>
                <li>Formulaci&oacute;n y Evaluaci&oacute;n de Proyectos</li>
                <li>Relaciones Industriales</li>
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