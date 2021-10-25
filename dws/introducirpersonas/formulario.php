<?php
require_once('persona.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    if ($_POST['dni'] !=0){
        if (!isset($_SESSION['indice'])){
            $i=0;
            $dni=$_POST['dni'];
            $nombre=$_POST['nombre'];
            $apellido=$_POST['apellido'];
            $per=new Persona($dni,$nombre,$apellido);
            $_SESSION['per'.$i]=$per;
            $_SESSION['indice']=$i;
        }
        else{
            $i=$_SESSION['indice'];
            $dni=$_POST['dni'];
            $nombre=$_POST['nombre'];
            $apellido=$_POST['apellido'];
            $per=new Persona($dni,$nombre,$apellido);
            $_SESSION['per'.$i]=$per;
            $i++;
            $_SESSION['indice']=$i;
            
        }
    }
    else{
    header("Location: resolver.php");
    }
 }   

?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulario de login</title>		
    <meta charset = "UTF-8">
    <style>
        h1{
            border:black 1px solid;
            background-color:skyblue;
        }
        form{
            border:black 1px solid;
        }
    </style>
</head>
<body>	
    <h1 >Formulario</h1>		
    <p>Introducimos datos</p>
    <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
                        
        <label for="nombre">Dime el nombre de la persona</label>
        <input value="<?php if(isset($nombre))echo $nombre;?>" type="text" name="nombre" id="nombre">
        
        <br>
        <label for="apellidos">Dime su apellido</label>		
        <input value="<?php if(isset($apellido))echo $apellido;?>" type="text" name="apellido" id="apellido">
        <br>
        <label for="dni"> Introduce el dni</label>
        <input value="<?php if(isset($dni))echo $dni;?>" type="text" name="dni" id="dni">
        
        <input type = "submit">
        <button>
            <a href="resolver.php">Resolver</a>
        </button>
        <button type="reset">Limpiar</button>
    </form>
</body>
