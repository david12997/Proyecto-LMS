<?php
var_dump($_POST);

/*

esta clase verifica los datos del usuario, instancia un objeto
Autenticacion desde acceso-dato/registro-autenticacion/autenticacion.php

Esta clase generea una instancia de la clase autenticacion a partir de los datos que recoge
*/

class Autenticar_estudiante{

    public $data;

    public function __construct($data)
    {
        $this->data=$data;
    }

    public function Autenticando(){//funcion de autenticacion 

        if($this->data['rol-estudiante']==='estudiante' && !empty($this->data['correo-estudiante']) && !empty($this->data['contraseña-estudiante']) ){


            //creand objeto Autenticacion
         include_once '../../acceso-datos/registro-autenticacion/autenticacion.php';

         $miautenticacion= new Autenticacion($this->data['rol-estudiante'],$this->data['correo-estudiante'], $this->data['contraseña-estudiante']);
         $miautenticacion->Trayendo_contraseña(); 


        }else{//error datos

            $error='datos incompletos o vacios';
            header('Location:../../index.php?error='.$error);

        }
    }
}

$aut_estudiante= new Autenticar_estudiante($_POST);
$aut_estudiante->Autenticando();
?>