<?php
include_once '../../librerias/propias/mostrar-errores.php';
    session_start();
    unset($_SESSION['data']['read']);
    var_dump($_SESSION);

    if(isset($_SESSION['data']['rol']) && $_SESSION['data']['rol']==='estudiante'){





    require_once '../../logica-negocio/autorizacion-crud.php';
    if($_SESSION['data']['rol']==='estudiante' && $_SESSION['data']['key']===40030267){



      $key=$_SESSION['data']['key'];//esta es la clave para poder acceder al crud

      $query='select c.nombre, c.ruta_icono, c.descripcion_curso, x.id_curso from curso c, curso_estudiante x where x.id_curso=c.id_curso and x.id_estudiante='.$_SESSION['data']['id'].';';
      $mis_consultas=array($query);//aqui estan las consultas sql necesarias para esta vista



      $crud_aut=new Autorizacion_crud($key,$mis_consultas,'curso estudiante');//conectandose al crud 
      $crud_aut->Autorizar(count($mis_consultas));

     
    }







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
          <a class="navbar-brand" href="index.html"><img id="logo" src="../../assets/img/logo-tutorias-verde.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ">
              <li class="ml-5  ">
                <a href="index.php" id="ingresar" class=" letra-blanca-gris"><h3>INICIO <i class="fas fa-home"></i> </h3></a>
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







    function Imprimir_curso_estudiante($data){

        for ($i=0; $i <count($data) ; $i++) { 
            
            echo '


   

    <div class="card m-5" style="width: 18rem;">
        <img src="../../'.$data[$i]['ruta_icono'].'" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">'.$data[$i]['nombre'].'</h5>
        <p class="card-text">'.$data[$i]['descripcion_curso'].'</p>
        <a href="#" class="btn btn-primary btn-block">Acceder</a>
        <a href="#" class="btn btn-primary btn-block">Eliminar curso</a>
        </div>
    </div>

    

            ';
        }


        echo '
        
        </div>
        </div>

        ';

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
        <script src="js/miscursos.js"></script>
        </body>
        </html>
        
    </body>
    </html>
        
        ';
    }



Imprimir_Cabecera();
Imprimir_curso_estudiante($_SESSION['data']['miscursos']);
Imprimir_cierre();


        
    }else{
        header('Location:../../index.php?error=Error de autorizacion, vielva a inicar sesion');
        session_destroy();
    }
?>











            
 