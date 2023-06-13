<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../Statics/media/Escudo.png" type="image/png">
	<link rel="stylesheet" href="../../Statics/styles/inicio_sesion.css">
    <title>Inicio de sesión</title>
</head>
<body> 
    <header class=barra>
        <img class=escudo src="../../Statics/media/Escudo.png">
        <p class=prepa6>ENP6</p>
        <p class=ayuda>Ayuda</p>
        <div class=linea>||</div>
        <a class=registrate href="http://localhost/Curso_Web/Proyecto_Curso_Web/Dynamics/PHP/registro.php">Regístrate</a>
        <a class=iniciaSesion href="http://localhost/Curso_Web/Proyecto_Curso_Web/Dynamics/PHP/inicio_sesion.php">Inicia Sesión</a>

    </header>
 	<h1 class=comentario1><strong>BIENVENIDO a la comunidad de Prepa 6</strong>. Pasa a divertirte</h1>
    <img class=img src="../../Statics/media/Escudo.png">
    <h1 class=comentario2><strong>¡Hola de nuevo!</strong><h1>
    <h4 class=comentario3>Conétacte con tu comunidad</h4>
   	<form  class= forms action="./inicio_sesion.php" method="post" target="_blank">
        <div class=datos>
            <label><input class=fomulario1 id="usuario" name="usuario" type="text" placeholder="Usuario" required></label><br><br>
            <label><input class=fomulario1 id="contraseña" name="contraseña" type="password" placeholder="Contraseña" required></label><br><br>
	        <center><button class=boton id="acceder" name="acceder" type="submit" value=1>Acceder</button></center>   
        </div>
    </form>
    <form align="center" action="./inicio_sesion.php" method="post" target="_blank">
        <div class=opcion>
	        <h5><center>¿No tienes una cuenta?</center></h5>
            <a href="http://localhost/Curso_Web/Proyecto_Curso_Web/Dynamics/PHP/registro.php">Registrate</a>
        </div>
   </form>

   <?php
    $usuario=(isset($_POST['usuario']) && $_POST["usuario"] != "")? $_POST['usuario'] : "Falta Valor";
    $contra=(isset($_POST['contraseña']) && $_POST["contraseña"] != "")? $_POST['contraseña'] : "Falta Valor";
    $acceder=(isset($_POST['acceder']) && $_POST["acceder"] != "")? $_POST['acceder'] : "Falta Valor";
    $crearcuen=(isset($_POST['crearcuen']) && $_POST["crearcuen"] != "")? $_POST['crearcuen'] : "Falta Valor";

   ?>
</body>
</html>