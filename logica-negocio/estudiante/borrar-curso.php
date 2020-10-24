<?php

   //var_dump($_GET);

   session_start();

   if(isset($_SESSION['data']['rol']) && $_SESSION['data']['rol']==='estudiante'){ //validacion

    require_once '../../acceso-datos/crud/delete.php'; //requiriendo clase borrar 

    $condition= 'where id_curso= '.$_GET['curso'].' and id_estudiante= '.$_GET['estudiante'];

    $borrar=new Delete('curso_estudiante',$condition);


    //comprobando si se elimino correctamente

    if($borrar->Borrando()===true){
        header('Location:../../presentacion/estudiante/miscursos.php?delete=Curso eliminado correctamente');

    }else{

        header('Location:../../presentacion/estudiante/miscursos.php?delete=Error al eliminar curso intentalo mas tarde');
    }
    var_dump($borrar->Borrando());


   }else{
       var_dump('error de autorizacion');
   }
?>