<?php
    include '../../../conexion.php';
    if(!empty($_POST)){     
        
        $cod_des = $_POST['cod_des'];
        
        $query_delete = mysqli_query($conexion,"DELETE FROM  destinatario WHERE cod_des = $cod_des");
        
        if($query_delete){
            header('location: Lista_dest.php');
        }else{
            echo 'error al eliminar';
        }
    }
if(empty($_REQUEST['id'])){
    header("location: Lista_dest.php");
}else{
    
    $cod_des = $_REQUEST['id'];
    
    $query = mysqli_query($conexion,"SELECT cod_des, nom_des, dir_des, tel_des , nit_cli2 FROM destinatario WHERE cod_des = $cod_des");
    $resul= mysqli_num_rows($query);
    if($resul>0)
    {
        while ($data = mysqli_fetch_array($query)){
            $cod_des= $data['cod_des'];
            $nom_des= $data['nom_des'];   
            $dir_des=$data['dir_des'];  
            $nit_cli2=$data['nit_cli2'];   
        }
    } else {
       header("location: Lista_dest.php");
    }
}
mysqli_close($conexion);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Eliminar Destinatario</title>
        <link href="../eliminar.css" rel="stylesheet">
</head>
<body>
	<section id="container">
		<div class="data_delete">
			<h2>¿Está seguro de eliminar el siguiente registro?</h2>
			<p class="parrafo">Codigo destinatario: <span><?php echo $cod_des; ?></span></p>
			<p>Nombre destinatario: <span><?php echo $nom_des; ?></span></p>
            <p>Direccion destinatario: <span><?php echo $dir_des; ?></span></p>
            <p>Nit cliente: <span><?php echo $nit_cli2; ?></span></p>

		<form method="POST" action="">
                    <input type="hidden" name="cod_des" value="<?php echo $cod_des; ?>">
                    <input type="button" value="Cancelar" class="btn_okk" onclick="location.href='lista_dest.php'">
                    <input type="submit" value="Aceptar" class="btn_okk">
        </form>
            </div>
        </section>
    </body>
</html