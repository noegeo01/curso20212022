<?php
    require_once('persona.php');
    function insert_personas_fichero($arrPer,$fichero){
        $fich=fopen($fichero,"w+");
        foreach ($arrPer as $key => $valor) {
            $dni= $valor->getdni();
            fputs($fich,$dni.",");
            $nombre= $valor->getnombre();
            fputs($fich,$nombre.",");
            $apellido=$valor->getapellido();
            fputs($fich,$apellido."\n");
            
        }
        fclose($fich);
        
    }

    $i=0;
    $arrPer=array();
    while($i<4){
        $per=new Persona($i,"juan","martinez");
        array_push($arrPer,$per);
        $i++;
    }
    print_r($arrPer);
    insert_personas_fichero($arrPer,'fichero.txt');


?>