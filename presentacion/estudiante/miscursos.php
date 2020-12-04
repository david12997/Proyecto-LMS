<?php
//mostrar errores
include_once '../../librerias/propias/mostrar-errores.php';

    //inicio de sesion y limpieza de variaable
    session_start();
    unset($_SESSION['data']['read']);
    //var_dump($_SESSION);




        
    
    //validacion
    if(isset($_SESSION['data']['rol']) && $_SESSION['data']['rol']==='estudiante'){


      //mostrar respuestas satisfactorias del sistema
      if(isset($_GET['success'])){

        echo '<div class="alert alert-success d-flex justify-content-center">'.$_GET['success'].'</div>';
      }

      //mostrar respuestas fallidas del sistema
      if(isset($_GET['error'])){

        echo '<div class="alert alert-success d-flex justify-content-center">'.$_GET['error'].'</div>';
      }




    require_once '../../logica-negocio/autorizacion-crud.php';
    if($_SESSION['data']['rol']==='estudiante' && $_SESSION['data']['key']===40030267){



      $key=$_SESSION['data']['key'];//esta es la clave para poder acceder al crud

      $query='select c.nombre, c.ruta_icono, c.descripcion_curso, x.id_curso from curso c, curso_estudiante x where x.id_curso=c.id_curso and x.id_estudiante='.$_SESSION['data']['id'].';';
      $mis_consultas=array($query);//aqui estan las consultas sql necesarias para esta vista



      $crud_aut=new Autorizacion_crud($key,$mis_consultas,'curso estudiante');//conectandose al crud 
      $crud_aut->Autorizar(count($mis_consultas));

     
    }


      //requiriendo funcion que imprime  el nav

      require_once 'pantallas-miscursos/nav.php';
       

      //requeriendo funcion que imprime los cursos actuales
      require_once 'pantallas-miscursos/print-miscursos.php';

       //requiriendo el footer
       require_once 'pantallas-miscursos/footer.php';


    //inscripciones
    if(isset($_GET['inscripcion'])){

      echo '<div class="alert alert-warning d-flex justify-content-center align-items-center">'.$_GET['inscripcion'].'</div>';
    }
    




    //imprimir interfaz grafica miscursos
      Imprimir_Cabecera();
      Imprimir_curso_estudiante($_SESSION['data']['miscursos']);
      Imprimir_cierre();


        
    }else{
        header('Location:../../index.php?error=Error de autorizacion, vielva a inicar sesion');
        session_destroy();
    }
?>











            
 