<?php
	include '../../../conexion.php';
	
	if(!empty($_POST)){
       
        $nit = $_POST['nit'];
        $nom = $_POST['nom'];
        $dir = $_POST['dir'];
        $ciu = $_POST['ciu'];
        $tel = $_POST['tel'];
        $email = $_POST['email'];
        $placa = $_POST['placa'];

       

        $resultado = mysqli_query($conexion,"INSERT INTO transportista(nit_trans,nom_trans,dir_trans,ciu_trans,tel_trans,email_trans,placam_trans) 
                                                  VALUES ('$nit','$nom','$dir','$ciu','$tel','$email','$placa')");
         
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
    <title>Formulario nuevo transportista</title>

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
               <span class="fas fa-shipping-fast"></span>
                <h2>NUEVO<br>TRANSPORTISTA</h2>
            </section>
            <section class="info_items">
                <p><span class="fa fa-envelope"></span> siramec@gmail.com</p>
                <p><span class="fa fa-mobile"></span> +57 (34) 848 50 11</p>
            </section>
        </section>

        <form action="" class="form_contact" method="POST">
            <h2>Registrar nuevo transportista</h2>
            <div class="user_info">
                <label for="NIT">NIT del transportista</label>
                <input type="number" id="NIT" name="nit" >

                <label for="name">Nombre del transportista</label>
                <input type="text" id="name" name="nom" >

                <label for="text">Dirección del transportista</label>
                <input type="text" id="text" name="dir" >

                <label for="text">Ciudad del transportista</label>
                <input type="text" id="text" name="ciu" >

                <label >Teléfono del transportista</label>
                <input type="num"  name="tel" >

                <label for="email">Correo del transportista</label>
                <input type="email" id="email" name="email" >

                <label for="text">Placa del camión del transportista</label>
                <input type="text" id="text" name="placa" >


                

                <input type="submit" value="Registrar transportista" id="btnSend">
            </div>
        </form>

    </section>

</body>
</html>
