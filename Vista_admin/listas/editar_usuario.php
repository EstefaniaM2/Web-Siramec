<?php 
    include "../../conexion.php";
    if(!empty($_POST)) {

        $alert='';
      
        if(empty($_POST['nombre']) || empty($_POST['correo']) || empty($_POST['usuario']) 
        || empty($_POST['rol'])){
    
            $alert='<p  class="msg_error">Todos los campos son obligatarios </p>';

        }else{

            $idusuario = $_POST['idusuario'];
            $nombre = $_POST['nombre']; 
            $correo = $_POST['correo'];
            $user   = $_POST['usuario'];
            $pass   = md5($_POST['clave']);
            $rol    = $_POST['rol'];

            
           $query = mysqli_query($conexion,"SELECT * FROM usuario 
                                            WHERE (usuario ='$user' AND idusuario != $idusuario) 
                                            OR (correo = '$correo' AND idusuario != $idusuario)");
                        
                        

            $result = mysqli_fetch_array($query);

                if($result > 0){
                    $alert='<p class="msg_error">El correo o el usuario ya exixte </p>';
                }else{
                    if (empty($_POST['clave'])) {
                        
                        $sql_update = mysqli_query($conexion, "UPDATE usuario
                                                                SET  nombre='$nombre',correo='$correo',usuario='$user',rol='$rol'
                                                                    WHERE  idusuario='$idusuario'");
                    }else{
                        $sql_update = mysqli_query($conexion, "UPDATE usuario
                                                                SET  nombre='$nombre',correo='$correo',usuario='$user',clave='$pass',rol='$rol'
                                                                    WHERE  idusuario='$idusuario'");
                    }

                     if ($sql_update){
                        $alert='<p class="msg_save">Usuario actualizado correctamente.</p>';
                    }else{
                        $alert='<p class="msg_error">Error al actualizar el usuario.</p>';
                    }
                }
        
           }
       
        
     }
    

    //mostrar datos
    if (empty($_GET['id'])) {
        header('location: lista_usuarios.php');
    }
    $iduser = $_GET['id'];
    $consultasql = mysqli_query($conexion, "SELECT u.idusuario, u.nombre, u.correo, u.usuario, (u.rol) 
                                            as idrol, (r.rol) as rol 
                                            FROM usuario u 
                                            INNER JOIN rol r 
                                            on u.rol = r.idrol 
                                            WHERE idusuario= $iduser");
    
    $result_consultasql = mysqli_num_rows($consultasql);

    if ($result_consultasql == 0) {
        header('location: lista_usuarios.php');
    }else{
        $option = '';
        while ($data = mysqli_fetch_array($consultasql)) {
            $iduser  = $data['idusuario'];
            $nombre  = $data['nombre'];
            $correo  = $data['correo'];
            $usuario = $data['usuario'];
            $idrol   = $data['idrol'];
            $rol     = $data['rol'];

            if ($idrol ==1 ) {
                $option = ' <option value="'.$idrol.'" select>'.$rol.'</option>';
            }elseif($idrol ==2 ){
                $option = ' <option value="'.$idrol.'" select>'.$rol.'</option>';
            }elseif($idrol ==3 ){
                $option = ' <option value="'.$idrol.'" select>'.$rol.'</option>';
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
    <title>Actualizar usuario</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link rel="icon" href="../img/core-img/SIRAMEC.jpg">
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="select.css">
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
                        <h3>Actualizar Usuario</h3>
                        <hr>
                        <div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>
                    </div>
                    <input type="hidden" name="idusuario" value="<?php echo $iduser;?>">
                    <div class="input-group">
                        <input type="text" class="form-input" name="nombre" id="reg-correo" value=" <?php echo $nombre; ?>">
                        <label class="label" for="nombre"><i class="fas fa-user-edit"></i>Nombre completo</label>
                    </div>
                    
                    <div class="input-group">
                        <input type="email" class="form-input" name="correo" id="reg-correo" value=" <?php echo $correo; ?>">
                        <label class="label" for="correo" ><i class="fas fa-envelope"></i>Correo Eletronico</label>
                    </div>
                    <div class="input-group">
                        <input type="text" class="form-input" name="usuario" id="reg-correo" value=" <?php echo $usuario; ?>">
                        <label class="label" for="usuario" ><i class="fas fa-user icon"></i>Usuario</label>
                    </div>
                    <div class="input-group">
                        <input type="password" class="form-input" name="clave" id="reg-pass" >
                        <label class="label" for="clave" ><i class="fas fa-lock"></i>Contraseña</label>
                    </div>
                    <div class="input-group">
                     <label class="label" for="rol"><i class="fas fa-users"></i>Tipo Usuario</label><br><br>
                            <?php 
                                    $query_rol = mysqli_query($conexion, "SELECT * FROM rol");
                                    $result_rol = mysqli_num_rows($query_rol);
                            ?>
                     <select  class="notItemOne" name="rol" >
                        <?php 
                           echo $option;
                            if ($result_rol) {
                                while ($roles = mysqli_fetch_array($query_rol)) {
                        ?>
                                <option value="<?php echo $roles["idrol"]; ?>"><?php echo $roles["rol"]; ?></option>
                        <?php 
                                
                        
                                }
                            }
                        ?>
                        
                     </select>
                    </div>
                    <div class="input-group">
                       
                       
                        <input type="submit" class="form-input" value="Actualizar usuario">
                        <a class="enlace" href="lista_usuarios.php">Salir</a> 
                    </div>
                   
                </form>
            </div>
        </div>
    
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/form.js"></script>
</body>
</html>