<?php

require_once('persona.php');

require_once('funcion.php');
session_start();
$i=$_SESSION['indice'];

$j=0;
$contenido=array();
while ($j<=$i) {
    $contenido[$j]=$_SESSION['per'.$i];
    $j++;
}

//Conexion Base de dtaos
$clave="1234";
$usuario="usuario";
$cadena_conexion = "mysql:dbname=empresa;host=127.0.0.1";

$bd=conexion_bd($cadena_conexion,$usuario,$clave);
//inserccion datos

if(isset($bd))
$bd->beginTransaction();
foreach($contenido as $clave=>$valor){
    $ins="insert into persona (dni,nombre,apellido) 
            values('$valor->getDni()','$valor->getNombre()','$valor->getApellido()')";
    $result=$bd->query($ins);
    if (!$result){
        echo "error : ".print_r($bd->errorinfo());
        $bd->rollback();
        echo " <br> transaccion anulada <br>";

    }else {
        $bd->commit();
    }
}
 
session_destroy();
?>