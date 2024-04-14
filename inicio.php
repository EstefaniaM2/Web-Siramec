<?php
       $alert = '';
        session_start();
        ob_start();
        require_once "conexion.php";
        
       

            if (!empty($_POST['active'])) {
                if (isset($_SESSION['rol'])) {
                    switch ($_SESSION['rol']) {
                        case 1:
                            header('location: Vista_admin/index.php'); 
                            break;
                        
                       case 2:
                            header('location: Vista_cli/index.php');
                            break;
                        case 3:
                            header('location: Vista/index.php');
                            break;
                     default;
                    }
                }
            }else{

        if(!empty($_POST)){
           if(empty($_POST['usuario']) || empty($_POST['clave'])){
                 $alert ='ingrese su usuario y contraseña';
           }else{
               

                $user = mysqli_real_escape_string($conexion,$_POST['usuario']);
                $pass = md5(mysqli_real_escape_string($conexion,$_POST['clave']));

                $query = mysqli_query($conexion, "SELECT * FROM usuario WHERE usuario= '$user'AND clave= '$pass'");
                $result = mysqli_num_rows($query);

                if($result > 0){
                    $data = mysqli_fetch_array($query);
                    $_SESSION['active'] = true;
                    $_SESSION['idUser'] = $data['idusuario'];
                    $_SESSION['nombre'] = $data['nombre'];
                    $_SESSION['correo'] = $data['correo'];
                    $_SESSION['user']   = $data['usuario'];
                    $_SESSION['rol']    = $data['rol'];
                    switch ($_SESSION['rol']) {
                        case 1:
                            header('location: Vista_admin/index.php');
                            break;
                        
                       case 2:
                            header('location: Vista_cli/index.php');
                            break;
                        case 3:
                            header('location: Vista/index.php');
                            break;
                     default;
                    }
                    
                }else{
                    $alert ='el usuario o la clave son incorrectos';
                    session_destroy();
                }
           }
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio sesion</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link rel="icon" href="img/SIRAMEC.jpg">
   
</head>
<body>
    <div class="cod-container">
        <div class="form-header">
            <img src="img/Logo.png" alt="Logo de CodigoMasters">
            <h1>Web<span>Siramec</span></h1>
        </div>
        <div class="form-content">
            <form action="" class="cod-form" method="POST">
                <div class="form-title">
                    <h3>Iniciar Sesión</h3>
                </div>
                <div class="input-group">
                    <input type="text" name="usuario" class="form-input" >
                    <label class="label" for="usuario" > <i class="fas fa-envelope"></i>Usuario</label>
                </div>
                <div class="input-group">
                    <input type="password" name="clave" class="form-input" >
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