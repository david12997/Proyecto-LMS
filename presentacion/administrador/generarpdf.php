<?php
session_start();

require_once 'pantalla-index/nav.php';
Nav_admin('JOSE','ADMINISTRADOR');

require_once 'conexion.php';

$estudiantes="select * from estudiante";
$maestro="select * from maestro";
$administrador="select * from administrador";


$query1=mysqli_query($miconexion->Conectando(),$estudiantes);
$query2=mysqli_query($miconexion->Conectando(),$maestro);
$query3=mysqli_query($miconexion->Conectando(),$administrador);


while($res=mysqli_fetch_assoc($query1)){

    $student[]=$res;
}

while($res=mysqli_fetch_assoc($query2)){

    $teacher[]=$res;
}

while($res1=mysqli_fetch_assoc($query3)){

    $admin[]=$res1;
}





$_SESSION['data-usuarios']=[$student,$teacher,$admin];

//var_dump($_SESSION['data-usuarios']);

echo '<script src="../../librerias/jquery/jquery-3.5.1.js"></script>';

if($_GET['data']==='usuarios'){

    echo '
    <br>
    <div class="bg-danger text-white p-2 d-flex justify-content-center"><h3>Descargar datos de usuarios</h3></div>

    <div class="container p-2">
    
        <br><br>
        <a href="pdf.php?data=estudiante" class="p-2 btn btn-success btn-block student"><h5>Estudiante</h5></a>
      
        <a href="pdf.php?data=maestro" class="p-2 btn btn-success btn-block teacher"><h5>Maestro</h5></a>
    
        <a href="pdf.php?data=administrador" class="p-2 btn btn-success btn-block admin"><h5>Administrador</h5></a>
        <br>
    
    </div>';



}else{

    echo '';

}












require_once 'pantalla-index/footer.php';
Footer();

?>