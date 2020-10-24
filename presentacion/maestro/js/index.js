$(window).on('load',function(){

    //abrir y cerrar pestaña crear curso

    $('.create-course').on('click',function (){

        $('.crear-curso').removeClass('d-none');
        
    });

    $('.boton-cerrar').on('click',function(){

        $('.crear-curso').addClass('d-none');
    });







});