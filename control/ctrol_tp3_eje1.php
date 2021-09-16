<?php 
    class ctrol_tp3_eje1{
        public function maneja_datos($datos){

            $size = $_FILES['fileUp']['size'];
            //$error = "achivo demaciado grande";
            $retorno = "";
            $dir = "../vista/uploads";
            if ($_FILES['archivo']['error'] <= 0 && $size/1024 < 2000) {
                # code...
                $nombre = $_FILES['archivo']['name'];
                if (copy($_FILES['archivo']['tmp_name'], $dir . $_FILES['archivo']['name'])) {
                    $linkArch = $dir.$nombre;
                    $retorno = $linkArch;
                }else{
                    $retorno = "Error NO se pudo copiar el archivo";
                }
            }else{
                $retorno = "Error No subio el archivo al srv";
            }
            return $retorno;
        }
        public function accion($datos){
            //print_r($_FILES);
            $directorio = '../../../uploads/';//directorio donde se va a copiar el archivo
            $msj = '';
            $rta = "";
            $bandera = false;
            if($_FILES['fileUp']['error'] > 0 ){
                $msj .= "Error. No se cargo el archivo. Contactese con montoto <br>";
                $bandera = true;
            }elseif(($_FILES['fileUp']['size']/1024) > 2000 ){
                    $msj.= "Error: archivo supera el limite de Mbs del servidor..<br>";
                   
                    $bandera = true;

            }else{
                $rta.= "Nombre: ".$_FILES['fileUp']['name'] . "<br>";
                $rta.="Tipo de archivo:".$_FILES['fileUp']['type']."<br>";
                $rta.="Tamano:". $_FILES['fileUp']['size']/2000 ."kb<br>";
                $rta.="Nombre temporal:".$_FILES['fileUp']['tmp_name']."<br>";

            }
            if(!$bandera && copy($_FILES['fileUp']['tmp_name'],$directorio.$_FILES['fileUp']['name'])){
                $msj = "<a target='_blank' href='../../../uploads/". $_FILES['fileUp']['name']."'> Ver archivo</a>";
            }else{
                $msj .= "Error al copiar archivo";
            }


         
            $respuesta[0] = ["info"=>$rta];
            $respuesta[1] = ["rta"=>$msj];
            return $respuesta;
        }
    }
?>