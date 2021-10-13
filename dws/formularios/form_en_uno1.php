<?php
session_start();
/* si va bien redirige a principal.php si va mal, mensaje de error */
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    if ($_POST['numero'] !=0){
        if (!isset($_SESSION['indice'])){
            $i=0;
            $_SESSION['numero'.$i]=$_POST['numero'];
            $_SESSION['indice']=$i;
        }
        else{
            $i=$_SESSION['indice'];
            $i++;
            $_SESSION['numero'.$i]=$_POST['numero'];
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
	</head>
	<body>			
		
		<form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
			<label for = "numero">Numeros</label> 
			<input value = "<?php if(isset($numero))echo $numero;?>"
			id = "numero" name = "numero" type = "text">				
			
						
			
			<input type = "submit">
		</form>
	</body>
</html>
