<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    $var1=100 ;
    $var2=&$var1;//por referencia --  & --

    $var3=$var1;//Asignacion por copia
    echo "$var2<br>";//muestra 100
    $var2=300;//Cambia el valor de 100
    echo "$var1<br>";
    $var3=400; // este cambio afecta a valor 1
    echo$var1;
    ?>
</body>
</html>