<?php


function Nav_maestro($usuario, $rol){


    echo '
    
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicio</title>
    <link rel="stylesheet" href="../../librerias/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../../librerias/icons/css/all.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    


<!--navbar-->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"> <img class="logo" src="../../assets/img/logo-tutorias-final.png" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#"><h3>INICIO <i class="fas fa-home"></i></h3></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><h3>'.$usuario.'<i class="fas fa-user"></i></h3></a>
      </li>
    </ul>
  </div>
  <div class="ml-5 navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#"><h3>'.$rol.' </h3></span></a>
      </li>
    </div>
</nav>
<!--fin navbar-->
    
    ';
}

?>