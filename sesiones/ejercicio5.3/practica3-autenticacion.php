<?php
    session_start();
?>

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
<form action="practica3-restringida.php">
    <label for="nombre">nombre</label><br>
    <input type="text" id="nombre" name="nombre"><br>
    <label for="pass">contraseña</label><br>
    <input type="text" id="pass" name="pass">
    <button>enviar</button>

</form>
</body>
</html>