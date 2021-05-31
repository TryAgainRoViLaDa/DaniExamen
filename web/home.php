<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TODOS CALVOS</title>
</head>
<body>
	<form action="validar.php" method="post">
	<h1>PA PA, PA PA PA, PA PA, PA PA....PA PA</h1>
	<input type="submit" value="Entrar">
	</form>
</body>
</html>

$contrasena = password_hash($contrasena, PASSWORD_DEFAULT);

if (password_verify($contrasena2, $contrasena)) {
	echo 'La contraseña es valida';

	include_once 'principal.php';

	$sql_agregar = 'INSERT INTO jugadors (nick, contrasenya) VALUES (?,?)';
	$sentencia_agregar = $con->prepare($sql_agregar);
	$sentencia_agregar->execute(array($usuario_nuevo,$contrasena))

	/*if ($sentencia_agregar->execute(array($usuario_nuevo,$contrasena))){
		echo'Insertado<br>';
	}else{
		echo 'Error<br>';
	}*/

	//$sentencia_agregar = null;
	//$con = null;
}else{
	echo 'La contraseña no es valida';
}
