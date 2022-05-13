<?php include('seguridad.php');?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style/style.css">
<center><br>
<h1>MINISTERIO DE COMERCIO EXTERIOR Y TURISMO</h1>
<h2>PERÚ</h2><br>
</center>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Usuario</title>
</head>
	<div class="body-user">
		<h1>Bienvenido <?php echo $_SESSION['username'];?></h1>
		<ul>
			<li><a href="relaciones.php">Ver relaciones diplomaticas</a></li>
			<li><a href="productos.php">Ver Flujo de productos</a></li>
		</ul><br><br>
		<a href="salir.php">Salir</a>
	</div>
</html>
