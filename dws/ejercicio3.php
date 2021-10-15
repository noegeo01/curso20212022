<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    
    <title>Ejercicio3</title>
</head>
<body>
    <!--
        Se quiere oprdenar el array por las claves de el array
        intercambiar clave por dato 
    -->
    <?php
        $arr = array("uno"=>12,"dos"=>14,"tres"=>14,"cuatro"=>25,"cinco"=>50);

        krsort($arr);
        print_r($arr);
    ?>
</body>
</html>