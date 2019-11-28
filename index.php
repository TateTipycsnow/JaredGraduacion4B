<?php

if(isset($_SESSION["usuario"])){

    header("Location:index2.php");
    exit;
echo "hola";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Index</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        body{
            background-color:#252529e6;
        }
        .img-container {
            background-size: unset;
            background-position: 50% 50%;
            height: 400px;
            width: 900px;
        }
        
        .carousel {
            height: 400px;
            width: 900px;

            top:300px;
            overflow: hidden;
        }
        
        .alert {
            display: none;
            text-align: right;
        }
        header
		{
            padding: 60px;
            color:#005eaf;
            height: 250px;
            width: 1350px;            
			background: url("images/bg-header.png");
            font-size: 30px;
            text-align:center;
            position:absolute;
        }

        header img{
            width: 100px;
        }
        section.medio{
            position: absolute;
            color: white;
            top: 365px;
            right: 55px;
        }
        section.medioBajo{
			background: url("images/bg.jpg");            
            position: absolute;
            color: black;
            top: 840px;
            width: 1350px;
            height: 270px;
        }
        .artistas{
            font-size:20px;
            color:#252529e6;
            margin:20px;
            width:250px;
        }
        .artistas li:hover{
        font-size: 25px;
        }
        section.medioBajo img{
            top:40px;
            width:200px;
            height: 210px;
            position:absolute;
            right:80px; 
        }
        #uno{
            right:540px;
        }
        #dos{
            right:313px;
        }

        section.footer{
			background: url(images/bg-header.png);
            position: absolute;
            color: white;
            top: 1110px;
            width: 1350px;
            height: 270px;
            text-align:center;
        }
        section.footer img{
            width:50px;
            height: 50px;
        }

    </style>

</head>

<body>
    <?php
    include "header.php";
    ?>

    <header>
    <img src="images/diploma.png" alt="imagen">
    <b class="titulo"><span style="color: black";>FELIZ GRADUACIÓN</span></b>
    <img src="images/diploma.png" alt="imagen">
        
	<p>Emocionad@?. Aparta tu lugar.  <span style="font-style: oblique";>!AHORA MISMO!</span></p>

    </header>
    <section class="medio">

        <h1><span style="color:wheat;">  Unete a la fiesta!!!!</span></h1>
              <p><span style="font-size:20px">Un gran saludo a todos los estudiantes,</span>  </p>
              <p><span style="font-size:20px">en este sitio tendran la oportinidad de</span>  </p>
              <p><span style="font-size:20px">poder apartar su lugar en la gran </span>  </p>
              <p><span style="font-size:20px">fiesta programada para festejar su</span>  </p>
              <p><span style="font-size:20px">graduacion.</span>  </p>
              <p><span style="font-size:20px">Esperamos que todo sea de su agrado</span>  </p>
              <p><span style="font-size:20px">y que pueda asistir. ATTE: UNIPOLI.</span>  </p>
    </section>

    <section class="medioBajo">
        <h1>¿Quien estara presente?</h1>
        <ul class="artistas">
            <li>Vicente Fernandes</li>
            <li>Shakira Mebarak</li>
            <li>Maluma Baby</li>
            <li>Ivan Peyro</li>
            <li>Rick Grimes</li>
        </ul>
        <img id="uno" src="images/shak.jpg" alt="shakira">
        <img id="dos" src="images/maluma.jpg" alt="maluma">
        <img id="tres" src="images/rick.jpg" alt="rick">
    </section>

    <section class="footer">
        <h1>Contactanos</h1>
        <img src="images/face.png" alt="">
        <img src="images/twit.png" alt="">
        <img src="images/google.png" alt="">
        <p>Pagina, diseño e informacion producida por UNIPOLI</p>
        <a href="http://www.unipolidgo.edu.mx" target="blank">Universidad Politecnica De Durango</a>
    </section>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- TEXTO CAROUSEL -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="img-container" style="background-image:url(img/11.jpg)" ></div>
                <div class="carousel-caption">
                    Tu graduación como núnca la habias soñado.
                </div>
            </div>
            <div class="item">
                <div class="img-container" style="background-image:url(img/22.jpg)"></div>
                <div class="carousel-caption">
                    Una graduación más emotiva y más especial.
                </div>
            </div>
            <div class="item">
                <div class="img-container" style="background-image:url(img/3.jpg)"></div>
                <div class="carousel-caption">
                    Para que disfrutes juntos a tus compañeros y familiares.
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


<!----------------------------------------LOGIN-------------------------------------->

    <div class="modal fade" role="dialog" id="ventana">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4>Login</h4>
                </div>
                <div class="modal-body">
                    <article class="conainer-fluid">
                        <section class="row">
                            <section class="col-md-6">
                                <form action="">
                                    <p id="resultado"></p>
                                </form>
                            </section>
                            <section class="col-md-6">
                            </section>
                        </section>
                    </article>
                    <div class="form-group">
                        <label for="usuario">Usuario</label>
                        <input type="text" name="usuario" id="usuarioLog" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="contraseña">Contraseña</label>
                        <input type="password" name="contraseña" id="contrasenaLog" class="form-control" />
                    </div>
                </div>
                <div class="modal-footer">
                    <p id="advertencia"></p>
                    <button class="btn btn-danger pull-right" id="btncancelar">
                        <i class="glyphicon glyphicon-remove"> Cancelar</i>
                    </button>
                    <button class="btn btn-success pull-right" id="btnaceptar">
                        <i class="glyphicon glyphicon-ok"> Aceptar</i>
                    </button>
                    <p id="mensaje" class="text-danger"></p>
                </div>
            </div>
        </div>
    </div>
<!----------------------------------------REGISTRO-------------------------------------->
    <div class="modal fade" role="dialog" id="ventana2">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    <h4>Registro</h4>
                </div>
                <div class="modal-body">
                    <section class="row">
                        <section class="col-md-12">
                            <form action="insertar.php" method="POST" enctype="multipart/form-data">
                            <section class="col-md-6">
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="glyphicon glyphicon-pencil"></i>
                                        </span>
                                        <input type="text" name="nombre" id="nombre" class="form-control" />
                                    </div>
                                </div>
                            </section>
                            <section class="col-md-6">
                                <div class="form-group">
                                    <label for="nombre">Apellido</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                                <i class="glyphicon glyphicon-pencil"></i>
                                            </span>
                                        <input type="text" name="apellido" id="apellido" class="form-control" />
                                    </div>
                                </div>
                            </section>
                            <section class="col-md-12">                            
                                <div class="form-group">
                                    <label for="usuario">Nombre de Usuario</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="glyphicon glyphicon-user"></i>
                                        </span>
                                        <input type="text" name="usuario" id="usuario" class="form-control" />
                                    </div>
                                </div>
                                </section>

                            <section class="col-md-12">
                                <div class="form-group">
                                    <label for="correo">Correo Electrónico</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                                <i class="glyphicon glyphicon-envelope"></i>
                                            </span>
                                        <input type="email" name="email" id="correo" class="form-control" />
                                    </div>
                                </div>
                            </section>

                            <section class="col-md-12">
                                <div class="form-group">
                                    <label for="contraseña">Contraseña</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                                    <i class="glyphicon glyphicon-asterisk"></i>
                                                </span>
                                        <input type="password" name="contrasena" id="contraseña" class="form-control" />
                                    </div>
                                </div>
                                </section>

                            <section class="col-md-12">
                                <div class="form-group">
                                    <label for="rol">Rol</label>
                                        <select name="rol">
                                        <option value="admin">Administrador</option>
                                        <option value="user">Usuario Normal</option>
                                        </select>
                                    </div> 
                                    </section>

                            <section class="col-md-12">
                                <div class="form-group">
                                    <label for="avatar">Avatar</label>
                                    <input type="file" name="avatar" class="form-control">
                                </div>
                                </section>
                                <div class="modal-footer">
                                    <button class="btn btn-success pull-right" id="btnaceptar2">
                                            <i class="glyphicon glyphicon-ok"> Aceptar</i>
                                        </button>
                                </div>
                                 </form>
                             </section>
                             
                                <div class="modal-footer">
                                 <p id="advertencia"></p>
                                 <button class="btn btn-danger pull-right" id="btncancelar2">
                                         <i class="glyphicon glyphicon-remove"> Cancelar</i>
                                 </button>
                            </div>
                        <div class="alert alert-success" id="mensaje2">
                            ¡Regitro Exitoso!
                        </div>
                
                </div>
            </div>
        </div>
    </div>

        

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script>
        $(function() {
            $("#inicio").addClass("active");

            $("#ventana").modal({
                show: false,
                backdrop: "static"
            });
            $("#login").on("click", function() {
                $("#ventana").modal("show");
                
            });
            $("#btncancelar").on("click", function() {
                $("#ventana").modal("hide");
            });
            $("#btnaceptar").on("click", function(evento) {
                
                    evento.preventDefault();
                var v_usuarioLog= $("#usuarioLog").val();
                var v_contrasenaLog = $("#contrasenaLog").val();
                
                $.ajax({
                    url:"login-procesar.php",
                    type:"POST",
                    data:{
                        usuario: v_usuarioLog,
                        contrasena: v_contrasenaLog
                    }
                    }).done(function(resultado){
                    if(resultado == 1){
                    $("#ventana").modal("hide");
                    location.href='Inde.php';

                    }
                    else{
                        $("#mensaje").text("Usuario o contraseña incorrectos.");
                    }
                });
                
            });
        });
    </script>
    <script>
        $(function() {
            $("#ventana2").modal({
                show: false,
                backdrop: "static"
            });
            $("#registro").on("click", function() {
                $("#ventana2").modal("show");
            });
            $("#btncancelar2").on("click", function() {
                $("#ventana2").modal("hide");
            });
            $("#btnaceptar2").on("click", function() {
               
                $("#ventana2").find(".alert").fadeIn().delay(2000).fadeOut();
            });
        });
    </script>
</body>

</html>




