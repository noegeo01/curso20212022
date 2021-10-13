<?php
require_once("funcion/funciones.php");
session_start();
$i=$_SESSION['indice'];
$i=$i-2;
$j=0;
$contenido=array();
while ($j<=$i)
{
	array_push($contenido,$_SESSION['num_letra_palabra'.$j]);
	//$contenido[$j]= $_SESSION['num_letra_palabra'.$j];/
	$j++;
}
$salida=repeticiones($contenido);
print_r($salida);
$salida=longitud_array($contenido);
print_r($salida);
$salida=num_existe_array(3,$contenido);
print_r($salida);
?>