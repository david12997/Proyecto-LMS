
<?php

if(isset($_GET['create_user'])){

    echo '<div class="alert alert-success d-flex justify-content-center align-items-center">'.$_GET['create_user'].'</div>';

}
require_once 'pantalla-index/nav.php';
Nav_admin('JOSE','ADMINISTRADOR');

require_once 'pantalla-index/contenido-principal.php';
Contenido_principal();

require_once 'pantalla-index/footer.php';
Footer();

?>






