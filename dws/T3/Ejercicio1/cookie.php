

<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    if ($_POST['fondo'] != " "){
        
        if(!isset($_COOKIE['fondo'])){
            $fondo=$_POST['fondo'];
            setcookie('fondo',$fondo,time()+3600*24);
            echo "Cookie establecida";
        }else {
            
            $fondo=$_COOKIE['fondo'];
            echo '<body style="background-color:',$color,';">';
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
		
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
<label for = "color">Dime el color que quieres de fondo</label> 
			
            <input type="color" value="<?php if(isset($fondo))echo $fondo;?>">
	</body>
</html>