<?php 
    include "conexion.php";
    if(!empty($_POST)) {
        $alert='';
      
        if(empty($_POST['id']) ||empty($_POST['nombre']) || empty($_POST['direccion']) || empty($_POST['telefono']) 
        || empty($_POST['correo']) || empty($_POST['clave'])){
    
            $alert='<p  class="msg_error">Todos los campos son obligatarios </p>';

        }else{

            $id =     $_POST['id'];
            $nombre = $_POST['nombre']; 
            $direccion   = $_POST['direccion'];
            $tel    = $_POST['telefono'];
            $correo = $_POST['correo'];
            $pass   = $_POST['clave'];
            
          
            $pass = md5(mysqli_real_escape_string($conexion,$_POST['clave']));

              
           $query = mysqli_query($conexion,"SELECT * FROM destinatario WHERE email= '$correo' OR nom_des= '$nombre'");
            $result = mysqli_fetch_array($query);
          

                if($result){
                    $alert='<p class="msg_error">El correo o el usuario ya existe </p>';
                }else{

                    $query_insert=mysqli_query($conexion,"INSERT INTO  destinatario(cod_des,nom_des,dir_des,tel_des,email,password)
                                                                          VALUES('$id','$nombre','$direccion','$tel','$correo','$pass')");
                     
                    if ($query_insert){
                        $alert='<p class="msg_save">Usuario creado correctamente.</p>';
                    }else{
                        $alert='<p class="msg_error">Error al crear el usuario.</p>';
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
    <title>Registro sesión</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link rel="icon" href="../../img/SIRAMEC.jpg">
    <link rel="stylesheet" href="../../css/css.css">
    <link rel="stylesheet" href="css/select.css">
</head>
<body>
    <div class="cod-contenedor">
            <div class="form-headerr">
                <img src="../../img/Logo.png" alt="Logo de CodigoMasters">
                <h1>Web<span>Siramec</span></h1>
            </div>
         
            <div class="form-contenedor">
                <form action="" method="POST" class="cod-form">
                    <div class="form-title">
                        <h3>Regístra tus datos</h3>
                        <hr>
                        <div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>
                    </div>
                    <div class="input-group">
                        <input type="text" class="form-input" name="id" id="reg-correo">
                        <label class="label" for="id"><i class="fas fa-user-edit"></i>Codigo</label>
                    </div>
                    <div class="input-group">
                        <input type="text" class="form-input" name="nombre" id="reg-correo">
                        <label class="label" for="nombre"><i class="fas fa-user-edit"></i>Nombre completo</label>
                    </div>
                    
                    <div class="input-group">
                        <input type="text" class="form-input" name="direccion" id="reg-correo">
                        <label class="label" for="correo" ><i class="fas fa-envelope"></i> Dirección</label>
                    </div>
                    <div class="input-group">
                        <input type="number" class="form-input" name="telefono" id="reg-correo">
                        <label class="label" for="usuario" ><i class="fas fa-user icon"></i>Teléfono</label>
                    </div>
                    <div class="input-group">
                        <input type="email" class="form-input" name="correo" id="reg-correo">
                        <label class="label" for="correo" ><i class="fas fa-envelope"></i>Correo Eletronico</label>
                    </div>
                    <div class="input-group">
                        <input type="password" class="form-input" name="clave" id="reg-pass">
                        <label class="label" for="clave" ><i class="fas fa-lock"></i>Contraseña</label>
                    </div>
                   
                    <div class="input-group">
                        <p class="terminos">Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
                       
                        <input type="submit" class="form-input" value="Registrate">
                        <p>Ya tienes cuenta? <a href="iniciar_seccion.php" class="alt-form">Ingresa aquí</a></p>
                    </div>
                   
                </form>
            </div>
        </div>
    
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/form.js"></script>
</body>
</html>