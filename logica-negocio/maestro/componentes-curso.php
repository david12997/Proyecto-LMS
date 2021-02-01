<?php

session_start();


if(isset($_SESSION['data']['rol']) && $_SESSION['data']['rol']==='maestro' && isset($_SESSION['curso'])){

   
    $lasconsultas=array('select * from curso where nombre="'.$_SESSION['curso'].'";');

    require_once '../../acceso-datos/crud/read.php';
   $_SESSION['data-curso']=Read($lasconsultas,count($lasconsultas),'ver curso maestro');

  

   //var_dump($_SESSION);
   header('Location:../../presentacion/maestro/curso.php');

}

?>