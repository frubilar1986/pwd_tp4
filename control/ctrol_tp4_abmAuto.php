<?php
class ctrol_tp4_abmAuto{
    //Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto

    
    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
     * @param array $param
     * @return Auto
     */
    private function cargarObjeto($param){
        $obj = null;
           
        if( array_key_exists('patente',$param) and array_key_exists('marca',$param) and array_key_exists('modelo',$param) and array_key_exists('dniDuenio',$param) ){
            $obj = new Auto();
            $objDuenio = new Persona();

            $where = "nroDni = ".$param['dniDuenio'];
            $objDuenio = Persona::listar($where);//verificar en ctrol que persona exista!
            //print_r($objDuenio);
            $obj->setear(strtoupper($param['patente']),$param['marca'],$param['modelo'],$objDuenio[0]);
        }
        return $obj;
    }

    // public function cambiarDuenio($objAuto,$objPersona){
    //     $resp = false;
    //     if($objAuto->getObjPersona()->getNroDni() != $objPersona->getNroDni()){
    //             $objAuto->setObjPersona($objPersona);
    //             $resp = true;
    //     }
    //     return $resp;
    // }
    
    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
     * @param array $param
     * @return Auto
     */
    private function cargarObjetoConClave($param){
        $obj = null;
        
        if( isset($param['patente']) ){
            $obj = new Auto();
            $obj->setear($param['patente'],$param['Marca'],$param['Modelo'],null);
        }
        return $obj;
    }
    
    
    /**
     * Corrobora que dentro del arreglo asociativo estan seteados los campos claves
     * @param array $param
     * @return boolean
     */
    
    private function seteadosCamposClaves($param){
        $resp = false;
        if (isset($param['patente']))
            $resp = true;
        return $resp;
    }
    
    /**
     * 
     * @param array $param
     */
    public function alta($param){
        $resp = false;
       // $param['id'] = null;
        $elObjtTabla = $this->cargarObjeto($param);
       //print_r($elObjtTabla);
//        verEstructura($elObjtTabla);
        if ($elObjtTabla !=null and $elObjtTabla->insertar()){
            $resp = true;
           
        }
        return $resp;
        
    }
    /**
     * permite eliminar un objeto 
     * @param array $param
     * @return boolean
     */
    public function baja($param){
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $elObjtTabla = $this->cargarObjetoConClave($param);
            if ($elObjtTabla!=null and $elObjtTabla->eliminar()){
                $resp = true;
            }
        }
        
        return $resp;
    }
    
    /**
     * permite modificar un objeto
     * @param array $param
     * @return boolean
     */
    public function modificacion($param){
       // echo "Estoy en modificacion";
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $elObjtTabla = $this->cargarObjeto($param);
            if($elObjtTabla!=null and $elObjtTabla->modificar()){
                $resp = true;
            }
        }
        return $resp;
    }
    
    /**
     * permite buscar un objeto
     * @param array $param
     * @return array
     */
    public function buscar($param){
        $where = " true ";
        if ($param <> NULL){
            if  (isset($param['patente']))
                $where.=" and Patente = '".strtoupper($param['patente'])."'";
            if  (isset($param['dniDuenio']))
                 $where.=" and DniDuenio ='".$param['dniDuenio']."'";
        }
        $arreglo = Auto::listar($where);  
        return $arreglo;
            
            
      
        
    }
    
}
?>