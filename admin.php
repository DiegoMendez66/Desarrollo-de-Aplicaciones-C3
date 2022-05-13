<?php include('seguridad.php');
include('crud.php');?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Administrador</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<center>
<br>
<h1>MINISTERIO DE COMERCIO EXTERIOR Y TURISMO</h1>
<h2>PERÚ</h2><br>
</center>
<body>
	<h1 align="center" style="color:darkmagenta;">Bienvenido <?php echo $_SESSION['username'];?></h1>
<table>
	<br>
	<br><h2>Agregar nuevo usuario</h2>
	<div id="form">
		<form method="post">
			<table  class="t-adm-agr" width="20%" border="1px" cellpadding="15">
				<tr>
					<td>
						Username: <input type="text" name="user" placeholder="Username" value="<?php if(isset($_GET['edit'])) echo $getROW['username']; ?>">
					</td>
				</tr>
				<tr>
					<td>
						Password: <input type="text" name="pass" placeholder="Password" value="<?php if(isset($_GET['edit'])) echo $getROW['password']; ?>">
					</td>
				</tr>
				<tr>
					<td>
						Rol:<br> <input type="number" name="id_rol" placeholder="Rol" max='2' min='1' value="<?php if(isset($_GET['edit'])) echo $getROW['id_rol']; ?>">
					</td>
				</tr>
				<tr>
					<td>
						<?php
						if (isset($_GET['edit'])){
							?>
							<button  type="submit" name="update">Editar</button>
							<?php
						}else{
							?>
							<button type="submit" name="save">Registrar</button>
							<?php
						}
						?>
					</td>
				</tr>
			</table>
		</form>

		<br><br>
		<h2>Listado de usuarios</h2>
		<table class="t-adm-list" width="50%" border="1" cellpadding="15" align="center">
			<tr class="encabezado">
				<td><b>ID</b></td>
				<td><b>Nombre de usuario</b></td>
				<td><b>Clave</b></td>
				<td><b>Rol</b></td>
				<td colspan="2"><b>Acciones</b></td>
			</tr>
			<?php
			$res = $MySQLiconn->query("SELECT * FROM usuarios");
			while ($row=$res->fetch_array()) {
			?>
			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['username']; ?></td>
				<td><?php echo $row['password']; ?></td>
				<td><?php echo $row['id_rol']; ?></td>
				<td><a href="?edit=<?php echo $row['id'];?>" onclick="return confirm('Confirmar edicion')">Editar</a></td>
				<td><a href="?del=<?php echo $row['id'];?>" onclick="return confirm('Confirmar eliminacion')">Eliminar</a></td>
			</tr>
			<?php
			}
			?>
		</table>
		<h3 align="center">Roles ---> 1: Administrador ||  2: Usuario</h3>
	</div>
</table>
</body>
<h3 align="center"><a href="salir.php">Salir</a></h3>