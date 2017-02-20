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
$idcomunidad=$_GET['id'];
//establecemos los parametros para la conexion
$ip="127.0.0.1";
$user="root";
$pass="admin";
$database="geografia";
//ahora vamos a crear la conexion con la base de datos
$con=new mysqli($ip,$user,$pass,$database);
//creamos la consulta
$consulta="select * from provincias WHERE id_comunidad='$idcomunidad' ORDER BY nombre";
//enviamos la consulta a la bd
$resultado=$con->query($consulta);
?>
<form action="tercera.php">
    <select name="id_provincia" id="provincia">
        <?php
        while ($fila=$resultado->fetch_assoc()){
            $nombre= $fila['nombre'];
            $idprovincia=$fila['n_provincia'];
            echo "<option value='$idprovincia'>$nombre</option>";
        }

        ?>
    </select>
    <button>enviar</button>
</form>

</body>
</html>