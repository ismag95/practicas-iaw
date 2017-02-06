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
    for ($i=1;$i<=1000;$i++){
        $a[$i]=mt_rand(1,100);
    }
foreach ($a as $j=>$valor){
    echo "el numero $j vale $valor";
}
?>

</body>
</html>
