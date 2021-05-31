<?php  

include_once 'principal.php';

$nickname=$_COOKIE['user'];
$sql_cookiev = "SELECT codi FROM jugadors WHERE nick = '$nickname'";
$resultado=mysqli_query($con, $sql_cookiev);
$fila=mysqli_fetch_row($resultado);
$partidas= "SELECT posicioX_jug, posicioY_jug FROM partida WHERE id_jugador = '$fila[0]'";
 $resultadopartida=mysqli_query($con,$partidas);

 $filas=mysqli_num_rows($resultadopartida);


    if ($filas == 1) {
    	$partida = mysqli_fetch_object($resultadopartida);
    	//echo $partida->posicioX_jug." - ".$partida->posicioY_jug;
    	$PosX = $partida->posicioX_jug;
    	$PosY = $partida->posicioY_jug;
    	
    }
    else{
    	$PosX = 64;
    	$PosY = 2493;

    }

    echo $PosX." - ".$PosY;
?>