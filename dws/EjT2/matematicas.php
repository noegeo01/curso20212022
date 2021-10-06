<?php
    /*
    Almacena la funcion anterior en el fichero matematicas.php
    Crea un fichero que la incluya y la utilice
    */
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