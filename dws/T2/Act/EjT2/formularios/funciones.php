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
    function desplazar_derecha($num,$pos){
        
        $posicion2=count($pos)-1;//array de posiciones
        $posicion1=count($num)-1;//array de numeros.el original
        $i=0;
        $i2=0;//el de posiciones
        
        while ($i2<=$posicion2) {
            $posiciones=$pos[$i2];
            $aux=$posicion1;//lo fijo para la cantidad de datos de el array original
            while ($posiciones<=$posicion1) {
                $num[$posicion1+1]=$num[$posicion1];//posicion sig de la longitud le pone el
                $posicion1=$posicion1-1;

            }
            $num[$posiciones]=0;//Escribimos el cero en la posicion
            $posicion1=$aux+1;//long nurva array
            $i2++;
        }
    }
    
    function desplazar_izquierda($anum,$apos){




         $posicion1=count($anum);
        $posicion2=count($pos);
        $i1=0;
        $i2=0;


        while ($i2<=$posicion2) {
            
        }
/*
        while ($i1<=$posicion2) {
            $posiciones=$apos[$i2];
            while ($posiciones<=$num[$posicion1]) {
                $anum[$i1]
            }
              $ar[$i] = $ar[$len-$i-1];
              $ar[$len-$i-1] = $temp;
            
        } */
    }
?>
