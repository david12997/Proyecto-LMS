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




            case 'curso':
                
                session_start();
                $datos=$_SESSION['crear-curso'];
              
                 //var_dump($_SESSION['crear-curso']);

                $query='insert into curso values(null,"'.$datos[0].'","'.$datos[1].'","'.$datos[2].'","'.$datos[3].'","'.$datos[4].'","'.$datos[5].'")';
                
                //var_dump($query);

                require_once '../registro-autenticacion/conexion.php';

                $miinsert=mysqli_query($miconexion->Conectando(),$query);

                if($miinsert){
                    
                    $_SESSION['curso']=$datos[0];

                    unset($_SESSION['crear-curso']);
                   
                    header('Location:../../presentacion/maestro/componentes.php');

                }else{

                    unlink('../../'.$datos[2]);
                    unset($_SESSION['crear-curso']);
                    header('Location:../../presentacion/maestro/index.php?error=Error al crear curso intentalo mas tarde');
                }



            break;

            case 'crear componente':

                session_start();
                $datos=$_SESSION['crear-componente'];

                $query='insert into componente_c values(null,"'.$datos[0].'","'.$datos[1].'","'.$datos[2].'","'.$datos[3].'","'.$datos[4].'");';
                
                

                //var_dump($query);
                //die();

                require '../registro-autenticacion/conexion.php';

                $miinsert=mysqli_query($miconexion->Conectando(),$query);


                if($miinsert){

                    $miconsulta='select id_componente from componente_c where nombre="'.$datos[0].'"; ';
                    
                    $miquery=mysqli_query($miconexion->Conectando(),$miconsulta);

                    $id_componente;
                    while($res= mysqli_fetch_assoc($miquery)){

                       $id_componente=$res['id_componente'];
                    }


                        //guardando relacion entee curso y componente curso
                    $query2='insert into curso_componente_c values(null,"'.$datos[5].'","'.$id_componente.'")';
                    $miinsert2=mysqli_query($miconexion->Conectando(),$query2);

                    if($miinsert2){

                        unset($_SESSION['crear-componente']);
                        header('Location:../../presentacion/maestro/componentes.php?response=Componene creado correctamente');
                        
                    }else{
                        unset($_SESSION['crear-componente']);
                      var_dump('error al crear relacion componente curso');
                    }

                }else{
                    unset($_SESSION['crear-componente']);
                    var_dump('Error al guardar el componente'.mysqli_connect_error());
                }



            break;
            
            default:
                # code...
            break;
        }
       

    }


    Insert($_GET);
?>