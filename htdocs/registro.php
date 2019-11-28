<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/all.min.css">
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
        <div class="row">
            <section class="col-md-12 col-sm-12" id="Info">
                <div class="jumbotron">
                    <h1 class="display-4">Registro</h1>
                    <form action="registroProceso.php" method="POST" class="form">
                        <div class="form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="fas fa-user-circle"></i>
                                </span>
                                <input type="text" class="form-control" placeholder="usuario" aria-label="usuario" aria-describedby="basic-addon1" name="usuario">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="fas fa-lock"></i>
                                </span>
                                <input type="password" class="form-control" placeholder="contrasena" aria-label="contrasena" aria-describedby="basic-addon1" name="contrasena">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="fas fa-at"></i>
                                </span>
                                <input type="email" class="form-control" placeholder="email" aria-label="email" aria-describedby="basic-addon1" name="email">
                            </div>
                        </div>

                        <button class="btn btn-primary">Registrarse</button>
                        <a type="button" href="login.php" class="btn btn-primary">Login</a>
                    </form>
                    <hr class="my-2">
                </div>
            </section>
        </div>
    </section>
</body>
</html>