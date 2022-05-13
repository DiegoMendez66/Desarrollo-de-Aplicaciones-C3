<?php 
//Inicio de sesión
session_start();

//Comprueba que el usuario esta autentificado
if($_SESSION['autentificado'] != '1'){
	//si no existe, se dirige a la Página de incio
	header('Location: index.php');
	//salimos del script
	exit();
}
?>