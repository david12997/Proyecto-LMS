<?php

    session_start();

    if(isset($_SESSION['data']['rol']) && $_SESSION['data']['rol']==="maestro"){

        //var_dump($_POST);
        //var_dump($_FILES);
      //  var_dump($_SESSION);



        class Componente {

            public $curso;
            public $data_componente;
            public $tipo_componente;
            public $componente;

            public function __construct($curso,$data_componente,$tipo_componente,$componente)
            {
                
               $this->curso=$curso;
               $this->data=$data_componente;
               $this->tipo=$tipo_componente;
               $this->componente=$componente; 
            }

            public function IdCurso(){

                //primero hacemos una consulta para traer el id del curso

                $consultas=array('select id_curso from curso where nombre="'.$this->curso.'";');

                require_once '../../acceso-datos/crud/read.php';
                $idCurso=Read($consultas,count($consultas),'componente id_curso')[0]['id_curso'];


                return  intval($idCurso);

            }

            //$carpeta_destino debe incluir el nombre del archivo a mover ej: "carpeta/nombreArchivo.jpg"
            public function GuardarComponente($carpeta_destino,$carpeta_actual){

                if(move_uploaded_file($carpeta_actual,$carpeta_destino)){

                    $res=true;

                }else{

                    $res=false;
                }

                return $res;
            }



            public function CrearComponente($id_curso){

                //var_dump($id_curso);
               // var_dump($this->tipo);
                
                switch ($this->tipo) {
                    case 'pdf':
                        
                        $carpeta_actual=$this->componente['mi-componente']['tmp_name'];
                        $carpeta_destino='../../assets/pdf/'.$this->componente['mi-componente']['name'];
                        
                        if($this->GuardarComponente($carpeta_destino,$carpeta_actual)){

                            $_SESSION['crear-componente']=[

                                $this->data['nombre-componente'],
                                $this->data['tipo-componente'],
                                $this->data['estado-componente'],
                                'asstes/pdf/'.$this->componente['mi-componente']['name'],
                                $this->data['descripcion-componente'],
                                $id_curso
                                


                            ];

                            //var_dump($_SESSION['crear-componente']);
                            

                            header('Location:../../acceso-datos/crud/insert.php?caso=crear componente');


                            
                            
                            

                        }else{

                            var_dump(' error al subir componente');
                        }

                    break;


                    case 'imagen':
                        
                        $carpeta_actual=$this->componente['mi-componente']['tmp_name'];
                        $carpeta_destino='../../assets/img/'.$this->componente['mi-componente']['name'];
                        
                        if($this->GuardarComponente($carpeta_destino,$carpeta_actual)){

                            $_SESSION['crear-componente']=[

                                $this->data['nombre-componente'],
                                $this->data['tipo-componente'],
                                $this->data['estado-componente'],
                                'asstes/img/'.$this->componente['mi-componente']['name'],
                                $this->data['descripcion-componente'],
                                $id_curso
                                


                            ];

                            //var_dump($_SESSION['crear-componente']);
                            

                            header('Location:../../acceso-datos/crud/insert.php?caso=crear componente');


                            
                            
                            

                        }else{

                            var_dump(' error al subir componente');
                        }

                    break;



                    case 'video':
                        
                        $carpeta_actual=$this->componente['mi-componente']['tmp_name'];
                        $carpeta_destino='../../assets/video/'.$this->componente['mi-componente']['name'];
                        
                        if($this->GuardarComponente($carpeta_destino,$carpeta_actual)){

                            $_SESSION['crear-componente']=[

                                $this->data['nombre-componente'],
                                $this->data['tipo-componente'],
                                $this->data['estado-componente'],
                                'asstes/video/'.$this->componente['mi-componente']['name'],
                                $this->data['descripcion-componente'],
                                $id_curso
                                


                            ];

                            //var_dump($_SESSION['crear-componente']);
                            

                            header('Location:../../acceso-datos/crud/insert.php?caso=crear componente');


                            
                            
                            

                        }else{

                            var_dump(' error al subir componente');
                        }

                    break;





                    case 'audio':
                        
                        $carpeta_actual=$this->componente['mi-componente']['tmp_name'];
                        $carpeta_destino='../../assets/audio/'.$this->componente['mi-componente']['name'];
                        
                        if($this->GuardarComponente($carpeta_destino,$carpeta_actual)){

                            $_SESSION['crear-componente']=[

                                $this->data['nombre-componente'],
                                $this->data['tipo-componente'],
                                $this->data['estado-componente'],
                                'asstes/audio/'.$this->componente['mi-componente']['name'],
                                $this->data['descripcion-componente'],
                                $id_curso
                                


                            ];

                            //var_dump($_SESSION['crear-componente']);
                            

                            header('Location:../../acceso-datos/crud/insert.php?caso=crear componente');


                            
                            
                            

                        }else{

                            var_dump(' error al subir componente');
                        }

                    break;



                    case 'youtube':
                      

                            $_SESSION['crear-componente']=[

                                $this->data['nombre-componente'],
                                $this->data['tipo-componente'],
                                $this->data['estado-componente'],
                                $this->data['video-youtube'],
                                $this->data['descripcion-componente'],
                                $id_curso
                                


                            ];

                            //var_dump($_SESSION['crear-componente']);
                            

                            header('Location:../../acceso-datos/crud/insert.php?caso=crear componente');                          
                            
                            



                    break;





                    case 'texto':
                      

                        $_SESSION['crear-componente']=[

                            $this->data['nombre-componente'],
                            $this->data['tipo-componente'],
                            $this->data['estado-componente'],
                            $this->data['texto-componente'],
                            $this->data['descripcion-componente'],
                            $id_curso
                            


                        ];

                        //var_dump($_SESSION['crear-componente']);
                        

                        header('Location:../../acceso-datos/crud/insert.php?caso=crear componente');                          
                        
                        



                break;
                    
                    default:
                        # code...
                        break;
                }



            }
        }

        $micomponente= new Componente($_SESSION['curso'],$_POST,$_POST['tipo-componente'],$_FILES);
       $micomponente->CrearComponente($micomponente->IdCurso());
    }

?>