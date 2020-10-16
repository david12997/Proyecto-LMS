<?php

class Autenticacion{

    public $rol;
    public $usuario;
    public $contraseña;

    public function __construct($rol,$usuario,$contraseña)
    {
        $this->rol=$rol;
        $this->usuario=$usuario;
        $this->contraseña=$contraseña;
    }


    public function Trayendo_contraseña(){


        include_once 'conexion.php';

        switch ($this->rol) {
            case 'estudiante':
                
                $consulta_contraseña='select id_estudiante, contraseña, nombre from '.$this->rol.' where email="'.$this->usuario.'";';

                $sacar_contraseña=mysqli_query($miconexion->Conectando(),$consulta_contraseña);

                //verificacion consulta, autenticacion
                if($sacar_contraseña){

                    //convirtiendo datos de consulta en array legible
                    $res=mysqli_fetch_assoc($sacar_contraseña);

                    //comparando contraseñas 
                    if(password_verify($this->contraseña,$res['contraseña'])){

                        
                        //inciando sesion
                        session_start();

                        $_SESSION['data']=[
                            
                            'id'=> $res['id_estudiante'],
                            'rol'=>$this->rol,
                            'nombre'=>$res['nombre'],
                            'email'=>$this->usuario,
                            'key'=>40030267

                        ];

                        //redirigiendo
                        header('Location: ../../presentacion/estudiante/index.php');

                    }else{//error de autenticacion

                        $error='Error de autenticacion, acceso denegado';
                        header('Location:../../index.php?error='.$error);

                    }

                    

                }else{//error de consulta

                    //var_dump($consulta_contraseña);
                   $error='error al autenticar usuario archivo autenticacion.php';
                   header('Location:../../index.php?error='.$error);

                    
                }

                break;
            
            default:
                # code...
                break;
        }

       

        

        
    }
}
?>