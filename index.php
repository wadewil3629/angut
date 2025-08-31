<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Farmacia Marsarbal</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#inicito"><b>Inicio</b></a></li>
                        <li class="nav-item"><a class="nav-link" href="#acercade"><b>Quienes Somos</b></a></li>
                        <li class="nav-item"><a class="nav-link" href="#productitos"><b>Ofertas</b></a></li>
                        <li class="nav-item"><a class="nav-link" href="sisfarma/index.html"><b>Login</b></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Inicio-->
        <header class="masthead" id="inicito">
            <div class="container">
                <div class="masthead-subheading">Bienvenidos a Farmacias!</div>
                <div class="masthead-heading text-uppercase">Marsarbal</div>
                <a class="btn btn-dark btn-xl text-uppercase" href="https://api.whatsapp.com/send/?phone=59177494440"><img src="sisfarma/img/wap.png" width="50" height="50">WhatsApp</a>                
            </div>
        </header>
        <!-- Quienes Somos-->
        <section class="page-section" id="acercade">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Quienes Somos</h2>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="timeline-image" src="./sisfarma/img/101.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Mision</h4>                                
                            </div>
                            <div class="timeline-body"><p class="text-muted">Somos una farmacia joven con la mision de poder brindar nuestros servicios a bajo costo siempre velando por el bienestar y la economía de los clientes</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="timeline-image" src="./sisfarma/img/102.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Visión</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Convertirnos en una cadena de farmacias que permita dar empleo a nivel nacional para ser reconocida</p></div>
                        </div>
                    </li>                    
                </ul>
            </div>
        </section>
        <!-- Productos-->
        <section class="page-section bg-light" id="productitos">
            <div class="container">
                <div class="text-center">
                    <h3 class="section-subheading text-muted">Oferta de Productos</h3>
                </div>                
                <div class="row">
                    <!-- PHP PARA TRAER LOS PRODUCTOS -->
                    <?php
                        $conectadorcillo=mysqli_connect("localhost","root","","farmarsarbal");
                        $consultita = "select * from productos where condicion ='1';";
                        $resultadito = mysqli_query($conectadorcillo,$consultita);
                        while($filita = mysqli_fetch_array($resultadito))
                        {
                    ?>
                        <div class="col-lg-4 col-sm-6 mb-4">
                            <div class="portfolio-item">
                                    <img class="img-fluid" src='<?php echo './sisfarma/files/productos/'.$filita["imagen"]; ?>' alt="..." />
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-subheading text-muted"><?php echo $filita["nombre"]; ?></div>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    ?>

                    
                </div>
            </div>
        </section>
        
        <!-- Pie de Pagina-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; BA 2024</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="https://www.youtube.com" aria-label="Twitter" target="_blank"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com" aria-label="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    </div>                    
                </div>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
