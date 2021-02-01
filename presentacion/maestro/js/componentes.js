$(window).on('load',function(){

  

    $('.btn-success').on('click',function(e){

        let formulario;
        

        $('.form-componente').remove();

        //console.log(e.currentTarget.innerText);
    

        switch (e.currentTarget.innerText) {
            case 'Video':

            formulario=`
                   
                <form class="form-componente alert alert-danger" action="../../logica-negocio/maestro/crear-componente.php" method="POST" enctype="multipart/form-data">

                <h1 class="d-flex justify-content-center">Video</h1>
                <label> Nombre :</label><br>
                <input type="text" name="nombre-componente" class="" required>
                
                <input class="d-none" name="tipo-componente" value="video">
                <br><br>
                <input type="checkbox" name="estado-componente" value="visible">
                <label>Componente visible</label>
                <br><br>
                <input type="checkbox" name="estado-componente" value="oculto">
                <label>Componente Oculto</label>
                <br><br>
                <label>Subir video</label>
                <input type="file" name="mi-componente" accept="video/mp4,video/*" required>
                <br><br>
                <label>Descripcion :</label><br>
                <textarea rows="5" cols="50 " name="descripcion-componente"></textarea><br><br>
                <button type="submit" class="btn btn-danger btn-block m-2"><h3>Crear componente</h3></button>
                 
                
                </form>
            
            
            `;

            
            break;




            case 'Video de Youtube':

            formulario=`
                   
                <form class="form-componente alert alert-danger" action="../../logica-negocio/maestro/crear-componente.php" method="POST" enctype="multipart/form-data">

                <h1 class="d-flex justify-content-center">Video de youtube</h1>

                <label> Nombre :</label><br>
                <input type="text" name="nombre-componente" class="" required>
                
                <input class="d-none" name="tipo-componente" value="youtube">
                <br><br>
                <input type="checkbox" name="estado-componente" value="visible">
                <label>Componente visible</label>
                <br><br>
                <input type="checkbox" name="estado-componente" value="oculto">
                <label>Componente Oculto</label>
                <br><br>
                <label>Etiqueta i-frame de youtube :</label><br>
                <textarea rows="5" cols="50 " name="video-youtube"></textarea>
                <br><br>
                <label>Descripcion :</label><br>
                <textarea rows="5" cols="50 " name="descripcion-componente"></textarea><br><br>
                <button type="submit" class="btn btn-danger btn-block m-2"><h3>Crear componente</h3></button>
                 
                
                </form>
            
            
            `;
            
            break;
        


            case 'Audio':

            formulario=`
                   
                <form class="form-componente alert alert-danger" action="../../logica-negocio/maestro/crear-componente.php" method="POST" enctype="multipart/form-data">

                <h1 class="d-flex justify-content-center">Audio</h1>
                <label> Nombre :</label><br>
                <input type="text" name="nombre-componente" class="" required>
                
                <input class="d-none" name="tipo-componente" value="audio">
                <br><br>
                <input type="checkbox" name="estado-componente" value="visible">
                <label>Componente visible</label>
                <br><br>
                <input type="checkbox" name="estado-componente" value="oculto">
                <label>Componente Oculto</label>
                <br><br>
                <label>Subir audio :</label>
                <input type="file" name="mi-componente" accept=audio/*" required>
                <br><br>
                <label>Descripcion :</label><br>
                <textarea rows="5" cols="50 " name="descripcion-componente"></textarea><br><br>
                <button type="submit" class="btn btn-danger btn-block m-2"><h3>Crear componente</h3></button>
                 
                
                </form>
            
            
            `;

            
            break;


            case 'Pdf':

                formulario=`
                       
                    <form class="form-componente alert alert-danger" action="../../logica-negocio/maestro/crear-componente.php" method="POST" enctype="multipart/form-data">
    
                    <h1 class="d-flex justify-content-center">Pdf</h1>
                    <label> Nombre :</label><br>
                    <input type="text" name="nombre-componente" class="" required>
                    
                    <input class="d-none" name="tipo-componente" value="pdf">
                    <br><br>
                    <input type="checkbox" name="estado-componente" value="visible">
                    <label>Componente visible</label>
                    <br><br>
                    <input type="checkbox" name="estado-componente" value="oculto">
                    <label>Componente Oculto</label>
                    <br><br>
                    <label>Subir pdf :</label>
                    <input type="file" name="mi-componente" accept=".pdf" required>
                    <br><br>
                    <label>Descripcion :</label><br>
                    <textarea rows="5" cols="50 " name="descripcion-componente"></textarea><br><br>
                    <button type="submit" class="btn btn-danger btn-block m-2"><h3>Crear componente</h3></button>
                     
                    
                    </form>
                
                
                `;
    
                
                break;




                case 'Texto':

                    formulario=`
                           
                        <form class="form-componente alert alert-danger" action="../../logica-negocio/maestro/crear-componente.php" method="POST" enctype="multipart/form-data">
        
                        <h1 class="d-flex justify-content-center">Texto</h1>
                        <label> Nombre :</label><br>
                        <input type="text" name="nombre-componente" class="" required>
                        
                        <input class="d-none" name="tipo-componente" value="texto">
                        <br><br>
                        <input type="checkbox" name="estado-componente" value="visible">
                        <label>Componente visible</label>
                        <br><br>
                        <input type="checkbox" name="estado-componente" value="oculto">
                        <label>Componente Oculto</label>
                        <br><br>
                        <label>Escribe tu texto :</label><br>
                        <textarea rows="5" cols="50 " name="texto-componente"><p></p></textarea>
                        <br><br>
                        <label>Descripcion :</label><br>
                        <textarea rows="5" cols="50 " name="descripcion-componente"></textarea><br><br>
                        <button type="submit" class="btn btn-danger btn-block m-2"><h3>Crear componente</h3></button>
                         
                        
                        </form>
                    
                    
                    `;
        
                    
                    break;


            
                    case 'Imagenes':

                        formulario=`
                               
                            <form class="form-componente alert alert-danger" action="../../logica-negocio/maestro/crear-componente.php" method="POST" enctype="multipart/form-data">
            
                            <h1 class="d-flex justify-content-center">Imagen</h1>
                            <label> Nombre :</label><br>
                            <input type="text" name="nombre-componente" class="" required>
                            
                            <input class="d-none" name="tipo-componente" value="imagen">
                            <br><br>
                            <input type="checkbox" name="estado-componente" value="visible">
                            <label>Componente visible</label>
                            <br><br>
                            <input type="checkbox" name="estado-componente" value="oculto">
                            <label>Componente Oculto</label>
                            <br><br>
                            <label>Subir Imagen :</label>
                            <input type="file" name="mi-componente" accept="image/*" required>
                            <br><br>
                            <label>Descripcion :</label><br>
                            <textarea rows="5" cols="50 " name="descripcion-componente"></textarea><br><br>
                            <button type="submit" class="btn btn-danger btn-block m-2"><h3>Crear componente</h3></button>
                             
                            
                            </form>
                        
                        
                        `;
            
                        
                        break;  
        
    

            default:
                break;
        }
    
        $('.contenedor-formulario').append(formulario);

    });

    $('.ver-curso').on('click',function(){

        window.location.href='../../logica-negocio/maestro/componentes-curso.php';

        

    })
})

