


<?php

session_start();

if(isset($_SESSION['data']['rol']) && $_SESSION['data']['rol']==='maestro' && isset($_SESSION['curso'])){


    require '../../acceso-datos/crud/read.php';
    $otraconsulta=array(' select x.id_componente_c, c.nombre, c.tipo, c.estado, c.ruta, c.descripcion from curso_componente_c x, componente_c c where x.id_curso='.$_SESSION['data-curso'][0]['id_curso'].'  and  x.id_componente_c = c.id_componente;');
    $_SESSION['data-componentes']=Read($otraconsulta,count($otraconsulta),'ver curso maestro');
    
    var_dump($_SESSION);

    require_once 'pantalla-index/nav.php';
    Nav_maestro($_SESSION['data']['nombre'],$_SESSION['data']['rol']);    


   

    echo '
  
        <div class="container m-5 ">
        
                <div class="alert alert-dark d-flex justify-content-center">
                
                <img class="mr-5" style="width:100px; height:100px; border-radius:50%;" src="../../'.$_SESSION['data-curso'][0]['ruta_icono'].'">
                <h3 class="mt-4">Bienvendio al curso de '.$_SESSION['curso'].'</h3> 
                <div class="btn btn-danger ml-5 salir-curso"><h5>Salir del curso</h5></div>
            
                </div>
                <br><br>
                
                
                
                
                <div class="d-block alert alert-dark d-flex justify-content-center">

                        <h5>'.$_SESSION['data-curso'][0]['descripcion_curso'].'</h5>

                </div>


            



        </div>



    ';

    for ($i=0; $i <count($_SESSION['data-componentes']) ; $i++) { 


       // if($_SESSION['data-componentes'][$i]['tipo'])

        echo '

        <div class="container alert alert-dark d-flex justify-content-center">
    
        <div style="box-shadow:5px 5px 5px black; width:60%; margin-left:2%;" class="card " >
        <div class="card-body ">
        <h5 class="card-title  text-muted">Componente #'.($i+1).'</h5>
        <br>
          <h3 class="card-title">'.$_SESSION['data-componentes'][$i]['nombre'].'</h3>
         
          <h6 class="card-subtitle mb-2">'.$_SESSION['data-componentes'][$i]['tipo'].'</h6>
          <p class="card-text">'.$_SESSION['data-componentes'][$i]['descripcion'].'</p> 

          <div class="btn btn-danger">Estudiar Componente</div>
         <br>
        </div>
        </div>
        <br>
        

        </div>

        
        ';

    }





    require_once 'pantalla-index/footer.php';
    Footer('');
    echo '<script src="js/curso-prueba.js"></script>';
}
?>