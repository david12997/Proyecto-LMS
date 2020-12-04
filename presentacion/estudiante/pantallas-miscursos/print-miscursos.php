<?php

function Imprimir_curso_estudiante($data){

    for ($i=0; $i <count($data) ; $i++) { 
        
        echo '




<div class="card m-3" style="width: 18rem;">
    <img src="../../'.$data[$i]['ruta_icono'].'" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title">'.$data[$i]['nombre'].'</h5>
    <p class="card-text">'.$data[$i]['descripcion_curso'].'</p>
    <a href="#" class="btn btn-success btn-block">Acceder</a>
    <a href="../../logica-negocio/estudiante/eliminar-curso.php?curso='.$data[$i]['nombre'].'" class="btn btn-danger btn-block">Eliminar curso</a>
    </div>
</div>



        ';
    }


    echo '
    
    </div>
    </div>

    ';

}



?>