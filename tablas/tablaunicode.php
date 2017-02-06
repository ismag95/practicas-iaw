<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="formato.css">
    <title>Document</title>
    <?php
    if (isset($_GET["pg"])){
        $pg=$_GET["pg"];
        if (is_numeric($pg)==false || $pg<1){
            $pg=1;
        }elseif ($pg>100){
            $pg=100;
        }
    }else{
        $pg=1;
    }
    ?>
</head>
<body>
<h1>
    <a href="tablaunicode.php?pg=<?=($pg-1)?>">&lt;</a>
    tabla unicode
    <a href="tablaunicode.php?pg=<?=($pg+1)?>">&gt;</a>
</h1>
<table>
    <?php
    const filas=20;
    const columnas=15;
    $cont=($pg-1)*200+1;
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