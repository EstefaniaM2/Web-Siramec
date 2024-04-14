<?php
	include '../../../conexion.php';
	
	if(!empty($_POST)){
       
        $nit = $_POST['nit'];
        $nom = $_POST['nom'];
        $dir = $_POST['dir'];
        $tel = $_POST['tel'];
        $nitcli = $_POST['nitcli'];


    $resultado = mysqli_query($conexion,"INSERT INTO destinatario(cod_des,nom_des,dir_des,tel_des,nit_cli2) 
                                             VALUES ('$nit','$nom','$dir','$tel','$nitcli')");

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
    <title>Formulario nuevo proveedor</title>

    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="icon" href="../../img/core-img/SIRAMEC.jpg">
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/script.js"></script>
    <script src="https://kit.fontawesome.com/62ea397d3a.js" crossorigin="anonymous"></script>
</head>
<body>

    <section class="form_wrap">

        <section class="cantact_info">
            <section class="info_title">
               <span class="fas fa-clipboard-list"></span>
                <h2>NUEVO<br>DESTINATARIO</h2>
            </section>
            <section class="info_items">
                <p><span class="fa fa-envelope"></span> siramec@gmail.com</p>
                <p><span class="fa fa-mobile"></span> +57 (34) 848 50 11</p>
            </section>
        </section>

        <form action="" method="post" class="form_contact">
            <h2>Registrar nuevo Destinatarioo</h2>
            <div class="user_info">
                <label for="NIT">Nit del Destinatario</label>
                <input type="number" name="nit" id="NIT">

                <label for="name">Nombre del Destinatario</label>
                <input type="text" name="nom" id="name">

                <label for="text">Dirección del Destinatario</label>
                <input type="text" name="dir" id="text">

                <label for="phone">Teléfono del Destinatario</label>
                <input type="text" name="tel">

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
                        </select>         <br>    

                <input type="submit" value="Registrar Destinatario" id="btnSend">
            </div>
        </form>

    </section>

</body>
</html>
