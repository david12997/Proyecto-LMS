<?php

//$consultas es un array
 function Read($consultas,$cantidad,$location){

  $data_read=array();



  switch ($location) {//aqui se verifica que ruta se necesita, esto depende del archivo donde se incluya read

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


    
    
    default:
      # code...
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