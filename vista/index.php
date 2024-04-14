<?php
      $alert = '';
        session_start();

           
               /* if ($_SESSION['nom_des'] !='estefa') {
                   header('location: ../../proyecto_siramec/index.php');
                }*/
            
            
               ?>
            
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Siramec | Bienvenidos Destinatario</title>
    <script src="https://kit.fontawesome.com/62ea397d3a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!-- Favicon -->
    <link rel="icon" href="img/core-img/SIRAMEC.jpg">
    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <?php include "funciones.php"; ?>
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
                            <i class="fecha">Colombia, <?php echo fechaC(); ?></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp <span> <?php echo $_SESSION['nom_des'] ?>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="sali.php" title="Salir"><i class="fas fa-power-off"></i></a>
                                
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
                                    
                                        
                                        
                                        <!--<li><a href="#">Pedidos</a>
                                            <ul class="dropdown">
                                                <li><a href="Formularioped/index.php">Nuevo Pedido </a></li>
                                                <li><a href="listapedidos.php">lista pedido</a></li>
                                                
                                            </ul>
                                        </li>-->
                                        <li><a href="lista_factura.php">Factura</a></li>
                                        <li><a href="carro_producto.php">Carrito compras</a></li>
                                        <li><a href="contact.html">Contacto</a></li>
                                    </ul>
                                </div>
                            
                            <!-- Nav End -->
                        </div>

                        <!-- Calling Info -->
                        <div class="calling-info">
                            <div class="call-center">
                                <a href="tel:+573124722197"><i class="fas fa-mobile-alt"></i> <span>(+57) 848 50 11</span></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/slider2.jpg);">
        <div class="bradcumbContent">
            <h2>Bienvenido Destinatario</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### About Us Area Start ##### -->
    <section class="about-us-area mt-50 section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                        <span>Pide ya!</span>
                        <h3>Haz tu pedido facilmente</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <p>La logistica en las empresas suele ser algo extenso y con muchas eapas. dos de ellas, que integran la logistica y el Almacenamient, son el picking y packing, ¿Los conocias? <br>
                        Dos de los términos anglosajones más utilizados en el sector son picking y packing. Ambos son esenciales para optimizar la gestión de un almacén.
                        son dos procesos diferentes, entre elllos son complementarios, ya que el picking prepara el pedido antes de ser empacado y después, el Packing se encarga del embalaje del producto.
                    </p>
                </div>
                <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                    <p>La palabra picking se traduce del inglés como “recogida, selección o recolección”. Se trata del proceso de preparación de un pedido, donde se seleccionan y recogen los productos de los diferentes lugares de un almacén (pasillos, estantes etc.) y después se organizan antes de su empaquetado para posteriormente realizar el envío al destinatario final. <br>

                    En cambio, el término packing se refiere a todo el proceso embalado, empaquetado y envasado de un producto. </p><br>
               <p> ¿Estas trabajando desde casa? una de las opciones para pedir tus paquetes puede ser la recoleccion a domicilio. enterate como funciona aqui: <a href="https://encolombia.com/economia/empresas/logistica/envios-desde-casa/">Click Aqui</a></p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="about-slides owl-carousel mt-100 wow fadeInUp" data-wow-delay="600ms">
                        <img src="img/bg-img/slider1.jpg" alt="">
                        <img src="img/bg-img/slider2.jpg" alt="">
                        <img src="img/bg-img/slider3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Us Area End ##### -->

    <!-- ##### Team Area Start ##### -->
    <section class="teachers-area section-padding-0-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                        <span>Los productos</span>
                        <h3>Con más demanda Online</h3>
                    </div>
                </div>
            </div>
                
            <div class="row">
                <!-- Single Teachers -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-teachers-area text-center mb-100 wow fadeInUp" data-wow-delay="400ms">
                        <!-- Thumbnail -->
                        <div class="teachers-thumbnail">
                            <img src="img/pedidos/leche.jpg" alt="">
                        </div>
                        <!-- Meta Info -->
                        <div class="teachers-info mt-30">
                        <a href="Formularioped/fleche.php"><h5>Leche</h5></a>
                          <!-- <button href="Formularioped/index.php"><span>Mas vendido #1</span></button>--> 
                         <a href="carro_producto.php">
                           <button class='btn btn-warning btn-block'>Ver más</button>
                           </a>
                        </div>
                    </div>
                </div>
                <!-- Single Teachers -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-teachers-area text-center mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <!-- Thumbnail -->
                        <div class="teachers-thumbnail">
                            <img src="img/pedidos/coca.jpg" alt="">
                        </div>
                        <!-- Meta Info -->
                        <div class="teachers-info mt-30">
                        <a href="Formularioped/fcoca.phpp"><h5>Coca-Cola</h5></a>
                            <!--<span>Mas vendido #2</span>-->
                            <a href="carro_producto.php">
                           <button class='btn btn-warning btn-block'>Ver más</button>
                           </a>
                        </div>
                    </div>
                </div>
                <!-- Single Teachers -->
               <a href="" > <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-teachers-area text-center mb-100 wow fadeInUp" data-wow-delay="600ms">
                        <!-- Thumbnail -->
                        <div class="teachers-thumbnail">
                           <a href=""> <img src="img/pedidos/mante.jpg" alt=""></a>
                        </div>
                        <!-- Meta Info -->
                        <div class="teachers-info mt-30">
                           <a href="Formularioped/fmantequilla.php"><h5 name="mante">Mantequilla</h5></a>
                           <a href="carro_producto.php">
                           <button class='btn btn-warning btn-block'>Ver más</button>
                           </a>
                        </div>
                    </div>
                </div></a>
                   <!-- Single Teachers -->
               <a href="" > <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-teachers-area text-center mb-100 wow fadeInUp" data-wow-delay="600ms">
                        <!-- Thumbnail -->
                        <div class="teachers-thumbnail">
                           <a href=""> <img src="img/pedidos/huevo.jpg" alt=""></a>
                        </div>
                        <!-- Meta Info -->
                        <div class="teachers-info mt-30">
                           <a href="Formularioped/fhuevo.php"><h5>Huevos</h5></a>
                           <a href="carro_producto.php">
                           <button class='btn btn-warning btn-block'>Ver más</button>
                           </a>
                        </div>
                    </div>
                </div></a>
                   <!-- Single Teachers -->
               <a href="" > <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-teachers-area text-center mb-100 wow fadeInUp" data-wow-delay="600ms">
                        <!-- Thumbnail -->
                        <div class="teachers-thumbnail">
                           <a href=""> <img src="img/pedidos/verdura.jpg" alt=""></a>
                        </div>
                        <!-- Meta Info -->
                        <div class="teachers-info mt-30">
                           <a href="Formularioped/verdura.php"><h5>Verdura</h5></a>
                           <a href="carro_producto.php">
                           <button class='btn btn-warning btn-block'>Ver más</button>
                           </a>
                        </div>
                    </div>
                </div></a>
                   <!-- Single Teachers -->
               <a href="" > <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-teachers-area text-center mb-100 wow fadeInUp" data-wow-delay="600ms">
                        <!-- Thumbnail -->
                        <div class="teachers-thumbnail">
                           <a href=""> <img src="img/pedidos/pan.jpg" alt=""></a>
                        </div>
                        <!-- Meta Info -->
                        <div class="teachers-info mt-30">
                           <a href="Formularioped/natipan.php"><h5>Natipan</h5></a>
                           <a href="carro_producto.php">
                           <button class='btn btn-warning btn-block'>Ver más</button>
                           </a>
                        </div>
                    </div>
                </div></a>
                   <!-- Single Teachers -->
               <a href="" > <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-teachers-area text-center mb-100 wow fadeInUp" data-wow-delay="600ms">
                        <!-- Thumbnail -->
                        <div class="teachers-thumbnail">
                           <a href=""> <img src="img/pedidos/yogurt.jpg" alt=""></a>
                        </div>
                        <!-- Meta Info -->
                        <div class="teachers-info mt-30">
                           <a href="Formularioped/yogurt.php"><h5>Yogurt</h5></a>
                           <a href="carro_producto.php">
                           <button class='btn btn-warning btn-block'>Ver más</button>
                           </a>
                        </div>
                    </div>
                </div></a>
                <!-- Single Teachers -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-teachers-area text-center mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <!-- Thumbnail -->
                        <div class="teachers-thumbnail">
                            <img src="img/pedidos/carne.jpg" alt="">
                        </div>
                        <!-- Meta Info -->
                        <div class="teachers-info mt-30">
                        <a href="Formularioped/carne.php"><h5>Carne</h5></a>
                        <a href="carro_producto.php">
                           <button class='btn btn-warning btn-block'>Ver más</button>
                           </a>
                        </div>
                    </div>
                </div>
            </div>
            

            <div class="row">
                <div class="col-12">
                    <div class="view-all text-center wow fadeInUp" data-wow-delay="800ms">
                        <a href="https://thefoodtech.com/tendencias-de-consumo/productos-mas-vendidos-en-dia-online/" class="btn academy-btn">Conoce más</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Features Area Start ##### -->

    
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