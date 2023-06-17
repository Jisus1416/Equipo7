<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <link rel="icon" href="Escudo.png" type="image/png">
    <link rel="stylesheet" href="mi_cuenta.css">
     <link rel="stylesheet" href="../bootstrap\css\bootstrap.min.css ">
    <title>Mi cuenta</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Mi perfil</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Inicia sesión</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Registrate</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ayuda
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Terminos y condiciones</a></li>
            <li><a class="dropdown-item" href="#">Creditos</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Configuración</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Busca algo" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>
    <aside>
      <div class="opciones">
        <a href=""> <span class="texto"><img src="perfi.png" class="img"> Perfil</a><br>
        <a href=""> <span class="texto"><img src="config.png" class="img"> Configuración</a><br>
        <a href=""> <span class="texto"><img src="seg.png" class="img"> Seguridad</a><br>
        <a href=""> <span class="cerrar"><img src="cerrar.png" class="img">Cerrar sesión </a>
      </div>
    </aside>
    <div class="foto">
      <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="foto" id="foto">
        <input type="submit" value="Subir foto">
      </form>
    </div>
      
    <script src="decora.js"></script>
  </body>
</html>