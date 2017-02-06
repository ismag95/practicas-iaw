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
if (isset($_GET['nombre']) && isset($_GET['pass'])){
    $nombre=$_GET['nombre'];
    $pass=$_GET['pass'];
    if ($nombre!='' && $pass!=''){
        if ($nombre='ismael' && $pass='1234') {
            $_SESSION['correcto']=1;
            echo "bienvenido";
        }else{
            header("location:practica3-autenticacion.php");
        }
    }else{
        header("location:practica3-autenticacion.php");
    }
}else{
    header("location:practica3-autenticacion.php");
}
?>
</body>
</html>