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
    if (isset($_GET['n'])){
    $numero=$_GET['n'];
    }else{
        $numero="";
    }
?>
<form action="practica3ejer4.php">
    <label for="numero">numero</label>
    <input type="text" id="numero" name="numero" value="<?= $numero ?>">
    <button>enviar</button>
</form>
</body>
</html>