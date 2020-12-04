$(window).on('load',function(){




 //LOGICA Y FUNCIONES DE PARA FORMULARIOS



   //funcion que genera los formularios
   const form=(tipo_form)=>{

       if(tipo_form==='ingresar'){
           
        $('.container-forms').append(`
        
        <div class="cont-form-ingresar bg-dark p-2 pl-5 pr-5 pb-5">

        <div class="cerrar-formulario">
            <div value="ingresar" class="icono-cerrar-form"><i class="fas fa-window-close"></i></div>
        </div>
        <div class="cont-title btn btn-block btn-success">
            <h4>Estudiante</h4>
        </div>
        <br>
        <form action="logica-negocio/estudiante/autenticare.php" method="POST">

        <input type="text" class="d-none" name="rol-estudiante" value="estudiante">

            <div class="form-group letrablanca">
              <label >Correo :</label><br>
              <input type="email" name="correo-estudiante">
            </div>

            <div class="form-group letrablanca">
              <label >Contraseña :</label><br>
              <input type="password" name="contraseña-estudiante">
            </div>
            
            <button type="submit" class="btn btn-success">Ingresar</button>
          </form>
    </div>
        `);
        

       }else if(tipo_form==='registrarse'){

        $('.container-forms').append(`

        <div class="cont-form-registrarse bg-dark p-2 pl-5 pr-5 pb-5">

        <div class="cerrar-formulario">
            <div value="registrarse" class="icono-cerrar-form"><i class="fas fa-window-close"></i></div>
        </div>
        <div class="cont-title btn btn-block btn-success">
            <h4>Estudiante</h4>
        </div>
        <br>
        <form action="logica-negocio/estudiante/registroe.php" method="POST">

        <input type="text" class="d-none" name="rol-estudiante" value="estudiante">

            <div class="form-group letrablanca d-flex justify-content-around">
            <label> Nombre :</label>
            <input type="text" name="nombre-estudiante">
            </div>

            <div class="form-group letrablanca d-flex justify-content-around">
              <label >Correo :</label>
              <input type="email" name="correo-estudiante">
            </div>
            
            <div class="form-group letrablanca d-flex justify-content-around">
              <label> Contraseña :</label>
              <input type="password" name="contraseña-estudiante">
            </div>
            
            <button type="submit" class="btn btn-success">Registrarse</button>
          </form>
    </div>
        `)
       }else if(tipo_form==='maestro'){

        $('.contenedor-ingreso-admins').append(`
        
        <div class="cont-form-ingresar bg-dark p-2 pl-5 pr-5 pb-5">

        <div class="cerrar-formulario">
            <div value="ingresar" class="icono-cerrar-form"><i class="fas fa-window-close"></i></div>
        </div>
        <div class="cont-title btn btn-block btn-success">
            <h4>Maestro</h4>
        </div>
        <br>

        <form action="logica-negocio/maestro/autenticacion-m.php" method="POST">

    


        <input type="text" class="d-none" name="rol-maestro" value="maestro">

            <div class="form-group letrablanca">
              <label >Correo :</label><br>
              <input type="email" name="correo-maestro">
            </div>

            <div class="form-group letrablanca">
              <label >Contraseña :</label><br>
              <input type="password" name="contraseña-maestro">
            </div>
            
            <button type="submit" class="btn btn-success">Ingresar</button>
          </form>
    </div>
        `);

       }else if(tipo_form==='administrador'){

        $('.contenedor-ingreso-admins').append(`
        
        <div class="cont-form-ingresar bg-dark p-2 pl-5 pr-5 pb-5">

        <div class="cerrar-formulario">
            <div value="ingresar" class="icono-cerrar-form"><i class="fas fa-window-close"></i></div>
        </div>
        <div class="cont-title btn btn-block btn-success">
            <h4>Administrador</h4>
        </div>
        <br>
        <form>

        <input type="text" class="d-none" name="rol-administrador" value="administrador">

            <div class="form-group letrablanca">
              <label >Correo :</label><br>
              <input type="email" name="correo-administrador">
            </div>

            <div class="form-group letrablanca">
              <label >Contraseña :</label><br>
              <input type="password" name="contraseña-administrador">
            </div>
            
            <button type="submit" class="btn btn-success">Ingresar</button>
          </form>
    </div>
        `);

       }


       //_____________________________________________________________________________________
    //funcion cerrar formularios
        
            //llamado cerrar-form
            $('.icono-cerrar-form').on('click',function(e){
        
             if(e.currentTarget.attributes[0].value==='ingresar'){

               $('.cont-form-ingresar').remove();
             }else{

                $('.cont-form-registrarse').remove();
             }
            });
        
   }

//_________________________________________________________________________________________________

   //lamado a la funcion que genera los formularios ingresar
   $('#ingresar').on('click',function(){
    let tipo_form='ingresar';
    form(tipo_form);
   });


      //lamado a la funcion que genera los formularios registrarse
      $('#registrarse').on('click',function(){
        let tipo_form='registrarse';
        form(tipo_form);
       });

       //lamado a la funcion que genera los formularios maestro
      $('.formulario-maestro').on('click',function(){

        let tipo_form='maestro';
        form(tipo_form);
       });

       //lamado a la funcion que genera los formularios administrador
      $('.formulario-administrador').on('click',function(){
        let tipo_form='administrador';
        form(tipo_form);
       });







       //____________________________________________________________________________


       //LOGICA DE INTERFAZ DE USUARIO

       class Pantalla_inicial{

        constructor(){

        }
       }

})