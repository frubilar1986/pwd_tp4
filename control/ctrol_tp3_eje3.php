<?php 
    class ctrol_tp3_eje3{
       
        public function ver_file_adj(){
            //print_r($_FILES);
            $directorio = '../../../uploads/';//directorio donde se va a copiar el archivo
            $msj = '';
            $dataFile = "";
            $error = false;
            $contenido = '';
            if($_FILES['fileUp']['error'] > 0 ){
                $msj .= "Error. No se cargo el archivo. Contactese con montoto <br>";
                $error = true;
            }elseif(($_FILES['fileUp']['size']/1024) > 2000 ){
                    $msj.= "Error: archivo supera el limite de Mbs del servidor..<br>";
                    $error = true;

            }else{
                $dataFile= "Nombre: ".$_FILES['fileUp']['name'] . "<br>";
                $dataFile.="Tipo de archivo:".$_FILES['fileUp']['type']."<br>";
                $dataFile.="Tamano:". $_FILES['fileUp']['size']/2000 ."kb<br>";
                $dataFile.="Nombre temporal:".$_FILES['fileUp']['tmp_name']."<br>";

            }
            //$extension = str_contains($_FILES['fileUp']['name'],".JPG");//duda: control por nombre o tipo
            $extension = $_FILES['fileUp']['type'] == "image/jpeg";//duda: control por nombre o tipo
            print_r($_FILES);
            if (!$extension) {
                $error .= true;
                $msj = 'Error: La extension no es de texto (.txt) <br>';
            }
            if(!$error && copy($_FILES['fileUp']['tmp_name'],$directorio.$_FILES['fileUp']['name'])){
               // $msj = "<a target='_blank' href='../../../uploads/". $_FILES['fileUp']['name']."'> Ver archivo </a>";
            //    $contenido = "<img src='../../../uploads/".$_FILES['fileUp']['name']."'>";
               $contenido = $_FILES['fileUp']['name'];
            }else{
                $msj .= "Error al copiar archivo <br>";
            }


            //echo $msj;
           // echo $dataFile;
            $respuesta["dataFile"] =$dataFile;
            $respuesta["msj"] = $msj;
            $respuesta["cont"] = $contenido;
          //echo $respuesta["dataFile"] =$dataFile;
            return $respuesta;
        }
    }
?>