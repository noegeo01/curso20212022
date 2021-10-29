<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    if ($_POST['nombre'] !="final"){
        if (!isset($_SESSION['indice'])){
            $i=0;
            $nombre=$_POST['nombre'];
            
            $_SESSION['nombre'.$i]=$nombre;
            $_SESSION['indice']=$i;
        }
        else{
           
            $nombre=$_POST['nombre'];
            $i=$_SESSION['indice'];
            $i++;
            
            $_SESSION['nombre'.$i]=$nombre;
            $_SESSION['indice']=$i;
            
        }
    }
    else{
    header("Location: borrar1.php");
    }
 }   
	
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario</h1>
    <p>
        
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            Digame el nombre de la persona que quiere eliminar 
            <input type="text" name="nombre" value=<?php if(isset($nombre)) echo $nombre;?>>
            <input type="submit">
            <a href="borrar1.php">Borrar</a>
        </form>
       
        
    </p>
</body>
</html>