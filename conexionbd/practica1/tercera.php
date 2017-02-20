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

if (isset($_GET['id_provincia'])){
    $idprovincia=$_GET['id_provincia'];

    //ahora vamos a crear la conexion con la base de datos
    $con=new mysqli($ip,$user,$pass,$database);
    //creamos la consulta
    $consulta="select * from localidades WHERE n_provincia='$idprovincia' ORDER BY nombre";
    //enviamos la consulta a la bd
    $resultado=$con->query($consulta);
    ?>
    <form action="tercera.php">
        <select name="id_localidad" id="localidad">
            <?php
            while ($fila=$resultado->fetch_assoc()){
                $nombre= $fila['nombre'];
                $id_localidad=$fila['id_localidad'];
                echo "<option value='$id_localidad'>$nombre</option>";
            }
            ?>
        </select>
        <button>enviar</button>
    </form>
    <?php
    if (isset($_GET['id_localidad'])){
        echo "hola";
    }
}else{
    $idlocal=$_GET['id_localidad'];
    //ahora vamos a crear la conexion con la base de datos
    $con=new mysqli($ip,$user,$pass,$database);
    //creamos la consulta
    $consulta="select * from localidades WHERE id_localidad='$idlocal' ORDER BY nombre";
    //enviamos la consulta a la bd
    $resultado=$con->query($consulta);
    //mostramos los resultados
    while ($fila=$resultado->fetch_assoc()){
        echo $fila['poblacion'];
    }

}

?>
</body>
</html>