<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="comprobacion.php" method="POST">
    usuario
    <input type="text" name="usuario" id="usuario" value="<?php if(isset($usuario)) echo $usuario;?>">
    clave
    <input type="password" name="clave" id="clave" value=<?php if(isset($clave)) echo$clave;?>>
    <input type="submit">
    </form>
</body>
</html>

   