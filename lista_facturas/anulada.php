<?php 
	include "conexion.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lista facturas anuladas</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<section id="container">

		<h1>facturas anuladas</h1>

		<form action="buscar.php" method="get" class="form_search">
			<input type="text" name="busqueda" id="busqueda" placeholder="Buscar">
			<input type="submit" value="Buscar mercancia" class="btn_search">
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
												WHERE estado_factura.num_estado= 3 ORDER by factura_pedido.fecha DESC");
				$result = mysqli_num_rows($query);

			   	if($result){
					   while($row= mysqli_fetch_assoc($query)){
				?>
					<tr>
						<td><?php echo $row["num_fact"]; ?></td>
						<td><?php echo $row["fecha"];?></td>
						<td><?php echo $row["nit_des1"];?></td>
						<td><?php echo $row["nom_des"];?></td>
						<td><?php echo "<a target='black' href=../pdf/files/".$row["nom_fact"].">".$row['nom_fact'];?></td>
						<td><?php echo $row["nom_estado"];?></td>
						
						<td>
                            <a class="link_update" href="anulada.php?action=pendiente&id=<?php echo $row["num_fact"]; ?>">Pendiente</a>|
							<a class="link_update" href="anulada.php?action=entregado&id=<?php echo $row["num_fact"]; ?>">entregado</a>
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
				if($_GET['action']=="pendiente"){
					$id_pendiente = $_GET['id'];
			$query = mysqli_query($conexion,"UPDATE factura_pedido SET estado_fac = 1 WHERE num_fact='$id_pendiente'");
				
			}elseif($_GET['action']=="entregado"){
					$id_entregado= $_GET['id'];
			$query = mysqli_query($conexion,"UPDATE factura_pedido SET estado_fac = 2 WHERE num_fact='$id_entregado'");
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