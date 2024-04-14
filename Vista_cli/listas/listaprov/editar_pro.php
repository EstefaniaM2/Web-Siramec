<?php 
include "../../../conexion.php"; 

if(!empty($_POST)){

    $mod_nit=$_POST['mod_nit'];
    $mod_nombre=$_POST['mod_nombre'];
    $mod_direccion=$_POST['mod_direccion'];
    $mod_ciudad=$_POST['mod_ciudad'];
    $mod_telefono=$_POST['mod_telefono'];
    $mod_correo=$_POST['mod_correo'];
    $clave_nit=$_POST['nit'];

    $query = mysqli_query($conexion,"UPDATE proveedor
                                        SET nit_prov='$mod_nit' , 
                                        nom_prov='$mod_nombre',
                                        dir_prov='$mod_direccion',
                                        ciu_prov='$mod_ciudad',
                                        tel_prov='$mod_telefono',
                                        email_prov='$mod_correo'
                                        WHERE nit_prov='$clave_nit'");
   
    if(!$query){
        $error = '<p class="msg_error>error al registrarse</p>';
    }
    else{
        $error = '<p class="msg_save">Usuario actualizado</p>';
   }
}
   

$nit_prov = $_REQUEST['id'];
    
$query = mysqli_query($conexion," SELECT nit_prov, nom_prov, dir_prov, ciu_prov, tel_prov, email_prov FROM proveedor WHERE nit_prov = $nit_prov");
    $result = mysqli_num_rows($query);

         if($result){
         while($row= mysqli_fetch_assoc($query)){
        
            $nit= $row["nit_prov"]; 
            $nombre = $row["nom_prov"];
            $direccion = $row["dir_prov"];
            $ciudad= $row["ciu_prov"];
            $tel= $row["tel_prov"];
            $email = $row["email_prov"];
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
            <h3>ACTUALIZACIÓN DE DATOS DE PROVEEDORES</h3>
        </div>
            <div class="alert"><?php echo isset($error) ? $error : ''; ?></div>
        <div class="input-group">
            <input type="text" class="form-input" name="mod_nit"  id="reg-correo"  value="<?php echo $nit; ?>">
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
                        <input type="text" class="form-input" name="mod_ciudad" id="reg-correo"value="<?php echo $ciudad; ?>">
                        <label class="label"><i class="fas fa-users "></i>Ciudad</label>
                    </div>
            
                    <div class="input-group">
                        <input type="text" class="form-input" name="mod_telefono" id="reg-correo" value="<?php echo $tel; ?>">
                        <label class="label" ><i class="fas fa-user icon"></i>Teléfono</label>
                    </div>
            
                    <div class="input-group">
                        <input type="email" class="form-input" name="mod_correo" id="reg-pass" value="<?php echo $email; ?>">
                        <label class="label" ><i class="fas fa-lock"></i>Correo</label>
                    </div>

                        
                    <div class="input-group">
                        <input type="submit" class="form-input" value="Actualizar">
                        <a  class="enlace" href="Lista_pro.php">Salir</a> 
                    </div>

                    <div">
                        <input type="hidden" name="nit" value="<?php echo $nit; ?>">
                    </div>
        </form>
</body>
</html>