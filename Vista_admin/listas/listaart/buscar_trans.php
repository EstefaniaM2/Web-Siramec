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
		<a href="" class="btn_new">Crear Usuario</a>

		<form action="" method="get" class="form_search">
			<input type="text" name="busqueda" id="busqueda" placeholder="Buscar" value="<?php echo $busqueda; ?>">
			<input type="submit" value="Buscar" class="btn_search">
		</form>
	<table>
		<tr>
				<th>Nit</th>
				<th>Nombre </th>
                <th>Direccion</th>
                <th>Ciudad</th>
				<th>telefono</th>
				<th>correo</th>
				<th>placa</th>
				<th>Acciones</th>

		</tr>

			<?php 
			  
			  $query = mysqli_query($conexion," SELECT nit_trans, nom_trans, dir_trans, ciu_trans, tel_trans, email_trans, placam_trans 
                                                FROM transportista WHERE (
                                                nit_trans LIKE '%$busqueda%'OR
                                                nom_trans LIKE '%$busqueda%'OR
                                                dir_trans LIKE '%$busqueda%'OR
                                                ciu_trans LIKE '%$busqueda%'OR
                                                tel_trans LIKE '%$busqueda%' OR
                                                email_trans LIKE '%$busqueda%' OR
                                                placam_trans LIKE '%$busqueda%'
                                                )");
			  $result = mysqli_num_rows($query);

			   	if($result){
					   while($row= mysqli_fetch_assoc($query)){
				?>
					<tr>
						<td><?php echo $row["nit_trans"]; ?></td>
						<td><?php echo $row["nom_trans"];?></td>
						<td><?php echo $row["dir_trans"];?></td>
						<td><?php echo $row["ciu_trans"];?></td>
						<td><?php echo $row["tel_trans"];?></td>
						<td><?php echo $row["email_trans"];?></td>
						<td><?php echo $row["placam_trans"];?></td>
						<td>
							<a class="link_update" href="editar_trans.php?id=<?php echo $row["nit_trans"]; ?>">Editar</a>|
							<a class="link_deletee" href="eliminar_trans.php?id=<?php echo $row["nit_trans"]; ?>">Eliminar</a>
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