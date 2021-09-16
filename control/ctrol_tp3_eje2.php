<?php 
    class ctrol_tp3_eje2{
       
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
            $extension = str_contains($_FILES['fileUp']['name'],".txt");//duda: control por nombre o tipo
            //print_r($_FILES);
            if (!$extension) {
                $error .= true;
                $msj = 'Error: La extension no es de texto (.txt) <br>';
            }else{
                $leetxt = fopen($_FILES['fileUp']['tmp_name'],'r');
                $contenido = fread($leetxt,filesize($_FILES['fileUp']['tmp_name']));
                fclose($leetxt);
                $dataFile.=$contenido;
            }
            if(!$error && copy($_FILES['fileUp']['tmp_name'],$directorio.$_FILES['fileUp']['name'])){
                $contenido = "<a target='_blank' href='../../../uploads/". $_FILES['fileUp']['name']."'> Ver archivo </a>";
            }else{
                $msj .= "Error al copiar archivo <br>";
            }


            //echo $msj;
           // echo $dataFile;
            $respuesta[0] = ["dataFile"=>$dataFile];
            $respuesta[1] = ["msj"=>$msj];
            $respuesta[2] = ["cont"=>$contenido];
            return $respuesta;
        }
    }
?>