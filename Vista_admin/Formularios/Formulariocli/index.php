<?php
	include '../conexion.php';
	
	if(!empty($_POST)){
       
        $nit = $_POST['nit'];
        $nom = $_POST['nom'];
        $dir = $_POST['dir'];
        $ciu = $_POST['ciu'];
        $tel = $_POST['tel'];
        $email = $_POST['email'];
       

        $resultado = mysqli_query($conexion,"INSERT INTO cliente(nit_cli,nom_cli,dir_cli,ciu_cli,tel_cli,email_cli) 
                                                  VALUES ('$nit','$nom','$dir','$ciu','$tel','$email')");
         
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
    <title>Formulario nuevo cliente</title>
    <link rel="icon" href="../../img/core-img/SIRAMEC.jpg">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/script.js"></script>
    <script src="https://kit.fontawesome.com/62ea397d3a.js" crossorigin="anonymous"></script>
</head>
<body>

    <section class="form_wrap">

        <section class="cantact_info">
            <section class="info_title">
               <span  class="fas fa-warehouse"></span>
                <h2>NUEVO<br>CLIENTE</h2>
            </section>
            <section class="info_items">
                <p><span class="fa fa-envelope"></span> siramec@gmail.com</p>
                <p><span class="fa fa-mobile"></span> +57 (34) 848 50 11</p>
            </section>
        </section>

        <form action="index.php" method="post" class="form_contact">
            <h2>Registrar nuevo cliente</h2>
            <div class="user_info">
                <label for="NIT">NIT del cliente</label>
                <input type="number" name="nit" required>

                <label for="name">Nombre del cliente</label>
                <input type="text" name="nom" required>

                <label for="text">Dirección del cliente</label>
                <input type="text" name="dir" required>

                <label for="text">Ciudad del cliente</label>
                <input type="text" name="ciu" required>

                <label for="phone">Teléfono del cliente</label>
                <input type="text" name="tel" required>

                <label for="email">Correo del cliente</label>
                <input type="email" name="email" required>

                <input type="submit" value="Registrar nuevo cliente" id="btnSend">
               
            </div>
        </form>

    </section>

</body>
</html>
