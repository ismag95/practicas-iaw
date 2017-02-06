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
            text-align: center;
        }
        td{
            border: 2px solid black;
        }
    </style>
    <?php
        function dibujar ($a){
            echo "<table>";
                foreach ($a as $indice=>$valor){
                    echo "<tr>";
                        echo "<td style=''>$indice</td><td>$valor</td>";
                    echo "</tr>";
                }
            echo "</table>";
        }
    ?>
</head>
<body>
<?php
    $a=array(
        "renault"=>"megane",
        "bmw"=>"320d",
        "peugeot"=>"405",
        "mercedes"=>"220cdi",
        "audi"=>"a4",
        "ford"=>"focus",
        "aston martin"=>"vanquish",
        "seat"=>"toledo",
    );

echo dibujar($a);
?>
</body>
</html>