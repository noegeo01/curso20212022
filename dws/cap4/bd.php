<?php
function leer_config($nombre, $esquema){
	$config = new DOMDocument();
	$config->load($nombre);
	$res = $config->schemaValidate($esquema);
	if ($res===FALSE){ 
	   throw new InvalidArgumentException("Revise fichero de configuración");
	} 		
	$datos = simplexml_load_file($nombre);	
	$ip = $datos->xpath("//ip");
	$nombre = $datos->xpath("//nombre");
	$usu = $datos->xpath("//usuario");
	$clave = $datos->xpath("//clave");	
	$cad = sprintf("mysql:dbname=%s;host=%s", $nombre[0], $ip[0]);
	$resul = [];
	$resul[] = $cad;
	$resul[] = $usu[0];
	$resul[] = $clave[0];
	return $resul;
}
function conexion(){
	$res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
	echo $res[0] . $res[1]. $res[2];
	$bd = new PDO($res[0], $res[1], $res[2]);

	return $bd;
}
function agregarrestaurante($bd,$restaurante){
	$sql='insert into restaurantes(correo,clave,pais,cp,ciudad,direccion,rol) values (? ,?, ?, ?, ?, ?, ?)';
	$result = $bd->prepare($sql);

	$correo=$restaurante->getcorreo();
	$clave=$restaurante->getclave();
	$pais=$restaurante->getpais();
	$cp=$restaurante->getcp();
	$ciudad=$restaurante->getciudad();
	$direccion=$restaurante->getdireccion();
	$rol=$restaurante->getrol();
	$result->execute(array($correo,$clave,$pais,$cp,$ciudad,$direccion,$rol));

	//Comprobar errores
	if($result) {
        echo $result->rowCount();
		echo "insert correcto <br>";
		echo "Filas insertadas: " . $result->rowCount() . "<br>";
       
	}else {
            echo "Estoy dentro del error<br>";
            print_r( $bd -> errorinfo());
            $bd->rollback();
           }	
}
function comprobarcategoria($bd,$categoria)
{
	

	$ins="Select * from `categorias` where `codcat` =$categoria ";
	$result=$bd->query($ins);
	$num=$result->rowCount();

	echo $num;
	return $num ;
}
function agregarproducto($bd,$producto){

	

	$nombre=$producto->getnombre();
	$descripcion=$producto->getdescripcion();
	$peso=$producto->getpeso();
	$stock=$producto->getcategoria();
	$categoria=$producto->getcategoria();

	
	$existe=comprobarcategoria($bd,$categoria);
	
	echo ' <br> existe :'.$existe;
	if($existe>0) {
		
		$sql='insert into productos(nombre,descripcion,peso,stock ,categoria) values(?,?,?,?,?) ';
		$result=$bd->prepare($sql);
        $result->execute(array($nombre,$descripcion,$peso,$stock,$categoria));
		if($result) {
			echo $result->rowCount();
			echo "insert correcto <br>";
			
		   
		}else {
				echo "Estoy dentro del error<br>";
				print_r( $bd -> errorinfo());
				$bd->rollback();
			   }
       
	}else {
            echo "No existe ninguna categoria : ".$categoria." <br>";
            
           }

}

function comprobar_usuario($nombre, $clave,$bd){
	/* $res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
	$bd = new PDO($res[0], $res[1], $res[2]); */
	$ins = "select codRes, correo from restaurantes where correo = '$nombre' 
			and clave = '$clave'";
	$resul = $bd->query($ins);	
	if($resul->rowCount() === 1){		
		return $resul->fetch();		
	}else{
		return FALSE;
	}
}
function cargar_categorias($bd){
	/* $res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
	$bd = new PDO($res[0], $res[1], $res[2]); */
	$ins = "select codCat, nombre from categorias";
	$resul = $bd->query($ins);	
	if (!$resul) {
		return FALSE;
	}
	if ($resul->rowCount() === 0) {    
		return FALSE;
    }
	//si hay 1 o más
	return $resul;	
}
function cargar_categoria($codCat,$bd){
	/* $res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
	$bd = new PDO($res[0], $res[1], $res[2]); */
	$ins = "select nombre, descripcion from categorias where codcat = $codCat";
	$resul = $bd->query($ins);	
	if (!$resul) {
		return FALSE;
	}
	if ($resul->rowCount() === 0) {    
		return FALSE;
    }	
	//si hay 1 o más
	return $resul->fetch();	
}
function cargar_productos_categoria($codCat,$bd){
	/* $res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
	$bd = new PDO($res[0], $res[1], $res[2]); */	
	$sql = "select * from productos where categoria  = $codCat";	
	$resul = $bd->query($sql);	
	if (!$resul) {
		return FALSE;
	}
	if ($resul->rowCount() === 0) {    
		return FALSE;
    }	
	//si hay 1 o más
	return $resul;			
}
// recibe un array de códigos de productos
// devuelve un cursor con los datos de esos productos
function cargar_productos($codigosProductos,$bd){
	/* $res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
	$bd = new PDO($res[0], $res[1], $res[2]); */
	$texto_in = implode(",", $codigosProductos);
	$ins = "select * from productos where codProd in($texto_in)";
	$resul = $bd->query($ins);	
	if (!$resul) {
		return FALSE;
	}
	return $resul;	
}
function insertar_pedido($carrito, $codRes,$bd){
	/* $res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
	$bd = new PDO($res[0], $res[1], $res[2]); */
	$bd->beginTransaction();	
	$hora = date("Y-m-d H:i:s", time());
	// insertar el pedido
	$sql = "insert into pedidos(fecha, enviado, restaurante) 
			values('$hora',0, $codRes)";
	$resul = $bd->query($sql);	
	if (!$resul) {
		return FALSE;
	}
	// coger el id del nuevo pedido para las filas detalle
	$pedido = $bd->lastInsertId();
	// insertar las filas en pedidoproductos
	foreach($carrito as $codProd=>$unidades){
		$sql = "insert into pedidosproductos(Pedido, Producto, Unidades) 
		             values( $pedido, $codProd, $unidades)";			
		 $resul = $bd->query($sql);	
		if (!$resul) {
			$bd->rollback();
			return FALSE;
		}
	}
	$bd->commit();
	return $pedido;
}

