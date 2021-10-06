<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
</head>
<body>
    <?php
    $arr1=array(
        "viernes" => 22,
        "Sabado" =>  34
    );
    foreach($arr1  as $cantidad){
            $cantidad=$cantidad*2;
    }
    print_r($arr1);
    echo "<br>";
    foreach($arr1 as &$cantidad){
        $cantidad=$cantidad*2;
    }
    print_r($arr1);
    ?>
</body>
</html>