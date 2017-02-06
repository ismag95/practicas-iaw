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
<!-- Creamos el inicio de la tabla manualmente-->
<table style="border: 1px solid red">
    <?php
    $filas=$_GET['filas'];
    $columnas=$_GET['columnas'];
    //Iniciamos las filas
    for($t=0;$t<$filas;$t++){
        echo "<tr>";
        //Iniciamos el bucle de las columnas
        for($y=0;$y<$columnas;$y++){
           echo "<td style='border: 1px solid red'>hola</td>";
        }
        //Cerramos las columnas
        echo "</tr>";
    }
    ?>
    <!-- Cerramos tabla -->
</table>
</body>
</html>