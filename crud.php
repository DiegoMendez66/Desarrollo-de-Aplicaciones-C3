<?php
include_once 'db.php';

/* code for data insert*/
if(isset($_POST['save']))
{

	$user = $MySQLiconn->real_escape_string($_POST['user']);
	$pass = $MySQLiconn->real_escape_string($_POST['pass']);
	$id_rol = $MySQLiconn->real_escape_string($_POST['id_rol']);

	$SQL = $MySQLiconn->query("INSERT INTO usuarios(username,password, id_rol) VALUES('$user','$pass','$id_rol')");

	if (!$SQL) {
		echo $MySQLiconn->error;
	}
}

/* code for data insert*/

/* code for data delete*/
if(isset($_GET['del']))
{
	$SQL = $MySQLiconn->query("DELETE FROM usuarios WHERE id=".$_GET['del']);
	header("Location: admin.php");
}
/* code for data delete*/

/* code for data update*/
if (isset($_GET['edit'])) 
{
	$SQL = $MySQLiconn->query("SELECT * FROM usuarios WHERE id=".$_GET['edit']);
	$getROW = $SQL->fetch_array();
}

if (isset($_POST['update'])) 
{
	$SQL = $MySQLiconn->query("UPDATE usuarios SET user='".$_POST['user']."', pass='".$_POST['pass']."', id_rol='".$_POST['id_rol']."' WHERE id=".$_GET['edit']);
	header("Location: admin.php");	
}
/* code for data update*/

?>