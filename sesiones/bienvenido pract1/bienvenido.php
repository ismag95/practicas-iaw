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
    if (isset($_SESSION['nombre'])){
        if ($_SESSION['nombre']="ismael"){
            echo "bienvenido";
        }
    }else{
        header("location:login.php");
    }

?>
</body>
</html>