<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/main.css">
    <title>Sign Up</title>
</head>
<body>
<?php
    include("conexion.php");

    $usuario = $_POST["usuario"];
    $contrasena = hash("whirlpool", $_POST["contrasena"]);
    $email = $_POST["email"];

    $statement = "INSERT INTO usuarios(nombre, contrasena, email) Values
                    ('$usuario', '$contrasena', '$email')";

    //echo $statement;
    $resultado = $conexionDB->query($statement);

    if($resultado){
        echo "<nav class=\"navbar sticky-top navbar-expand-lg navbar-dark bg-dark bg-light\">
        <a class=\"navbar-brand\" href=\"#\">
            <img src=\"img/cintillo-web.png\" height=\"30\" class=\"d-inline-block align-top\" alt=\"\">
        </a>
        <div class=\"collapse navbar-collapse\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"index.html\">Home<span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"login.php\">Login</a>
                </li>
            </ul>
        </div>
    </nav>
        
        <br><br><br>
        <section class=\"container\">
            <section class=\"row\">
                <div class=\"col-md-4\"></div>
                <div class=\"col-md-4\">
                    <div class=\"jumbotron\">
                        <h2 class=\"display-5\">Registro exitoso</h2>
                        <a type=\"button\" href=\"login.php\" class=\"btn btn-primary\">Login</a>
                    </div>
                </div>
                <div class=\"col-md-4\"></div>
            </section>
        </section>";
    }
    else{
        echo "No se inserto el registro";
    }
?>
</body>
</html>