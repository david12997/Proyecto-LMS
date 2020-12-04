<?php

    var_dump($_REQUEST);

    session_start();

    var_dump($_SESSION);

  //metodo de autorizacion solo un rol esudiante puede acceder a esta logica
    if(isset($_SESSION['data']['rol']) && $_SESSION['data']['rol']==="estudiante"){

        
        $consulta_id_curso=array('select id_curso from curso where nombre="'.$_REQUEST['curso'].'"');

        require_once '../../acceso-datos/crud/read.php';
       
        $id_curso=Read($consulta_id_curso,count($consulta_id_curso),'curso estudiante');
        //var_dump($id_curso[0]['id_curso']);
        


        $micondicion= 'where id_curso='.$id_curso[0]['id_curso'].' and id_estudiante='.$_SESSION['data']['id'];
        $identificador= $id_curso[0]['id_curso'];
        $tabla='curso_estudiante';

        var_dump($identificador);


        require_once '../../acceso-datos/crud/delete.php';

        $miborrado=new Borrar($tabla,$identificador,$micondicion);

       if($miborrado->Borrando()===1){

        header('Location:../../presentacion/estudiante/miscursos.php?success=Curso eliminado correctamente');

       }

       if($miborrado->Borrando()===0){

        header('Location:../../presentacion/estudiante/miscursos.php?error=Error al borrar curso intentalo mas tarde');

       }

        
     
    }

?>

