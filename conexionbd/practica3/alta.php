<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/primeras.css">
</head>
<body>
<header>
    <h1>INTRANET MENSAJERIA</h1>
</header>
<section>
    <div id="datos">
        <form action="validareg.php">
            <label for="user">usuario</label><br>
            <input type="text" name="user" id="user"><br>
            <label for="pass">password</label><br>
            <input type="text" id="password" name="password"><br>
            <label for="password2">Repite la contraseña</label><br>
            <input type="text" id="password2" name="password2"><br>
            <button>enviar</button>
            <?php
            if (isset($_GET['error'])){
                $error=$_GET['error'];
                if ($error=1062){
                    echo "usuario duplicado";
                }
            }
            ?>
        </form>
    </div>
</section>
</body>
</html>