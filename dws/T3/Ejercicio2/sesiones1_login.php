<?php

function comprobar_usuario($nombre,$clave){
    if($nombre === "usuario" and $clave === "1234"){
        $usu[`nombre`] = "usuario";
        $usu[`rol`]=0;
        return $usu;
    }elseif ($nombre === "admin" and $clave === "1234") {
        $usu[`nombre`] = "admin";
        $usu[`rol`]=1;
        return $usu;
    }else return false;
}

if($_SERVER["REQUEST_METHOD"]== "POST"){
    $usu=comprobar_usuario($_POST[`usuario`],$_POST[`clave`]);
    if ($usu==FALSE) {
        $err=TRUE;
        $usuario=$_POST[`usuario`];
    } else {
        session_start();
        $_SESSION[`usuario`]=$_POST[`usuario`];
        header("Location: sesiones1_principal.php");
    }
    
}

?>

<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
    if(isset($_GET["redirigido"])){
        echo "<p>Haga el login para continuar</p>";
    }
    ?>
    <?php
    if(isset($err)and $err == true){
        echo "<p>Revise el usuario y contraseña</p>";
    }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    usuario
    <input type="text" name="usuario" id="usuario" value="<?php if(isset($usuario)) echo $usuario;?>">
    clave
    <input type="password" name="clave" id="clave" >
    <input type="submit">
    </form>
    
</body>
</html>