<?php
    //Escribe un script para resolver ecuaciones de segundo grado, ax2+bx+c=0. Si la ecuación no
    //tiene soluciones reales, hay que mostrar un mensaje de error.

    echo"Resolver ecuaciones de segundo grado";
    $a=2;
    $b=5;
    $c=6;
    
    $nega=-1;
    $menosb=$b*$nega;
    $operacion1=pow($b,2);
    $operacion2=4*$a*$b;
    $resta=$operacion1-$operacion2;
    $raiz=pow($resta,(1/2));
    $dosa=2*$a;
    $resultado1=($menosb+$raiz)/$dosa;
    $resultado2=($menosb-$raiz)/$dosa;

    echo $a."x2"."+".$b."x".$c."=0 <br>";
    echo $resultado1."<br>".$resultado2;
    
    
?>