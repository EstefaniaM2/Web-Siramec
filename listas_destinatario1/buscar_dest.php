<?php 
	include "conexion.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lista usuarios</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<section id="container">
        <?php

            $busqueda = strtolower($_REQUEST['busqueda']);
            if(empty($busqueda)){
                header("location: lista_dest.php");
            }

        ?>
		<h1>Lista usuarios</h1>
		<a href="crear_dest.php" class="btn_new">Crear Usuario</a>

		<form action="" method="get" class="form_search">
			<input type="text" name="busqueda" id="busqueda" placeholder="Buscar" value="<?php echo $busqueda; ?>">
			<input type="submit" value="Buscar" class="btn_search">
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
			  
			  $query = mysqli_query($conexion,"SELECT cod_des,nom_des,dir_des,tel_des,email from destinatario WHERE (
                                                cod_des LIKE '%$busqueda%'OR
                                                nom_des LIKE '%$busqueda%'OR
                                                dir_des LIKE '%$busqueda%'OR
                                                tel_des LIKE '%$busqueda%'OR
                                                email LIKE '%$busqueda%')");
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