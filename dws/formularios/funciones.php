<?php
    function longitud_array($array){
       
        $long=count($array);
        return $long;
    }
    
    function num_existe_array($num,$array){
        $respuesta=in_array($num,$array);
        if ($respuesta=1) {
            return true;
        }else {
            return false;
        }
        
    }
    function media_array($array){
        $i=0;
        $lon=longitud_array($array)-1;
        $suma=0;
        while ($i<=$lon) {
            $suma=$suma+$array[$i];
            $i++;
        }
        
        $media=$suma/$lon;
        return $media;
    }
    //obtener los datos de las posiciones que se encuentren en  posicion impar
    function impar_pos($array){
        $respuesta=array();
        $lon=longitud_array($array)-1;
        $i=0;
        $num=0;
        while ($i<=$lon) {
            if ($i%2==0) {
                $respuesta[$num]=$array[$i];
                $num++;
            }
            $i++;
        }
        return $respuesta;
    }
?>