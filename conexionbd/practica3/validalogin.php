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
if (isset($_GET['usuario']) && isset($_GET['pass'])){
    $usuario=$_GET['usuario'];
    $valiusu="";
    $pass=$_GET['pass'];
    $valipass="";
    $idusuario="";
    //creo la conexion con la base de datos
    //primero establezco los parametros
    $ip = "127.0.0.1";
    $user = "root";
    $password = "admin";
    $database = "intranet";
    //creamos la conexion
    $con = new mysqli($ip, $user, $password, $database);
    //creo una consulta para saber el nombre y la pass del usuario
    $consulta="select id_usuario,usuario, password from usuarios WHERE usuario='$usuario' AND password='$pass'";
    //mando la consulta
    $res=$con->query($consulta);
    //recibo los datos
    while ($fila=$res->fetch_assoc()){
        $valiusu=$fila['usuario'];
        $valipass=$fila['password'];
        $idusuario=$fila['id_usuario'];
    }
    if ($usuario==$valiusu && $pass==$valipass){
        $_SESSION['usuario']=$usuario;
        $_SESSION['id-usuario']=$idusuario;
        header("location:principal.php");
    }else{
        header("location:login.php?error=autenticacion");
    }
}
?>
</body>
</html>