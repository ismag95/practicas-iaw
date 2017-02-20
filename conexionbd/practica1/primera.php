<?php
    session_start();
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
//establecemos los parametros para la conexion
$ip="127.0.0.1";
$user="root";
$pass="admin";
$database="geografia";
//ahora vamos a crear la conexion con la base de datos
$con=new mysqli($ip,$user,$pass,$database);
//creamos la consulta
$consulta="select * from comunidades ORDER BY nombre";
//enviamos la consulta a la bd
$resultado=$con->query($consulta);
?>
<form action="segunda.php">
    <select name="id" id="comunidad">
        <?php
        while ($fila=$resultado->fetch_assoc()){
            $nombre= $fila['nombre'];
            $idcomunidad=$fila['id_comunidad'];
            echo "<option value='$idcomunidad'>$nombre</option>";
        }

        ?>
    </select>
    <button>enviar</button>
</form>

</body>
</html>