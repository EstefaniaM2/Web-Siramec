<?php 
include "../../../conexion.php"; 

if(!empty($_POST)){

    $mod_cod=$_POST['mod_cod'];
    $mod_nombre=$_POST['mod_nombre'];
    $mod_direccion=$_POST['mod_direccion'];
    $mod_telefono=$_POST['mod_telefono'];
    $mod_cli=$_POST['mod_cli'];
    $clave_cod=$_POST['codigo'];

    $query = mysqli_query($conexion,"UPDATE destinatario
                                        SET cod_des='$mod_cod' , 
                                        nom_des='$mod_nombre',
                                        dir_des='$mod_direccion',
                                        tel_des='$mod_telefono',
                                        nit_cli2='$mod_cli'
                                        WHERE cod_des='$clave_cod'");
   
    if(!$query){
        $error = '<p class="msg_error>error al registrarse</p>';
    }
    else{
        $error = '<p class="msg_save">Usuario actualizado</p>';
   }
}
   

$cod_des = $_REQUEST['id'];
    
$query = mysqli_query($conexion, "SELECT cod_des, nom_des, dir_des, tel_des , nit_cli2 FROM destinatario 
WHERE cod_des = $cod_des");
    $result = mysqli_num_rows($query);

         if($result){
         while($row= mysqli_fetch_assoc($query)){
        
            $cod= $row["cod_des"]; 
            $nombre = $row["nom_des"];
            $direccion = $row["dir_des"];
            $tel= $row["tel_des"];
            $cli= $row["nit_cli2"];
            }
    }
    mysqli_close($conexion);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css.css">
    <title>editar proveedor</title>
</head>
<body>
<div class="cod-contenedor">
            <div class="form-headerr">
            <img src="../../../img/Logo.png" alt="Logo de CodigoMasters">
                <h1>Web<span>Siramec</span></h1>
            </div>
         
            <div class="form-contenedor">
<form action="#" class="cod-form" method="post">
        <div class="form-title">
            <h3>ACTUALIZACIÓN DE DATOS </h3>
        </div>
        <div class="alert"><?php echo isset($error) ? $error : ''; ?></div><br>
        <div class="input-group">
            <input type="text" class="form-input" name="mod_cod"  id="reg-correo"  value="<?php echo $cod; ?>">
            <label class="label" ><i class="fas fa-user-edit"></i>Nit proveedor</label>
        </div>
        <div class="input-group">
            <input type="text" class="form-input" name="mod_nombre" id="reg-correo"value="<?php echo $nombre; ?>">
            <label class="label" ><i class="fas fa-phone"></i>Nombre</label>
                    </div>
                    <div class="input-group">
                        <input type="text" class="form-input" name="mod_direccion" id="reg-correo" value="<?php echo $direccion; ?>">
                        <label class="label" ><i class="fas fa-envelope"></i>Dirección</label>
                    </div>
            
                 
            
                    <div class="input-group">
                        <input type="text" class="form-input" name="mod_telefono" id="reg-correo" value="<?php echo $tel; ?>">
                        <label class="label" ><i class="fas fa-user icon"></i>Teléfono</label>
                    </div>
            
                    <div class="input-group">
                        <input type="text" class="form-input" name="mod_cli" id="reg-pass" value="<?php echo $cli; ?>">
                        <label class="label" ><i class="fas fa-lock"></i>Nit cliente</label>
                    </div>

                        
                    <div class="input-group">
                   
      
                        <input type="submit" class="form-input" value="Actualizar">
                        <a  class="enlace" href="Lista_dest.php">Salir</a> 
                    </div>
                   
                    <div">
                        <input type="hidden" name="codigo" value="<?php echo $cod; ?>">
                    </div>
        </form>
</body>
</html>