<?php
function conexion_bd($cadena_conexion,$usuario,$clave){
    try {
        $bd= new PDO($cadena_conexion,$usuario,$clave);
        
    } catch (PDOException $e) {
        echo "error".$e->getMessage(); 
        
    }
    return $bd;
}

?>