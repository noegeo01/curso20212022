<?php
include("funciones.php");
session_start();
$i=$_SESSION['indice'];
$num=$_SESSION['posicion'];
echo $i;
$j=0;
$contenido=array();
while ($j<=$i)
{
	
	$contenido[$j]= $_SESSION['numero'.$j];
    echo $contenido[$j]."<br>";
	$j++;
    
}
$salida=longitud_array($contenido);
print_r("La longitud de el array es ". $salida ."<br>");
$salida=num_existe_array($_SESSION['posicion'],$contenido);
print_r($salida);
$salida=media_array($contenido);
print_r($salida);
session_destroy();
?>
