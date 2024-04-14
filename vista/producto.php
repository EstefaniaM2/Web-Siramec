<?php
    session_start();
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
    <title>Carro de compras</title>
    <link rel="stylesheet" href="../css/carro.css">
    <script src="https://kit.fontawesome.com/62ea397d3a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <link rel="stylesheet" href="style.css">
  
   
</head>
<body>
    <div class="container-fluid">
        <div class="col-me-30">
            <div class="row">                                                                                                                                                                           
                <div class="col-md-30">
                <header>
               <nav class="nav">
                <ul class="nav__ul">
               <li class="nav__li"><i class="fas fa-home"></i><a href="">Inicio</a></li>
               <li class="nav__li"><i class="fas fa-user-friends"></i><a href="carro_producto.php">Iniciar Sessión</a></li>
               <li class="nav__li"><i class="fas fa-user-secret"></i><a href="registrar.php">Registrarse</a></li>
               <li class="nav__li"><i class="fas fa-question-circle"></i><a href="Vista/pdf/iniciar_seccion.php">Destinatario</a></li>
         
            </ul>
            </nav>
            </header>
                      <h2 class="titulo">CARRITO DE COMPRAS</h2>
                      <h6 class="titulo" ><a href="listapedidos.php">Lista de Productos</a></h6>
                      <h6 class="titulo"><a href="index.php">salir</a></h6>
                      
                      <div class="col-md-10">
                      <div class="row">
                     
                        <?php 
                        $query= "SELECT * FROM articulo ";
                        $resultado  = mysqli_query($conexion,$query);

                        while ($row = mysqli_fetch_array($resultado)){?>
                        <div class="col-3">
                            <form method="post" action="producto.php?cod_art=<?=$row['cod_art'] ?>">
                          
                                <img class="imaa" src="../Vista_cli/Formularios/Formulariosart/img/files/<?= $row['nom_img']?>" height=150px; width="340px" >
                                <h6 class="text-center"><?= $row['nom_art']; ?></h6>
                                <h6 class="text-center">Precio = $<?= number_format($row['pre_art'], ); ?></h6>
                                <h6 class="text-center">Cantidad disponible = <?=$row['cant_art'];?></h6>

                                <input type="hidden" id="cant_bd" name="nom_art" value=" <?=$row['cant_art']; ?>">
                                <input type="hidden" name="nom_art" value=" <?= $row['nom_art']; ?>">
                                <input type="hidden" name="pre_art" value=" <?= $row['pre_art']; ?>">
                                <input type="hidden" name="cod_art" value=" <?= $row['cod_art'] ?>">
                  
                                <input type="number" onclick="enviar()" name="cant" id="cant_cli" value="1" min="1" class="form-control">
                                <input type="submit" id="boton" value="Añadir al carrito" name="add_to_cart" class="btn btn-warning btn-block my-2">
                            </form>
                            </div>
                        

                        <script type="text/javascript">
                       
                       function enviar(){
    
                        let cant_bd = parseInt(document.getElementById("cant_bd").value);
                        console.log(cant_bd)
                        let cant_cli = parseInt(document.getElementById("cant_cli").value);
                        console.log(cant_cli)
                        
                        if(cant_bd<=cant_cli){
                            document.getElementById("boton").innerHTML =slideUp();
                            }
                        }
                        </script>
                            <?php 
                        }
                        ?>
                 </div> 
                 </div>
                </div>
               <!-- <div class="col-md-6">
                    <h2>producto seleccionado</h2>
                    <?php 
                    /*
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
                            <a href='producto.php?action=remove&cod_art=".$value['cod_art']."'
                            <button class='btn btn-danger btn-block'>Eliminar</button>
                            </a>
                            </td>
                            
                            ";
                            $total =$total + $value['pre_art'] * $value['cant'];
                        }
                        $output .= "
                        <tr>
                        <td colspan='3'></td>
                        <td></b>Total precio</b></td>
                        <td>".number_format($total,)."</td>
                        <td>
                            <a href='producto.php?action-clearall'>
                            <button class='btn btn-warning btn-block'>Limpiar</button>
                            </a>
                        </td>
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
  /*  if (isset($_GET['action'])) {
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
    }*/
    ?>-->
</body>
</html>