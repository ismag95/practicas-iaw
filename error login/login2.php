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
    $nombre=$_POST['nombre'];
    $pass=$_POST['pass'];
if ($nombre="admin" && $pass="1234"){
    echo "<p>usuario logueado</p>";
}else{
    echo "<p>no has introducido bien los datos</p>";
}
?>
</body>
</html>