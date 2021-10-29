<?php
session_start();
 $i=$_SESSION['indice'];

//Entrar base de datos
    $cadena_conexion = 'mysql:dbname=empresa;host=127.0.0.1';
    $usuario = 'usuario';
    $clave = '1234';
    try {
        $bd = new PDO($cadena_conexion, $usuario, $clave);
    } catch (PDOException $e) {
        echo 'Error con la base de datos: ' . $e->getMessage();
    } 
    
    //Obtencion de los datos de el formulario
    $j=0;
    
    
    while ($j<=$i)
    {
	    $arr[$j]= $_SESSION['nombre'.$j];
	    $j++;
    
    }
    session_destroy();
    //Sentencia SQL
    $bd->beginTransaction();
    $sql = "Delete  from persona where nombre=?;";
    $result = $bd->prepare($sql);
    foreach($arr as $clave=>$valor){
        
        $result->execute(array($valor));
        if ($result) {
            echo "delete correcto <br>";
            echo "Filas borradas : ".$result->rowCount()."<br>";
        }
    }
    $bd->commit();
    
    
    
    
    /*  */
    
?>