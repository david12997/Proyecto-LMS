<!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiante inicio</title>
    <!--link librerias css-->
    <link rel="stylesheet" href="../../librerias/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../../librerias/icons/css/all.css">
    <link rel="stylesheet" href="css/index.css">
    </head>
    <body>


    <!--barra de navegacion-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php"><img id="logo" src="../../assets/img/logo-tutorias-final.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ">
            <li class="ml-5  ">
              <a href="index.php" id="ingresar" class=" letrablanca"><h3>INICIO <i class="fas fa-home"></i> </h3></a>
            </li>
            <li class="ml-5">
              <div id="registrarse" class="letra-blanca-gris"><h3>'. strtoupper($_SESSION['data']['nombre']).'  <i class="fas fa-user"></i></h3></div>
            </li>
          </ul>

        </div>
      </nav>

    
      <div class="container">
          <div class="alert alert-success mt-5">
              <div class="btn btn-success btn-block m-2 new-user"><h4> Generar nuevo usuario </h4></div>
              <div class="btn btn-success btn-block m-2 download-data"><h4> Descargar datos </h4></div>
          </div>
      </div>

      <div class="caso-uso m-5 container ">



      
      </div>
      


        <script src="../../librerias/jquery/jquery-3.5.1.js"></script>
        <script src="../../librerias/bootstrap/js/bootstrap.min.js"></script>
        <script src="../../librerias/icons/js/all.js"></script>
        <script src="js/index.js"></script>
    </body>

</html>