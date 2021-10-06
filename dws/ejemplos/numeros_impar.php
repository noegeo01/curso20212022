<!-- 
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
   
    $lon=count($arr1);
    

    
    for ($i=0;$i<$lon;$i++) {
        
        if ($i%2!=0) {
              echo "El numero ".$arr1[$i]." esta en una posicion impar"."<br>";
            }   
       
    }
    
    
    
    ?>
</body>
</html>