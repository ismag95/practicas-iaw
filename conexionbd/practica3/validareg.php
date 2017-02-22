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
<?php
//voy a validar que recojo los datos
    if (isset($_GET['user']) && isset($_GET['password']) && isset($_GET['password2'])) {
        $usuario = $_GET['user'];
        $password1 = $_GET['password'];
        $password2 = $_GET['password2'];
        if ($password1==$password2){
        //hago la conexion a la base de datos
        //primero establezco los parametros
            $ip = "127.0.0.1";
            $user = "root";
            $pass = "admin";
            $database = "intranet";
        //creamos la conexion
            $con = new mysqli($ip, $user, $pass, $database);
        //compruebo que he conectado
            if ($con->connect_error) {
                echo "<p1>$con->connect_errno, $con->connect_error</p1>";
            } else {
                //si he conectado creo la query
                $insert = "insert into usuarios (usuario,password)VALUES ('$usuario','$password1')";
                //ahora mandamos la query a la base de datos
                $con->query($insert);
                $_SESSION['usuario']=$usuario;
                header("location:principal.php");
                if ($con->error){
                    $errorduplicado=$con->errno;
                }
                if (isset($errorduplicado)){
                    header("location:alta.php?error=$errorduplicado");
                }
            }
        }
    }
?>
</body>
</html>