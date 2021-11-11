<?php
require_once 'bd.php';
require_once 'producto.php';
require_once 'sesiones.php';
$bd=conexion();
comprobar_sesion();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {  
        
        $nombre=$_POST['nombre'];
        $descripcion=$_POST['descripcion'];
        $peso=$_POST['peso'];
        $stock=$_POST['stock'];
        $categoria=$_POST['categoria'];
        
        $pro=new Producto($nombre,$descripcion,$peso,$stock,$categoria);
        
        agregarproducto($bd,$pro);
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Formulario para agregar producto</title>
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
		<h1>Formulario para agregar producto</h1>
		<form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
			<label for = "nombre">Nombre de el producto </label> 
			<input value = "<?php if(isset($nombre))echo $nombre;?>"
			id = "nombre" name = "nombre" type = "text">
            <br>		
			<label for = "descripcion">descripcion</label> 
			<input id = "descripcion" name = "descripcion" type = "text" value=" <?php if(isset($descripcion))echo $descripcion;?>">
            <br>
            <label for="peso">Peso</label>
            <input value = "<?php if(isset($peso))echo $peso;?>"
			id = "peso" name = "peso" type = "text"><br>
            <label for="stock">stock</label>
            <input value = "<?php if(isset($stock))echo $stock;?>"
			id = "stock" name = "stock" type = "text">
            <br>
            <label for="categoria">Categoria</label>
            <input value = "<?php if(isset($categoria))echo $categoria;?>"
			id = "categoria" name = "categoria" type = "text">
            <br>
			<input type = "submit">
		</form>
	</body>
</html>
