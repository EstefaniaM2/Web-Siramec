<?php 
	include "../../../conexion.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lista proveedores</title>
	<link rel="stylesheet" href="../style.css">
</head>
<body>
	<section id="container">

		<h1>Lista proveedores</h1>
		<a href="../../../Vista_cli/Formularios/Formulariopro/index.php" class="btn_new">Crear Proveedor</a>

		<form action="Buscar_pro.php" method="get" class="form_search">
			<input type="text" name="busqueda" id="busqueda" placeholder="Buscar">
			<input type="submit" value="Buscar" class="btn_search">
		</form>
	<table>
		<tr>
				<th>Nit</th>
				<th>Nombre </th>
                <th>Dirección</th>
                <th>Ciudad</th>
				<th>Teléfono</th>
				<th>Correo</th>
				<th>Acciones</th>

		</tr>

			<?php 
			  
			  $query = mysqli_query($conexion,"SELECT  * FROM proveedor ORDER BY nom_prov asc ");
			  $result = mysqli_num_rows($query);

			   	if($result){
					   while($row= mysqli_fetch_assoc($query)){
				?>
					<tr>
						<td><?php echo $row["nit_prov"]; ?></td>
						<td><?php echo $row["nom_prov"];?></td>
						<td><?php echo $row["dir_prov"];?></td>
						<td><?php echo $row["ciu_prov"];?></td>
						<td><?php echo $row["tel_prov"];?></td>
						<td><?php echo $row["email_prov"];?></td>
						<td>
							<a class="link_update" href="editar_pro.php?id=<?php echo $row["nit_prov"]; ?>">Editar</a>|
							<a class="link_deletee" href="eliminar_pro.php?id=<?php echo $row["nit_prov"]; ?>">Eliminar</a>
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