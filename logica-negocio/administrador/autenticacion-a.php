<?php

    var_dump($_POST);

  
    $array_data=[

        $_POST['nombre-usuario'],
        $_POST['correo-usuario'],
        $_POST['contraseña-usuario'],
        $_POST['rol-usuario']
    ];

    require_once '../../acceso-datos/registro-autenticacion/registro.php';
    $mi_registro->Definir_rol('maestro',$array_data);

?>