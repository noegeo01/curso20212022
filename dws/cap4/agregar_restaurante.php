<?php
require_once 'bd.php';
require_once 'restaurante.php';
require_once 'sesiones.php';
$bd=conexion();
comprobar_sesion();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {  
        
        $correo=$_POST['correo'];
        $clave=$_POST['clave'];
        $pais=$_POST['pais'];
        $cp=$_POST['cp'];
        $ciudad=$_POST['ciudad'];
        $direccion=$_POST['direccion'];
        $rol=$_POST['rol'];
        $res=new restaurante($correo,$clave,$pais,$cp,$ciudad,$direccion,$rol);
        echo $res->getcorreo();
        agregarrestaurante($bd,$res);
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Formulario para agregar restaurante</title>
		<meta charset = "UTF-8">
        <style>
            label,input{
                margin:2px;
            }
        </style>
	</head>
	<body>	
		<?php
        require 'cabecera.php';
        ?>
		<h1>Formulario para agregar restaurante</h1>
		<form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
			<label for = "correo">Correo electronico </label> 
			<input value = "<?php if(isset($correo))echo $correo;?>"
			id = "correo" name = "correo" type = "text">
            <br>		
			<label for = "clave">Clave</label> 
			<input id = "clave" name = "clave" type = "password" value=" <?php if(isset($clave))echo $clave;?>">
            <br>
            <label for="pais">Pais</label>
            <input value = "<?php if(isset($pais))echo $pais;?>"
			id = "pais" name = "pais" type = "text"><br>
            <label for="cp">CP</label>
            <input value = "<?php if(isset($cp))echo $cp;?>"
			id = "cp" name = "cp" type = "text">
            <br>
            <label for="ciudad">Ciudad</label>
            <input value = "<?php if(isset($ciudad))echo $ciudad;?>"
			id = "ciudad" name = "ciudad" type = "text">
            <br>
            <label for="direccion">Direccion</label>
            <input value = "<?php if(isset($direccion))echo $direccion;?>"
			id = "direccion" name = "direccion" type = "text">
            <br>
            <label for="ciudad">Rol</label>
            <input value = "<?php if(isset($rol))echo $rol;?>"
			id = "rol" name = "rol" type = "number">
            <br>
			<input type = "submit">
		</form>
	</body>
</html>
