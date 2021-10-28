<?php
    //Entrar base de datos
    $cadena_conexion = 'mysql:dbname=empresa;host=127.0.0.1';
    $usuario = 'usuario';
    $clave = '1234';
    try {
        $bd = new PDO($cadena_conexion, $usuario, $clave);
    } catch (PDOException $e) {
        echo 'Error con la base de datos: ' . $e->getMessage();
    } 
//


$nombre=$_POST[`nombre`];
$clave=$_POST['clave'];
    

    $sql = "Select rol from usuarios where   nombre=? and clave=?;";
    $result = $bd->prepare($sql);

    $result->execute(array($nombre,$clave));
    
    if( $result->rowCount()>=0 ){
        header('Location:zonaadminT.php');
    }else {
        header('Location:zonaadminF.php');
    }
    
?>