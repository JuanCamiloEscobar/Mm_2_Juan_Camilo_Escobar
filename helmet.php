<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Helmet</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/portfolio/ico.jpg" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->

        <nav class="navbar navbar-expand-lg  text-uppercase fixed-top bg-dark" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top" ><img src="assets/img/portfolio/ico.jpg" width="50" height="50" alt=""></a><button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-dark text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php">Inicio</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php">Galeria</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php">Nosotros</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" target="_blank" href="Ventas.php">ventas</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="helmet.php">Helmet</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#">Registrar</a></li>
                    </ul>
                
                </div>
                <a href="#foo"><img src="assets/img/portfolio/telefon.png" class="navbar-toggler-right" width="50" height="50" alt=""></a> 
                <img src="assets/img/portfolio/carritoMobile.png" class="navbar-toggler-right" width="50" height="50" alt="">
            </div>
        </nav>
        <!-- Masthead-->
        <header>
            
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/img/portfolio/carru.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/portfolio/carru1.jpg" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/portfolio/carru2.jpg" alt="Third slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/portfolio/carru3.jpg" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only"></span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only"></span>
                </a>
              </div>
        </header>
<body>
    <section class="page-section" id="contact">
        <div class="container">
            <!-- Contact Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Administracion de Productos</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <?php
             
             include ("BD.php");
             
             //crear objeto
             $transaccion=new BD();

             //crear consulta
             $consultaSQL="SELECT * FROM productos WHERE 1";

             //utilizamos el metodo
             $productos=$transaccion->consultarDatos($consultaSQL);

            ?>

            <div class="container">
               <div class="row row-cols-1 row-cols-md-3">
                 <?php foreach ($productos as $producto) :?>

                   <div class="col mb-4">
                      <div class="card">
                       <img src="" class="card-img-top" alt="...">
                        <div class="card-body">
                           <h3 class="card-title"><?php echo($producto["nombre"]) ?></h3>
                           <p class="card-text"><?php echo($producto["descripcion"]) ?></p>
                           <a class="btn btn-primary" href="eliminar.php?id<?php echo($producto["idProducto"])?>">Eliminar</a>
                           <a name="" class="btn btn-primary" href="#">Editar</a>
                        </div>
                      </div>
                   </div>

                 <?php endforeach ?>
            </div>
        </div>
   </section>
<!-- Footer-->
<footer class="footer text-center" id="foo">
<div class="container">
    <div class="row">
        <!-- Footer Location-->
        <div class="col-lg-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Ubicacion</h4>
            <p class="lead mb-0">2215 John Daniel Drive<br />Clark, MO 65243</p>
        </div>
        <!-- Footer Social Icons-->
        <div class="col-lg-4 mb-5 mb-lg-0">
            <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a><a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a><a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a><a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
        </div>
        <!-- Footer About Text-->
        <div class="col-lg-4">
            <h4 class="text-uppercase mb-4">Garantias agv</h4>
            <p class="lead mb-0">Envios gratis en todos nuestros productos</a>.</p>
        </div>
    </div>
</div>
</footer>
<!-- Copyright Section-->
<div class="copyright py-4 text-center text-white">
<div class="container"><small>Helmetshop © Your Website 2020</small></div>
</div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="js/calcular.js"></script>
</body>
</html>