<?php


function Imprimir_cabecera(){

    echo '


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
          <form action="../../logica-negocio/estudiante/buscar-curso.php" method="GET" class=" ml-4 form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Buscar curso" aria-label="Search" name="buscar_curso">
          <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Buscar curso</button>
        </form>
        </div>
      </nav>



      <div class="container contenedor-options p-2"></div>';

  }



?>