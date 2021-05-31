<?php
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
//$contrasena = password_hash($contrasena, PASSWORD_DEFAULT);
session_start();
$_SESSION['usuario']=$usuario;

include("principal.php");

//Verificar que el usuario existe
$consulta="SELECT * FROM jugadors where nick='$usuario' AND contrasenya='$contrasena'";
$resultado=mysqli_query($con, $consulta);

$filas=mysqli_num_rows($resultado);


if ($filas == 1) {
	$cookiename="user";
	$cookievalue=$usuario;
	setcookie($cookiename, $cookievalue, time()+86400,"/");
	header("location:./index.html");
}else{
	?>
	<?php
	include("index.php");
	?>
	<h1 class="bad"> ERROR </h1>
	<?php
}
mysqli_free_result($resultado);
mysqli_close($con);