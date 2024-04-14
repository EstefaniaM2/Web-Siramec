<?php 
	include "../../conexion.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lista usuarios</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<section id="container">
        <?php

            $busqueda = strtolower($_REQUEST['busqueda']);
            if(empty($busqueda)){
                header("location: lista_usuarios.php");
            }

        ?>
		<h1>Lista usuarios</h1>
		<a href="../../registrar.php" class="btn_new">Crear Usuario</a>

		<form action="" method="get" class="form_search">
			<input type="text" name="busqueda" id="busqueda" placeholder="Buscar" value="<?php echo $busqueda; ?>">
			<input type="submit" value="Buscar" class="btn_search">
		</form>
	<table>
		<tr>
				<th>Identificación</th>
				<th>Nombre </th>
                <th>Correo Eletronico </th>
                <th>Usuario </th>
				<th>Rol</th>
				<th>Acciones</th>

		</tr>

			<?php 
			  
			  $query = mysqli_query($conexion," SELECT u.idusuario,u.nombre,u.correo,u.usuario, u.rol 
			  									From usuario u 
												  WHERE  (idusuario LIKE '%$busqueda%'OR 
												  		 nombre LIKE '%$busqueda%'OR
														 correo LIKE '%$busqueda%'OR 
														 usuario LIKE '%$busqueda%' OR 
														 rol like '%$busqueda%')");
			 		
					
					 $result = mysqli_num_rows($query);

			   	if($result){
					   while($data= mysqli_fetch_assoc($query)){
				?>
					<tr>
						<td><?php echo $data["idusuario"]; ?></td>
						<td><?php echo $data["nombre"];?></td>
						<td><?php echo $data["correo"];?></td>
						<td><?php echo $data["usuario"];?></td>
						<td><?php echo $data["rol"];?></td>
						<td>
							<a class="link_update" href="editar_usuario.php?id=<?php echo $data["idusuario"]; ?>">Editar</a> |
							<a class="link_deletee" href="eliminar_usuario.php?id=<?php echo $data["idusuario"]; ?>">Eliminar</a>
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