<?php

    session_start();

    $sesion = $_SESSION["usuario"];
    
    if(!isset($sesion)){
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>VIP</title>
    <link rel="stylesheet" href="css/main.css">
    <style>
        img{
            height: 20%;
        }
    </style>
</head>
<body>
    <section class="container">
        <section class="row">
            <h3>Selecciona el paquete para la cena</h3>
            <div class="col-md-4">
                <h4>Basico</h4>
                <img src="" alt="Paquete 1">
                <h4>$100.00</h4>
            </div>
            <div class="col-md-4">
                <h4>Medio</h4>
                <img src="" alt="Paquete 2">
                <h4>$500.00</h4>
            </div>
            <div class="col-md-4">
                <h4>Premium</h4>
                <img src="" alt="Paquete 3">
                <h4>$1000.00</h4>
            </div>
        </section>
    </section>
</body>
</html>