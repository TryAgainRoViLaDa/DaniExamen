<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
</head>
<body>
	<form action="validar.php" method="post">
	<h1>Login TryAgain</h1>
	<p>Usuario <input type="text" placeholder="Pon tu nickname" name="usuario"></p>
	<p>Contraseña <input type="password" placeholder="Pon tu contraseña" name="contrasena"></p>
	<input type="submit" value="Entrar">
	</form>
	<form action="traspaso.php">
	<input type="submit" value="Registrar">
    </form>
</body>
</html>