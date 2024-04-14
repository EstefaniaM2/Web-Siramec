<?php
    include '../../../conexion.php';
    if(!empty($_POST)){     
        
        $codigo_art = $_POST['codigo_art'];
        $nom_img_art = $_POST['nom_img'];
        
        unlink("img/files/".$nom_img_art);
        
        $query_delete = mysqli_query($conexion,"DELETE FROM  articulo WHERE cod_art = $codigo_art");
        
        if($query_delete){
            header('location: lista_mercancia.php');
        }else{
            echo 'error al eliminar';
        }
    }
if(empty($_REQUEST['id'])){
    header("location: lista_mercancia.php");
}else{
    
    $codigo_ = $_REQUEST['id'];
    
    $query = mysqli_query($conexion,"SELECT cod_art, nom_art, tam_art, pre_art,cant_art,nom_img,fecha_entra,cod_alm1,nit_cli1 from articulo where cod_art = $codigo_;");
    $result = mysqli_num_rows($query);

    if($result>0){
        while ($data = mysqli_fetch_array($query)){
            $codigo_art = $data['cod_art'];
            $nombre_art= $data['nom_art'];
            $tamaño_art= $data['tam_art'];
            $precio_art= $data['pre_art'];
            $cantidad_art= $data['cant_art'];
            $nom_img_art = $data['nom_img'];
            $fecha_art= $data['fecha_entra'];
            $codalm= $data['cod_alm1'];
            $nit_cliente= $data['nit_cli1'];
        }
    } else {
       header("location: lista_mercancia.php");
    }
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
    <link rel="stylesheet" href="../eliminar.css">
</head>
<body>
    <section id="container">

    
                <form action="" method="post" class="data_delete" enctype="multipart/form-data">
                <h2>¿Está seguro de eliminar el siguiente registro?</h2>
                <div class="data_delete">
                    <div>
                            <p>Codigo articulo :<span><?php echo $codigo_art; ?></span></p>
                            <p>Nombre del articulo: <span><?php echo $nombre_art; ?></span></p>
                            <p>Tamaño del artculo: <span><?php echo $tamaño_art; ?></span></p>
                            <p>Precio del articulo: <span><?php echo $precio_art; ?></span></p>
                            <p>Cantidad del articulo: <span><?php echo $cantidad_art; ?></span></p>
                            <p>Nombre de la imagen: <span><?php echo $nom_img_art; ?></span></p>
                            <p>Fecha de entrada: <span><?php echo $fecha_art; ?></span></p>
                            <p>Codigo del almacen: <span><?php echo $codalm; ?></span></p>
                            <p>Nit del cliente: <span><?php echo $nit_cliente ?></span></p>

                    <input type="hidden" name="codigo_art" value="<?php echo $codigo_art; ?>">
                    <input type="hidden" name="nom_img" value="<?php echo $nom_img_art; ?>">
                    <input type="button" value="Cancelar" class="btn_okk" onclick="location.href='lista_mercancia.php'">
                    <input type="submit" value="Aceptar" class="btn_okk">  
                </div>
            </div>
        </form>
     </section>    
</body>
</html>