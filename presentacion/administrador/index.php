
<?php

if(isset($_GET['create_user'])){

    echo '<div class="alert alert-success d-flex justify-content-center align-items-center">'.$_GET['create_user'].'</div>';

}
require_once 'pantalla-index/nav.php';
Nav_admin('JOSE','ADMINISTRADOR');

require_once 'pantalla-index/contenido-principal.php';
Contenido_principal();


echo '
<script src="../../librerias/jquery/jquery-3.5.1.js"></script>
<script>

$(".descargar-datos").on("click",function(){

    $(".contenido").empty();
    $(".contenido").append(` 

        <div class="container p-3">
        
        <a href="generarpdf.php?data=usuarios" class="btn btn-block btn-success">Descargar datos usuarios</a>
        <a href="generarpdf.php?data=cursos" class="btn btn-block btn-success">Descargar datos cursos</a>

        
        </div>
    
    `);
})
</script>
';

require_once 'pantalla-index/footer.php';
Footer();



?>






