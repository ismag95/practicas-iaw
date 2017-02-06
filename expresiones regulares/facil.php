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
    $texto="holad hola Año";
    $exp="/(*UTF8)Ñ/i"; //en idioma español, hay qu eponer *UTF8 para validarlo bien

if (preg_match($exp,$texto)){
    echo "lo cumple";
}else{
    echo "no lo cumple";
}

?>
</body>
</html>