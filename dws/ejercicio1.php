<!-- Dado una serie de numeros introducidos por teclado que terminan en 0(fin de la entrada),por teclado
cual es laterminacion de la entrada de datos es 0, me piden calcular elminimo y el maximo de esos 
numeros que he introducidos
2,1,3,15,14,10,12,0 
Sacar aquellos numerosque estan en la posicion impar
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
</head>
<body>
    <?php
    $arr1=array(2,1,3,8,15,14,13,9,12);
    $impar=array();
    $min=1000;
    $max=0;
    $lon=count($arr1);
    

    
    for ($i=0;$i<$lon;$i++) {
        
        if ($arr1[$i]>$max) {
                $max=$arr1[$i];
            }   
        if ($arr1[$i]<$min) {
            $min=$arr1[$i];
            }
      
    }
    
    echo" El minimo es ".$min;
    echo"<br>";

    echo" El maximo es " .$max;
    
    ?>
</body>
</html>