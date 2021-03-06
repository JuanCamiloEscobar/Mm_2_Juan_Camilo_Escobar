<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Ventas</title>
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
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0" id="admon">Administracion de Productos</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Contact Section Form-->
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <form id="contactForm" action="login.php" method="POST" >
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label>Nombre</label><input class="form-control" name="Nombre" id="" type="text" placeholder="Nombre del producto" required="required" data-validation-required-message="Ingrese su nombre completo." />
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label>Marca del producto</label><input class="form-control" id="" name="Marca"  placeholder="Marca del producto" required="required" data-validation-required-message="Ingrese su salario." />
                        <p id="errorsalario" class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label>Valor del producto</label><input class="form-control" id="" name="Valor" placeholder="Valor de venta" required="required" data-validation-required-message="Ingrese Valor de Venta."/>
                        <p id="errorvv" class="help-block text-danger">

                        </p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2"rows="4">
                        <label>Descripcion</label><input class="form-control" name="Descripcion" rows="4" id=""  placeholder="Descripcion" required="required" data-validation-required-message="Ingrese la Descripcion."/>
                        <p id="errorvv" class="help-block text-danger">
                        </p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2"rows="4">
                        <label>Foto</label>
                        <input class="form-control" name="foto" rows="4" id="foto"  placeholder="URL foto" required="required" data-validation-required-message="Ingrese la foto."/>
                        <p id="" class="help-block text-danger">
                        </p>
                    </div>
                </div>
                <br>
                
                <div class="form-group text-center">
                  <button class="btn btn-secondary" type="reset" >Limpiar</button>
                  <button class="btn btn-secondary" type="submit" id="btnRegistrar" name="btnRegistrar" >Registrar</button>
                </div>
            
            </form>
        </div>
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