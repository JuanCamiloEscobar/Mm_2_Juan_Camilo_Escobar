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
                       <img src="<?php echo($producto["foto"])?>" class="card-img-top" alt="foto">
                        <div class="card-body text-center">
                           <h3 class="text-secondary text-center"><?php echo($producto["nombre"]) ?></h3>
                           <h5 class="text-secondary text-center">$<?php echo($producto["precio"]) ?></h5>
                           <h6 class="text-secondary text-center"><?php echo($producto["descripcion"]) ?></h6>
                           <a name="id" class="btn btn-dark" href="eliminar.php?id=<?php echo($producto["idProducto"]) ?>">Eliminar</a>
                           <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#editar<?php echo($producto["idProducto"]) ?>">
                            Editar
                           </button>
                        </div>
                      </div>
                      <div class="modal fade" id="editar<?php echo($producto["idProducto"]) ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                  <div class="modal-content text-center text-secondary">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="modal-body">

                                           <form action="editar.php?id=<?php echo($producto["idProducto"]) ?>" method="POST">
                                           <h3 class="text-center">Editar Producto</h3>
                                            <div class="control-group">
                                              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                                  <label>Nombre</label><input class="form-control" value="<?php echo($producto["nombre"]) ?>" name="Nombre" id="" type="text" required="required" />
                                                  <p class="help-block text-danger"></p>
                                              </div>
                                            </div>

                                            <div class="control-group">
                                              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                                  <label>Precio</label><input class="form-control" value="<?php echo($producto["precio"]) ?>" name="Precio" id="" type="text" required="required"/>
                                                  <p class="help-block text-danger"></p>
                                              </div>
                                            </div>

                                            <div class="control-group">
                                              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                                  <label>Descripcion</label><input class="form-control" value="<?php echo($producto["descripcion"]) ?>" name="descripcion" id="" type="text" required="required" />
                                                  <p class="help-block text-danger"></p>
                                              </div>
                                            </div>
                                            <div class="modal-footer text-center"><br>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                            <button type="submit" name="editar" class="btn btn-secondary">Guardar Cambios</button>
                                            </div>
                                           </form>

                                        </div>

                                      
                                  </div>
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