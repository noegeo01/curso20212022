<?php
    function manejadorErrores($errno,$str,$file,$line){
        echo "ocurrio el error : $errno";
    }
    set_error_handler("manejadorErrores");
    $a=$b;
?>