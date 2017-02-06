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
    $numero=$_GET['numero'];
    $a=0;
    if (is_numeric($numero)){
        for ($i=2;$i<$numero;$i+=2){
            $a+=$i;
        }
        echo "$a ";
    }
    echo "<a href='practica3ejer4form.php?n=$numero'>volver </a>";
?>
</body>
</html>