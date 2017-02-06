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
$numeroerror=0;
if (isset($_GET['nombre'])&& isset($_GET['apellido1'])&&isset($_GET['apellido2'])&&isset($_GET['usuario'])&&isset($_GET['DNI'])&&isset($_GET['telefono'])){
    $nombre=$_GET['nombre'];
    $valinombre="/(*UTF8)^[\p{L}\s]+$/";

    $apellido1=$_GET['apellido1'];
    $apellido2=$_GET['apellido2'];
    $usuario=$_GET['usuario'];
    $valiusu="/^\p{L}[A-Za-z0-9]{6}/";

    $DNI=$_GET['DNI'];
    $validni1="/[XYZ]{1}[0-9]{7}[A-Z]{1}$/";
    $validni2="/^[0-9]{8}[A-Z]{1}$/";

    $telefono=$_GET['telefono'];
    $valitele="/^[679][0-9]{8}$/";
    if ($nombre!=''&& $apellido1!=''&&$apellido2!=''&&$usuario!=''&&$DNI!=''&&$telefono!='') {
        if (preg_match($valinombre, $nombre) && preg_match($valinombre, $apellido1)
            && preg_match($valinombre, $apellido2)&& preg_match($valitele,$telefono) && preg_match($valiusu,$usuario)
            && (preg_match($validni1,$DNI) or preg_match($validni2,$DNI))) {
            echo "lo cumple";

        } else {
            echo "no lo cumple";
        }
    }else{
        header("location:index.php");
    }
}


?>
</body>
</html>