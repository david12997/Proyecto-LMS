<?php

    function Insert($data){

        
        var_dump($data);

        switch ($data['caso']) {

            case 'curso estudiante':
                
                $query='insert into curso_estudiante values(null,"'.$data['curso'].'","'.$data['estudiante'].'");';

                require_once '../registro-autenticacion/conexion.php';

                $miinsert=mysqli_query($miconexion->Conectando(),$query);

                if($miinsert){
                    header('Location:../../presentacion/estudiante/miscursos.php?inscripcion=Inscripcion realizada corrctamente');
                }else{
                    header('Location:../../presentacion/estudiante/index.php?error=Error al inscribir curso intentalo en 5 minutos');
                }

            break;
            
            default:
                # code...
            break;
        }
       

    }


    Insert($_GET);
?>