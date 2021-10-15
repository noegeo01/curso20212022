<?php
    session_start();
    if ($_SERVER("REQUEST_METHOD")=="POST") {
        $_SESSION['posicion_num']=$_POST['posicion'];
        header("Location: resolver.php");
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Formulario de login</title>		
		<meta charset = "UTF-8">
	</head>
	<body>			
		<p>Introducimos datos</p>
		<form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
							
			<label for="nombre">Dime el nombre de la persona</label>
            <input value="<?php if(isset($nombre))echo $nombre;?>" type="text" name="nombre" id="nombre">
			<label for="apellidos">Dime su apellido</label>		
            <input value="<?php if(isset($apellido))echo $apellido;?>" type="text" name="apellido" id="apellido">
            <label for="dni"> Introduce el dni</label>
            <input value="<?php if(isset($dni))echo $dni;?>" type="text" name="dni" id="dni">
			
			<input type = "submit">
		</form>
	</body>
</html>