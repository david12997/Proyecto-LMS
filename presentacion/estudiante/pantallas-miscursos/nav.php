<?php


function Imprimir_cabecera(){

    echo '
    
    <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mis cursos</title>

<link rel="stylesheet" href="../../librerias/bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="../../librerias/icons/css/all.css">
<link rel="stylesheet" href="css/miscursos.css">
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php"><img id="logo" src="../../assets/img/logo-tutorias-final.png" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ">
      <li class="ml-5  ">
        <a href="index.php" id="ingresar" class=" letra-blanca-gris"><h3>INICIO <i class="fas fa-home"></i> </h3></a>
      </li>
      <li class="ml-5">
        <div id="registrarse" class="letrablanca"><h3>'. strtoupper($_SESSION['data']['nombre']).'  <i class="fas fa-user"></i></h3></div>
      </li>
    </ul>
  </div>
</nav>





<div class="container contenedor-options p-2"></div>


<div class="container p-2">

<br>
<hr>
<br>

<div class="btn btn-success btn-block"><h2>Mis cursos</h2>  </div>

<br>
<div class="container-cursos d-flex flex-wrap">
    
    ';

}


?>