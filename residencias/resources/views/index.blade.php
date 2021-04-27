<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Departamento de desarrollo académico</title>

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


</head>

<body>


<div class="row featurette">
        <div class="col-md-7">
            <center>
                <br><br><br><br>
                <h1 style="color:#1B396A">¡Bienvenido!</h1>
                <br>
                <p class="lead">Da click en los botones para m&aacute;s informaci&oacute;n.</p>
                <br>
                <a type="button" class="btn btn-primary" style="background-color: #1B396A;"
                    href="https://www.facebook.com/DesarrolloAcademicoITCJ">Desarrollo acad&eacute;mico</a>
                <a type="button" class="btn btn-primary" style="background-color: #1B396A;"
                    href="{{ url('administrativo') }}">Conoce nuestro instituto</a>
                <a type="button" class="btn btn-primary" style="background-color: #1B396A;"
                    href="{{ url('main') }}">Oferta educativa</a>
                <a type="button" class="btn btn-primary" style="background-color: #1B396A;"
                    href="{{ url('login') }}">Resgistro</a>
                    <br><br>
            </center>
        </div>
        <div class="col-md-5">
            <img src="{{ asset('assets/backoffice/img/welcome.png') }}" class="img-fluid" alt="Responsive image">
        </div>
    </div>


    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="{{ asset('assets/backoffice/img/banner/16.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">

                </div>
            </div>


            <div class="carousel-item">
                <img src="{{ asset('assets/backoffice/img/banner/14.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">

                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ asset('assets/backoffice/img/banner/12.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">

                </div>
            </div>

        </div>


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
                        <h5 class="text-uppercase">Edificio Guillot: Av. Tecnológico #1340 Fracc. El Crucero CP 32500
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
            <a class="text-white" href="http://itcj.edu.mx/">
                <center><img src="{{ asset('assets/backoffice/img/tecnm.png') }}" alt="" width="180" height="100"
                        class="d-inline-block align-top"></center>
                </center>
            </a><br>© 2021 Copyright: Instituto Tecnológico de Ciudad Juárez.</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->



</body>

</html>
