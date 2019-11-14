<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>reservaciones</title>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
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
        echo $mesa;
        ?>
    </section>
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });
    </script>
</body>
</html>