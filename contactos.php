<?php  include 'componentes/header.php';   ?>


    <!-- Page Header Start -->
    <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-3 animated slideInDown">Contáctanos</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="./index.php">Inicio</a></li>
                    <!-- <li class="breadcrumb-item"><a class="text-body" href="#">Pages</a></li> -->
                    <li class="breadcrumb-item text-dark active" aria-current="page">Contáctanos</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-3">Contáctanos</h1>
                <!-- <p>Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p> -->
            </div>
            <div class="row g-5 justify-content-center">
                <div class="col-lg-5 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-primary text-white d-flex flex-column justify-content-center h-100 p-5">
                        <h5 class="text-white">Llámanos</h5>
                        <p class="mb-5"><i class="fa fa-phone-alt me-3"></i>+240 776 869</p>
                        <h5 class="text-white">Email Us</h5>
                        <p class="mb-5"><i class="fa fa-envelope me-3"></i>eco-word@example.com</p>
                        <h5 class="text-white">Dirección de la oficina</h5>
                        <p class="mb-5"><i class="fa fa-map-marker-alt me-3"></i>C/Rey Malabo, Malabo, G.E.</p>
                        <h5 class="text-white">Síganos</h5>
                        <div class="d-flex pt-2">
                            <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-whatsapp"></i></a>
                            <a class="btn btn-square btn-outline-light rounded-circle me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <!-- <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p> -->
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Tu nombre">
                                    <label for="name">Tu nombre</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Tu correo electrónico">
                                    <label for="email">Tu correo electrónico</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Asunto">
                                    <label for="subject">Asunto</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 200px"></textarea>
                                    <label for="message">Mensaje</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Enviar mensaje</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Google Map Start -->
    <div class="container-xxl px-0 wow fadeIn" data-wow-delay="0.1s" style="margin-bottom: -6px;">
       
            <iframe class="w-100" style="height: 450px;"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.2697412243556!2d8.778361573677127!3d3.7513329491585785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10669ef18a514593%3A0x4cb6ef6128557dbf!2sC.%20del%20Rey%20Malabo%2C%20Malabo%2C%20Equatorial%20Guinea!5e0!3m2!1sen!2s!4v1692907783174!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- Google Map End -->


    <?php  include 'componentes/footer.php';      ?>