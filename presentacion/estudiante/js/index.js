$(window).on('load',function () {

    $('#registrarse').on('click',function(){

        $('.contenedor-options').append(`
        
        <div class="bg-dark opciones p-2">

        <div class="cerrar-formulario">
        <div  class="icono-cerrar"><i class="fas fa-window-close"></i></div>
        </div>


        <a href="miscursos.php" class="btn btn-success btn-block"><h4>Mis cursos</h4></a>
        <a href="miscursos.php" class="btn btn-success btn-block"><h4>Mis datos</h4></a>
        <a href="../../logica-negocio/cerrar-sesion.php" class="btn btn-danger btn-block"><h4>Cerrar sesion</h4></a>

        </div>
        
        `);


        
        $('.icono-cerrar').on('click',function () {
       
            $('.opciones').remove();
            
        });
    

        
    });


});