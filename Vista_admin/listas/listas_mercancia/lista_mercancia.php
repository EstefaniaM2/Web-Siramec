<?php 
	include '../../../conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lista mercancias</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<section id="container">

		<h1>Lista Mercancia</h1>
		<a href="../../Formularios/Formulariosart/crear_mercancia.php" class="btn_new">Crear nueva mercancia</a>

		<form action="buscar_mercancia.php" method="get" class="form_search">
			<input type="text" name="busqueda" id="busqueda" placeholder="Buscar">
			<input type="submit" value="Buscar mercancia" class="btn_search">
		</form>
	<table>
		<tr>
				<th>Codigo</th>
				<th>Nombre</th>
                <th>Tamaño</th>
                <th>Precio</th>
				<th>Cantidad</th>
                <th>Tipo</th>
				<th>Imagen</th>
                <th>Fecha entrada</th>
				<th>Codigo almacen</th>
				<th>Nit del cliente</th>
                <th>Acciones</th>
		</tr>

			<?php 
			  
			  $query = mysqli_query($conexion,"SELECT cod_art, nom_art, tam_art, pre_art,cant_art,tipo_art,nom_img,fecha_entra, cod_alm1,nit_cli1 from articulo");
			  $result = mysqli_num_rows($query);

			   	if($result){
					   while($row= mysqli_fetch_assoc($query)){
				?>
					<tr>
						<td><?php echo $row["cod_art"]; ?></td>
						<td><?php echo $row["nom_art"];?></td>
						<td><?php echo $row["tam_art"];?></td>
						<td><?php echo $row["pre_art"];?></td>
						<td><?php echo $row["cant_art"];?></td>
						<td><?php echo $row["tipo_art"];?></td>
						<td><?php echo "<a  href=../../../Vista_cli/Formularios/Formulariosart/img/files/ver_img.php?id=".$row["nom_img"].">".$row["nom_img"]."</a>";?></td>
						<td><?php echo $row["fecha_entra"];?></td>
						<td><?php echo $row["cod_alm1"];?></td>
						<td><?php echo $row["nit_cli1"];?></td>
						<td>
							<a class="link_update" href="editar_merca.php?id=<?php echo $row["cod_art"]; ?>">Editar</a>|
							<a class="link_delete" href="eliminar_merca.php?id=<?php echo $row["cod_art"]; ?>">Eliminar</a>
						</td>
					</tr>

				<?php  
					   }
				   }
			    ?>
	</table>
	</section>
</body>
</html>