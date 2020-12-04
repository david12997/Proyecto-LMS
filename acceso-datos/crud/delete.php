<?php

    class Borrar{

        public function __construct($tabla,$identificador,$condicion)
        {
            $this->tabla=$tabla;
            $this->id=$identificador;
            $this->condicion=$condicion;
        }


        public function Borrando()
        {
            switch ($this->tabla) {


                case 'curso_estudiante': //el arxivo conexion.php ya ha sido incluido a la rama principal que es eliminar-curso.php
                    

                   $miconexion2= new ConexionDB('5.181.218.103','u418177199_david','5719326David','u418177199_lms');
                   //var_dump('delete  from '.$this->tabla.' '.$this->condicion);
                //die();
                   $query = mysqli_query($miconexion2->Conectando(),'delete from '.$this->tabla.' '.$this->condicion);
                   if($query){

                    $response=1;
                   }else{

                    $response=0;
                   }
                

                break;
                

                default:
                
                    # code...
                
                break;
            }

            return $response;
        }

        
    }

?>