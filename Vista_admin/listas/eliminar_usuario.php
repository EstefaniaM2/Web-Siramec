<?php
    include '../../conexion.php';
    if(!empty($_POST)){     
        
        $idusuario = $_POST['idusuario'];
        
        $query_delete = mysqli_query($conexion,"DELETE FROM  usuario WHERE idusuario=$idusuario");
        
        if($query_delete){
            header('location: lista_usuarios.php');
        }else{
            echo 'error al eliminar';
        }
    }
if(empty($_REQUEST['id'])){
    header("location: lista_usuarios.php");
}else{
    
    $idusuario = $_REQUEST['id'];
    
    $query = mysqli_query($conexion,"SELECT idusuario,nombre,correo,usuario FROM usuario WHERE idusuario = $idusuario");
    $resultado= mysqli_num_rows($query);
    if($resultado > 0)
    {
        while ($data = mysqli_fetch_array($query)){
            $idusuario= $data['idusuario'];
            $nombre= $data['nombre'];
            $correo= $data['correo'];
            $usuario= $data['usuario'];
        }
    } else {
       header("location: lista_usuarios.php");
    }
}
mysqli_close($conexion);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Eliminar Usuario</title>
        <link href="eliminar.css" rel="stylesheet">
</head>
<body>
	<section id="container">
		<div class="data_delete">
			<h2>¿Está seguro de eliminar el siguiente registro?</h2>
			<p class="parrafo">Id Usuario: <span><?php echo $idusuario; ?></span></p>
			<p>Nombre Usuario: <span><?php echo $nombre; ?></span></p>
			<p>Correo Usuario: <span><?php echo $correo; ?></span></p>
            <p> Usuario: <span><?php echo $usuario; ?></span></p>

		<form method="POST" action="">
                    <input type="hidden" name="idusuario" value="<?php echo $idusuario; ?>">
                <input type="button" value="Cancelar" class="btn_okk" onclick="location.href='lista_usuarios.php'">
                    <input type="submit" value="Aceptar" class="btn_okk">
        </form>
            </div>
        </section>
    </body>
</html