<?php


/*para usar esta clase solo hay que requerir el archivo y usar la funcion Definir_rol*/ 
class Registro{

    public $conexion;
   

    public function __construct($conexion)
    {
        $this->conexion=$conexion;

    }

    //logica para registrar estuidante
    public function R_estudiante($data){

      //  var_dump($data);

        $insertar_estudiante=mysqli_query($this->conexion, 'insert into estudiante values('."null,"."'$data[0]','"."$data[1]','"."$data[2]');");
        
        if($insertar_estudiante){//verificando inserccion de nuevo estudiante

            //trayendo id_estudiante
            $consulta_id_estudiante='select id_estudiante from estudiante where nombre="'.$data[0].'" and email="'.$data[1].'";';
            $consulta_id=mysqli_query($this->conexion,$consulta_id_estudiante);

            
            //convirtiendo datos de consulta en array legible
            $res=mysqli_fetch_assoc($consulta_id);

            //var_dump($res);


            //creando sesesion
           session_start();
           $_SESSION['data']=[
            
            'id'=> $res['id_estudiante'],
            'rol'=>'estudiante',
            'nombre'=>$data[0],
            'email'=>$data[1],
            'key'=>40030267


           ];

           //redirigiendo pagina inicio estudiante
           header('Location:../../presentacion/estudiante/index.php');
        }else{

            var_dump('Error al insertar datos');
        }
    
    }



    //definir que tipo de usuario se va a registrar
    public function Definir_rol($rol,$data){

        switch ($rol) {
            case 'estudiante':
                
                $this->R_estudiante($data);
                
                break;

            case 'maestro':
                # code...
                break;
                
            case 'administracion':
                # code...
                break;        
            
            default:
                # code...
                break;
        }
    }

    
}

require_once 'conexion.php';
$mi_registro= new Registro($miconexion->Conectando());

?>