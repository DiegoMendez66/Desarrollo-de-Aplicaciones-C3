<html >
<title>Login</title>
<link rel="stylesheet" type="text/css" href="style/style.css">
<body class="body-login">
<center>
<br>
<h1>MINISTERIO DE COMERCIO EXTERIOR Y TURISMO</h1>
<h2>PERÚ</h2><br>
</center>
<br><br><br><br><br><br>
<form action="control.php" method="POST" class="form-login">
<tr>
  <td colspan="2" align ="center">
       <?php if (isset($_GET["errorusuario"])=="si"){?>
       			<br>
                <span style="color: red;"><b>Datos incorrectos</b></span><br> 
       <?php }else{?><br>
                <span style="background-color: #7FCB34;"><b>Introduce tu clave de acceso</b></span><br> 
       <?php }?></td>
</tr>
<br>
<tr>
  <td >Usuario:</td>
  <td><input type="Text" name="username" size="8" maxlength="50"></td>
</tr>
<br><br>
<tr>
  <td >Clave:</td>
  <td><input type="password" name="password" size="8" maxlength="50"></td>
</tr>
<br><br>
<tr><td><input class="button" type="Submit" value="ENTRAR"><br></td><br>
</tr>
</form>
</body>
</html>