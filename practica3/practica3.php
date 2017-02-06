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
if (isset($_GET['numero'])){
    $numero=$_GET['numero'];
    if (is_numeric($numero)){
        for ($i=1;$i<=$numero;$i++){
            echo "<p>*</p>";
        }
    } else{
        echo "<p>no es un numero</p>";
    }
}
else{
    echo "<p>NO HAY NUMERO</p>";
}
?>
</body>
</html>