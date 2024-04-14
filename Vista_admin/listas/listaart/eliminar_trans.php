<?php
    include '../../conexion.php';
    if(!empty($_POST)){     
        
        $nit_trans = $_POST['nit_trans'];
        
        $query_delete = mysqli_query($conexion,"DELETE FROM  transportista WHERE nit_trans=$nit_trans");
        
        if($query_delete){
            header('location: lista_trans.php');
        }else{
            echo 'error al eliminar';
        }
    }
if(empty($_REQUEST['id'])){
    header("location: lista_trans.php");
}else{
    
    $nit_trans = $_REQUEST['id'];
    
    $query = mysqli_query($conexion,"SELECT nit_trans,nom_trans,placam_trans 
                                    FROM transportista 
                                    WHERE nit_trans = $nit_trans");
    $resul= mysqli_num_rows($query);
    if($resul>0)
    {
        while ($data = mysqli_fetch_array($query)){
            $nit_trans= $data['nit_trans'];
            $nom_trans= $data['nom_trans'];
            $placam_trans= $data['placam_trans'];
        }
    } else {
       header("location: lista_trans.php");
    }
}
mysqli_close($conexion);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Eliminar Transportista</title>
        <link href="eliminar.css" rel="stylesheet">
</head>
<body>
	<section id="container">
		<div class="data_delete">
			<h2>¿Está seguro de eliminar el siguiente registro?</h2>
			<p class="parrafo">Nit transportista: <span><?php echo $nit_trans; ?></span></p>
			<p>Nombre transportista: <span><?php echo $nom_trans; ?></span></p>
			<p>Placa Transportista: <span><?php echo $placam_trans; ?></span></p>

		<form method="POST" action="">
                    <input type="hidden" name="nit_trans" value="<?php echo $nit_trans; ?>">
                <input type="button" value="Cancelar" class="btn_okk" onclick="location.href='lista_trans.php'">
                    <input type="submit" value="Aceptar" class="btn_okk">
        </form>
            </div>
        </section>
    </body>
</html