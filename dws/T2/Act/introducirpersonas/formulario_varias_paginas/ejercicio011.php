<?php
session_start();
$i=$_SESSION['indice'];
if(!empty($_POST['num_letra_palabra'])) 
{
	$_SESSION['num_letra_palabra'.$i]=$_POST['num_letra_palabra'];
	
	$i++;
	$_SESSION['indice']=$i;
	
}
if ($_POST['num_letra_palabra'] <0)
{
	header("Location:ejercicio111.php");

}
?>
<html>
<head>
	<title> introduccion de notas</title>
</head>
<body>
	<form action="ejercicio011.php" method="post">
    	Introducir letras, números y palabras: <br />
        <input type="text" name="num_letra_palabra" /> <br/>
        <input type="submit" value="enviar" />
    </form>
</body>
</html>