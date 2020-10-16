<?php


/*para usar esta clase en otros archivos, se incluye el archivo 
y se instancia asi $variable($clave_acceder_crud,$_consultas_Array,'accion')

Despues se usa el metodo autorizar y se le pasa como parametro
el lenght de $_consultas_Array

*/

class Autorizacion_crud{

    public $clave;
    public $consultas;
    public $accion;


    public function __construct($clave, $consultas, $accion)
    {
        $this->clave=$clave;
        $this->consultas=$consultas;
        $this->accion=$accion;
    }

    public function Autorizar($catidad_consultas)
    {

        if($this->clave===40030267){


            switch ($this->accion) {//las diferentes acciones permiten definir la ruta correcta para el archivo read.php
                case 'read estudiante':
                    
                    require_once '../../acceso-datos/crud/read.php';
                   $_SESSION['data']['read']= Read($this->consultas,$catidad_consultas,'index estudiante');


                break;

                case 'read public':
                    
                    require_once 'acceso-datos/crud/read.php';
                   $_POST['public']['read']= Read($this->consultas,$catidad_consultas,'index public');


                break;
                
                case 'curso estudiante':
                    
                    require_once '../../acceso-datos/crud/read.php';
                   $_SESSION['data']['miscursos']= Read($this->consultas,$catidad_consultas,'curso estudiante');


                break;

                
                default:
                    # code...
                break;
            }
            
            


        }else{
            session_destroy();
            $error='error de autorizacion en el sistema, vuelve a iniciar sesion';
            header('Location:../../index.php');
            
        }
    }
}

?>