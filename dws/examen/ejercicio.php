<?php
//$bd la conexion ala base de datos
//valores en la consulta a y b
    function ejercicio2($bd,$a,$b){
        $sql="select * from productos where stock between $a and $b ;";
        $result = $bd->query($sql);	
        return $result;
    }
?>