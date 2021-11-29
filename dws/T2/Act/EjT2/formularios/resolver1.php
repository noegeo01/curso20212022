<?php
session_start();
require_once("formularios/resolver.php");
$i=$_SESSION['indice'];
$j=0;
$contenido=array();
while ($j<=$i) {
    $contenido[$i]=$_SESSION['numero'.$j];
    echo $contenido[$j]."<br>";
    $j++;
}
$tamano=longitud_array($contenido);
echo "El tamaño de el array es".$tamano;
session_destroy();
?>
