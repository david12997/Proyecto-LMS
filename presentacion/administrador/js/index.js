
    $('.generar-usuario').on('click', function(){

        $('.contenido').empty();


        $('.contenido').append(`


        <form action="../../logica-negocio/administrador/generar-credenciales.php" method="post">

            <div class="form-group">
        <label for="">Nombre de usuario: </label>
        <input type="text" class="form-control" name="nombre-usuario">
        </div>

    <div class="form-group">
        <label for="">Email address</label>
        <input type="email" class="form-control" name="email-usuario">
    </div>

    <div class="form-group">
        <label for="">Password</label>
        <input type="password" class="form-control" name="password-usuario">
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" name="rol" value="maestro">
        <label class="form-check-label">Maestro</label>
    </div>

    <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" name="rol" value="administrador">
    <label class="form-check-label">Administrador</label>
    </div>

    <button type="submit" class="btn btn-success"><h1>Generar usuario</h1></button>
    </form>
        
        
        
        
        `);
    });




