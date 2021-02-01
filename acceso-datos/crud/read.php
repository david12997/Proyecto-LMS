<?php

//$consultas es un array
 function Read($consultas,$cantidad,$caso){

  $data_read=array();



  switch ($caso) {//aqui se verifica que ruta se necesita, esto depende del archivo donde se incluya read

    case 'index estudiante':


      require_once '../../acceso-datos/registro-autenticacion/conexion.php';

    break;



    case 'index public':


      require_once 'acceso-datos/registro-autenticacion/conexion.php';

    break;



    case 'inscribir curso':


      require '../../acceso-datos/registro-autenticacion/conexion.php';

    break;



    case 'curso estudiante':


      require_once '../../acceso-datos/registro-autenticacion/conexion.php';

    break;


    case 'buscar curso':


     
      require_once '../../acceso-datos/registro-autenticacion/conexion.php';

    break;

    case 'componente id_curso':


     
      require_once '../../acceso-datos/registro-autenticacion/conexion.php';

    break;


    case 'ver curso maestro':


     
      require_once '../../acceso-datos/registro-autenticacion/conexion.php';

    break;

    
    
    
    default:
      $data_read='Error en la ubicacion del archivo conexion.php';
    break;
  }


  
  

    
   

   for ($i=0; $i < $cantidad; $i++) { 
       
    $miquery=mysqli_query($miconexion->Conectando(),$consultas[$i]);


    while($res= mysqli_fetch_assoc($miquery)){

        $data_read[]=$res;
    }

   }
   
   return $data_read;
}
?>