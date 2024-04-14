<?php
    include 'conexion.php';
    if(!empty($_POST)){     
        
        $codigo_ = $_POST['codigo_des'];
        
        $query_delete = mysqli_query($conexion,"DELETE FROM  destinatario WHERE cod_des = $codigo_");
        
        if($query_delete){
            header('location: lista_mercancia.php');
        }else{
            echo 'error al eliminar';
        }
    }

    
    $codigo_des = $_REQUEST['id'];
    
    $query = mysqli_query($conexion,"SELECT cod_des,nom_des,dir_des,tel_des,email from destinatario where cod_des=$codigo_des;");
    $result = mysqli_num_rows($query);

         if($result){
             while($row= mysqli_fetch_assoc($query)){
                $cod_des= $row["cod_des"];
                $nom_des= $row["nom_des"];
                $dir_des= $row["dir_des"];
                $tel_des= $row["tel_des"];
                $email= $row["email"];
 
            }
 
    } else {
       header("location: lista_dest.php");
    }

mysqli_close($conexion);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro sesión</title>
    <script src="https://kit.fontawesome.com/62ea397d3a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/eliminar.css">
</head>
<body>
    <section class="form_wrap">

            <section class="cantact_info">
                <section class="info_title">
                    <span class="fas fa-clipboard-check" ></span>
                    <h2>ELIMINAR<br>DESTINATARIO</h2>
                </section>
                <section class="info_items">
                    <p><span class="fa fa-envelope"></span> info.contact@gmail.com</p>
                    <p><span class="fa fa-mobile"></span> +57 321-915-7229</p>
                </section>
            </section>


                <form action="" method="post"class="form_contact" enctype="multipart/form-data">
                <h2>¿Está seguro de eliminar el siguiente registro?</h2>
                <div class="user_info">
                    <div id="Layer1" style="width:100%; height: 450px;; overflow: scroll;">
                            <p>Codigo del destinatario:<span><?php echo $cod_des; ?></span></p>
                            <p>Nombre del destinatario: <span><?php echo $nom_des; ?></span></p>
                            <p>Direccion del destinatario: <span><?php echo $dir_des; ?></span></p>
                            <p>Telefono del destinatario:<span><?php echo $tel_des; ?></span></p>
                            <p>Email del destinatario: <span><?php echo $email; ?></span></p>

                    <input type="hidden" name="codigo_des" value="<?php echo $codigo_des; ?>">
                    <a href="lista_dest.php" value="canselar" >canselar</a>
                    <input type="submit" value="Aceptar" class="btn_ok">  
                </div>
            </div>
        </form>
     </section>    
</body>
</html>