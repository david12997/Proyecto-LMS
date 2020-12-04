<?php
session_start();

<<<<<<< HEAD
if(isset($_SESSION['data']['rol']) && $_SESSION['data']['rol']==='maestro'){

    var_dump('interfaz maestro');
}
=======
if(isset($_SESSION['data']) && $_SESSION['data']['rol']==='maestro'){

    

//nav y cabecera de la pagina index
require_once 'pantalla-index/nav.php';
Nav_maestro('JUAN','MAESTRO');

//formulario crear curso
require_once 'pantalla-index/form-crear-curso.php';
Crear_curso();

//contenido principal de la pagina
require_once 'pantalla-index/contenido-principal.php';
Contenido_principal();


//footer y cierre de la pagina
require_once 'pantalla-index/footer.php';
Footer();
}
else{

    header('Location:../../index.php?error=Error de autenticacion');
}

?>
>>>>>>> 10ea440ad67d17dfba5e1f856e6b09e09d1c34a8
