<?php
session_start();
//datos para establecer la conexion con la base de mysql.
mysql_connect('localhost','root','nicole')or die ('Ha fallado la conexión: '.mysql_error());
mysql_select_db('tripbe_experiences')or die ('Error al seleccionar la Base de Datos: '.mysql_error());

$usuario = $_POST["mc_usuario"];
$password = $_POST["mc_password"];
$result = mysql_query('SELECT username,password FROM users WHERE username=\''.$usuario.'\'');
if($row = @mysql_fetch_array($result)){
	if($row["password"] == $password){
		$_SESSION["k_username"] = $row['username'];
		echo '<script>alert("Has sido logueado correctamente '.$_SESSION['k_username'].'");location.href = "post.php";</script>';
		
	}else{
		echo "<meta http-equiv='refresh' content='0;url=index.php'>";
		echo '<script>alert("Password Incorrecto");</script>';
	}
}else{
	echo "<meta http-equiv='refresh' content='0;url=index.php'>";
	echo '<script>alert("Usuario no existente en la base de datos");</script>';
}
mysql_free_result($result);

mysql_close();
?>