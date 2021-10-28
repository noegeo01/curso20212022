
<html>
    <head>
        <title>Usuarios</title>
        
            <style>
                td{
                    border:black 1px solid;
                }
            </style>
        
        <body>
            <h1>Usuarios</h1>
        <?php
            //Conexion BBDD
            $cadena_conexion = 'mysql:dbname=empresa;host=127.0.0.1';
            $usuario = 'usuario';
            $clave = '1234';
            try {
                $bd = new PDO($cadena_conexion, $usuario, $clave);
            } catch (PDOException $e) {
                echo 'Error con la base de datos: ' . $e->getMessage();
            } 


            $sql='Select nombre,clave,rol from usuarios';
            $result = $bd->prepare($sql);

            $consulta=$bd->query($sql);


            print "<table style='border:black 2px solid'>";
            foreach($consulta as $row){
                print "<tr>";
                print "<td >".$row["nombre"]."</td> ";
                print "<td>".$row["clave"]."</td>";
                print "</tr>";
            }
            print "</table>";
        ?>
</body>
    </head>
</html>