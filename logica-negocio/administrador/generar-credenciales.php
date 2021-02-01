<?php


   // var_dump($_POST);


    class Generar_credenciales{

        public $data;

        public function __construct($data)
        {
            $this->data=$data;
        }
 
        public function Tipo_usuario(){


                //cifrar contraseña
                $contraseña_cifrada=password_hash($this->data['password-usuario'],PASSWORD_BCRYPT,['cost'=>4]);


                //datos para la bbdd
                $datos=[
                    $this->data['nombre-usuario'],
                    $this->data['email-usuario'],
                    $contraseña_cifrada

                ];

            switch ($this->data['rol']) {
                case 'maestro':
                
                    require_once '../../acceso-datos/registro-autenticacion/registro.php';
                    $mi_registro->Definir_rol($this->data['rol'],$datos);

                    
                break;


                case 'administrador':
                
                    require_once '../../acceso-datos/registro-autenticacion/registro.php';
                    $mi_registro->Definir_rol($this->data['rol'],$datos);

                    
                break;
                
                default:
                    # code...
                    break;
            }
        }
    }


    $generar_usuario= new Generar_credenciales($_POST);
    $generar_usuario->Tipo_usuario();
?>