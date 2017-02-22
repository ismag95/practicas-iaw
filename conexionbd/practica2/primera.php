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
<form action="#">
    <label for="provincia">provincia</label><br>
    <input type="text" id="provincia" name="provincia"><br>
    <button>enviar</button>
</form>
<?php
//establecemos los parametros para la conexion
$ip="127.0.0.1";
$user="root";
$pass="admin";
$database="geografia";

if (isset($_GET['provincia'])){
    $idprovincia="";
    $provincia=$_GET['provincia'];
    $con=new mysqli($ip,$user,$pass,$database);
    //creamos la consulta
    $consulta="select n_provincia from provincias WHERE nombre='$provincia' ORDER BY nombre";
    //mandamos a la bd y extraemos
    $res=$con->query($consulta);
    while($fila=$res->fetch_assoc()){
        $idprovincia= $fila['n_provincia'];
    }
}

if (isset($idprovincia)){
    //creamos la nueva consulta
    $consulta2="select * from localidades WHERE n_provincia='$idprovincia' ORDER BY nombre";
    $res2=$con->query($consulta2);
    while ($fila2=$res2->fetch_assoc()){
        echo "".utf8_encode($fila2['nombre'])." ".$fila2['poblacion']."<br>";
    }
}
?>
</body>
</html>