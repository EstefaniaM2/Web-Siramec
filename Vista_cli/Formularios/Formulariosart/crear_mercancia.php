<?php
	include '../../../conexion.php';
	if(!empty($_POST['registrar'])){
       
        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $tamaño = $_POST['tamaño'];
        $precio = $_POST['precio'];
        $cantidad = $_POST['cantidad'];
        $tipo = $_POST['tipo'];
        $fecha_entrada = $_POST['fecha_entrada'];
        $codigo_almacen = $_POST['codigo_almacen'];
        $nit_cliente = $_POST['nit_cliente'];
        
        $permitidos = array("image/png", "image/jpg","image/jpeg");
            $limite_mb  = 2000;

            if (in_array($_FILES['foto']["type"], $permitidos) && $_FILES['foto']["size"] <= $limite_mb * 1024){
                
            $determinar_img = $_FILES['foto']['name'];

                if (!strpos($determinar_img, ' ')){

                    $ruta = "img/files/";
                    opendir($ruta);
                    $destino = $ruta.$_FILES['foto']['name'];
                if(!file_exists($destino)){

                    $resultao_img = copy($_FILES['foto']['tmp_name'],$destino);
                    $nom_img = $_FILES['foto']['name'];

                if($resultao_img){
                    $error_arch = 'Archivo guardado';
                }else{
                    $error_arch ='Error al guardar el archivo';
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
        if($error_arch == 'Archivo guardado'){                                              
        $insertar = "INSERT INTO articulo(cod_art, nom_art, tam_art, pre_art, cant_art, tipo_art,nom_img, fecha_entra, cod_alm1, nit_cli1) 
        VALUES ('$codigo', '$nombre', '$tamaño', '$precio', '$cantidad', '$tipo','$nom_img', '$fecha_entrada', '$codigo_almacen', '$nit_cliente')";
        $resultado = mysqli_query($conexion,$insertar);

                     if(!$resultado){
                            $error ='error al registrarse';
 
                        } else {
                            $error ='Usuario registrado exisamente';
                        }
                    }else{
                        $error ='error al registrarse';
                    }
        if($error == 'error al registrarse' && $error_arch == 'Archivo guardado'){
         unlink("img/files/".$nom_img);
        }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro articulos</title>
    <script src="https://kit.fontawesome.com/62ea397d3a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/registro.css">
</head>
<body>
    <section class="form_wrap">

            <section class="cantact_info">
                <section class="info_title">
                    <span class="fas fa-clipboard-check" ></span>
                    <h2>NUEVO<br>ARTICULO</h2>
                </section>
                <section class="info_items">
                    <p><span class="fa fa-envelope"></span> info.siramec@gmail.com</p>
                    <p><span class="fa fa-mobile"></span> +57 321-915-7229</p>
                </section>
            </section>


                <form action="" method="post"class="form_contact" enctype="multipart/form-data">
                    <h2>Registra un Articulo</h2>
                <div class="user_info">
                
                <div id="Layer1" >
                        <label>Código Articulo</label>
                        <input type="number" name="codigo">

                        <label>Nombre Articulo</label>
                        <input type="text" name="nombre">
                        
                        <label>Tamaño Articulo</label>
                        <input type="text"  name="tamaño">             
                        
                        <label> Precio Articulo</label>
                        <input type="number" name="precio"> 
                        
                        <label >Cantidad Articulo</label>
                        <input type="number" name="cantidad">
            
                        <label> Tipo Articulo</label>
                        <input type="text" name="tipo">

                        <label >Fecha de entrada</label>
                        <input type="date" name="fecha_entrada" >
                        
                        <label for="">Imagen del articulo </label>
                        <input type="file" name="foto" accept="image/*" >
                        
                        <label>Codigo del Almacen</label>            
                        <select name="codigo_almacen">
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
                        
                        
                        <label>Nit del Cliete</label>
                        <select name="nit_cliente">
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
            
                        <input type="submit" id="btnSend" name="registrar" value="Registrar">
                        
                    </div>
            </div>
        </form>
     </section>    
</body>
</html>