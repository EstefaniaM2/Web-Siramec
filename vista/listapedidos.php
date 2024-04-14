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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <link rel="stylesheet" href="style.css">
    <title>lISTA CARRITO</title>
</head>
<body>
<div class="container-fluid">
        <div class="col-me-12">
            <div class="row">
            <div class="col-md-12"><br>
                    <h2 class="text-center">PRODUCTOS SELECCIONADOS</h2>
                    <h6 class="titulo"><a href="producto.php">Factura  de compras</a></h6>
                    <h6 class="titulo"><a href="index.php">salir</a></h6><br><br>
                    <?php 
                    
                    $total= 0;

                    $output = "";
                    $output .= "
                    <table class='table table-bordered table-striped'>
                    <tr>
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
                            <a href='listapedidos.php?action=remove&cod_art=".$value['cod_art']."'
                            <button class='btn btn-danger btn-block'>Eliminar</button>
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
                            <a href='listapedidos.php?action=clearall'>
                            <button class='btn btn-warning btn-block'>Limpiar</button>
                            </a>
                        </td>
                        </tr>
                        <tr>
                        <td>
                        <a target='blank' href='../Vista/pdf/index.php'>Concretar compra</a><td>
                        </tr>
                        
                        ";
                    
                }
                
                
                    echo $output;
                   /* var_dump(array($_SESSION['cart']));*/
                 
                  
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