<?php
    /*
    Escribe una funcion que reciba un array de numeros y un numero, el limite.
    La funcion tiene que devolver un nuevo array que contenga solo los elementos 
    del array original menores que el limite.
    */

    function nuevo_array($array,$limite){
        $i=0;
        $respuesta=[];
        while ($i <= $limite) {
            if ($array[i]<$limite) {
                $respuesta[]=$array[$indice];
                $i++;
            }else {
                $i++;
            }
        }
        return $respuesta;
    }
?>
