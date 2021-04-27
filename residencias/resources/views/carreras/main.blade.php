
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carreras</title>

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

        a:link, a:visited, a:active {
            text-decoration:none;
        }

    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

</head>

<body>

        <div class="col-md-12" style="text-align: center;">
            <br>
            <h1 class="featurette-heading"><span style="color:#1B396A">Oferta educativa:</span></h1>
        </div>


        
        <div class="row featurette">

            <div class="col-md-5">
                <br>
                <img src="{{ asset('assets/backoffice/img/main2.jpg') }}" class="img-fluid" alt="Responsive image">
            </div>

            <div class="col-md-7">
                <br>
                <ul class="lead">
                    
                    
                        <li><a style="color:#1B396A" href="{{ url('administracion') }}">Licenciatura en
                                Administraci&oacute;n</a></li>
                        <li><a style="color:#1B396A" href="{{ url('contador') }}">Contador P&uacute;blico</a>
                        </li>
                        <li><a  style="color:#1B396A" href="{{ url('electromecanica') }}">Ingenier&iacute;a
                                Electromec&aacute;nica</a></li>
                        <li><a  style="color:#1B396A" href="{{ url('mecanica') }}">Ingenier&iacute;a
                                Mec&aacute;nica</a></li>
                        <li><a  style="color:#1B396A" href="{{ url('sistemas') }}">Ingenier&iacute;a en
                                Sistemas
                                Computacionales</a></li>
                        <li><a  style="color:#1B396A" href="{{ url('electronica') }}">Ingenier&iacute;a
                                Electr&oacute;nica</a></li>
                        <li><a  style="color:#1B396A" href="{{ url('tics') }}">Ingenier&iacute;a en
                                Tecnolog&iacute;as de la
                                Informaci&oacute;n y Comunicaciones</a></li>
                        <li><a  style="color:#1B396A" href="{{ url('ige') }}">Ingenier&iacute;a en
                                Gesti&oacute;n
                                Empresarial</a></li>
                        <li><a  style="color:#1B396A" href="{{ url('electrica') }}">Ingenier&iacute;a
                                El&eacute;ctrica</a>
                        </li>
                        <li><a  style="color:#1B396A" href="{{ url('industrial') }}">Ingenier&iacute;a
                                Industrial</a>
                        </li>
                        <li><a  style="color:#1B396A" href="{{ url('logistica') }}">Ingenier&iacute;a en
                                Log&iacute;stica</a>
                        </li>
                        <li><a  style="color:#1B396A" href="{{ url('mecatronica') }}">Ingenier&iacute;a en
                                Mecatr&oacute;nica</a></li>
                
                </ul>
                <a type="button" class="btn btn-primary" style="background-color: #1B396A;"
                    href="{{ url('/') }}">Volver</a>
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
