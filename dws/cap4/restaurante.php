<?php
    class Restaurante{
        private $correo;
        private $clave;
        private $pais;  
        private $cp;
        private $ciudad;
        private $direccion;
        private $rol;

        function __construct($correo,$clave,$pais,$cp,$ciudad,$direccion,$rol){
            $this->correo=$correo;
            $this->clave=$clave;
            $this->pais=$pais;
            $this->cp=$cp;
            $this->ciudad=$ciudad;
            $this->direccion=$direccion;
            $this->rol=$rol;
        }
        function getcorreo(){
            return $this->correo;
        }
        function getclave(){
            return $this->clave;
        }
        function getpais(){
            return $this->pais;
        }
        function getcp(){
            return $this->cp;
        }
        function getciudad(){
            return $this->ciudad;
        }
        function getdireccion(){
            return $this->direccion;
        }
        function getrol(){
            return $this->rol;
        }
        function setcorreo($correo){
            $this->correo=$correo;
       }
       function setclave($clave){
            $this->clave=$clave;
       }
      function setpais($pais){
            $this->pais=$pais;
       }
       function setcp($cp){
        $this->cp=$cp;
        }
       function setciudad($ciudad){
        $this->ciudad=$ciudad;
        }
       function setdireccion($direccion){
        $this->direccion=$direccion;
        }
        function setrol($rol){
            $this->rol=$rol;
        }
        
    }
?>