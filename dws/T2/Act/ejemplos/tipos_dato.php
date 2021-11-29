<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Document</title>
</head>
<body>
    <?php
    $entero=4 ;//tipo integer
    $numero=4.5;//tipo coma flotante
    $cadena="cadena";//tipo cadena de caracteres
    $bool= TRUE;//Tipo booleano

    /* Cambio de tipo de una variable*/
    $a=5;//entero
    
    
    echo gettype($a);
    echo("<br>");
    
    $a="hola";
    
    echo gettype($a);

    
    ?>

</body>
</html>