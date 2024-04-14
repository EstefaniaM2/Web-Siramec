<?php
	include '../../../conexion.php';
	if(!empty($_POST)){
       
        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $tamaño = $_POST['tamaño'];
        $precio = $_POST['precio'];
        $cantidad = $_POST['cantidad'];
        $tipo = $_POST['tipo'];
        $nom_img = $_POST['foto'];
        $fecha_entrada = $_POST['fecha_entrada'];
        $codigo_almacen = $_POST['codigo_almacen'];
        $nit_cliente = $_POST['nit_cliente'];
        $codigo_prin = $_POST['codigo_prin'];
        
        $query = mysqli_query($conexion,"SELECT cod_alm FROM almacen WHERE concat(cod_alm,' - ',nom_alm) LIKE '%$codigo_almacen%';");  
        $result = mysqli_num_rows($query);

        if($result>0){
        while($row= mysqli_fetch_assoc($query)){
                    $codigo_almacen = $row["cod_alm"];
            }
        }
        $query = mysqli_query($conexion,"SELECT nit_cli FROM cliente where concat(nit_cli,' - ', nom_cli) like '%$nit_cliente%';");  
        $result = mysqli_num_rows($query);

        if($result>0){
        while($row= mysqli_fetch_assoc($query)){
                    $nit_cliente = $row["nit_cli"];
            }
        }
        
        if(empty($_FILES['foto']['name'])){
        $query = mysqli_query($conexion,"UPDATE articulo SET
                                        cod_art='$codigo',
                                        nom_art='$nombre',
                                        tam_art='$tamaño',
                                        pre_art='$precio',
                                        cant_art='$cantidad',
                                        tipo_art='$tipo',
                                        nom_img ='$nom_img',
                                        fecha_entra='$fecha_entrada',
                                        cod_alm1='$codigo_almacen',
                                        nit_cli1 ='$nit_cliente'
                                        where cod_art ='$codigo_prin'");
        }else{
            $permitidos = array("image/png", "image/jpg","image/jpeg");
            $limite_mb  = 2000;

            if (in_array($_FILES['foto']["type"], $permitidos) && $_FILES['foto']["size"] <= $limite_mb * 1024){
                
            $determinar_img = $_FILES['foto']['name'];

                if (!strpos($determinar_img, ' ')){

                    $ruta = "img/files/";
                    opendir($ruta);
                    $destino = $ruta.$_FILES['foto']['name'];
                if(!file_exists($destino)){
                    
                    $query_img = mysqli_query($conexion,"select nom_img from articulo where cod_art='$codigo_prin'");
                    while($row= mysqli_fetch_assoc($query_img)){
                        unlink("img/files/".$row['nom_img']);
                    }
                    $resultao_img = copy($_FILES['foto']['tmp_name'],$destino);
                    $nom_img_nueva = $_FILES['foto']['name'];

                if($resultao_img){
                    $error_arch = 'Archivo actualizado';
                }else{
                    $error_arch ='Error al actulizar el archivo';
                }                 

                }else{
                    $error_arch = 'El nombre del archivo ya existe';
                }
                }else{
                    $error_arch = 'El nombre del archivo tiene espacios';
                }
                }else{
                    $error_arch = 'Archivo no permitido o excede el tamaño ';
                }
            if($error_arch == 'Archivo actualizado'){
            $query = mysqli_query($conexion,"UPDATE articulo SET
                                            cod_art='$codigo',
                                            nom_art='$nombre',
                                            tam_art='$tamaño',
                                            pre_art='$precio',
                                            cant_art='$cantidad',
                                            tipo_art='$tipo',
                                            nom_img ='$nom_img_nueva',
                                            fecha_entra='$fecha_entrada',
                                            cod_alm1='$codigo_almacen',
                                            nit_cli1 ='$nit_cliente'
                                            where cod_art ='$codigo_prin'");
            }
        }

        if(!$query){
            $error= 'error al actuliza';
        
        } else {
            $error= 'usuario actulizado';
        }
    }
$codigo_retorno = $_REQUEST['id'] ;

if(!empty($codigo)){
 $codigo_retorno = $codigo;
}
 
if($codigo_retorno > 0){
    $query_consulta = mysqli_query($conexion,"SELECT cod_art, nom_art, tam_art, pre_art,cant_art,tipo_art,nom_img,fecha_entra, cod_alm1,nit_cli1 from articulo where cod_art = $codigo_retorno;");
    $result_consulta = mysqli_num_rows($query_consulta);

       if($result_consulta > 0){ 
           while($row = mysqli_fetch_array($query_consulta)){
               $cod_consul= $row["cod_art"];
               $nom_consul= $row["nom_art"];
               $tam_consul= $row["tam_art"];
               $pre_consul= $row["pre_art"];
               $cant_consuL= $row["cant_art"];
               $tipo_consul= $row["tipo_art"];
               $nom_img_consul= $row["nom_img"];
               $fecha_consul= $row["fecha_entra"];
               $cod_alm_consul= $row["cod_alm1"];
               $nit_cli_consuL= $row["nit_cli1"];
           }
       }


    }else{
        header("location: lista_mercancia.php");
    }

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar Artículo</title>
    <script src="https://kit.fontawesome.com/62ea397d3a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/registro.css">
</head>
<body>
    <section class="form_wrap">

            <section class="cantact_info">
                <section class="info_title">
                    <span class="fas fa-clipboard-check" ></span>
                    <h2>EDITAR<br>ARTICULO</h2>
                </section>
                <section class="info_items">
                    <p><span class="fa fa-envelope"></span> info.siramec@gmail.com</p>
                    <p><span class="fa fa-mobile"></span> +57 321-915-7229</p>
                </section>
            </section>


                <form action="" method="post"class="form_contact" enctype="multipart/form-data">
                    <h2>Actualizar Artículo</h2>
                <div class="user_info">
                
                <div >
                        <label>Código</label>
                        <input type="number" name="codigo" value="<?php echo $cod_consul?>" >

                        <label>Nombre</label>
                        <input type="text" name="nombre" value="<?php echo $nom_consul?>">
                        
                        <label>Tamaño</label>
                        <input type="text"  name="tamaño" value="<?php echo $tam_consul ?>">             
                        
                        <label>Precio</label>
                        <input type="number" name="precio" value="<?php echo $pre_consul ?>"> 
                        
                        <label>Cantidad</label>
                        <input type="number" name="cantidad" value="<?php echo $cant_consuL?>">
            
                        <label>Tipo Artículo</label>
                        <input type="text" name="tipo" value="<?php echo $tipo_consul ?>">

                        <label >Fecha de entrada</label>
                        <input type="date" name="fecha_entrada" value="<?php echo $fecha_consul?>">
                        
                        <label for="">Imagen del articulo </label>
                        <input type="file" name="foto" accept="image/*">

                        <label>Código del almacen</label>            
                        <select name="codigo_almacen">
                        <?php 
                             $query = mysqli_query($conexion,"SELECT cod_alm ,nom_alm FROM almacen where cod_alm = $cod_alm_consul");
                                $result = mysqli_num_rows($query);
                                if($result){
                                     while($row=mysqli_fetch_assoc($query)){
                        ?>
                            <option><?php echo $row["cod_alm"]." - ".$row["nom_alm"];?></option>  
                        <?php
                            }
                        }
                        ?>

                        <?php 
                            $query = mysqli_query($conexion,"SELECT cod_alm ,nom_alm FROM almacen");
                                $result = mysqli_num_rows($query);
                                if($result){
                                    while($row=mysqli_fetch_assoc($query)){
                        ?>
                            <option><?php echo $row["cod_alm"]." - ".$row["nom_alm"];?></option>  
                        <?php
                            }
                        }
                        ?>
                        </select>
                        
                        
                        <label>Nit del cliente</label>
                        <select name="nit_cliente">
                        <?php 
                             $query = mysqli_query($conexion,"SELECT nit_cli ,nom_cli FROM cliente where nit_cli = $nit_cli_consuL");
                                $result = mysqli_num_rows($query);
                                if($result){
                                     while($row=mysqli_fetch_assoc($query)){
                        ?>
                            <option><?php echo $row["nit_cli"]." - ".$row["nom_cli"];?></option>  
                        <?php
                            }
                        }
                        ?>
                        <?php 
                            $query = mysqli_query($conexion,"SELECT nit_cli,nom_cli FROM cliente");
                            $result = mysqli_num_rows($query);
                                if($result){
                                    while($row=mysqli_fetch_assoc($query)){
                        ?>  
                            <option><?php echo $row["nit_cli"]." - ".$row["nom_cli"];?></option>  
                        <?php
                            }
                        }
                        ?>
                        </select>
                        
                            <a><?php echo isset($error_arch) ? $error_arch : '';?><br></a>
                            <a><?php echo isset($error) ? $error : '';?><br></a>
            
                            <a href="lista_mercancia.php" id="btnsend">Cancelar</a>
                        <input type="submit" id="btnSend" name="registrar" value="Actualizar">
                    

                        <input type="hidden" name="codigo_prin" value="<?php echo $codigo_retorno ?>">
                        <input type="hidden" name="foto" value="<?php echo $nom_img_consul ?>">
                    </div>
            </div>
        </form>
     </section>    
</body>
</html>