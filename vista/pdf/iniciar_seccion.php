<?php
    session_start();
    ob_start();
include "conexion.php";

if(!empty($_POST)){
    if(empty($_POST['nombre']) || empty($_POST['password'])){
        $alert='ingrese su cedula y password';
    } else {
        
        $nombre= mysqli_real_escape_string($conexion,$_POST['nombre']);
        $pass= md5(mysqli_real_escape_string($conexion,$_POST['password']));
        
        $query = mysqli_query($conexion,"select * from destinatario where nom_des='$nombre' and password='$pass'");
        $resul= mysqli_num_rows($query);
        
        if($resul >0 )
        {
            $data = mysqli_fetch_array($query);

            $_SESSION['cod_des'] =$data['cod_des'];
            $_SESSION['nom_des'] =$data['nom_des'];
            $_SESSION['dir_des'] =$data['dir_des'];
            $_SESSION['tel_des'] =$data['tel_des'];
            $_SESSION['email'] =$data['email'];
            $_SESSION['password'] =$data['password'];

      
               header('location: ../index.php');
        }else{
           $alert = 'El usuario o la clave son incorrectos';
    }
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/estilos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <title>Iniciar sesión Destinatario</title>
</head>
<body>
<!--<form action="" method="post"> 
    <p>nombre del usuario<input type="text" name="nombre">
    <p>password del usuario<input type="text" name="password">

    <input type="submit"  value="inresar">

    <div class="alert"><?php/* echo isset($alert) ? $alert : ''; */?></div>-->
    <div class="cod-container">
        <div class="form-header">
            <img src="../../img/Logo.png" alt="Logo de CodigoMasters">
            <h1>Web<span>Siramec</span></h1>
        </div>
        <div class="form-content">
            <form action="" class="cod-form" method="POST">
                <div class="form-title">
                    <h3>Iniciar Sesión</h3>
                </div>
                <div class="input-group">
                    <input type="text" name="nombre" class="form-input" >
                    <label class="label" for="usuario" > <i class="fas fa-envelope"></i>Nombre completo</label>
                </div>
                <div class="input-group">
                    <input type="password" name="password" class="form-input" >
                    <label class="label" for="clave" ><i class="fas fa-key icon"></i>Contraseña</label>
                </div>
                    <div class="alert" ><?php echo isset($alert) ? $alert : '';?></div>
                <div class="input-group">
                    <input type="submit" class="form-input" value="INSERTAR">
                    <p>No tienes cuenta? <a href="registrar.php" class="alt-form">Ingresa aquí</a></p>
                </div>
               
            </form>
        </div>
    </div>
</body>
</html>