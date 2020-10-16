<?php

class Inscribir{





    public function Validar_curso_estudiante($curso, $estudiante){
        
        
        $query='select*from curso_estudiante where id_estudiante= '.$estudiante.' and id_curso= '.$curso;

        $miconsulta=array($query);
        $path='inscribir curso';
        
        require_once '../../acceso-datos/crud/read.php';
        $response= Read($miconsulta,count($miconsulta),$path);

        if(count($response)===0){

            header('Location:../../acceso-datos/crud/insert.php?caso=curso estudiante&curso='.$curso.'&estudiante='.$estudiante);
        }else{
            header('location:../../presentacion/estudiante/index.php?error=Error al inscribir curso, YA ESTAS INSCRITO');

        }

        

    }


}

if(isset($_GET['curso']) && isset($_GET['estudiante'])){

    $mi_inscripcion=new Inscribir();
   
    $mi_inscripcion->Validar_curso_estudiante($_GET['curso'],$_GET['estudiante']);

}else{

    header('location:../../presentacion/estudiante/index.php?error=Error al inscribir curso, faltan datos');
}

?>