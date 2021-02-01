<?php


function Crear_curso(){

    echo'
    
    <div class="crear-curso bg-dark m-2 ml-5  d-none">

    <div class="btn-cerrar d-flex ">

        <span class="boton-cerrar"><i class="fas fa-window-close"></i></span>
        
    </div>

    <form enctype="multipart/form-data" action="../../logica-negocio/maestro/crear-curso.php" method="post">

        <div class="cont-form m-5">



        




            <div class="nombre-icono-curso ">




                <label class="l-blanca" for="">Nombre del curso :</label><br><input type="text" name="nombre-curso" id="nombre-curso" required>
                <br>
                <br>
                <label class="l-blanca" for="img-curso">Icono del curso :</label><br> <input class="l-blanca" type="file" name="img-curso" id="icono-curso">
                <br>
                <br>
                <label class="l-blanca" for="">Descripcion curso:</label><br> <textarea name="descripcion-curso" id="" cols="30" rows="10"></textarea>
                <br>
                <br>
                <label class="l-blanca" for="">Duracion(horas) :</label><br><input type="number" name="duracion-curso"  required>
                <br>
                <br>
                <label class="l-blanca" for="">Precio(pesos cop) :</label><br><input type="number" name="precio-curso"  required>
                <br>
                <br>
                <button type="submit" class="btn btn-success next-1"><h1>Crear curso</h1></button>



            </div>




        </div>

        
    </form>


</div>




    <br>
    <br>
    
    
    ';
}

?>