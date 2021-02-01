<?php
session_start();


if(isset($_SESSION['data']) && $_SESSION['data']['rol']==='maestro'){

    //var_dump($_SESSION);

    if(isset($_GET['error'])){

        echo '<div class="alert alert-danger d-flex justify-content-center">'.$_GET['error'].'</div>';
    }
    

//nav y cabecera de la pagina index
require_once 'pantalla-index/nav.php';
Nav_maestro(strtoupper($_SESSION['data']['nombre']), $_SESSION['data']['rol']);

//formulario crear curso
require_once 'pantalla-index/form-crear-curso.php';
Crear_curso();

//contenido principal de la pagina
require_once 'pantalla-index/contenido-principal.php';
Contenido_principal();


//footer y cierre de la pagina
require_once 'pantalla-index/footer.php';
Footer('<script src="js/index.js"></script>');
}
else{

    header('Location:../../index.php?error=Error de autenticacion');
}

?>

