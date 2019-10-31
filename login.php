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
        $boton = $("button");
        $boton.on("click", function(evento){
            evento.preventDefault();
            var usuario = $('[name] = "usuario"');
            var contrasena = $('[name] = "password"');
        })
    </script>
    
    <style>
        .fa-spinner{
            display: none;
        }
    </style>

</head>
<body>
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
                    <button class="btn btn-primary">Enviar datos</button>

                    <i class="fas fa-spinner fa-pulse"></i>
                </form>
            </div>
        </section>
    </section>
</body>
</html>