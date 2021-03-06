<?php





    //mostrando errores
    if(isset($_GET['error'])){

      echo '<div class="alert alert-danger d-flex justify-content-center align-items-center">'.$_GET['error'].'</div>';
    }
    

 

    //datos necesarios para conectarse con crud
    
    $misconsultas=array('select * from curso limit 3;');

    //instanciando autorizacion para conectarse a crud
    require_once 'logica-negocio/autorizacion-crud.php';
    $crud_aut= new Autorizacion_crud('',$misconsultas,'read public');
    $crud_aut->Autorizar(count($misconsultas));

    //ver datos que llegan
    //var_dump($_POST['public']['read']);
    


   //redirecciones
     session_start();

    if(isset($_SESSION['data']['rol']) && $_SESSION['data']['rol']==='estudiante'){

    header('Location:presentacion/estudiante/index.php');
   }

    
    function Imprimir_Cabecera(){

      echo '
      <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <!--link librerias css-->
    <link rel="stylesheet" href="librerias/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="librerias/icons/css/all.css">
    <link rel="stylesheet" href="index.css">
   
</head>
<body>



    <!--barra de navegacion-->
    <nav class="navbar navbar-expand-lg  bg-dark">
        <a class="navbar-brand" href="index.php"><img id="logo" src="assets/img/logo-tutorias-final.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ">
            <li class="ml-5  ">
              <div id="ingresar" class="letrablanca"><h3>Ingresar <i class="fas fa-sign-in-alt"></i> </h3></div>
            </li>
            <li class="ml-5">
              <div id="registrarse" class="letrablanca"><h3>Registrarse <i class="fas fa-user-plus"></i></h3></div>
            </li>
          </ul>
        </div>
      </nav>




      <!--contenedor formulario registro/ingreso estudiante-->
      <div class=" container m-5  container-forms d-flex justify-content-center"></div>




      <!--contenedor informacion principal-->
      <div class="container d-flex justify-content-around">

        <div class="texto-principal d-block">
            <div class="text d-flex m-4"><span class="check"><i class="fas fa-clipboard-check"></i></span> -  <h4> Aprende, construye y transforma tu vida</h4></div>
            <div class="text d-flex m-4"><span class="check"><i class="fas fa-clipboard-check"></i></span> -  <h4> Transformando la educacion, construyendo libres pensadores</h4></div>
            <div class="text d-flex m-4"><span class="check"><i class="fas fa-clipboard-check"></i></span> -  <h4> Clases virtuales, ayudas en linea</h4></div>
            <div class="text d-flex m-4"><span class="check"><i class="fas fa-clipboard-check"></i></span> -  <h4> Inicia con nuestros cursos completamente ¡GRATIS!</h4></div>
        </div>
        <div class="video-principal">

            <iframe width="560" height="315" src="https://www.youtube.com/embed/p7FAU0IhrrE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>




      <!--separador de zona-->
      <br>
      <br>
      <hr>
      <br>
      <br>



      <!--contenedor informacion nuestros cursos-->
      <div class="container-fluid ">

        <div class="contenedor-titulo-cursos d-flex justify-content-center">
            <div class="titulo-curso btn fondo-verde"> <h2>Nuestros cursos</h2></div>
        </div>
        <br>

        <div class="contenedor-iconos  d-flex">


        
      
      ';
    }



    function Imprimir_cursos($cursos){

      for ($i=0; $i <count($cursos) ; $i++) { 
        
        echo'
      
      <div class="card m-5 " style="width:18rem;" >
                
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item"><img src="'.$cursos[$i]['ruta_icono'].'" class="card-img-top" alt="..."></li>
                        <li class="list-group-item"><strong>'.$cursos[$i]['nombre'].'</strong></li>
                        <li class="list-group-item">Duracion: '.$cursos[$i]['duracion_curso'].' horas </li>
                        <li class="list-group-item">'.$cursos[$i]['descripcion_curso'].'</li>
                      </ul>
                </div>
              </div>
      ';
      }
      

      
    }




    function Imprimir_cierre(){


      echo '
      
      </div>
      </div>


      <br>
      <br>
      <hr>
      <br>
      <br>
      <div class="container p-2 d-flex flex-wrap">
      
      <div class="btn btn-block btn-success m-2 mb-5"><h3>CLASES, TUTORIAS Y MÁS</h3></div>
          



      <div class="card m-4 mr-5 mt-3" style="width: 18rem;">
      <img src="assets/img/clases.jpg" class="card-img-top" alt="...">
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
    <img src="assets/img/tutorias.jpg" class="card-img-top" alt="...">
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
  <img src="assets/img/respuestas.jpg" class="card-img-top" alt="...">
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

      echo'





      <!--Zona de separacion-->
      <br>
      <br>
      <hr>
      <br>
      <br>





      <!--contenedor ingreso administrador, maestro -->

      <div class="container-fluid ">

        <div class="d-flex flex-wrap">

            <div class="contenedor-forms-admin bg-dark m-5 p-5  block">

                <div class="btn btn-block fondo-verde m-4 formulario-maestro"><h4>Maestro</h4></div>
                <div class="btn btn-block fondo-verde m-4 formulario-administrador"><h4>Administrador</h4></div>
            </div>

            <div class="contenedor-ingreso-admins">

            </div>

        </div>

        


      </div>


       <!--Zona de separacion-->
       <br>
       <br>
       <hr>
       <br>
       <br>
 



      <!--footer-->
      <

      <footer class="container-fluid bg-dark d-block align-self-center p-5">

      <div class="contenedor-footer ">

      <p> SERVICIO NACIONAL DE APRENDIZAJE S.E.N.A.</p>

        <br>

     <p> PROYECTO LEARNING MANAGEMENT SYSTEM <p/> <br>

      <p>TECNOLOGO ANALISIS Y DESARROLLO DE SISTEMAS DE INFORMACION</p><br> 
      
                           <p> FICHA: 1965975 </p><br>
                          
      
      
                   <p>DESARROLLADO POR: JOSE DAVID CASTAÑEDA PIRA</p><br>

                   </div>

      </footer>

    <!--link librerias js-->
    <script src="librerias/jquery/jquery-3.5.1.js"></script>
    <script src="librerias/bootstrap/js/bootstrap.min.js"></script>
    <script src="librerias/icons/js/all.js"></script>
    <script src="index.js"></script>
</body>
</html>
      
      ';
    }

    Imprimir_Cabecera();
    Imprimir_cursos($_POST['public']['read']);
    Imprimir_cierre();
    ?>


