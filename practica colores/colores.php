<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            margin: 0;
            padding: 0;
        }
        div{
            width: 100%;
            height: 6px;
        }
    </style>
</head>
<body>
<?php
    for ($i=1;$i<=10;$i++) {
        $r = mt_rand(0, 255);
        $g = mt_rand(0, 255);
        $b = mt_rand(0, 255);
        $colores[$i]="<div style='background-color: rgb($r,$g,$b)'></div>";
    }
for ($e=1;$e<=10;$e++) {
    foreach ($colores as $j => $capa) {
        echo $capa;
    }

}
?>
</body>
</html>