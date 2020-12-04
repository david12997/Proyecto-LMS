<?php
session_start();

if(isset($_SESSION['data']['rol']) && $_SESSION['data']['rol']==='maestro'){

    var_dump('interfaz maestro');
}