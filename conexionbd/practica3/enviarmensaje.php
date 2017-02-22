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
    //creo conexion con la base de datos
    //primero establezco los parametros
    $ip = "127.0.0.1";
    $user = "root";
    $pass = "admin";
    $database = "intranet";
    //creamos la conexion
    $con = new mysqli($ip, $user, $pass, $database);
    //creamos consulta para sacar los datos de los usuarios
    $consulta="select id_usuario, usuario from usuarios";
    //la mando
    $resultado=$con->query($consulta);

?>
<form action="#">
    <label for="destino">mensaje para:</label><br>
    <select name="destino" id="destino">
        <?php
        while ($fila=$resultado->fetch_assoc()){
            $id=$fila['id_usuario'];
            $usr=$fila['usuario'];
            echo "<option value='$id'>".$usr."</option>";
        }
        ?>
    </select><br>
    <textarea name="mensaje" id="mensaje" cols="30" rows="10"></textarea><br>
    <button>enviar</button>
</form>

<?php
if (isset($_SESSION['usuario'])){
    $usu=$_SESSION['id-usuario'];
    if (isset($_GET['destino']) && isset($_GET['mensaje'])){
        $dest=$_GET['destino'];
        $mens=$_GET['mensaje'];
        echo $dest;
        echo $usu;
        //creo la consulta para insertar el dato en la bd
        $insmensaje="insert into mensajes (texto, id_propietario, id_destino) VALUES ('$mens',$usu,$dest)";
        //mando la consulta a la base de datos
        $con->query($insmensaje);
    }else{
        echo "no hay nada";
    }
}
?>
</body>
</html>