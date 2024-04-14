<?php
	include '../../../conexion.php';
	
	if(!empty($_POST)){
       
        $cod = $_POST['cod'];
        $nom = $_POST['nom'];
        $tamano = $_POST['tamano'];
        $precio = $_POST['precio'];
        $cantart = $_POST['cantart'];
        $tipoart = $_POST['tipoart'];
        $fechasal = $_POST['fechasal'];
        $codalm = $_POST['codalm'];
        $nitcli = $_POST['nitcli'];
        
        if($_FILES['archivo']["error"]>0){
            echo 'error al cargar archivo';
        }else{
            $permitidos = array("image/png", "image/jpg","image/jpeg");
            $limite_mb  = 2000;

            if (in_array($_FILES['archivo']["type"], $permitidos) && $_FILES['archivo']["size"] <= $limite_mb * 1024){
               
                $ruta = '../../img/files/'.$cod.'/';
                $archivo =  $ruta.$_FILES['archivo']["name"];

                if (!file_exists($ruta)) {
                    mkdir($ruta);

                }

                if (!file_exists($archivo)) {
                    
                    $resularch = @move_uploaded_file($_FILES["archivo"] ["tmp_name"], $archivo );

                    if ($resularch) {
                        echo 'archivo guardado ';
                    }else{
                        echo 'error al guardar ';
                    }


                }else{
                    echo 'ya existe '    ;
                }


            }else{
                echo  'archivo no permitido o excede el tamaño ';
            }
        }
       

        $resultado = mysqli_query($conexion,"INSERT INTO articulo(cod_art,nom_art,tam_art,pre_art,cant_art,tipo_art,fecha_sale,cod_alm1,nit_cli1) 
                                             VALUES ('$cod','$nom','$tamano','$precio','$cantart','$tipoart','$fechasal','$codalm','$nitcli')");
       
        if(!$resultado){
            echo  'error al registrarse ';
        }
        else{
           echo 'Usuario registrado exisamente ';
       }
       mysqli_close($conexion);
       }      
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de Articulo</title>

    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="icon" href="../../img/core-img/SIRAMEC.jpg">
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/script.js"></script>
    <script src="https://kit.fontawesome.com/62ea397d3a.js" crossorigin="anonymous"></script>
</head>
<body>

    <section class="form_wrap">
        <section class="cantact_info">
            <section class="info_title">
                <span <i class="fas fa-cart-plus"></i></span>
                <h2>NUEVO<br>ARTÍCULO</h2>
            </section>
            <section class="info_items">
                <p><span class="fa fa-envelope"></span> siramec@gmail.com</p>
                <p><span class="fa fa-mobile"></span> +57 (34) 848 50 11</p>
            </section>
        </section>

        <form action=""  method="post" class="form_contact" enctype="multipart/form-data">
            <h2>Registrar un nuevo artículo</h2>
            
            <div class="user_info">
                <label for="cod">Código del artículo *</label>
                <input type="text" name="cod" required>

                <label for="nom">Nombre del artículo *</label>
                <input type="text" name="nom"  required>

                <label for="tam">Tamaño del artículo *</label>
                <input type="text" name="tamano" required>

                <label for="pre">Precio del artículo *</label>
                <input type="text" name="precio" required>

                
                    
                <label for="cant">Cantidad disponible del artículo *</label>
                <input type="text" name="cantart"  required>

                <label for="tipo">Tipo de artículo *</label>
                <input type="text" name="tipoart"  required>

                <label for="">Imagen del articulo </label> <br>
                <input type="file" name="archivo" id="archivo" accept="image/*" >

                <label for="">Fecha de salida </label>
                <input type="date" name="fechasal" required>

                <label for="">nit del cliente </label>
                <input type="text" name="nitcli" required>

                <label for="">Codigo de almacen </label>
                <input type="text" name="codalm" required>
           
                <input type="submit"  value="Registrar artículo" id="btnSend">
            </div>
        </form>

    </section>

</body>
</html>
