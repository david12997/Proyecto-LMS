$(window).on('load',function(){

    $('.btn-success').on('click',function(e){

        //propiedad de comparacion clase css new-user y download-data
        //console.log(e.currentTarget.classList[4]); 
        $('.formulario').remove();


        if(e.currentTarget.classList[4]==="new-user"){
        $('.caso-uso').append(`
        
        <form method="POST" action="../../logica-negocio/administrador/autenticacion-a.php" class="formulario alert alert-dark d-block p-3 m-5">

      
        <div class="cerrar-formulario">
              <div value="ingresar" class="icono-cerrar"><i class="fas fa-window-close"></i></div>
          </div>
  
        <label for="">Nombre</label> <br>
        <input type="text" name="nombre-usuario" id="" required>
        <br>
        <label for="">Correo</label> <br>
        <input type="email" name="correo-usuario" id="" required>
        <br>
        <label for="">Contraseña</label> <br>
        <input type="password" name="contraseña-usuario" id="" required>
        <br><br>
        <input type="checkbox" name="rol-usuario" id="" unique value="maestro"> <label for=""> Maestro</label>
        <br>
        <input type="checkbox" name="rol-usuario" id="" unique value="administrador"> <label for=""> Administrador</label>
        <br>
        <br>
        <button class="btn btn-block btn-danger" type="submit"><h4>Crear curso</h4></button>
  
        </form>
        
        `);
        }else if(e.currentTarget.classList[4]==="download-data"){

            $('.caso-uso').append(`
        
        <div class="formulario ml-5">

            <div class="cerrar-formulario">
             <div value="ingresar" class="icono-cerrar"><i class="fas fa-window-close"></i></div>
            </div>
        
            <div class="alert alert-success d-flex justify-content-center m-2"><h4>Datos Estudiante</h4></div>
            <div class="alert alert-success d-flex justify-content-center m-2"><h4>Datos Curso</h4></div>
            <div class="alert alert-success d-flex justify-content-center m-2"><h4>Datos Maestro</h4></div>


        </div>


            `);
        }

        $('.cerrar-formulario').on('click',function(){

            $('.formulario').remove();
        })
    })
})