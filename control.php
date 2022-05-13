<?php 
include('db.php');

$username=$_POST['username'];
$password=$_POST['password'];

session_start();
$_SESSION['username']=$username;
$_SESSION['password']=$password;


$consulta=$MySQLiconn->query("SELECT * FROM usuarios where username='$username' and password='$password'");

$filas=mysqli_fetch_array($consulta);

if ($filas['id_rol']== 1) { //administrador
	$_SESSION['autentificado']='1';
	header('Location: admin.php');
}elseif ($filas['id_rol']==2) {//usuario
	$_SESSION['autentificado']='1';
	header('Location: usuario.php');
}else{
	header('Location:index.php?errorusuario=si');
}

mysqli_free_result($consulta);

