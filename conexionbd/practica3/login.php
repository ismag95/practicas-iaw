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
<form action="validalogin.php">
    <label for="usuario">usuario</label><br>
    <input type="text" id="usuario" name="usuario"><br>
    <label for="pass" id="pass">password</label>
    <input type="text" id="pass" name="pass"><br>
    <button>enviar</button>
    <?php
    if (isset($_GET['error'])){
        $error=$_GET['error'];
        if ($error="autenticaion"){
            echo "usuario o contraseña mal";
        }
    }
    ?>
</form>
</body>
</html>