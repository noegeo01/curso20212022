<?php
    class Persona{
    private $dni;
    private $nombre;
    private $apellido;  
    function __construct($dni,$nombre,$apellido){
        $this ->dni=$dni;
        $this->nombre=$nombre;
        $this->apellido=$apellido;
    }
    function getdni(){
        return $this->dni;
    }
    function getnombre(){
        return $this->nombre;
    }
    function getapellido(){
        return $this->apellido;
    }
    function setdni($dni){
         $this->dni=$dni;
    }
    function setnombre($nombre){
         $this->dni=$nombre;
    }
   function setapellido($apellido){
         $this->dni=$apellido;
    }
    function  __toString(){
    return "Persona : ".$this->dni." ".$this->nombre. " ".$this->apellido;
    }
}
?>
