<?php
session_start();
include("conexion.php");

$idUsuario = $_SESSION["datosUsuario"]["id"];
$idSilla = $_POST["silla"];
$sql = "SELECT * FROM usuarios_paquetes";

$paquete = $conexionDB ->query($sql);

if(mysqli_num_rows($paquete)>0){
    $fila = $paquete->fetch_array(MYSQLI_ASSOC);
    $_SESSION["usuario"] = $fila["IdUsuario"];
    $_SESSION["paquete"] = $fila["paquete"];
    $_SESSION["lugares"] = $fila["lugares"];
}else{
    echo "No hay resultados";
}

$paquete1 = $_SESSION["paquete"];

$statement = "INSERT INTO reservaciones (idSilla,idUsuario,paquete) VALUES ('$idSilla','$idUsuario','$paquete1')";
$resultado = $conexionDB ->query($statement);

if($resultado){
    echo "Registro exitoso";
}
else{
    echo "Error";
}
?>