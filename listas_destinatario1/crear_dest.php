<?php
	include 'conexion.php';
	if(!empty($_POST['registrar'])){
       
        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $password =md5($_POST['contraseña']);
        
                                                     
        $insertar = "INSERT INTO destinatario(cod_des, nom_des, dir_des, tel_des, email, contraseña) 
                        VALUES ('$codigo', '$nombre', '$direccion', '$telefono', '$email','$password')";
        $resultado = mysqli_query($conexion,$insertar);

        if(!$resultado){
            $error ='error al registrarse';
 
        } else {
            $error ='Usuario registrado exisamente';
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro sesión</title>
    <script src="https://kit.fontawesome.com/62ea397d3a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/registro.css">
</head>
<body>
    <section class="form_wrap">

            <section class="cantact_info">
                <section class="info_title">
                    <span class="fas fa-clipboard-check" ></span>
                    <h2>NUEVO<br>PEDIDO</h2>
                </section>
                <section class="info_items">
                    <p><span class="fa fa-envelope"></span> info.contact@gmail.com</p>
                    <p><span class="fa fa-mobile"></span> +57 321-915-7229</p>
                </section>
            </section>


                <form action="" method="post"class="form_contact" enctype="multipart/form-data">
                    <h2>Envia un mensaje</h2>
                <div class="user_info">
                
                <div id="Layer1" style="width:100%; height: 450px;; overflow: scroll;">
                        <label>codido</label>
                        <input type="number" name="codigo">

                        <label>Nombre</label>
                        <input type="text" name="nombre">
                        
                        <label>password</label>
                        <input type="password" name="contraseña">

                        <label>Direccion</label>
                        <input type="text"  name="direccion">             
                        
                        <label>Telefono</label>
                        <input type="number" name="telefono"> 
                        
                        <label>Email</label>
                        <input type="email" name="email">

                            <a><?php echo isset($error) ? $error : '';?><br></a>

                        <input type="submit" id="btnSend" name="registrar" value="registrar">
                        <a href="lista_dest.php" id="btnsend">cancelar</a>
                    </div>
            </div>
        </form>
     </section>    
</body>
</html>