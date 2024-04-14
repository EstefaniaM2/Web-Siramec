<?php 
	include "conexion.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lista destinatrios</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<section id="container">

		<h1>Lista destinatrios</h1>
		<a href="crear_dest.php" class="btn_new">Crear nuevo detinatario</a>

		<form action="buscar_dest.php" method="get" class="form_search">
			<input type="text" name="busqueda" id="busqueda" placeholder="Buscar">
			<input type="submit" value="Buscar mercancia" class="btn_search">
		</form>
	<table>
		<tr>
				<th>Codigo</th>
				<th>Nombre</th>
                <th>Direccion</th>
                <th>Telefono</th>
				<th>Email</th>
                <th>Acciones</th>
		</tr>

			<?php 
			  
			  $query = mysqli_query($conexion,"SELECT cod_des,nom_des,dir_des,tel_des,email from destinatario;");
			  $result = mysqli_num_rows($query);

			   	if($result){
					   while($row= mysqli_fetch_assoc($query)){
				?>
					<tr>
						<td><?php echo $row["cod_des"]; ?></td>
						<td><?php echo $row["nom_des"];?></td>
						<td><?php echo $row["dir_des"];?></td>
						<td><?php echo $row["tel_des"];?></td>
						<td><?php echo $row["email"];?></td>
					<td>
							<a class="link_update" href="editar_dest.php?id=<?php echo $row["cod_des"]; ?>">editar</a>|
							<a class="link_delete" href="eliminar_dest.php?id=<?php echo $row["cod_des"]; ?>">Eliminar</a>
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