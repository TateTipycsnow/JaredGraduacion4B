<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

    <?php
    include("conexion.php");
    $usuario = $_POST["usuario"];
    $password = hash("whirlpool",$_POST["password"]);

    $statement = "SELECT nombre,contrasena
                  FROM usuarios
                  WHERE contrasena = '$password'
                  AND nombre = '$usuario'";

    $resultado = $conexionDB->query($statement);
    
    if($resultado->num_rows > 0){
        session_start();
        $_SESSION["usuario"] = $usuario;
        echo "<h1 class = \"text-sucess\"> Bienvenid@ ", $usuario, "</h1>";
    }
    else{
        echo "<h1 class = \"text-danger\"> Usuario o contraseña incorrecto </h1>";
    }
    ?>

</body>
</html>