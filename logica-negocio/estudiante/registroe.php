<?php

/**/ 
require_once '../../librerias/propias/mostrar-errores.php';


class ValidacionRegistro{
    
    public $rol;
    public $nombre_e;
    public $correo_e;
    public $contraseña_e;

    public function __construct($rol, $nombre_e, $correo_e, $contraseña_e)
    {
        $this->rol=$rol;   
        $this->nombre=$nombre_e;
        $this->correo=$correo_e;
        $this->contraseña=$contraseña_e;     
    }

    public function Validar(){

        //determinar si los datos viene vacios
        if( empty($this->rol) || empty($this->nombre) || empty($this->correo) || empty($this->contraseña)){

            $error='datos vacios';
            header('Location:../../index.php?error='.$error);
        }else{

            //aqui se verifica el rol
            if($this->rol!=='estudiante'){

            $error='Error de tipo de usuario';
            header('Location:../../index.php?error='.$error);

            }else{

                //cifrar contraseña
                $contraseña_cifrada=password_hash($this->contraseña,PASSWORD_BCRYPT,['cost'=>4]);


                //datos para la bbdd
                $datos=[
                    $this->nombre,
                    $this->correo,
                    $contraseña_cifrada

                ];
                
                //llamando al archivo registro.php para hacer registro en sql
                include_once '../../acceso-datos/registro-autenticacion/registro.php';
                $mi_registro->Definir_rol($this->rol,$datos);


            }//final else secundario

        } //final else principal

       

    }

}


if(isset($_POST['rol-estudiante']) && isset($_POST['nombre-estudiante']) && isset($_POST['correo-estudiante']) && isset($_POST['contraseña-estudiante']) ){

    $validacion=new ValidacionRegistro($_POST['rol-estudiante'], $_POST['nombre-estudiante'], $_POST['correo-estudiante'],$_POST['contraseña-estudiante']);
    $validacion->Validar();
}else{
  header('location:../../index.php?erro=Error en las datos de entrada intentalo en 5 minutos')
}

?>