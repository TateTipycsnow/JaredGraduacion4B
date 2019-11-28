<?php
session_start();
if(!isset($_SESSION["usuario"])){
    header("Location: index.php");
    exit;
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



        

     <div class="modal fade" role="dialog" id="confirmacion2">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4>LOGOUT</h4>
                </div>
                <div class="modal-body">
                    <p>¿Desea CERRAR SESIÓN?</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger pull-right" id="btnNo2" data-dismiss="modal">
                        <i class="glyphicon glyphicon-remove"> No</i>
                    </button>
                    <button class="btn btn-success pull-right" id="btnSi2">
                        <i class="glyphicon glyphicon-ok"> Si</i>
                    </button>
                </div>
            </div>
        </div>
    </div>


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.js"></script>

    <script>
    $(function() {
        $("#confirmacion2").modal({
                show: false,
                backdrop: "static"
        });

        $("#login a").text("SALIR " );
        $("#registro a").text(" " );

        $("#login").on("click", function() {
        $("#confirmacion2").modal("show");

        });
        $("#btnSi2").on("click",function(){
            location.href='logout.php';
        });

    });
    </script>
</body>

</html>




