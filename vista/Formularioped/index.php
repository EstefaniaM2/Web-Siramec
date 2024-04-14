<?php
	include '../../conexion.php';
   
	if(!empty($_POST)){
       
       
        $numfac = $_POST['numfac'];
        $desc = $_POST['desc'];
        $cant = $_POST['cant'];
        $precio = $_POST['precio'];
        $total = $_POST['total'];
        $nitcli = $_POST['nitcli'];
        


    $resultado = mysqli_query($conexion,"INSERT INTO factura_pedido(num_fact, descripcion, cantidad, precio, Total, nit_cli3) 
                                             VALUES ('$numfac','$desc','$cant','$precio','$total','$nitcli')");

        if(!$resultado){
            echo 'error al registrarse';
        }
        else{
           echo 'Usuario registrado exisamente';
       }
       mysqli_close($conexion);
       }  
           
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pedido</title>
     
<script src="https://kit.fontawesome.com/62ea397d3a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="icon" href="../../img/SIRAMEC.jpg">
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/script.js"></script>
</head>
<body>

    <section class="form_wrap">

        <section class="cantact_info">
            <section class="info_title">
                <span class="fas fa-clipboard-check" ></span>
                <h2>NUEVO<br>PEDIDO</h2>
            </section>
            <section class="info_items">
                 <p><span class="fa fa-envelope"></span> siramec@gmail.com</p>
                <p><span class="fa fa-mobile"></span> +57 (34) 848 50 11</p>
            </section>
        </section>

        <form action="" method="post" class="form_contact">
            <h2>Registrar Pedido</h2>
            <div class="user_info">
                

                <label for="">Numero de factura</label>
                <input type="text" name="numfac" >

                <label for="">Producto</label><br>
                <select name="desc">
                    <?php 
                    $query = mysqli_query($conexion,"SELECT nom_art,tam_art FROM articulo");
                    $result = mysqli_num_rows($query);

                        if($result){
                            while($row=mysqli_fetch_assoc($query)){
                    ?>
                        <option><?php echo $row["nom_art"]." - ".$row["tam_art"];?></option>  
                        <?php
                            }
                        }
                        ?>
                        </select><br>

                <label for="">Cantidad</label>
                <input type="text" name="cant" >

                <label for="">Precio</label>
                <input type="text" name="precio" >

                <label for="">Total</label>
                <input type="text" name="total" >

                <label for="">Nit del cliente</label><br>
                <select name="nitcli">
                    <?php 
                    $query = mysqli_query($conexion,"SELECT nit_cli,nom_cli FROM cliente");
                    $result = mysqli_num_rows($query);

                        if($result){
                            while($row=mysqli_fetch_assoc($query)){
                    ?>
                        <option><?php echo $row["nit_cli"]." - ".$row["nom_cli"];?></option>  
                        <?php
                            }
                        }
                        ?>
                        </select><br>

                <input type="submit" value="Registrar pedido" id="btnSend">
            </div>
        </form>

    </section>

</body>
</html>

