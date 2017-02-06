<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php

            function tabla($filas, $columnas){
                echo "<table style='border: 2px solid black;
                                    border-collapse: collapse'>";
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
    <form action="#">
        <input type="number" id="filas" name="filas" placeholder="filas"><br>
        <input type="number" id="columnas" name="columnas" placeholder="columnas"><br>
        <button>crear</button>
    </form>
<?php
    $filas=isset($_GET['filas']);
    $columnas=isset($_GET['columnas']);
    if ($filas && $columnas){
        tabla($filas,$columnas);
    }

?>
</body>
</html>