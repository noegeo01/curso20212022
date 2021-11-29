
<?php
class Persona{
    private $DNI;
    private $nombre;
    private $apellido;

    function __construct($DNI,$nombre,$apellido){

    $this->DNI=$DNI;
    $this->nombre=$nombre;
    $this->apellido=$apellido;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getDni()
    {
        return $this->dni;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function setApellido($apellido){
        $this->apellido=$apellido;
    }
    public function setDni($dni){
        $this->dni=$dni;
    }
    public function __toString(){
        return "Persona: ".$this->nombre." ".$this->apellido;
    }
    
}
?>

