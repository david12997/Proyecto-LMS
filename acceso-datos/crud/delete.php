<?php

    class Delete {

        public $tabla ;
        public $condicion;


        public function __construct($tabla, $condicion)
        {
            $this->tabla=$tabla;
            $this->condicion=$condicion;
        }

        public function Borrando(){



            switch ($this->tabla) {

                case 'curso_estudiante':

                    require_once '../../acceso-datos/registro-autenticacion/conexion.php';
                    $query=  'delete from '.$this->tabla.' '.$this->condicion;

                break;
                
                default:
                    # code...
                break;
            }

            
            $delete=mysqli_query( $miconexion->Conectando(),$query);
            
            return $delete;
           
        }

    }

?>