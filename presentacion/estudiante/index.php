<?php

include_once '../../librerias/propias/mostrar-errores.php';
session_start();


if(isset($_SESSION['data'])){//autenticacion

  if($_SESSION['data']['rol']==='estudiante'){//autenticacion



    require_once '../../logica-negocio/autorizacion-crud.php';
    if($_SESSION['data']['rol']==='estudiante' && $_SESSION['data']['key']===40030267){



      $key=$_SESSION['data']['key'];//esta es la clave para poder acceder al crud
      $mis_consultas=array('select*from curso where estado="ok";');//aqui estan las consultas sql necesarias para esta vista



      $crud_aut=new Autorizacion_crud($key,$mis_consultas,'read estudiante');//conectandose al crud 
      $crud_aut->Autorizar(count($mis_consultas));

      //var_dump($_SESSION['data']);
    }


    //pintar errores

    if(isset($_GET['error'])){
      echo '<div class="alert alert-danger d-flex justify-content-center align-items-center">'.$_GET['error'].'</div>';

    }


    function Imprimir_cursos($cursos, $numero){


      echo  '<!--contenedor cursos-->

      <br>
      <hr>
      <br>
      <div class="container p-2">
      
          <div class="btn btn-block btn-success m-2"><h3>NUESTROS CURSOS</h3></div>
          <br>
          <div class="d-flex flex-wrap cont-cursos">';

      for ($i=0; $i < $numero; $i++) { 
        
        echo  '

       
  
            <div class="card m-4 mt-5 '.$cursos[$i]["estado"].'" style="width: 18rem;">
      <img src="../../'.$cursos[$i]["ruta_icono"].'" class="card-img-top" alt="...">
      <div class="card-body">
      <h5 class="card-title">'.$cursos[$i]["nombre"].'</h5>
       
      </div>
      <ul class="list-group list-group-flush">
      <li class="list-group-item">Descripcion: '.$cursos[$i]["descripcion_curso"].'</li>
      <li class="list-group-item">Duracion: '.$cursos[$i]["duracion_curso"].' horas</li>
      <li class="list-group-item">Precio: '.$cursos[$i]["precio_curso"].' pesos cop</li>
      </ul>
      <div class="card-body">
      <a href="#" class="card-link btn btn-block btn-primary"><h5>Ver demo</h5></a>
      <br>
      <a href="../../logica-negocio/estudiante/inscribir-curso.php?curso='.$cursos[$i]['id_curso'].'&estudiante='.$_SESSION['data']['id'].'" class="card-link btn btn-block btn-success"><h5>Inscribirme</h5></a>
      </div>
      </div>
  
  
          
       
        
        ';

      }


//aqui se cierra los cursos y se abren las opciones de clases
      echo '
        
      </div>
      </div>


      <br>
      <br>
      <br>  
      <br>
      <hr>
      <br>
      <br>



      <div class="container p-2 d-flex flex-wrap">

      <div class="btn btn-block btn-success m-2 mb-5"><h3>CLASES, TUTORIAS Y MÁS</h3></div>
          



      <div class="card m-4 mr-5 mt-3" style="width: 18rem;">
      <img src="../../assets/img/clases.jpg" class="card-img-top" alt="...">
      <div class="card-body">
      <ul class="list-group list-group-flush">
      <li class="list-group-item"><h5 class="card-title">Clases privadas presenciales</h5></li>
      <li class="list-group-item">         <p class="card-text">Clases presenciales PRIVADAS en cualquier area del conocimiento como: Ingles, Matematicas, Fisica, Quimica, etc...</p>
      </li>
      <li class="list-group-item"><a href="#" class="btn btn-block btn-primary">Programar Clase</a></li>
      </ul>
        
        
      </div>
    </div>





    <div class="card m-4 mt-3" style="width: 18rem;">
    <img src="../../assets/img/tutorias.jpg" class="card-img-top" alt="...">
    <div class="card-body">
    <ul class="list-group list-group-flush">
    <li class="list-group-item"><h5 class="card-title">Clases privadas virtuales</h5></li>
    <li class="list-group-item"><p class="card-text">Clases virtuales PRIVADAS en cualquier area del conocimiento como: Ingles, Matematicas, Fisica, Quimica, etc...</p>
    </li>
    <li class="list-group-item"><a href="#" class="btn btn-block btn-primary">Programar Clase</a></li>
    </ul>
      
      
    </div>
  </div>







  <div class="card m-4 mt-3" style="width: 18rem;">
  <img src="../../assets/img/respuestas.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <ul class="list-group list-group-flush">
  <li class="list-group-item"><h5 class="card-title">Resuelve talleres, problemas y ejercicos</h5></li>
  <li class="list-group-item"><p class="card-text">Tomale una foto o escanea tu taller o ejercicio, nosotros te ayudamos a resolverlo y te enviamos las respuestas en tiempo record</p>
  </li>
  <li class="list-group-item"><a href="#" class="btn btn-block btn-primary">Resolver taller o ejercico</a></li>
  </ul>
    
    
  </div>
</div>


    
      </div>
      
      ';




    }

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
            <form class=" ml-4 form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar curso" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar curso</button>
          </form>
          </div>
        </nav>



        <div class="container contenedor-options p-2"></div>';

    }


    function Imprimir_cierre(){



      echo '
      <br>
      <br>
      <!--footer-->
      <footer class="container-fluid bg-dark d-block align-self-center p-5">

      <div class="contenedor-footer ">

      <p> SERVICIO NACIONAL DE APRENDIZAJE S.E.N.A.</p>

      <br>

     <p> PROYECTO LEARNING MANAGEMENT SISTEM <p/> <br>

      <p>TECNOLOGO ANALISIS Y DESARROLLO DE SISTEMAS DE INFORMACION</p><br> 
      
                           <p> FICHA: 1965975 </p><br>
                          
      
      
                   <p>Desarrollado por Jose David Castañeda Pira</p><br>

                   </div>

      </footer>

      
    <script src="../../librerias/jquery/jquery-3.5.1.js"></script>
    <script src="../../librerias/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../librerias/icons/js/all.js"></script>
    <script src="js/index.js"></script>
    </body>
    </html>
      
      
      ';

    }


    

    //impresion de la pagina de inicio para usuario tipo estudiante

    Imprimir_cabecera();
    Imprimir_cursos($_SESSION['data']['read'],count($_SESSION['data']['read']));
    Imprimir_cierre();
  

  

  }else{
    
    session_destroy();
    $error="Error de autorizacion por favor inicie sesion nuevamente";
    header('Location:../../index.php?error='.$error);

  }
  

}else{

  header('Location:../../index.php');
}


?>
