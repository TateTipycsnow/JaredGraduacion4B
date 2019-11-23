<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>reservaciones</title>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/main.css">
    <style>
    .salon{
        margin: 41px;
    }
    .silla-reservada{
        color: red;
    }
    .contenedor-mesa{
        margin: 5px;
        width: 150px;
        height: 150px;
        position: relative;
    }
    .mesa{
        font-size: 6em;
    }
    .silla{
        font-size: 1.5em;
        position: absolute;
        cursor: pointer;
    }
    .silla-pos1{
        top: -25px;
        left: 18px;
    }
    .silla-pos2{
        top: -25px;
        left: 56px;
    }
    .silla-pos3{
        top: 15px;
        left: 94px;
    }
    .silla-pos4{
        top: 56px;
        left: 94px;
    }
    .silla-pos5{
        top: 96px;
        left: 56px;
    }
    .silla-pos6{
        top: 96px;
        left: 18px;
    }
    .silla-pos7{
        top: 15px;
        left: -20px;
    }
    .silla-pos8{
        top: 56px;
        left: -20px;
    }
    </style>
</head>
<body>
    <section class="salon">
        <?php
        include("procesarPlantillas.php");
        echo $mesas;
        ?>
    </section>
    
    <script>
        var idSilla = 0;
        $(function() {
            $('[data-toggle="tooltip"]').tooltip();
            $("#ventanaConfirmacion").modal({show: false});

            $(".silla").on("click", function(){
                var reservada = $(this).hasClass("silla-reservada");
                if(!reservada){
                    idSilla = $(this).data("id");
                    $("#ventanaConfirmacion").modal("show");
                }
                else{

                }
            });

            $("#btnCancelar").on("click", function(){
                $("#ventanaConfirmacion").modal("hide");
            });
            
            $("#btnAceptar").on("click", function(){
                $.ajax({
                    url: "confirmarReservacion.php",
                    method: "POST",
                    data:{
                        silla: idSilla;
                    }
                })
                .done(function(){

                });
            });

        });
    </script>
</body>
</html>