<?php

session_start();
var_dump($_SESSION);

if(isset($_SESSION['data-componentes'])){

    unset($_SESSION['data-componentes']);
}


if(isset($_SESSION['data']['rol']) && $_SESSION['data']['rol']==='maestro' && isset( $_SESSION['curso'])){





    
    if(isset($_GET['error'])){

        echo '<div class="alert alert-danger d-flex justify-content-center">'.$_GET['error'].'</div>';
    }
    if(isset($_GET['response'])){

        echo '<div class="alert alert-success d-flex justify-content-center">'.$_GET['response'].'</div>';
    }
    

    //nav y cabecera de la pagina index
    require_once 'pantalla-index/nav.php';
    Nav_maestro(strtoupper($_SESSION['data']['nombre']), $_SESSION['data']['rol']);

    echo '


    <br>


    <div class="alert alert-dark d-flex justify-content-center">
        
        <h2>
       Curso :<strong> '.$_SESSION['curso'].'</strong>

        </h2>
        <br>
        <a href="curso.php" class="ver-curso btn btn-danger ml-5"><h4>Ver curso</h4></a>
    </div>

    <div class="container d-block alert alert-dark">

        <h2 class=" d-flex justify-content-center m-2">Elige el tipo de componente</h2><br>

        <div class=" m-2 d-flex justify-content-between">

            <div class="btn btn-success">Video</div>
            <div class="btn btn-success">Video de Youtube</div>
            <div class="btn btn-success">Audio</div>
            <div class="btn btn-success">Pdf</div>
            <div class="btn btn-success">Texto</div>
            <div class="btn btn-success">Imagenes</div>
        
        </div>
    
    
    </div>


    <br>
    <div class="container contenedor-formulario"></div>
    
    
    ';

    


    echo '<br><br>';
    //footer y cierre de la pagina
    require_once 'pantalla-index/footer.php';
     Footer('<script src="js/componentes.js"></script>');
        
}else{

    header('Location:../../index.php?error=Error de autenticacion');
}


?>