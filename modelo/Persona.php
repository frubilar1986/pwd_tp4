<?php
class Persona {
        private $id;
        private $nroDni;
        private $apellido;
        private $nombre;
        private $fechaNac;
        private $telefono;
        private $domicilio;
        private $msjOp;
    

        public function __construct(){

            $this->$nroDni="";
            $this->$apellido = "";
            $this->$nombre = "";
            $this->$fechaNac = "";
            $this->$telefono = "";
            $this->$domicilio = "";
            $this->$msjOp = "";

        }

        public function setear($dni,$ape,$nombr,$fechNac,$telefono,$domicilio){
            $this->setNroDni($dni);
            $this->setApe($ape);
            $this->setNombrei($dni);
            $this->setFechNac($dni);
            $this->setNroDni($dni);
            $this->setNroDni($dni);
        }

        public function getNroDni(){
            return $this->$nroDni;
        }
        public function setNroDni($dni){
            $this->$nroDni = $dni;
        }
        public function getApellidoi(){
            return $this->$apellido;
        }
        public function setNroDni($dni){
            $this->$nroDni = $dni;
        }
        public function getNroDni(){
            return $this->$nroDni;
        }
        public function setNroDni($dni){
            $this->$nroDni = $dni;
        }
        public function getNroDni(){
            return $this->$nroDni;
        }
        public function setNroDni($dni){
            $this->$nroDni = $dni;
        }
        public function getNroDni(){
            return $this->$nroDni;
        }
        public function setNroDni($dni){
            $this->$nroDni = $dni;
        }
        public function getNroDni(){
            return $this->$nroDni;
        }
        public function setNroDni($dni){
            $this->$nroDni = $dni;
        }
   
    
    ?> 
