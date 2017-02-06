<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
        function contarpares ($cifra){
            return (int)(($cifra-1)/2);
        }
    ?>
</head>
<body>

<?php
     echo contarpares(10);
?>
</body>
</html>