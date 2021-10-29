<?php
require_once("persona.php");
    function introducirPer_ArrdFichero($fichero){
        $arrPEr=[];
        $fich=fopen($fichero,"r");
        while(!feof($fich)){
            fscanf($fich,"%d,%s,%s",$dni,$nombre,$apellido);
            echo "$dni,$nombre,$apellido";
            $per=new Persona($dni,$nombre,$apellido);
            array_push($arrPEr,$per);
            
            
        }
        return $arrPEr;
        fclose($fich);
    }

    $ar=introducirPer_ArrdFichero("fichero.txt");
    print_r($ar);
?>