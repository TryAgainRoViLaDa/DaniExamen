<?php
//$Posicion;
//$json json_encode($Posicion);
//echo $json;
 $posicionX = $_POST["posX"];
 $posicionY = $_POST["posY"];
 //echo $posicionX;
 //echo $posicionY;
    include_once 'principal.php';
 //$sql_actualizar = "UPDATE partida SET posicioX_jug = [$posicionX] WHERE codi = 1;"
    $nickname=$_COOKIE['user'];
 $sql_cookiev = "SELECT codi FROM jugadors WHERE nick = '$nickname'";

 $resultado=mysqli_query($con, $sql_cookiev);
 $fila=mysqli_fetch_row($resultado);
 //echo $fila[0];
 
 $partidas= "SELECT * FROM partida WHERE id_jugador = '$fila[0]'";
 $resultadopartida=mysqli_query($con,$partidas);

 $filas=mysqli_num_rows($resultadopartida);


    if ($filas == 1) {
        $actual="UPDATE partida SET posicioX_jug = '$posicionX', posicioY_jug = '$posicionY' WHERE id_jugador = '$fila[0]'";
        mysqli_query($con, $actual);
    }
    else{
        $crear="INSERT INTO partida(posicioX_jug, posicioY_jug, id_jugador) VALUES ('$posicionX', '$posicionY', '$fila[0]')";
        mysqli_query($con, $crear);
    }
 //echo $_COOKIE['user'];
 //$sql_agregar = "UPDATE jugadors (nick, contrasenya) VALUES ('$usuario_nuevo', '$contrasena2')";
 //$resultado = mysqli_query($con, $sql_agregar);

 /*$sql_agregar = "INSERT INTO jugadors (nick, contrasenya) VALUES ('$posicionX', '$posicionY')";
 $resultado = mysqli_query($con, $sql_agregar);
 $sql_agregar = null;
 $con = null;*/
?>