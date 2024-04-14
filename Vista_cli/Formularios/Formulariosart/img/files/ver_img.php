<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver imagen</title>
    <link rel="stylesheet" href="../../css/ver_img.css">
</head>
<body>
    
    <?php $nom_img_id = $_REQUEST["id"];?>

            <div class="cssimagen">
				<img src="<?php echo $nom_img_id;?>">
				<a class="close" href="../../.././../listas/listas_mercancia/lista_mercancia.php">X</a>
			</div>
</body>
</html>