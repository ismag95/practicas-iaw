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
$r=255;
$g=255;
$b=255;
for ($i=1;$i<=2000;$i++){
    echo "<p style='color:rgb($r,$g,$b)'>hola</p>";
    $r--;
    $g--;
    $b--;
}
?>
</body>
</html>