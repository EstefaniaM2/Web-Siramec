<?php
	include '../../../conexion.php';
	
	if(!empty($_POST)){
       
        $nit = $_POST['nit'];
        $nom = $_POST['nom'];
        $dir = $_POST['dir'];
        $ciu = $_POST['ciu'];
        $tel = $_POST['tel'];
        $email = $_POST['email'];
       

        $resultado = mysqli_query($conexion,"INSERT INTO proveedor(nit_prov,nom_prov,dir_prov,ciu_prov,tel_prov,email_prov) 
                                                  VALUES ('$nit','$nom','$dir','$ciu','$tel','$email')");
         
         if(!$resultado){
            echo 'error al registrarse';
        }
        else{
           echo 'Usuario registrado exitosamente';
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
                <h2>NUEVO<br>PROVEEDOR</h2>
            </section>
            <section class="info_items">
                <p><span class="fa fa-envelope"></span> siramec@gmail.com</p>
                <p><span class="fa fa-mobile"></span> +57 (34) 848 50 11</p>
            </section>
        </section>

        <form action="" method="post" class="form_contact">
            <h2>Registrar nuevo proveedor</h2>
            <div class="user_info">
                <label for="NIT">Nit del proveedor</label>
                <input type="number" name="nit" id="NIT">

                <label for="name">Nombre del proveedor</label>
                <input type="text" name="nom" id="name">

                <label for="text">Dirección del proveedor</label>
                <input type="text" name="dir" id="text">

                <label for="text">Ciudad del proveedor</label>
                <input type="text" name="ciu" id="text">

                <label for="phone">Teléfono del proveedor</label>
                <input type="text" name="tel" id="phone">

                <label for="email">Correo del proveedor</label>
                <input type="email" name="email" id="email">                

                <input type="submit" value="Registrar proveedor" id="btnSend">
            </div>
        </form>

    </section>

</body>
</html>
