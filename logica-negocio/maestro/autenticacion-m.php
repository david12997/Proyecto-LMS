<?php

    if(isset($_POST['rol-maestro'])){

    require_once '../../acceso-datos/registro-autenticacion/autenticacion.php';

    $autenticando_maestro= new Autenticacion($_POST['rol-maestro'],$_POST['correo-maestro'],$_POST['contraseña-maestro']);
    $autenticando_maestro->Trayendo_contraseña();
    }

?>