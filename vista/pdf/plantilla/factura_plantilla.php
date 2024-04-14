<?php
 function getPlantilla(){
  session_start();
	include 'conexion.php';

    if (isset($_POST['add_to_cart'])) {
        if (isset($_SESSION['cart'])) {
            $session_array_cod = array_column($_SESSION['cart'], "cod_art");

            if(!in_array($_GET['cod_art'], $session_array_cod)){
                
                $session_array = array(
                    'cod_art' => $_GET['cod_art'],
                    'nom_art' => $_POST['nom_art'],
                    'pre_art' => $_POST['pre_art'],
                    'cant' => $_POST['cant'],
                );
                $_SESSION['cart'][] = $session_array;
            }
            
        }else{
            $session_array = array(
                'cod_art' => $_GET['cod_art'],
                'nom_art' => $_POST['nom_art'],
                'pre_art' => $_POST['pre_art'],
                'cant' => $_POST['cant'],
            );
            $_SESSION['cart'][] = $session_array;
        }
    } 

date_default_timezone_set('America/Bogota'); //consulta de la hora y fecha 
	
	function fecha(){
		$mes = array("","Enero", 
					  "Febrero", 
					  "Marzo", 
					  "Abril", 
					  "Mayo", 
					  "Junio", 
					  "Julio", 
					  "Agosto", 
					  "Septiembre", 
					  "Octubre", 
					  "Noviembre", 
					  "Diciembre");
		return date('d')." de ". $mes[date('n')] . " de " . date('Y');
	}
    function hora(){
       return date("h")."-".date("i")."-".date("s")."-".date("A");
    }
	//buscar la ultima factura y crear una 
	$query = mysqli_query($conexion,"SELECT max(num_fact) FROM factura_pedido");
    if($row = mysqli_fetch_assoc($query)){
            $num_fac = $row['max(num_fact)'];
    }    
    $crear_fac = $num_fac + 1;
    $cod_des=$_SESSION['cod_des'];
  
    $insertar_fac = mysqli_query($conexion,"INSERT INTO factura_pedido (num_fact, fecha, nit_des1,nom_fact,estado_fac) 
                                            VALUES ('$crear_fac', current_timestamp(), '$cod_des','fac_$crear_fac.pdf','1');");

	//guardar la mercancia en la bd 
	if(!empty($_SESSION['cart'])) {
		foreach ($_SESSION['cart'] as $key => $value){

			$codigo_art=$value['cod_art'];
                    
			$cantidad_art=$value['cant'];
			
			
	$insert_producto=mysqli_query($conexion,"INSERT INTO factura_articulo(cod_fac1,cod_art1,cant_art)
							values ('$crear_fac','$codigo_art','$cantidad_art');");	


	
		//actualizar la cantidad de articulos
	$numero_art=mysqli_query($conexion,"SELECT cant_art FROM articulo WHERE cod_art='$codigo_art';");
	
	if($row=mysqli_fetch_assoc($numero_art)){
		$total_cant  = $row['cant_art'] - $cantidad_art;
	}

	$UPDATE_articulos = mysqli_query($conexion,"UPDATE articulo SET cant_art='$total_cant' WHERE cod_art='$codigo_art'" );

		}
	
	
	}
		$_SESSION['crear_fac']=	$crear_fac;

	//query para datos del destinatario
	$datos_des = mysqli_query($conexion,"SELECT nom_des,dir_des,tel_des,email from destinatario where cod_des=$cod_des");
	if($row = mysqli_fetch_assoc($datos_des)){
		$nom_des = $row['nom_des'];
		$dir_des = $row['dir_des'];
		$tel_des = $row['tel_des'];
		$email = $row['email'];
	}    
	$_SESSION['nombre']=$nom_des;
	$_SESSION['email'] =$email;	
	

	$plantilla = '
<body>
<div id="page_pdf">
	<table id="factura_head">
		<tr>
			<td class="logo_factura">
				<div>
				<img src="plantilla/img/logo.jpg" heigth="80" width="80" >
				</div>
			</td>
			<td class="info_empresa">
				<div>
					<span class="h2">FACTURA DE VENTA SIRAMEC</span>
					<p>Avenida Medellín,Andes,Antioquia</p>
					<p>Teléfono: +(57) 321 915 7229</p>
					<p>Email: info.siramec@gmail.com</p>
				</div>
			</td>
			<td class="info_factura">
				<div class="round">
					<span class="h3">Factura</span>
					<p>No. Factura:'.$crear_fac.'</p>
					<p>Fecha:'.fecha().'</p>
					<p>Hora:'.hora().'</p>
					<p>Vendedor: Administrador</p>
				</div>
			</td>
		</tr>
	</table>
	<table id="factura_cliente">
		<tr>
			<td class="info_cliente">
				<div class="round">
					<span class="h3">Cliente</span>
					<table class="datos_cliente">
						<tr>
							<td><label>Nit:</label><p>'.$cod_des.'</p></td>
							<td><label>Teléfono:</label> <p>'.$tel_des.'</p></td>
						</tr>
						<tr>
							<td><label>Nombre:</label> <p>'.$nom_des.'</p></td>
							<td><label>Dirección:</label> <p>'.$dir_des.'</p></td>
							<td><label>Correo:</label> <p>'.$email.'</p></td>
						</tr>		
					</table>
				</div>
			</td>

		</tr>
	</table>

	<table id="factura_detalle">
			<thead>
				<tr>
					<th width="50px">Codigo</th>
					<th class="textleft">Nombre</th>
					<th class="textright">Precio.</th>
					<th class="textright">cantidad </th>
					<th class="textright">Precio total </th>
				</tr>
			</thead>
			<tbody id="detalle_productos">';
			if(!empty($_SESSION['cart'])) {
				foreach ($_SESSION['cart'] as $key => $value){
			
			$plantilla.='<tr>
					<td class="textcenter">'.$value['cod_art'].'</td>
					<td>'.$value['nom_art'].'</td>
					<td class="textright">'.$value['pre_art'].'</td>
					<td class="textright">'.$value['cant'].'</td>
					<td class="textright">'.$value['cant'] *$value['pre_art'].'</td>
				</tr>';

				$total = $total + $value['pre_art'] * $value['cant'];

				$pagar = 81 * $total/100;
				$iva = 19 * $total/100;
					}

				}

			 $plantilla .= '</tbody>
			<tfoot id="detalle_totales">
				<tr>
					<td colspan="4" class="textright"><span>SUBTOTAL</span></td>
					<td class="textright"><span>'.number_format($pagar).'</span></td>
				</tr>
				<tr>
					<td colspan="4" class="textright"><span>IVA (19%)</span></td>
					<td class="textright"><span>'.number_format($iva).'</span></td>
				</tr>
				<tr>
					<td colspan="4" class="textright"><span>TOTAL PAGAR</span></td>
					<td class="textright"><span>'.number_format($total,).'</span></td>
				</tr>
		</tfoot>
	</table>
	<div>
		<p class="nota">Si usted tiene inquietudes por favor presente su factura</p>
		<h4 class="label_gracias">¡Gracias por su compra!</h4>
	</div>

</div>
</body>';

return $plantilla;
 };