<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    
</head>
<body>
    <?php
    $arr1 = [
        0 => 444,
        1 => 222,
        2 => 333,
    ];

    print_r($arr1);
    echo"<br>"."pos 0: ".$arr1[0]."<br>";
    $arr1[0]=555;
    print_r($arr1);
    echo("<br>");
    $arr2= array(
        "1111A" => "Juan Vera Ochoa",
        "1112A" => "Mariana Mesa Cabexa",
        "1113a" => "Ana Puertas Peral"
    );
    foreach($arr2 as $clave=>$valor){
    echo "Elnombre es" . $clave .  "el apellido es " .$valor ."<br>";
    }
    

    $arr2["1113A"] = "Ana Puertas Segundo";

    ?>
</body>
</html>