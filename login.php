<?php

    session_start();
    session_destroy();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/all.min.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script>
        $(function(){
            $boton = $("button");
            $spin = $(".fa-spinner");
            $boton.on("click", function(evento){
                evento.preventDefault();

                $boton.prop("disabled", true);
                $spin.fadeIn();
                
                var usuario = $('[name="usuario"]').val();
                var contrasena = $('[name="password"]').val();
                
                $.ajax({
                    url: "resultado.php",
                    method: "POST",
                    dataType: "json",
                    data:{
                        usuario: usuario,
                        password: contrasena
                    }
                })
                .done(function(informacion) {
                    var json = informacion;

                    console.log(json);
                    $boton.prop("disabled", false);
                    $spin.fadeOut();
                    if(json.codigo == "0"){
                        $("#masaje").html(json.mensaje);
                    }
                    else if(json.codigo == "1"){
                        window.location.href = "vip.php";
                    }
                });
            });  
        });
    </script>
    
    <style>
        .fa-spinner{
            display: none;
        }
    </style>

</head>
<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark bg-light">
        <a class="navbar-brand" href="index.html">
            <img src="img/cintillo-web.png" height="30" class="d-inline-block align-top" alt="">
        </a>
        <div class="collapse navbar-collapse" id="NavDropdown">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Inicio<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <section class="container">
        <section class="row">
            <div class="col-md-6">
                <form action="resultado.php" method="POST">
                    <div class="form-group">
                        <label for="">Usuario</label>
                        <input type="text" class="form-control" name="usuario">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <button class="btn btn-dark">Iniciar sesion</button>
                    <a href="registro.php" class="btn btn-dark" type="button">Registrarse</a>

                    <i class="fas fa-spinner fa-pulse"></i>
                    <div id="masaje">

                    </div>
                </form>
            </div>
        </section>
    </section>
</body>
</html>