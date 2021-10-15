<?php
session_start();
$_SESSION['indice']=0;
?>
<html>
<head>
	<title> introduccion de notas</title>
</head>
<body>
	<form action="ejercicio011.php" method="post">
    Introducir letras, números y palabras:
    <input type="text" name="num_letra_palabra" >
    <br />
    <input type="submit" value="enviar">
    </form>
</body>
</html>