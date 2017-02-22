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
if (isset($_GET['nombre']) && isset($_GET['poblacion']) && isset($_GET['id'])){
    $nombre=$_GET['nombre'];
    $poblacion=$_GET['poblacion'];
    $conexion= new mysqli("localhost","root","admin","geografia");
    if ($conexion->connect_error){
        echo "<p1>$conexion->connect_errno, $conexion->connect_error</p1>";
    }
    else{
        $sql="insert into localidades VALUES ($id,'$nombre',$poblacion)";
        $conexion->query($sql);
        if ($conexion->affected_rows==1){
            header("location:index.php?error=0");
        }else{
            header("location:index.php?error=0");
        }
        $conexion->close();
    }
}else{
    header("location:index.php");
}
?>
</body>
</html>