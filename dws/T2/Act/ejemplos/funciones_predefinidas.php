
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
</head>
<body>
    <?php
    $var1 = 4;
    $var2 = null;
    $var3 = false;
    $var4 = 0;

    echo"var1";
    var_dump(isset($var1));
    var_dump(is_null($var1));
    var_dump(empty($var1));
    echo"<br> var2";
    var_dump(isset($var2));
    var_dump(is_null($var2));
    var_dump(empty($var2));
    echo"<br> var3";
    var_dump(isset($var3));
    var_dump(is_null($var3));
    var_dump(empty($var3));
    echo"<br>var4";
    var_dump(empty($var4));
    echo "unset";
    unset($var1);
    var_dump(isset($var4));


    echo "<br>";
    $cadena = "Guzmán, León, Ordoño";
    $arr = explode(",", $cadena);
    echo $arr[0]."<br>";
    echo $arr[1]."<br>";
    echo $arr[2],"<br>";
    ?>
</body>
</html>