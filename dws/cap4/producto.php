<?php
class Producto{
        private $nombre;
        private $descripcion;
        private $peso;  
        private $stock;
        private $categoria;
        

        function __construct($nombre,$descripcion,$peso,$stock,$categoria){
            $this->nombre=$nombre;
            $this->descripcion=$descripcion;
            $this->peso=$peso;
            $this->stock=$stock;
            $this->categoria=$categoria;
        }
        function getnombre(){
            return $this->nombre;
        }
        function getdescripcion(){
            return $this->descripcion;
        }
        function getpeso(){
            return $this->peso;
        }
        function getstock(){
            return $this->stock;
        }
        function getcategoria(){
            return $this->categoria;
        }
       
        function setnombre($nombre){
            $this->nombre=$nombre;
       }
       function setdescripcion($descripcion){
            $this->descripcion=$descripcion;
       }
      function setpeso($peso){
            $this->peso=$peso;
       }
       function setstock($stock){
        $this->stock=$stock;
        }
       function setcategoria($categoria){
        $this->categoria=$categoria;
        }
        
    }
?>