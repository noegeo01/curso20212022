<?php
    /*
    Escribe una funcion que reciba una cadena y comprueba si es palindromo
    */
    function comprobarPalindromo($cadena){
        $cadena_invertida=strrev($cadena);
        

        if (strcmp($cadena,$cadena_invertida)==0) {
            $respuesta="Es palindromo";
            return $respuesta;
        } else {
            $respuesta="No es palindromo";
            return $respuesta;
        }
        
    }

?>