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
<form action="anadir.php">
    <label for="id">id localidad</label><br>
    <input type="number" id="id" name="id"><br>
    <label for="nombre">nombre de localidad</label><br>
    <input type="text" id="nombre" name="nombre"><br>
    <label for="poblacion">poblacion</label><br>
    <input type="number" id="poblacion" name="poblacion"><br>
    <button>enviar</button>

    <?php
        if (isset($_get['error'])){
            $error=$_GET['error'];
            if ($error==0){
                echo "se añadio correctamente";
            }
            elseif ($error==1)echo "no se añadio correctamente";
        }
    ?>
</form>
</body>
</html>