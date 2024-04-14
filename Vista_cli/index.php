<?php
       $alert = '';
        session_start();

          
                if ($_SESSION['rol'] !=2) {
                   header('location: ../../proyecto_siramec/index.php');
                }
            
            
            ?>
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/62ea397d3a.js" crossorigin="anonymous"></script>
    <?php include "funciones.php"; ?>
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Siramec | Bienvenidos Cliente</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/SIRAMEC.jpg">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="header-content h-100 d-flex align-items-center justify-content-between">
                            <div class="academy-logo">
                                <a href="index.html"><img src="img/core-img/SIRAMEC.jpg" width="80px"  alt=""></a>
                            </div>
                            <div class="login-content">
                            <i class="fecha">Colombia, <?php echo fechaC(); ?></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp <span> <?php echo $_SESSION['user'] ?> - <span><?php echo $_SESSION['rol'] ?>-Cliente</span></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="sali.php" title="Salir"><i class="fas fa-power-off"></i></a>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="academy-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="academyNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.php">Inicio</a></li>
                                    <li><a href="#">Usuarios</a>
                                        <div class="megamenu">
                                            
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="#">Transportistas</a></li>
                                                <li><a href="Formularios/Formulariotrans/registrotrans.php">Nuevo Transportistas</a></li>
                                                <li><a href="listas/lista_trans.php">Lista Transportistas</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="#">Proveedor</a></li>
                                                <li><a href="Formularios/Formulariopro/index.php">Nuevo Proveedor</a></li>
                                                <li><a href="listas/listaprov/Lista_pro.php">Lista Proveedor</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="#">Destinatario</a></li>
                                                <li><a href="listas/listas_destinatario1/crear_dest.php">Nuevo Destinatario</a></li>
                                                <li><a href="listas/listas_destinatario1/lista_dest.php">Lista Destinatario</a></li>
                                            </ul>
                                            <div class="single-mega cn-col-4">
                                                <img src="img/bg-img/bg-1.png" alt="">
                                            </div>
                                        </div>
                                       <!--- <li><a href="#">Articulo</a>
                                            <ul class="dropdown">
                                                <li><a href="Formularios/Formulariosart/crear_mercancia.php">Nuevo </a></li>
                                                <li><a href="listas/listas_mercancia/lista_mercancia.php">Lista Articulos</a></li>
                                                
                                            </ul>
                                        </li>-->
                                        <li><a href="#">Facturas</a>
                                            <ul class="dropdown">
                                             
                                                <li><a href="listas/lista_facturas/factura_1.php">F. pendientes</a></li>
                                                <li><a href="listas/lista_facturas/factura_2.php">F. entregadas</a></li>
                                                <li><a href="listas/lista_facturas/anulada.php">F. Anuladas</a></li>
                                                
                                            </ul>
                                        </li>
                                       <!-- <li><a href="#">Pedidos</a>
                                            <ul class="dropdown">
                                                <li><a href="Formularios/Formularioped/index.php">Nuevo Pedido </a></li>
                                                <li><a href="about-us.html">lista pedido</a></li>
                                                
                                            </ul>
                                        </li>-->
                                        <li><a href="contact.html">Contacto</a></li>
                                    </ul>
                                </div>
                            
                            <!-- Nav End -->
                        </div>

                        <!-- Calling Info -->
                        <div class="calling-info">
                            <div class="call-center">
                                <a href="tel:3217708976"><i class="fas fa-mobile-alt"></i> <span>(+57) 848 50 11</span></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/enca.jpg);">
        <div class="bradcumbContent">
            <h2>Bienvenido Cliente</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area mt-50 section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="academy-blog-posts">
                        <div class="row">

                            <!-- Single Blog Start -->
                            <div class="col-12">
                                <div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="300ms">
                                    <!-- Post Thumb -->
                                    <div class="blog-post-thumb mb-50">
                                        <img src="img/blog-img/11.jpg" alt="">
                                    </div>
                                    <!-- Post Title -->
                                    <a href="#" class="post-title">Está disponible en nuestro Ranking Digital de Mercados las ventas y crecimiento de las  empresas líderes</a>
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <p>De <a href="#">edairynews</a> | <a href="#">Agosto 2020</a> | <a href="#">3 comments</a></p>
                                    </div>
                                    <!-- Post Excerpt -->
                                    <p>En 2019, Alpina Colombia con su filial Alpina Cauca Zona Franca le acortó distancias a la líder Colanta, mientras que el grupo confrmado por Alquería, Freskaleche, Dasa de Colombia, CPNS y Lácteos Rovirenses ocupó el tercer lugar. Posteriormente se situó el Grupo Nutresa con Meals de Colombia, Schadel, y New Brands, seguido de Parmalat Colombia y su subordinada Proleche. Mas atrás se posicionaron Gloria Colombia, Lácteos Betania, Coolechera, Alival, Lácteos El Recreo, Auralac, Lácteos Colfrance, Celema, Helados Popsy, Proalimentos Liber, Sabanalac, y Cooprolácteos.</p>
                                    <!-- Read More btn -->
                                    <a href="https://edairynews.com/es/ranking-2019-lideres-productos-lacteos-de-colombia-145056/" class="btn academy-btn btn-sm mt-15">Conoce más</a>
                                </div>
                            </div>

                            <!-- Single Blog Start -->
                            <div class="col-12">
                                <div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="400ms">
                                    <!-- Post Thumb -->
                                    <div class="blog-post-thumb mb-50">
                                        <img src="img/blog-img/22.jpg" alt="">
                                    </div>
                                    <!-- Post Title -->
                                    <a href="#" class="post-title">El business to consumers (de empresa a consumidor)</a>
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <p>De <a href="#">Anonimo</a> | <a href="#"> diciembre 15 2020</a> | <a href="#">3 comments</a></p>
                                    </div>
                                    <!-- Post Excerpt -->
                                    <p>Es básicamente toda la clase publicidad que se puede conocer. Las estrategias de publicidad y marketing trabajan día a día sobre este target, intentando atraerlos para aumentar las ventas de sus marcas. 

                                        Si revisas tus redes sociales, si te encuentras caminando por la calle o si estás viendo la televisión seguro te encontrarás con estrategias B2C todo el tiempo..</p>
                                    <!-- Read More btn -->
                                    <a href="https://economipedia.com/definiciones/business-to-consumer-b2c.html" class="btn academy-btn btn-sm mt-15">Conoce Más</a>
                                </div>
                            </div>

                            <!-- Single Blog Start -->
                            <div class="col-12">
                                <div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="500ms">
                                    <!-- Post Thumb -->
                                    <div class="blog-post-thumb mb-50">
                                        <img src="img/blog-img/ccc.jpg" alt="">
                                    </div>
                                    <!-- Post Title -->
                                    <a href="#" class="post-title">Lidl es una cadena de supermercados</a>
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <p>De <a href="#">Noemi A.
                                           </a> | <a href="#"> 9 de enero de 2021</a> | <a href="#">3 comments</a></p>
                                    </div>
                                    <!-- Post Excerpt -->
                                    <p> Este impulso se debe en parte a la modernización de sus instalaciones, que al principio se parecían más a almacenes de compras al por mayor y no favorecían la experiencia de compra. Ahora las tiendas son amplias, luminosas, limpias y modernas, a lo que se suma una mayor variedad de productos y una excelente relación calidad-precio.</p>
                                    <!-- Read More btn -->
                                    <a href="https://empresa.lidl.es/sobre-lidl" class="btn academy-btn btn-sm mt-15">Conoce Más</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Pagination Area Start -->
                    <div class="academy-pagination-area wow fadeInUp" data-wow-delay="400ms">
                        <nav>
                            <ul class="pagination">
                                <li class="page-item active"><a class="page-link" href="index.html">01</a></li>
                                <li class="page-item"><a class="page-link" href="#">02</a></li>
                               
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="academy-blog-sidebar">
                        <!-- Blog Post Widget -->
                        <div class="blog-post-search-widget mb-30">
                            <form action="#" method="post">
                                <input type="search" name="search" id="Search" placeholder="Buscar">
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>

                        <!-- Blog Post Catagories -->
                        <div class="blog-post-categories mb-30">
                            <h5>Categorias</h5>
                            <ul>
                                <li><a href="#">Administración</a></li>
                                <li><a href="#">Marketing</a></li>
                                <li><a href="#">Publicidad</a></li>
                                <li><a href="#">Negociadores</a></li>
                            </ul>
                        </div>

                        <!-- Latest Blog Posts Area -->
                        <div class="latest-blog-posts mb-30">
                            <h5>Ultimas Publicaciones</h5>
                            <!-- Single Latest Blog Post -->
                            <div class="single-latest-blog-post d-flex mb-30">
                                <div class="latest-blog-post-thumb">
                                    <img src="img/blog-img/lb-1.jpg" alt="">
                                </div>
                                <div class="latest-blog-post-content">
                                    <a href="#" class="post-title">
                                        <h6>Productos de excelente calidad</h6>
                                    </a>
                                    <a href="#" class="post-date">Siramec, 2021</a>
                                </div>
                            </div>
                            <!-- Single Latest Blog Post -->
                            <div class="single-latest-blog-post d-flex mb-30">
                                <div class="latest-blog-post-thumb">
                                    <img src="img/blog-img/lb-2.jpg" alt="">
                                </div>
                                <div class="latest-blog-post-content">
                                    <a href="#" class="post-title">
                                        <h6>Una gran manera de empezar</h6>
                                    </a>
                                    <a href="#" class="post-date">Siramec, 2021</a>
                                </div>
                            </div>
                            <!-- Single Latest Blog Post -->
                            <div class="single-latest-blog-post d-flex mb-30">
                                <div class="latest-blog-post-thumb">
                                    <img src="img/blog-img/lb-3.jpg" alt="">
                                </div>
                                <div class="latest-blog-post-content">
                                    <a href="#" class="post-title">
                                        <h6>Nuevos productos para ti</h6>
                                    </a>
                                    <a href="#" class="post-date">Siramec, 2021</a>
                                </div>
                            </div>
                            <!-- Single Latest Blog Post -->
                            <div class="single-latest-blog-post d-flex">
                                <div class="latest-blog-post-thumb">
                                    <img src="img/blog-img/lb-4.jpg" alt="">
                                </div>
                                <div class="latest-blog-post-content">
                                    <a href="#" class="post-title">
                                        <h6>Comienza hoy, con nosotros</h6>
                                    </a>
                                    <a href="#" class="post-date">Siramec, 2021</a>
                                </div>
                            </div>
                        </div>

                        <!-- Add Widget -->
                        <div class="add-widget">
                            <a href="#"><img src="img/blog-img/edd.jpg" alt=""></a>
                        </div><br> <br>
                        <div class="add-widget">
                            <a href="#"><img src="img/blog-img/add.png" alt=""></a>
                        </div> <br> <br>
                        <div class="add-widget">
                            <a href="#"><img src="img/blog-img/33.jpg" alt=""></a>
                        </div> <br> <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Area End ##### -->

    
    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="main-footer-area section-padding-100-0">
            <div class="container">
                <div class="row">
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <a href="#"><img src="img/core-img/logoo.png" alt=""></a>
                            </div>
                            <p>Sistema De Registro De Almacenamiento De Mercancías De Los Clientes. Aplicación web de registro de mercancías de diversos clientes, cuyos destinatarios pueden hacer pedidos mediante ella y se pueden registrar todas las entradas y salidas de mercancías, así como los proveedores y transportistas que las suministran..</p>
                            <div class="footer-social-info">
                                <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                                <a href="https://twitter.com/?lang=es"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.youtube.com/?gl=CO"><i class="fa fa-youtube"></i></a>
                                <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Menú:</h6>
                            </div>
                            <nav>
                                <ul class="useful-links">
                                    <li><a href="">Usuarios</a></li>
                                    <li><a href="#">Mercancia</a></li>
                                    <li><a href="#">Articulo</a></li>
                                    <li><a href="#">Pedidos</a></li>
                                    <li><a href="#">Contacto</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Galeria</h6>
                            </div>
                            <div class="gallery-list d-flex justify-content-between flex-wrap">
                                <a href="img/bg-img/gallery1.jpg" class="gallery-img" title="Galeria imagen 1"><img src="img/bg-img/pedidos.jpg" alt=""></a>
                                <a href="img/bg-img/gallery2.jpg" class="gallery-img" title="Galeria imagen 2"><img src="img/bg-img/galeria2.jpg" alt=""></a>
                                <a href="img/bg-img/gallery3.jpg" class="gallery-img" title="Galeria imagen 3"><img src="img/bg-img/galeria3.jpg" alt=""></a>
                                <a href="img/bg-img/galeria44.jpg" class="gallery-img" title="Galeria imagen 4"><img src="img/bg-img/galeria44.jpg" alt=""></a>
                                <a href="img/bg-img/gallery5.jpg" class="gallery-img" title="Galeria imagen 5"><img src="img/bg-img/galeria5.jpg" alt=""></a>
                                <a href="img/bg-img/galeria66.jpg" class="gallery-img" title="Galeria imagen 6"><img src="img/bg-img/galeria66.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Contactos</h6>
                            </div>
                            <div class="single-contact d-flex mb-30">
                                <i class="icon-placeholder"></i>
                                <p>Carrera 49 # 49 A - 39/ 
                                    Andes-Antioquia</p>
                            </div>
                            <div class="single-contact d-flex mb-30">
                                <i class="icon-telephone-1"></i>
                                <p>Telefono: 203-808-8613 <br>Grupal: 203-808-8648</p>
                            </div>
                            <div class="single-contact d-flex">
                                <i class="icon-contract"></i>
                                <p>Siramec@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> SIRAMEC| Todos los derehos reservados <i class="fa fa-heart-o" aria-hidden="true"></i> De <a href="https://colorlib.com" target="_blank">Sena La salada</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>