<?php

$usuario_nuevo = $_POST['nombre_usuario'];
$contrasena = $_POST['contrasena'];
$contrasena2 =  $_POST['contrasena2'];


$contrasena = password_hash($contrasena, PASSWORD_DEFAULT);

/*echo '<pre>';
var_dump($usuario_nuevo);
var_dump($contrasena);
var_dump($contrasena2);
echo '</pre>';*/

if (password_verify($contrasena2, $contrasena)) {

	include_once 'principal.php';
	
	//echo $sql_agregar;

	$consulta="SELECT * FROM jugadors where nick='$usuario_nuevo'";
	$resultado=mysqli_query($con, $consulta);
	//echo "$consulta";

	$filas=mysqli_num_rows($resultado);

	if ($filas == 1) {
		echo "ERROR, ese usuario ya existe";
	}else{
		$sql_agregar = "INSERT INTO jugadors (nick, contrasenya) VALUES ('$usuario_nuevo', '$contrasena2')";
		$resultado = mysqli_query($con, $sql_agregar);

		echo "La contraseña es valida";
		header("location:./index.html");
	}

	$con = null;

}else{
	echo "La contraseña no es valida";
}