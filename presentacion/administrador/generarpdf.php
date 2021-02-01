<?php


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

while($res=mysqli_fetch_assoc($query3)){

    $admin[]=$res;
}

var_dump($student);

echo '<script src="../../librerias/jquery/jquery-3.5.1.js"></script>';

if($_GET['data']==='usuarios'){

    echo '<div class="container p-2">
    
        <div class="bg-danger text-white p-2 d-flex justify-content-center"><h3>Descargar datos de usuarios</h3></div>
        <br>
        <div class="btn btn-success btn-block student">Estudiante</div>
        <div class="data-student"></div>
        <div class="btn btn-success btn-block teacher">Maestro</div>
        <div class="data-teacher"></div>
        <div class="btn btn-success btn-block admin">Administrador</div>
        <div class="data-admin"></div>
    
    </div>';



}else{

    echo '';

}












require_once 'pantalla-index/footer.php';
Footer();

?>