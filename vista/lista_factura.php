<?php
    session_start();
    ob_start();
	include '../conexion.php';

    if (isset($_POST['add_to_cart'])) {
        if (isset($_SESSION['cart'])) {
            $session_array_cod = array_column($_SESSION['cart'], "cod_art");

            if(!in_array($_GET['cod_art'], $session_array_cod)){
                
                $session_array = array(
                    'cod_art' => $_GET['cod_art'],
                    'nom_art' => $_POST['nom_art'],
                    'pre_art' => $_POST['pre_art'],
                    'cant' => $_POST['cant'],
                );
            $_SESSION['cart'][] = $session_array;
            }
            
        }else{
            $session_array = array(
                'cod_art' => $_GET['cod_art'],
                'nom_art' => $_POST['nom_art'],
                'pre_art' => $_POST['pre_art'],
                'cant' => $_POST['cant'],
            );
            $_SESSION['cart'][] = $session_array;
        }
    }


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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <link rel="stylesheet" href="style.css">
    <!-- Favicon -->
    <link rel="icon" href="img/core-img/SIRAMEC.jpg">
    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <?php include "funciones.php"; ?>
</head>

<body>
    <!-- ##### Preloader ##### -->
   <!-- <div id="preloader">
        <i class="circle-preloader"></i>
    </div>-->

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
                                        <li><a href="carro_producto.php">Carro de compras</a></li>
                                        <li><a href="index.php">Salir</a></li>
                                    </ul>
                                </div>
                            
                            <!-- Nav End -->
                        </div>

                        <!-- Calling Info -->
                        <div class="calling-info">
                            <div class="call-center">
                                <a href="tel:+573124722197"><i class="fas fa-shopping-cart"></i> <span>Productos a Facturación</span></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/slider2.jpg);">
        <div class="bradcumbConten">
            <h2>PRODUCTOS SELECCIONADOS</h2>
        </div>
    </div><br><br>
    <div class="container-fluid">
        <div class="col-me-12">
            <div class="row">
            <div class="col-md-12"><br>
                   
                    <?php 
                    
                    $total= 0;

                    $output = "";
                    $output .= "
                    <table class='table table-bordered table-striped '>
                    <tr class='table-warning text-center' >
                            <td>Codigo</td>
                            <td>Nombre</td>
                            <td>Precio</td>
                            <td>Cantidad</td>
                            <td>Total Precio</td>
                            <td>Acción </td>
                    </tr>
                    
                    ";
                    
                    if(!empty($_SESSION['cart'])) {
                        foreach ($_SESSION['cart'] as $key => $value){

                            $output .= "
                            <tr>
                            <td>".$value['cod_art']."</td>
                            <td>".$value['nom_art']."</td>
                            <td>$".$value['pre_art']."</td>
                            <td>".$value['cant']."</td>
                            <td>$".number_format($value['pre_art'] * $value['cant'],)."</td>
                            <td>
                            <a href='lista_factura.php?action=remove&cod_art=".$value['cod_art']."'
                            <button type='button' class='btn btn-danger btn-block '>Eliminar</button>
                            </a>
                            </td>
                            
                            ";
                            $total = $total + $value['pre_art'] * $value['cant'];
                        
                    }
                        $output .= "
                        <tr>
                        <td colspan='3'></td>
                        <td></b>Total precio</b></td>
                        <td>".number_format($total,)."</td>
                        <td>
                            <a href='lista_factura.php?action=clearall'>
                            <button class='btn btn-warning btn-block'>Limpiar</button>
                            </a>
                        </td>
                        </tr>
                        <tr>
                        <td class='p-3 mb-2 bg-warning text-dark'>
                        <a target='blank' href='../Vista/pdf/index.php'>Concretar compra</a><td><br><br>
                        </tr>
                        
                        ";
                   
                }
               
                
                
                    echo $output;
                   /* var_dump(array($_SESSION['cart']));*/
                   'public function DescuentoCant(".$value["cod_art"].",".$value["cant"]."){
                    $c= new conectar();
                    $conexion =$c-> conexion();
                    $sql= "SELECT cant_art FROM articulo WHERE cod_art=".$value["cod_art"]."";
                    $result = mysqli_query($conexion,$sql);
                    $cantidad=mysqli_fetch_row($result[0]);
                    $cantidadNueva= abs(".$value["cant"].-$cantidad");
                    $sql = "UPDATE articulo 
                                    SET cant_art="$cantidadNueva"
                                    WHERE cod_art=".$value["cod_art"]."";
                                mysqli_query($conexion,$sql);
                }'
                  
                    ?>
                    
                    
                    
                   
    </div>
    </div>
    </div> 
    </div>
    <?php 
    
    if (isset($_GET['action'])) {

        if ($_GET['action'] == "clearall") {
                unset($_SESSION['cart']);
            }

    if ($_GET['action'] == "remove") {
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value['cod_art'] == $_GET['cod_art']) {
            unset($_SESSION['cart'][$key]);
                }
            }
        }
    }
    ?>

    </div>
    </div> 
    </div>
   
</body>
</html>