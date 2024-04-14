<?php 
	include "../../../conexion.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lista facturas pendientes</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<section id="container">

		<h1>facturas pendientes</h1>
	

		<form action="buscar.php" method="get" class="form_search">
			<input type="text" name="busqueda" id="busqueda" placeholder="Buscar">
			<input type="submit" value="Buscar facturas" class="btn_search">
		</form>
	<table>
		<tr>
				<th>N Factura</th>
				<th>Facha y hora</th>
                <th>Nit Dest</th>
				<th>Nombre Dest</th>
                <th>Nombre factura</th>
				<th>Estado</th>
                <th>Acciones</th>
		</tr>

			<?php 
			  
			  $query = mysqli_query($conexion,"SELECT 	num_fact,
			  											fecha,
														nit_des1,
														nom_des,
														nom_fact,
														nom_estado
												FROM 
													(bd_siramec.estado_factura INNER JOIN bd_siramec.factura_pedido
														ON estado_factura.num_estado=factura_pedido.estado_fac) 
													INNER JOIN bd_siramec.destinatario 
														ON factura_pedido.nit_des1=destinatario.cod_des 
												WHERE estado_factura.num_estado= 1 ORDER by factura_pedido.fecha DESC");
				$result = mysqli_num_rows($query);

			   	if($result){
					   while($row= mysqli_fetch_assoc($query)){
				?>
					<tr>
						<td><?php echo $row["num_fact"]; ?></td>
						<td><?php echo $row["fecha"];?></td>
						<td><?php echo $row["nit_des1"];?></td>
						<td><?php echo $row["nom_des"];?></td>
						<td><?php echo "<a target='black' href=../../../../../Proyecto_Siramec/Vista/pdf/files/".$row["nom_fact"].">".$row['nom_fact'];?></td>
						<td><?php echo $row["nom_estado"];?></td>
						
						<td>
							<a class="link_update" href="factura_1.php?action=entregado&id=<?php echo $row["num_fact"]; ?>">Entregado</a>|
							<a class="link_delete" href="factura_1.php?action=anular&id=<?php echo $row["num_fact"]; ?>">Anular</a>
						</td>
					</tr>

				<?php  
					   }
				   }
			    ?>
	</table>
	</section>
	<?php
			if(isset($_GET['action'])){	
				if($_GET['action']=="entregado"){
					$id_entregado= $_GET['id'];
			$query = mysqli_query($conexion,"UPDATE factura_pedido SET estado_fac = 2 WHERE num_fact='$id_entregado'");
				
			}elseif($_GET['action']=="anular"){
					$id_anular= $_GET['id'];
			$query = mysqli_query($conexion,"UPDATE factura_pedido SET estado_fac = 3 WHERE num_fact='$id_anular'");
				}
			// if(!$query){
			// 	echo 'error';
			// }else{
			// 	echo 'actualizado';
			// }
		}
		?>

</body>
</html>