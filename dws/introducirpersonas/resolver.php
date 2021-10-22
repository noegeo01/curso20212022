<?php
session_start();
require_once('persona.php');
$i=$_SESSION['indice'];

$j=0;
$contenido=array();
while ($j<=$i) {
    $contenido[$j]=$_SESSION['per'.$i];
    $j++;
}
$j=0;
while ($j<=$i) {
    $per=$contenido[$j]->getNombre();
    print_r($per."<br>");
    $j++;
}
print_r ($contenido[$j])->getNombre();
session_destroy();
?>