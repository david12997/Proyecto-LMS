<?php

        //esta funcion imprime la interfaz grafica de los cursos existentes
        function Imprimir_cursos($cursos, $numero){


            echo  '<!--contenedor cursos-->
      
            <br>
            <hr>
            <br>
            <div class="container p-2">
            
                <a href="index.php" class="btn btn-block btn-success m-2"><h3>NUESTROS CURSOS</h3></a>
                <br>
                <div class="d-flex flex-wrap cont-cursos">';
      
            for ($i=0; $i < $numero; $i++) { 
              
              echo  '
      
             
        
                  <div class="card m-4 mt-5 '.$cursos[$i]["estado"].'" style="width: 18rem;">
            <img src="../../'.$cursos[$i]["ruta_icono"].'" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">'.$cursos[$i]["nombre"].'</h5>
             
            </div>
            <ul class="list-group list-group-flush">
            <li class="list-group-item">Descripcion: '.$cursos[$i]["descripcion_curso"].'</li>
            <li class="list-group-item">Duracion: '.$cursos[$i]["duracion_curso"].' horas</li>
            <li class="list-group-item">Precio: '.$cursos[$i]["precio_curso"].' pesos cop</li>
            </ul>
            <div class="card-body">
            <a href="#" class="card-link btn btn-block btn-primary"><h5>Ver demo</h5></a>
            <br>
            <a href="../../logica-negocio/estudiante/inscribir-curso.php?curso='.$cursos[$i]['id_curso'].'&estudiante='.$_SESSION['data']['id'].'" class="card-link btn btn-block btn-success"><h5>Inscribirme</h5></a>
            </div>
            </div>
        
        
                
             
              
              ';
      
            }
      
      
      //aqui se cierra los cursos y se abren las opciones de clases
            echo '
              
            </div>
            </div>
      
      
            <br>
            <br>
            <br>  
            <br>
            <hr>
            <br>
            <br>
      
      
      
            <div class="container p-2 d-flex flex-wrap">
      
            <div class="btn btn-block btn-success m-2 mb-5"><h3>CLASES, TUTORIAS Y MÁS</h3></div>
                
      
      
      
            <div class="card m-4 mr-5 mt-3" style="width: 18rem;">
            <img src="../../assets/img/clases.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <ul class="list-group list-group-flush">
            <li class="list-group-item"><h5 class="card-title">Clases privadas presenciales</h5></li>
            <li class="list-group-item">         <p class="card-text">Clases presenciales PRIVADAS en cualquier area del conocimiento como: Ingles, Matematicas, Fisica, Quimica, etc...</p>
            </li>
            <li class="list-group-item"><a href="#" class="btn btn-block btn-primary">Programar Clase</a></li>
            </ul>
              
              
            </div>
          </div>
      
      
      
      
      
          <div class="card m-4 mt-3" style="width: 18rem;">
          <img src="../../assets/img/tutorias.jpg" class="card-img-top" alt="...">
          <div class="card-body">
          <ul class="list-group list-group-flush">
          <li class="list-group-item"><h5 class="card-title">Clases privadas virtuales</h5></li>
          <li class="list-group-item"><p class="card-text">Clases virtuales PRIVADAS en cualquier area del conocimiento como: Ingles, Matematicas, Fisica, Quimica, etc...</p>
          </li>
          <li class="list-group-item"><a href="#" class="btn btn-block btn-primary">Programar Clase</a></li>
          </ul>
            
            
          </div>
        </div>
      
      
      
      
      
      
      
        <div class="card m-4 mt-3" style="width: 18rem;">
        <img src="../../assets/img/respuestas.jpg" class="card-img-top" alt="...">
        <div class="card-body">
        <ul class="list-group list-group-flush">
        <li class="list-group-item"><h5 class="card-title">Resuelve talleres, problemas y ejercicos</h5></li>
        <li class="list-group-item"><p class="card-text">Tomale una foto o escanea tu taller o ejercicio, nosotros te ayudamos a resolverlo y te enviamos las respuestas en tiempo record</p>
        </li>
        <li class="list-group-item"><a href="#" class="btn btn-block btn-primary">Resolver taller o ejercico</a></li>
        </ul>
          
          
        </div>
      </div>
      
      
          
            </div>
            
            ';
      
      
      
      
          }
      
          

?>