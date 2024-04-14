<?php
    include '../../../conexion.php';
    if(!empty($_POST)){     
        
        $nit_prov = $_POST['nit_prov'];
        
        $query_delete = mysqli_query($conexion,"DELETE FROM  proveedor WHERE nit_prov=$nit_prov");
        
        if($query_delete){
            header('location: Lista_pro.php');
        }else{
            echo 'error al eliminar';
        }
    }
if(empty($_REQUEST['id'])){
    header("location: Lista_pro.php");
}else{
    
    $nit_prov = $_REQUEST['id'];
    
    $query = mysqli_query($conexion,"SELECT nit_prov,nom_prov,email_prov FROM proveedor WHERE nit_prov = $nit_prov");
    $resul= mysqli_num_rows($query);
    if($resul>0)
    {
        while ($data = mysqli_fetch_array($query)){
            $nit_prov= $data['nit_prov'];
            $nom_prov= $data['nom_prov'];   
            $email_prov=$data['email_prov'];    
        }
    } else {
       header("location: Lista_pro.php");
    }
}
mysqli_close($conexion);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Eliminar Proveedor</title>
        <link href="../eliminar.css" rel="stylesheet">
</head>
<body>
	<section id="container">
		<div class="data_delete">
			<h2>¿Está seguro de eliminar el siguiente registro?</h2>
			<p class="parrafo">Nit Proveedor: <span><?php echo $nit_prov; ?></span></p>
			<p>Nombre Proveedor: <span><?php echo $nom_prov; ?></span></p>
            <p>Correo Proveedor: <span><?php echo $email_prov; ?></span></p>

		<form method="POST" action="">
                    <input type="hidden" name="nit_prov" value="<?php echo $nit_prov; ?>">
                    <input type="button" value="Cancelar" class="btn_okk" onclick="location.href='lista_pro.php'">
                    <input type="submit" value="Aceptar" class="btn_okk">
        </form>
            </div>
        </section>
    </body>
</html