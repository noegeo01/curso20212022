<?php
    //Crea una función para resolver la ecuación de segundo grado. Esta función recibe los 
    //coeficientes de la ecuación y devuelve un array con las soluciones. Si no hay soluciones 
    //reales, devuelve false

    function resolverEcua_grado2($a,$b,$c)
    {
        

        $nega=-1;
        $menosb=$b*$nega;
        $operacion1=pow($b,2);
        $operacion2=4*$a*$b;
        $resta=$operacion1-$operacion2;
        $raiz=pow($resta,(1/2));
        $dosa=2*$a;
        $resultado1=($menosb+$raiz)/$dosa;
        $resultado2=($menosb-$raiz)/$dosa;
        if ($dosa>0) {
            $respuestas=array($resultado1,$resultado2);
        return $respuestas;
        }else {
            $respuesta=false;
            return $respuesta;
        }
        
    }
?>
