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
$_SESSION['id_usuario']="";
    if (isset($_SESSION['usuario'])){
        $usuario=$_SESSION['usuario'];

        //creo conexion con la base de datos
        //primero establezco los parametros
        $ip = "127.0.0.1";
        $user = "root";
        $pass = "admin";
        $database = "intranet";
        //creamos la conexion
        $con = new mysqli($ip, $user, $pass, $database);
        //creamos consulta para sacar los datos de los usuarios
        $consulta="select id_usuario from usuarios";
        //mandamos la consulta
        $resultado=$con->query($consulta);
        //extraemos los datos
        while ($fila=$resultado->fetch_assoc()){
            $_SESSION['id_usuario']=$fila['id_usuario'];
        }
        $iduserlogin=$_SESSION['id-usuario'];
        //creamos la consulta para sacar los mensajes del usuario que entra
        $mensajes="SELECT m.id_propietario, u1.usuario AS de,m.id_destino,u2.usuario AS para,m.texto AS mensaje FROM mensajes m
                    JOIN usuarios u1 ON m.id_propietario = u1.id_usuario
                    JOIN usuarios u2 ON m.id_destino = u2.id_usuario WHERE id_destino='$iduserlogin'";
        //paso la consulta
        $resmendestino=$con->query($mensajes);
        //muestro los mensajes
        $fila2=$resmendestino->fetch_assoc();
        echo "<p>mensaje para ".$fila2['para'].": ".$fila2['mensaje']."";
    }else{
        header("location:login.php");
    }
?>
<a href="enviarmensaje.php">enviar mensaje</a>
</body>
</html>