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


    //require interfaz resultados busqueda
    require_once 'pantalla-index/buscador-cursos.php';


    //reqerir interfaz nav index
    require_once 'pantalla-index/nav.php';

    //requerir interfaz cursos index estudiante
    require_once 'pantalla-index/cursos.php';


   //require interfaaz footer index estudiante
   require_once 'pantalla-index/footer.php';
    

  


   //imprimiendo interfaz de index.php estudiante

    Imprimir_cabecera();

    if(isset($_SESSION['data']['response_busqueda'])){

 

      Imprimir_curso_buscado($_SESSION['data']['response_busqueda'],count($_SESSION['data']['response_busqueda']));
      unset($_SESSION['data']['response_busqueda']);

    }else{

      Imprimir_cursos($_SESSION['data']['read'],count($_SESSION['data']['read']));
    }
    
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
