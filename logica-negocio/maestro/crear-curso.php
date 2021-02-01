<?php

    var_dump($_POST);

    var_dump($_FILES);

    session_start();

    if(isset($_SESSION['data']['rol']) && $_SESSION['data']['rol']==="maestro"){

       $carpeta_destino= '../../assets/img/';

       if(move_uploaded_file($_FILES['img-curso']['tmp_name'],$carpeta_destino.$_FILES['img-curso']['name'])){

       // var_dump('archivo subido con exto');

       $_SESSION['crear-curso']=[


           $_POST['nombre-curso'],
           'ok',
           'assets/img/'.$_FILES['img-curso']['name'],
           $_POST['descripcion-curso'],
           $_POST['duracion-curso'],
           $_POST['precio-curso']

       ];

       header('Location:../../acceso-datos/crud/insert.php?caso=curso');

       }

    }
?>