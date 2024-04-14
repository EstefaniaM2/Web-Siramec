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
    <title>Registro destinatario</title>
    <script src="https://kit.fontawesome.com/62ea397d3a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/registro.css">
</head>
<body>
    <section class="form_wrap">

            <section class="cantact_info">
                <section class="info_title">
                    <span class="fas fa-clipboard-check" ></span>
                    <h2>NUEVO<br>DESTINATARIO</h2>
                </section>
                <section class="info_items">
                    <p><span class="fa fa-envelope"></span> info.siramec@gmail.com</p>
                    <p><span class="fa fa-mobile"></span> +57 321-915-7229</p>
                </section>
            </section>


                <form action="" method="post"class="form_contact" >
                    <h2>Registra un destinatario </h2>
                <div class="user_info">
                
                        <label>Código destinatario</label>
                        <input type="number" name="codigo">

                        <label>Nombre destinatario</label>
                        <input type="text" name="nombre">
                        
                        <label>Contraseña destinatario</label>
                        <input type="password" name="contraseña">

                        <label>Dirección destinatario</label>
                        <input type="text"  name="direccion">             
                        
                        <label>Telefono destinatario</label>
                        <input type="number" name="telefono"> 
                        
                        <label>Corrreo eletrónico</label>
                        <input type="email" name="email">

                            <a><?php echo isset($error) ? $error : '';?><br></a>

                        <input type="submit" id="btnSend" name="registrar" value="registrar">
                       
                    </div>
        </form>
     </section>    
</body>
</html>