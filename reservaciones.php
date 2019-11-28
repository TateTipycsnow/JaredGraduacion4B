<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>reservaciones</title>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/all.min.css">
    <style>
        footer{
            background-color: burlywood ;
        }
        #MesaComida{
            text-align: center;
        }
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
        display: inline-block;
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
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark bg-light">
        <a class="navbar-brand" href="vip.php">
            <img src="img/cintillo-web.png" height="30" class="d-inline-block align-top" alt="">
        </a>
        <div class="collapse navbar-collapse" id="NavDropdown">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="vip.php">Inicio<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a href="vip.php" class="nav-link">Comprar Paquete</a>
                </li>
            </ul>
            <a href="login.php" placeolder="Search">
                <i class="fas fa-sign-out-alt"></i>
                Salir
            </a>
        </div>
    </nav>

    <section class="salon">
        <?php
        include("procesarPlantillas.php");
        echo $mesas;
        ?>
    </section>
    
    <div class="modal" id="ventanaConfirmacion" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirmar reservacion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>¿Confirmar reservacion?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="btnCancelar">Cancelar</button>
                    <button type="button" class="btn btn-primary" id="btnAceptar">Aceptar</button>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <section class="container">
            <section class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4" id="MesaComida">
                    <p>Bufette</p>
                </div>
                <div class="col-md-4"></div>
            </section>
        </section>
    </footer>
    
    <script>
        var idSilla = 0;

        $(function() {
            $('[data-toogle="tooltip"]').tooltip();
            $("#ventanaConfirmacion").modal({show:false});

            $(".silla").on("click", function(){
                var reservada = $(this).hasClass("silla-reservada");

                if(!reservada){
                    idSilla = $(this).attr("data_id");
                    $("#ventanaConfirmacion").modal("show");
                }else{
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
                        silla: idSilla
                    }
                })
                .done(function(){
                    $("#ventanaConfirmacion").modal("hide");
                    window.location.href = "reservaciones.php";
                });
            });
        });
    </script>
</body>
</html>