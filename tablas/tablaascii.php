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
<table style="border: 1px solid black">
    <?php
    const filas=20;
    const columnas=15;
    $cont=0;
        for ($f=1;$f<=filas;$f++){
            echo "\t<tr>\n";
                for ($c=1;$c<=columnas;$c++){
                    echo "\t\t<td>$cont</td><td>".chr($cont)."</td>\n";
                    $cont++;
                }
            echo "\t</tr>\n";

        }
    ?>
</table>
</body>
</html>