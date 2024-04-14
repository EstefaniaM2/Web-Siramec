<?php
	include 'conexion.php';
	if(!empty($_POST)){
       
        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $direc = $_POST['direccion'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $codigo_prin=$_POST['codigo_prin'];
    
        $query = mysqli_query($conexion,"UPDATE destinatario SET
                                        cod_des='$codigo',
                                        nom_des='$nombre',
                                        dir_des='$direc',
                                        tel_des='$telefono',
                                        email='$email'
                                        where cod_des = $codigo_prin");

        if(!$query){
            $error= 'error al actualizado';
        
        } else {
            $error= 'Usuario actualizado';
        }
    }
$codigo_retorno = $_REQUEST['id'] ;

if(!empty($codigo)){
 $codigo_retorno = $codigo;
}


$query = mysqli_query($conexion,"SELECT cod_des,nom_des,dir_des,tel_des,email from destinatario WHERE cod_des=$codigo_retorno");
$result = mysqli_num_rows($query);

     if($result){
         while($row= mysqli_fetch_assoc($query)){
               $cod_des= $row["cod_des"];
               $nom_des= $row["nom_des"];
               $dir_des= $row["dir_des"];
               $tel_des= $row["tel_des"];
               $email= $row["email"];

     }
     }

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Destinatario</title>
    <script src="https://kit.fontawesome.com/62ea397d3a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/registro.css">
</head>
<body>
    <section class="form_wrap">

            <section class="cantact_info">
                <section class="info_title">
                    <span class="fas fa-clipboard-check" ></span>
                    <h2>EDITAR<br>DESTINATARIO</h2>
                </section>
                <section class="info_items">
                    <p><span class="fa fa-envelope"></span> info.siramec@gmail.com</p>
                    <p><span class="fa fa-mobile"></span> +57 321-915-7229</p>
                </section>
            </section>


                <form action="" method="post"class="form_contact" >
                    <h2>Actualizar destinatario</h2>
                <div class="user_info">
                
                <div >
                        <label>Codigo</label>
                        <input type="number" name="codigo" value="<?php echo $cod_des?>" >

                        <label>Nombre</label>
                        <input type="text" name="nombre" value="<?php echo $nom_des?>">
                        
                        <label>Dirección</label>
                        <input type="text"  name="direccion" value="<?php echo $dir_des ?>">             
                        
                        <label>Telefono</label>
                        <input type="number" name="telefono" value="<?php echo $tel_des ?>"> 
                        
                        <label >Correo eletrónico</label>
                        <input type="email" name="email" value="<?php echo $email?>">
                            
                            <a><?php echo isset($error) ? $error : '';?><br></a>
            
                        <input type="submit" id="btnSend" name="registrar" value="registrar">
                        

                        <input type="hidden" name="codigo_prin" value="<?php echo $codigo_retorno ?>">
                    </div>
            </div>
        </form>
     </section>    
</body>
</html>