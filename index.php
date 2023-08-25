


<?php include 'componentes/header.php'; ?>



    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/portal.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7">
                                    <h1 class="display-2 mb-5 animated slideInDown">Segunda vida para tus Residous</h1>
                                    <a href="productos.php" class="btn btn-primary rounded-pill py-sm-3 px-sm-5">Tienda</a>
                                    <a href="nosotros.php" class="btn btn-secondary rounded-pill py-sm-3 px-sm-5 ms-3">Servicios</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/portal.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7">
                                    <h1 class="display-2 mb-5 animated slideInDown">Segunda vida para tus Residous</h1>
                                    <a href="productos.php" class="btn btn-primary rounded-pill py-sm-3 px-sm-5">Tienda</a>
                                    <a href="nosotros.php" class="btn btn-secondary rounded-pill py-sm-3 px-sm-5 ms-3">Servicios</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Atras</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img position-relative overflow-hidden p-5 pe-0">
                        <img class="img-fluid w-100" src="img/1.jpg">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-4">Descubre qué hacemos y cómo lo hacemos</h1>
                    <p class="mb-4">Eco-Word es la organización que cuida del medioambiente a través del reciclaje y el ecodiseño de los envases domésticos ligeros en Guinea Ecuatorial.</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Reciclamos residuos de Plasticos</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Reciclamos residous de Hierro</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Hacemos pasarela entre compradores y vendedores de residous</p>
                    <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="">Leer Mas</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


<?php     include 'componentes/produccion.php'  ;         ?>


    <!-- Product Start -->
    <?php  include 'componentes/productos.php';     ?>
    <!-- Product End -->


    <!-- Firm Visit Start -->
    <?php   include 'componentes/ideal.php';     ?>
    <!-- Firm Visit End -->


    <!-- Testimonial Start -->
    <?php   include 'componentes/comentarios.php';     ?>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-3">Nuestro Blog</h1>
                <p>Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid" src="img/2.jpg" alt="">
                    <div class="bg-light p-4">
                        <a class="d-block h5 lh-base mb-4" href="">Tipos de Residuos Reciclables</a>
                        <div class="text-muted border-top pt-4">
                            <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
                            <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>01 Jan, 2023</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <img class="img-fluid" src="img/3.png" alt="">
                    <div class="bg-light p-4">
                        <a class="d-block h5 lh-base mb-4" href="">Te enseñamos a Recolectar</a>
                        <div class="text-muted border-top pt-4">
                            <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
                            <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>01 oct, 2023</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <img class="img-fluid" src="img/4.jpg" alt="">
                    <div class="bg-light p-4">
                        <a class="d-block h5 lh-base mb-4" href="">Salvamos La Naturaleza</a>
                        <div class="text-muted border-top pt-4">
                            <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
                            <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>03 Jul, 2023</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->


   

    <?php   include 'componentes/footer.php'   ?>