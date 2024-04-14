<?php
       $alert = '';
        session_start();

           
                if ($_SESSION['rol'] !=1) {
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
    <link rel="stylesheet" href="css/card.css">
    <?php include "funciones.php"; ?>
    
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Siramec | Bienvenido Admin</title>

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
                               
                            <i class="fecha">Colombia, <?php echo fechaC(); ?></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp <span> <?php echo $_SESSION['user'] ?> - <span><?php echo $_SESSION['rol'] ?>-Administrador</span></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="sali.php" title="Salir"><i class="fas fa-power-off"></i></a>
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

                        <!--
                             Navbar Toggler -->
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
                                                <li><a href="#">Cliente</a></li>
                                                <li><a href="Formularios/Formulariocli/index.php">Nuevo Cliente</a></li>
                                                <li><a href="listas/lista_usuarios.php">Lista Usuarios</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="#">Transportistas</a></li>
                                                <li><a href="listas/lista_trans.php">Lista Transportistas</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="#">Proveedor</a></li>
                                                <li><a href="listas/listaprov/Lista_pro.php">Lista Proveedor</a></li>
                                            </ul>
                                            
                                            -<div class="single-mega cn-col-4">
                                                <img src="img/bg-img/bg-1.png" alt="">
                                            </div>
                                        </div>
                                    </li>
                                    
                                    <li><a href="#">Articulo</a>
                                        <ul class="dropdown">
                                            <li><a href="Formularios/Formulariosart/crear_mercancia.php">Nuevo </a></li>
                                            <li><a href="listas/listas_mercancia/lista_mercancia.php">Lista Artículos</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Facturas</a>
                                            <ul class="dropdown">
                                             
                                                <li><a href="listas/lista_facturas/factura_1.php">F.pendientes</a></li>
                                                <li><a href="listas/lista_facturas/factura_2.php">F. entregadas</a></li>
                                                <li><a href="listas/lista_facturas/anulada.php">F. Anuladas</a></li>
                                                
                                            </ul>
                                        </li>
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

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">

            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(img/bg-img/22.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h4 data-animation="fadeInUp" data-delay="100ms">PRODUCTOS DE LA MEJOR CALIDAD</h4>
                                <h2 data-animation="fadeInUp" data-delay="400ms">Bienvenidos a <br>SIRAMEC WEB</h2>
                                <a href="#" class="btn academy-btn" data-animation="fadeInUp" data-delay="700ms">Ver más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(img/bg-img/221.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h4 data-animation="fadeInUp" data-delay="100ms">Almacenamos tu mercancia con responsabilidad</h4>
                                <h2 data-animation="fadeInUp" data-delay="400ms">Bienvenidos a <br>SIRAMEC WEB</h2>
                                <a href="#" class="btn academy-btn" data-animation="fadeInUp" data-delay="700ms">Ver más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Top Feature Area Start ##### -->
    <div class="top-features-area wow fadeInUp" data-wow-delay="300ms">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="features-content">
                        <div class="row no-gutters">
                            <!-- Single Top Features -->
                            <div class="col-12 col-md-4">
                                <div class="single-top-features d-flex align-items-center justify-content-center">
                                    <i class="icon-agenda-1"></i>
                                    <h5>Tienda Online</h5>
                                </div>
                            </div>
                            <!-- Single Top Features -->
                            <div class="col-12 col-md-4">
                                <div class="single-top-features d-flex align-items-center justify-content-center">
                                    <i class="icon-assistance"></i>
                                    <h5>Nuestros Clientes</h5>
                                </div>
                            </div>
                            <!-- Single Top Features -->
                            <div class="col-12 col-md-4">
                                <div class="single-top-features d-flex align-items-center justify-content-center">
                                    <i class="icon-telephone-3"></i>
                                    <h5>Teléfono de soporte</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
       
         <div class="galery">
                <h2 class="title" >SERVICIOS</h2>
                <p class="parrafo">Prestamos nuestros servicios en compromiso y total responsabilidad y cumplimiento , cuidando las mercancías como nuestro mayor tesoro,<br> por estas y muchas más razones nuestros clientes nos prefieren </p>
            
            <div class="contenedor">
                <div class="card">
                    <img src="img/bg-img/clientes.jpg" alt="">
                    <h4 class="subt">Relacionamiento con los clientes</h4>
                   <p class="subp">Registro y control de clientes.</p>
                   <a href="" class="btn academy-btn btn-sm">Leer mas</a>
                </div>
            
            
                <div class="card">
                    <img src="img/bg-img/camion.jpg" alt="">
                    <h4 class="subt">Transporte de pedido</h4>
                   <p class="subp">Entregamos los pedidos a sus destinatario.</p>
                   <a href="" class="btn academy-btn btn-sm">Leer mas</a>
                </div>
            
          
                <div class="card">
                    <img src="img/bg-img/pedidos.jpg" alt="">
                    <h4 class="subt">Recepcion de pedidos</h2>
                        <p class="subp"> Recibir y preparar los pedidos para nuestros clientes</p>
                        <a href="" class="btn academy-btn btn-sm">Leer mas</a>
                </div>
                <div class="card">
                    <img src="img/bg-img/alm.jpg" alt="">
                    <h4 class="subt">Almacenamiento de mercancias</h4>
                    <p class="subp">Control y registro de mercancias </p>
                    <a href="" class="btn academy-btn btn-sm">Leer mas</a>
                </div>
            
        </div>
           
            
        
    <!-- ##### Course Area Start ##### -->
  <!--  <div class="academy-courses-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Single Course Area --
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <div class="course-icon">
                            <i class="icon-id-card"></i>
                        </div>
                        <div class="course-content">
                            <h4>Business School</h4>
                            <p>Cras vitae turpis lacinia, lacinia la cus non, fermentum nisi.</p>
                        </div>
                    </div>
                </div>
                <!-- Single Course Area --
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="400ms">
                        <div class="course-icon">
                            <i class="icon-worldwide"></i>
                        </div>
                        <div class="course-content">
                            <h4>Marketing</h4>
                            <p>Lacinia, lacinia la cus non, fermen tum nisi.</p>
                        </div>
                    </div>
                </div>
                <!-- Single Course Area --
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <div class="course-icon">
                            <i class="icon-map"></i>
                        </div>
                        <div class="course-content">
                            <h4>Photography</h4>
                            <p>Cras vitae turpis lacinia, lacinia la cus non, fermentum nisi.</p>
                        </div>
                    </div>
                </div>
                <!-- Single Course Area --
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="600ms">
                        <div class="course-icon">
                            <i class="icon-like"></i>
                        </div>
                        <div class="course-content">
                            <h4>Social Media</h4>
                            <p>Cras vitae turpis lacinia, lacinia la cus non, fermentum nisi.</p>
                        </div>
                    </div>
                </div>
                <!-- Single Course Area --
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <div class="course-icon">
                            <i class="icon-responsive"></i>
                        </div>
                        <div class="course-content">
                            <h4>Development</h4>
                            <p>Lacinia, lacinia la cus non, fermen tum nisi.</p>
                        </div>
                    </div>
                </div>
                <!-- Single Course Area --
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="800ms">
                        <div class="course-icon">
                            <i class="icon-message"></i>
                        </div>
                        <div class="course-content">
                            <h4>Design</h4>
                            <p>Cras vitae turpis lacinia, lacinia la cus non, fermentum nisi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- ##### Course Area End ##### -->

    <!-- ##### Testimonials Area Start ##### -->
    <div class="testimonials-area section-padding-100 bg-img bg-overlay" style="background-image: url(img/bg-img/bgg2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto white wow fadeInUp" data-wow-delay="300ms">
                        <span>SIRAMEC</span>
                        <h3>Desalloradores web</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Single Testimonials Area -->
                <div class="col-12 col-md-6">
                    <div class="single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="400ms">
                        <div class="testimonial-thumb">
                            <img src="img/bg-img/tt1.jpg" alt="">
                        </div>
                        <div class="testimonial-content">
                            <h5>xx</h5>
                            <p>Estudiante de tecnologia en Analisis y Desarrollo de sistemas de información sena, centro de los recursos naturales y renovables la salada. 22 años de edad residente en Andes Antioquia .</p>
                            <h6><span>Cargo,</span> Analista</h6>
                        </div>
                    </div>
                </div>
                <!-- Single Testimonials Area -->
                <div class="col-12 col-md-6">
                    <div class="single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="500ms">
                        <div class="testimonial-thumb">
                            <img src="img/bg-img/t2.jpg" alt="">
                        </div>
                        <div class="testimonial-content">
                            <h5>xx</h5>
                            <p>Estudiante de tecnologia en Analisis y Desarrollo de sistemas de información sena, centro de los recursos naturales y renovables la salada. 18 años de edad residente en Andes Antioquia .</p>
                            <h6><span>Cargo,</span> Administrador</h6>
                        </div>
                    </div>
                </div>
                <!-- Single Testimonials Area -->
                <div class="col-12 col-md-6">
                    <div class="single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="600ms">
                        <div class="testimonial-thumb">
                            <img src="img/bg-img/t3.jpg" alt="">
                        </div>
                        <div class="testimonial-content">
                            <h5>xx</h5>
                            <p>Estudiante de tecnologia en Analisis y Desarrollo de sistemas de información sena, centro de los recursos naturales y renovables la salada. 19 años de edad residente en Andes Antioquia .</p>
                            <h6><span>Cargo,</span> Asegurador de calidad</h6>
                        </div>
                    </div>
                </div>
                <!-- Single Testimonials Area --->
                <div class="col-12 col-md-6">
                    <div class="single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="700ms">
                        <div class="testimonial-thumb">
                            <img src="img/bg-img/t4.jpg" alt="">
                        </div>
                        <div class="testimonial-content">
                            <h5>xx</h5>
                            <p>Estudiante de tecnologia en Analisis y Desarrollo de sistemas de información sena, centro de los recursos naturales y renovables la salada. 17 años de edad residente en Andes Antioquia .</p>
                            <h6><span>Cargo,</span> Documentador</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="load-more-btn text-center wow fadeInUp" data-wow-delay="800ms">
                        <a href="#" class="btn academy-btn">VER MÁS</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Testimonials Area End ##### -->

    <!-- ##### Top Popular Courses Area Start ##### -->
    <div class="top-popular-courses-area section-padding-100-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                        <span>Lo mejor</span>
                        <h3>NUESTROS PRODUCTOS</h3>
                    </div>
                </div>
            </div>
            <div class="row">
               
                <!-- Single Top Popular Course -->
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="400ms">
                        <div class="popular-course-content">
                            <h5>CEREALES</h5>
                            <span>De Siramec   |  Marzo, 2021</span>
                            <div class="course-ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <p>¿Quieres comer un desayuno bajo en grasas y con beneficios para tu salud? Nuestros cereales tienen unas características que te encantarán…<BR>
                                	Aportan una gran cantidad de energía y nutrientes en comparación con otras fuentes de carbohidratos.<br>
                                
                                	Son muy buena fuente de fibra y vitaminas si se consumen integrales.</p>
                            <a href="https://fundaciondelcorazon.com/nutricion/alimentos/793-cereales-y-derivados.html" class="btn academy-btn btn-sm">Ver Más</a>
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url(img/bg-img/pcc2.jpeg);"></div>
                    </div>
                </div>
                
                <!-- Single Top Popular Course -->
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="500ms">
                        <div class="popular-course-content">
                            <h5>LICORES</h5>
                            <span>De Siramec   |  Marzo, 2021</span>
                            <div class="course-ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <p>¿Conoces los diferentes tipos de licores que existen? Nosotros los tenemos todos…<BR>
                                	Licor de frutas: como puedes imaginar comprenden los licores que se hacen principal mente con las frutas  de practicamente todos los árboles frutales del mundo.<BR>
                                	Licor de Hierbas: estos licores comprenden los licores compuestos que se elaboran por hierbas aromáticas o especias.</p>
                            <a href="https://www.supercamarero.com/2019/12/que-son-los-licores-y-sus.html" class="btn academy-btn btn-sm">Ver más</a>
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url(img/bg-img/pcc1.jpeg);"></div>
                    </div>
                </div>
                
                <!-- Single Top Popular Course -->
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="600ms">
                        <div class="popular-course-content">
                            <h5>DULCES</h5>
                            <span>De Siramec   |  Marzo, 2021</span>
                            <div class="course-ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <p>DULCES
                                ¿Eres amante a comer dulces y estas cansado de lo mismo de siempre? Mira los deliciosos dulces que tenemos para ti…<BR>
                                
                                Los dulces hacen parte de nuestra alimentación diaria y nos aportan calorías para nuestro cuerpo, además de esto nos ayudan para la concentración en las labores que desempeñamos a diario. ¡Que no nos falte diariamente un rico dulce!.</p>
                            <a href="https://www.ecured.cu/Dulces#:~:text=Los%20alimentos%20dulces%20suelen%20formar,sabor%20dulce%20se%20denominan%20edulcorantes" class="btn academy-btn btn-sm">Ver Más</a>
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url(img/bg-img/pcc3.jpeg);"></div>
                    </div>
                </div>
                
                <!-- Single Top Popular Course -->
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="700ms">
                        <div class="popular-course-content">
                            <h5>PRODUCTOS DE ASEO</h5>
                            <span>De Siramec   |  Marzo, 2021</span>
                            <div class="course-ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <p>¿Sabías que si limpias correctamente tu hogar proteges a tu familia de virus y enfermedades? Nuestros productos limpian un 99.9% de gérmenes y bacterias de tu hogar…<br>

                                Los productos de limpieza desempeñan un papel esencial en la vida diaria en el hogar, en la escuela y en la oficina. Mediante la eliminación segura y eficaz de la tierra, los gérmenes y otros </p>
                            <a href="https://www.chemicalsafetyfacts.org/es/productos-de-limpieza/" class="btn academy-btn btn-sm">Ver Más</a>
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url(img/bg-img/pcc4.jpeg);"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Top Popular Courses Area End ##### -->

    <!-- ##### Partner Area Start ##### -->
    <div class="partner-area section-padding-0-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="partners-logo d-flex align-items-center justify-content-between flex-wrap">
                        <a href="#"><img src="img/clients-img/im1.png" alt=""></a>
                        <a href="#"><img src="img/clients-img/im2.png" alt=""></a>
                        <a href="#"><img src="img/clients-img/im3.png" alt=""></a>
                        <a href="#"><img src="img/clients-img/im4.png" alt=""></a>
                        <a href="#"><img src="img/clients-img/im5.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Partner Area End ##### -->

    <!-- ##### CTA Area Start ##### -->
    <div class="call-to-action-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content d-flex align-items-center justify-content-between flex-wrap">
                        <h3>Suscribete a nuestro boletin!</h3>
                                <form>
                                    <input type="email" name="Email" placeholder="Ingrese su email">
                                    <a href="#" class="btn academy-btn">Suscribete</a>
                                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### CTA Area End ##### -->

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
                                <p>info.Siramec@gmail.com</p>
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