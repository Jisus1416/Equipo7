<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../Statics/media/Escudo.png" type="image/png">
	<link rel="stylesheet" href="../../Statics/styles/inicio_sesion.css">
    <link rel="stylesheet" href="../../../../../bootstrap/libs/bootstrap-5.3.0-dist/css/bootstrap.css">
    <script src="../../../../../bootstrap/libs/bootstrap-5.3.0-dist/js/bootstrap.bundle.js"></script>
    <script src="../JS/inicio_sesion.js"></script>
    <title>Inicio de sesión</title>
</head>
<body> 
    <header class=barra>
        <nav class="navbar navbar-expand-lg" id="nav">
            <div class="container-fluid">
                <img src="../../Statics/media/Escudo.png" alt="ENP6" width="30" height="24" class="d-inline-block align-text-top text-light" id="escudo">
                <a class="navbar-brand text-light" href="https://www.prepa6.unam.mx/ENP6/_P6/">ENP6</a><br>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="search">
                        <button class="btn btn-outline-success text-light" id="btnBusc" type="submit">Search</button>
                </form>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" class="ayuda" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                ayuda
                            </a>
                            <ul class="dropdown-menu" id="nav">
                                <li><a class="dropdown-item text-dark" href="#">Terminos y condiciones</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-dark" href="#">Creditos</a></li>
                            </ul>       
                        </li>
                        <li class="nav-item"> 
                        <a class="nav-link active text-light" aria-current="page" href="http://localhost/Curso_Web/Proyecto_Curso_Web/FINAL/Dynamics/PHP/inicio_sesion.php">inicia sesión</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link text-light" href="http://localhost/Curso_Web/Proyecto_Curso_Web/FINAL/Dynamics/PHP/registro.php">registrate</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header> 

 	<h1 class=comentario1><strong>BIENVENIDO a la comunidad de Prepa 6</strong>. Pasa a divertirte</h1>
    <img class=img src="../../Statics/media/Escudo.png">
    <h1 class="comentario2"><strong>¡Hola de nuevo!</strong><h1>
    <h4 class="comentario3">Conéctacte con tu comunidad</h4>
   	<form  class= forms action="./inicio_sesion.php" method="post" target="_self">
        <div class=datos>
            <label><input class="fomulario1" id="usuario" name="usuario" type="text" placeholder="Usuario" required></label><br><br>
            <label><input class="fomulario1" id="contraseña" name="contraseña" type="password" placeholder="Contraseña" required></label><br><br>
	        <center><button class=boton id="acceder" name="acceder" type="submit" value=1>Acceder</button></center>   
        </div>
    </form>
    <form align="center" action="./inicio_sesion.php" method="post" target="_self">
        <div class=opcion>
	        <h7><center>¿No tienes una cuenta?</center></h7>
            <a id="aRegistro" href="http://localhost/Curso_Web/Proyecto_Curso_Web/FINAL/Dynamics/PHP/registro.php">Registrate</a>
        </div>
   </form>

   <?php
    $usuario=(isset($_POST['usuario']) && $_POST["usuario"] != "")? $_POST['usuario'] : false;
    $contra=(isset($_POST['contraseña']) && $_POST["contraseña"] != "")? $_POST['contraseña'] : false;
    $acceder=(isset($_POST['acceder']) && $_POST["acceder"] != "")? $_POST['acceder'] : false;
   ?>
</body>
</html>