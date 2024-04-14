<?php 
	include "../../../conexion.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Buscador</title>
	<link rel="stylesheet" href="../style.css">
</head>
<body>
	<section id="container">
        <?php

            $busqueda = strtolower($_REQUEST['busqueda']);
            if(empty($busqueda)){
                header("location: lista_pro.php");
            }

        ?>
		<h1>Lista proveedores</h1>
		<a href="" class="btn_new">Crear Usuario</a>

		<form action="" method="get" class="form_search">
			<input type="text" name="busqueda" id="busqueda" placeholder="Buscar" value="<?php echo $busqueda; ?>">
			<input type="submit" value="Buscar" class="btn_search">
		</form>
	<table>
		<tr>
				<th>Nit</th>
				<th>Nombre </th>
                <th>Dirección</th>
                <th>Ciudad</th>
				<th>Teléfono</th>
				<th>correo</th>
				<th>Acciones</th>

		</tr>

			<?php 
			  
			  $query = mysqli_query($conexion," SELECT nit_prov, nom_prov, dir_prov, ciu_prov, tel_prov, email_prov 
                                                FROM proveedor WHERE (
                                                nit_prov LIKE '%$busqueda%'OR
                                                nom_prov LIKE '%$busqueda%'OR
                                                dir_prov LIKE '%$busqueda%'OR
                                                ciu_prov LIKE '%$busqueda%'OR
                                                tel_prov LIKE '%$busqueda%' OR
                                                email_prov LIKE '%$busqueda%' 
                                                )");
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
							<a class="link_update" href="editar_pro.php?id=<?php echo $row["nit_prov"]; ?>">editar</a>|
							<a class="link_delete" href="eliminar_pro.php?id=<?php echo $row["nit_prov"]; ?>">Eliminar</a>
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