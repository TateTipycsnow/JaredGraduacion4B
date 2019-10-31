<?php

    session_start();

    $sesion = $_SESSION["usuario"];
    
    if(isset($sesion)){
        echo "Esta seccion es para puros compas!!";
    }
    else{
        header("Location: login.php");
    }
?>