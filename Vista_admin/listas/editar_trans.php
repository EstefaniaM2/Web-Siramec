<?php 
include "../../conexion.php"; 

if(!empty($_POST)){

    $mod_nit=$_POST['mod_nit'];
    $mod_nombre=$_POST['mod_nombre'];
    $mod_direccion=$_POST['mod_direccion'];
    $mod_ciudad=$_POST['mod_ciudad'];
    $mod_telefono=$_POST['mod_telefono'];
    $mod_correo=$_POST['mod_correo'];
    $mod_placa=$_POST['mod_placa'];
    $clave_nit=$_POST['nit'];

    $query = mysqli_query($conexion,"UPDATE transportista
                                        SET nit_trans='$mod_nit' , 
                                        nom_trans='$mod_nombre',
                                        dir_trans='$mod_direccion',
                                        ciu_trans='$mod_ciudad',
                                        tel_trans='$mod_telefono',
                                        email_trans='$mod_correo',
                                        placam_trans='$mod_placa'
                                        WHERE nit_trans='$clave_nit'");
   
    if(!$query){
        $error = '<p class="msg_error>error al registrarse</p>';
    }
    else{
        $error = '<p class="msg_save">Usuario actualizado</p>';
   }
}
   

$nit_trans = $_REQUEST['id'];
    
$query = mysqli_query($conexion," SELECT nit_trans, nom_trans, dir_trans, ciu_trans, tel_trans, email_trans, placam_trans FROM transportista WHERE nit_trans = $nit_trans");
    $result = mysqli_num_rows($query);

         if($result){
         while($row= mysqli_fetch_assoc($query)){
        
            $nit= $row["nit_trans"]; 
            $nombre = $row["nom_trans"];
            $direccion = $row["dir_trans"];
            $ciudad= $row["ciu_trans"];
            $tel= $row["tel_trans"];
            $email = $row["email_trans"];
            $placa= $row["placam_trans"];
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
    <link rel="stylesheet" href="css.css">
    <title>Editar transportista</title>
</head>
<body>
<div class="cod-contenedor">
            <div class="form-headerr">
                <img src="../../img/Logo.png" alt="Logo de CodigoMasters">
                <h1>Web<span>Siramec</span></h1>
            </div>
         
            <div class="form-contenedor">
<form action="#" class="cod-form" method="post">
        <div class="form-title">
            <h3>ACTUALIZACION DE DATOS DE TRANSPORTISTAS</h3>
        </div>
        <div class="alert"><?php echo isset($error) ? $error : ''; ?></div>
        <div class="input-group">
            <input type="text" class="form-input" name="mod_nit"  id="reg-correo"  value="<?php echo $nit; ?>">
            <label class="label" ><i class="fas fa-user-edit"></i>Nit Transportista</label>
        </div>
        <div class="input-group">
            <input type="text" class="form-input" name="mod_nombre" id="reg-correo"value="<?php echo $nombre; ?>">
            <label class="label" ><i class="fas fa-phone"></i>Nombre</label>
                    </div>
                    <div class="input-group">
                        <input type="text" class="form-input" name="mod_direccion" id="reg-correo" value="<?php echo $direccion; ?>">
                        <label class="label" ><i class="fas fa-envelope"></i>Direccion</label>
                    </div>
            
                    <div class="input-group">
                        <input type="text" class="form-input" name="mod_ciudad" id="reg-correo"value="<?php echo $ciudad; ?>">
                        <label class="label"><i class="fas fa-users "></i>Ciudad</label>
                    </div>
            
                    <div class="input-group">
                        <input type="text" class="form-input" name="mod_telefono" id="reg-correo" value="<?php echo $tel; ?>">
                        <label class="label" ><i class="fas fa-user icon"></i>Telefono</label>
                    </div>
            
                    <div class="input-group">
                        <input type="email" class="form-input" name="mod_correo" id="reg-pass" value="<?php echo $email; ?>">
                        <label class="label" ><i class="fas fa-lock"></i>Correo</label>
                    </div>

                    <div class="input-group">
                        <input type="text" class="form-input" name="mod_placa" id="reg-pass" value="<?php echo $placa; ?>">
                        <label class="label" ><i class="fas fa-lock"></i>Placa</label>
                    </div>

                    
                        
                    <div class="input-group">
                        <input type="submit" class="form-input" value="Actualizar">
                        <a class="enlace" href="lista_trans.php">Salir</a> 
                    </div>

                    <div">
                        <input type="hidden" name="nit" value="<?php echo $nit; ?>">
                    </div>
        </form>
</div>
</body>
</html>