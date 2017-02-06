<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
            margin: 5px;
        }
        td{
            border:1px solid black;
        }
    </style>
    <?php

    function tabla($filas, $columnas){
        echo "<table>";
        for ($i = 1; $i <= $filas; $i++) {
            echo "<tr>";
            for ($a = 1; $a <= $columnas; $a++) {
                echo "<td style='border: 2px solid black'>hola</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }

    ?>
</head>
<body>
<?php
    for ($e=1;$e<=500;$e++){
        tabla(7,8);
    }

?>
</body>
</html>