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
        $suma=array_sum($array);
        $totalnum=count($array);
        $media=$suma/$totalnum;
        return $media;
    }
?>