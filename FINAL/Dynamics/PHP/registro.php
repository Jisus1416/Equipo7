<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../Statics/media/Escudo.png" type="image/png">
    <link rel="stylesheet" href="../../Statics/styles/registro.css">
    <title>Registro</title>
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
 	<h1 class=comentario1>Registrate para acceder a la comunidad de la <strong>ENP6</strong></h1>
    <img class=img src="../../Statics/media/Escudo.png">
    <h1 class=comentario2><strong>Te damos la bienvenida a tu sitio web</strong><h1>
    <h4 class=comentario3>Conéctate con tu comunidad</h4>
    <form class= forms action="./registro.php" method="post" target="_blank">
        <div class=datos> 
                <label for="nombre">
                    <input type="text" name="nombre" placeholder="Nombre" required>
                </label>
                <br><br>
                <label for="numero de cuenta">
                    <input type="number" id="numdecuen" name="numdecuen" placeholder="Número de cuenta" required>
                </label> 
                 <br><br>
                <label for="telefono">
                    <input type="number" id="telefono" name="telefono" placeholder="Teléfono" required>
                </label>
                <br><br>
                <label for="grupo">
                    <input type="number" id="grupo" name="grupo" placeholder="Grupo" required>
                </label>
                <br><br>
                <label for="usuario">
                    <input type="text" name="usuario" placeholder="Usuario" required>
                </label>
                <br><br>
                <label for="contraseña">
                    <input type="password" id="contraseña" name="contraseña" placeholder="Contraseña" required>
                </label>
                 <br><br>
                 <center><button class=boton type="submit">Acceder</button></center>
            </div> 
        </form>
        <form class= forms action="./registro.php" method="post" target="_blank">
            <div class=opcion>
	            <h5><center>o</center></h5>
                <a href="http://localhost/Curso_Web/Proyecto_Curso_Web/Dynamics/PHP/inicio_sesion.php">Inicia Sesión</a>
            </div>
        </form>
<?php
    $nombre=(isset($_POST['nombre']) && $_POST["nombre"] != "")? $_POST['nombre'] : "Falta Valor";
    $numcuen=(isset($_POST['numdecuen']) && $_POST["numdecuen"] != "")? $_POST['numdecuen'] : "Falta Valor";
    $tel=(isset($_POST['telefono']) && $_POST["telefono"] != "")? $_POST['telefono'] : "Falta Valor";
    $grupo=(isset($_POST['grupo']) && $_POST["grupo"] != "")? $_POST['grupo'] : "Falta Valor";
    $usuario=(isset($_POST['usuario']) && $_POST["usuario"] != "")? $_POST['usuario'] : "Falta Valor";
    $contra=(isset($_POST['contraseña']) && $_POST["contraseña"] != "")? $_POST['contraseña'] : "Falta Valor";
    $iniciaSesion=(isset($_POST['iniciaSesion']) && $_POST["iniciaSesion"] != "")? $_POST['iniciaSesion'] : "Falta Valor";
    echo $iniciaSesion;


?>
</body>
</html>