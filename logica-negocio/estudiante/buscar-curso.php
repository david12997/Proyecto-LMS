<?php

require_once '../../librerias/propias/mostrar-errores.php';

var_dump($_GET);

class Buscador_curso{

    public $curso_buscar;


    public function __construct($curso_buscar)
    {
        $this->curso=$curso_buscar;
        
    }

    public function Buscar()
   
    {
        
        $query='select * from curso where nombre like "%'.$this->curso.'%";';
        var_dump($query);
        $lasquerys=array($query);

        require_once '../../acceso-datos/crud/read.php';
        session_start();
        $_SESSION['data']['response_busqueda']=Read($lasquerys,count($lasquerys),'buscar curso');
        header('Location:../../presentacion/estudiante/index.php');

           

    }


}
if(isset($_GET['buscar_curso'])){

    $mibuscador=new Buscador_curso($_GET['buscar_curso']);
    $mibuscador->Buscar();
}

?>